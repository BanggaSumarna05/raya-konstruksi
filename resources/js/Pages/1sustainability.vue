<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Sustainability" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/cover-plant.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Our Commitment</span>
            <h1 class="page-hero-title">Sustainability</h1>
            <p class="page-hero-sub">
                A balanced responsibility across economic performance, social contribution,
                and environmental stewardship.
            </p>
        </div>
    </section>

    <!-- ── HSE ── -->
    <section class="sust-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="sust-img-wrap">
                        <img src="/assets/img/cover-plant.webp" alt="Health, Safety & Environment" class="sust-img" />
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5" data-aos="fade-left">
                    <span class="section-eyebrow">People &amp; Safety</span>
                    <h2 class="section-title mt-2">Health, Safety &amp;<br />Environment</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        Through the dedication of its management and staff, RAYA has received several awards
                        from our clients in recognition for maintaining exemplary levels of safety at the
                        worksites while remaining committed to maintaining a high level of service excellence
                        and efficiency during the course of our projects.
                    </p>
                    <Link :href="route('safety')" class="btn-primary mt-4">
                        Discover More <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CSR ── -->
    <section class="sust-section" style="background: var(--bg-light);">
        <div class="container">
            <div class="row align-items-center gy-5 flex-column-reverse flex-lg-row">
                <div class="col-lg-5 pe-lg-5" data-aos="fade-right">
                    <span class="section-eyebrow">Community &amp; Environment</span>
                    <h2 class="section-title mt-2">Corporate Social<br />Responsibility</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        Raya Konstruksi is grounded in the understanding that business sustainability requires
                        a balanced responsibility across economic performance, social contribution, and
                        environmental stewardship.
                    </p>
                    <Link :href="route('respon')" class="btn-primary mt-4">
                        Discover More <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="sust-img-wrap">
                        <img src="/assets/img/respon.webp" alt="Corporate Social Responsibility" class="sust-img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.sust-section { padding: 80px 0; background: #fff; }
.mt-4 { margin-top: 20px !important; }
.sust-img-wrap { border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-lg); }
.sust-img { width: 100%; height: 420px; object-fit: cover; display: block; }

@media (max-width: 991px) {
    .sust-img { height: 320px; }
}
@media (max-width: 767px) {
    .sust-section { padding: 60px 0; }
    .sust-img { height: 240px; }
}
</style>
