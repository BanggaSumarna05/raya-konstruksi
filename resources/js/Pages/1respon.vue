<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<script>
export default {
    data() {
        return {
            sdgs: [
                { no: 'SDG 6',  title: 'Clean Water and Sanitation',                img: "/assets/img/sdg/Sustainable_Development_Goal_06CleanWaterSanitation.svg" },
                { no: 'SDG 7',  title: 'Affordable and Clean Energy',               img: "/assets/img/sdg/Sustainable_Development_Goal_07CleanEnergy.svg" },
                { no: 'SDG 9',  title: 'Industry, Innovation, and Infrastructure',  img: "/assets/img/sdg/Sustainable_Development_Goal_09Industry.webp" },
                { no: 'SDG 11', title: 'Sustainable Cities and Communities',        img: "/assets/img/sdg/Sustainable_Development_Goal_11SustainableCities.svg" },
                { no: 'SDG 12', title: 'Responsible Consumption and Production',    img: "/assets/img/sdg/Sustainable_Development_Goal_12ResponsibleConsumption.svg" },
                { no: 'SDG 13', title: 'Climate Action',                            img: "/assets/img/sdg/Sustainable_Development_Goal_13Climate.svg" },
            ],
        };
    },
};
</script>

<template>
    <Head title="Corporate Social Responsibility" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/respon.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Sustainability</span>
            <h1 class="page-hero-title">Corporate Social<br />Responsibility</h1>
            <p class="page-hero-sub">
                Business sustainability through balanced responsibility across economic performance,
                social contribution, and environmental stewardship.
            </p>
        </div>
    </section>

    <!-- ── CSR Overview ── -->
    <section class="csr-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="section-eyebrow">CSR at RAYA</span>
                    <h2 class="section-title mt-2">Our Corporate<br />Social Responsibility</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        CSR at <strong>Raya Konstruksi</strong> is grounded in the understanding that business
                        sustainability requires a balanced responsibility across economic performance, social
                        contribution, and environmental stewardship. CSR is integrated into RAYA's operational
                        and strategic framework to ensure long-term value creation for all stakeholders.
                    </p>
                </div>
                <div class="col-lg-7 ps-lg-5" data-aos="fade-left" data-aos-delay="80">
                    <!-- Dual responsibility cards -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="csr-pillar-card">
                                <div class="csr-pillar-icon"><i class="bi bi-bar-chart-fill"></i></div>
                                <h5 class="csr-pillar-title">Economic Responsibility</h5>
                                <p class="csr-pillar-desc">Ensuring business continuity, operational excellence, and value creation for all stakeholders.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="csr-pillar-card">
                                <div class="csr-pillar-icon"><i class="bi bi-people-fill"></i></div>
                                <h5 class="csr-pillar-title">Social Responsibility</h5>
                                <p class="csr-pillar-desc">Fostering social well-being through ethical operations and community contribution.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="csr-pillar-card">
                                <div class="csr-pillar-icon"><i class="bi bi-tree-fill"></i></div>
                                <h5 class="csr-pillar-title">Environmental Stewardship</h5>
                                <p class="csr-pillar-desc">Minimising environmental impact and contributing positively to the ecosystems we operate in.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="csr-pillar-card">
                                <div class="csr-pillar-icon"><i class="bi bi-globe-asia-australia"></i></div>
                                <h5 class="csr-pillar-title">Governance &amp; Compliance</h5>
                                <p class="csr-pillar-desc">Operating ethically with transparent governance aligned to laws and international standards.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── SDGs ── -->
    <section class="csr-section" style="background: var(--bg-light);">
        <div class="container">
            <div class="row gy-4 mb-10">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="section-eyebrow">Global Alignment</span>
                    <h2 class="section-title mt-2">Sustainable Development<br />Goals (SDGs)</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <p class="section-body">
                        The <strong>SDGs</strong> are highly relevant to the construction industry given its
                        significant contribution to energy consumption, resource utilisation, and environmental
                        impact. As a key driver of infrastructure development, the construction sector plays a
                        strategic role in supporting sustainable economic growth.
                    </p>
                    <p class="section-body mt-3">
                        <strong>Raya Konstruksi</strong> is committed to advancing sustainable construction
                        practices through green building principles, improved energy and water efficiency,
                        responsible use of materials, and fair and ethical working practices.
                    </p>
                </div>
            </div>

            <div class="sdg-heading mb-4" data-aos="fade-up">
                <h4 class="section-title" style="font-size: 18px;">Our initiatives directly support:</h4>
            </div>

            <div class="row g-4">
                <div v-for="(sdg, i) in sdgs" :key="i"
                     class="col-6 col-md-4 col-lg-2"
                     data-aos="fade-up" :data-aos-delay="i * 60">
                    <div class="sdg-card">
                        <img :src="sdg.img" :alt="sdg.title" class="sdg-img" />
                        <p class="sdg-label">{{ sdg.title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.csr-section { padding: 80px 0; background: #fff; }
.mt-3 { margin-top: 16px !important; }
.mb-4 { margin-bottom: 20px !important; }
.mb-10 { margin-bottom: 48px !important; }

/* Pillar cards */
.csr-pillar-card {
    background: var(--bg-light); border: 1px solid var(--border);
    border-top: 4px solid var(--navy); border-radius: 12px;
    padding: 22px 20px; height: 100%;
    transition: box-shadow 0.3s, transform 0.3s;
}
.csr-pillar-card:hover { box-shadow: var(--shadow-md); transform: translateY(-4px); border-top-color: var(--gold); }
.csr-pillar-icon {
    width: 44px; height: 44px; background: var(--navy);
    border-radius: 10px; display: flex; align-items: center;
    justify-content: center; font-size: 18px; color: var(--gold);
    margin-bottom: 14px;
}
.csr-pillar-title {
    font-family: var(--font-head); font-size: 14px; font-weight: 800;
    color: var(--navy); margin-bottom: 8px;
}
.csr-pillar-desc { font-size: 13px; color: var(--text-body); line-height: 1.6; margin: 0; }

/* SDG cards */
.sdg-card {
    background: #fff; border: 1px solid var(--border);
    border-radius: 12px; padding: 14px; text-align: center;
    transition: box-shadow 0.3s, transform 0.3s;
}
.sdg-card:hover { box-shadow: var(--shadow-md); transform: translateY(-4px); }
.sdg-img { width: 100%; aspect-ratio: 1; object-fit: contain; }
.sdg-label {
    font-family: var(--font-body); font-size: 11px; font-weight: 700;
    color: var(--text-body); margin: 8px 0 0; line-height: 1.3;
}
</style>
