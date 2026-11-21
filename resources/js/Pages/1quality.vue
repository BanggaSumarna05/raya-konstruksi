<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { usePageMotion } from '../Composables/usePageMotion';

usePageMotion();

const certifications = [
    {
        logo: '/assets/img/certifications/iso-9001-2015.png', logoW: 160, logoH: 149,
        code: 'ISO 9001:2015',   label: 'Quality Management System',
    },
    {
        logo: '/assets/img/certifications/iso-14001-2015.png', logoW: 153, logoH: 155,
        code: 'ISO 14001:2015', label: 'Environmental Management System',
    },
    {
        logo: '/assets/img/certifications/iso-45001-2018.png', logoW: 450, logoH: 300,
        code: 'ISO 45001:2018', label: 'Occupational Health & Safety',
    },
    {
        logo: '/assets/img/certifications/smk3.png', logoW: 417, logoH: 417, round: true,
        code: 'SMK3', label: 'Sistem Manajemen K3 (PP No.50/2012)',
    },
];
</script>

<template>
    <Head title="Quality &amp; Risk Management" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/refresh/quality-hero.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Our Standards</span>
            <h1 class="page-hero-title">Quality &amp;<br />Risk Management</h1>
            <p class="page-hero-sub">
                A robust Integrated Management System certified to international standards,
                ensuring excellence on every project.
            </p>
        </div>
    </section>

    <!-- ── Overview ── -->
    <section class="quality-overview">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-rv>
                    <div class="quality-img-wrap">
                        <img src="/assets/img/refresh/safety-1.webp"
                             alt="Raya Konstruksi crew inspecting a pipeline connection at a project site" class="quality-img" loading="lazy" width="800" height="600" />
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-rv>
                    <span class="section-eyebrow">Quality Department</span>
                    <h2 class="section-title">Integrated Management<br />System</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        The Quality Department leads quality-related initiatives and manages the
                        <strong>Integrated Management System (IMS)</strong>. With a robust risk management
                        framework including a stringent project tender review process and the monthly
                        Project Risk Evaluation initiative, the department adopts a proactive approach to
                        managing project risks and ensuring the delivery of high-quality, defect-free
                        products to clients.
                    </p>
                    <p class="section-body mt-3">
                        The team also conducts internal assessments and audits at project sites in
                        various stages of construction across the region, ensuring that key elements such
                        as corporate governance, risk management, internal controls, and quality assurance
                        are effectively implemented.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Certifications ── -->
    <section class="quality-certs-section">
        <div class="container">
            <div class="text-center mb-5" data-rv>
                <span class="section-eyebrow">Our Certifications</span>
                <h2 class="section-title mt-2">Certified to International Standards</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body mx-auto" style="max-width: 560px;">
                    RAYA's IMS is certified to several international standards, ensuring world-class
                    quality, safety, and environmental performance.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div v-for="(cert, i) in certifications" :key="i"
                     class="col-sm-6 col-lg-3"
                     data-rv :data-rv-delay="i * 80">
                    <div class="cert-card">
                        <div class="cert-visual">
                            <img :src="cert.logo"
                                 :alt="cert.code + ' certification badge'"
                                 :width="cert.logoW" :height="cert.logoH"
                                 :class="['cert-logo', { 'cert-logo--round': cert.round }]"
                                 loading="lazy" decoding="async" />
                        </div>
                        <div class="cert-code">{{ cert.code }}</div>
                        <div class="cert-label">{{ cert.label }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Mission statement ── -->
    <section class="quality-mission">
        <div class="container">
            <div class="quality-mission-inner" data-rv>
                <i class="bi bi-quote quality-quote-icon"></i>
                <p class="quality-quote-text">
                    The primary objective of the Quality Department is to foster a strong quality culture
                    and promote risk awareness throughout every level of the RAYA Group of Companies,
                    supporting our mission of delivering superior and comprehensive engineering solutions
                    to customers worldwide.
                </p>
                <div class="quality-quote-author">
                    <div class="quality-author-line"></div>
                    <span>Quality &amp; Risk Management Department</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="quality-cta">
        <div class="quality-cta-overlay"></div>
        <div class="container text-center" style="position:relative;z-index:2;" data-rv>
            <span class="section-eyebrow">Work With Us</span>
            <h2 class="quality-cta-title">Quality You Can Trust</h2>
            <p class="quality-cta-desc">
                Our certified quality system ensures every project is delivered to the highest
                standards of excellence and compliance.
            </p>
            <Link :href="route('contactUs')" class="btn-primary btn-lg">
                Contact Us <i class="bi bi-arrow-right ms-2"></i>
            </Link>
        </div>
    </section>
</template>

<style scoped>
/* ── Overview ── */
.quality-overview { padding: 96px 0; background: var(--paper); }
.quality-img-wrap { border-radius: 20px; overflow: hidden; box-shadow: 0 30px 70px rgba(43,65,132,0.15); }
.quality-img { width: 100%; height: 460px; object-fit: cover; display: block; }
.mt-3 { margin-top: 16px !important; }

/* ── Certifications ── */
.quality-certs-section { padding: 80px 0; background: var(--off); }

.cert-card {
    background: #fff; border: 1px solid #D9DDE5; border-radius: 16px;
    padding: 36px 24px; text-align: center; height: 100%;
    transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
}
.cert-card:hover { box-shadow: 0 20px 50px rgba(43,65,132,0.12); transform: translateY(-6px); border-color: var(--navy); }

.cert-visual {
    height: 104px; display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
}
.cert-logo { height: 100px; width: auto; display: block; transition: transform 0.3s; }
.cert-logo--round { border-radius: 50%; }
.cert-card:hover .cert-logo { transform: scale(1.04); }

.cert-code {
    font-family: "Figtree", sans-serif; font-weight: 900;
    font-size: 15px; color: #2B4184; margin-bottom: 8px;
    text-transform: uppercase; letter-spacing: 0.5px;
}
.cert-label { font-size: 13px; color: #666; line-height: 1.5; margin: 0; }

/* ── Mission quote ── */
.quality-mission { padding: 80px 0; background: var(--paper); }
.quality-mission-inner {
    max-width: 780px; margin: 0 auto; text-align: center;
    padding: 48px; background: #fff; border-radius: 24px;
    border: 1px solid var(--border); position: relative;
}
.quality-quote-icon {
    font-size: 64px; color: rgba(30,30,30,0.12);
    position: absolute; top: 20px; left: 28px; line-height: 1;
}
.quality-quote-text {
    font-family: "Figtree", sans-serif; font-weight: 700;
    font-size: clamp(15px, 1.5vw, 18px); color: var(--eerie);
    line-height: 1.7; margin: 0 0 28px; position: relative; z-index: 1;
    font-style: italic;
}
.quality-quote-author {
    display: flex; align-items: center; justify-content: center; gap: 16px;
    font-size: 12px; font-weight: 700; color: var(--muted);
    text-transform: uppercase; letter-spacing: 1px;
}
.quality-author-line { width: 40px; height: 2px; background: var(--gold); }

/* ── CTA ── */
/* CTA — band foto, sama dengan CTA home */
.quality-cta { padding: 120px 0; position: relative; overflow: hidden; background: #2B4184; isolation: isolate; }
.quality-cta-overlay {
    position: absolute; inset: 0; z-index: -1;
    background: url('/assets/img/refresh/cta.webp') center/cover;
}
.quality-cta-overlay::after {
    content: ""; position: absolute; inset: 0;
    background:
        linear-gradient(180deg, rgba(30,30,30,0.55) 0%, rgba(20,26,36,0.72) 100%),
        radial-gradient(80% 64% at 50% 48%, rgba(18,25,36,0.55) 0%, rgba(18,25,36,0.25) 55%, rgba(18,25,36,0) 80%);
}
.quality-cta-title {
    font-family: "Figtree", sans-serif;
    font-size: clamp(34px, 4.6vw, 64px); font-weight: 800;
    line-height: 0.98; letter-spacing: -0.01em; text-transform: uppercase;
    color: #fff; margin: 10px 0 20px;
    text-shadow: 0 2px 40px rgba(12,18,28,0.45);
}
.quality-cta-desc {
    font-size: 17px; color: rgba(255,255,255,0.78);
    max-width: 540px; margin: 0 auto 36px; line-height: 1.7;
}
.quality-cta .section-eyebrow { color: rgba(255,255,255,0.8); }
.quality-cta .section-eyebrow::before { background: var(--tint); }

/* ── Responsive ── */
@media (max-width: 991px) { .quality-overview { padding: 60px 0; } .quality-img { height: 300px; } }
@media (max-width: 767px) { .quality-certs-section { padding: 60px 0; } .quality-mission { padding: 60px 0; } .quality-mission-inner { padding: 32px 24px; } .quality-cta { padding: 64px 0; } }
</style>
