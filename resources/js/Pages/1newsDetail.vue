<script setup>
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({ blog: Object });

function convertMedia(content) {
    if (!content) return content;
    const youtubeRegex = /https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/shorts\/)([\w-]+)/g;
    content = content.replace(youtubeRegex, (match, videoId) => `
        <div class="ratio ratio-16x9 my-4">
            <iframe src="https://www.youtube.com/embed/${videoId}"
                title="YouTube video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen style="width:100%; height:100%; border:0;">
            </iframe>
        </div>`);
    const localVideoRegex = /(https?:\/\/[^\s]+?\.(mp4|webm)|\/storage\/[^\s]+?\.(mp4|webm))/g;
    content = content.replace(localVideoRegex, (url) => `
        <div class="my-4">
            <video controls style="width:100%; border-radius:10px;">
                <source src="${url}" type="video/mp4">
            </video>
        </div>`);
    return content;
}
</script>

<template>
    <Head :title="blog.title" />

    <!-- ── Page Hero — always use default bg, no photo here ── -->
    <section class="page-hero nd-hero"
        style="background-image: url('/assets/img/hero-carousel/hover-2-new.webp')">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">News &amp; Events</span>
            <h1 class="page-hero-title nd-title">{{ blog.title }}</h1>
            <div class="nd-meta">
                <span><i class="bi bi-person"></i> {{ blog.user?.name || 'IT Officer' }}</span>
                <span class="nd-meta-dot">·</span>
                <span>
                    <i class="bi bi-calendar3"></i>
                    {{ new Date(blog.published_at).toLocaleDateString('id-ID', { year:'numeric', month:'long', day:'numeric' }) }}
                </span>
            </div>
        </div>
    </section>

    <!-- ── Article body ── -->
    <section class="nd-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- Featured image — shown as proper article image -->
                    <div v-if="blog.image" class="nd-featured-img-wrap">
                        <img
                            :src="`/storage/${blog.image}`"
                            :alt="blog.title"
                            class="nd-featured-img"
                        />
                    </div>

                    <article class="nd-article" v-html="convertMedia(blog.content)"></article>

                    <div class="nd-back">
                        <Link :href="route('news')" class="btn-outline">
                            ← Back to News
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Hero overrides for news detail */
.nd-hero { min-height: 40vh; align-items: flex-end; }
.nd-title {
    font-size: clamp(26px, 4vw, 52px);
    letter-spacing: -0.5px;
    max-width: 780px;
}
.nd-meta {
    display: flex; align-items: center; gap: 10px;
    margin-top: 14px;
    font-family: var(--font-body); font-size: 14px;
    color: rgba(255,255,255,0.65);
}
.nd-meta i { margin-right: 4px; }
.nd-meta-dot { color: rgba(255,255,255,0.35); }

/* Article body */
.nd-body { padding: 64px 0 96px; background: #fff; }

/* Featured image */
.nd-featured-img-wrap {
    margin-bottom: 40px;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 12px 40px rgba(27,47,110,0.12);
}
.nd-featured-img {
    width: 100%;
    max-height: 480px;
    object-fit: cover;
    display: block;
}

/* Article content */
.nd-article {
    font-family: var(--font-body);
    font-size: 16px; line-height: 1.85;
    color: var(--text-body);
}
:deep(.nd-article h1),
:deep(.nd-article h2),
:deep(.nd-article h3),
:deep(.nd-article h4) {
    font-family: var(--font-head);
    font-weight: 800; color: var(--navy);
    margin: 32px 0 12px; line-height: 1.25;
}
:deep(.nd-article h2) { font-size: 26px; }
:deep(.nd-article h3) { font-size: 20px; }
:deep(.nd-article p)  { margin-bottom: 18px; }
:deep(.nd-article img) {
    width: 100%; border-radius: 12px;
    box-shadow: var(--shadow-md); margin: 24px 0;
}
:deep(.nd-article ul),
:deep(.nd-article ol) {
    padding-left: 24px; margin-bottom: 18px;
}
:deep(.nd-article li) { margin-bottom: 6px; }
:deep(.nd-article a) { color: var(--navy); font-weight: 600; }
:deep(.nd-article blockquote) {
    border-left: 4px solid var(--gold);
    padding: 12px 20px; margin: 24px 0;
    background: var(--bg-light); border-radius: 0 8px 8px 0;
    font-style: italic; color: var(--text-body);
}

.nd-back { margin-top: 56px; padding-top: 32px; border-top: 1px solid var(--border); }

@media (max-width: 768px) {
    .nd-featured-img { max-height: 260px; }
}
</style>
