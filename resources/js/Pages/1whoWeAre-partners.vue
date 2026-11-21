<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import { usePageMotion } from '../Composables/usePageMotion';

usePageMotion();

defineProps({
    clients: {
        type: Array,
        default: () => []
    }
});

const failedLogos = ref(new Set());

function markLogoBroken(id) {
    failedLogos.value = new Set(failedLogos.value).add(id);
}

function logoOk(c, i) {
    return !!c.logo_url && !failedLogos.value.has(c.id || i);
}
</script>

<template>
    <Head title="Clients &amp; Partners" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/handshake-3.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Trust &amp; Collaboration</span>
            <h1 class="page-hero-title">Clients &amp; Partners</h1>
            <p class="page-hero-sub">
                Indonesia's leading industrial companies trust RAYA to deliver safe,
                high-quality construction and maintenance services.
            </p>
        </div>
    </section>

    <!-- ── Intro stats ── -->
    <section class="partners-intro">
        <div class="container">
            <div class="row justify-content-center text-center gy-4">
                <div class="col-6 col-md-3">
                    <div class="pi-stat">
                        <div class="pi-num">20<sup>+</sup></div>
                        <div class="pi-label">Industry Clients</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pi-stat">
                        <div class="pi-num">50<sup>+</sup></div>
                        <div class="pi-label">Projects</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="pi-stat">
                        <div class="pi-num">14</div>
                        <div class="pi-label">Project Regions</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Logo grid ── -->
    <section class="partners-grid-section">
        <div class="container">
            <div class="text-center mb-12" data-rv>
                <span class="section-eyebrow">Our Clients</span>
                <h2 class="section-title mt-2">Trusted by Industry Leaders</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body mx-auto" style="max-width: 520px;">
                    From national energy companies to global petrochemical corporations, we're proud to serve
                    Indonesia's most demanding industrial clients.
                </p>
            </div>

            <div class="row g-4">
                <div v-for="(c, i) in clients" :key="c.id || i"
                     class="col-6 col-md-3 col-lg-2"
                     data-rv :data-rv-delay="i % 6 * 60">
                    <div class="partner-card">
                        <img v-if="logoOk(c, i)" :src="c.logo_url" :alt="c.name" class="partner-logo" @error="markLogoBroken(c.id || i)" />
                        <span v-else class="partner-wordmark">{{ c.name }}</span>
                        <p v-if="logoOk(c, i)" class="partner-name">{{ c.name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="partners-cta">
        <div class="partners-cta-overlay"></div>
        <div class="container text-center" style="position:relative;z-index:2;" data-rv>
            <span class="section-eyebrow">Join Our Client List</span>
            <h2 class="partners-cta-title">Ready to Partner with RAYA?</h2>
            <p class="partners-cta-desc">
                Join over 20 industry leaders who trust RAYA for their construction, fabrication,
                and maintenance needs across Indonesia.
            </p>
            <Link :href="route('contactUs')" class="btn-primary btn-lg">
                Get in Touch <i class="bi bi-arrow-right"></i>
            </Link>
        </div>
    </section>
</template>

<style scoped>
/* Intro stats */
.partners-intro {
    padding: 56px 0;
    background: var(--navy);
}
.pi-stat { display: flex; flex-direction: column; align-items: center; }
.pi-num {
    font-family: var(--font-head); font-size: clamp(32px, 4vw, 48px);
    font-weight: 900; color: #fff; line-height: 1;
}
.pi-num sup { font-size: 0.55em; color: var(--tint); font-weight: 900; }
.pi-label {
    font-family: var(--font-body); font-size: 11px; font-weight: 700;
    color: rgba(255,255,255,0.72); text-transform: uppercase;
    letter-spacing: 1.5px; margin-top: 6px;
}

/* Grid */
.partners-grid-section { padding: 80px 0; background: var(--off); }
.mb-12 { margin-bottom: 48px; }

.partner-card {
    background: #fff; border: 1px solid var(--border);
    border-radius: var(--radius-card);
    padding: 28px 16px 18px;
    display: flex; flex-direction: column;
    align-items: center; text-align: center;
    transition: box-shadow 0.3s, transform 0.3s;
}
.partner-card:hover { box-shadow: var(--shadow-md); transform: translateY(-4px); }
.partner-logo {
    height: 52px; max-width: 120px; object-fit: contain;
    filter: grayscale(60%); opacity: 0.75;
    transition: filter 0.3s, opacity 0.3s;
    margin-bottom: 12px;
}
.partner-card:hover .partner-logo { filter: grayscale(0%); opacity: 1; }
.partner-wordmark {
    height: 52px; max-width: 140px; margin-bottom: 12px;
    display: flex; align-items: center; justify-content: center;
    font-family: var(--font-head); font-size: 14px; font-weight: 800;
    line-height: 1.15; color: var(--navy); opacity: 0.75;
    transition: opacity 0.3s;
}
.partner-card:hover .partner-wordmark { opacity: 1; }
.partner-name {
    font-family: var(--font-body); font-size: 11px; font-weight: 700;
    color: var(--text-muted); text-align: center; margin: 0;
    text-transform: uppercase; letter-spacing: 0.5px;
}

/* CTA — band foto, sama dengan CTA home */
.partners-cta { padding: 120px 0; position: relative; overflow: hidden; background: #2B4184; isolation: isolate; }
.partners-cta-overlay {
    position: absolute; inset: 0; z-index: -1;
    background: url('/assets/img/handshake-3.webp') center/cover;
}
.partners-cta-overlay::after {
    content: ""; position: absolute; inset: 0;
    background:
        linear-gradient(180deg, rgba(30,30,30,0.55) 0%, rgba(20,26,36,0.72) 100%),
        radial-gradient(80% 64% at 50% 48%, rgba(18,25,36,0.55) 0%, rgba(18,25,36,0.25) 55%, rgba(18,25,36,0) 80%);
}
.partners-cta-title {
    font-family: "Figtree", sans-serif;
    font-size: clamp(34px, 4.6vw, 64px); font-weight: 800;
    line-height: 0.98; letter-spacing: -0.01em; text-transform: uppercase;
    color: #fff; margin: 10px 0 20px;
    text-shadow: 0 2px 40px rgba(12,18,28,0.45);
}
.partners-cta-desc {
    font-size: 17px; color: rgba(255,255,255,0.78);
    max-width: 580px; margin: 0 auto 36px; line-height: 1.7;
}
.partners-cta .section-eyebrow { color: rgba(255,255,255,0.8); }
.partners-cta .section-eyebrow::before { background: var(--tint); }
</style>
