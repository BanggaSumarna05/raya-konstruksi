<script setup>
import { Head, Link } from "@inertiajs/vue3";

const services = [
    {
        id: "construction",
        title: "Fabrication &\nConstruction",
        img: "/assets/img/cover-const.webp",
        route: "constructionFabrication",
        desc: "Our team of skilled engineers and workers collaborate to bring your visions to life across a range of disciplines.",
        items: [
            "Steel Structure Fabrication & Installation",
            "Piping Fabrication & Installation",
            "Mechanical Erection",
            "Tank Fabrication & Installation",
            "Equipment Rental",
        ],
    },
    {
        id: "catalyst-loading",
        title: "Catalyst\nHandling",
        img: "/assets/img/cover-catalyst.webp",
        route: "catalyst-loading",
        desc: "As catalyst play a pivotal role in accelerating industrial processes, we address the critical challenges of loading and unloading these compounds within reactors.",
        items: [
            "Atmospheric & Inert Condition",
            "Sock & Dense Loading",
            "Change of Catalyst",
            "Industrial Grade Vacuum",
            "Licensed Technicians",
        ],
        reverse: true,
    },
    {
        id: "plant-maintenance",
        title: "Operation &\nMaintenance",
        img: "/assets/img/cover-plant.webp",
        route: "plantMaintenance",
        desc: "Driven by an unwavering commitment to client satisfaction, our skilled and dedicated team consistently delivers exceptional results.",
        items: [
            "Welding",
            "Tank Maintenance and Cleaning",
            "Cut and Re-weld",
            "Platform Fabrication",
            "Turbine & Compressor",
            "Pumps",
            "Exchanger Cleaning",
            "Steam Tracing",
            "Internal Parts Installation",
        ],
    },
    {
        id: "civil",
        title: "Civil &\nRoad Works",
        img: "/assets/img/cover-soil.webp",
        route: "portfolio",
        desc: "We deliver comprehensive civil construction and roadwork services to support industrial and infrastructure development projects.",
        items: [
            "Earthworks & Site Preparation",
            "Concrete & Foundation Works",
            "Drainage & Culvert Systems",
            "Road Base & Asphalt Pavement",
            "Industrial Access Roads",
            "Slope Protection & Retaining Walls",
            "Structural Repair & Rehabilitation",
            "Road Marking & Safety Works",
        ],
        reverse: true,
    },
];
</script>

<template>
    <Head title="What We Do" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/cover-const.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Our Services</span>
            <h1 class="page-hero-title">What We Do</h1>
            <p class="page-hero-sub">
                Engineering, Construction &amp; Maintenance solutions for Energy,
                Petrochemical, and Manufacturing sectors across Indonesia.
            </p>
        </div>
    </section>

    <!-- ── Service sections ── -->
    <div class="services-wrapper">
        <div
            v-for="(svc, idx) in services"
            :key="svc.id"
            :id="svc.id"
            class="service-row"
            :class="{ 'service-row--alt': svc.reverse }"
        >
            <!-- Image column -->
            <div class="service-img-col" data-aos="fade-up" data-aos-delay="100">
                <div class="service-img-wrap">
                    <div class="service-img-accent"></div>
                    <img :src="svc.img" :alt="svc.title" class="service-img" />
                </div>
            </div>

            <!-- Content column -->
            <div class="service-content-col" data-aos="fade-up">
                <span class="section-eyebrow">Our Services</span>
                <h2 class="service-heading">
                    <span v-for="(line, i) in svc.title.split('\n')" :key="i">
                        {{ line }}<br v-if="i < svc.title.split('\n').length - 1" />
                    </span>
                </h2>
                <div class="section-divider"></div>
                <p class="section-body mb-5">{{ svc.desc }}</p>

                <ul class="raya-num-list mb-6">
                    <li v-for="(item, i) in svc.items" :key="i">
                        <span class="num">{{ String(i + 1).padStart(2, '0') }}</span>
                        <span class="text">{{ item }}</span>
                    </li>
                </ul>

                <Link :href="route(svc.route)" class="btn-primary mt-4">
                    Discover More
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="16" height="16">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                    </svg>
                </Link>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* wrapper */
.services-wrapper {
    background: #fff;
    padding-bottom: 80px;
}

/* individual service row */
.service-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: center;
    padding: 96px clamp(24px, 6vw, 100px);
    border-bottom: 1px solid var(--border);
}
.service-row--alt { direction: rtl; }
.service-row--alt > * { direction: ltr; }

/* image column */
.service-img-col {}
.service-img-wrap { position: relative; }
.service-img-accent {
    position: absolute;
    left: -14px; top: -14px;
    width: 80px; height: 80px;
    background: var(--gold);
    border-radius: 10px;
    z-index: 0;
}
.service-img {
    width: 100%; height: 460px;
    object-fit: cover;
    border-radius: 24px;
    position: relative; z-index: 1;
    box-shadow: 0 20px 50px rgba(27,47,110,0.14);
}

/* content */
.service-content-col { max-width: 540px; }
.service-heading {
    font-family: var(--font-head);
    font-weight: 900;
    font-size: clamp(32px, 3.5vw, 50px);
    line-height: 1.05;
    letter-spacing: -1px;
    color: var(--navy);
    margin: 8px 0 0;
    text-transform: uppercase;
}
.mb-5 { margin-bottom: 20px !important; }
.mb-6 { margin-bottom: 24px !important; }
.mt-4 { margin-top: 16px !important; }

/* Responsive */
@media (max-width: 991px) {
    .service-row {
        grid-template-columns: 1fr;
        gap: 36px;
        padding: 60px 24px;
    }
    .service-row--alt { direction: ltr; }
    .service-img { height: 300px; }
}

@media (max-width: 575px) {
    .service-row { padding: 48px 16px; }
    .service-img { height: 240px; }
    .service-heading { font-size: clamp(28px, 8vw, 40px); }
}
</style>
