<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';

const valuesData = [
    { img: "/assets/img/values/ADAPTIVE.webp",    title: "Adaptive",     text: "We implement continuous improvement to remain relevant and competitive in the industry." },
    { img: "/assets/img/values/COMMITED.webp",    title: "Committed",    text: "We are committed to delivering the highest quality standards through best practices." },
    { img: "/assets/img/values/TRUSTWORTHY.webp", title: "Trustworthy",  text: "We aim to gain our client trust through responsible actions and long-term relationships." },
    { img: "/assets/img/values/INTEGRITY.webp",   title: "Integrity",    text: "We uphold strong work and moral ethics aligned with laws and regulations." },
    { img: "/assets/img/values/OWNERSHIP.webp",   title: "Ownership",    text: "We take full responsibility for our work and are accountable for delivering results." },
    { img: "/assets/img/values/SAFETY.webp",      title: "Safety First", text: "We encourage initiative and teamwork for the best interest of the company." },
];
</script>

<template>
    <Head title="Who We Are" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/hero-carousel/hover-1-new.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">About Us</span>
            <h1 class="page-hero-title">Who We Are</h1>
            <p class="page-hero-sub">A leading industrial EPC contractor delivering excellence across Indonesia since 2018.</p>
        </div>
    </section>

    <!-- ── Company Profile ── -->
    <section id="company-profile" class="py-24 bg-white">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="100">
                    <div class="about-img-wrap">
                        <div class="about-img-accent"></div>
                        <img src="/assets/img/hero-carousel/hover-1.webp" alt="Raya Konstruksi"
                            class="about-img" loading="lazy" width="600" height="460" />
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                    <span class="section-eyebrow">Company Profile</span>
                    <h2 class="section-title">Indonesia's Trusted<br />Industrial EPC Contractor</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        <strong>RAYA KONSTRUKSI</strong> established in 2018, is a leading provider of Engineering &amp;
                        Construction services, specialising in Piping &amp; Mechanical Construction, Equipment Rental,
                        and Operation &amp; Maintenance.
                    </p>
                    <p class="section-body mt-3">
                        Our vision is to deliver top-quality services to global industrial clients, setting high
                        standards of excellence and reliability across Energy, Petrochemical, Infrastructure, and oil and gas sectors.
                    </p>
                    <div class="mt-5 d-flex gap-3 flex-wrap">
                        <Link :href="route('whatWeDo')" class="btn-primary">Explore Services</Link>
                        <Link :href="route('contactUs')" class="btn-outline">Contact Us</Link>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Vision & Mission ── -->
    <section id="vision" class="vision-section">
        <!-- Background photo (right half) -->
        <div class="vision-photo-panel">
            <div class="vision-photo-bg"></div>
            <div class="vision-photo-overlay"></div>
            <!-- Floating stat card -->
            <div class="vision-stat-card">
                <div class="vision-stat-num">8<span class="vision-stat-plus">+</span></div>
                <div class="vision-stat-label">Years of Industrial Excellence</div>
            </div>
        </div>

        <!-- Content panel (left) -->
        <div class="vision-content-panel">
            <!-- Section tag -->
            <div class="vision-tag" data-aos="fade-up">
                <span class="vision-tag-dot"></span>
                <span>Vision &amp; Mission</span>
            </div>

            <!-- Vision block -->
            <div class="vision-block" data-aos="fade-up" data-aos-delay="80">
                <p class="vision-eyebrow">Our Direction</p>
                <h2 class="vision-headline">Vision</h2>
                <div class="vision-gold-rule"></div>
                <p class="vision-body">
                    Applying best practices in safety, quality, and project management.
                    <em class="vision-em">zero-accident commitment.</em>
                </p>
            </div>

            <!-- Divider -->
            <div class="vision-separator" data-aos="fade-up" data-aos-delay="140"></div>

            <!-- Mission block -->
            <div class="vision-block" data-aos="fade-up" data-aos-delay="180">
                <p class="vision-eyebrow">Our Purpose</p>
                <h2 class="vision-headline">Mission</h2>
                <div class="vision-gold-rule"></div>
                <ol class="mission-list">
                    <li>
                        <span class="mission-num">01</span>
                        <span class="mission-text">Achieving extraordinary results through a culture of excellence in construction and heavy equipment services.</span>
                    </li>
                    <li>
                        <span class="mission-num">02</span>
                        <span class="mission-text">Building satisfying careers through agile mindset and continuous learning.</span>
                    </li>
                    <li>
                        <span class="mission-num">03</span>
                        <span class="mission-text">Applying best practices in safety, quality, and project management.</span>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <!-- ── Core Values ── -->
    <section id="core-values" class="values-section">
        <!-- Left panel: header -->
        <div class="values-header-panel" data-aos="fade-right">
            <span class="section-eyebrow">What Drives Us</span>
            <h2 class="values-main-title">Our Core<br /><span class="values-title-gold">Values</span></h2>
            <div class="values-header-divider"></div>
            <p class="values-header-body">
                RAYA's values guide every decision, action, and interaction —
                from the boardroom to the job site.
            </p>
            <!-- Decorative acronym -->
            <div class="values-acronym">
                <span>A</span><span>C</span><span>T</span><span>I</span><span>O</span><span>S</span>
            </div>
        </div>

        <!-- Right panel: value items -->
        <div class="values-list-panel">
            <div
                v-for="(v, i) in valuesData"
                :key="i"
                class="value-item"
                data-aos="fade-left"
                :data-aos-delay="i * 60"
            >
                <div class="value-item-num">{{ String(i + 1).padStart(2, '0') }}</div>
                <div class="value-item-icon-wrap">
                    <img :src="v.img" :alt="v.title" class="value-item-icon" width="32" height="32" />
                </div>
                <div class="value-item-body">
                    <h4 class="value-item-title">{{ v.title }}</h4>
                    <p class="value-item-text">{{ v.text }}</p>
                </div>
                <div class="value-item-arrow"><i class="bi bi-arrow-right"></i></div>
            </div>
        </div>
    </section>

    <!-- ── Explore More ── -->
    <section class="explore-section">
        <div class="explore-grid explore-grid--single">


            <Link :href="route('clientPartner')" class="explore-photo-card" data-aos="fade-up">
                <div class="explore-photo-bg" style="background-image: url('/assets/img/handshake-3.webp')"></div>
                <div class="explore-photo-overlay"></div>
                <div class="explore-photo-content">
                    <span class="section-eyebrow" style="color: rgba(255,255,255,0.6);">Trust &amp; Collaboration</span>
                    <h4 class="explore-photo-title">Clients &amp; Partners</h4>
                    <p class="explore-photo-desc">Discover the industry leaders who trust Raya to deliver.</p>
                    <span class="explore-photo-cta">View Clients <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="explore-photo-border"></div>
            </Link>
        </div>
    </section>
</template>

<style scoped>
/* About image composition */
.about-img-wrap { position: relative; display: inline-block; width: 100%; }
.about-img {
    width: 100%; max-height: 460px; object-fit: cover;
    border-radius: 20px; position: relative; z-index: 1;
    box-shadow: 0 30px 70px rgba(27,47,110,0.15);
}
.about-img-accent {
    position: absolute; top: -14px; left: -14px;
    width: 70px; height: 70px;
    background: var(--gold); border-radius: 10px; z-index: 0;
}

/* ── Vision & Mission — cinematic split layout ── */
.vision-section {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 600px;
    overflow: hidden;
    padding: 0; /* override main.css section padding */
}

/* Right: photo panel */
.vision-photo-panel {
    position: relative;
    overflow: hidden;
}
.vision-photo-bg {
    position: absolute; inset: 0;
    background-image: url('/assets/img/projects/lotte/cover.webp');
    background-size: cover;
    background-position: center;
    transition: transform 8s ease-out;
}
.vision-section:hover .vision-photo-bg { transform: scale(1.04); }
.vision-photo-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(
        135deg,
        rgba(10,20,60,0.70) 0%,
        rgba(27,47,110,0.45) 60%,
        rgba(10,20,60,0.20) 100%
    );
    z-index: 1;
}

/* Floating stat card on photo */
.vision-stat-card {
    position: absolute;
    bottom: 48px; right: 48px;
    z-index: 3;
    background: rgba(245,158,11,0.95);
    backdrop-filter: blur(12px);
    border-radius: 16px;
    padding: 24px 32px;
    text-align: center;
    box-shadow: 0 16px 48px rgba(0,0,0,0.30);
}
.vision-stat-num {
    font-family: "Bricolage Grotesque", sans-serif;
    font-size: 52px; font-weight: 900;
    color: #1B2F6E; line-height: 1;
}
.vision-stat-plus { font-size: 0.55em; vertical-align: super; }
.vision-stat-label {
    font-family: "Pliant", sans-serif;
    font-size: 11px; font-weight: 700;
    color: rgba(27,47,110,0.80);
    text-transform: uppercase; letter-spacing: 1px;
    margin-top: 6px; max-width: 120px; line-height: 1.4;
}

/* Left: content panel */
.vision-content-panel {
    background: linear-gradient(160deg, #0b1535 0%, #1B2F6E 100%);
    padding: clamp(48px, 7vw, 96px) clamp(32px, 5vw, 80px);
    display: flex; flex-direction: column; gap: 0;
    justify-content: center;
    position: relative;
    z-index: 2;
}

/* "Vision & Mission" tag */
.vision-tag {
    display: inline-flex; align-items: center; gap: 10px;
    font-family: "Pliant", sans-serif; font-size: 11px; font-weight: 800;
    letter-spacing: 3px; text-transform: uppercase;
    color: rgba(255,255,255,0.45);
    margin-bottom: 40px;
}
.vision-tag-dot {
    width: 6px; height: 6px; border-radius: 50%;
    background: #F59E0B;
    animation: pulse-dot 2.5s ease-in-out infinite;
    flex-shrink: 0;
}
@keyframes pulse-dot {
    0%,100% { transform: scale(1); opacity: 1; }
    50%      { transform: scale(0.7); opacity: 0.5; }
}

/* Vision / Mission block */
.vision-block { margin-bottom: 0; }

.vision-eyebrow {
    font-family: "Pliant", sans-serif; font-size: 11px; font-weight: 700;
    letter-spacing: 2.5px; text-transform: uppercase;
    color: rgba(255,255,255,0.45); margin: 0 0 8px;
}

.vision-headline {
    font-family: "Bricolage Grotesque", sans-serif; font-weight: 900;
    font-size: clamp(32px, 4vw, 52px);
    color: #fff; line-height: 1; margin: 0 0 16px;
}

.vision-gold-rule {
    width: 40px; height: 3px;
    background: #F59E0B; border-radius: 2px;
    margin-bottom: 20px;
}

.vision-body {
    font-family: "Pliant", sans-serif;
    font-size: clamp(14px, 1.2vw, 16px);
    color: rgba(255,255,255,0.75);
    line-height: 1.75; margin: 0;
}
.vision-em { color: #F59E0B; font-style: normal; font-weight: 600; }

/* Separator between Vision and Mission */
.vision-separator {
    width: 100%; height: 1px;
    background: rgba(255,255,255,0.10);
    margin: 40px 0;
}

/* Mission numbered list */
.mission-list {
    list-style: none; padding: 0; margin: 0;
    display: flex; flex-direction: column; gap: 20px;
}
.mission-list li {
    display: flex; align-items: flex-start; gap: 18px;
}
.mission-num {
    font-family: "Bricolage Grotesque", sans-serif;
    font-size: 22px; font-weight: 900;
    color: #F59E0B; line-height: 1.2;
    flex-shrink: 0; min-width: 32px;
    opacity: 0.85;
}
.mission-text {
    font-family: "Pliant", sans-serif;
    font-size: clamp(13px, 1.1vw, 15px);
    color: rgba(255,255,255,0.78);
    line-height: 1.65;
}

/* Responsive */
@media (max-width: 991px) {
    .vision-section { grid-template-columns: 1fr; }
    .vision-photo-panel { min-height: 320px; order: -1; }
    .vision-stat-card { bottom: 24px; right: 24px; padding: 18px 24px; }
    .vision-stat-num { font-size: 40px; }
    .vision-content-panel { padding: 48px 28px; }
}
@media (max-width: 575px) {
    .vision-photo-panel { min-height: 240px; }
    .vision-stat-card { bottom: 16px; right: 16px; padding: 14px 18px; }
    .vision-stat-num { font-size: 32px; }
    .vision-content-panel { padding: 36px 20px; }
    .vision-tag { margin-bottom: 28px; }
    .vision-separator { margin: 28px 0; }
}

/* Explore cards — old style removed */
.explore-section { padding: 0; background: #fff; } /* padding: 0 overrides main.css */
.explore-grid { display: grid; grid-template-columns: repeat(2, 1fr); }
.explore-grid--single { grid-template-columns: 1fr; }

.explore-photo-card {
    position: relative; min-height: 400px; display: flex;
    flex-direction: column; justify-content: flex-end;
    padding: 36px 32px; overflow: hidden; text-decoration: none; cursor: pointer;
}
.explore-photo-bg {
    position: absolute; inset: 0; background-size: cover; background-position: center;
    transition: transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94);
}
.explore-photo-card:hover .explore-photo-bg { transform: scale(1.06); }
.explore-photo-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to top, rgba(5,10,30,0.95) 0%, rgba(5,10,30,0.55) 50%, rgba(5,10,30,0.20) 100%);
}
.explore-photo-content { position: relative; z-index: 3; display: flex; flex-direction: column; gap: 10px; }
.explore-photo-title { font-family: "Bricolage Grotesque", sans-serif; font-weight: 800; font-size: clamp(22px,2.5vw,32px); color: #fff; margin: 4px 0 0; line-height: 1.2; }
.explore-photo-desc { font-size: 14px; color: rgba(255,255,255,0.70); line-height: 1.65; margin: 0; max-height: 0; overflow: hidden; opacity: 0; transition: max-height 0.4s ease, opacity 0.35s ease; will-change: max-height; contain: layout; }
.explore-photo-card:hover .explore-photo-desc { max-height: 60px; opacity: 1; }
.explore-photo-cta { display: inline-flex; align-items: center; gap: 8px; font-size: 12px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: #F59E0B; }
.explore-photo-cta i, .explore-photo-cta svg { transition: transform 0.25s ease; }
.explore-photo-card:hover .explore-photo-cta i, .explore-photo-card:hover .explore-photo-cta svg { transform: translateX(4px); }
.explore-photo-border { position: absolute; bottom: 0; left: 0; height: 3px; width: 100%; background: #F59E0B; z-index: 4; transform: scaleX(0); transform-origin: left; transition: transform 0.45s ease; }
.explore-photo-card:hover .explore-photo-border { transform: scaleX(1); }
@media (max-width: 767px) { .explore-grid { grid-template-columns: 1fr; } .explore-photo-card { min-height: 320px; } .explore-photo-desc { max-height: 60px; opacity: 1; } }

/* ── Core Values ── */
.values-section {
    display: grid;
    grid-template-columns: 380px 1fr;
    background: #0b1535;
    overflow: hidden;
    min-height: 600px;
    padding: 0; /* override main.css section padding */
}

/* Left: sticky header panel */
.values-header-panel {
    background: linear-gradient(160deg, #0b1535 0%, #142257 100%);
    padding: clamp(48px, 6vw, 88px) clamp(32px, 4vw, 60px);
    display: flex; flex-direction: column; justify-content: center;
    border-right: 1px solid rgba(255,255,255,0.06);
    position: relative;
    overflow: hidden;
}
/* decorative circle */
.values-header-panel::before {
    content: '';
    position: absolute;
    width: 320px; height: 320px;
    border-radius: 50%;
    border: 1px solid rgba(245,158,11,0.08);
    top: -80px; right: -80px;
    pointer-events: none;
}
.values-header-panel::after {
    content: '';
    position: absolute;
    width: 200px; height: 200px;
    border-radius: 50%;
    border: 1px solid rgba(245,158,11,0.06);
    bottom: -60px; left: -60px;
    pointer-events: none;
}

.values-main-title {
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 900;
    font-size: clamp(32px, 3.5vw, 52px);
    color: #fff;
    line-height: 1.05;
    margin: 8px 0 20px;
}
.values-title-gold { color: #F59E0B; }

.values-header-divider {
    width: 40px; height: 3px;
    background: #F59E0B; border-radius: 2px;
    margin-bottom: 20px;
}
.values-header-body {
    font-family: "Pliant", sans-serif;
    font-size: 14px; color: rgba(255,255,255,0.55);
    line-height: 1.75; margin: 0 0 36px;
}

/* ACTIOS acronym — decorative */
.values-acronym {
    display: flex; gap: 6px;
}
.values-acronym span {
    width: 32px; height: 32px;
    border-radius: 6px;
    background: rgba(245,158,11,0.12);
    border: 1px solid rgba(245,158,11,0.25);
    display: flex; align-items: center; justify-content: center;
    font-family: "Bricolage Grotesque", sans-serif;
    font-size: 13px; font-weight: 900;
    color: #F59E0B;
}

/* Right: value list */
.values-list-panel {
    display: flex; flex-direction: column;
}

.value-item {
    display: grid;
    grid-template-columns: 48px 64px 1fr 32px;
    align-items: center;
    gap: 20px;
    padding: 28px 40px;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    transition: background 0.3s;
    cursor: default;
    position: relative;
}
.value-item::before {
    content: '';
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 3px;
    background: #F59E0B;
    transform: scaleY(0);
    transition: transform 0.35s ease;
    transform-origin: bottom;
}
.value-item:hover { background: rgba(255,255,255,0.03); }
.value-item:hover::before { transform: scaleY(1); }
.value-item:last-child { border-bottom: none; }

/* Number */
.value-item-num {
    font-family: "Bricolage Grotesque", sans-serif;
    font-size: 11px; font-weight: 900;
    color: rgba(245,158,11,0.40);
    letter-spacing: 1px;
    align-self: flex-start;
    padding-top: 2px;
}

/* Icon */
.value-item-icon-wrap {
    width: 56px; height: 56px;
    border-radius: 12px;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.08);
    display: flex; align-items: center; justify-content: center;
    transition: background 0.3s, border-color 0.3s;
    flex-shrink: 0;
}
.value-item:hover .value-item-icon-wrap {
    background: rgba(245,158,11,0.12);
    border-color: rgba(245,158,11,0.30);
}
.value-item-icon {
    width: 32px; height: 32px;
    object-fit: contain;
    filter: brightness(0) invert(1);
    opacity: 0.70;
    transition: opacity 0.3s, filter 0.3s;
}
.value-item:hover .value-item-icon {
    opacity: 1;
    filter: brightness(0) saturate(100%) invert(72%) sepia(84%) saturate(400%) hue-rotate(2deg) brightness(103%);
}

/* Text */
.value-item-body { flex: 1; }
.value-item-title {
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 800; font-size: 15px;
    color: #fff; margin: 0 0 5px;
    text-transform: uppercase; letter-spacing: 0.5px;
    transition: color 0.2s;
}
.value-item:hover .value-item-title { color: #F59E0B; }
.value-item-text {
    font-family: "Pliant", sans-serif;
    font-size: 13px; color: rgba(255,255,255,0.55);
    line-height: 1.6; margin: 0;
}

/* Arrow */
.value-item-arrow {
    font-size: 16px;
    color: rgba(255,255,255,0.15);
    transition: color 0.2s, transform 0.2s;
    align-self: center;
}
.value-item:hover .value-item-arrow {
    color: #F59E0B;
    transform: translateX(4px);
}

/* Responsive */
@media (max-width: 991px) {
    .values-section { grid-template-columns: 1fr; }
    .values-header-panel { padding: 48px 32px 36px; min-height: auto; }
    .values-acronym { display: none; }
    .value-item { padding: 22px 24px; gap: 14px; grid-template-columns: 36px 52px 1fr 24px; }
}
@media (max-width: 575px) {
    .value-item { grid-template-columns: 52px 1fr; gap: 12px 14px; }
    .value-item-num { display: none; }
    .value-item-arrow { display: none; }
    .value-item { padding: 18px 20px; }
}

/* spacing utilities */
.py-24 { padding-top: 96px; padding-bottom: 96px; }
.mb-12 { margin-bottom: 48px; }
.mt-12 { margin-top: 48px; }
.gap-3 { gap: 12px; }
</style>
