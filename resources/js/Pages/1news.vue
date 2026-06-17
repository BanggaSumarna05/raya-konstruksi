<script setup>
import { ref, onMounted } from 'vue';
import { Head, router } from '@inertiajs/vue3';

const props = defineProps({ blogs: Object });

const allBlogs = ref([...props.blogs.data]);
const currentPage = ref(props.blogs.current_page);
const lastPage = ref(props.blogs.last_page);
const loading = ref(false);

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

// Load SociableKit widget script once after component mounts
onMounted(() => {
    if (!document.querySelector('script[src*="sociablekit"]')) {
        const script = document.createElement('script');
        script.src = 'https://widgets.sociablekit.com/instagram-feed/widget.js';
        script.defer = true;
        document.body.appendChild(script);
    } else {
        // Script already loaded — re-init if SK object is available
        if (window.SK && typeof window.SK.init === 'function') {
            window.SK.init();
        }
    }
});
</script>

<template>
    <Head title="News &amp; Events" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/hero-carousel/hover-2-new.webp');">
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
            </div>
        </div>
        <div class="news-grid">
            <a v-for="(blog, idx) in allBlogs" :key="blog.id"
               :href="route('newsDetail', blog.slug)"
               class="news-list-card"
               data-aos="fade-up" :data-aos-delay="idx % 4 * 80">
                <div class="news-card-bg" :style="`background-image: url(${blog.image ? '/storage/' + blog.image : '/assets/img/projects/lotte-catalyst/catalyst (4).webp'})`"></div>
                <div class="news-card-overlay"></div>
                <div class="news-card-content">
                    <p class="news-card-date"><i class="bi bi-calendar3"></i> {{ new Date(blog.published_at).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' }) }}</p>
                    <h5 class="news-card-title">{{ blog.title }}</h5>
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

    <!-- ── Instagram Feed ── -->
    <section class="ig-section">
        <div class="container">

            <!-- Header -->
            <div class="ig-header" data-aos="fade-up">
                <div class="ig-header-left">
                    <span class="section-eyebrow">Social Media</span>
                    <h2 class="section-title mt-2">Instagram Updates</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        Follow our latest activities and project updates on Instagram.
                    </p>
                </div>
                <a
                    href="https://www.instagram.com/rayakonstruksiinternasional"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="ig-follow-btn"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    Follow @rayakonstruksiinternasional
                </a>
            </div>

            <!-- SociableKit Instagram widget -->
            <div class="ig-widget-wrap" data-aos="fade-up" data-aos-delay="100">
                <div class="sk-instagram-feed" data-embed-id="25688908"></div>
            </div>

        </div>
    </section>
</template>

<style scoped>
.news-list-section { padding: 0; background: #fff; }
.news-section-header {
    display: flex; align-items: flex-end; justify-content: space-between;
    padding: 64px clamp(20px,5vw,80px) 36px; gap: 20px; flex-wrap: wrap; background: #fff;
}
.news-grid {
    display: grid; grid-template-columns: repeat(4, 1fr);
    background: #0d1120;
}
.news-list-card {
    position: relative; min-height: 380px; display: flex;
    flex-direction: column; justify-content: flex-end;
    padding: 28px 24px; overflow: hidden; text-decoration: none;
    cursor: pointer;
}
.news-card-bg {
    position: absolute; inset: 0; background-size: cover; background-position: center;
    transition: transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94);
}
.news-list-card:hover .news-card-bg { transform: scale(1.08); }
.news-card-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to top, rgba(5,10,30,0.97) 0%, rgba(5,10,30,0.65) 45%, rgba(5,10,30,0.20) 100%);
}
.news-card-content { position: relative; z-index: 3; display: flex; flex-direction: column; gap: 8px; }
.news-card-date { font-size: 11px; font-weight: 700; color: #F59E0B; text-transform: uppercase; letter-spacing: 1px; margin: 0; display: flex; align-items: center; gap: 6px; }
.news-card-title { font-family: "Bricolage Grotesque", sans-serif; font-weight: 800; font-size: 15px; color: #fff; line-height: 1.4; margin: 0; }
.news-card-excerpt { font-size: 12px; color: rgba(255,255,255,0.65); line-height: 1.6; margin: 0; max-height: 0; overflow: hidden; opacity: 0; transition: max-height 0.4s ease, opacity 0.35s ease; will-change: max-height; contain: layout; }
.news-list-card:hover .news-card-excerpt { max-height: 60px; opacity: 1; }
.news-card-readmore { display: inline-flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: #F59E0B; margin-top: 4px; }
.news-card-readmore i, .news-card-readmore svg { transition: transform 0.25s ease; }
.news-list-card:hover .news-card-readmore i, .news-list-card:hover .news-card-readmore svg { transform: translateX(4px); }
.news-card-border { position: absolute; bottom: 0; left: 0; height: 3px; width: 100%; background: #F59E0B; z-index: 4; transform: scaleX(0); transform-origin: left; transition: transform 0.45s ease; }
.news-list-card:hover .news-card-border { transform: scaleX(1); }
.news-list-card + .news-list-card::before { content: ''; position: absolute; top: 10%; left: 0; width: 1px; height: 80%; background: rgba(255,255,255,0.08); z-index: 4; pointer-events: none; }
@media (max-width: 991px) { .news-grid { grid-template-columns: repeat(2, 1fr); } .news-list-card + .news-list-card::before { display: none; } }
@media (max-width: 575px) { .news-grid { grid-template-columns: 1fr; } .news-list-card { min-height: 300px; } .news-card-excerpt { max-height: 60px; opacity: 1; } }

@keyframes spin { to { transform: rotate(360deg); } }
.spin { display: inline-block; animation: spin 1s linear infinite; }

/* ── Instagram Feed Section ── */
.ig-section {
    padding: 80px 0 96px;
    background: #fff;
    border-top: 1px solid var(--border);
}

.ig-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 24px;
    margin-bottom: 48px;
    flex-wrap: wrap;
}
.ig-header-left { max-width: 480px; }

.ig-follow-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    color: #fff;
    font-family: var(--font-body);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.2px;
    padding: 13px 24px;
    border-radius: 50px;
    text-decoration: none;
    border: none;
    box-shadow: 0 6px 20px rgba(220,39,67,0.30);
    transition: opacity 0.22s, transform 0.2s, box-shadow 0.22s;
    white-space: nowrap;
    flex-shrink: 0;
}
.ig-follow-btn:hover {
    opacity: 0.88;
    transform: translateY(-2px);
    box-shadow: 0 10px 28px rgba(220,39,67,0.40);
    color: #fff;
}

.ig-widget-wrap {
    /* Let SociableKit control the layout inside,
       just give it a clean container with subtle card treatment */
    background: var(--bg-light);
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 32px;
    min-height: 300px;
    overflow: hidden;
}

/* Responsive */
@media (max-width: 768px) {
    .ig-header { flex-direction: column; align-items: flex-start; }
    .ig-widget-wrap { padding: 16px; border-radius: 14px; }
}
</style>
