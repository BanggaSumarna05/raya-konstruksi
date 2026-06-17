# Requirements Document

## Introduction

This feature addresses three critical Lighthouse performance issues on rayakonstruksi.com (Laravel 11 + Inertia.js + Vue 3 + Vite + Bootstrap 5). The current mobile Lighthouse scores are: Performance 59, CLS 0.74, LCP 1.5s, Speed Index 4.7s. The scope covers three focused improvements: fixing Cumulative Layout Shift (CLS) caused by unsized images, font-swap layout shift, and Bootstrap Icons FOUT; removing render-blocking CSS and duplicate Swiper bundles; and optimizing the Vite build pipeline.

## Glossary

- **CLS**: Cumulative Layout Shift — a Core Web Vital measuring unexpected visual layout shifts during page load.
- **LCP**: Largest Contentful Paint — a Core Web Vital measuring time to render the largest visible content element.
- **Render-blocking resource**: A CSS or JS asset loaded synchronously in `<head>` that prevents the browser from constructing the render tree until fully downloaded and parsed.
- **FOUT**: Flash of Unstyled Text — brief flash of fallback font before the web font loads.
- **font-display: swap**: CSS descriptor that lets the browser render text with a fallback font immediately and swap to the web font once it is available.
- **Preload pattern**: `<link rel="preload" as="style" onload="...">` — loads a stylesheet asynchronously so it does not block initial render.
- **Bootstrap_Icons**: The Bootstrap Icons icon font loaded from Cloudflare CDN (`bootstrap-icons.woff2`).
- **Swiper**: A JavaScript slider library. Currently loaded twice — once from `/assets/vendor/swiper/swiper-bundle.min.js` and once from the Cloudflare CDN.
- **AOS**: Animate On Scroll library. Currently loaded as a local vendor file (`/assets/vendor/aos/`); not present in `package.json`.
- **Vite**: The frontend build tool used by this project (v5). Configuration lives in `vite.config.js`.
- **Terser**: A JavaScript minifier compatible with Vite's `build.minify` option.
- **manualChunks**: A Rollup/Vite build option that splits specific npm modules into named output chunks for better caching.
- **App_Blade**: `resources/views/app.blade.php` — the root HTML template for all Inertia pages.
- **Header_Blade**: `resources/views/header.blade.php` — the shared navigation header partial.
- **Footer_Blade**: `resources/views/footer.blade.php` — the shared footer partial.
- **Home_Vue**: `resources/js/Pages/1home.vue` — the single-file Vue component for the homepage.
- **Main_CSS**: `public/assets/css/main.css` — the primary site stylesheet.
- **Design_System_CSS**: `public/assets/css/raya-design-system.css` — the Raya design token and component stylesheet.

---

## Requirements

### Requirement 1: Fix Cumulative Layout Shift (CLS) via Explicit Image Dimensions

**User Story:** As a site visitor on mobile, I want all images to have reserved space before they load, so that the page does not jump or shift as images appear.

#### Acceptance Criteria

1. WHEN the browser parses `Header_Blade`, THE `Header_Blade` SHALL render the navbar logo (`logo-raya-polos.png`) with exactly `width="149"` and `height="44"` attributes (no other values permitted) on every `<img>` tag that references it.

2. WHEN the browser parses `Footer_Blade`, THE `Footer_Blade` SHALL render the footer logo (`logo-raya-clean-footer.png`) with `width="200"` and `height="50"` attributes (corrected from the current incorrect `height="59"`).

3. WHEN the browser parses `Home_Vue`, THE `Home_Vue` SHALL render the glance section image (`home.png`) with `width="800"` and `height="450"` attributes on the `<img class="glance-img">` element.

4. WHEN the browser parses `Home_Vue`, THE `Home_Vue` SHALL render the maps image (`maps.jpg`) with `width="696"` and `height="492"` attributes on both the thumbnail `<img class="map-img">` and the modal `<img>` element.

5. WHEN the browser parses `Home_Vue`, THE `Home_Vue` SHALL render every client logo `<img class="hero-logo">` in the marquee strip with `width="88"` and `height="44"` attributes.

6. THE `Design_System_CSS` SHALL include a `min-height: 300px` and `contain: layout` rule scoped to `#footer, .footer` to reserve footer layout space before content renders.

7. THE `Design_System_CSS` SHALL include an `aspect-ratio: attr(width) / attr(height)` rule scoped to `.footer img` to enforce correct image proportions in the footer.

### Requirement 2: Fix Bootstrap Icons Font-Display to Eliminate FOUT Layout Shift

**User Story:** As a site visitor, I want Bootstrap Icons to load without causing a 930 ms layout shift, so that icon-based UI elements do not jump when the icon font swaps in.

#### Acceptance Criteria

1. THE `Main_CSS` SHALL include a `@font-face` declaration for `font-family: 'bootstrap-icons'` at the top of the file with `font-display: swap`, pointing to the Cloudflare CDN `bootstrap-icons.woff2` URL, with `font-weight: normal` and `font-style: normal`.

2. WHEN the Bootstrap Icons CSS is loaded, THE browser SHALL use the `font-display: swap` behavior defined in `Main_CSS` rather than the default block behavior, because the `@font-face` override in `Main_CSS` takes precedence.

### Requirement 3: Remove Render-Blocking Custom Stylesheets

**User Story:** As a site visitor, I want the page to start rendering immediately without waiting for custom CSS files to download, so that First Contentful Paint is faster.

#### Acceptance Criteria

1. WHEN `App_Blade` is served, THE `App_Blade` SHALL load `Main_CSS` using the async preload pattern (`<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">`), not a blocking `<link rel="stylesheet">`.

2. WHEN `App_Blade` is served, THE `App_Blade` SHALL load `Design_System_CSS` using the async preload pattern, not a blocking `<link rel="stylesheet">`.

3. WHEN `App_Blade` is served and JavaScript is disabled, THE `App_Blade` SHALL include `<noscript><link rel="stylesheet" ...></noscript>` fallbacks for both `Main_CSS` and `Design_System_CSS` so styles are still applied.

### Requirement 4: Remove Duplicate Swiper Bundle

**User Story:** As a site visitor, I want Swiper to load only once, so that the browser does not download and parse the same ~150 KB library twice on every page load.

#### Acceptance Criteria

1. WHEN `App_Blade` is served, THE `App_Blade` SHALL NOT contain a `<script>` tag that loads `/assets/vendor/swiper/swiper-bundle.min.js`.

2. WHEN `App_Blade` is served, THE `App_Blade` SHALL NOT contain a `<script>` tag that loads the Cloudflare CDN Swiper JS URL (`cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js`).

3. WHEN `App_Blade` is served, THE `App_Blade` SHALL NOT contain a `<link>` tag that loads the Cloudflare CDN Swiper CSS URL (`cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css`).

4. WHEN `1career.vue` is loaded and the `Swiper` constructor is not available in scope, THE `1career.vue` component SHALL fail gracefully without throwing an unhandled error, allowing the rest of the page to render normally without Swiper functionality.

5. IF Swiper is not listed in `package.json` as a dependency, THEN THE implementation SHALL document the retained strategy: either retain the local vendor file only and remove the CDN duplicate, or add `swiper` to `package.json` and import from npm. THE implementation SHALL choose one approach and apply it consistently.

### Requirement 5: Optimize Vite Build Pipeline

**User Story:** As a developer, I want the Vite build to produce smaller, well-cached output bundles, so that returning visitors load less JavaScript and the site scores better on bundle size audits.

#### Acceptance Criteria

1. THE `vite.config.js` SHALL include a `build.minify` option set to `'terser'` with `terserOptions` that enable `drop_console: true` and `drop_debugger: true`.

2. THE `vite.config.js` SHALL include `build.cssMinify: true`.

3. THE `vite.config.js` SHALL include a `rollupOptions.output.manualChunks` configuration that separates `vue` and `@inertiajs/vue3` into a chunk named `vendor-vue`.

4. THE `vite.config.js` SHALL include a `rollupOptions.output.manualChunks` entry for `swiper` named `vendor-swiper` only IF `swiper` is present in `package.json` as a dependency at the time of implementation.

5. THE `vite.config.js` SHALL NOT include a `manualChunks` entry for `aos` because AOS is not currently present in `package.json` and is loaded as a local vendor file.

6. THE `vite.config.js` SHALL include `rollupOptions.output.chunkFileNames: 'assets/js/[name]-[hash].js'` and `assetFileNames: 'assets/[ext]/[name]-[hash].[ext]'` for deterministic output paths.

7. THE `vite.config.js` SHALL include `build.chunkSizeWarningLimit: 1000`.

### Requirement 6: Document Below-the-Fold Component Lazy Loading as Future Refactor

**User Story:** As a developer, I want the decision about lazy-loading `Home_Vue` sections to be documented, so that the team understands why it was deferred and what the prerequisites are.

#### Acceptance Criteria

1. THE implementation SHALL include a code comment in `Home_Vue` (or a linked note in the spec) stating that `Home_Vue` is currently a single monolithic file with all sections inline, and that applying `defineAsyncComponent` for below-the-fold sections requires first splitting the page into separate single-file components, which is deferred as a future refactor.

2. THE comment SHALL note which sections are considered above-the-fold (Hero, Services) and therefore not candidates for lazy loading, and which sections are below-the-fold candidates (Glance, Why, Projects, Map, Industries, Equipment).
