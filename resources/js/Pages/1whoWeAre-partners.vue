<script setup>
import { Head, Link } from '@inertiajs/vue3';

const clients = [
    { img: "/assets/img/client/lotte-chemical.webp",    alt: "Lotte Chemical" },
    { img: "/assets/img/client/logo-air-products.webp", alt: "Air Products" },
    { img: "/assets/img/client/logo-unilever.webp",     alt: "Unilever Oleochemical" },
    { img: "/assets/img/client/apical-retina.webp",     alt: "Apical Group" },
    { img: "/assets/img/client/logo-jadestone.webp",    alt: "Jadestone Energy" },
    { img: "/assets/img/client/bukit-asam.webp",   alt: "Bukit Asam" },
    { img: "/assets/img/client/OKI.webp",          alt: "OKI Pulp & Paper" },
    { img: "/assets/img/client/logo-msm.webp",          alt: "Muria Sumba Manis" },
    { img: "/assets/img/client/logo-enerco.webp",       alt: "Enerco" },
    { img: "/assets/img/client/kine-jo-logo.webp",      alt: "Kine Jo" },
    { img: "/assets/img/client/logo-asraya.webp",       alt: "Casa Asraya" },
    { img: "/assets/img/client/swg.webp",               alt: "SWG" },
    { img: "/assets/img/client/maxiterm.webp",          alt: "Maxiterm" },
    { img: "/assets/img/client/tata.webp",              alt: "Tatamulia Nusantara Indah" },
];
</script>

<template>
    <Head title="Clients &amp; Partners" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/handshake-3.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Trust &amp; Collaboration</span>
            <h1 class="page-hero-title">Clients &amp; Partners</h1>
            <p class="page-hero-sub">
                Indonesia's leading industrial companies trust RAYA to deliver safe,
                high-quality construction and maintenance services.
            </p>
        </div>
    </section>

    <!-- ── Intro stats ── -->
    <section class="partners-intro">
        <div class="container">
            <div class="row justify-content-center text-center gy-4">
                <div class="col-6 col-md-3">
                    <div class="pi-stat">
                        <div class="pi-num">17<sup>+</sup></div>
                        <div class="pi-label">Industry Clients</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pi-stat">
                        <div class="pi-num">50<sup>+</sup></div>
                        <div class="pi-label">Projects Completed</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pi-stat">
                        <div class="pi-num">8<sup>+</sup></div>
                        <div class="pi-label">Years of Partnership</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pi-stat">
                        <div class="pi-num">5</div>
                        <div class="pi-label">Islands Covered</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Logo grid ── -->
    <section class="partners-grid-section">
        <div class="container">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="section-eyebrow">Our Clients</span>
                <h2 class="section-title mt-2">Trusted by Industry Leaders</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body mx-auto" style="max-width: 520px;">
                    From national energy companies to global petrochemical corporations, we're proud to serve
                    Indonesia's most demanding industrial clients.
                </p>
            </div>

            <div class="row g-4">
                <div v-for="(c, i) in clients" :key="i"
                     class="col-6 col-md-3 col-lg-2"
                     data-aos="fade-up" :data-aos-delay="i % 6 * 60">
                    <div class="partner-card">
                        <img :src="c.img" :alt="c.alt" class="partner-logo" />
                        <p class="partner-name">{{ c.alt }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="partners-cta">
        <div class="partners-cta-overlay"></div>
        <div class="container text-center" style="position:relative;z-index:2;" data-aos="fade-up">
            <span class="section-eyebrow" style="color:rgba(27,47,110,0.7);">Join Our Client List</span>
            <h2 class="partners-cta-title">Ready to Partner with RAYA?</h2>
            <p class="partners-cta-desc">
                Join over 17 industry leaders who trust RAYA for their construction, fabrication,
                and maintenance needs across Indonesia.
            </p>
            <Link :href="route('contactUs')" class="btn-primary btn-lg">
                Get in Touch <i class="bi bi-arrow-right"></i>
            </Link>
        </div>
    </section>
</template>

<style scoped>
/* Intro stats */
.partners-intro {
    padding: 56px 0;
    background: var(--navy);
}
.pi-stat { display: flex; flex-direction: column; align-items: center; }
.pi-num {
    font-family: var(--font-head); font-size: clamp(32px, 4vw, 48px);
    font-weight: 900; color: #fff; line-height: 1;
}
.pi-num sup { font-size: 0.55em; color: var(--gold); font-weight: 900; }
.pi-label {
    font-family: var(--font-body); font-size: 11px; font-weight: 700;
    color: rgba(255,255,255,0.50); text-transform: uppercase;
    letter-spacing: 1.5px; margin-top: 6px;
}

/* Grid */
.partners-grid-section { padding: 80px 0; background: var(--bg-light); }
.mb-12 { margin-bottom: 48px; }

.partner-card {
    background: #fff; border: 1px solid var(--border);
    border-radius: var(--radius-card);
    padding: 28px 16px 18px;
    display: flex; flex-direction: column;
    align-items: center; text-align: center;
    transition: box-shadow 0.3s, transform 0.3s;
}
.partner-card:hover { box-shadow: var(--shadow-md); transform: translateY(-4px); }
.partner-logo {
    height: 52px; max-width: 120px; object-fit: contain;
    filter: grayscale(60%); opacity: 0.75;
    transition: filter 0.3s, opacity 0.3s;
    margin-bottom: 12px;
}
.partner-card:hover .partner-logo { filter: grayscale(0%); opacity: 1; }
.partner-name {
    font-family: var(--font-body); font-size: 11px; font-weight: 700;
    color: var(--text-muted); text-align: center; margin: 0;
    text-transform: uppercase; letter-spacing: 0.5px;
}

/* CTA */
.partners-cta { padding: 96px 0; position: relative; background: var(--gold); }
.partners-cta-overlay {
    position: absolute; inset: 0;
    background: url('/assets/img/handshake-3.webp') center/cover;
    opacity: 0.06; z-index: 0;
}
.partners-cta-title {
    font-family: var(--font-head); font-size: clamp(28px, 4vw, 44px);
    font-weight: 900; color: var(--navy); margin: 10px 0 20px;
}
.partners-cta-desc {
    font-size: 17px; color: rgba(27,47,110,0.80);
    max-width: 580px; margin: 0 auto 36px; line-height: 1.7;
}
</style>
