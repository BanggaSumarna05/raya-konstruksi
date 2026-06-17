# Design Document — Lighthouse Performance Fix

## Overview

This document describes the technical design for six targeted changes to improve the Lighthouse performance score of rayakonstruksi.com (currently: Performance 59, CLS 0.74, LCP 1.5 s, Speed Index 4.7 s on mobile).

The site stack is **Laravel 11 + Inertia.js + Vue 3 + Vite 5 + Bootstrap 5**. Assets are served from two sources: npm-bundled assets built by Vite (`resources/js/`, `resources/css/`) and legacy vendor files served directly from `public/assets/vendor/`. All six requirements are surgical changes — no architecture refactors, no new libraries beyond `terser`.

### Key Codebase Facts

| Fact | Value |
|---|---|
| Swiper in `package.json` | **No** — loaded as `public/assets/vendor/swiper/swiper-bundle.min.js` |
| AOS in `package.json` | **No** — loaded as `public/assets/vendor/aos/` |
| Bootstrap Icons | Loaded from Cloudflare CDN in `app.blade.php` |
| Blocking CSS today | `main.css` + `raya-design-system.css` only — all other CSS already async |
| Swiper loaded twice | CDN JS + CSS (`cdnjs.cloudflare.com/Swiper/11.0.5`) AND local vendor JS |
| `1career.vue` Swiper usage | `new Swiper(...)` in `mounted()` hook — relies on global `window.Swiper` |

---

## Architecture

All changes are in-place file edits. No new modules, routes, or services are introduced.

```
┌─────────────────────────────────────────────────────────────────┐
│  Browser                                                         │
│  ┌───────────────┐    ┌────────────────────────────────────┐    │
│  │ HTML parsing  │    │ Parallel asset loading             │    │
│  │  app.blade.php│    │  Bootstrap CSS (blocking — needed) │    │
│  │  • head order │    │  main.css       (async preload) ←  │    │
│  │  • async CSS  │    │  design-system  (async preload) ←  │    │
│  │  • deferred JS│    │  Bootstrap Icons, AOS, GLightbox   │    │
│  └───────────────┘    │  Swiper CSS from vendor (single)   │    │
│                       └────────────────────────────────────┘    │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │ Vite-built bundle   (vendor-vue chunk + page chunk)        │ │
│  │   vue + @inertiajs/vue3 → assets/js/vendor-vue-[hash].js  │ │
│  │   app.js + Page.vue    → assets/js/app-[hash].js          │ │
│  └────────────────────────────────────────────────────────────┘ │
└─────────────────────────────────────────────────────────────────┘
```

The Swiper deduplication strategy is:

```
BEFORE                               AFTER
──────────────────────────────       ─────────────────────────────────
<link CDN Swiper CSS>         ←✕     (removed — CDN duplicate)
<script vendor Swiper JS>     ←✕     (removed — redundant, CDN is also removed)
<script CDN Swiper JS>        ←✕     (removed — was the only needed copy?)

Strategy decision: Keep ONLY the vendor file for JS, replace the CDN CSS with
the vendor CSS equivalent (swiper-bundle.min.css from /assets/vendor/swiper/).
1career.vue continues to use window.Swiper from the vendor JS file unchanged.
```

> **Design Decision — Swiper single source**: Since Swiper is not in `package.json`, the vendor file at `public/assets/vendor/swiper/swiper-bundle.min.js` is the authoritative copy. The CDN JS and CDN CSS are both removed. The vendor CSS (`/assets/vendor/swiper/swiper-bundle.min.css`) replaces the CDN CSS. This keeps `1career.vue`'s `new Swiper(...)` working through `window.Swiper` without any component changes.

---

## Components and Interfaces

### 1. `resources/views/header.blade.php`

Add explicit `width` and `height` attributes to the two navbar logo `<img>` tags.

**Before:**
```html
<img src="/assets/img/logo-raya-polos.png" alt="Logo Raya Konstruksi International"
    title="Logo Raya Konstruksi International">
```

**After (both instances — desktop and mobile nav):**
```html
<img src="/assets/img/logo-raya-polos.png" alt="Logo Raya Konstruksi International"
    title="Logo Raya Konstruksi International" width="149" height="44">
```

### 2. `resources/views/footer.blade.php`

Fix the footer logo `<img>` — current `height="59"` is incorrect and causes CLS.

**Before:**
```html
<img src="{{ asset('assets/img/logo-raya-clean-footer.png') }}" alt="Raya Konstruksi Internasional" width="200" height="59" style="width: 200px">
```

**After:**
```html
<img src="{{ asset('assets/img/logo-raya-clean-footer.png') }}" alt="Raya Konstruksi Internasional" width="200" height="50" style="width: 200px">
```

### 3. `resources/js/Pages/1home.vue`

Three sets of changes:

**a) Glance image — add dimensions:**
```html
<!-- Before -->
<img src="/assets/img/home.png" alt="Raya Konstruksi Operations" class="glance-img" loading="lazy" />

<!-- After -->
<img src="/assets/img/home.png" alt="Raya Konstruksi Operations" class="glance-img"
     width="800" height="450" loading="lazy" />
```

**b) Maps images — both thumbnail and modal:**
```html
<!-- Thumbnail — Before -->
<img src="/assets/img/maps.jpg" alt="Indonesia Active Project Map" class="map-img" loading="lazy" />

<!-- Thumbnail — After -->
<img src="/assets/img/maps.jpg" alt="Indonesia Active Project Map" class="map-img"
     width="696" height="492" loading="lazy" />

<!-- Modal — Before -->
<img src="/assets/img/maps.jpg" alt="Indonesia Map Detail" style="width: 100%; ..." />

<!-- Modal — After -->
<img src="/assets/img/maps.jpg" alt="Indonesia Map Detail" width="696" height="492"
     style="width: 100%; ..." />
```

**c) Hero logo marquee — all 28 `<img class="hero-logo">` tags** (14 in primary set + 14 in aria-hidden duplicate set):
```html
<!-- Before (example) -->
<img src="/assets/img/client/tata.png" alt="Tatamulia" class="hero-logo" />

<!-- After -->
<img src="/assets/img/client/tata.png" alt="Tatamulia" class="hero-logo" width="88" height="44" />
```

**d) Lazy loading deferral comment — add to `<script setup>`:**
```js
// FUTURE REFACTOR — Lazy Loading Below-the-Fold Sections
// ─────────────────────────────────────────────────────────────────────────────
// This page is currently a single monolithic component with all sections
// rendered inline. Applying defineAsyncComponent() to below-the-fold sections
// requires first splitting each section into its own Single-File Component
// (.vue file). That refactor is deferred pending a larger component extraction
// effort.
//
// Above-the-fold (NOT candidates for lazy loading — must render immediately):
//   • Hero section (#hero)
//   • Services section (.svc-section)
//
// Below-the-fold candidates (can be lazy-loaded after component extraction):
//   • Glance / About section (.glance-section)
//   • Why Choose Us section (.why-section)
//   • Featured Projects section (.projects-section)
//   • Active Sites / Map section (.map-section)
//   • Industries section (.industries-section)
//   • Equipment section (.equipment-section)
// ─────────────────────────────────────────────────────────────────────────────
```

### 4. `public/assets/css/raya-design-system.css`

Append two rule blocks at the end of the file to reserve footer layout space and enforce image proportions:

```css
/* ============================================================
   FOOTER CLS PREVENTION
   Reserves layout space before footer content renders to
   prevent Cumulative Layout Shift from footer images/content.
============================================================ */
#footer,
.footer {
    min-height: 300px;
    contain: layout;
}

.footer img {
    aspect-ratio: attr(width) / attr(height);
}
```

### 5. `public/assets/css/main.css`

Prepend a `@font-face` override block at the very top of the file (before the template comment header) to ensure Bootstrap Icons loads with `font-display: swap`:

```css
/* Bootstrap Icons — font-display: swap override
 * Prevents the 930 ms layout shift caused by the default block behavior
 * of the Bootstrap Icons icon font served from Cloudflare CDN.
 * This @font-face declaration takes precedence over the one in
 * bootstrap-icons.min.css because main.css is loaded after it.
 */
@font-face {
    font-family: 'bootstrap-icons';
    src: url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/fonts/bootstrap-icons.woff2?1fa40e8900654d2863d011707b9fb6f2") format("woff2"),
         url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/fonts/bootstrap-icons.woff?1fa40e8900654d2863d011707b9fb6f2") format("woff");
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
```

> **Why prepend vs append**: The `@font-face` rule only needs to be in the cascade — order within a single file does not affect precedence for `@font-face`. Prepending makes it visually prominent and avoids it being buried in a large file.

> **Precedence note**: The Bootstrap Icons CDN `<link>` loads `bootstrap-icons.min.css` which declares its own `@font-face` without `font-display: swap`. Because `main.css` is loaded *after* the Bootstrap Icons CDN link in `app.blade.php`, the `@font-face` in `main.css` wins for the same `font-family` name.

### 6. `resources/views/app.blade.php`

Three changes:

**a) Convert `main.css` and `raya-design-system.css` from blocking to async preload** — replaces two `<link rel="stylesheet">` tags with the preload pattern already used for all other non-critical CSS in this file:

```html
<!-- BEFORE (render-blocking) -->
<link href="/assets/css/main.css" rel="stylesheet">
<link href="/assets/css/raya-design-system.css" rel="stylesheet">

<!-- AFTER (async preload — same pattern as AOS, Bootstrap Icons, etc.) -->
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="/assets/css/main.css" />
<noscript><link rel="stylesheet" href="/assets/css/main.css" /></noscript>

<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="/assets/css/raya-design-system.css" />
<noscript><link rel="stylesheet" href="/assets/css/raya-design-system.css" /></noscript>
```

**b) Remove duplicate Swiper CDN scripts and replace CDN CSS with vendor CSS:**

```html
<!-- REMOVE these three tags entirely: -->
<link rel="preload" as="style" onload="..." href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" .../>
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" .../></noscript>
<script src="/assets/vendor/swiper/swiper-bundle.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" ... defer></script>

<!-- ADD vendor Swiper CSS (async preload, same as other non-critical CSS): -->
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="/assets/vendor/swiper/swiper-bundle.min.css" />
<noscript><link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css" /></noscript>

<!-- ADD single vendor Swiper JS: -->
<script src="/assets/vendor/swiper/swiper-bundle.min.js" defer></script>
```

> **Net effect**: The CDN CSS (async-preloaded but still a request) and both JS copies are removed. One vendor CSS + one vendor JS replaces them. `1career.vue`'s `new Swiper(...)` call continues to work via `window.Swiper` from the vendor file.

### 7. `vite.config.js`

Add a `build` section. `terser` must be added as a dev dependency first:

```
npm install --save-dev terser
```

```js
// vite.config.js additions
export default defineConfig({
    // ... existing plugins and server config unchanged ...
    build: {
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true,
            },
        },
        cssMinify: true,
        chunkSizeWarningLimit: 1000,
        rollupOptions: {
            output: {
                // Split Vue + Inertia into a stable vendor chunk for long-term caching.
                // NOTE: swiper and aos are NOT listed here because neither is in
                // package.json — they are loaded as public vendor files, not npm modules.
                manualChunks(id) {
                    if (id.includes('node_modules/vue') ||
                        id.includes('node_modules/@inertiajs')) {
                        return 'vendor-vue';
                    }
                },
                chunkFileNames: 'assets/js/[name]-[hash].js',
                assetFileNames: 'assets/[ext]/[name]-[hash].[ext]',
            },
        },
    },
});
```

> **Why `manualChunks` as a function (not object)**: The function form avoids Rollup circular-dependency warnings that can arise with the object form when chunks import each other.

> **Why `vendor-swiper` is absent**: Swiper is not in `package.json` (confirmed: only `@srexi/purecounterjs`, `leaflet`, `vue-recaptcha-v3` etc. are dependencies). Requirement 5.4 explicitly states the `vendor-swiper` entry is conditional on Swiper being in `package.json`. Since it is not, the entry is omitted.

> **Why `aos` is absent**: Requirement 5.5 explicitly prohibits a `manualChunks` entry for AOS since it is loaded as a local vendor file.

---

## Data Models

This feature involves no data model changes — no database migrations, no API schema changes, no new PHP models. All changes are in static asset files, Blade templates, Vue SFCs, and the Vite build configuration.

---

## Correctness Properties

*A property is a characteristic or behavior that should hold true across all valid executions of a system — essentially, a formal statement about what the system should do. Properties serve as the bridge between human-readable specifications and machine-verifiable correctness guarantees.*

After reviewing the prework analysis for all acceptance criteria, the vast majority are EXAMPLE-class checks (fixed files, specific fixed attribute values, presence/absence of specific strings). Only one criterion — Requirement 1.5 (hero logo dimensions) — exhibits the universal-quantification pattern that makes property-based testing valuable.

### Property 1: All hero logo images carry correct intrinsic dimensions

*For any* `<img class="hero-logo">` element present in the rendered markup of `1home.vue` (across both the primary marquee set and the aria-hidden duplicate set), the element SHALL have `width="88"` and `height="44"` attributes.

**Validates: Requirements 1.5**

> **Property Reflection**: All other acceptance criteria resolve to single-instance checks (one file, one tag, one attribute value) or negative-presence assertions. No two properties were identified that would be redundant with each other or with Property 1. Therefore, Property 1 stands alone.

---

## Error Handling

### Swiper graceful degradation in `1career.vue`

The `mounted()` hook currently calls `new Swiper(...)` unconditionally. If the vendor Swiper JS fails to load (network error, browser caching edge case), this will throw `ReferenceError: Swiper is not defined` and could break Vue's error boundary.

**Fix:** Wrap the Swiper instantiation in a guard:

```js
mounted() {
    if (typeof window.Swiper === 'undefined') {
        console.warn('[1career.vue] Swiper not available — LinkedIn slider disabled.');
        return;
    }
    new Swiper(".linkedin-slider", {
        loop: true, speed: 600,
        slidesPerView: 1, spaceBetween: 20,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true },
        breakpoints: {
            768:  { slidesPerView: 2, spaceBetween: 24 },
            1024: { slidesPerView: 3, spaceBetween: 32 },
        },
    });
},
```

### Async CSS FOUC handling

Converting `main.css` and `raya-design-system.css` from blocking to async preload introduces a brief window where the page renders with Bootstrap CSS only (since Bootstrap is kept blocking as the layout foundation). The `<noscript>` fallbacks ensure non-JS environments are unaffected. The visual impact is minimal because:

- Bootstrap provides the grid and base typography
- The Hero section uses inline styles for the background image
- Above-the-fold content has minimal dependency on `main.css` rules

### Terser build failure

If `terser` is not installed when `npm run build` is run with `build.minify: 'terser'`, Vite will throw a build error. The `terser` package must be installed as a devDependency before the build configuration change is committed. Installation command: `npm install --save-dev terser`.

---

## Testing Strategy

This feature is a performance optimization across static asset files and build configuration. It does not introduce new business logic, API endpoints, or data transformations. Property-based testing applies minimally (one property identified — hero logo dimensions). The primary test strategy is example-based assertions and manual Lighthouse verification.

### Unit / Example Tests

These can be implemented as simple file-content assertions (e.g., using Node.js `fs.readFileSync` + string checks, or PHP string tests):

| ID | File | What to Assert |
|---|---|---|
| 1.1 | `header.blade.php` | Both `<img src="logo-raya-polos.png">` tags have `width="149" height="44"` |
| 1.2 | `footer.blade.php` | `<img src="logo-raya-clean-footer.png">` has `width="200" height="50"` |
| 1.3 | `1home.vue` | `<img class="glance-img">` has `width="800" height="450"` |
| 1.4 | `1home.vue` | Both map `<img>` tags have `width="696" height="492"` |
| 1.6 | `raya-design-system.css` | Contains `#footer, .footer { min-height: 300px; contain: layout; }` |
| 1.7 | `raya-design-system.css` | Contains `.footer img { aspect-ratio: ... }` |
| 2.1 | `main.css` | Contains `@font-face` for `bootstrap-icons` with `font-display: swap` |
| 3.1 | `app.blade.php` | `main.css` loaded via `rel="preload" as="style"` pattern |
| 3.2 | `app.blade.php` | `raya-design-system.css` loaded via `rel="preload" as="style"` pattern |
| 3.3 | `app.blade.php` | `<noscript>` fallbacks present for both CSS files |
| 4.1 | `app.blade.php` | No `<script src="/assets/vendor/swiper/swiper-bundle.min.js">` |
| 4.2 | `app.blade.php` | No `<script>` loading CDN Swiper JS URL |
| 4.3 | `app.blade.php` | No `<link>` loading CDN Swiper CSS URL |
| 4.4 | `1career.vue` | `mounted()` guard prevents crash when `window.Swiper` is undefined |
| 5.1 | `vite.config.js` | `build.minify === 'terser'`, `drop_console: true`, `drop_debugger: true` |
| 5.2 | `vite.config.js` | `build.cssMinify === true` |
| 5.3 | `vite.config.js` | `manualChunks` maps `vue`/`@inertiajs/vue3` to `'vendor-vue'` |
| 5.4 | `vite.config.js` + `package.json` | No `vendor-swiper` manualChunks entry (swiper absent from package.json) |
| 5.5 | `vite.config.js` | No `aos` in `manualChunks` |
| 5.6 | `vite.config.js` | `chunkFileNames` and `assetFileNames` match specified patterns |
| 5.7 | `vite.config.js` | `chunkSizeWarningLimit === 1000` |
| 6.1–6.2 | `1home.vue` | `<script setup>` contains the lazy-loading deferral comment with above/below-fold section list |

### Property-Based Test

**Property 1 — Hero logo dimensions (minimum 100 iterations)**

Tag: `Feature: lighthouse-performance-fix, Property 1: All hero-logo img elements have width=88 height=44`

```js
// Using fast-check (TypeScript/JS property-based testing library)
// Test: parse all img.hero-logo elements from 1home.vue template string,
// then for every element, assert width === "88" and height === "44"
it('Property 1: every hero-logo img has width=88 height=44', () => {
    fc.assert(
        fc.property(
            fc.integer({ min: 0, max: heroLogoElements.length - 1 }),
            (idx) => {
                const img = heroLogoElements[idx];
                return img.getAttribute('width') === '88' &&
                       img.getAttribute('height') === '44';
            }
        ),
        { numRuns: 100 }
    );
});
```

### Integration / Manual Verification

After implementing all changes:

1. Run `npm run build` — verify no build errors, `vendor-vue-[hash].js` chunk appears in `public/build/assets/js/`
2. Load the homepage in Chrome DevTools Network tab — verify `main.css` and `raya-design-system.css` no longer appear in the blocking render chain
3. Run Lighthouse (mobile) — target CLS < 0.1, LCP < 2.5 s
4. Navigate to `/career` — verify LinkedIn Swiper slider renders correctly from vendor file
5. Disable JavaScript in browser — verify page still displays styled content via `<noscript>` CSS fallbacks
6. Check DevTools Network for Swiper — verify only `/assets/vendor/swiper/swiper-bundle.min.js` loads (no CDN requests for Swiper)
