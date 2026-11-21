<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import { usePageMotion } from '../Composables/usePageMotion';

usePageMotion();

const props = defineProps({
    clients: {
        type: Array,
        default: () => []
    },
    projects: {
        type: Array,
        default: () => []
    }
});

const logoClients = computed(() => (props.clients || []).filter((c) => c.logo_url));
const recentProjects = computed(() => (props.projects || []).slice(0, 3));

const businessData = [
    {
        title: "Fabrication & Construction",
        img: "/assets/img/refresh/wwd-construction.webp",
        route: "constructionFabrication",
        text: "Steel structure, piping, mechanical erection, and tank fabrication."
    },
    {
        title: "Catalyst Handling",
        img: "/assets/img/cover-catalyst.webp",
        route: "catalyst-loading",
        text: "Atmospheric and inert catalyst loading, unloading, and change-out services."
    },
    {
        title: "Operation & Maintenance",
        img: "/assets/img/refresh/wwd-plant.webp",
        route: "plantMaintenance",
        text: "Welding, tank maintenance, rotating equipment, and plant maintenance support."
    },
    {
        title: "Civil & Infrastructure",
        img: "/assets/img/cover-soil.webp",
        route: "portfolio",
        text: "Earthworks, foundations, drainage, and industrial access road construction."
    }
];

const valuesData = [
    { img: "/assets/img/values/ADAPTIVE.webp",    photo: "/assets/img/refresh/who-intro.webp",  title: "Adaptive",     text: "We implement continuous improvement to remain relevant and competitive in the industry." },
    { img: "/assets/img/values/COMMITED.webp",    photo: "/assets/img/refresh/hse.webp",   title: "Committed",    text: "We are committed to delivering the highest quality standards through best practices." },
    { img: "/assets/img/values/TRUSTWORTHY.webp", photo: "/assets/img/values/value-trustworthy.webp", title: "Trustworthy",  text: "We aim to gain our client trust through responsible actions and long-term relationships." },
    { img: "/assets/img/values/INTEGRITY.webp",   photo: "/assets/img/values/value-integrity.webp",   title: "Integrity",    text: "We uphold strong work and moral ethics aligned with laws and regulations." },
    { img: "/assets/img/values/OWNERSHIP.webp",   photo: "/assets/img/values/value-ownership.webp",   title: "Ownership",    text: "We take full responsibility for our work and are accountable for delivering results." },
    { img: "/assets/img/values/SAFETY.webp",      photo: "/assets/img/values/value-safety.webp",      title: "Safety First", text: "We encourage initiative and teamwork for the best interest of the company." },
];

function trackSpot(e) {
    if (e.pointerType === 'touch') return;
    const el = e.currentTarget;
    const rect = el.getBoundingClientRect();
    el.style.setProperty('--mx', `${e.clientX - rect.left}px`);
    el.style.setProperty('--my', `${e.clientY - rect.top}px`);
}
</script>

<template>
    <Head title="Who We Are" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/refresh/who-hero.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">About Us</span>
            <h1 class="page-hero-title">Who We Are</h1>
            <p class="page-hero-sub">A leading industrial construction company delivering excellence across Indonesia since 2018.</p>
            <a href="#company-profile" class="wwa-scroll">
                <span class="wwa-scroll-circle"><i class="bi bi-arrow-down"></i></span>
                <span>Scroll Down</span>
            </a>
        </div>
    </section>

    <!-- ── Company Profile ── -->
    <section id="company-profile" class="wwa-profile">
        <span class="wwa-diag-bg" aria-hidden="true"></span>
        <span class="wwa-profile-watermark" aria-hidden="true"></span>
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-rv data-rv-delay="100">
                    <div class="wwa-profile-media">
                        <span class="wwa-photo-bracket" aria-hidden="true"></span>
                        <div class="wwa-photo-card">
                            <img src="/assets/img/refresh/who-profile.webp" alt="Raya Konstruksi tank construction"
                                loading="lazy" width="1448" height="1086" />
                            <div class="wwa-photo-stats">
                                <div class="wwa-photo-stat">
                                    <i class="bi bi-buildings"></i>
                                    <div class="wwa-photo-stat-copy">
                                        <strong>50+</strong>
                                        <span>Completed Projects</span>
                                    </div>
                                </div>
                                <div class="wwa-photo-stat">
                                    <i class="bi bi-geo-alt"></i>
                                    <div class="wwa-photo-stat-copy">
                                        <strong>14</strong>
                                        <span>Project Regions</span>
                                    </div>
                                </div>
                                <div class="wwa-photo-stat">
                                    <i class="bi bi-people"></i>
                                    <div class="wwa-photo-stat-copy">
                                        <strong>20+</strong>
                                        <span>Trusted Clients</span>
                                    </div>
                                </div>
                                <span class="wwa-photo-wedge" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5" data-rv>
                    <span class="wwa-eyebrow">
                        <span class="wwa-eyebrow-dash" aria-hidden="true"></span>Company Profile
                    </span>
                    <h2 class="section-title">Indonesia's Trusted<br />Industrial <span class="wwa-title-accent">Construction Company</span></h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        <strong>RAYA KONSTRUKSI</strong>&nbsp;established in 2018, is a leading construction
                        company providing procurement, construction, and maintenance services, specialising in
                        Piping &amp; Mechanical Construction and Operation &amp; Maintenance.
                    </p>
                    <p class="section-body mt-3">
                        Our vision is to deliver top-quality services to global industrial clients, setting high
                        standards of excellence and reliability across Energy, Petrochemical, Infrastructure, and oil and gas sectors.
                    </p>
                    <div class="wwa-profile-actions">
                        <Link :href="route('whatWeDo')" class="btn-primary">
                            Explore Our Services <i class="bi bi-arrow-right"></i>
                        </Link>
                        <Link :href="route('contactUs')" class="wwa-textlink">
                            <span class="wwa-textlink-label">Contact Us</span>
                            <span class="wwa-textlink-arrow"><i class="bi bi-arrow-right"></i></span>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Vision & Mission ── -->
    <section id="vision" class="wwa-vision">
        <span class="wwa-diag-bg" aria-hidden="true"></span>
        <div class="container">
            <div class="wwa-vision-inner">
                <div class="wwa-vision-panel" aria-hidden="true"></div>

                <div class="wwa-vision-media" data-rv>
                    <span class="wwa-photo-bracket" aria-hidden="true"></span>
                    <div class="wwa-photo-card">
                        <img src="/assets/img/refresh/who-direction.webp" alt="Raya Konstruksi site supervisor directing works"
                            loading="lazy" width="576" height="1024" />
                        <div class="wwa-photo-stats">
                            <div class="wwa-photo-stat">
                                <i class="bi bi-buildings"></i>
                                <div class="wwa-photo-stat-copy">
                                    <strong>50+</strong>
                                    <span>Completed Projects</span>
                                </div>
                            </div>
                            <div class="wwa-photo-stat">
                                <i class="bi bi-geo-alt"></i>
                                <div class="wwa-photo-stat-copy">
                                    <strong>14</strong>
                                    <span>Project Regions</span>
                                </div>
                            </div>
                            <div class="wwa-photo-stat">
                                <i class="bi bi-people"></i>
                                <div class="wwa-photo-stat-copy">
                                    <strong>20+</strong>
                                    <span>Trusted Clients</span>
                                </div>
                            </div>
                            <span class="wwa-photo-wedge" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>

                <div class="wwa-vision-body">
                    <div data-rv>
                        <span class="wwa-eyebrow wwa-eyebrow--light">
                            <span class="wwa-eyebrow-dash" aria-hidden="true"></span>Our Direction
                        </span>
                        <h2 class="wwa-vision-heading">Vision</h2>
                        <p class="wwa-vision-lead">
                            To deliver top-quality services to global industrial clients, setting high standards
                            of excellence and reliability across Energy, Petrochemical, Infrastructure, and
                            oil and gas sectors.
                        </p>
                    </div>

                    <div data-rv data-rv-delay="120">
                        <h2 class="wwa-vision-heading wwa-vision-heading--mission">Mission</h2>
                        <ol class="wwa-mission">
                            <li>
                                <span class="wwa-mission-num">01</span>
                                <span class="wwa-mission-text">Achieving extraordinary results through a culture of excellence in procurement, construction, and maintenance services.</span>
                            </li>
                            <li>
                                <span class="wwa-mission-num">02</span>
                                <span class="wwa-mission-text">Building satisfying careers through agile mindset and continuous learning.</span>
                            </li>
                            <li>
                                <span class="wwa-mission-num">03</span>
                                <span class="wwa-mission-text">Applying best practices in safety, quality, and project management.</span>
                            </li>
                        </ol>
                    </div>

                    <div class="wwa-vision-actions" data-rv>
                        <Link :href="route('whatWeDo')" class="btn-primary">
                            Explore Our Services <i class="bi bi-arrow-right"></i>
                        </Link>
                        <Link :href="route('contactUs')" class="wwa-textlink wwa-textlink--light">
                            <span class="wwa-textlink-label">Contact Us</span>
                            <span class="wwa-textlink-arrow"><i class="bi bi-arrow-right"></i></span>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Core Values ── -->
    <section id="core-values" class="wwa-values">
        <div class="container">
            <div class="wwa-values-head" data-rv>
                <div class="wwa-values-head-copy">
                    <span class="wwa-eyebrow"><span class="wwa-eyebrow-dash"></span> Our Core Values</span>
                    <h2 class="section-title">
                        What Drives Every <span class="wwa-values-accent">Project</span> We Deliver.
                    </h2>
                    <p class="wwa-values-lead">
                        Our core values are the foundation of how we work, make decisions,
                        and build lasting trust with our clients, partners, and communities.
                    </p>
                </div>
                <ul class="wwa-values-index" aria-label="Core values">
                    <li v-for="v in valuesData" :key="'index-' + v.title">{{ v.title }}</li>
                </ul>
            </div>

            <div class="wwa-values-grid">
                <article
                    v-for="(v, i) in valuesData"
                    :key="v.title"
                    class="wwa-value"
                    data-rv
                    :data-rv-delay="i * 60"
                    @pointermove="trackSpot"
                >
                    <div
                        class="wwa-value-spot"
                        :style="{ backgroundImage: `url('${v.photo}')` }"
                        aria-hidden="true"
                    ></div>
                    <div class="wwa-value-top">
                        <span class="wwa-value-num">{{ String(i + 1).padStart(2, '0') }}</span>
                        <span class="wwa-value-icon">
                            <img :src="v.img" alt="" width="24" height="24" loading="lazy" />
                        </span>
                    </div>
                    <div class="wwa-value-body">
                        <h3 class="wwa-value-title">{{ v.title }}</h3>
                        <p class="wwa-value-text">{{ v.text }}</p>
                    </div>
                    <div class="wwa-value-foot">
                        <span class="wwa-value-arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ── Our Business ── -->
    <section id="our-business" class="wwa-business">
        <div class="container">
            <div class="wwa-business-head" data-rv>
                <div class="wwa-business-head-copy">
                    <span class="wwa-eyebrow"><span class="wwa-eyebrow-dash"></span> Our Business</span>
                    <h2 class="section-title">
                        Engineering, Construction <span class="wwa-title-accent">&amp; Maintenance.</span>
                    </h2>
                </div>
                <div class="wwa-business-head-side">
                    <p class="wwa-business-lead">
                        Engineering, construction, and maintenance solutions for energy,
                        petrochemical, and manufacturing sectors across Indonesia.
                    </p>
                    <Link :href="route('whatWeDo')" class="wwa-business-link">
                        Explore What We Do <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>
            </div>

            <div class="wwa-business-grid">
                <Link
                    v-for="(b, i) in businessData"
                    :key="b.title"
                    :href="route(b.route)"
                    class="wwa-business-card"
                    data-rv
                    :data-rv-delay="i * 70"
                >
                    <div
                        class="wwa-business-bg"
                        :style="{ backgroundImage: `url('${b.img}')` }"
                        aria-hidden="true"
                    ></div>
                    <span class="wwa-business-num">{{ String(i + 1).padStart(2, '0') }}</span>
                    <div class="wwa-business-body">
                        <h3>{{ b.title }}</h3>
                        <p>{{ b.text }}</p>
                    </div>
                    <span class="wwa-business-arrow"><i class="bi bi-arrow-right"></i></span>
                </Link>
            </div>
        </div>
    </section>

    <!-- ── Recent Work ── -->
    <section v-if="recentProjects.length" id="recent-work" class="wwa-recent">
        <div class="container">
            <div class="wwa-recent-head" data-rv>
                <div>
                    <span class="wwa-eyebrow"><span class="wwa-eyebrow-dash"></span> Recent Work</span>
                    <h2 class="section-title">
                        Latest Projects, <span class="wwa-title-accent">Straight From Site.</span>
                    </h2>
                </div>
                <Link :href="route('portfolio')" class="wwa-recent-link">
                    View All Projects <i class="bi bi-arrow-right"></i>
                </Link>
            </div>

            <div class="wwa-recent-grid">
                <Link
                    v-for="(p, i) in recentProjects"
                    :key="p.id"
                    :href="p.slug ? route('projectDetail', p.slug) : route('portfolio')"
                    class="wwa-recent-card"
                    data-rv
                    :data-rv-delay="i * 80"
                >
                    <div class="wwa-recent-media">
                        <div
                            class="wwa-recent-img"
                            :style="{ backgroundImage: `url('${p.image}')` }"
                            aria-hidden="true"
                        ></div>
                        <span v-if="p.service_type" class="wwa-recent-tag">{{ p.service_type }}</span>
                    </div>
                    <div class="wwa-recent-body">
                        <h3>{{ p.title }}</h3>
                        <div class="wwa-recent-meta">
                            <span v-if="p.location"><i class="bi bi-geo-alt"></i>{{ p.location }}</span>
                            <span v-if="p.client"><i class="bi bi-building"></i>{{ p.client }}</span>
                        </div>
                        <span class="wwa-recent-cta">View Project <i class="bi bi-arrow-right"></i></span>
                    </div>
                </Link>
            </div>
        </div>
    </section>

    <!-- ── Clients & Partners ── -->
    <section v-if="logoClients.length" class="wwa-clients">
        <div class="container wwa-clients-inner">
            <div class="wwa-clients-copy" data-rv>
                <span class="section-eyebrow">Trusted by Industry Leaders</span>
                <h2>Clients &amp; Partners</h2>
                <p>We work alongside leading companies across Indonesia's industrial landscape.</p>
                <Link :href="route('clientPartner')" class="wwa-clients-link">
                    View All Clients <i class="bi bi-arrow-right"></i>
                </Link>
            </div>

            <div class="wwa-clients-logos">
                <div class="wwa-marquee">
                    <div class="wwa-marquee-track">
                        <div class="wwa-marquee-set">
                            <div v-for="c in logoClients" :key="'logo-' + c.id" class="wwa-logo-box">
                                <img :src="c.logo_url" :alt="c.name" width="96" height="34" loading="lazy" />
                            </div>
                        </div>
                        <div class="wwa-marquee-set" aria-hidden="true">
                            <div v-for="c in logoClients" :key="'logo-dup-' + c.id" class="wwa-logo-box">
                                <img :src="c.logo_url" alt="" width="96" height="34" loading="lazy" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="wwa-cta">
        <div class="wwa-cta-bg" aria-hidden="true"></div>
        <div class="container wwa-cta-inner">
            <div data-rv>
                <span class="section-eyebrow">Let's Build Together</span>
                <h2 class="wwa-cta-title">Ready to Discuss Your<br />Next Industrial Project?</h2>
            </div>
            <Link :href="route('contactUs')" class="btn-primary wwa-cta-btn" data-rv data-rv-delay="120">
                Contact Us <i class="bi bi-arrow-right"></i>
            </Link>
        </div>
    </section>
</template>

<style scoped>
/* ── Hero scroll cue ── */
.wwa-scroll {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    margin-top: 52px;
    color: rgba(255, 255, 255, 0.82);
    text-decoration: none;
    font-family: var(--font-body);
    font-size: 10.5px;
    font-weight: 800;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    transition: color 0.3s ease;
}
.wwa-scroll:hover { color: #fff; }
.wwa-scroll-circle {
    width: 38px; height: 38px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.45);
    display: flex; align-items: center; justify-content: center;
    transition: border-color 0.3s ease, background 0.3s ease;
}
.wwa-scroll:hover .wwa-scroll-circle {
    border-color: rgba(255, 255, 255, 0.9);
    background: rgba(255, 255, 255, 0.08);
}
.wwa-scroll-circle i {
    font-size: 14px;
    animation: wwa-bob 2.4s ease-in-out infinite;
}
@keyframes wwa-bob {
    0%, 100% { transform: translateY(-2px); }
    50%      { transform: translateY(2px); }
}

/* ── Company profile ── */
.wwa-profile {
    position: relative;
    background: #FFFFFF;
    padding: 110px 0;
    overflow: hidden;
}
.wwa-profile > .container {
    position: relative;
    z-index: 1;
}
.wwa-diag-bg {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
}
.wwa-diag-bg::before {
    content: "";
    position: absolute;
    top: -32%;
    left: -20%;
    width: 64%;
    height: 140%;
    background: #F4F5F7;
    transform: rotate(20deg);
}
.wwa-diag-bg::after {
    content: "";
    position: absolute;
    right: -16%;
    bottom: -38%;
    width: 60%;
    height: 130%;
    background: #F6F7F9;
    transform: rotate(20deg);
}
.wwa-profile-watermark {
    position: absolute;
    top: 0;
    right: 0;
    width: 44%;
    height: 100%;
    background: url('/assets/img/refresh/wwd-construction.webp') center right / cover no-repeat;
    opacity: 0.055;
    pointer-events: none;
    -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 62%);
    mask-image: linear-gradient(90deg, transparent 0%, #000 62%);
}
.wwa-profile-media {
    position: relative;
}
.wwa-photo-card {
    position: relative;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 28px 64px rgba(16, 27, 54, 0.15);
}
.wwa-profile .section-title {
    font-size: clamp(30px, 3vw, 44px);
    color: var(--eerie);
}
.wwa-profile .section-body { color: var(--muted); }
.wwa-profile .section-body strong { color: var(--eerie); }
.wwa-title-accent {
    color: var(--gold);
}
.wwa-photo-card img {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    height: auto;
    aspect-ratio: 4 / 3.1;
    object-fit: cover;
}
.wwa-vision-media .wwa-photo-card img { object-position: center 32%; }
.wwa-photo-bracket {
    position: absolute;
    top: -18px; left: -18px;
    width: 78px; height: 78px;
    border-top: 4px solid var(--gold);
    border-left: 4px solid var(--gold);
    border-top-left-radius: 12px;
}
.wwa-photo-stats {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 2;
    display: flex;
    align-items: stretch;
    height: 92px;
    padding-right: 96px;
}
.wwa-photo-stats::before {
    content: "";
    position: absolute;
    inset: 0;
    background: #0A152C;
    clip-path: polygon(0 0, 100% 0, calc(100% - 76px) 100%, 0 100%);
}
.wwa-photo-stat {
    position: relative;
    z-index: 1;
    flex: 1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 0 12px;
    color: #FFFFFF;
}
.wwa-photo-stat + .wwa-photo-stat::before {
    content: "";
    position: absolute;
    left: 0;
    top: 26px;
    bottom: 26px;
    width: 1px;
    background: rgba(255, 255, 255, 0.16);
}
.wwa-photo-stat i {
    flex: none;
    font-size: 23px;
    line-height: 1;
    color: rgba(255, 255, 255, 0.9);
}
.wwa-photo-stat strong {
    display: block;
    font-size: 21px;
    font-weight: 800;
    line-height: 1.05;
    letter-spacing: -0.01em;
}
.wwa-photo-stat span {
    display: block;
    margin-top: 4px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    line-height: 1.3;
    color: rgba(255, 255, 255, 0.62);
}
.wwa-photo-wedge {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 76px;
    background: var(--gold);
    clip-path: polygon(100% 0, 100% 100%, 0 100%);
}
.wwa-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: #5F6673;
}
.wwa-eyebrow-dash {
    width: 28px;
    height: 2px;
    background: var(--gold);
}
.wwa-profile-actions {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 22px;
    margin-top: 36px;
}
.wwa-textlink {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    font-weight: 700;
    color: var(--az);
    text-decoration: none;
}
.wwa-textlink-label {
    position: relative;
    padding-bottom: 4px;
}
.wwa-textlink-label::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: 2px;
    background: currentColor;
    opacity: 0.45;
    transition: opacity 0.25s ease;
}
.wwa-textlink-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border: 1.5px solid rgba(43, 65, 132, 0.35);
    border-radius: 50%;
    transition: background 0.25s ease, border-color 0.25s ease, color 0.25s ease, transform 0.25s ease;
}
.wwa-textlink:hover .wwa-textlink-label::after {
    opacity: 1;
}
.wwa-textlink:hover .wwa-textlink-arrow {
    background: var(--az);
    border-color: var(--az);
    color: #FFFFFF;
    transform: translateX(4px);
}

/* ── Vision & Mission ── */
.wwa-vision {
    position: relative;
    background: #FFFFFF;
    padding: 0;
    overflow: hidden;
}
.wwa-vision > .container {
    position: relative;
    z-index: 1;
}
.wwa-vision-inner {
    position: relative;
    display: grid;
    grid-template-columns: minmax(0, 0.94fr) minmax(0, 1.06fr);
    align-items: center;
}
.wwa-vision-panel {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 35%;
    z-index: 1;
    background:
        repeating-linear-gradient(115deg, rgba(255, 255, 255, 0.022) 0 1px, transparent 1px 30px),
        #2B4184;
    clip-path: polygon(10.5% 0, 100% 0, 100% 100%, 0 100%);
}
.wwa-vision-panel::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url('/assets/img/construction-fabrication.webp') center right / cover no-repeat;
    opacity: 0.09;
    -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 58%);
    mask-image: linear-gradient(90deg, transparent 0%, #000 58%);
}
.wwa-vision-panel::after {
    content: "";
    position: absolute;
    right: 0;
    bottom: 0;
    width: 210px;
    height: 104px;
    background: var(--gold);
    clip-path: polygon(100% 0, 100% 100%, 0 100%);
}
.wwa-vision-media {
    position: relative;
    z-index: 0;
    margin-right: 18px;
}
.wwa-vision .wwa-photo-stats { padding-right: 24px; }
.wwa-vision .wwa-photo-stats::before { clip-path: none; }
.wwa-vision .wwa-photo-wedge { display: none; }
.wwa-vision .wwa-photo-bracket { display: none; }
.wwa-vision .wwa-mission-num { color: rgba(255, 255, 255, 0.55); }
.wwa-vision-panel::after { display: none; }
.wwa-vision-body {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 64px 64px 112px 118px;
}
.wwa-eyebrow--light {
    color: rgba(255, 255, 255, 0.72);
}
.wwa-vision-heading {
    font-family: var(--font-head);
    font-weight: 800;
    font-size: clamp(32px, 3.5vw, 50px);
    line-height: 1.05;
    letter-spacing: -0.01em;
    color: #FFFFFF;
    margin: 0 0 16px;
}
.wwa-vision-heading--mission {
    font-size: clamp(28px, 2.8vw, 40px);
    margin: 38px 0 20px;
}
.wwa-vision-lead {
    font-family: var(--font-body);
    font-size: clamp(14px, 1.15vw, 16px);
    line-height: 1.75;
    color: rgba(255, 255, 255, 0.74);
    margin: 0;
    max-width: 46ch;
}
.wwa-mission {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.wwa-mission li {
    display: grid;
    grid-template-columns: 46px 1fr;
    gap: 16px;
    align-items: start;
}
.wwa-mission-num {
    font-family: var(--font-head);
    font-size: 21px;
    font-weight: 800;
    line-height: 1.25;
    color: var(--tint);
}
.wwa-mission-text {
    font-family: var(--font-body);
    font-size: clamp(13.5px, 1.05vw, 15px);
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.78);
    max-width: 46ch;
}
.wwa-vision-actions {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 22px;
    margin-top: 38px;
}
.wwa-textlink--light {
    color: #FFFFFF;
}
.wwa-textlink--light .wwa-textlink-arrow {
    border-color: rgba(255, 255, 255, 0.45);
}
.wwa-textlink--light:hover .wwa-textlink-arrow {
    background: #FFFFFF;
    border-color: #FFFFFF;
    color: var(--az);
}

/* ── Core values ── */
.wwa-values {
    position: relative;
    background: #F4F6F8;
    padding: 100px 0 96px;
    overflow: hidden;
}
.wwa-values::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(112deg, #FFFFFF 0%, #FFFFFF 40%, rgba(255, 255, 255, 0) 68%);
}
.wwa-values::after {
    content: "";
    position: absolute;
    top: -6%;
    right: 0;
    width: 62%;
    height: 112%;
    background: url('/assets/img/refresh/who-intro.webp') center right / cover no-repeat;
    opacity: 0.08;
    -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 55%);
    mask-image: linear-gradient(90deg, transparent 0%, #000 55%);
}
.wwa-values > .container {
    position: relative;
    z-index: 1;
}
.wwa-values-head {
    display: grid;
    grid-template-columns: minmax(0, 1fr) auto;
    align-items: start;
    gap: 48px;
    margin: 0 0 54px;
    text-align: left;
}
.wwa-values-head .section-title {
    font-size: clamp(32px, 4vw, 58px);
    line-height: 1.05;
    max-width: 660px;
    margin: 0;
    color: var(--eerie);
}
.wwa-values-accent {
    color: var(--gold);
}
.wwa-values-lead {
    max-width: 470px;
    margin: 22px 0 0;
    font-family: var(--font-body);
    font-size: 15px;
    line-height: 1.65;
    color: var(--muted);
}
.wwa-values-index {
    list-style: none;
    margin: 8px 0 0;
    padding: 0;
    font-family: var(--font-body);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.12em;
    line-height: 2.15;
    text-transform: uppercase;
    color: var(--muted);
}
.wwa-values-index::before {
    content: "";
    display: block;
    width: 30px;
    height: 2px;
    margin-bottom: 16px;
    background: var(--gold);
}
.wwa-values-grid {
    display: grid;
    grid-template-columns: repeat(6, minmax(0, 1fr));
    gap: 16px;
    align-items: stretch;
}
.wwa-value {
    position: relative;
    display: flex;
    flex-direction: column;
    min-height: 330px;
    padding: 26px 22px 24px;
    background: #FFFFFF;
    border: 1px solid rgba(22, 34, 54, 0.06);
    border-radius: 10px;
    box-shadow: 0 18px 40px rgba(20, 33, 56, 0.06);
    overflow: hidden;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
}
.wwa-value:hover {
    transform: translateY(-4px);
    box-shadow: 0 24px 50px rgba(20, 33, 56, 0.12);
    border-color: rgba(43, 65, 132, 0.28);
}
.wwa-value-spot {
    position: absolute;
    inset: 0;
    z-index: 0;
    background-position: center;
    background-size: cover;
    opacity: 0;
    filter: saturate(1.06) contrast(1.02);
    -webkit-mask-image: radial-gradient(190px circle at var(--mx, 50%) var(--my, 50%), #000 0%, #000 52%, rgba(0, 0, 0, 0.55) 74%, transparent 100%);
    mask-image: radial-gradient(190px circle at var(--mx, 50%) var(--my, 50%), #000 0%, #000 52%, rgba(0, 0, 0, 0.55) 74%, transparent 100%);
    transition: opacity 0.45s ease;
    pointer-events: none;
}
.wwa-value-spot::before {
    content: "";
    position: absolute;
    inset: 0;
    background: #2B4184;
    mix-blend-mode: multiply;
    opacity: 0.3;
}
.wwa-value-spot::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.22) 34%, rgba(255, 255, 255, 0.82) 50%, rgba(255, 255, 255, 0.92) 100%);
}
.wwa-value:hover .wwa-value-spot { opacity: 1; }
.wwa-value-top {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 12px;
}
.wwa-value-num {
    font-family: var(--font-head);
    font-size: 18px;
    font-weight: 800;
    line-height: 1;
    letter-spacing: 0.02em;
    color: var(--gold);
}
.wwa-value-num::after {
    content: "";
    display: block;
    width: 22px;
    height: 2px;
    margin-top: 12px;
    background: var(--gold);
}
.wwa-value-icon {
    flex: none;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 46px;
    height: 46px;
    border-radius: 50%;
    background: #F2F5F9;
}
.wwa-value-icon img {
    width: 22px;
    height: 22px;
    object-fit: contain;
    filter: brightness(0);
    opacity: 0.55;
}
.wwa-value-body {
    position: relative;
    z-index: 1;
    margin-top: 64px;
}
.wwa-value-title {
    font-family: var(--font-head);
    font-size: 19px;
    font-weight: 800;
    letter-spacing: -0.01em;
    line-height: 1.2;
    color: var(--eerie);
    margin: 0 0 10px;
}
.wwa-value-text {
    font-family: var(--font-body);
    font-size: 12.5px;
    line-height: 1.6;
    color: var(--muted);
    margin: 0;
}
.wwa-value-foot {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: auto;
    padding-top: 18px;
    color: var(--gold);
}
.wwa-value-arrow {
    display: inline-flex;
    align-items: center;
    font-size: 17px;
    color: var(--gold);
}
/* ── Our Business ── */
.wwa-business {
    background: #FFFFFF;
    padding: 104px 0;
}
.wwa-business-head {
    display: grid;
    grid-template-columns: minmax(0, 1.25fr) minmax(0, 0.75fr);
    gap: 48px;
    align-items: end;
    margin-bottom: 44px;
}
.wwa-business-head .section-title {
    font-size: clamp(32px, 4vw, 56px);
    line-height: 1.05;
    max-width: 720px;
    margin: 0;
    color: var(--eerie);
}
.wwa-business-lead {
    max-width: 440px;
    margin: 0;
    font-family: var(--font-body);
    font-size: 15px;
    line-height: 1.65;
    color: var(--muted);
}
.wwa-business-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-top: 20px;
    font-family: var(--font-body);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--eerie);
    text-decoration: none;
    padding-bottom: 7px;
    border-bottom: 1px solid rgba(43, 65, 132, 0.45);
    transition: color 0.3s ease, gap 0.3s ease;
}
.wwa-business-link:hover {
    color: var(--gold);
    gap: 14px;
}
.wwa-business-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 16px;
}
.wwa-business-card {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 420px;
    padding: 26px 22px 24px;
    border-radius: 10px;
    overflow: hidden;
    background: #2B4184;
    color: #FFFFFF;
    text-decoration: none;
    isolation: isolate;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
}
.wwa-business-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 24px 50px rgba(20, 33, 56, 0.18);
}
.wwa-business-bg {
    position: absolute;
    inset: 0;
    z-index: -2;
    background-size: cover;
    background-position: center;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.wwa-business-card:hover .wwa-business-bg { transform: scale(1.06); }
.wwa-business-card::after {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -1;
    background: linear-gradient(180deg, rgba(8, 16, 30, 0.2) 0%, rgba(8, 16, 30, 0.55) 55%, rgba(8, 16, 30, 0.94) 100%);
}
.wwa-business-num {
    position: relative;
    z-index: 1;
    font-family: var(--font-head);
    font-size: 15px;
    font-weight: 800;
    letter-spacing: 0.06em;
    color: var(--tint);
}
.wwa-business-num::after {
    content: "";
    display: block;
    width: 22px;
    height: 2px;
    margin-top: 10px;
    background: var(--tint);
}
.wwa-business-body {
    position: relative;
    z-index: 1;
    padding-right: 48px;
}
.wwa-business-body h3 {
    font-family: var(--font-head);
    font-size: 20px;
    font-weight: 800;
    line-height: 1.2;
    color: #FFFFFF;
    margin: 0 0 10px;
    max-width: 16ch;
}
.wwa-business-body p {
    font-family: var(--font-body);
    font-size: 12.5px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.72);
    margin: 0;
}
.wwa-business-arrow {
    position: absolute;
    right: 22px;
    bottom: 24px;
    z-index: 1;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.28);
    color: var(--tint);
    font-size: 16px;
    transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease;
}
.wwa-business-card:hover .wwa-business-arrow {
    background: #FFFFFF;
    border-color: #FFFFFF;
    color: #2B4184;
}

/* ── Recent Work ── */
.wwa-recent {
    background: var(--paper);
    padding: 104px 0;
}
.wwa-recent-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 32px;
    margin-bottom: 44px;
}
.wwa-recent-head .section-title {
    font-size: clamp(32px, 4vw, 56px);
    line-height: 1.05;
    max-width: 720px;
    margin: 0;
    color: var(--eerie);
}
.wwa-recent-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex: none;
    padding-bottom: 8px;
    border-bottom: 1px solid rgba(43, 65, 132, 0.45);
    font-family: var(--font-body);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: var(--navy);
    text-decoration: none;
    white-space: nowrap;
    transition: color 0.3s ease, gap 0.3s ease;
}
.wwa-recent-link:hover {
    color: var(--gold);
    gap: 14px;
}
.wwa-recent-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;
}
.wwa-recent-card {
    display: flex;
    flex-direction: column;
    background: #FFFFFF;
    border: 1px solid rgba(22, 34, 54, 0.07);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 18px 40px rgba(20, 33, 56, 0.05);
    text-decoration: none;
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
}
.wwa-recent-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 24px 50px rgba(20, 33, 56, 0.12);
}
.wwa-recent-media {
    position: relative;
    aspect-ratio: 16 / 10;
    overflow: hidden;
    background: #2B4184;
}
.wwa-recent-img {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.wwa-recent-card:hover .wwa-recent-img { transform: scale(1.06); }
.wwa-recent-tag {
    position: absolute;
    top: 14px;
    left: 14px;
    padding: 5px 11px;
    border-radius: 50px;
    background: rgba(10, 21, 44, 0.82);
    color: #FFFFFF;
    font-family: var(--font-body);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
}
.wwa-recent-body {
    display: flex;
    flex-direction: column;
    gap: 10px;
    flex: 1;
    padding: 22px 22px 24px;
}
.wwa-recent-body h3 {
    font-family: var(--font-head);
    font-size: 19px;
    font-weight: 800;
    line-height: 1.3;
    color: var(--eerie);
    margin: 0;
}
.wwa-recent-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 8px 16px;
    font-family: var(--font-body);
    font-size: 12px;
    color: var(--muted);
}
.wwa-recent-meta span {
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.wwa-recent-meta i {
    color: var(--gold);
    font-size: 12px;
}
.wwa-recent-cta {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: auto;
    padding-top: 6px;
    font-family: var(--font-body);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--gold);
}
.wwa-recent-cta i { transition: transform 0.25s ease; }
.wwa-recent-card:hover .wwa-recent-cta i { transform: translateX(4px); }

/* ── Clients band ── */
.wwa-clients {
    background: #2B4184;
    padding: 72px 0;
}
.wwa-clients-inner {
    display: grid;
    grid-template-columns: 380px minmax(0, 1fr);
    gap: 56px;
    align-items: center;
}
.wwa-clients-copy .section-eyebrow {
    color: rgba(255, 255, 255, 0.66);
    margin-bottom: 12px;
}
.wwa-clients-copy .section-eyebrow::before {
    background: var(--tint);
}
.wwa-clients-copy h2 {
    font-family: var(--font-head);
    font-size: clamp(26px, 2.6vw, 36px);
    font-weight: 800;
    letter-spacing: -0.01em;
    color: #fff;
    margin: 0 0 10px;
}
.wwa-clients-copy p {
    font-family: var(--font-body);
    font-size: 14px;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.62);
    margin: 0 0 20px;
    max-width: 34ch;
}
.wwa-clients-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: var(--font-body);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--tint);
    text-decoration: none;
    transition: color 0.3s ease, gap 0.3s ease;
}
.wwa-clients-link:hover {
    color: #fff;
    gap: 12px;
}
.wwa-clients-logos {
    overflow: hidden;
    mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
    -webkit-mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
}
.wwa-marquee { overflow: hidden; }
.wwa-marquee-track {
    display: flex;
    width: max-content;
    animation: wwa-marquee 46s linear infinite;
}
.wwa-marquee:hover .wwa-marquee-track { animation-play-state: paused; }
.wwa-marquee-set {
    display: flex;
    align-items: center;
    gap: 12px;
    padding-right: 12px;
}
.wwa-logo-box {
    display: flex;
    align-items: center;
    justify-content: center;
    flex: none;
    width: 108px;
    height: 54px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 8px;
}
.wwa-logo-box img {
    width: auto;
    height: 30px;
    max-width: 82px;
    object-fit: contain;
}
@keyframes wwa-marquee {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
}

/* ── CTA band ── */
.wwa-cta {
    position: relative;
    isolation: isolate;
    overflow: hidden;
    padding: 96px 0;
    background: #2B4184;
}
.wwa-cta-bg {
    position: absolute;
    inset: 0;
    z-index: -1;
    background-image: url('/assets/img/refresh/cta.webp');
    background-size: cover;
    background-position: center 45%;
}
.wwa-cta-bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(90deg, rgba(16, 22, 32, 0.82) 0%, rgba(20, 27, 38, 0.55) 55%, rgba(20, 27, 38, 0.30) 100%),
        linear-gradient(180deg, rgba(20, 27, 38, 0.25) 0%, rgba(16, 22, 32, 0.55) 100%);
}
.wwa-cta-inner {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 40px;
}
.wwa-cta-inner .section-eyebrow {
    color: rgba(255, 255, 255, 0.8);
    margin-bottom: 14px;
}
.wwa-cta-inner .section-eyebrow::before {
    background: var(--tint);
}
.wwa-cta-title {
    font-family: var(--font-head);
    font-size: clamp(30px, 3.9vw, 56px);
    font-weight: 800;
    line-height: 0.98;
    letter-spacing: -0.01em;
    text-transform: uppercase;
    color: #fff;
    margin: 0;
    text-shadow: 0 2px 40px rgba(12, 18, 28, 0.45);
    text-wrap: balance;
}
.wwa-cta-btn { flex: none; }

/* ── Responsive ── */
@media (min-width: 992px) {
    .wwa-vision > .container {
        width: 100%;
        max-width: none;
        padding-left: clamp(28px, 4vw, 72px);
        padding-right: 0;
    }
    .wwa-vision-inner { grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); }
    .wwa-vision-panel { left: calc((50% - 28px - 15%) / 0.85 + clamp(28px, 3vw, 56px)); }
    .wwa-vision-media {
        align-self: stretch;
        z-index: 1;
        margin-top: 0;
        margin-bottom: 0;
    }
    .wwa-vision-media .wwa-photo-card { height: 100%; }
    .wwa-vision-media .wwa-photo-card img {
        height: 100%;
        aspect-ratio: auto;
    }
    .wwa-vision-media .wwa-photo-stats { padding-right: clamp(24px, 2.5vw, 44px); }
}
@media (hover: none) {
    .wwa-value-spot { display: none; }
}

@media (min-width: 1200px) and (max-width: 1439px) {
    .wwa-values-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); }
    .wwa-value { min-height: 300px; }
}

@media (max-width: 1199px) {
    .wwa-values-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); }
    .wwa-value { min-height: 300px; }
    .wwa-clients-inner { grid-template-columns: 320px minmax(0, 1fr); gap: 40px; }
    .wwa-photo-stats { padding-right: 84px; }
    .wwa-photo-stats::before { clip-path: polygon(0 0, 100% 0, calc(100% - 66px) 100%, 0 100%); }
    .wwa-photo-wedge { width: 66px; }
    .wwa-photo-stat { padding: 0 11px; gap: 9px; }
    .wwa-photo-stat i { font-size: 20px; }
    .wwa-photo-stat strong { font-size: 19px; }
    .wwa-vision-body { padding: 56px 44px 100px 96px; }
    .wwa-vision-panel::after { width: 180px; height: 90px; }
    .wwa-business-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .wwa-business-card { min-height: 380px; }
}
@media (max-width: 991px) {
    .wwa-profile { padding: 84px 0; }
    .wwa-vision-inner { grid-template-columns: 1fr; }
    .wwa-vision-panel { display: none; }
    .wwa-vision-media { margin: 16px 0 0; }
    .wwa-vision-body {
        margin-top: 24px;
        padding: 46px 28px 52px;
        background:
            repeating-linear-gradient(115deg, rgba(255, 255, 255, 0.022) 0 1px, transparent 1px 28px),
            #2B4184;
    }
    .wwa-business { padding: 84px 0; }
    .wwa-business-head {
        grid-template-columns: 1fr;
        gap: 22px;
        align-items: start;
    }
    .wwa-business-card { min-height: 360px; }
    .wwa-recent { padding: 84px 0; }
    .wwa-recent-head {
        flex-direction: column;
        align-items: flex-start;
        gap: 24px;
    }
    .wwa-recent-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .wwa-values-head {
        grid-template-columns: 1fr;
        gap: 0;
    }
    .wwa-values-index { display: none; }
    .wwa-clients-inner { grid-template-columns: 1fr; gap: 32px; }
    .wwa-cta-inner { flex-direction: column; align-items: flex-start; gap: 28px; }
}
@media (max-width: 767px) {
    .wwa-values-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .wwa-values { padding: 84px 0; }
    .wwa-clients { padding: 56px 0; }
    .wwa-cta { padding: 72px 0; }
    .wwa-photo-stats { height: 84px; padding-right: 72px; }
    .wwa-photo-stats::before { clip-path: polygon(0 0, 100% 0, calc(100% - 58px) 100%, 0 100%); }
    .wwa-photo-wedge { width: 58px; }
    .wwa-photo-stat span { font-size: 9.5px; }
}
@media (max-width: 575px) {
    .wwa-values-grid { grid-template-columns: 1fr; }
    .wwa-value { min-height: 0; padding: 18px 16px 20px; }
    .wwa-value-body { margin-top: 28px; }
    .wwa-profile { padding: 64px 0; }
    .wwa-photo-bracket { top: -12px; left: 0; width: 56px; height: 56px; }
    .wwa-photo-card img { aspect-ratio: 4 / 3.8; }
    .wwa-photo-stats { height: auto; padding: 14px 52px 14px 0; }
    .wwa-photo-stats::before { clip-path: polygon(0 0, 100% 0, calc(100% - 44px) 100%, 0 100%); }
    .wwa-photo-wedge { width: 44px; }
    .wwa-photo-stat { flex-direction: column; align-items: flex-start; gap: 7px; padding: 0 10px; }
    .wwa-photo-stat + .wwa-photo-stat::before { top: 2px; bottom: 2px; }
    .wwa-photo-stat i { font-size: 18px; }
    .wwa-photo-stat strong { font-size: 17px; }
    .wwa-photo-stat span { font-size: 9px; letter-spacing: 0.04em; }
    .wwa-profile-actions { gap: 18px; }
    .wwa-scroll { margin-top: 36px; }
    .wwa-cta-btn { width: 100%; justify-content: center; }
    .wwa-business { padding: 72px 0; }
    .wwa-business-grid { grid-template-columns: 1fr; }
    .wwa-business-card { min-height: 300px; }
    .wwa-recent { padding: 72px 0; }
    .wwa-recent-grid { grid-template-columns: 1fr; }
    .wwa-vision-body { margin-top: 18px; padding: 40px 20px 46px; }
    .wwa-vision-actions { gap: 18px; }
    .wwa-clients { padding: 48px 0; }
}
</style>
