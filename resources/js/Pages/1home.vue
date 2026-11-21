<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import Lenis from "@studio-freight/lenis";

const props = defineProps({
    blogs: Array,
    projects: {
        type: Array,
        default: () => []
    },
    clients: {
        type: Array,
        default: () => []
    },
    heroClients: {
        type: Array,
        default: () => []
    },
    projectLocations: {
        type: Array,
        default: () => []
    }
});

const projTrack = ref(null);
const projIndex = ref(0);
const projAtStart = ref(true);
const projAtEnd = ref(false);

const industries = [
    {
        name: "Petrochemical",
        desc: "Fabrication, plant maintenance and catalyst handling for petrochemical facilities.",
        img: "/assets/img/refresh/ind-petrochemical.webp",
        alt: "Raya Konstruksi catalyst handling at a petrochemical reactor"
    },
    {
        name: "Oil & Gas",
        desc: "Construction, piping and maintenance support for oil and gas operations.",
        img: "/assets/img/refresh/ind-oil-gas.webp",
        alt: "Oil and gas processing facility"
    },
    {
        name: "Energy",
        desc: "Construction and maintenance services for power and energy projects.",
        img: "/assets/img/refresh/ind-energy.webp",
        alt: "Energy processing plant"
    },
    {
        name: "Infrastructure",
        desc: "Civil works, roads and site structures for industrial infrastructure.",
        img: "/assets/img/refresh/ind-infrastructure.webp",
        alt: "Civil infrastructure construction site"
    },
    {
        name: "Sugar Plant",
        desc: "Construction and maintenance works for sugar mills and processing plants.",
        img: "/assets/img/refresh/ind-sugar-plant.webp",
        alt: "Aerial view of the MSM sugar mill construction site"
    }
];
const indIndex = ref(0);
const indDir = ref(1);
const indCount = String(industries.length).padStart(2, "0");
const currentIndustry = computed(() => industries[indIndex.value]);

function industryNum(i) {
    return String(i + 1).padStart(2, "0");
}

function indStep(dir) {
    indDir.value = dir;
    indIndex.value = (indIndex.value + dir + industries.length) % industries.length;
}

function indGo(i) {
    if (i === indIndex.value) return;
    indDir.value = i > indIndex.value ? 1 : -1;
    indIndex.value = i;
}

function projectMeta(project) {
    return [project.client, project.location, project.duration].filter(Boolean).join(" · ");
}

function projStep() {
    const track = projTrack.value;
    if (!track) return 0;
    const slide = track.querySelector(".h-proj");
    if (!slide) return 0;
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    return slide.getBoundingClientRect().width + gap;
}

function syncProjState() {
    const track = projTrack.value;
    if (!track) return;
    const step = projStep();
    projIndex.value = step ? Math.round(track.scrollLeft / step) : 0;
    projAtStart.value = track.scrollLeft <= 2;
    projAtEnd.value = track.scrollLeft >= track.scrollWidth - track.clientWidth - 2;
}

function scrollProjects(dir) {
    const track = projTrack.value;
    if (!track) return;
    track.scrollBy({ left: dir * projStep(), behavior: "smooth" });
}

const pageRoot = ref(null);
let revealObserver = null;
let splitObserver = null;
let lenis = null;
let lenisFrame = 0;

const revealGroups = [
    [".h-section-head", 0],
    [".h-svc-cards", 80],
    [".h-about-photo", 0],
    [".h-about-panel", 90],
    [".h-why-copy", 0],
    [".h-why-list", 120],
    [".h-certs-inner", 0],
    [".h-proj-intro", 0],
    [".h-proj-carousel", 100],
    [".h-presence-copy", 0],
    [".h-presence-map", 100],
    [".h-presence-list", 180],
    [".h-safety-copy", 0],
    [".h-safety-metrics", 100],
    [".h-safety-media", 180],
    [".h-ind-slider", 80],
    [".h-clients-title", 0],
    [".h-marquee", 80],
    [".h-cta-title", 0],
    [".h-cta-text", 100],
    [".h-cta-actions", 180],
    [".h-careers-media", 0],
    [".h-careers-intro", 90],
    [".h-careers-list", 180],
    [".h-careers-actions", 240]
];

function setupReveal() {
    const root = pageRoot.value;
    if (!root || !("IntersectionObserver" in window)) return;

    revealObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.dataset.rv = "in";
                revealObserver.unobserve(entry.target);
            });
        },
        { rootMargin: "0px 0px -10% 0px", threshold: 0.05 }
    );

    revealGroups.forEach(([selector, step]) => {
        root.querySelectorAll(selector).forEach((el, i) => {
            el.dataset.rv = "out";
            el.style.setProperty("--rv-delay", `${Math.min(i * step, 320)}ms`);
            revealObserver.observe(el);
        });
    });
}

/* split headings into words + letters, mirroring the reference letter rise */
function splitHeading(el) {
    if (el.dataset.split === "done") return;
    el.dataset.split = "done";

    const visual = document.createElement("span");
    visual.className = "h-split";
    visual.setAttribute("aria-hidden", "true");
    while (el.firstChild) visual.appendChild(el.firstChild);

    const sr = document.createElement("span");
    sr.className = "h-sr";
    sr.textContent = (visual.textContent || "").replace(/\s+/g, " ").trim();
    el.appendChild(sr);
    el.appendChild(visual);

    let index = 0;
    const walker = document.createTreeWalker(visual, NodeFilter.SHOW_TEXT);
    const textNodes = [];
    while (walker.nextNode()) {
        if (walker.currentNode.nodeValue.trim()) textNodes.push(walker.currentNode);
    }

    textNodes.forEach((node) => {
        const prev = node.previousSibling;
        const next = node.nextSibling;
        let value = node.nodeValue.replace(/[ \t\r\n]+/g, " ");
        if (!prev || prev.nodeName === "BR") value = value.replace(/^ /, "");
        if (!next || next.nodeName === "BR") value = value.replace(/ $/, "");

        const frag = document.createDocumentFragment();
        value.split(/(\s+)/).forEach((part) => {
            if (!part) return;
            if (/^\s+$/.test(part)) {
                frag.appendChild(document.createTextNode(" "));
                return;
            }
            const word = document.createElement("span");
            word.className = "h-word";
            const inner = document.createElement("span");
            inner.className = "h-word-in";
            inner.style.setProperty("--i", index++);
            inner.textContent = part;
            word.appendChild(inner);
            frag.appendChild(word);
        });
        node.replaceWith(frag);
    });
}

function setupSplitHeadings() {
    const root = pageRoot.value;
    if (!root || !("IntersectionObserver" in window)) return;

    splitObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add("is-split-in");
                splitObserver.unobserve(entry.target);
            });
        },
        { rootMargin: "0px 0px -8% 0px", threshold: 0.2 }
    );

    root.querySelectorAll(".h-hero-title, .h-h2").forEach((el) => {
        splitHeading(el);
        if (el.classList.contains("h-hero-title")) {
            requestAnimationFrame(() => requestAnimationFrame(() => el.classList.add("is-split-in")));
        } else {
            splitObserver.observe(el);
        }
    });
}

function startLenis() {
    lenis = new Lenis({ duration: 1.1, smoothWheel: true });
    const raf = (time) => {
        lenis.raf(time);
        lenisFrame = requestAnimationFrame(raf);
    };
    lenisFrame = requestAnimationFrame(raf);
}

const heroVideo = ref(null);
let heroVideoMq = null;

function applyHeroVideo() {
    const v = heroVideo.value;
    if (!v || !heroVideoMq) return;
    if (heroVideoMq.matches && !v.src) {
        v.src = "/assets/img/hero-carousel/hero-main.webm";
        v.play().catch(() => {});
    } else if (!heroVideoMq.matches && v.src) {
        v.pause();
        v.removeAttribute("src");
        v.load();
    }
}

onMounted(() => {
    heroVideoMq = window.matchMedia("(min-width: 992px) and (prefers-reduced-motion: no-preference)");
    heroVideoMq.addEventListener("change", applyHeroVideo);
    applyHeroVideo();
    syncProjState();
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
    setupSplitHeadings();
    setupReveal();
    startLenis();
});

onBeforeUnmount(() => {
    if (heroVideoMq) heroVideoMq.removeEventListener("change", applyHeroVideo);
    if (lenis) lenis.destroy();
    cancelAnimationFrame(lenisFrame);
    if (revealObserver) revealObserver.disconnect();
    if (splitObserver) splitObserver.disconnect();
});

const brokenClientLogos = ref(new Set());
function onClientLogoError(id) {
    brokenClientLogos.value = new Set(brokenClientLogos.value).add(id);
}

const logoClients = computed(() =>
    ((props.heroClients && props.heroClients.length ? props.heroClients : props.clients) || [])
        .filter((c) => c.logo_url && !brokenClientLogos.value.has(c.id))
);

const brokenBlogImages = ref([]);
function markBlogImageBroken(id) {
    if (!brokenBlogImages.value.includes(id)) {
        brokenBlogImages.value = [...brokenBlogImages.value, id];
    }
}
</script>

<template>
    <Head title="Home" />

    <div ref="pageRoot" class="rk-home">

        <!-- ============================================================
             01 - HERO
        ============================================================ -->
        <section id="hero" class="h-hero hero-section">
            <div class="h-hero-sticky">

            <div class="h-hero-media" aria-hidden="true">
                <img
                    class="h-hero-image"
                    src="/assets/img/refresh/home-hero.webp"
                    alt=""
                    width="2200"
                    height="1239"
                    fetchpriority="high"
                    decoding="async"
                />
                <video
                    ref="heroVideo"
                    class="h-hero-video"
                    muted
                    loop
                    playsinline
                    preload="none"
                    poster="/assets/img/refresh/hero-video-poster.webp"
                ></video>
                <div class="h-hero-scrim"></div>
            </div>

            <div class="h-container h-hero-grid">
                <div class="h-hero-copy">
                  

                    <h1 class="h-hero-title">
                        BUILDING<br />
                        TOMORROW,<br />
                        TODAY.
                    </h1>

                    <p class="h-hero-sub">
                        Excellence meets innovation. We fabricate, build, maintain and
                        service industrial plants, refineries and infrastructure across
                        Indonesia.
                    </p>

                    <div class="h-hero-actions">
                        <Link :href="route('whatWeDo')" class="h-hero-cta h-hero-cta--solid">
                            See our services
                        </Link>
                        <Link :href="route('contactUs')" class="h-hero-cta h-hero-cta--ghost">
                            Request a proposal
                        </Link>
                    </div>
                </div>

                <div class="h-hero-foot">
                    <dl class="h-hero-stats">
                        <div>
                            <dd>50<span class="h-plus">+</span></dd>
                            <dt>Projects</dt>
                        </div>
                        <div>
                            <dd>20<span class="h-plus">+</span></dd>
                            <dt>Clients</dt>
                        </div>
                        <div>
                            <dd>14</dd>
                            <dt>Regions</dt>
                        </div>
                    </dl>
                </div>
            </div>
            </div>
        </section>

        <!-- ============================================================
             03 - SERVICES
        ============================================================ -->
        <section class="h-section">
            <div class="h-container h-svc-split">
                <div class="h-svc-copy">
                    <span class="h-eyebrow">Our Services</span>
                    <h2 class="h-h2">Comprehensive Construction Solutions</h2>
                    <div class="h-rule"></div>
                    <p class="h-body">
                        From civil works and steel fabrication to plant maintenance and catalyst handling, Raya delivers integrated industrial services under one accountable team.
                    </p>
                    <Link :href="route('whatWeDo')" class="h-btn h-btn--solid">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>

                <div class="h-svc-cards">

                    <Link :href="route('constructionFabrication')" class="h-svc-card">
                        <img src="/assets/img/svc-fabrication.webp" alt="Raya Konstruksi welder fabricating plant piping" loading="lazy" width="800" height="1250" />
                        <span class="h-svc-shade" aria-hidden="true"></span>
                        <span class="h-svc-num">01</span>
                        <span class="h-svc-foot">
                            <span class="h-svc-body">
                                <span class="h-svc-name">Construction &amp; Fabrication</span>
                                <span class="h-svc-desc">Structural, piping and tank systems, from fabrication through installation.</span>
                            </span>
                            <span class="h-svc-arrow"><i class="bi bi-arrow-right"></i></span>
                        </span>
                    </Link>

                    <Link :href="route('plantMaintenance')" class="h-svc-card">
                        <img src="/assets/img/refresh/svc-plant.webp" alt="Plant operation and maintenance" loading="lazy" width="1200" height="900" />
                        <span class="h-svc-shade" aria-hidden="true"></span>
                        <span class="h-svc-num">02</span>
                        <span class="h-svc-foot">
                            <span class="h-svc-body">
                                <span class="h-svc-name">Operation &amp; Maintenance</span>
                                <span class="h-svc-desc">Scheduled inspections, corrective repairs and shutdown support for plant assets.</span>
                            </span>
                            <span class="h-svc-arrow"><i class="bi bi-arrow-right"></i></span>
                        </span>
                    </Link>

                    <Link :href="route('catalyst-loading')" class="h-svc-card">
                        <img src="/assets/img/projects/lotte-catalyst/catalyst-3.webp" alt="Catalyst handling operation" loading="lazy" width="360" height="720" />
                        <span class="h-svc-shade" aria-hidden="true"></span>
                        <span class="h-svc-num">03</span>
                        <span class="h-svc-foot">
                            <span class="h-svc-body">
                                <span class="h-svc-name">Catalyst Handling</span>
                                <span class="h-svc-desc">Catalyst loading, unloading and reactor handling following controlled procedures.</span>
                            </span>
                            <span class="h-svc-arrow"><i class="bi bi-arrow-right"></i></span>
                        </span>
                    </Link>

                    <Link :href="route('whatWeDo')" class="h-svc-card">
                        <img src="/assets/img/projects/enerco-1/enerco-1.webp" alt="Civil and road works" loading="lazy" width="360" height="720" />
                        <span class="h-svc-shade" aria-hidden="true"></span>
                        <span class="h-svc-num">04</span>
                        <span class="h-svc-foot">
                            <span class="h-svc-body">
                                <span class="h-svc-name">Civil &amp; Infrastructure</span>
                                <span class="h-svc-desc">Civil construction, road bases and industrial access roads and Infrastructure.</span>
                            </span>
                            <span class="h-svc-arrow"><i class="bi bi-arrow-right"></i></span>
                        </span>
                    </Link>

                </div>
            </div>
        </section>

        <!-- ============================================================
             04 - ABOUT BAND
        ============================================================ -->
        <section class="h-about-band">
            <div class="h-about-photo">
                <img src="/assets/img/refresh/about-tank.webp" alt="Tank construction at an industrial facility" loading="lazy" width="1600" height="1200" />
            </div>

            <div class="h-about-panel">
                <span class="h-eyebrow h-eyebrow--light">About Raya</span>
                <h2 class="h-h2 h-h2--light">
                    Excellence meets innovation to deliver unparalleled solutions for all your needs.
                </h2>
                <Link :href="route('whoWeAre')" class="h-btn h-btn--light">
                    About Us
                    <i class="bi bi-arrow-right"></i>
                </Link>
            </div>
        </section>

        <!-- ============================================================
             05 - CLIENTS
        ============================================================ -->
        <section v-if="logoClients.length > 0" class="h-clients">
            <div class="h-container h-clients-inner">
                <h2 class="h-clients-title">
                    <span class="h-clients-title-accent">Our Clients.</span>
                    <span class="h-clients-title-strong">Proven Track Record With Top Enterprises</span>
                </h2>

                <div class="h-clients-strip">
                    <div class="h-marquee">
                        <div class="h-marquee-track">
                            <div class="h-marquee-set">
                                <div v-for="c in logoClients" :key="'logo-' + c.id" class="h-logo-box">
                                    <img :src="c.logo_url" :alt="c.name" width="130" height="44" @error="onClientLogoError(c.id)" />
                                </div>
                            </div>
                            <div class="h-marquee-set" aria-hidden="true">
                                <div v-for="c in logoClients" :key="'logo-dup-' + c.id" class="h-logo-box">
                                    <img :src="c.logo_url" alt="" width="130" height="44" @error="onClientLogoError(c.id)" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <Link :href="route('clientPartner')" class="h-btn h-btn--solid h-clients-link">
                    More Clients
                    <i class="bi bi-arrow-right"></i>
                </Link>
            </div>
        </section>

        <!-- ============================================================
             06 - WHY CHOOSE RAYA
        ============================================================ -->
        <section class="h-why">
            <div class="h-why-bg" aria-hidden="true"></div>
            <div class="h-container h-why-grid">
                <div class="h-why-copy">
                    <span class="h-eyebrow h-eyebrow--light">Why Choose Raya</span>
                    <h2 class="h-h2 h-h2--light">What Sets Us Apart</h2>
                    <div class="h-rule h-rule--light"></div>
                    <p class="h-why-text">
                        Five commitments carried into every site, from mobilisation to handover.
                    </p>
                </div>

                <ol class="h-why-list">
                    <li>
                        <span class="h-why-num">01</span>
                        <div>
                            <h3 class="h-why-title">Experienced Team</h3>
                            <p class="h-why-desc">Skilled professionals with deep expertise across heavy industries.</p>
                        </div>
                    </li>
                    <li>
                        <span class="h-why-num">02</span>
                        <div>
                            <h3 class="h-why-title">Strong Safety Culture</h3>
                            <p class="h-why-desc">Zero-accident commitment on every project we execute.</p>
                        </div>
                    </li>
                    <li>
                        <span class="h-why-num">03</span>
                        <div>
                            <h3 class="h-why-title">Certified &amp; Compliant</h3>
                            <p class="h-why-desc">Adherent to international standards and industry best practices.</p>
                        </div>
                    </li>
                    <li>
                        <span class="h-why-num">04</span>
                        <div>
                            <h3 class="h-why-title">On-Time Delivery</h3>
                            <p class="h-why-desc">Committed to delivering quality work within agreed timelines.</p>
                        </div>
                    </li>
                    <li>
                        <span class="h-why-num">05</span>
                        <div>
                            <h3 class="h-why-title">Nationwide Coverage</h3>
                            <p class="h-why-desc">Active projects across 5 major islands in Indonesia.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </section>

        <!-- ============================================================
             06b - CERTIFICATIONS
        ============================================================ -->
        <section class="h-certs" aria-label="Certifications">
            <div class="h-container h-certs-inner">
                <p class="h-certs-label">Certified to International Standards</p>
                <div class="h-certs-logos">
                    <span class="h-cert-item">
                        <img src="/assets/img/certifications/iso-9001-2015.png"
                             alt="ISO 9001:2015 Quality Management System" width="160" height="149"
                             loading="lazy" decoding="async" />
                    </span>
                    <span class="h-cert-item">
                        <img src="/assets/img/certifications/iso-14001-2015.png"
                             alt="ISO 14001:2015 Environmental Management System" width="153" height="155"
                             loading="lazy" decoding="async" />
                    </span>
                    <span class="h-cert-item">
                        <img src="/assets/img/certifications/iso-45001-2018.png"
                             alt="ISO 45001:2018 Occupational Health and Safety" width="450" height="300"
                             loading="lazy" decoding="async" />
                    </span>
                    <span class="h-cert-item">
                        <img src="/assets/img/certifications/smk3.png"
                             alt="SMK3 certification" width="417" height="417"
                             class="h-certs-logo--round" loading="lazy" decoding="async" />
                    </span>
                </div>
                <Link :href="route('quality')" class="h-certs-link">
                    Our Certifications
                    <i class="bi bi-arrow-right"></i>
                </Link>
            </div>
        </section>

        <!-- ============================================================
             07 - FEATURED PROJECTS
        ============================================================ -->
        <section class="h-section">
            <div class="h-container h-proj-split">
                <div class="h-proj-intro">
                    <span class="h-eyebrow">Featured Projects</span>
                    <h2 class="h-h2">Recent Work</h2>
                    <div class="h-rule"></div>
                    <p class="h-body">
                        Selected construction, maintenance and catalyst projects delivered for industrial clients across Indonesia.
                    </p>
                    <Link :href="route('portfolio')" class="h-btn h-btn--solid">
                        View All Projects
                        <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>

                <div v-if="projects.length" class="h-proj-carousel">
                    <div class="h-proj-head">
                        <span class="h-proj-count">
                            {{ String(Math.min(projIndex + 1, projects.length)).padStart(2, "0") }}
                            <span>/</span>
                            {{ String(projects.length).padStart(2, "0") }}
                        </span>

                        <div class="h-proj-nav">
                            <button
                                type="button"
                                class="h-proj-arrow"
                                aria-label="Previous project"
                                :disabled="projAtStart"
                                @click="scrollProjects(-1)"
                            >
                                <i class="bi bi-arrow-left"></i>
                            </button>
                            <button
                                type="button"
                                class="h-proj-arrow"
                                aria-label="Next project"
                                :disabled="projAtEnd"
                                @click="scrollProjects(1)"
                            >
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <div
                        ref="projTrack"
                        class="h-proj-track"
                        role="region"
                        aria-label="Recent projects"
                        @scroll.passive="syncProjState"
                    >
                        <Link
                            v-for="project in projects"
                            :key="project.id"
                            :href="route('projectDetail', project.slug)"
                            class="h-proj"
                        >
                            <div class="h-proj-media">
                                <img
                                    :src="project.image"
                                    :alt="project.title"
                                    loading="lazy"
                                    width="960"
                                    height="600"
                                />
                            </div>
                            <div class="h-proj-bar">
                                <span v-if="project.service_type" class="h-proj-tag">{{ project.service_type }}</span>
                                <h3 class="h-proj-title">{{ project.title }}</h3>
                                <p v-if="projectMeta(project)" class="h-proj-meta">{{ projectMeta(project) }}</p>
                                <span class="h-proj-cta">View Details <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </Link>
                    </div>
                </div>
                <p v-else class="h-body">Projects will be published here.</p>
            </div>
        </section>

        <!-- ============================================================
             08 - ACTIVE SITES
        ============================================================ -->
        <section class="h-presence">
            <div class="h-container h-presence-grid">
                <div class="h-presence-copy">
                    <span class="h-eyebrow h-eyebrow--light">Active Sites</span>
                    <h2 class="h-h2 h-h2--light">Across <span class="h-tint">Indonesia</span></h2>
                    <p class="h-presence-text">
                        Major construction, fabrication and maintenance projects currently executing in key industrial regions.
                    </p>
                    <Link :href="route('portfolio')" class="h-link h-link--light">
                        View Our Presence <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>

                <div class="h-presence-map">
                    <button
                        type="button"
                        class="h-map-trigger"
                        data-bs-toggle="modal"
                        data-bs-target="#mapModal"
                        aria-label="Enlarge Indonesia active project map"
                    >
                        <img src="/assets/img/maps.webp?v=20261117" alt="Indonesia active project map" loading="lazy" width="3592" height="2376" />
                        <span class="h-map-zoom"><i class="bi bi-zoom-in"></i> Click to Enlarge</span>
                    </button>
                </div>

                <div class="h-presence-list">
                    <span class="h-presence-list-title">Our Industries</span>
                    <ul>
                        <li><Link :href="route('whatWeDo')">Petrochemical <i class="bi bi-arrow-right"></i></Link></li>
                        <li><Link :href="route('whatWeDo')">Oil &amp; Gas <i class="bi bi-arrow-right"></i></Link></li>
                        <li><Link :href="route('whatWeDo')">Energy <i class="bi bi-arrow-right"></i></Link></li>
                        <li><Link :href="route('whatWeDo')">Infrastructure <i class="bi bi-arrow-right"></i></Link></li>
                    </ul>
                </div>
            </div>

            <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <img class="h-map-modal-img" src="/assets/img/maps.webp?v=20261117" alt="Indonesia active project map" width="3592" height="2376" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================================
             09 - INDUSTRIES
        ============================================================ -->
        <section class="h-section">
            <div class="h-container">
                <header class="h-section-head">
                    <div class="h-section-head-copy">
                        <span class="h-eyebrow">Industries We Serve</span>
                        <h2 class="h-h2">Expertise Across Key Sectors</h2>
                    </div>
                    <div class="h-ind-counter" aria-hidden="true">
                        <Transition name="h-ind-num" mode="out-in">
                            <span class="h-ind-counter-now" :key="indIndex">{{ industryNum(indIndex) }}</span>
                        </Transition>
                        <span class="h-ind-counter-total">/ {{ indCount }}</span>
                    </div>
                </header>

                <div class="h-ind-slider" :class="{ 'is-back': indDir < 0 }">
                    <div class="h-ind-stage" role="group" aria-roledescription="carousel" aria-label="Industries We Serve">
                        <figure
                            v-for="(ind, i) in industries"
                            :key="ind.name"
                            class="h-ind-slide"
                            :class="{ 'is-active': i === indIndex }"
                            :aria-hidden="i !== indIndex"
                        >
                            <img :src="ind.img" :alt="ind.alt" width="1920" height="1080" />
                        </figure>
                        <span class="h-ind-veil" aria-hidden="true"></span>

                        <div class="h-ind-caption" aria-live="polite">
                            <Transition name="h-ind-copy" mode="out-in">
                                <div class="h-ind-copy" :key="indIndex">
                                    <h3>{{ currentIndustry.name }}</h3>
                                    <p>{{ currentIndustry.desc }}</p>
                                </div>
                            </Transition>
                        </div>

                        <div class="h-ind-controls">
                            <button type="button" class="h-ind-arrow" aria-label="Previous industry" @click="indStep(-1)">
                                <i class="bi bi-arrow-left"></i>
                            </button>
                            <button type="button" class="h-ind-arrow" aria-label="Next industry" @click="indStep(1)">
                                <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <div class="h-ind-tabs">
                        <button
                            v-for="(ind, i) in industries"
                            :key="'ind-tab-' + ind.name"
                            type="button"
                            class="h-ind-tab"
                            :class="{ 'is-active': i === indIndex }"
                            :aria-pressed="i === indIndex"
                            @click="indGo(i)"
                        >
                            <span class="h-ind-tab-num">{{ industryNum(i) }}</span>
                            <span class="h-ind-tab-name">{{ ind.name }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================================
             10 - SAFETY
        ============================================================ -->
        <section class="h-safety">
            <div class="h-container h-safety-grid">
                <div class="h-safety-copy">
                    <span class="h-eyebrow h-eyebrow--light">Safety First</span>
                    <h2 class="h-h2 h-h2--light h-safety-statement">
                        Safety is not a policy. It's how we work.
                    </h2>
                    <p class="h-safety-text">
                        Every task is planned around people first, from daily toolbox briefings to site-wide HSE audits.
                    </p>
                    <Link :href="route('safety')" class="h-link h-link--light">
                        Learn About HSE <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>

                <dl class="h-safety-metrics">
                    <div>
                        <dt>LTI Incidents</dt>
                        <dd>0</dd>
                    </div>
                    <div>
                        <dt>PPE Compliance</dt>
                        <dd>100%</dd>
                    </div>
                    <div>
                        <dt>Quality Management</dt>
                        <dd>ISO 9001</dd>
                    </div>
                </dl>

                <div class="h-safety-media">
                    <img src="/assets/img/refresh/hse.webp" alt="Raya Konstruksi HSE briefing at a construction site" width="1600" height="900" />
                </div>
            </div>
        </section>

        <!-- ============================================================
             12 - CTA
        ============================================================ -->
        <section class="h-cta">
            <div class="h-cta-media" aria-hidden="true">
                <img src="/assets/img/refresh/cta.webp" alt="" width="2200" height="958" />
            </div>

            <div class="h-container h-cta-inner">
                <h2 class="h-cta-title">
                       Ready to Discuss Your<br />

                    <span class="h-cta-outline">Next Industrial Project?</span>
                </h2>

                <p class="h-cta-text">
                    Let's build the solution together. From fabrication and construction to maintenance and catalyst handling, our team is ready to support your project across Indonesia.
                </p>

                <div class="h-cta-actions">
                    <Link :href="route('contactUs')" class="h-btn h-cta-btn h-cta-btn--primary">
                        Start a Conversation
                        <i class="bi bi-arrow-right"></i>
                    </Link>
                    <Link :href="route('portfolio')" class="h-btn h-cta-btn h-cta-btn--dark">
                        Explore Projects
                        <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>
            </div>
        </section>

        <!-- ============================================================
             13 - NEWS
        ============================================================ -->
        <section class="h-section">
            <div class="h-container">
                <header class="h-section-head">
                    <div class="h-section-head-copy">
                        <span class="h-eyebrow">Latest Updates</span>
                        <h2 class="h-h2">News &amp; Updates</h2>
                    </div>
                    <Link :href="route('news')" class="h-link h-section-head-link">
                        View All News <i class="bi bi-arrow-right"></i>
                    </Link>
                </header>

                <div v-if="blogs && blogs.length > 0" class="h-news-grid">
                    <article v-for="blog in blogs.slice(0, 3)" :key="blog.id" class="h-news">
                        <Link :href="route('newsDetail', blog.slug)" class="h-news-media">
                            <img
                                v-if="blog.image && !brokenBlogImages.includes(blog.id)"
                                :src="'/storage/' + blog.image"
                                :alt="blog.title"
                                loading="lazy"
                                width="280"
                                height="280"
                                @error="markBlogImageBroken(blog.id)"
                            />
                            <span v-else class="h-news-placeholder">
                                <span class="h-news-placeholder-tag">Project Update</span>
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </Link>

                        <div class="h-news-body">
                            <span class="h-news-date">
                                {{ blog.published_at ? new Date(blog.published_at).toLocaleDateString('en-GB', {day:'numeric', month:'long', year:'numeric'}) : '' }}
                            </span>
                            <Link :href="route('newsDetail', blog.slug)" class="h-news-title">{{ blog.title }}</Link>
                        </div>

                        <Link :href="route('newsDetail', blog.slug)" class="h-news-arrow" aria-label="Read article">
                            <i class="bi bi-arrow-up-right"></i>
                        </Link>
                    </article>
                </div>

                <div v-else class="h-news-empty">
                    <p class="h-body">Project updates will be published here.</p>
                </div>
            </div>
        </section>

        <!-- ============================================================
             14 - CAREERS
        ============================================================ -->
        <section class="h-section h-careers">
            <div class="h-container">
                <div class="h-careers-inner">
                    <div class="h-careers-panel" aria-hidden="true"></div>

                    <figure class="h-careers-media">
                        <span class="h-careers-bracket" aria-hidden="true"></span>
                        <div class="h-careers-card">
                            <img src="/assets/img/br.webp"
                                alt="Raya Konstruksi workers installing large pipes on scaffolding at a project site"
                                loading="lazy" width="1400" height="1703" />
                            <div class="h-careers-stats">
                                <div class="h-careers-stat">
                                    <i class="bi bi-buildings" aria-hidden="true"></i>
                                    <div class="h-careers-stat-copy">
                                        <strong>50+</strong>
                                        <span>Completed Projects</span>
                                    </div>
                                </div>
                                <div class="h-careers-stat">
                                    <i class="bi bi-geo-alt" aria-hidden="true"></i>
                                    <div class="h-careers-stat-copy">
                                        <strong>14</strong>
                                        <span>Project Regions</span>
                                    </div>
                                </div>
                                <div class="h-careers-stat">
                                    <i class="bi bi-people" aria-hidden="true"></i>
                                    <div class="h-careers-stat-copy">
                                        <strong>20+</strong>
                                        <span>Trusted Clients</span>
                                    </div>
                                </div>
                                <span class="h-careers-wedge" aria-hidden="true"></span>
                            </div>
                        </div>
                    </figure>

                    <div class="h-careers-body">
                        <div class="h-careers-intro">
                            <span class="h-eyebrow h-careers-eyebrow">Careers</span>
                            <h2 class="h-careers-heading">Build Your Career<br />With RAYA</h2>
                            <p class="h-careers-lead">
                                Join a team of engineers, technicians, and specialists delivering excellence across Indonesia's industrial sector.
                            </p>
                        </div>

                        <ol class="h-careers-list">
                            <li>
                                <span class="h-careers-num">01</span>
                                <span class="h-careers-itemtext"><strong>Professional Growth.</strong> Continuous training and development tailored to your expertise.</span>
                            </li>
                            <li>
                                <span class="h-careers-num">02</span>
                                <span class="h-careers-itemtext"><strong>Safety First.</strong> Industry-leading HSE standards protecting every team member on every site.</span>
                            </li>
                            <li>
                                <span class="h-careers-num">03</span>
                                <span class="h-careers-itemtext"><strong>Collaborative Culture.</strong> A diverse and inclusive environment where every contribution is valued.</span>
                            </li>
                            <li>
                                <span class="h-careers-num">04</span>
                                <span class="h-careers-itemtext"><strong>Nationwide Presence.</strong> Work on major industrial projects across Indonesia.</span>
                            </li>
                        </ol>

                        <div class="h-careers-actions">
                            <Link :href="route('career')" class="h-btn h-btn--solid">
                                Explore Careers
                                <i class="bi bi-arrow-right"></i>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<style scoped>
/* ============================================================
   TOKENS
============================================================ */
.rk-home {
    --az: #2B4184;
    --eerie: #1E1E1E;
    --muted: #687080;
    --line: #D9DDE5;
    --off: #F7F8FA;
    --paper: #FFFFFF;
    --paper-2: #E7E1D7;
    /* Brand Book: Azure Blue 50 / white 30 / aksen 20 */
    --tint: #CAD0E0;
    --amber: #2B4184;
    --amber-light: #CAD0E0;
    --amber-dark: #1E1E1E;
    --cta: #2B4184;
    --cta-hover: #1E1E1E;

    --radius-btn: 10px;
    --radius-card: 14px;
    --radius-media: 12px;
    --radius-badge: 4px;

    --max: 1440px;
    --gutter: 32px;
    --edge: 32px;
    --section-y: 104px;

    width: 100%;
    overflow-x: clip;
    background: var(--paper);
    color: var(--eerie);
    font-family: "Figtree", system-ui, sans-serif;
}

.rk-home *,
.rk-home *::before,
.rk-home *::after { box-sizing: border-box; }

.rk-home img { display: block; max-width: 100%; }

.h-container {
    width: 100%;
    max-width: var(--max);
    margin: 0 auto;
    padding-left: var(--edge);
    padding-right: var(--edge);
}

/* content rises into place as each section scrolls into view */
@media (prefers-reduced-motion: no-preference) {
    [data-rv] {
        transition:
            opacity 0.65s ease var(--rv-delay, 0ms),
            transform 0.9s cubic-bezier(0.16, 1, 0.3, 1) var(--rv-delay, 0ms);
    }
    [data-rv="out"] {
        opacity: 0;
        transform: translate3d(0, 28px, 0);
    }
    [data-rv="in"] {
        opacity: 1;
        transform: none;
    }
}

/* headings rise word by word, as in the reference.
   :deep() karena span dibuat lewat JS dan tidak membawa atribut scope Vue */
.rk-home :deep(.h-sr) {
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0 0 0 0);
    white-space: nowrap;
    border: 0;
}
.rk-home :deep(.h-split) { display: block; }
.rk-home :deep(.h-word) {
    display: inline-block;
    overflow: hidden;
    vertical-align: top;
    padding-bottom: 0.14em;
    margin-bottom: -0.14em;
}
.rk-home :deep(.h-word-in) { display: inline-block; }
@media (prefers-reduced-motion: no-preference) {
    .rk-home :deep(.h-word-in) {
        transform: translate3d(0, 115%, 0);
        transition: transform 0.9s cubic-bezier(0.16, 1, 0.3, 1);
        transition-delay: calc(var(--i, 0) * 45ms);
    }
    .rk-home :deep(.is-split-in .h-word-in) { transform: translate3d(0, 0, 0); }
}

/* ============================================================
   TYPE & PRIMITIVES
============================================================ */
.h-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: "Figtree", sans-serif;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: var(--amber);
    margin-bottom: 18px;
}
.h-eyebrow::before {
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--amber);
    flex: none;
}
.h-eyebrow--light { color: rgba(255, 255, 255, 0.72); }

.h-h2 {
    margin: 0;
    font-family: "Figtree", sans-serif;
    font-size: clamp(32px, 3.8vw, 56px);
    font-weight: 800;
    line-height: 1.02;
    letter-spacing: -0.02em;
    color: var(--eerie);
    text-wrap: balance;
}
.h-h2--light { color: #FFFFFF; }

.h-body {
    margin: 0;
    font-size: 16px;
    line-height: 1.75;
    color: var(--muted);
}
.h-body strong { color: var(--eerie); font-weight: 700; }

.h-rule {
    width: 56px;
    height: 3px;
    background: var(--amber);
    margin: 24px 0;
}
.h-rule--light { background: var(--amber-light); }

.h-tint { color: var(--tint); }
.h-plus { color: var(--amber-light); font-weight: 700; }

.h-link {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--eerie);
    text-decoration: none;
    padding-bottom: 4px;
    border-bottom: 1px solid rgba(30, 30, 30, 0.3);
    transition: color 0.2s, border-color 0.2s;
}
.h-link:hover { color: var(--amber); border-bottom-color: var(--amber); }
.h-link::before { content: ""; position: absolute; inset: -14px -10px; }
.h-link i { font-size: 12px; }
.h-link--light { color: #FFFFFF; border-bottom-color: rgba(255, 255, 255, 0.4); }
.h-link--light:hover { color: var(--tint); border-bottom-color: var(--tint); }

.h-btn {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    box-sizing: border-box;
    padding: 10px 10px 10px 24px;
    height: 56px;
    border-radius: 9999px;
    border: 1px solid transparent;
    font-family: "Figtree", sans-serif;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: -0.01em;
    text-decoration: none;
    white-space: nowrap;
    cursor: pointer;
    transition:
        background 0.4s cubic-bezier(0.16, 1, 0.3, 1),
        color 0.4s cubic-bezier(0.16, 1, 0.3, 1),
        border-color 0.4s cubic-bezier(0.16, 1, 0.3, 1),
        box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1),
        transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}
.h-btn > i {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    font-size: 14px;
    transition:
        transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1),
        border-radius 0.4s ease,
        background 0.4s ease,
        width 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}
.h-btn:hover > i,
.h-btn:focus-visible > i {
    width: 50px;
    border-radius: 18px;
    transform: translateX(4px);
}
.h-btn:active { transform: scale(0.98); }
.h-btn:focus-visible { outline: 2px solid currentColor; outline-offset: 3px; }

.h-btn--solid {
    background: var(--cta);
    border-color: var(--cta);
    color: #FFFFFF;
    box-shadow:
        inset 0 4px 6px rgba(0, 0, 0, 0.18),
        inset 0 2px 4px rgba(255, 255, 255, 0.28);
}
.h-btn--solid > i { background: rgba(255, 255, 255, 0.18); }
.h-btn--solid:hover {
    background: var(--cta-hover);
    border-color: var(--cta-hover);
    color: #FFFFFF;
    box-shadow:
        inset 0 4px 8px rgba(0, 0, 0, 0.16),
        inset 0 2px 6px rgba(255, 255, 255, 0.3);
    transform: translateY(-1px);
}
.h-btn--solid:hover > i { background: rgba(255, 255, 255, 0.18); }

.h-btn--ghost {
    background: transparent;
    border-color: rgba(255, 255, 255, 0.4);
    color: #FFFFFF;
    box-shadow:
        inset 0 4px 6px rgba(0, 0, 0, 0.18),
        inset 0 2px 4px rgba(255, 255, 255, 0.22);
}
.h-btn--ghost > i { background: rgba(255, 255, 255, 0.16); }
.h-btn--ghost:hover {
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(255, 255, 255, 0.75);
    color: #FFFFFF;
    transform: translateY(-1px);
}
.h-btn--ghost:hover > i { background: rgba(255, 255, 255, 0.26); }

.h-btn--light {
    background: #FFFFFF;
    border-color: #FFFFFF;
    color: var(--az);
    box-shadow:
        inset 0 4px 6px rgba(0, 0, 0, 0.1),
        inset 0 2px 4px rgba(255, 255, 255, 0.7);
}
.h-btn--light > i { background: rgba(43, 65, 132, 0.12); }
.h-btn--light:hover {
    background: rgba(255, 255, 255, 0.9);
    border-color: rgba(255, 255, 255, 0.9);
    color: var(--az);
    transform: translateY(-1px);
}
.h-btn--light:hover > i { background: rgba(43, 65, 132, 0.2); }

.h-section { padding: var(--section-y) 0; }

/* ============================================================
   SECTION HEAD
============================================================ */
.h-section-head {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 32px;
    padding-bottom: 24px;
    margin-bottom: 34px;
    border-bottom: 1px solid var(--line);
}
.h-section-head-copy { min-width: 0; }
.h-section-head-link { flex: none; margin-bottom: 6px; }

/* ============================================================
   01 - HERO
============================================================ */
.h-hero {
    position: relative;
    height: 150vh;
    background: var(--eerie);
    /* sticky child needs a non-clipping scroll chain */
    overflow: visible;
}
.h-hero-sticky {
    position: sticky;
    top: 0;
    display: flex;
    height: 100vh;
    overflow: hidden;
}
.h-hero-media { position: absolute; inset: 0; z-index: 0; }
.h-hero-image {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 42%;
}
.h-hero-video {
    display: none;
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 42%;
}
@media (min-width: 992px) {
    .h-hero-video { display: block; }
}
@media (prefers-reduced-motion: reduce) {
    .h-hero-video { display: none !important; }
}

.h-hero-scrim {
    position: absolute;
    inset: 0;
    background:
        linear-gradient(90deg, rgba(30, 30, 30, 0.74) 0%, rgba(30, 30, 30, 0.44) 50%, rgba(30, 30, 30, 0.10) 100%),
        linear-gradient(180deg, rgba(30, 30, 30, 0.45) 0%, rgba(30, 30, 30, 0.05) 38%, rgba(30, 30, 30, 0.55) 100%);
}

.h-hero-grid {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 40px;
    padding-top: 124px;
    padding-bottom: 40px;
}
.h-hero-copy {
    width: 100%;
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    text-align: left;
}

.h-hero-rule {
    display: block;
    width: 96px;
    height: 8px;
    margin-bottom: 34px;
    background: #FFFFFF;
}

.h-hero-title {
    margin: 0;
    font-family: "Figtree", sans-serif;
    font-size: clamp(44px, 7.2vw, 104px);
    font-weight: 800;
    font-style: normal;
    line-height: 0.95;
    letter-spacing: -0.03em;
    color: #FFFFFF;
}

.h-hero-sub {
    max-width: 760px;
    margin: 30px 0 0;
    font-size: clamp(16px, 1.35vw, 20px);
    font-weight: 600;
    line-height: 1.55;
    color: var(--tint);
}

.h-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-top: 36px;
}
.h-hero-cta {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 56px;
    padding: 0 32px;
    border-radius: 9999px;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: -0.01em;
    text-decoration: none;
    cursor: pointer;
    transition:
        background 0.3s ease,
        border-color 0.3s ease,
        color 0.3s ease,
        transform 0.3s ease;
}
.h-hero-cta:hover { transform: translateY(-1px); }
.h-hero-cta:focus-visible { outline: 2px solid #FFFFFF; outline-offset: 3px; }
.h-hero-cta--solid {
    background: #FFFFFF;
    border: 1px solid #FFFFFF;
    color: var(--navy);
}
.h-hero-cta--solid:hover {
    background: var(--tint);
    border-color: var(--tint);
    color: var(--navy);
}
.h-hero-cta--ghost {
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.55);
    color: #FFFFFF;
}
.h-hero-cta--ghost:hover {
    background: rgba(255, 255, 255, 0.12);
    border-color: #FFFFFF;
    color: #FFFFFF;
}

/* only the + marks carry the accent colour inside the hero */
.h-hero .h-plus { color: var(--tint); }

/* stats sit bottom-right under the hero copy */
.h-hero-foot {
    display: grid;
    grid-template-columns: 1fr auto 1fr;
    align-items: end;
    gap: 24px;
    width: 100%;
}

.h-hero-stats {
    grid-column: 3;
    justify-self: end;
    display: flex;
    align-items: flex-end;
    margin: 0;
}

@media (max-width: 1279px) {
    .h-hero-foot { grid-template-columns: 1fr; gap: 20px; }
    .h-hero-stats { grid-column: 1; justify-self: end; }
}
.h-hero-stats > div {
    padding: 0 24px;
    border-left: 1px solid rgba(255, 255, 255, 0.18);
}
.h-hero-stats > div:first-child { border-left: 0; padding-left: 0; }
.h-hero-stats > div:last-child { padding-right: 0; }
.h-hero-stats dd {
    margin: 0;
    font-family: "Figtree", sans-serif;
    font-size: 21px;
    font-weight: 800;
    line-height: 1;
    letter-spacing: -0.02em;
    color: #FFFFFF;
}
.h-hero-stats dt {
    margin-top: 7px;
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.55);
}

/* ============================================================
   HEADER OVER HERO
   Transparent on top, colour only once the page scrolls.
============================================================ */
:global(.header:not(.scrolled)) {
    background-color: transparent;
    border-bottom-color: transparent;
    box-shadow: none;
}
:global(.header:not(.scrolled) .header-inner > .logo img) { filter: brightness(0) invert(1); }
/* drawer logo sits on the white mobile panel - keep its original colours */
:global(.header:not(.scrolled) .navbar .logo img) { filter: none; }
:global(.header:not(.scrolled) .mobile-nav-show) { color: #FFFFFF !important; }

@media (min-width: 1280px) {
    :global(.header:not(.scrolled) .navbar a),
    :global(.header:not(.scrolled) .navbar a:focus) { color: rgba(255, 255, 255, 0.88); }
    :global(.header:not(.scrolled) .navbar a:hover),
    :global(.header:not(.scrolled) .navbar .active),
    :global(.header:not(.scrolled) .navbar li:hover > a) { color: #FFFFFF; }
}

/* ============================================================
   03 - SERVICES
============================================================ */
.h-svc-split {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: var(--gutter);
    align-items: stretch;
}
.h-svc-copy {
    grid-column: 1 / span 4;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding-right: 24px;
}
.h-svc-copy .h-body { margin-bottom: 30px; }
.h-svc-cards {
    grid-column: 5 / span 8;
    display: flex;
    align-items: stretch;
    gap: 16px;
}
.h-svc-card {
    position: relative;
    display: flex;
    flex: 1 1 0;
    flex-direction: column;
    justify-content: space-between;
    min-width: 0;
    min-height: 500px;
    padding: 20px 18px 22px;
    border-radius: var(--radius-card);
    overflow: hidden;
    background: var(--az);
    color: #FFFFFF;
    text-decoration: none;
    isolation: isolate;
    transition: flex-grow 0.65s cubic-bezier(0.16, 1, 0.3, 1);
}
.h-svc-card:focus-visible { outline: 2px solid #FFFFFF; outline-offset: 3px; }
.h-svc-card img {
    position: absolute;
    inset: 0;
    z-index: -2;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94), filter 0.45s ease;
}
.h-svc-shade {
    position: absolute;
    inset: 0;
    z-index: -1;
    background: linear-gradient(180deg, rgba(30, 30, 30, 0.42) 0%, rgba(30, 30, 30, 0.06) 45%, rgba(30, 30, 30, 0.86) 100%);
}
.h-svc-card:hover img { transform: scale(1.06); }

.h-svc-num {
    font-family: "Figtree", sans-serif;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.16em;
    color: var(--amber-light);
}
.h-svc-foot {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 10px;
}
.h-svc-body {
    display: flex;
    flex-direction: column;
    min-width: 0;
}
.h-svc-name {
    font-family: "Figtree", sans-serif;
    font-size: 17px;
    font-weight: 700;
    line-height: 1.2;
    color: #FFFFFF;
    max-width: 12ch;
}
.h-svc-desc {
    max-width: 34ch;
    max-height: 0;
    margin-top: 0;
    overflow: hidden;
    opacity: 0;
    transform: translateY(10px);
    font-size: 13px;
    line-height: 1.55;
    color: rgba(255, 255, 255, 0.8);
    transition:
        opacity 0.35s ease,
        transform 0.45s cubic-bezier(0.16, 1, 0.3, 1),
        max-height 0.5s cubic-bezier(0.16, 1, 0.3, 1),
        margin-top 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}
.h-svc-arrow {
    flex: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border: 1px solid rgba(255, 255, 255, 0.6);
    border-radius: 50%;
    color: #FFFFFF;
    transition: background 0.25s, border-color 0.25s, color 0.25s, transform 0.25s, opacity 0.3s ease;
}
.h-svc-card:hover .h-svc-arrow {
    background: var(--amber-light);
    border-color: var(--amber-light);
    color: #1E1E1E;
    transform: rotate(-45deg);
}

/* hovered card widens, its siblings collapse into strips */
@media (min-width: 1200px) {
    .h-svc-card:hover,
    .h-svc-card:focus-visible { flex-grow: 4; }

    .h-svc-card:hover .h-svc-desc,
    .h-svc-card:focus-visible .h-svc-desc {
        max-height: 96px;
        margin-top: 8px;
        opacity: 1;
        transform: translateY(0);
    }

    .h-svc-cards:has(.h-svc-card:hover) .h-svc-card:not(:hover) .h-svc-arrow,
    .h-svc-cards:has(.h-svc-card:focus-visible) .h-svc-card:not(:focus-visible) .h-svc-arrow { opacity: 0; }

    .h-svc-cards:has(.h-svc-card:hover) .h-svc-card:not(:hover) img { filter: brightness(0.72); }
}

/* ============================================================
   04 - ABOUT BAND
============================================================ */
.h-about-band {
    display: grid;
    grid-template-columns: 1fr 1fr;
    min-height: 560px;
    padding: 0;
    background: var(--az);
    overflow: hidden;
}
.h-about-photo {
    position: relative;
    overflow: hidden;
    min-height: 420px;
}
.h-about-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.h-about-photo::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(30, 30, 30, 0.10) 0%, rgba(30, 30, 30, 0.45) 100%);
    pointer-events: none;
}
.h-about-panel {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: clamp(48px, 6vw, 96px);
    background: var(--az);
    color: #FFFFFF;
}
.h-about-panel .h-h2 { font-size: clamp(30px, 3.4vw, 48px); }
.h-about-panel .h-btn { margin-top: 34px; }

/* ============================================================
   05 - CLIENTS
============================================================ */
.h-clients {
    padding: 104px 0;
    background: var(--paper);
}
.h-clients-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
}
.h-clients-title {
    margin: 0 0 50px;
    text-align: center;
    font-family: "Figtree", sans-serif;
    font-size: clamp(30px, 3.4vw, 46px);
    font-weight: 600;
    line-height: 1.18;
    letter-spacing: -0.02em;
}
.h-clients-title span { display: block; }
.h-clients-title-accent { color: var(--amber); }
.h-clients-title-strong { color: var(--eerie); }
.h-clients-strip {
    width: 100%;
    padding: 30px 0;
    border-top: 1px solid var(--line);
    border-bottom: 1px solid var(--line);
}
.h-clients-link { margin-top: 32px; }

.h-marquee {
    overflow: hidden;
    mask-image: linear-gradient(90deg, transparent, #000 9%, #000 91%, transparent);
    -webkit-mask-image: linear-gradient(90deg, transparent, #000 9%, #000 91%, transparent);
}
.h-marquee-track {
    display: flex;
    width: max-content;
    animation: h-marquee 42s linear infinite;
}
.h-marquee:hover .h-marquee-track { animation-play-state: paused; }
.h-marquee-set { display: flex; align-items: center; }
.h-logo-box {
    display: flex;
    align-items: center;
    justify-content: center;
    flex: none;
    height: 46px;
    margin-right: 88px;
}
.h-logo-box img {
    width: auto;
    height: 34px;
    max-width: 170px;
    max-height: none;
    object-fit: contain;
    filter: grayscale(100%);
    opacity: 0.7;
    transition: filter 0.3s, opacity 0.3s;
}
.h-logo-box:hover img { filter: grayscale(0%); opacity: 1; }

@keyframes h-marquee {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}

/* ============================================================
   06 - WHY
============================================================ */
.h-why {
    position: relative;
    padding: var(--section-y) 0;
    background: var(--eerie);
    overflow: hidden;
}
.h-why-bg {
    position: absolute;
    inset: 0;
    background: url('/assets/img/projects/lotte/lotte-1.webp') center / cover no-repeat;
    opacity: 0.22;
}
.h-why-bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, #1E1E1E 0%, rgba(30, 30, 30, 0.86) 55%, rgba(30, 30, 30, 0.55) 100%);
}
.h-why-grid {
    position: relative;
    z-index: 1;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: var(--gutter);
}
.h-why-copy { grid-column: 1 / span 4; }
.h-why-text {
    max-width: 34ch;
    margin: 0;
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.6);
}
.h-why-list {
    grid-column: 6 / span 7;
    margin: 0;
    padding: 0;
    list-style: none;
}
.h-why-list li {
    display: grid;
    grid-template-columns: 64px 1fr;
    gap: 20px;
    align-items: start;
    padding: 22px 0;
    border-top: 1px solid rgba(255, 255, 255, 0.14);
}
.h-why-list li:last-child { border-bottom: 1px solid rgba(255, 255, 255, 0.14); }
.h-why-num {
    font-family: "Figtree", sans-serif;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 0.14em;
    color: var(--amber-light);
    padding-top: 4px;
}
.h-why-title {
    margin: 0;
    font-family: "Figtree", sans-serif;
    font-size: 19px;
    font-weight: 700;
    color: #FFFFFF;
}
.h-why-desc {
    margin: 6px 0 0;
    font-size: 14px;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.58);
}

/* ============================================================
   06b - CERTIFICATIONS
============================================================ */
.h-certs {
    background: #FFFFFF;
    border-bottom: 1px solid rgba(30, 30, 30, 0.07);
    padding: clamp(30px, 4vw, 48px) 0;
}

.h-certs-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: clamp(18px, 2.4vw, 26px);
    text-align: center;
}

.h-certs-label {
    display: inline-flex;
    align-items: center;
    gap: 16px;
    margin: 0;
    font-family: "Figtree", sans-serif;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: var(--muted);
}

.h-certs-label::before,
.h-certs-label::after {
    content: "";
    width: 26px;
    height: 1px;
    background: rgba(30, 30, 30, 0.18);
}

.h-certs-logos {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: clamp(20px, 4.5vw, 56px);
    flex-wrap: wrap;
}

.h-cert-item {
    display: flex;
    align-items: center;
    justify-content: center;
    width: clamp(96px, 10vw, 132px);
    height: 72px;
}

.h-cert-item img {
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto;
    object-fit: contain;
    display: block;
}

.h-certs-logo--round { border-radius: 50%; }

.h-certs-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: "Figtree", sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: var(--navy);
    text-decoration: none;
    white-space: nowrap;
    padding-bottom: 3px;
    border-bottom: 1px solid rgba(43, 65, 132, 0);
    transition: border-color 0.25s ease;
}

.h-certs-link i { transition: transform 0.3s ease; }
.h-certs-link:hover { border-bottom-color: rgba(43, 65, 132, 0.35); }
.h-certs-link:hover i { transform: translateX(3px); }
.h-certs-link:focus-visible {
    outline: 2px solid var(--navy);
    outline-offset: 4px;
    border-radius: 2px;
}

@media (max-width: 767px) {
    .h-cert-item {
        width: 78px;
        height: 56px;
    }
    .h-certs-logos { gap: 14px; }
    .h-certs-label { gap: 10px; }
    .h-certs-label::before,
    .h-certs-label::after { width: 16px; }
}

/* ============================================================
   07 - PROJECTS
============================================================ */
.h-proj-split {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 64px;
    align-items: center;
}
.h-proj-intro {
    grid-column: 1 / span 4;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.h-proj-intro .h-body { margin-bottom: 30px; }

.h-proj {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    background: #FFFFFF;
    border: 1px solid var(--line);
    border-radius: var(--radius-card);
    overflow: hidden;
    transition: border-color 0.25s;
}
.h-proj:hover { border-color: var(--az); }

.h-proj-carousel {
    grid-column: 6 / span 7;
    min-width: 0;
}

.h-proj-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    margin-bottom: 16px;
}
.h-proj-count {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-family: "Figtree", sans-serif;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.16em;
    color: var(--eerie);
}
.h-proj-count span { color: var(--muted); font-weight: 500; }

.h-proj-nav { display: flex; gap: 8px; }
.h-proj-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    padding: 0;
    border: 1px solid var(--line);
    border-radius: 50%;
    background: #FFFFFF;
    color: var(--eerie);
    font-size: 15px;
    cursor: pointer;
    transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease;
}
.h-proj-arrow:hover:not(:disabled) {
    background: var(--az);
    border-color: var(--az);
    color: #FFFFFF;
}
.h-proj-arrow:focus-visible { outline: 2px solid var(--az); outline-offset: 2px; }
.h-proj-arrow:disabled { opacity: 0.35; cursor: default; }

.h-proj-track {
    display: flex;
    gap: 24px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    scrollbar-width: none;
    -ms-overflow-style: none;
}
.h-proj-track::-webkit-scrollbar { display: none; }

.h-proj-carousel .h-proj {
    flex: 0 0 86%;
    scroll-snap-align: start;
    scroll-snap-stop: always;
}
.h-proj-carousel .h-proj-bar {
    display: flex;
    flex: 1 1 auto;
    flex-direction: column;
    align-items: flex-start;
}
.h-proj-carousel .h-proj-cta {
    margin-top: auto;
    padding-top: 18px;
}

.h-proj-media {
    overflow: hidden;
    background: var(--off);
    border-radius: var(--radius-media) var(--radius-media) 0 0;
}
.h-proj-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.h-proj-carousel .h-proj-media { aspect-ratio: 16 / 10; }
.h-proj:hover .h-proj-media img { transform: scale(1.04); }

.h-proj-bar {
    padding: 26px 28px 30px;
    background: var(--az);
    color: #FFFFFF;
}
.h-proj-tag {
    display: inline-block;
    margin-bottom: 12px;
    padding: 4px 8px;
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: var(--radius-badge);
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.85);
}
.h-proj-title {
    margin: 0;
    font-family: "Figtree", sans-serif;
    font-size: clamp(21px, 2vw, 30px);
    font-weight: 700;
    line-height: 1.2;
    color: #FFFFFF;
}
.h-proj-meta {
    margin: 10px 0 0;
    font-size: 12px;
    line-height: 1.55;
    color: rgba(255, 255, 255, 0.62);
}
.h-proj-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 18px;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: #FFFFFF;
    padding-bottom: 3px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.4);
    transition: border-color 0.2s;
}
.h-proj:hover .h-proj-cta { border-bottom-color: var(--amber-light); }

/* ============================================================
   08 - PRESENCE
============================================================ */
.h-presence {
    position: relative;
    padding: var(--section-y) 0;
    background: var(--az);
}
.h-presence-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 40px;
    align-items: center;
}
.h-presence-copy {
    grid-column: 1 / span 3;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.h-presence-text {
    max-width: 32ch;
    margin: 0 0 28px;
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.66);
}
.h-presence-map { grid-column: 4 / span 6; }
.h-map-trigger {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    border: 0;
    border-radius: var(--radius-media);
    overflow: hidden;
    background: transparent;
    cursor: zoom-in;
}
.h-map-trigger img {
    width: 100%;
    height: auto;
    border-radius: var(--radius-media);
    transition: transform 0.6s ease, opacity 0.4s ease;
}
.h-map-trigger:hover img { transform: scale(1.02); opacity: 0.9; }
.h-map-zoom {
    position: absolute;
    right: 16px;
    bottom: 16px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 9px 14px;
    border-radius: var(--radius-btn);
    background: rgba(255, 255, 255, 0.94);
    color: var(--az);
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.12em;
    text-transform: uppercase;
}

.h-presence-list { grid-column: 10 / span 3; }
.h-presence-list-title {
    display: block;
    margin-bottom: 18px;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 0.2em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.72);
}
.h-presence-list ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.h-presence-list li { border-top: 1px solid rgba(255, 255, 255, 0.16); }
.h-presence-list li:last-child { border-bottom: 1px solid rgba(255, 255, 255, 0.16); }
.h-presence-list a {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    padding: 15px 0;
    font-family: "Figtree", sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #FFFFFF;
    text-decoration: none;
    transition: color 0.2s, padding 0.2s;
}
.h-presence-list a i { font-size: 12px; color: var(--tint); }
.h-presence-list a:hover { color: var(--tint); padding-left: 6px; }

/* ============================================================
   09 - INDUSTRIES
============================================================ */
.h-ind-counter {
    display: flex;
    align-items: baseline;
    gap: 8px;
    font-family: "Figtree", sans-serif;
    font-variant-numeric: tabular-nums;
}
.h-ind-counter-now {
    display: inline-block;
    font-size: clamp(30px, 3vw, 44px);
    font-weight: 800;
    line-height: 1;
    color: var(--amber);
}
.h-ind-counter-total {
    font-size: 13px;
    font-weight: 700;
    color: var(--muted);
}
.h-ind-num-enter-active,
.h-ind-num-leave-active {
    transition: opacity 0.3s ease, transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}
.h-ind-num-enter-from { opacity: 0; transform: translateY(65%); }
.h-ind-num-leave-to { opacity: 0; transform: translateY(-65%); }

.h-ind-slider { --ind-dir: 2.4%; }
.h-ind-slider.is-back { --ind-dir: -2.4%; }

.h-ind-stage {
    position: relative;
    height: clamp(420px, 56vh, 620px);
    border-radius: var(--radius-media);
    overflow: hidden;
    background: var(--eerie);
    isolation: isolate;
}
.h-ind-slide {
    position: absolute;
    inset: 0;
    margin: 0;
    opacity: 0;
    transition: opacity 1s ease;
}
.h-ind-slide.is-active {
    opacity: 1;
    z-index: 1;
}
.h-ind-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: translateX(var(--ind-dir)) scale(1.08);
    transition: transform 1.6s cubic-bezier(0.16, 1, 0.3, 1);
}
.h-ind-slide.is-active img { transform: translateX(0) scale(1); }
.h-ind-veil {
    position: absolute;
    inset: 0;
    z-index: 2;
    background:
        linear-gradient(180deg, rgba(16, 20, 28, 0) 35%, rgba(16, 20, 28, 0.72) 100%),
        linear-gradient(90deg, rgba(16, 20, 28, 0.5) 0%, rgba(16, 20, 28, 0) 58%);
    pointer-events: none;
}
.h-ind-caption {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    padding: clamp(26px, 4vw, 56px);
    padding-right: clamp(150px, 20vw, 260px);
    pointer-events: none;
}
.h-ind-copy { max-width: 46ch; }
.h-ind-copy h3 {
    margin: 0 0 12px;
    font-family: "Figtree", sans-serif;
    font-size: clamp(30px, 3.6vw, 52px);
    font-weight: 800;
    line-height: 1;
    letter-spacing: -0.02em;
    text-transform: uppercase;
    color: #FFFFFF;
}
.h-ind-copy p {
    margin: 0;
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.82);
}
.h-ind-copy-enter-active,
.h-ind-copy-leave-active {
    transition: opacity 0.4s ease, transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}
.h-ind-copy-enter-from { opacity: 0; transform: translate3d(0, 20px, 0); }
.h-ind-copy-leave-to { opacity: 0; transform: translate3d(0, -14px, 0); }

.h-ind-controls {
    position: absolute;
    right: clamp(20px, 3vw, 40px);
    bottom: clamp(20px, 3vw, 40px);
    z-index: 4;
    display: flex;
    gap: 10px;
}
.h-ind-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.55);
    background: rgba(16, 20, 28, 0.28);
    color: #FFFFFF;
    cursor: pointer;
    backdrop-filter: blur(4px);
    transition:
        background 0.3s ease,
        border-color 0.3s ease,
        color 0.3s ease,
        transform 0.3s ease;
}
.h-ind-arrow:hover {
    background: var(--amber);
    border-color: var(--amber);
    color: #FFFFFF;
    transform: translateY(-1px);
}
.h-ind-arrow:focus-visible { outline: 2px solid #FFFFFF; outline-offset: 3px; }
.h-ind-arrow:active { transform: scale(0.96); }

.h-ind-tabs {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    margin-top: 20px;
    border-top: 1px solid var(--line);
}
.h-ind-tab {
    display: flex;
    align-items: baseline;
    gap: 10px;
    padding: 16px 6px 14px;
    border: 0;
    border-bottom: 2px solid transparent;
    background: none;
    color: var(--muted);
    font-family: "Figtree", sans-serif;
    font-size: 14px;
    font-weight: 600;
    text-align: left;
    cursor: pointer;
    transition: color 0.3s ease, border-color 0.3s ease;
}
.h-ind-tab-num { font-size: 11px; letter-spacing: 0.08em; opacity: 0.75; }
.h-ind-tab:hover { color: var(--eerie); }
.h-ind-tab.is-active {
    color: var(--eerie);
    border-bottom-color: var(--amber);
}
.h-ind-tab.is-active .h-ind-tab-num { color: var(--amber); opacity: 1; }
.h-ind-tab:focus-visible { outline: 2px solid var(--az); outline-offset: 2px; }

/* ============================================================
   11 - SAFETY
============================================================ */
.h-safety {
    padding: var(--section-y) 0;
    background: var(--az);
}
.h-safety-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: var(--gutter);
    align-items: center;
}
.h-safety-copy {
    grid-column: 1 / span 5;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.h-safety-statement {
    font-size: clamp(30px, 3.4vw, 48px);
    text-transform: uppercase;
    letter-spacing: -0.02em;
}
.h-safety-text {
    max-width: 40ch;
    margin: 22px 0 28px;
    font-size: 15px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.62);
}

.h-safety-metrics {
    grid-column: 7 / span 3;
    margin: 0;
}
.h-safety-metrics > div {
    padding: 22px 0;
    border-top: 1px solid rgba(255, 255, 255, 0.16);
}
.h-safety-metrics > div:last-child { border-bottom: 1px solid rgba(255, 255, 255, 0.16); }
.h-safety-metrics dt {
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.72);
}
.h-safety-metrics dd {
    margin: 6px 0 0;
    font-family: "Figtree", sans-serif;
    font-size: clamp(30px, 3vw, 44px);
    font-weight: 800;
    line-height: 1;
    letter-spacing: -0.02em;
    color: #FFFFFF;
}
.h-safety-metrics > div:first-child dd { color: var(--amber-light); }

.h-safety-media {
    grid-column: 10 / span 3;
    border-radius: var(--radius-media);
    overflow: hidden;
    background: var(--eerie);
}
.h-safety-media img {
    width: 100%;
    height: auto;
    aspect-ratio: 4 / 5;
    object-fit: cover;
}

/* ============================================================
   12 - CTA (band foto full-bleed)
============================================================ */
.h-cta {
    position: relative;
    isolation: isolate;
    display: flex;
    align-items: center;
    overflow: hidden;
    min-height: 78vh;
    padding: 140px 0;
    background: #2B4184;
}
.h-cta-media {
    position: absolute;
    inset: 0;
    z-index: -2;
}
.h-cta-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center 42%;
    filter: grayscale(0.4) saturate(0.5) contrast(0.9) brightness(1.02) blur(0.55px);
    transform: scale(1.02);
}
.h-cta-media::after {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            180deg,
            rgba(233, 237, 241, 0.42) 0%,
            rgba(233, 237, 241, 0.16) 26%,
            rgba(20, 27, 38, 0.16) 48%,
            rgba(16, 22, 32, 0.4) 100%
        ),
        radial-gradient(
            80% 64% at 50% 48%,
            rgba(18, 25, 36, 0.68) 0%,
            rgba(18, 25, 36, 0.36) 45%,
            rgba(18, 25, 36, 0) 76%
        );
}
.h-cta-inner {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.h-cta-title {
    margin: 0;
    font-family: "Figtree", sans-serif;
    font-size: clamp(40px, 5.6vw, 80px);
    font-weight: 700;
    line-height: 0.95;
    letter-spacing: 0.01em;
    text-transform: uppercase;
    color: #FFFFFF;
    text-shadow:
        0 2px 40px rgba(12, 18, 28, 0.45),
        0 1px 2px rgba(12, 18, 28, 0.35);
}
.h-cta-outline {
    display: block;
}
.h-cta-text {
    margin: 28px 0 38px;
    max-width: 60ch;
    font-size: 16px;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.92);
    text-shadow: 0 1px 16px rgba(12, 18, 28, 0.45);
}
.h-cta-actions {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 14px;
}
.h-cta-btn--primary {
    background: var(--az);
    border-color: var(--az);
    color: #FFFFFF;
    box-shadow:
        inset 0 4px 6px rgba(0, 0, 0, 0.18),
        inset 0 2px 4px rgba(255, 255, 255, 0.22);
}
.h-cta-btn--primary > i { background: rgba(255, 255, 255, 0.16); }
.h-cta-btn--primary:hover {
    background: var(--cta-hover);
    border-color: var(--cta-hover);
    color: #FFFFFF;
    box-shadow:
        inset 0 4px 8px rgba(0, 0, 0, 0.16),
        inset 0 2px 6px rgba(255, 255, 255, 0.26);
    transform: translateY(-1px);
}
.h-cta-btn--primary:hover > i { background: rgba(255, 255, 255, 0.24); }
.h-cta-btn--dark {
    background: var(--eerie);
    border-color: var(--eerie);
    color: #FFFFFF;
    box-shadow:
        inset 0 4px 6px rgba(0, 0, 0, 0.24),
        inset 0 2px 4px rgba(255, 255, 255, 0.18);
}
.h-cta-btn--dark > i { background: rgba(255, 255, 255, 0.14); }
.h-cta-btn--dark:hover {
    background: #000000;
    border-color: #000000;
    color: #FFFFFF;
    box-shadow:
        inset 0 4px 8px rgba(0, 0, 0, 0.22),
        inset 0 2px 6px rgba(255, 255, 255, 0.22);
    transform: translateY(-1px);
}
.h-cta-btn--dark:hover > i { background: rgba(255, 255, 255, 0.22); }

/* ============================================================
   13 - NEWS
============================================================ */
.h-news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--gutter);
}
.h-news {
    display: grid;
    grid-template-columns: 128px 1fr auto;
    gap: 18px;
    align-items: center;
    padding: 18px;
    border: 1px solid var(--line);
    border-radius: var(--radius-card);
    background: #FFFFFF;
    transition: border-color 0.25s;
}
.h-news:hover { border-color: var(--az); }
.h-news-media {
    display: block;
    overflow: hidden;
    aspect-ratio: 1 / 1;
    border-radius: var(--radius-media);
    background: var(--off);
}
.h-news-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}
.h-news:hover .h-news-media img { transform: scale(1.05); }
.h-news-placeholder {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    height: 100%;
    padding: 12px;
    background: linear-gradient(150deg, rgba(43, 65, 132, 0.96) 0%, rgba(33, 50, 104, 0.96) 100%);
    color: #FFFFFF;
}
.h-news-placeholder-tag {
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.7);
}
.h-news-placeholder i {
    align-self: flex-end;
    font-size: 16px;
    color: var(--amber-light);
}
.h-news-body { min-width: 0; }
.h-news-date {
    display: block;
    margin-bottom: 8px;
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--amber);
}
.h-news-title {
    display: -webkit-box;
    padding: 3px 0;
    font-family: "Figtree", sans-serif;
    font-size: 16px;
    font-weight: 700;
    line-height: 1.3;
    color: var(--eerie);
    text-decoration: none;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.h-news-title:hover { color: var(--az); }
.h-news-arrow {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border: 1px solid var(--line);
    border-radius: 50%;
    color: var(--az);
    font-size: 13px;
    text-decoration: none;
    transition: background 0.25s, border-color 0.25s, color 0.25s;
}
.h-news-arrow:hover {
    background: var(--az);
    border-color: var(--az);
    color: #FFFFFF;
}
.h-news-empty { padding: 24px 0; }

/* ============================================================
   14 - CAREERS
============================================================ */
.h-careers {
    position: relative;
    background: #FFFFFF;
    overflow: hidden;
}

.h-careers-inner {
    position: relative;
    display: grid;
    grid-template-columns: minmax(0, 0.94fr) minmax(0, 1.06fr);
    align-items: center;
}

.h-careers-panel {
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

.h-careers-panel::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("/assets/img/construction-fabrication.webp") center right / cover no-repeat;
    opacity: 0.09;
    -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 58%);
    mask-image: linear-gradient(90deg, transparent 0%, #000 58%);
}

.h-careers-panel::after { display: none; }

.h-careers-media {
    position: relative;
    z-index: 0;
    margin: 0 18px 0 0;
}

.h-careers-bracket { display: none; }

.h-careers-card {
    position: relative;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 28px 64px rgba(16, 27, 54, 0.15);
}

.h-careers-card img {
    position: relative;
    z-index: 1;
    display: block;
    width: 100%;
    height: auto;
    aspect-ratio: 4 / 3.1;
    object-fit: cover;
    object-position: 50% 42%;
}

.h-careers-stats {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 2;
    display: flex;
    align-items: stretch;
    height: 92px;
    padding-right: 28px;
}

.h-careers-stats::before {
    content: "";
    position: absolute;
    inset: 0;
    background: #0A152C;
}

.h-careers-stat {
    position: relative;
    z-index: 1;
    flex: 1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 0 12px;
    color: #FFFFFF;
}

.h-careers-stat + .h-careers-stat::before {
    content: "";
    position: absolute;
    left: 0;
    top: 26px;
    bottom: 26px;
    width: 1px;
    background: rgba(255, 255, 255, 0.16);
}

.h-careers-stat i {
    flex: none;
    font-size: 23px;
    line-height: 1;
    color: rgba(255, 255, 255, 0.9);
}

.h-careers-stat strong {
    display: block;
    font-size: 21px;
    font-weight: 800;
    line-height: 1.05;
    letter-spacing: -0.01em;
}

.h-careers-stat span {
    display: block;
    margin-top: 4px;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    line-height: 1.3;
    color: rgba(255, 255, 255, 0.62);
}

.h-careers-wedge { display: none; }

.h-careers-body {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 64px 64px 112px 118px;
}

.h-careers-eyebrow {
    gap: 12px;
    color: rgba(255, 255, 255, 0.72);
}

.h-careers-eyebrow::before {
    width: 28px;
    height: 2px;
    border-radius: 0;
    background: var(--tint);
}

.h-careers-heading {
    margin: 0 0 16px;
    font-family: "Figtree", sans-serif;
    font-size: clamp(32px, 3.5vw, 50px);
    font-weight: 800;
    line-height: 1.05;
    letter-spacing: -0.01em;
    color: #FFFFFF;
}

.h-careers-lead {
    max-width: 46ch;
    margin: 0;
    font-size: clamp(14px, 1.15vw, 16px);
    line-height: 1.75;
    color: rgba(255, 255, 255, 0.74);
}

.h-careers-list {
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin: 34px 0 0;
    padding: 0;
    list-style: none;
}

.h-careers-list li {
    display: grid;
    grid-template-columns: 46px 1fr;
    gap: 16px;
    align-items: start;
}

.h-careers-num {
    font-family: "Figtree", sans-serif;
    font-size: 21px;
    font-weight: 800;
    line-height: 1.25;
    color: var(--tint);
}

.h-careers-itemtext {
    max-width: 46ch;
    font-size: clamp(13.5px, 1.05vw, 15px);
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.78);
}

.h-careers-itemtext strong {
    color: #FFFFFF;
    font-weight: 700;
}

.h-careers-actions {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 22px;
    margin-top: 38px;
}

@media (min-width: 992px) {
    .h-careers .h-container {
        width: 100%;
        max-width: none;
        padding-left: clamp(28px, 4vw, 72px);
        padding-right: 0;
    }
    .h-careers-inner { grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); }
    .h-careers-panel { left: calc((50% - 28px - 15%) / 0.85 + clamp(28px, 3vw, 56px)); }
    .h-careers-media {
        align-self: stretch;
        margin-top: 0;
        margin-bottom: 0;
    }
    .h-careers-card { height: 100%; }
    .h-careers-card img {
        height: 100%;
        aspect-ratio: auto;
    }
    .h-careers-stats { padding-right: clamp(88px, 8vw, 164px); }
}

/* ============================================================
   MODAL
============================================================ */
.h-presence .modal-content {
    background: transparent;
    border: 0;
}
.h-presence .modal-body {
    position: relative;
    padding: 0;
}
.h-presence .modal-body img {
    width: 100%;
    height: auto;
    max-height: 85vh;
    object-fit: contain;
    border-radius: var(--radius-media);
}
.h-presence .btn-close {
    position: absolute;
    top: -46px;
    right: 0;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background-color: #FFFFFF;
    opacity: 1;
    z-index: 2;
}

/* ============================================================
   RESPONSIVE
============================================================ */
@media (max-width: 1199px) {
    .rk-home { --section-y: 84px; }

    .h-svc-copy { grid-column: 1 / span 5; }
    .h-svc-cards { grid-column: 6 / span 7; display: grid; grid-template-columns: repeat(2, 1fr); }
    .h-svc-card { flex: none; min-height: 360px; }
    .h-svc-name { font-size: 16px; }
    .h-svc-desc { max-height: none; margin-top: 8px; opacity: 1; transform: none; }

    .h-proj-split { gap: 40px; }
    .h-proj-intro { grid-column: 1 / span 5; }
    .h-proj-carousel { grid-column: 6 / span 7; }

    .h-presence-copy { grid-column: 1 / span 4; }
    .h-presence-map { grid-column: 5 / span 5; }
    .h-presence-list { grid-column: 10 / span 3; }

    .h-safety-copy { grid-column: 1 / span 6; }
    .h-safety-metrics { grid-column: 7 / span 3; }
    .h-safety-media { grid-column: 10 / span 3; }

    .h-careers-stats { padding-right: 84px; }
    .h-careers-wedge { display: none; }
    .h-careers-stat { padding: 0 11px; gap: 9px; }
    .h-careers-stat i { font-size: 20px; }
    .h-careers-stat strong { font-size: 19px; }
    .h-careers-body { padding: 56px 44px 100px 96px; }
    .h-careers-panel::after { width: 180px; height: 90px; }
}

@media (max-width: 991px) {
    .rk-home { --section-y: 68px; --gutter: 24px; }

    .h-svc-split,
    .h-why-grid,
    .h-proj-split,
    .h-presence-grid,
    .h-safety-grid {
        grid-template-columns: 1fr;
        gap: var(--gutter);
    }

    .h-svc-copy,
    .h-svc-cards,
    .h-why-copy,
    .h-why-list,
    .h-proj-intro,
    .h-proj-carousel,
    .h-presence-copy,
    .h-presence-map,
    .h-presence-list,
    .h-safety-copy,
    .h-safety-metrics,
    .h-safety-media { grid-column: auto; }

    .h-svc-copy { padding-right: 0; margin-bottom: 12px; }
    .h-svc-cards { grid-template-columns: repeat(2, 1fr); }
    .h-svc-card { min-height: 340px; }

    .h-hero { height: 140vh; }
    .h-hero-grid { gap: 24px; padding-top: 116px; padding-bottom: 28px; }
    .h-hero-stats dd { font-size: 19px; }
    .h-hero-stats > div { padding: 0 20px; }

    .h-about-band { grid-template-columns: 1fr; }
    .h-about-photo { min-height: 380px; }
    .h-about-panel { padding: 56px var(--edge); }

    .h-why-list { margin-top: 16px; }
    .h-proj-split { gap: 40px; }

    .h-presence-map { order: -1; }
    .h-presence-list ul {
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 24px;
    }

    .h-safety-media { max-width: 560px; }
    .h-safety-media img { aspect-ratio: 16 / 9; }

    .h-news-grid { grid-template-columns: 1fr; }
    .h-news { grid-template-columns: 132px 1fr auto; }

    .h-careers-inner { grid-template-columns: 1fr; }
    .h-careers-panel { display: none; }
    .h-careers-media { margin: 16px 0 0; }
    .h-careers-body {
        margin-top: 24px;
        padding: 46px 28px 52px;
        background:
            repeating-linear-gradient(115deg, rgba(255, 255, 255, 0.022) 0 1px, transparent 1px 28px),
            #2B4184;
    }
}

@media (max-width: 767px) {
    .rk-home { --section-y: 56px; }

    .h-hero { height: auto; }
    .h-hero-sticky { position: relative; height: auto; min-height: 100svh; }
    .h-hero-image { object-position: 65% 42%; }
    .h-hero-scrim {
        background: linear-gradient(
            180deg,
            rgba(30, 30, 30, 0.62) 0%,
            rgba(30, 30, 30, 0.5) 45%,
            rgba(30, 30, 30, 0.72) 100%
        );
    }
    .h-hero-grid { padding-top: 104px; padding-bottom: 24px; }
    .h-hero-rule { width: 64px; height: 6px; margin-bottom: 24px; }
    .h-hero-title { font-size: clamp(40px, 11.5vw, 60px); }
    .h-hero-sub { font-size: 15px; margin-top: 22px; }
    .h-hero-actions { width: 100%; margin-top: 28px; }
    .h-hero-cta { width: 100%; min-height: 52px; }
    .h-hero-stats { width: 100%; justify-content: space-between; }
    .h-hero-stats dd { font-size: 17px; }
    .h-hero-stats > div { padding: 0 14px; }

    .h-section-head { flex-direction: column; align-items: flex-start; gap: 16px; padding-bottom: 20px; margin-bottom: 28px; }
    .h-section-head-link { margin-bottom: 0; }

    .h-svc-cards { grid-template-columns: 1fr; }
    .h-svc-card { min-height: 300px; }

    .h-about-photo { min-height: 300px; }

    .h-proj-head { margin-bottom: 12px; }
    .h-proj-arrow { width: 44px; height: 44px; font-size: 14px; }
    .h-proj-track { gap: 16px; }
    .h-proj-carousel .h-proj { flex-basis: 90%; }
    .h-proj-carousel .h-proj-media { aspect-ratio: 4 / 3; }

    .h-ind-stage { height: clamp(380px, 60vh, 520px); }
    .h-ind-caption { padding: 22px; padding-bottom: 84px; }
    .h-ind-copy h3 { font-size: clamp(26px, 7vw, 34px); }
    .h-ind-copy p { font-size: 14px; }
    .h-ind-controls { top: 18px; bottom: auto; right: 18px; }
    .h-ind-arrow { width: 44px; height: 44px; }
    .h-ind-tabs { grid-template-columns: repeat(2, 1fr); margin-top: 14px; }
    .h-ind-tab { padding: 13px 4px 11px; font-size: 13px; gap: 8px; }
    .h-ind-counter-now { font-size: 30px; }

    .h-cta { min-height: 0; padding: 96px 0; }
    .h-cta-title { font-size: clamp(38px, 10.5vw, 60px); }
    .h-cta-text { margin: 22px 0 30px; font-size: 15px; }
    .h-cta-actions { width: 100%; flex-direction: column; }
    .h-cta-btn { width: 100%; }

    .h-news-grid { grid-template-columns: 1fr; }

    .h-careers-stats { height: 84px; padding-right: 72px; }
    .h-careers-wedge { display: none; }
    .h-careers-stat span { font-size: 9.5px; }
    .h-careers .h-btn { width: 100%; }
}

@media (max-width: 480px) {
    .rk-home { --edge: 18px; --gutter: 18px; }
    .h-hero-stats dd { font-size: 15px; }
    .h-hero-stats dt { font-size: 7px; letter-spacing: 0.14em; }
    .h-why-list li { grid-template-columns: 44px 1fr; gap: 14px; }
    .h-presence-list ul { grid-template-columns: 1fr; }
    .h-clients { padding: 76px 0; }
    .h-clients-title { margin-bottom: 34px; }
    .h-clients-strip { padding: 24px 0; }
    .h-logo-box { margin-right: 56px; }
    .h-logo-box img { height: 28px; max-width: 140px; }
    .h-clients-link { margin-top: 26px; }
    .h-news { grid-template-columns: 96px 1fr auto; gap: 14px; padding: 14px; }
    .h-news-title { font-size: 15px; }

    .h-careers-bracket { top: -12px; left: 0; width: 56px; height: 56px; }
    .h-careers-card img { aspect-ratio: 4 / 3.8; }
    .h-careers-stats { height: auto; padding: 14px 52px 14px 0; }
    .h-careers-wedge { display: none; }
    .h-careers-stat { flex-direction: column; align-items: flex-start; gap: 7px; padding: 0 10px; }
    .h-careers-stat + .h-careers-stat::before { top: 2px; bottom: 2px; }
    .h-careers-stat i { font-size: 18px; }
    .h-careers-stat strong { font-size: 17px; }
    .h-careers-stat span { font-size: 9px; }
    .h-careers-body { margin-top: 18px; padding: 40px 20px 46px; }
}

@media (prefers-reduced-motion: reduce) {
    .rk-home .h-marquee-track { animation: none; }
    .rk-home img,
    .rk-home .h-svc-card img,
    .rk-home .h-proj-media img,
    .rk-home .h-news-media img { transition: none; }
    .rk-home .h-ind-slide { transition: none; }
    .rk-home .h-ind-copy-enter-active,
    .rk-home .h-ind-copy-leave-active,
    .rk-home .h-ind-num-enter-active,
    .rk-home .h-ind-num-leave-active { transition: none; }
}
</style>
