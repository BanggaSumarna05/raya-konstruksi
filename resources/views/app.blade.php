<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title inertia>{{ config('app.name', 'RAYA KONSTRUKSI INTERNASIONAL') }}</title>

    <!-- Self-hosted fonts — Bricolage Grotesque (headings) + Pliant (body) -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Preload hero background image for LCP -->
    <link rel="preload" as="image" href="/assets/img/hero-carousel/hover-1-new.webp" fetchpriority="high">

    <!-- Font preload — critical fonts only (WOFF2) -->
    <link rel="preload" href="/assets/font/Pliant/Pliant-VariableFont_wdth,wght.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/assets/font/BricolageGrotesque/BricolageGrotesque-VariableFont_opsz,wdth,wght.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Critical layout inlines — prevents FOUC when Bootstrap loads async -->
    <style>
        *,*::before,*::after{box-sizing:border-box}
        body{margin:0;font-family:var(--font-primary,"Pliant",sans-serif)}
        .container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}
        @media(min-width:576px){.container{max-width:540px}}
        @media(min-width:768px){.container{max-width:720px}}
        @media(min-width:992px){.container{max-width:960px}}
        @media(min-width:1200px){.container{max-width:1140px}}
        @media(min-width:1400px){.container{max-width:1320px}}
        .row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}
        .row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:15px;padding-left:15px}
        .col{flex:1 0 0%}.col-12{flex:0 0 auto;width:100%}
        @media(min-width:992px){.col-lg-5{flex:0 0 auto;width:41.66667%}.col-lg-7{flex:0 0 auto;width:58.33333%}.col-lg-10{flex:0 0 auto;width:83.33333%}.col-lg-6{flex:0 0 auto;width:50%}.col-lg-4{flex:0 0 auto;width:33.33333%}.col-lg-3{flex:0 0 auto;width:25%}.col-lg-8{flex:0 0 auto;width:66.66667%}}
        .justify-content-center{justify-content:center!important}
        .align-items-center{align-items:center!important}
        .d-none{display:none!important}.d-flex{display:flex!important}.d-block{display:block!important}
        .text-center{text-align:center!important}
        .w-100{width:100%!important}
        img{vertical-align:middle}
    </style>

    <!-- Bootstrap — async with preload (non-render-blocking) -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
            integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </noscript>

    <!-- Non-critical CSS — loaded async (non-render-blocking) -->
    <!-- Bootstrap Icons -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" crossorigin="anonymous" />
    </noscript>
    <!-- Font Awesome — async -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />
    </noscript>
    <!-- AOS — async -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="/assets/vendor/aos/aos.css" />
    <noscript><link rel="stylesheet" href="/assets/vendor/aos/aos.css" /></noscript>
    <!-- GLightbox — async -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.min.css"
        integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.min.css" crossorigin="anonymous" />
    </noscript>
    <!-- Swiper — async (vendor only; CDN duplicate removed) -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
        href="/assets/vendor/swiper/swiper-bundle.min.css" />
    <noscript><link rel="stylesheet" href="/assets/vendor/swiper/swiper-bundle.min.css" /></noscript>
    <!-- Google Fonts — async with font-display:swap so Pliant/Bricolage Grotesque always render -->
    {{-- Google Fonts link removed — fonts are now self-hosted --}}

    <!-- Template Main CSS File — async to unblock render -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="/assets/css/main.css" /></noscript>
    <!-- Raya Design System — async to unblock render -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="/assets/css/raya-design-system.css" />
    <noscript><link rel="stylesheet" href="/assets/css/raya-design-system.css" /></noscript>

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
    <style>
        /* Self-hosted fonts — Bricolage Grotesque & Pliant (WOFF2 + TTF fallback) */
        @font-face {
            font-family: 'Bricolage Grotesque';
            src: url('/assets/font/BricolageGrotesque/BricolageGrotesque-VariableFont_opsz,wdth,wght.woff2') format('woff2'),
                 url('/assets/font/BricolageGrotesque/BricolageGrotesque-VariableFont_opsz,wdth,wght.ttf') format('truetype');
            font-weight: 200 800;
            font-style: normal;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Pliant';
            src: url('/assets/font/Pliant/Pliant-VariableFont_wdth,wght.woff2') format('woff2'),
                 url('/assets/font/Pliant/Pliant-VariableFont_wdth,wght.ttf') format('truetype');
            font-weight: 100 900;
            font-style: normal;
            font-display: swap;
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        @font-face {
            font-family: 'Pliant';
            src: url('/assets/font/Pliant/Pliant-Italic-VariableFont_wdth,wght.woff2') format('woff2'),
                 url('/assets/font/Pliant/Pliant-Italic-VariableFont_wdth,wght.ttf') format('truetype');
            font-weight: 100 900;
            font-style: italic;
            font-display: swap;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 9.5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgb(181, 181, 181);
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #FCD03B;
        }

        html {
            overflow-x: clip; /* clip lebih aman dari hidden — tidak menghilangkan konten */
        }

        body {
            font-family: "Pliant", system-ui, sans-serif;
            overflow-x: clip;
            min-height: 100vh;
        }

        /* Ensure input text is always visible */
        input, textarea, select {
            color: #111827 !important;
            -webkit-text-fill-color: #111827 !important;
        }
        input::placeholder, textarea::placeholder {
            color: #9ca3af !important;
            -webkit-text-fill-color: #9ca3af !important;
            opacity: 1;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: "Bricolage Grotesque", sans-serif;
            font-weight: 700;
        }

        /* Removed: 'template { overflow-x: hidden }' — template is not a DOM element */

        /* Offset for fixed navbar — applied to first child of #app */
        div#app {
            padding-top: 0;
        }

        /* Navbar height offset for pages that don't start with a full-bleed hero.
           Covers both: direct child of #app, or wrapped in one div by Vue/Inertia */
        div#app > section:not(.hero-section):not(.page-hero):first-child,
        div#app > div > section:not(.hero-section):not(.page-hero):first-child,
        div#app > main:first-child,
        div#app > div > main:first-child {
            margin-top: 72px;
        }

        @media (max-width: 480px) {
            div#app > section:not(.hero-section):not(.page-hero):first-child,
            div#app > div > section:not(.hero-section):not(.page-hero):first-child,
            div#app > main:first-child,
            div#app > div > main:first-child {
                margin-top: 60px;
            }
        }

        /* Full-bleed sections — override main.css global padding */
        .vision-section,
        .values-section,
        .explore-section,
        .svc-section,
        .hero-section,
        .service-cards-section,
        .why-section,
        .projects-section,
        .industries-section,
        .equipment-section,
        .clients-section,
        .news-list-section {
            padding: 0 !important;
        }
    </style>
    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}
</head>

<body class="font-sans antialiased">
    @unless(Request::is('login', 'register', 'forgot-password', 'reset-password', 'reset-password/*', 'verify-email'))
        @include('header')
    @endunless
    @inertia

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- <div id="preloader"></div> -->
    @unless(Request::is('login', 'register', 'forgot-password', 'reset-password', 'reset-password/*', 'verify-email'))
        @include('footer')
    @endunless
    <!-- Vendor JS Files — deferred to not block rendering -->
    <!-- <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="/assets/vendor/aos/aos.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js"
        integrity="sha512-RBWI5Qf647bcVhqbEnRoL4KuUT+Liz+oG5jtF+HP05Oa5088M9G0GxG0uoHR9cyq35VbjahcI+Hd1xwY8E1/Kg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js" defer></script>
    <!-- CDN Swiper removed — vendor copy above is the single source -->
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js" defer></script>
    <script src="/assets/vendor/php-email-form/validate.js" defer></script>
    <!-- Template Main JS File -->
    <script src="/assets/js/main.js" defer></script>

</body>

</html>
