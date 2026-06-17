<script setup>
import { Head, Link } from "@inertiajs/vue3";

const equipment = [
    { no: 1,  name: "Excavator",          total: 10, capacity: "20 TON",        brand: "CAT, KOMATSU, KOBELCO",              year: "2008 – 2012", condition: "Good", location: "Medan, Riau, Jakarta" },
    { no: 2,  name: "Rough Terrain Crane",total: 10, capacity: "20 – 100 TON",  brand: "KATO, KOBELCO, TADANO",              year: "1994+",       condition: "Good", location: "Medan, Riau, Jakarta" },
    { no: 3,  name: "Mobile Boom Crane",  total: 10, capacity: "125 – 200 TON", brand: "P&H, HITACHI",                       year: "1995+",       condition: "Good", location: "Medan, Riau, Jakarta" },
    { no: 4,  name: "Forklift",           total: 5,  capacity: "2.5 – 10 TON",  brand: "TOYOTA, KOMATSU, NICHIYU, MITSUBISHI",year: "2000+",      condition: "Good", location: "Medan, Riau, Jakarta" },
    { no: 5,  name: "Vibro Compactor",    total: 5,  capacity: "10 – 15 TON",   brand: "SAKAI, AMMANN, BOMAG, DYNAPACK",     year: "2008+",       condition: "Good", location: "Medan, Riau, Jakarta" },
    { no: 6,  name: "Dump Truck",         total: 20, capacity: "20 TON",        brand: "HINO",                               year: "2015+",       condition: "Good", location: "Medan, Riau, Jakarta" },
    { no: 7,  name: "Truck",              total: 20, capacity: "8 TON",         brand: "HINO",                               year: "2015+",       condition: "Good", location: "Medan, Riau, Jakarta" },
];
</script>

<template>
    <Head title="Heavy Equipment" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/equipment/crawler crane.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Our Assets</span>
            <h1 class="page-hero-title">Heavy Equipment<br />&amp; Rental</h1>
            <p class="page-hero-sub">
                A well-maintained fleet of 100+ heavy equipment operated by certified personnel,
                available for rental across Indonesia.
            </p>
        </div>
    </section>

    <!-- ── Stats ── -->
    <section class="eq-stats-section">
        <div class="container">
            <div class="row justify-content-center text-center gy-4">
                <div class="col-6 col-md-3">
                    <div class="eq-stat"><div class="eq-num">100<sup>+</sup></div><div class="eq-label">Equipment Units</div></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="eq-stat"><div class="eq-num">7</div><div class="eq-label">Equipment Types</div></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="eq-stat"><div class="eq-num">3</div><div class="eq-label">Major Locations</div></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="eq-stat"><div class="eq-num">200T</div><div class="eq-label">Max Crane Capacity</div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Equipment table ── -->
    <section class="eq-section">
        <div class="container">
            <div class="mb-10" data-aos="fade-up">
                <span class="section-eyebrow">Full Inventory</span>
                <h2 class="section-title mt-2">List of Heavy Equipment</h2>
                <div class="section-divider"></div>
            </div>

            <div class="table-wrap" data-aos="fade-up" data-aos-delay="80">
                <table class="raya-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Equipment</th>
                            <th>Total</th>
                            <th>Capacity</th>
                            <th>Brand</th>
                            <th>Year</th>
                            <th>Condition</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="eq in equipment" :key="eq.no">
                            <td class="num-cell">{{ eq.no }}</td>
                            <td class="name-cell">{{ eq.name }}</td>
                            <td class="center-cell">{{ eq.total }}</td>
                            <td>{{ eq.capacity }}</td>
                            <td>{{ eq.brand }}</td>
                            <td>{{ eq.year }}</td>
                            <td><span class="condition-badge">{{ eq.condition }}</span></td>
                            <td>{{ eq.location }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ── Photo grid ── -->
    <section class="eq-gallery-section">
        <div class="eq-gallery-header">
            <div>
                <span class="section-eyebrow">Equipment Gallery</span>
                <h2 class="section-title mt-1 mb-0">Our Fleet</h2>
            </div>
            <a :href="route('ecatalogue')" target="_blank" rel="noopener" class="view-all-link">
                Full Catalog <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
        <div class="eq-photo-grid">
            <div v-for="(eq, i) in [
                {src:'/assets/img/equipment/excavator.webp',        name:'Excavators'},
                {src:'/assets/img/equipment/crawler crane.webp',    name:'Crawler Cranes'},
                {src:'/assets/img/equipment/terrain crane.webp',    name:'Terrain Cranes'},
                {src:'/assets/img/equipment/skylift.webp',          name:'Skylifts'},
                {src:'/assets/img/equipment/scaffolding tube.webp', name:'Scaffolding'},
                {src:'/assets/img/equipment/catalyst hooper.webp',  name:'Catalyst Hoppers'},
                {src:'/assets/img/equipment/welding inverter.webp', name:'Welding Inverters'},
                {src:'/assets/img/equipment/generator.webp',        name:'Generators'},
            ]" :key="i" class="eq-photo-card">
                <div class="eq-photo-bg" :style="`background-image: url('${eq.src}')`"></div>
                <div class="eq-photo-overlay"></div>
                <div class="eq-photo-label">{{ eq.name }}</div>
                <div class="eq-photo-border"></div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="svc-cta-section">
        <div class="svc-cta-overlay"></div>
        <div class="container text-center" style="position:relative;z-index:2;" data-aos="fade-up">
            <span class="section-eyebrow" style="color:rgba(27,47,110,0.7);">Equipment Rental</span>
            <h2 class="svc-cta-title">Looking for Equipment Rental?</h2>
            <p class="svc-cta-desc">
                Contact our team today to discuss your project requirements and discover how
                RAYA's fleet can support your operations.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <Link :href="route('contactUs')" class="btn-primary btn-lg">
                    Contact Us Now <i class="bi bi-arrow-right"></i>
                </Link>
                <Link :href="route('portfolio')" class="btn-outline btn-lg">View Projects</Link>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Stats bar */
.eq-stats-section { padding: 48px 0; background: var(--navy); }
.eq-stat { display: flex; flex-direction: column; align-items: center; }
.eq-num {
    font-family: var(--font-head); font-size: clamp(28px, 4vw, 44px);
    font-weight: 900; color: #fff; line-height: 1;
}
.eq-num sup { font-size: 0.55em; color: var(--gold); font-weight: 900; }
.eq-label {
    font-family: var(--font-body); font-size: 11px; font-weight: 700;
    color: rgba(255,255,255,0.50); text-transform: uppercase;
    letter-spacing: 1.5px; margin-top: 6px;
}

/* Table section */
.eq-section { padding: 80px 0; background: #fff; }
.mb-10 { margin-bottom: 40px; }
.table-wrap { overflow-x: auto; border-radius: 14px; box-shadow: var(--shadow-sm); }
.raya-table { width: 100%; border-collapse: collapse; font-family: var(--font-body); font-size: 14px; min-width: 700px; }
.raya-table thead tr { background: var(--navy); color: #fff; }
.raya-table th {
    padding: 14px 16px; text-align: left; font-weight: 700;
    font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;
}
.raya-table tbody tr { border-bottom: 1px solid var(--border); transition: background 0.2s; }
.raya-table tbody tr:nth-child(odd) { background: var(--bg-light); }
.raya-table tbody tr:hover { background: #eef0fc; }
.raya-table td { padding: 13px 16px; color: var(--text-body); vertical-align: middle; }
.num-cell { font-weight: 700; color: var(--navy); text-align: center; }
.name-cell { font-weight: 700; color: var(--text-dark); white-space: nowrap; }
.center-cell { text-align: center; font-weight: 700; color: var(--navy); }
.condition-badge {
    display: inline-block; background: #d1fae5; color: #065f46;
    padding: 3px 12px; border-radius: 50px; font-size: 11px; font-weight: 700;
}

/* Gallery */
.eq-gallery-section { width: 100%; overflow: hidden; background: #fff; }
.eq-gallery-header {
    display: flex; align-items: flex-end; justify-content: space-between;
    padding: 64px clamp(20px,5vw,80px) 36px; gap: 20px; flex-wrap: wrap;
}
.eq-photo-grid {
    display: grid; grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, 220px);
}
.eq-photo-card { position: relative; overflow: hidden; cursor: default; display: flex; align-items: flex-end; }
.eq-photo-bg {
    position: absolute; inset: 0; background-size: cover; background-position: center;
    transition: transform 0.6s ease;
}
.eq-photo-card:hover .eq-photo-bg { transform: scale(1.10); }
.eq-photo-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to top, rgba(5,10,30,0.90) 0%, rgba(5,10,30,0.40) 50%, rgba(5,10,30,0.10) 100%);
}
.eq-photo-card:hover .eq-photo-overlay { background: linear-gradient(to top, rgba(5,10,30,0.95) 0%, rgba(5,10,30,0.55) 60%, rgba(5,10,30,0.20) 100%); }
.eq-photo-label {
    position: relative; z-index: 3; width: 100%; padding: 16px 18px;
    font-family: "Bricolage Grotesque", sans-serif; font-weight: 800;
    font-size: 13px; text-transform: uppercase; letter-spacing: 0.8px; color: #fff;
}
.eq-photo-border { position: absolute; bottom: 0; left: 0; height: 3px; width: 100%; background: #F59E0B; z-index: 4; transform: scaleX(0); transform-origin: left; transition: transform 0.45s ease; }
.eq-photo-card:hover .eq-photo-border { transform: scaleX(1); }
.eq-photo-card + .eq-photo-card::before { content: ''; position: absolute; top: 0; left: 0; width: 1px; height: 100%; background: rgba(255,255,255,0.06); z-index: 4; pointer-events: none; }
.view-all-link { display: inline-flex; align-items: center; gap: 6px; font-family: "Pliant", sans-serif; font-size: 13px; font-weight: 700; color: #1B2F6E; text-decoration: none; border-bottom: 2px solid #F59E0B; padding-bottom: 2px; transition: color 0.2s; white-space: nowrap; }
.view-all-link:hover { color: #F59E0B; }
@media (max-width: 991px) { .eq-photo-grid { grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(4, 200px); } }
@media (max-width: 575px) { .eq-photo-grid { grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(4, 160px); } .eq-photo-label { font-size: 11px; padding: 12px 14px; } }

/* CTA */
.svc-cta-section { padding: 96px 0; position: relative; background: var(--gold); }
.svc-cta-overlay {
    position: absolute; inset: 0;
    background: url('/assets/img/equipment/crawler crane.webp') center/cover;
    opacity: 0.07; z-index: 0;
}
.svc-cta-title {
    font-family: var(--font-head); font-size: clamp(28px, 4vw, 44px);
    font-weight: 900; color: var(--navy); margin: 10px 0 20px;
}
.svc-cta-desc {
    font-size: 17px; color: rgba(27,47,110,0.80);
    max-width: 580px; margin: 0 auto 36px; line-height: 1.7;
}
.gap-3 { gap: 12px !important; }
</style>
