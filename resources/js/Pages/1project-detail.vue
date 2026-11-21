<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import { usePageMotion } from '../Composables/usePageMotion';

usePageMotion();

const props = defineProps({
    project: { type: Object, required: true }
});

const lightboxOpen = ref(false);
const lightboxIndex = ref(0);

function openLightbox(index) {
    lightboxIndex.value = index;
    lightboxOpen.value = true;
}

function closeLightbox() {
    lightboxOpen.value = false;
}

function prevImage() {
    lightboxIndex.value = (lightboxIndex.value - 1 + props.project.gallery.length) % props.project.gallery.length;
}

function nextImage() {
    lightboxIndex.value = (lightboxIndex.value + 1) % props.project.gallery.length;
}

function onKeydown(e) {
    if (!lightboxOpen.value) return;
    if (e.key === 'ArrowLeft') prevImage();
    if (e.key === 'ArrowRight') nextImage();
    if (e.key === 'Escape') closeLightbox();
}
</script>

<template>
    <Head :title="project.title" />

    <!-- Keyboard navigation for lightbox -->
    <div @keydown="onKeydown" tabindex="-1" style="outline:none;">

    <!-- ── Page Hero ── -->
    <section class="page-hero proj-hero" :style="`background-image: url('${project.image}')`">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">{{ project.service_type }}</span>
            <h1 class="page-hero-title">{{ project.title }}</h1>
            <div class="proj-hero-meta">
                <span v-if="project.client"><i class="bi bi-building"></i> {{ project.client }}</span>
                <span v-if="project.location"><i class="bi bi-geo-alt-fill"></i> {{ project.location }}</span>
                <span v-if="project.duration"><i class="bi bi-calendar3"></i> {{ project.duration }}</span>
            </div>
        </div>
    </section>

    <!-- ── Back + Info ── -->
    <section class="proj-info-section">
        <div class="container">
            <Link :href="route('portfolio')" class="proj-back-link">
                <i class="bi bi-arrow-left"></i> Back to Portfolio
            </Link>

            <div class="proj-info-grid" v-if="project.description || project.client">
                <div class="proj-info-card" v-if="project.client">
                    <div class="proj-info-label">Client</div>
                    <div class="proj-info-value">{{ project.client }}</div>
                </div>
                <div class="proj-info-card" v-if="project.location">
                    <div class="proj-info-label">Location</div>
                    <div class="proj-info-value">{{ project.location }}</div>
                </div>
                <div class="proj-info-card" v-if="project.duration">
                    <div class="proj-info-label">Duration</div>
                    <div class="proj-info-value">{{ project.duration }}</div>
                </div>
                <div class="proj-info-card" v-if="project.service_type">
                    <div class="proj-info-label">Service Type</div>
                    <div class="proj-info-value">{{ project.service_type }}</div>
                </div>
            </div>

            <div class="proj-description" v-if="project.description">
                <p>{{ project.description }}</p>
            </div>
        </div>
    </section>

    <!-- ── Gallery ── -->
    <section class="proj-gallery-section" v-if="project.gallery && project.gallery.length > 0">
        <div class="container">
            <span class="section-eyebrow">Documentation</span>
            <h2 class="section-title mt-1 mb-5">Project Gallery</h2>

            <div class="proj-gallery-grid">
                <div
                    v-for="(img, i) in project.gallery"
                    :key="i"
                    class="proj-gallery-item"
                    @click="openLightbox(i)"
                >
                    <img :src="img" :alt="project.title + ' photo ' + (i+1)" loading="lazy" />
                    <div class="proj-gallery-overlay">
                        <i class="bi bi-zoom-in"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Empty gallery state ── -->
    <section class="proj-gallery-section" v-else>
        <div class="container text-center" style="padding: 60px 0;">
            <i class="bi bi-images" style="font-size: 48px; color: var(--tint);"></i>
            <p style="color: var(--muted); margin-top: 16px;">Gallery is not available for this project yet.</p>
        </div>
    </section>

    <!-- ── Lightbox ── -->
    <Teleport to="body">
        <div v-if="lightboxOpen" class="proj-lightbox" @click.self="closeLightbox">
            <button class="proj-lb-close" @click="closeLightbox">
                <i class="bi bi-x-lg"></i>
            </button>
            <button class="proj-lb-prev" @click="prevImage" v-if="project.gallery.length > 1">
                <i class="bi bi-chevron-left"></i>
            </button>
            <div class="proj-lb-img-wrap">
                <img :src="project.gallery[lightboxIndex]" :alt="project.title" />
                <div class="proj-lb-counter">{{ lightboxIndex + 1 }} / {{ project.gallery.length }}</div>
            </div>
            <button class="proj-lb-next" @click="nextImage" v-if="project.gallery.length > 1">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </Teleport>

    </div>
</template>

<style scoped>
/* ── Hero ── */
.proj-hero { min-height: 52vh; }
.proj-hero .page-hero-title { font-size: clamp(32px, 4.6vw, 64px); max-width: 20ch; }
.proj-hero-meta {
    display: flex; flex-wrap: wrap; gap: 20px; margin-top: 16px;
}
.proj-hero-meta span {
    display: flex; align-items: center; gap: 8px;
    font-size: 14px; color: rgba(255,255,255,0.8);
    font-family: "Figtree", sans-serif;
}
.proj-hero-meta i { color: var(--tint); }

/* ── Info section ── */
.proj-info-section { padding: 48px 0 32px; background: var(--paper); }
.proj-back-link {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: 14px; font-weight: 600; color: var(--gold);
    text-decoration: none; margin-bottom: 32px;
    transition: gap 0.2s;
}
.proj-back-link:hover { gap: 12px; }
.proj-info-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 16px; margin-bottom: 32px;
}
.proj-info-card {
    background: #fff; border: 1px solid var(--border);
    border-radius: var(--radius-card); padding: 20px;
}
.proj-info-label {
    font-size: 11px; font-weight: 700; color: var(--muted);
    text-transform: uppercase; letter-spacing: 1px; margin-bottom: 6px;
}
.proj-info-value {
    font-size: 15px; font-weight: 600; color: var(--eerie);
    font-family: "Figtree", sans-serif;
}
.proj-description {
    max-width: 720px;
    font-size: 16px; line-height: 1.75; color: var(--text-body);
    font-family: "Figtree", sans-serif;
}

/* ── Gallery ── */
.proj-gallery-section { padding: 64px 0; background: var(--paper); }
.proj-gallery-section .section-title { color: var(--eerie); }

.proj-gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
}
@media (max-width: 768px) {
    .proj-gallery-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 480px) {
    .proj-gallery-grid { grid-template-columns: 1fr; }
}

.proj-gallery-item {
    position: relative; overflow: hidden;
    border-radius: var(--radius-card); cursor: pointer;
    aspect-ratio: 4/3;
    background: var(--off);
}
.proj-gallery-item img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.4s ease;
    display: block;
}
.proj-gallery-item:hover img { transform: scale(1.06); }
.proj-gallery-overlay {
    position: absolute; inset: 0;
    background: rgba(13,20,40,0.45);
    display: flex; align-items: center; justify-content: center;
    opacity: 0; transition: opacity 0.3s;
}
.proj-gallery-item:hover .proj-gallery-overlay { opacity: 1; }
.proj-gallery-overlay i { font-size: 28px; color: #fff; }

/* ── Lightbox ── */
.proj-lightbox {
    position: fixed; inset: 0; z-index: 9999;
    background: rgba(0,0,0,0.93);
    display: flex; align-items: center; justify-content: center;
}
.proj-lb-img-wrap {
    max-width: 90vw; max-height: 90vh;
    position: relative; display: flex; flex-direction: column; align-items: center;
}
.proj-lb-img-wrap img {
    max-width: 90vw; max-height: 82vh;
    object-fit: contain; border-radius: 8px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.6);
}
.proj-lb-counter {
    margin-top: 12px; font-size: 13px;
    color: rgba(255,255,255,0.5); font-family: "Figtree", sans-serif;
}
.proj-lb-close {
    position: fixed; top: 20px; right: 24px;
    background: rgba(255,255,255,0.1); border: none;
    color: #fff; font-size: 20px;
    width: 44px; height: 44px; border-radius: 50%;
    cursor: pointer; display: flex; align-items: center; justify-content: center;
    transition: background 0.2s;
}
.proj-lb-close:hover { background: rgba(255,255,255,0.2); }
.proj-lb-prev, .proj-lb-next {
    position: fixed; top: 50%; transform: translateY(-50%);
    background: rgba(255,255,255,0.1); border: none;
    color: #fff; font-size: 22px;
    width: 48px; height: 48px; border-radius: 50%;
    cursor: pointer; display: flex; align-items: center; justify-content: center;
    transition: background 0.2s;
}
.proj-lb-prev { left: 20px; }
.proj-lb-next { right: 20px; }
.proj-lb-prev:hover, .proj-lb-next:hover { background: rgba(255,255,255,0.2); }
</style>
