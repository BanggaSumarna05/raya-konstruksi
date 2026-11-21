<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { usePageMotion } from '../Composables/usePageMotion';

usePageMotion();

defineProps({
    projects: { type: Array, required: true }
});

const getImageUrl = (imagePath) => {
    if (!imagePath) return '/assets/img/refresh/portfolio-hero.webp';
    if (imagePath.startsWith('/') || imagePath.startsWith('http')) return imagePath;
    return `/storage/${imagePath}`;
};
</script>

<template>
    <Head title="Our Projects & Portfolio" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/refresh/portfolio-hero.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Portfolio</span>
            <h1 class="page-hero-title">Our Projects</h1>
            <p class="page-hero-sub">
                A track record of excellence in construction, fabrication, and maintenance
                across major industrial sectors in Indonesia.
            </p>
        </div>
    </section>

    <!-- ── Portfolio Grid ── -->
    <section class="portfolio-grid-section" aria-label="Project portfolio">
        <h2 class="visually-hidden">Project Portfolio</h2>
        <!-- Grid -->
        <div class="portfolio-grid">
            <a
                v-for="(project, index) in projects"
                :key="index"
                :href="project.slug ? route('projectDetail', project.slug) : '#'"
                class="pf-card"
            >
                <!-- Background photo -->
                <div
                    class="pf-card-bg"
                    :style="{
                        backgroundImage: `url('${getImageUrl(project.image)}')`,
                        backgroundSize: 'cover',
                        backgroundPosition: 'center'
                    }"
                ></div>

                <!-- Dark gradient overlay -->
                <div class="pf-overlay"></div>

                <!-- Content -->
                <div class="pf-content">
                    <span class="pf-badge">{{ project.service_type }}</span>
                    <h3 class="pf-title">{{ project.title }}</h3>

                    <!-- Slide-up meta on hover -->
                    <div class="pf-meta">
                        <div v-if="project.location" class="pf-meta-row">
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>{{ project.location }}</span>
                        </div>
                        <div v-if="project.client" class="pf-meta-row">
                            <i class="bi bi-building"></i>
                            <span>{{ project.client }}</span>
                        </div>
                        <div v-if="project.duration" class="pf-meta-row">
                            <i class="bi bi-calendar3"></i>
                            <span>{{ project.duration }}</span>
                        </div>
                    </div>

                    <span class="pf-cta">
                        View Details
                        <i class="bi bi-arrow-right"></i>
                    </span>
                </div>

                <!-- Accent border bottom sweep -->
                <div class="pf-border"></div>
            </a>
        </div>
    </section>
</template>

<style scoped>
.visually-hidden {
    position: absolute !important;
    width: 1px; height: 1px;
    padding: 0; margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* ── Section ── */
.portfolio-grid-section {
    padding: 0;
    background: var(--navy);
}

/* ── Grid ── */
.portfolio-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

/* ── Card ── */
.pf-card {
    position: relative;
    min-height: 380px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 28px 24px;
    overflow: hidden;
    cursor: pointer;
    text-decoration: none;
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.07);
}

/* ── Photo background ── */
.pf-card-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.pf-card:hover .pf-card-bg {
    transform: scale(1.08);
}

/* ── Gradient overlay ── */
.pf-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(
        to top,
        rgba(13, 20, 40, 0.96) 0%,
        rgba(18, 28, 58, 0.62) 45%,
        rgba(18, 28, 58, 0.16) 100%
    );
}

/* ── Content ── */
.pf-content {
    position: relative;
    z-index: 3;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* ── Badge ── */
.pf-badge {
    display: inline-block;
    background: rgba(43, 65, 132, 0.85);
    color: #fff;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 4px 12px;
    border-radius: 50px;
    width: fit-content;
    backdrop-filter: blur(6px);
}

/* ── Title ── */
.pf-title {
    font-family: "Figtree", sans-serif;
    font-weight: 800;
    font-size: clamp(15px, 1.4vw, 19px);
    color: #fff;
    line-height: 1.3;
    margin: 0;
}

/* ── Meta (slide-up on hover) ── */
.pf-meta {
    display: flex;
    flex-direction: column;
    gap: 5px;
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transition: max-height 0.4s ease, opacity 0.35s ease;
    will-change: max-height;
    contain: layout;
}
.pf-card:hover .pf-meta {
    max-height: 80px;
    opacity: 1;
}
.pf-meta-row {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    color: rgba(255, 255, 255, 0.65);
}
.pf-meta-row i {
    color: var(--tint);
    font-size: 12px;
}

/* ── CTA link ── */
.pf-cta {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: var(--tint);
    margin-top: 4px;
}
.pf-cta i, .pf-cta svg {
    transition: transform 0.25s ease;
}
.pf-card:hover .pf-cta i, .pf-card:hover .pf-cta svg {
    transform: translateX(4px);
}

/* ── Gold border bottom sweep ── */
.pf-border {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    width: 100%;
    background: var(--tint);
    z-index: 4;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.45s ease;
}
.pf-card:hover .pf-border {
    transform: scaleX(1);
}

/* ── Responsive ── */
@media (max-width: 991px) {
    .portfolio-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 575px) {
    .portfolio-grid {
        grid-template-columns: 1fr;
    }
    .pf-card {
        min-height: 300px;
    }
    /* Always show meta on mobile (no hover) */
    .pf-meta {
        max-height: 80px;
        opacity: 1;
    }
}
</style>
