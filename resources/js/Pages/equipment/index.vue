<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Equipments" />

    <!-- ── Breadcrumb header ── -->
    <section class="page-hero" style="background-image: url('/assets/img/breadcrumbs-bg.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Our Fleet</span>
            <h1 class="page-hero-title">Equipment<br />&amp; Rental</h1>
            <p class="page-hero-sub">Heavy equipment available for rental, operated by certified personnel across Indonesia.</p>
        </div>
    </section>

    <!-- ============================================================
         WHY CHOOSE US
    ============================================================ -->
    <section class="why-us-section">
        <div class="svc-header">
            <div class="svc-header-left">
                <span class="section-eyebrow">What We Offer</span>
                <h2 class="section-title mt-1 mb-0">Why Choose Us</h2>
            </div>
        </div>

        <div class="why-us-grid">

            <!-- Card 1: Rental Service -->
            <div class="eq-photo-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/breadcrumbs-bg.webp')"></div>
                <div class="eq-card-overlay"></div>
                <div class="eq-card-content">
                    <div class="eq-card-icon"><i class="bi bi-truck"></i></div>
                    <h3 class="eq-card-title">Rental Service</h3>
                    <p class="eq-card-desc">Our marketing and customer service team wholeheartedly serves customers from unit selection, unit testing, contract creation to unit delivery to the project location.</p>
                </div>
                <div class="eq-card-border"></div>
            </div>

            <!-- Card 2: +30 Best Units -->
            <div class="eq-photo-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/asset.webp')"></div>
                <div class="eq-card-overlay"></div>
                <div class="eq-card-content">
                    <div class="eq-card-icon"><i class="bi bi-boxes"></i></div>
                    <h3 class="eq-card-title">+30 Best Units</h3>
                    <p class="eq-card-desc">If you need rentals for a specific period, we offer flexible timing to accommodate your needs. Our quality determines the prices we offer, ensuring reliability and utmost protection.</p>
                </div>
                <div class="eq-card-border"></div>
            </div>

            <!-- Card 3: Well-maintained Units -->
            <div class="eq-photo-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/eq1.webp')"></div>
                <div class="eq-card-overlay"></div>
                <div class="eq-card-content">
                    <div class="eq-card-icon"><i class="bi bi-tools"></i></div>
                    <h3 class="eq-card-title">Well-maintained Units</h3>
                    <p class="eq-card-desc">Every unit undergoes rigorous maintenance and inspection schedules. We ensure each piece of equipment meets the highest safety and performance standards before deployment.</p>
                </div>
                <div class="eq-card-border"></div>
            </div>

        </div>
    </section>

    <!-- ============================================================
         OUR EQUIPMENTS
    ============================================================ -->
    <section class="equip-list-section">
        <div class="svc-header">
            <div class="svc-header-left">
                <span class="section-eyebrow">Our Fleet</span>
                <h2 class="section-title mt-1 mb-0">Our Equipments</h2>
            </div>
        </div>

        <p class="equip-list-desc">
            Professionalism meets unparalleled execution. With a dedicated team committed to delivering outstanding
            results, we pride ourselves on our ability to complete projects with precision &amp; excellence.
        </p>

        <div class="equip-list-grid">

            <!-- Rough Terrain -->
            <div class="equip-item-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/equipment/rough terrain.webp')"></div>
                <div class="eq-card-overlay eq-card-overlay--subtle"></div>
                <div class="equip-item-label">Rough Terrain</div>
                <div class="eq-card-border"></div>
            </div>

            <!-- Terrain Crane -->
            <div class="equip-item-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/equipment/terrain crane.webp')"></div>
                <div class="eq-card-overlay eq-card-overlay--subtle"></div>
                <div class="equip-item-label">Terrain Crane</div>
                <div class="eq-card-border"></div>
            </div>

            <!-- Truck Mounted Crane -->
            <div class="equip-item-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/equipment/terrain crane.webp')"></div>
                <div class="eq-card-overlay eq-card-overlay--subtle"></div>
                <div class="equip-item-label">Truck Mounted Crane</div>
                <div class="eq-card-border"></div>
            </div>

            <!-- Scaffolding Tube -->
            <div class="equip-item-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/equipment/scaffolding tube.webp')"></div>
                <div class="eq-card-overlay eq-card-overlay--subtle"></div>
                <div class="equip-item-label">Scaffolding Tube</div>
                <div class="eq-card-border"></div>
            </div>

            <!-- Generator -->
            <div class="equip-item-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/equipment/generator.webp')"></div>
                <div class="eq-card-overlay eq-card-overlay--subtle"></div>
                <div class="equip-item-label">Generator</div>
                <div class="eq-card-border"></div>
            </div>

            <!-- Welding Inverter -->
            <div class="equip-item-card">
                <div class="eq-card-bg" style="background-image: url('/assets/img/equipment/welding inverter.webp')"></div>
                <div class="eq-card-overlay eq-card-overlay--subtle"></div>
                <div class="equip-item-label">Welding Inverter</div>
                <div class="eq-card-border"></div>
            </div>

        </div>

        <div class="equip-catalog-cta">
            <hr class="catalog-divider" />
            <p class="catalog-text">
                Looking for more options? You can access our catalog
                <a :href="route('ecatalogue')" target="_blank" rel="noopener noreferrer" class="catalog-link">Here</a>
            </p>
        </div>
    </section>
</template>

<style scoped>
/* ─────────────────────────────────────────────
   SHARED SECTION LAYOUT
───────────────────────────────────────────── */
.why-us-section,
.equip-list-section {
    padding: 72px 40px;
    background: #f8f9fc;
}

.equip-list-section {
    background: #fff;
}

/* Section header bar */
.svc-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 16px;
    margin-bottom: 40px;
    padding: 0 4px;
}

.section-eyebrow {
    display: block;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: #F59E0B;
    margin-bottom: 4px;
}

.section-title {
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 800;
    font-size: clamp(22px, 3vw, 32px);
    color: #0a1628;
    line-height: 1.2;
    margin: 0;
}

/* ─────────────────────────────────────────────
   SHARED PHOTO-BG CARD BASE
───────────────────────────────────────────── */
.eq-card-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.eq-card-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(
        to top,
        rgba(5, 10, 30, 0.95) 0%,
        rgba(5, 10, 30, 0.55) 45%,
        rgba(5, 10, 30, 0.15) 100%
    );
}

.eq-card-overlay--subtle {
    background: linear-gradient(
        to top,
        rgba(5, 10, 30, 0.88) 0%,
        rgba(5, 10, 30, 0.40) 50%,
        rgba(5, 10, 30, 0.10) 100%
    );
}

.eq-card-border {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    width: 100%;
    background: #F59E0B;
    z-index: 4;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.45s ease;
}

/* ─────────────────────────────────────────────
   WHY US — 3-COLUMN FULL-WIDTH GRID
───────────────────────────────────────────── */
.why-us-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0;
}

.eq-photo-card {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 32px 28px;
    overflow: hidden;
    min-height: 360px;
    cursor: default;
}

.eq-photo-card:hover .eq-card-bg {
    transform: scale(1.08);
}

.eq-photo-card:hover .eq-card-border {
    transform: scaleX(1);
}

.eq-card-content {
    position: relative;
    z-index: 3;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.eq-card-icon {
    font-size: 28px;
    color: #F59E0B;
    line-height: 1;
}

.eq-card-title {
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 800;
    font-size: 20px;
    color: #fff;
    margin: 0;
    line-height: 1.25;
}

.eq-card-desc {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.65;
    margin: 0;
}

/* ─────────────────────────────────────────────
   EQUIPMENT LIST — RESPONSIVE GRID
───────────────────────────────────────────── */
.equip-list-desc {
    font-size: 15px;
    color: #555;
    line-height: 1.7;
    max-width: 720px;
    margin: -20px 0 36px 4px;
}

.equip-list-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.equip-item-card {
    position: relative;
    overflow: hidden;
    min-height: 280px;
    cursor: default;
    border-radius: 4px;
}

.equip-item-card:hover .eq-card-bg {
    transform: scale(1.08);
}

.equip-item-card:hover .eq-card-border {
    transform: scaleX(1);
}

.equip-item-label {
    position: absolute;
    bottom: 18px;
    left: 20px;
    right: 20px;
    z-index: 3;
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 800;
    font-size: 16px;
    color: #fff;
    line-height: 1.3;
}

/* ─────────────────────────────────────────────
   CATALOG CTA
───────────────────────────────────────────── */
.equip-catalog-cta {
    margin-top: 40px;
    padding: 0 4px;
}

.catalog-divider {
    border-color: #F59E0B;
    opacity: 0.5;
    margin-bottom: 18px;
}

.catalog-text {
    font-size: 15px;
    color: #444;
    margin: 0;
}

.catalog-link {
    color: #F59E0B;
    font-weight: 700;
    text-decoration: none;
    border-bottom: 1px solid transparent;
    transition: border-color 0.2s;
}

.catalog-link:hover {
    border-bottom-color: #F59E0B;
}

/* ─────────────────────────────────────────────
   RESPONSIVE
───────────────────────────────────────────── */
@media (max-width: 991px) {
    .why-us-section,
    .equip-list-section {
        padding: 56px 20px;
    }

    .why-us-grid {
        grid-template-columns: 1fr;
    }

    .eq-photo-card {
        min-height: 300px;
    }

    .equip-list-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 575px) {
    .why-us-section,
    .equip-list-section {
        padding: 40px 16px;
    }

    .equip-list-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .equip-item-card {
        min-height: 200px;
    }

    .section-title {
        font-size: 20px;
    }
}
</style>
