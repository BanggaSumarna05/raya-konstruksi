<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<script>
export default {
    data() {
        return {
            hsePolicy: [
                { no: '01', title: 'Embracing HSE as a core value and integral part of our business culture.' },
                { no: '02', title: 'Complying with all applicable HSE laws, regulations, and industry standards.' },
                { no: '03', title: 'Managing HSE risks and opportunities across our workplace and operations.' },
                { no: '04', title: 'Demonstrating HSE ownership through visible and inspiring leadership.' },
                { no: '05', title: 'Reinforcing safe work behaviour through consultation and participation.' },
                { no: '06', title: 'Learning and improving through shared insights and collaboration.' },
            ],
            hseStats: [
                { value: '0',         label: 'Fatalities' },
                { value: '0',         label: 'Lost Time Incident Frequency (LTIF)' },
                { value: '0',         label: 'Total Recordable Incident Frequency (TRIF)' },
            ],
        };
    }
};
</script>

<template>
    <Head title="Health, Safety & Environment" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/cover-plant.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Safety First</span>
            <h1 class="page-hero-title">Health, Safety<br />&amp; Environment</h1>
            <p class="page-hero-sub">
                Target Zero — no injuries, no property damage, no harm to the environment.
            </p>
        </div>
    </section>

    <!-- ── HSE Overview ── -->
    <section class="hse-overview-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <span class="section-eyebrow" style="color: rgba(255,255,255,0.6);">HSE at RAYA</span>
                    <h2 class="section-title text-white mt-2">
                        Our vision is<br /><span style="color: var(--gold);">Target Zero</span>
                    </h2>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <p class="section-body" style="color: rgba(255,255,255,0.78);">
                        The health and safety of our people, and integrity of our operations is our top priority.
                        We strongly believe that all incidents related to people, environment and assets can be prevented.
                    </p>
                    <p class="section-body mt-3" style="color: rgba(255,255,255,0.78);">
                        We focus on preventing personal injuries, work-related illnesses and major accidents.
                        Target Zero has become part of how we think and work, with a strong focus on continuous improvement.
                    </p>
                </div>
            </div>

            <!-- Stats -->
            <div class="row g-4 mt-5">
                <div v-for="(stat, i) in hseStats" :key="i" class="col-md-4"
                     data-aos="fade-up" :data-aos-delay="i * 100">
                    <div class="hse-stat-card">
                        <div class="hse-stat-value">{{ stat.value }}</div>
                        <div class="hse-stat-label">{{ stat.label }}</div>
                    </div>
                </div>
            </div>
            <p class="section-body mt-4" style="color: rgba(255,255,255,0.55); font-size: 13px;">
                LTIF measures actual unintentional serious incidents per million working hours.
                TRIF measures fatalities, lost-time injuries, restricted work and medical treatment injuries per million working hours.
            </p>
        </div>
    </section>

    <!-- ── Safety as a Core Value ── -->
    <section class="hse-culture-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="section-eyebrow">Our Culture</span>
                    <h2 class="section-title mt-2">Safety is a<br />Core Value</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <p class="section-body">
                        Our values embody the spirit and energy of <strong>RAYA</strong> at its best. They help us set direction,
                        and guide our decisions, actions and the way we interact with others.
                    </p>
                    <p class="section-body hse-body-mt">
                        Safety is positioned as the first of five pillars that forms the foundation of the company.
                        Our leaders are expected to drive the development of a strong safety culture founded on our values.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── HSE Policy ── -->
    <section class="hse-policy-section">
        <div class="container">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="section-eyebrow">Our Commitment</span>
                <h2 class="section-title mt-2">RAYA HSE Policy</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body mx-auto hse-policy-intro">
                    The RAYA HSE Policy serves as a foundation document providing guidance aimed at protecting
                    the health and safety of our workers, the environment, and communities in which we operate.
                </p>
            </div>
            <div class="row g-4">
                <div v-for="(item, i) in hsePolicy" :key="i" class="col-md-6 col-lg-4"
                     data-aos="fade-up" :data-aos-delay="i * 80">
                    <div class="hse-policy-card">
                        <div class="hse-policy-num">{{ item.no }}</div>
                        <p class="hse-policy-text">{{ item.title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── HSE Photo Gallery ── -->
    <section class="hse-gallery-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-eyebrow">HSE in Action</span>
                <h2 class="section-title mt-2">Safety on Every Site</h2>
                <div class="section-divider mx-auto"></div>
            </div>
            <div class="row g-3">
                <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="hse-photo-wrap">
                        <img src="/assets/img/projects/lotte/lotte-1.webp" alt="HSE on site" class="hse-photo" loading="lazy" width="400" height="300" />
                    </div>
                </div>
                <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="hse-photo-wrap">
                        <img src="/assets/img/projects/lotte-catalyst/catalyst (1).webp" alt="Catalyst safety" class="hse-photo" loading="lazy" width="400" height="300" />
                    </div>
                </div>
                <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="hse-photo-wrap">
                        <img src="/assets/img/projects/airproduct/cover-1.webp" alt="Plant maintenance safety" class="hse-photo" loading="lazy" width="400" height="300" />
                    </div>
                </div>
                <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="hse-photo-wrap">
                        <img src="/assets/img/projects/rdmp/rdmp-1.webp" alt="Refinery safety" class="hse-photo" loading="lazy" width="400" height="300" />
                    </div>
                </div>
                <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="80">
                    <div class="hse-photo-wrap">
                        <img src="/assets/img/projects/enerco-1/enerco-3.webp" alt="Civil works safety" class="hse-photo" loading="lazy" width="400" height="300" />
                    </div>
                </div>
                <div class="col-md-4 col-6" data-aos="fade-up" data-aos-delay="160">
                    <div class="hse-photo-wrap">
                        <img src="/assets/img/projects/rdmp/rdmp-2.webp" alt="Construction safety" class="hse-photo" loading="lazy" width="400" height="300" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Overview section — dark navy bg */
.hse-overview-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #0a1428 0%, #1B2F6E 100%);
}

/* HSE stats card */
.hse-stat-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    border-top: 3px solid var(--gold);
    border-radius: var(--radius-card);
    padding: 36px 28px;
    text-align: center;
    backdrop-filter: blur(8px);
    transition: background 0.3s;
}
.hse-stat-card:hover { background: rgba(255,255,255,0.10); }
.hse-stat-value {
    font-family: var(--font-head);
    font-size: 56px;
    font-weight: 900;
    color: var(--gold);
    line-height: 1;
    margin-bottom: 10px;
}
.hse-stat-label {
    font-family: var(--font-body);
    font-size: 13px;
    color: rgba(255,255,255,0.65);
    line-height: 1.5;
    font-weight: 500;
}

/* spacing */
.mb-12 { margin-bottom: 48px !important; }
.mt-3  { margin-top: 16px !important; }
.mt-4  { margin-top: 20px !important; }
.mt-5  { margin-top: 28px !important; }

/* HSE Culture & Policy sections */
.hse-culture-section { padding: 80px 0; background: var(--bg-light, #f8f9fb); }
.hse-body-mt { margin-top: 16px; }
.hse-policy-section { padding: 80px 0; background: #fff; }
.hse-policy-intro { max-width: 580px; }
.hse-gallery-section { padding: 80px 0; background: var(--bg-light, #f8f9fb); }

/* HSE Photo Gallery */
.hse-photo-wrap {
    border-radius: 12px;
    overflow: hidden;
    aspect-ratio: 4/3;
    box-shadow: 0 8px 24px rgba(27,47,110,0.10);
}
.hse-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    display: block;
}
.hse-photo-wrap:hover .hse-photo { transform: scale(1.05); }
</style>
