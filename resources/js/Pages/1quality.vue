<script setup>
import { Head, Link } from '@inertiajs/vue3';

const certifications = [
    { icon: 'bi-patch-check-fill', code: 'ISO 9001:2015',   label: 'Quality Management System' },
    { icon: 'bi-shield-fill-check', code: 'ISO 14001:2015', label: 'Environmental Management System' },
    { icon: 'bi-heart-pulse-fill',  code: 'ISO 45001:2018', label: 'Occupational Health & Safety' },
    { icon: 'bi-award-fill',        code: 'SMK3',           label: 'Sistem Manajemen K3 (PP No.50/2012)' },
];
</script>

<template>
    <Head title="Quality &amp; Risk Management" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/projects/lotte-mps/lotte-mps (3).webp');">
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
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="quality-img-wrap">
                        <img src="/assets/img/projects/lotte-mps/lotte-mps (3).webp"
                             alt="Quality Management" class="quality-img" loading="lazy" width="600" height="460" />
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
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
            <div class="text-center mb-5" data-aos="fade-up">
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
                     data-aos="fade-up" :data-aos-delay="i * 80">
                    <div class="cert-card">
                        <div class="cert-icon-wrap">
                            <i :class="'bi ' + cert.icon"></i>
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
            <div class="quality-mission-inner" data-aos="fade-up">
                <i class="bi bi-quote quality-quote-icon"></i>
                <p class="quality-quote-text">
                    The primary objective of the Quality Department is to foster a strong quality culture
                    and promote risk awareness throughout every level of the RAYA Group of Companies —
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
        <div class="container text-center" style="position:relative;z-index:2;" data-aos="fade-up">
            <span class="section-eyebrow" style="color:rgba(27,47,110,0.7);">Work With Us</span>
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
.quality-overview { padding: 96px 0; background: #fff; }
.quality-img-wrap { border-radius: 20px; overflow: hidden; box-shadow: 0 30px 70px rgba(27,47,110,0.15); }
.quality-img { width: 100%; height: 460px; object-fit: cover; display: block; }
.mt-3 { margin-top: 16px !important; }

/* ── Certifications ── */
.quality-certs-section { padding: 80px 0; background: var(--bg-light, #f8f9fb); }

.cert-card {
    background: #fff; border: 1px solid #e5e7eb; border-radius: 16px;
    padding: 36px 24px; text-align: center; height: 100%;
    transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
}
.cert-card:hover { box-shadow: 0 20px 50px rgba(27,47,110,0.12); transform: translateY(-6px); border-color: #F59E0B; }

.cert-icon-wrap {
    width: 64px; height: 64px; border-radius: 16px;
    background: linear-gradient(135deg, #1B2F6E, #2a47a0);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px; font-size: 28px; color: #F59E0B;
    transition: transform 0.3s;
}
.cert-card:hover .cert-icon-wrap { transform: rotate(-6deg) scale(1.1); }

.cert-code {
    font-family: "Bricolage Grotesque", sans-serif; font-weight: 900;
    font-size: 15px; color: #1B2F6E; margin-bottom: 8px;
    text-transform: uppercase; letter-spacing: 0.5px;
}
.cert-label { font-size: 13px; color: #666; line-height: 1.5; margin: 0; }

/* ── Mission quote ── */
.quality-mission { padding: 80px 0; background: #fff; }
.quality-mission-inner {
    max-width: 780px; margin: 0 auto; text-align: center;
    padding: 48px; background: #f8f9fb; border-radius: 24px;
    border: 1px solid #e5e7eb; position: relative;
}
.quality-quote-icon {
    font-size: 64px; color: #e5e7eb;
    position: absolute; top: 20px; left: 28px; line-height: 1;
}
.quality-quote-text {
    font-family: "Bricolage Grotesque", sans-serif; font-weight: 700;
    font-size: clamp(15px, 1.5vw, 18px); color: #1B2F6E;
    line-height: 1.7; margin: 0 0 28px; position: relative; z-index: 1;
    font-style: italic;
}
.quality-quote-author {
    display: flex; align-items: center; justify-content: center; gap: 16px;
    font-size: 12px; font-weight: 700; color: #767676;
    text-transform: uppercase; letter-spacing: 1px;
}
.quality-author-line { width: 40px; height: 2px; background: #F59E0B; }

/* ── CTA ── */
.quality-cta { padding: 96px 0; position: relative; background: #F59E0B; }
.quality-cta-overlay {
    position: absolute; inset: 0;
    background: url('/assets/img/projects/lotte-mps/lotte-mps (3).webp') center/cover;
    opacity: 0.08; z-index: 0;
}
.quality-cta-title {
    font-family: "Bricolage Grotesque", sans-serif; font-size: clamp(28px, 4vw, 44px);
    font-weight: 900; color: #1B2F6E; margin: 10px 0 20px;
}
.quality-cta-desc {
    font-size: 17px; color: rgba(27,47,110,0.80);
    max-width: 540px; margin: 0 auto 36px; line-height: 1.7;
}

/* ── Responsive ── */
@media (max-width: 991px) { .quality-overview { padding: 60px 0; } .quality-img { height: 300px; } }
@media (max-width: 767px) { .quality-certs-section { padding: 60px 0; } .quality-mission { padding: 60px 0; } .quality-mission-inner { padding: 32px 24px; } .quality-cta { padding: 64px 0; } }
</style>
