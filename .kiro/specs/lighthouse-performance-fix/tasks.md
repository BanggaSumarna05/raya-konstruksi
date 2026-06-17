# Implementation Plan: Lighthouse Performance Fix

## Overview

Seven surgical changes applied in priority order from highest CLS impact to lowest, finishing with the Vite build pipeline which requires an npm install step. Tasks 1–5 are independent and can run in parallel. Task 6 (Vite build) is self-contained. Task 7 shares the same file as Task 1 but only adds a comment block.

## Tasks

- [x] 1. Fix image dimensions in header and footer Blade templates
  - [x] 1.1 Add `width="149" height="44"` to both navbar logo `<img>` tags in `resources/views/header.blade.php`
    - Both the desktop nav and mobile nav logo images reference `logo-raya-polos.png`
    - Add the two attributes to every `<img>` tag that references this file
    - _Requirements: 1.1_

  - [x] 1.2 Fix footer logo height in `resources/views/footer.blade.php`
    - Change `height="59"` to `height="50"` on the `<img src="logo-raya-clean-footer.png">` tag
    - `width="200"` is already correct — do not change it
    - _Requirements: 1.2_

  - [ ]* 1.3 Write unit tests for header and footer image dimensions
    - Assert both logo `<img>` tags in `header.blade.php` have `width="149"` and `height="44"`
    - Assert footer logo in `footer.blade.php` has `width="200"` and `height="50"`
    - _Requirements: 1.1, 1.2_

- [ ] 2. Fix image dimensions in `resources/js/Pages/1home.vue`
  - [x] 2.1 Add `width="800" height="450"` to the glance section image
    - Target: `<img class="glance-img" src="/assets/img/home.png" ...>`
    - Add the two dimension attributes; keep `loading="lazy"` and all existing attributes
    - _Requirements: 1.3_

  - [x] 2.2 Add `width="696" height="492"` to both map images
    - Target 1: thumbnail `<img class="map-img" src="/assets/img/maps.jpg" ...>`
    - Target 2: modal `<img src="/assets/img/maps.jpg" ...>` (inside the lightbox/modal element)
    - _Requirements: 1.4_

  - [-] 2.3 Add `width="88" height="44"` to all 28 hero logo `<img class="hero-logo">` elements
    - 14 images in the primary marquee set and 14 in the `aria-hidden` duplicate set
    - All images already have `class="hero-logo"` — add width/height to each one
    - _Requirements: 1.5_

  - [ ]* 2.4 Write property test for hero logo dimensions (Property 1)
    - **Property 1: All hero logo images carry correct intrinsic dimensions**
    - Parse all `<img class="hero-logo">` elements from the `1home.vue` template string
    - For every element, assert `width === "88"` and `height === "44"` (minimum 100 runs)
    - Use fast-check: `fc.integer({ min: 0, max: heroLogoElements.length - 1 })` as the generator
    - **Validates: Requirements 1.5**

  - [ ]* 2.5 Write unit tests for glance and map image dimensions
    - Assert `<img class="glance-img">` has `width="800"` and `height="450"`
    - Assert both `<img>` tags referencing `maps.jpg` have `width="696"` and `height="492"`
    - _Requirements: 1.3, 1.4_

- [x] 3. Fix Bootstrap Icons font-display in `public/assets/css/main.css`
  - [x] 3.1 Prepend `@font-face` override block for `bootstrap-icons` with `font-display: swap`
    - Insert the block at the very top of `main.css` (before any existing content)
    - Block must declare `font-family: 'bootstrap-icons'`, `font-weight: normal`, `font-style: normal`, `font-display: swap`
    - Both `woff2` and `woff` Cloudflare CDN URLs must be included in `src:`
    - _Requirements: 2.1, 2.2_

  - [ ]* 3.2 Write unit test for Bootstrap Icons font-display override
    - Assert `main.css` starts with (or contains near the top) a `@font-face` block for `'bootstrap-icons'`
    - Assert the block contains `font-display: swap`
    - _Requirements: 2.1_

- [x] 4. Append footer CLS prevention rules to `public/assets/css/raya-design-system.css`
  - [x] 4.1 Append `#footer, .footer` and `.footer img` rules to `raya-design-system.css`
    - Append the `FOOTER CLS PREVENTION` comment block followed by:
      - `#footer, .footer { min-height: 300px; contain: layout; }`
      - `.footer img { aspect-ratio: attr(width) / attr(height); }`
    - Add at the end of the file
    - _Requirements: 1.6, 1.7_

  - [ ]* 4.2 Write unit tests for footer CLS prevention CSS
    - Assert `raya-design-system.css` contains `min-height: 300px` scoped to `#footer, .footer`
    - Assert `raya-design-system.css` contains `contain: layout` in the same rule
    - Assert `raya-design-system.css` contains `aspect-ratio: attr(width) / attr(height)` scoped to `.footer img`
    - _Requirements: 1.6, 1.7_

- [ ] 5. Convert blocking CSS to async preload and deduplicate Swiper in `resources/views/app.blade.php`
  - [-] 5.1 Convert `main.css` and `raya-design-system.css` from blocking `<link>` to async preload pattern
    - Replace each blocking `<link href="..." rel="stylesheet">` with the preload pattern:
      `<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="..." />`
    - Add `<noscript><link rel="stylesheet" href="..." /></noscript>` fallback immediately after each preload link
    - _Requirements: 3.1, 3.2, 3.3_

  - [-] 5.2 Remove CDN Swiper CSS preload+noscript block and both Swiper JS script tags
    - Remove the `<link rel="preload">` and matching `<noscript>` for the CDN Swiper CSS URL (`cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css`)
    - Remove the `<script src="/assets/vendor/swiper/swiper-bundle.min.js" defer>` vendor tag
    - Remove the `<script src="https://cdnjs.cloudflare.com/.../Swiper/11.0.5/swiper-bundle.min.js" ...>` CDN tag
    - _Requirements: 4.1, 4.2, 4.3_

  - [~] 5.3 Add single vendor Swiper CSS (async preload) and single vendor Swiper JS back to `app.blade.php`
    - Add async preload for vendor CSS: `<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="/assets/vendor/swiper/swiper-bundle.min.css" />`
    - Add `<noscript><link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css" /></noscript>` fallback
    - Add single vendor JS: `<script src="/assets/vendor/swiper/swiper-bundle.min.js" defer></script>`
    - Net result: one CSS source + one JS source, both from `/assets/vendor/swiper/`
    - _Requirements: 4.1, 4.2, 4.3, 4.5_

  - [-] 5.4 Add Swiper guard to `mounted()` in `resources/js/Pages/1career.vue`
    - Wrap the existing `new Swiper(...)` call with: `if (typeof window.Swiper === 'undefined') { console.warn('[1career.vue] Swiper not available'); return; }`
    - Keep all existing Swiper configuration options unchanged
    - Do not change how `new Swiper(...)` is called — only add the guard before it
    - _Requirements: 4.4_

  - [ ]* 5.5 Write unit tests for app.blade.php async CSS and Swiper deduplication
    - Assert `app.blade.php` does NOT contain `<link href="/assets/css/main.css" rel="stylesheet">` (blocking form)
    - Assert `app.blade.php` contains `rel="preload" as="style"` href for `main.css` and `raya-design-system.css`
    - Assert `app.blade.php` contains `<noscript>` fallbacks for both CSS files
    - Assert `app.blade.php` does NOT contain a `<script>` loading the CDN Swiper JS URL
    - Assert `app.blade.php` does NOT contain a `<link>` loading the CDN Swiper CSS URL
    - Assert `app.blade.php` does NOT contain two `<script>` tags for Swiper (exactly one allowed)
    - _Requirements: 3.1, 3.2, 3.3, 4.1, 4.2, 4.3_

  - [ ]* 5.6 Write unit test for Swiper guard in `1career.vue`
    - Assert `mounted()` in `1career.vue` contains a `typeof window.Swiper === 'undefined'` guard before `new Swiper(...)`
    - _Requirements: 4.4_

- [~] 6. Checkpoint — verify structural changes before build config
  - Ensure all tests pass, ask the user if questions arise.

- [ ] 7. Optimize Vite build pipeline in `vite.config.js`
  - [ ] 7.1 Install `terser` as a dev dependency
    - Run `npm install --save-dev terser` in the project root
    - This is a prerequisite for `build.minify: 'terser'` — must be done before editing `vite.config.js`
    - _Requirements: 5.1_

  - [~] 7.2 Add `build` section to `vite.config.js`
    - Add `build.minify: 'terser'` with `terserOptions: { compress: { drop_console: true, drop_debugger: true } }`
    - Add `build.cssMinify: true`
    - Add `build.chunkSizeWarningLimit: 1000`
    - Add `rollupOptions.output.manualChunks` as a function that returns `'vendor-vue'` for IDs containing `node_modules/vue` or `node_modules/@inertiajs`
    - Do NOT add `vendor-swiper` or `vendor-aos` entries (neither is in `package.json`)
    - Add `rollupOptions.output.chunkFileNames: 'assets/js/[name]-[hash].js'`
    - Add `rollupOptions.output.assetFileNames: 'assets/[ext]/[name]-[hash].[ext]'`
    - _Requirements: 5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7_

  - [ ]* 7.3 Write unit tests for vite.config.js build options
    - Assert `build.minify === 'terser'` and `terserOptions.compress.drop_console === true` and `drop_debugger === true`
    - Assert `build.cssMinify === true`
    - Assert `manualChunks` maps a `node_modules/vue` ID to `'vendor-vue'`
    - Assert `manualChunks` does NOT return `'vendor-swiper'` for any ID (swiper absent from package.json)
    - Assert `chunkFileNames` and `assetFileNames` match the specified patterns
    - Assert `chunkSizeWarningLimit === 1000`
    - _Requirements: 5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7_

- [ ] 8. Add lazy-loading deferral comment to `resources/js/Pages/1home.vue`
  - [~] 8.1 Add `FUTURE REFACTOR — Lazy Loading Below-the-Fold Sections` comment in `<script setup>`
    - Insert the multi-line comment block at the top of the `<script setup>` section in `1home.vue`
    - Comment must state that `1home.vue` is a monolithic component and that `defineAsyncComponent` requires splitting into separate SFCs, deferred as a future refactor
    - Comment must list above-the-fold sections (Hero, Services) and below-the-fold candidates (Glance, Why, Projects, Map, Industries, Equipment)
    - _Requirements: 6.1, 6.2_

  - [ ]* 8.2 Write unit test for lazy-loading deferral comment
    - Assert `1home.vue` `<script setup>` block contains `FUTURE REFACTOR` or `defineAsyncComponent` mention
    - Assert comment lists both `Hero` and `Services` as above-the-fold
    - Assert comment lists `Glance` and `Map` (as representative below-the-fold candidates) in the comment
    - _Requirements: 6.1, 6.2_

- [~] 9. Final checkpoint — ensure all tests pass
  - Ensure all tests pass, ask the user if questions arise.

## Notes

- Tasks marked with `*` are optional and can be skipped for faster MVP
- Tasks 1–5 and 8 are independent and can run in parallel (no shared write targets except Tasks 2 and 8 both touch `1home.vue` — schedule those sequentially)
- Task 7.1 (`npm install --save-dev terser`) must run before 7.2
- Swiper vendor files are confirmed at `/assets/vendor/swiper/swiper-bundle.min.css` and `.min.js`
- `manualChunks` must use the function form (not object) to avoid Rollup circular-dependency warnings
- Do NOT add `vendor-swiper` or `vendor-aos` to `manualChunks` — neither library is in `package.json`

## Task Dependency Graph

```json
{
  "waves": [
    { "id": 0, "tasks": ["1.1", "1.2", "2.1", "2.2", "2.3", "3.1", "4.1", "5.1", "5.2", "5.3", "5.4", "7.1", "8.1"] },
    { "id": 1, "tasks": ["1.3", "2.4", "2.5", "3.2", "4.2", "5.5", "5.6", "7.2", "8.2"] },
    { "id": 2, "tasks": ["7.3"] }
  ]
}
```
