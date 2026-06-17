<script setup>
import { Head, Link } from '@inertiajs/vue3';

const commissioner = [
    { name: "Robby Satria",   role: "President Commissioner", img: "/assets/img/robby-2.webp" },
];
const directors = [
    { name: "Andhika Sutanto", role: "President Director", img: "/assets/img/andhika-1.webp" },
    { name: "Jimmy Sanjaya",   role: "Director",           img: "/assets/img/jimmy-1.webp" },
];
const management = [
    { name: "Henry Adrianto",   role: "Vice President Business Operations", img: "/assets/img/Henry Adrianto.webp" },
    { name: "Suwoto",           role: "Sr. Manager Proposal & Estimator",   img: "/assets/img/Suwoto.webp" },
    { name: "Anggi Simatupang", role: "Manager Business Development",       img: "/assets/img/anggi1.webp" },
];
</script>

<template>
    <Head title="Leadership" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/handshake-1.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Our People</span>
            <h1 class="page-hero-title">Leadership</h1>
            <p class="page-hero-sub">Meet the experienced team guiding Raya Konstruksi's vision and operations.</p>
        </div>
    </section>

    <!-- ── Board sections ── -->
    <section class="bod-section">
        <div class="container">

            <!-- Commissioner -->
            <div class="bod-group" data-aos="fade-up">
                <span class="section-eyebrow">Board of Commissioners</span>
                <h2 class="section-title mt-2">President Commissioner</h2>
                <div class="section-divider"></div>
                <div class="row g-4 mt-1">
                    <div v-for="p in commissioner" :key="p.name" class="col-md-4 col-lg-3">
                        <div class="bod-card">
                            <div class="bod-photo-bg" :style="`background-image: url('${p.img}')`"></div>
                            <div class="bod-overlay"></div>
                            <div class="bod-card-content">
                                <h5 class="bod-name">{{ p.name }}</h5>
                                <p class="bod-role">{{ p.role }}</p>
                            </div>
                            <div class="bod-card-border"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Directors -->
            <div class="bod-group" data-aos="fade-up">
                <span class="section-eyebrow">Executive Leadership</span>
                <h2 class="section-title mt-2">Board of Directors</h2>
                <div class="section-divider"></div>
                <div class="row g-4 mt-1">
                    <div v-for="p in directors" :key="p.name" class="col-md-4 col-lg-3">
                        <div class="bod-card">
                            <div class="bod-photo-bg" :style="`background-image: url('${p.img}')`"></div>
                            <div class="bod-overlay"></div>
                            <div class="bod-card-content">
                                <h5 class="bod-name">{{ p.name }}</h5>
                                <p class="bod-role">{{ p.role }}</p>
                            </div>
                            <div class="bod-card-border"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Management -->
            <div class="bod-group" data-aos="fade-up">
                <span class="section-eyebrow">Senior Management</span>
                <h2 class="section-title mt-2">Key Management</h2>
                <div class="section-divider"></div>
                <div class="row g-4 mt-1">
                    <div v-for="p in management" :key="p.name" class="col-md-4 col-lg-3">
                        <div class="bod-card">
                            <div class="bod-photo-bg" :style="`background-image: url('${p.img}')`"></div>
                            <div class="bod-overlay"></div>
                            <div class="bod-card-content">
                                <h5 class="bod-name">{{ p.name }}</h5>
                                <p class="bod-role">{{ p.role }}</p>
                            </div>
                            <div class="bod-card-border"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<style scoped>
.bod-section { padding: 80px 0; background: #fff; }
.bod-group {
    margin-bottom: 72px;
    padding-bottom: 72px;
    border-bottom: 1px solid var(--border);
}
.bod-group:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.mt-1  { margin-top: 6px !important; }
.mt-2  { margin-top: 10px !important; }

/* Person card */
.bod-card {
    position: relative; border-radius: 14px; overflow: hidden;
    min-height: 320px; display: flex; flex-direction: column;
    justify-content: flex-end; cursor: default;
    transition: box-shadow 0.3s;
}
.bod-card:hover { box-shadow: 0 20px 50px rgba(27,47,110,0.25); }
.bod-photo-bg {
    position: absolute; inset: 0; background-size: cover; background-position: top center;
    transition: transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94);
    filter: grayscale(20%);
}
.bod-card:hover .bod-photo-bg { transform: scale(1.05); filter: grayscale(0%); }
.bod-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to top, rgba(5,10,30,0.95) 0%, rgba(5,10,30,0.40) 50%, transparent 100%);
}
.bod-card-content {
    position: relative; z-index: 3; padding: 24px 22px;
    border-top: 3px solid #1B2F6E; transition: border-color 0.3s;
}
.bod-card:hover .bod-card-content { border-top-color: #F59E0B; }
.bod-name { font-family: "Bricolage Grotesque", sans-serif; font-size: 16px; font-weight: 800; color: #fff; margin: 0 0 4px; }
.bod-role { font-family: "Pliant", sans-serif; font-size: 12px; font-weight: 600; color: rgba(255,255,255,0.60); text-transform: uppercase; letter-spacing: 0.5px; margin: 0; }
.bod-card-border { position: absolute; bottom: 0; left: 0; height: 3px; width: 100%; background: #F59E0B; z-index: 4; transform: scaleX(0); transform-origin: left; transition: transform 0.45s ease; }
.bod-card:hover .bod-card-border { transform: scaleX(1); }
</style>
