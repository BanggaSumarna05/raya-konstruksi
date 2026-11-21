<script setup>
import { computed, ref, onMounted, onUnmounted } from 'vue';
import { Head, router, usePage } from '@inertiajs/vue3';
import { usePageMotion } from '../Composables/usePageMotion';
import { createTrackCarousel } from '../Composables/useTrackCarousel';

usePageMotion();

const props = defineProps({
    blogs: Object,
    instagramPosts: {
        type: Array,
        default: () => [],
    },
});

const page = usePage();
const instagramUrl = computed(() => page.props.social?.instagram || 'https://www.instagram.com/raya.konstruksi');
const instagramHandle = computed(() => {
    const match = instagramUrl.value.match(/instagram\.com\/([^/?#]+)/i);
    return match ? '@' + match[1].replace(/^@/, '') : '@raya.konstruksi';
});

const igTrack = ref(null);
const igPage = ref(0);
const igPageCount = ref(1);

const igCarousel = createTrackCarousel(igTrack, '.ig-post', igPage, igPageCount);

onMounted(() => {
    igCarousel.update();
    window.addEventListener('resize', igCarousel.update);
});

onUnmounted(() => {
    window.removeEventListener('resize', igCarousel.update);
});

const NEWS_FALLBACK_IMAGE = '/assets/img/projects/lotte-catalyst/catalyst (4).webp';

const allBlogs = ref([...props.blogs.data]);
const currentPage = ref(props.blogs.current_page);
const lastPage = ref(props.blogs.last_page);
const loading = ref(false);

function cardImage(blog) {
    return blog.image ? '/storage/' + blog.image : NEWS_FALLBACK_IMAGE;
}

function onCardImageError(e) {
    if (e.target.dataset.fallback) {
        e.target.style.visibility = 'hidden';
        return;
    }
    e.target.dataset.fallback = '1';
    e.target.src = NEWS_FALLBACK_IMAGE;
}

const loadMore = () => {
    if (currentPage.value >= lastPage.value) return;
    loading.value = true;
    router.get(route('news'), { page: currentPage.value + 1 }, {
        preserveScroll: true,
        preserveState: true,
        only: ['blogs'],
        onSuccess: (page) => {
            allBlogs.value.push(...page.props.blogs.data);
            currentPage.value = page.props.blogs.current_page;
            loading.value = false;
        }
    });
};
</script>

<template>
    <Head title="News &amp; Events" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/refresh/news-hero.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Project Updates</span>
            <h1 class="page-hero-title">News &amp; Events</h1>
            <p class="page-hero-sub">Latest updates, project milestones, and company news from across Indonesia.</p>
        </div>
    </section>

    <!-- ── News Grid ── -->
    <section class="news-list-section">
        <div class="news-section-header">
            <div>
                <span class="section-eyebrow">Project Updates</span>
                <h2 class="section-title mt-1 mb-0">Latest News &amp; Updates</h2>
                <div class="section-divider"></div>
            </div>
        </div>
        <div class="news-grid">
            <a v-for="(blog, idx) in allBlogs" :key="blog.id"
               :href="route('newsDetail', blog.slug)"
               class="news-list-card"
               data-rv :data-rv-delay="idx % 4 * 80">
                <span class="news-card-mark" aria-hidden="true">R</span>
                <img class="news-card-bg" :src="cardImage(blog)" alt="" loading="lazy" @error="onCardImageError" />
                <div class="news-card-overlay"></div>
                <div class="news-card-content">
                    <p class="news-card-date"><i class="bi bi-calendar3"></i> {{ new Date(blog.published_at).toLocaleDateString('en-GB', { year: 'numeric', month: 'long', day: 'numeric' }) }}</p>
                    <h3 class="news-card-title">{{ blog.title }}</h3>
                    <p class="news-card-excerpt">{{ blog.content.replace(/<[^>]*>/g, '').slice(0, 80) + '…' }}</p>
                    <span class="news-card-readmore">Read More <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="news-card-border"></div>
            </a>
        </div>

        <!-- Load More -->
        <div v-if="currentPage < lastPage" class="text-center mt-5 pb-5">
            <button @click="loadMore" :disabled="loading" class="btn-primary">
                <span v-if="loading"><i class="bi bi-arrow-repeat spin me-2"></i>Loading…</span>
                <span v-else>Load More Articles</span>
            </button>
        </div>
    </section>

    <!-- ── Instagram ── -->
    <section class="ig-section">
        <div class="container">
            <div class="ig-layout">
                <div class="ig-intro" data-rv>
                    <span class="ig-eyebrow"><span class="ig-eyebrow-bar" aria-hidden="true"></span>Our Social Media</span>
                    <i class="bi bi-instagram ig-mark" aria-hidden="true"></i>
                    <h2 class="ig-heading">Follow Our Journey on<br><span>Instagram</span></h2>
                    <p class="ig-lead">
                        Get the latest updates, project highlights, and behind-the-scenes moments from Raya Konstruksi.
                    </p>
                    <a :href="instagramUrl" target="_blank" rel="noopener noreferrer" class="ig-cta">
                        <i class="bi bi-instagram" aria-hidden="true"></i>
                        Follow Us on Instagram
                        <span class="ig-cta-arrow"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                    </a>
                </div>

                <div v-if="instagramPosts.length" class="ig-stage" data-rv>
                    <div class="ig-head">
                        <div class="ig-profile">
                            <span class="ig-avatar">
                                <img src="/assets/img/logo-raya-polos.webp" alt="Raya Konstruksi">
                            </span>
                            <div class="ig-profile-meta">
                                <span class="ig-name">
                                    {{ instagramHandle.replace('@', '') }}
                                    <i class="bi bi-patch-check-fill" aria-label="Verified"></i>
                                </span>
                                <span class="ig-sub">Instagram</span>
                            </div>
                        </div>
                        <a :href="instagramUrl" target="_blank" rel="noopener noreferrer" class="ig-follow-btn">
                            <i class="bi bi-instagram" aria-hidden="true"></i> Follow
                        </a>
                    </div>

                    <div class="ig-carousel">
                        <button type="button" class="ig-nav" @click="igCarousel.scroll(1)" aria-label="Next posts">
                            <i class="bi bi-chevron-right" aria-hidden="true"></i>
                        </button>
                        <div ref="igTrack" class="ig-track" @scroll="igCarousel.update">
                            <div v-for="post in instagramPosts" :key="post.id" class="ig-post">
                                <iframe :src="post.embed" title="Instagram post"
                                    width="100%" height="540" frameborder="0" loading="lazy"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div v-if="igPageCount > 1" class="ig-dots">
                        <button v-for="n in igPageCount" :key="n" type="button" class="ig-dot"
                            :class="{ 'is-active': igPage === n - 1 }" :aria-label="'Go to page ' + n"
                            @click="igCarousel.go(n - 1)"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.news-list-section { padding: 0; background: var(--paper); }
.news-section-header {
    display: flex; align-items: flex-end; justify-content: space-between;
    padding: 64px clamp(20px,5vw,80px) 36px; gap: 20px; flex-wrap: wrap; background: var(--paper);
}
.news-grid {
    display: grid; grid-template-columns: repeat(4, 1fr);
    background: var(--navy);
}
.news-list-card {
    position: relative; min-height: 380px; display: flex;
    flex-direction: column; justify-content: flex-end;
    padding: 28px 24px; overflow: hidden; text-decoration: none;
    cursor: pointer;
    background: linear-gradient(150deg, #33499A 0%, #24366E 55%, #1B2A5A 100%);
    box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.07);
}
.news-card-mark {
    position: absolute;
    right: -0.04em;
    bottom: -0.22em;
    font-family: var(--font-head);
    font-size: clamp(140px, 15vw, 220px);
    font-weight: 800;
    line-height: 1;
    color: rgba(255, 255, 255, 0.06);
    pointer-events: none;
}
.news-card-bg {
    position: absolute; inset: 0; z-index: 1;
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94);
}
.news-list-card:hover .news-card-bg { transform: scale(1.08); }
.news-card-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to top, rgba(13,20,40,0.92) 0%, rgba(13,20,40,0.42) 52%, rgba(13,20,40,0.08) 100%);
}
.news-card-content { position: relative; z-index: 3; display: flex; flex-direction: column; gap: 8px; }
.news-card-date { font-size: 11px; font-weight: 700; color: var(--tint); text-transform: uppercase; letter-spacing: 1px; margin: 0; display: flex; align-items: center; gap: 6px; }
.news-card-title { font-family: "Figtree", sans-serif; font-weight: 800; font-size: 15px; color: #fff; line-height: 1.4; margin: 0; }
.news-card-excerpt { font-size: 12px; color: rgba(255,255,255,0.65); line-height: 1.6; margin: 0; max-height: 0; overflow: hidden; opacity: 0; transition: max-height 0.4s ease, opacity 0.35s ease; will-change: max-height; contain: layout; }
.news-list-card:hover .news-card-excerpt { max-height: 60px; opacity: 1; }
.news-card-readmore { display: inline-flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--tint); margin-top: 4px; }
.news-card-readmore i, .news-card-readmore svg { transition: transform 0.25s ease; }
.news-list-card:hover .news-card-readmore i, .news-list-card:hover .news-card-readmore svg { transform: translateX(4px); }
.news-card-border { position: absolute; bottom: 0; left: 0; height: 3px; width: 100%; background: var(--tint); z-index: 4; transform: scaleX(0); transform-origin: left; transition: transform 0.45s ease; }
.news-list-card:hover .news-card-border { transform: scaleX(1); }
.news-list-card + .news-list-card::before { content: ''; position: absolute; top: 10%; left: 0; width: 1px; height: 80%; background: rgba(255,255,255,0.08); z-index: 4; pointer-events: none; }
@media (max-width: 991px) { .news-grid { grid-template-columns: repeat(2, 1fr); } .news-list-card + .news-list-card::before { display: none; } }
@media (max-width: 575px) { .news-grid { grid-template-columns: 1fr; } .news-list-card { min-height: 300px; } .news-card-excerpt { max-height: 60px; opacity: 1; } }

@keyframes spin { to { transform: rotate(360deg); } }
.spin { display: inline-block; animation: spin 1s linear infinite; }

/* ── Instagram Section ── */
.ig-section {
    padding: 96px 0;
    background: var(--paper);
    border-top: 1px solid var(--border);
    overflow: hidden;
}

.ig-layout {
    display: grid;
    grid-template-columns: minmax(0, 0.8fr) minmax(0, 1.6fr);
    gap: clamp(32px, 5vw, 72px);
    align-items: center;
}

.ig-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-family: "Figtree", sans-serif;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--eerie);
}
.ig-eyebrow-bar {
    width: 38px;
    height: 6px;
    border-radius: 999px;
    background: #f28c28;
}

.ig-mark {
    display: block;
    margin: 28px 0 20px;
    font-size: 56px;
    line-height: 1;
    color: #0b1220;
}

.ig-heading {
    margin: 0 0 18px;
    font-family: "Figtree", sans-serif;
    font-size: clamp(32px, 4vw, 52px);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -0.01em;
    color: #0b2a5b;
}
.ig-heading span { color: #b45309; }

.ig-lead {
    max-width: 400px;
    margin: 0 0 30px;
    font-size: 16px;
    line-height: 1.65;
    color: var(--muted);
}

.ig-cta {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 13px 14px 13px 24px;
    background: #0b2a5b;
    border: 1px solid #f0a24b;
    border-radius: 999px;
    text-decoration: none;
    font-family: "Figtree", sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #fff;
    box-shadow: 0 10px 24px rgba(11, 42, 91, 0.22);
    transition: transform 0.22s ease, box-shadow 0.22s ease, background 0.22s ease;
}
.ig-cta:hover {
    background: #0a2350;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(11, 42, 91, 0.3);
}
.ig-cta > i { font-size: 17px; }
.ig-cta-arrow {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 50%;
    font-size: 12px;
    color: #fff;
}

.ig-stage {
    position: relative;
    padding: 18px;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: 0 18px 48px rgba(15, 23, 42, 0.08);
}

.ig-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 2px 2px 16px;
}
.ig-profile { display: flex; align-items: center; gap: 12px; min-width: 0; }
.ig-avatar {
    width: 48px;
    height: 48px;
    flex: 0 0 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border-radius: 50%;
    background: #0b2a5b;
}
.ig-avatar img {
    width: 62%;
    height: auto;
    filter: brightness(0) invert(1);
    opacity: 0.95;
}
.ig-profile-meta { display: flex; flex-direction: column; gap: 2px; min-width: 0; }
.ig-name {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: "Figtree", sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--eerie);
}
.ig-name i { font-size: 14px; color: #1d9bf0; }
.ig-sub { font-size: 13px; color: var(--muted); }

.ig-follow-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    gap: 8px;
    padding: 10px 18px;
    background: #0f1115;
    border-radius: 999px;
    text-decoration: none;
    font-family: "Figtree", sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
    transition: background 0.2s ease;
}
.ig-follow-btn:hover { background: #262a31; color: #fff; }

.ig-carousel { position: relative; }

.ig-track {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% - 14px) / 2);
    gap: 14px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
}
.ig-track::-webkit-scrollbar { display: none; }

.ig-post {
    min-width: 0;
    overflow: hidden;
    border: 1px solid var(--border);
    border-radius: 14px;
    background: #fff;
    box-shadow: var(--shadow-sm);
    scroll-snap-align: start;
}
.ig-post iframe {
    display: block;
    width: 100%;
    border: 0;
    background: #fff;
}

.ig-nav {
    position: absolute;
    top: 50%;
    right: -22px;
    transform: translateY(-50%);
    z-index: 3;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 1px solid var(--border);
    border-radius: 50%;
    background: #fff;
    color: var(--eerie);
    box-shadow: 0 10px 26px rgba(15, 23, 42, 0.16);
    cursor: pointer;
    transition: background 0.2s ease, transform 0.2s ease;
}
.ig-nav:hover { background: #f8fafc; transform: translateY(-50%) scale(1.04); }

.ig-dots {
    display: flex;
    justify-content: center;
    gap: 0;
    margin-top: 12px;
}
.ig-dot {
    position: relative;
    width: 32px;
    height: 44px;
    padding: 0;
    border: 0;
    background: transparent;
    cursor: pointer;
}
.ig-dot::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 8px;
    height: 8px;
    margin: -4px 0 0 -4px;
    border-radius: 50%;
    background: #cdd3dd;
    transition: background 0.2s ease, transform 0.2s ease;
}
.ig-dot.is-active::before { background: #0b2a5b; transform: scale(1.15); }

@media (max-width: 991px) {
    .ig-layout { grid-template-columns: minmax(0, 1fr); }
    .ig-stage { margin-top: 40px; }
    .ig-nav { right: 4px; }
}

@media (max-width: 575px) {
    .ig-section { padding: 64px 0; }
    .ig-mark { font-size: 44px; margin: 22px 0 16px; }
    .ig-stage { padding: 12px; }
    .ig-track { grid-auto-columns: 86%; }
    .ig-follow-btn { padding: 9px 14px; font-size: 13px; }
    .ig-avatar { width: 42px; height: 42px; flex-basis: 42px; }
}
</style>
