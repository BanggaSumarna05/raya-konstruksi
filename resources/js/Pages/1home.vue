<script setup>
import { Head, Link } from "@inertiajs/vue3";
defineProps({ blogs: Array });
</script>

<template>
    <Head title="Home" />

    <!-- ============================================================
         1. HERO
    ============================================================ -->
    <section id="hero" class="hero-section">

        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-grain" aria-hidden="true"></div>

        <div class="hero-body">
            <h1 class="hero-headline">
                BUILDING TOMORROW,<br />
                TODAY.
            </h1>

            <div class="hero-rule"></div>
            <p class="hero-sub">Excellence meet innovation to deliver unparalleled solutions for all your needs.
                
            </p>

            <div class="hero-ctas">
                <Link :href="route('portfolio')" class="hero-cta-primary">
                    View Portfolio
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" /></svg>
                </Link>
                <Link :href="route('contactUs')" class="hero-cta-ghost">
                    Contact Us
                </Link>
            </div>

            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="hero-stat-num">50<span class="stat-plus">+</span></span>
                    <span class="hero-stat-label">Projects</span>
                </div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat">
                    <span class="hero-stat-num">1000<span class="stat-plus">+</span></span>
                    <span class="hero-stat-label">Workforce</span>
                </div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat">
                    <span class="hero-stat-num">8<span class="stat-plus">+</span></span>
                    <span class="hero-stat-label">Years</span>
                </div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat">
                    <span class="hero-stat-num">21</span>
                    <span class="hero-stat-label">Corporate Clients</span>
                </div>
            </div>
        </div>

        <!-- Client logo marquee strip -->
        <div class="hero-logos-wrap">
            <div class="hero-logos-inner">
                <div class="hero-marquee-track">
                    <div class="hero-marquee-set" aria-hidden="false">
                        <div class="hero-logo-box"><img src="/assets/img/client/tata.webp"              alt="Tatamulia"        class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/lotte-chemical.webp"    alt="Lotte Chemical"   class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-air-products.webp" alt="Air Products"     class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-unilever.webp"     alt="Unilever"         class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/apical-retina.webp"     alt="Apical Group"     class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-jadestone.webp"    alt="Jadestone Energy" class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/bukit-asam.webp"        alt="Bukit Asam"       class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/OKI.webp"               alt="OKI Pulp & Paper" class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-msm.webp"          alt="MSM"              class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-enerco.webp"       alt="Enerco"           class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/kine-jo-logo.webp"      alt="Kine Jo"          class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-asraya.webp"       alt="Casa Asraya"      class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/swg.webp"               alt="SWG"              class="hero-logo" width="88" height="44" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/maxiterm.webp"          alt="Maxiterm"         class="hero-logo" width="88" height="44" /></div>
                    </div>
                    <div class="hero-marquee-set" aria-hidden="true">
                        <div class="hero-logo-box"><img src="/assets/img/client/tata.webp"              alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/lotte-chemical.webp"    alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-air-products.webp" alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-unilever.webp"     alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/apical-retina.webp"     alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-jadestone.webp"    alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/bukit-asam.webp"        alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/OKI.webp"               alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-msm.webp"          alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-enerco.webp"       alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/kine-jo-logo.webp"      alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/logo-asraya.webp"       alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/swg.webp"               alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                        <div class="hero-logo-box"><img src="/assets/img/client/maxiterm.webp"          alt="" class="hero-logo" width="88" height="44" loading="lazy" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         2. SERVICES
    ============================================================ -->
    <section class="svc-section">
        <div class="svc-header">
            <div class="svc-header-left">
                <span class="section-eyebrow">What We Do</span>
                <h2 class="section-title mt-1 mb-0">Our Core Services</h2>
            </div>
            <Link :href="route('whatWeDo')" class="view-all-link">
                View All Services <i class="bi bi-arrow-right ms-1"></i>
            </Link>
        </div>
        <div class="svc-grid">

            <!-- Card 1 — Construction & Fabrication -->
            <Link :href="route('constructionFabrication')" class="svc-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/lotte/cover.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-num">01</div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-building-fill-gear"></i></div>
                    <h3 class="svc-card-title">Construction &amp;<br />Fabrication</h3>
                    <p class="svc-card-desc">Civil works, steel fabrication &amp; industrial construction with strict safety standards.</p>
                    <span class="svc-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="svc-card-border"></div>
            </Link>

            <!-- Card 2 — Operation & Maintenance -->
            <Link :href="route('plantMaintenance')" class="svc-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/airproduct/cover-1.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-num">02</div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-gear-wide-connected"></i></div>
                    <h3 class="svc-card-title">Operation &amp;<br />Maintenance</h3>
                    <p class="svc-card-desc">Plant maintenance ensuring safe operations, peak efficiency &amp; minimal downtime.</p>
                    <span class="svc-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="svc-card-border"></div>
            </Link>

            <!-- Card 3 — Catalyst Handling -->
            <Link :href="route('catalyst-loading')" class="svc-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/lotte-catalyst/catalyst-3.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-num">03</div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-radioactive"></i></div>
                    <h3 class="svc-card-title">Catalyst<br />Handling</h3>
                    <p class="svc-card-desc">Professional catalyst loading, unloading &amp; reactor handling per global refinery standards.</p>
                    <span class="svc-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="svc-card-border"></div>
            </Link>

            <!-- Card 4 — Civil & Road Works -->
            <Link :href="route('whatWeDo')" class="svc-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/enerco-1/enerco-1.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-num">04</div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-cone-striped"></i></div>
                    <h3 class="svc-card-title">Civil &amp;<br />Road Works</h3>
                    <p class="svc-card-desc">Civil construction &amp; roadwork services supporting industrial and infrastructure projects.</p>
                    <span class="svc-card-cta">Explore <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="svc-card-border"></div>
            </Link>

        </div><!-- end svc-grid -->
    </section>

    <!-- ============================================================
         3. ABOUT COMPANY
    ============================================================ -->
    <section class="glance-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-5">
                    <div class="glance-image-wrap">
                        <img src="/assets/img/home.webp" alt="Raya Konstruksi Operations" class="glance-img" width="800" height="450" loading="lazy" />
                        <div class="glance-img-badge">
                            <span class="glance-badge-number">8+</span>
                            <span class="glance-badge-label">Years of Excellence</span>
                        </div>
                        <div class="glance-accent-bar"></div>
                        <div class="glance-accent-dot"></div>
                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <span class="section-eyebrow">Raya at a Glance</span>
                    <h2 class="section-title">
                        Indonesia's Trusted<br />Industrial Construction &amp;<br /><span class="text-gold">Maintenance Partner</span>
                    </h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        <strong>RAYA</strong> delivers comprehensive solutions in fabrication, plant maintenance, catalyst handling &amp; civil works for industrial projects across Indonesia backed by a zero-accident commitment and certified workforce.
                    </p>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">50<span class="stat-plus">+</span></div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1000<span class="stat-plus">+</span></div>
                            <div class="stat-label">Skilled Workforce</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">20<span class="stat-plus">+</span></div>
                            <div class="stat-label">Industrial Clients</div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <Link :href="route('whoWeAre')" class="btn-primary-navy">
                            About Raya
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         4. WHY CHOOSE US
    ============================================================ -->
    <section class="why-section">
        <div class="svc-header">
            <div class="svc-header-left">
                <span class="section-eyebrow">Why Choose Raya</span>
                <h2 class="section-title mt-1 mb-0">What Sets Us Apart</h2>
            </div>
        </div>
        <div class="why-grid">

            <div class="why-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/lotte/lotte-1.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-people-fill"></i></div>
                    <h3 class="svc-card-title">Experienced<br />Team</h3>
                    <p class="svc-card-desc">Skilled professionals with deep expertise across heavy industries.</p>
                </div>
                <div class="svc-card-border"></div>
            </div>

            <div class="why-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/lotte-catalyst/catalyst (1).webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-shield-check"></i></div>
                    <h3 class="svc-card-title">Strong Safety<br />Culture</h3>
                    <p class="svc-card-desc">Zero-accident commitment on every project we execute.</p>
                </div>
                <div class="svc-card-border"></div>
            </div>

            <div class="why-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/airproduct/cover-1.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-award"></i></div>
                    <h3 class="svc-card-title">Certified &amp;<br />Compliant</h3>
                    <p class="svc-card-desc">Adherent to international standards and industry best practices.</p>
                </div>
                <div class="svc-card-border"></div>
            </div>

            <div class="why-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/enerco-1/enerco-3.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-clock-history"></i></div>
                    <h3 class="svc-card-title">On-Time<br />Delivery</h3>
                    <p class="svc-card-desc">Committed to delivering quality work within agreed timelines.</p>
                </div>
                <div class="svc-card-border"></div>
            </div>

            <div class="why-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/rdmp/rdmp-2.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-geo-alt-fill"></i></div>
                    <h3 class="svc-card-title">Nationwide<br />Coverage</h3>
                    <p class="svc-card-desc">Active projects across 5 major islands in Indonesia.</p>
                </div>
                <div class="svc-card-border"></div>
            </div>

        </div>
    </section>

    <!-- ============================================================
         5. FEATURED PROJECTS
    ============================================================ -->
    <section class="projects-section">
        <div class="svc-header">
            <div class="svc-header-left">
                <span class="section-eyebrow">Featured Projects</span>
                <h2 class="section-title mt-1 mb-0">Recent Work</h2>
            </div>
            <Link :href="route('portfolio')" class="view-all-link">View All </Link>
        </div>
        <div class="proj-grid">

            <Link :href="route('portfolio')" class="svc-card proj-card-tall">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/unilever-1/cover.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <span class="proj-badge">Fabrication &amp; Construction</span>
                    <h3 class="svc-card-title">UOI TURNAROUND & <br />MAINTENANCE PROJECT</h3>
                    <p class="svc-card-desc">PT Unilever Oleochemical Indonesia · Sei Mangkei, Sumut · Nov 2024 – Aug 2025</p>
                    <span class="svc-card-cta">View Details <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="svc-card-border"></div>
            </Link>

            <Link :href="route('portfolio')" class="svc-card proj-card-short">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/airproduct/cover-1.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <span class="proj-badge proj-badge--gold">O &amp; M</span>
                    <h3 class="svc-card-title">Air Products SMIP<br />Mechanical &amp; Piping</h3>
                    <p class="svc-card-desc">PT OKI Pulp & Paper · Palembang, Sumsel · Apr - Jul 2026</p>
                    <span class="svc-card-cta">View Details <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="svc-card-border"></div>
            </Link>

            <Link :href="route('portfolio')" class="svc-card proj-card-short">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/rdmp/cover.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <span class="proj-badge">Refinery Maintenance &amp; Civil Repair Project </span>
                    <h3 class="svc-card-title">RDMP Balikpapan JO</h3>
                    <p class="svc-card-desc">PT Apical · Balikpapan, Kaltim · Okt - Des 2025</p>
                    <span class="svc-card-cta">View Details <i class="bi bi-arrow-right"></i></span>
                </div>
                <div class="svc-card-border"></div>
            </Link>

        </div>
    </section>

    <!-- ============================================================
         6. ACTIVE SITES (MAP)
    ============================================================ -->
    <section class="map-section">
        <div class="map-bg-shape map-bg-shape--top"></div>
        <div class="map-bg-shape map-bg-shape--bottom"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <div class="row justify-content-center mb-5 text-center">
                <div class="col-lg-7">
                    <span class="section-eyebrow">Ongoing Projects</span>
                    <h2 class="section-title mt-2">
                        Active Sites <span class="text-gold">Across Indonesia</span>
                    </h2>
                    <div class="section-divider mx-auto"></div>
                    <p class="section-body text-center" style="max-width: 560px; margin: 0 auto;">
                        Major construction, fabrication, and maintenance projects currently executing in key industrial regions.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="map-card" data-bs-toggle="modal" data-bs-target="#mapModal">
                        <img src="/assets/img/maps.webp" alt="Indonesia Active Project Map" class="map-img" width="696" height="492" loading="lazy" />
                        <div class="map-hover-overlay">
                            <div class="map-zoom-btn"><i class="bi bi-zoom-in me-2"></i> Click to Enlarge</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Modal -->
        <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content" style="background: transparent; border: none;">
                    <div class="modal-header" style="border: none; padding-bottom: 0;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #fff; opacity: 1; border-radius: 50%; padding: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.2); margin-left: auto;"></button>
                    </div>
                    <div class="modal-body text-center p-0">
                        <img src="/assets/img/maps.webp" alt="Indonesia Map Detail" width="696" height="492" style="width: 100%; max-height: 85vh; object-fit: contain; border-radius: 12px; box-shadow: 0 20px 50px rgba(0,0,0,0.5);" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         7. INDUSTRIES
    ============================================================ -->
    <section class="industries-section">
        <div class="svc-header">
            <div class="svc-header-left">
                <span class="section-eyebrow">Industries We Serve</span>
                <h2 class="section-title mt-1 mb-0">Expertise Across Key Sectors</h2>
            </div>
        </div>
        <div class="industry-grid">

            <div class="ind-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/petro.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-heptagon-half"></i></div>
                    <h3 class="svc-card-title">Petrochemical</h3>
                </div>
                <div class="svc-card-border"></div>
            </div>

            <div class="ind-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/oil.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-droplet-fill"></i></div>
                    <h3 class="svc-card-title">Oil &amp; Gas</h3>
                </div>
                <div class="svc-card-border"></div>
            </div>

            <div class="ind-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/energy.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-lightning-charge-fill"></i></div>
                    <h3 class="svc-card-title">Energy</h3>
                </div>
                <div class="svc-card-border"></div>
            </div>

            <div class="ind-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/projects/rdmp/rdmp-1.webp')"></div>
                <div class="svc-card-overlay"></div>
                <div class="svc-card-content">
                    <div class="svc-card-icon"><i class="bi bi-cone-striped"></i></div>
                    <h3 class="svc-card-title">Infrastructure</h3>
                </div>
                <div class="svc-card-border"></div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         8. EQUIPMENT
    ============================================================ -->
    <section class="equipment-section">
        <div class="svc-header">
            <div class="svc-header-left">
                <span class="section-eyebrow">Our Assets</span>
                <h2 class="section-title mt-1 mb-0">Equipment &amp; Resources</h2>
            </div>
            <Link :href="route('equipment')" class="view-all-link">View All Equipment </Link>
        </div>
        <div class="equip-grid">

            <div class="equip-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/equipment/excavator.webp')"></div>
                <div class="svc-card-overlay svc-card-overlay--subtle"></div>
                <div class="equip-card-label">Excavators</div>
                <div class="svc-card-border"></div>
            </div>

            <div class="equip-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/equipment/terrain crane.webp')"></div>
                <div class="svc-card-overlay svc-card-overlay--subtle"></div>
                <div class="equip-card-label">Terrain Cranes</div>
                <div class="svc-card-border"></div>
            </div>

            <div class="equip-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/equipment/skylift.webp')"></div>
                <div class="svc-card-overlay svc-card-overlay--subtle"></div>
                <div class="equip-card-label">Skylifts</div>
                <div class="svc-card-border"></div>
            </div>

            <div class="equip-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/equipment/scaffolding tube.webp')"></div>
                <div class="svc-card-overlay svc-card-overlay--subtle"></div>
                <div class="equip-card-label">Scaffolding</div>
                <div class="svc-card-border"></div>
            </div>

            <div class="equip-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/equipment/catalyst hooper.webp')"></div>
                <div class="svc-card-overlay svc-card-overlay--subtle"></div>
                <div class="equip-card-label">Catalyst Hoppers</div>
                <div class="svc-card-border"></div>
            </div>

            <div class="equip-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/equipment/welding inverter.webp')"></div>
                <div class="svc-card-overlay svc-card-overlay--subtle"></div>
                <div class="equip-card-label">Welding Inverters</div>
                <div class="svc-card-border"></div>
            </div>

            <div class="equip-photo-card">
                <div class="svc-card-bg" style="background-image: url('/assets/img/equipment/generator.webp')"></div>
                <div class="svc-card-overlay svc-card-overlay--subtle"></div>
                <div class="equip-card-label">Generators</div>
                <div class="svc-card-border"></div>
            </div>

        </div>
    </section>

    <!-- ============================================================
         9. CLIENTS
    ============================================================ -->
    <section class="clients-section">
        <div class="container">
            <div class="clients-header">
                <div class="clients-header-left">
                    <span class="section-eyebrow">Our Clients</span>
                    <h2 class="section-title mt-1 mb-0">Trusted By Industry Leaders</h2>
                </div>
                <Link :href="route('clientPartner')" class="btn-primary-navy">
                    More Clients
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="16" height="16">
                        <path fill-rule="evenodd" d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z" clip-rule="evenodd" />
                    </svg>
                </Link>
            </div>
            <div class="clients-marquee-wrap">
                <div class="clients-fade clients-fade--left"></div>
                <div class="clients-fade clients-fade--right"></div>
                <div class="clients-marquee-track">
                    <div class="clients-marquee-set">
                        <div class="client-logo-card"><img src="/assets/img/client/lotte-chemical.webp"    alt="Lotte Chemical"        class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-pertamina.svg"    alt="Pertamina"             class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-air-products.webp" alt="Air Products"          class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-unilever.webp"     alt="Unilever Oleochemical" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/apical-retina.webp"     alt="Apical Group"          class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-jadestone.webp"    alt="Jadestone Energy"      class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/bukit-asam.webp"        alt="Bukit Asam"            class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/OKI.webp"               alt="OKI Pulp &amp; Paper"  class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-msm.webp"          alt="Muria Sumba Manis"     class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-enerco.webp"       alt="Enerco"                class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-asraya.webp"       alt="Casa Asraya"           class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                    </div>
                    <div class="clients-marquee-set" aria-hidden="true">
                        <div class="client-logo-card"><img src="/assets/img/client/lotte-chemical.webp"    alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-pertamina.svg"    alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-air-products.webp" alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-unilever.webp"     alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/apical-retina.webp"     alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-jadestone.webp"    alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/bukit-asam.webp"        alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/OKI.webp"               alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-msm.webp"          alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-enerco.webp"       alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                        <div class="client-logo-card"><img src="/assets/img/client/logo-asraya.webp"       alt="" class="client-logo-img" loading="lazy" width="130" height="44" /></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         10. CERTIFICATIONS & HSE
    ============================================================ -->
    <section class="hse-section">
        <div class="hse-overlay"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <span class="section-eyebrow">Safety First</span>
                    <h2 class="section-title text-white mt-2 mb-4">
                        Uncompromising<br />Commitment to<br /><span class="text-gold">Health &amp; Safety</span>
                    </h2>
                    <ul class="hse-list">
                        <li><i class="bi bi-shield-check"></i> Zero Accident Commitment on Every Project</li>
                        <li><i class="bi bi-person-check-fill"></i> 100% Certified &amp; Trained Workforce</li>
                        <li><i class="bi bi-clipboard-check-fill"></i> Strict Safety &amp; Compliance Standards</li>
                        <li><i class="bi bi-globe"></i> International HSE Best Practices</li>
                    </ul>
                    <Link :href="route('safety')" class="btn-hero-outline mt-4 d-inline-block">Learn About HSE </Link>
                </div>
                <div class="col-lg-6 text-lg-center">
                    <div class="hse-stats-card">
                        <div class="hse-stat-big">
                            <div class="hse-stat-number">0</div>
                            <div class="hse-stat-label">LTI Incidents</div>
                        </div>
                        <div class="hse-stat-divider"></div>
                        <div class="hse-stats-row">
                            <div class="hse-stat-sm">
                                <div class="hse-stat-sm-num">100%</div>
                                <div class="hse-stat-sm-label">PPE Compliance</div>
                            </div>
                            <div class="hse-stat-sm">
                                <div class="hse-stat-sm-num">ISO</div>
                                <div class="hse-stat-sm-label">9001 Certified</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         11. TESTIMONIALS
    ============================================================ -->
    <section class="testimonials-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-eyebrow">Client Testimonials</span>
                <h2 class="section-title mt-2">What Our Clients Say</h2>
                <div class="section-divider mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <i class="bi bi-quote testimonial-quote-icon"></i>
                        <p class="testimonial-text">"Raya delivered an exceptional level of workmanship on our civil and structural scope. Their team was professional, safety-conscious, and met every milestone on schedule."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar testimonial-avatar--gold">R</div>
                            <div>
                                <h6 class="testimonial-name">Project Director</h6>
                                <p class="testimonial-company">Petrochemical Plant, Banten</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card testimonial-card--featured">
                        <i class="bi bi-quote testimonial-quote-icon" style="color: rgba(245,158,11,0.25);"></i>
                        <p class="testimonial-text" style="color: rgba(255,255,255,0.9);">"We have partnered with Raya for multiple turnaround and maintenance projects. Their capability in handling critical path activities has made them our go-to contractor."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar" style="background: #F59E0B;">S</div>
                            <div>
                                <h6 class="testimonial-name" style="color: #fff;">Plant Manager</h6>
                                <p class="testimonial-company" style="color: rgba(255,255,255,0.6);">Energy Sector Client</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-card">
                        <i class="bi bi-quote testimonial-quote-icon"></i>
                        <p class="testimonial-text">"The civil works executed by Raya were top-notch. They handled the complex foundations perfectly despite the challenging site conditions a very reliable engineering partner."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar testimonial-avatar--navy">B</div>
                            <div>
                                <h6 class="testimonial-name">Lead Civil Engineer</h6>
                                <p class="testimonial-company">Infrastructure Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         12. CTA
    ============================================================ -->
    <section class="cta-section">
        <div class="cta-bg"></div>
        <div class="cta-overlay"></div>
        <div class="container" style="position: relative; z-index: 2; text-align: center;">
            <span class="section-eyebrow">Let's Work Together</span>
            <h2 class="cta-title">Ready to Discuss Your<br />Next Industrial Project?</h2>
            <p class="cta-desc">From fabrication and construction to maintenance and catalyst handling, our highly skilled team is ready to support your project across Indonesia.</p>
            <div class="cta-btn-row">
                <Link :href="route('contactUs')" class="btn-cta-primary">Contact Us</Link>
            </div>
        </div>
    </section>

    <!-- ============================================================
         13. NEWS
    ============================================================ -->
    <section class="news-section">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <span class="section-eyebrow">Project Updates</span>
                    <h2 class="section-title mt-1 mb-0">Latest News &amp; Updates</h2>
                </div>
                <Link :href="route('news')" class="view-all-link d-none d-md-block">View All Updates </Link>
            </div>
            <div v-if="blogs && blogs.length > 0" class="row g-4">
                <div v-for="blog in blogs.slice(0, 3)" :key="blog.id" class="col-md-4">
                    <div class="news-card">
                        <div class="news-card-img-wrap">
                            <img v-if="blog.image" :src="'/storage/' + blog.image" :alt="blog.title" class="news-card-img" loading="lazy" width="400" height="190" />
                            <div v-else class="news-card-img-placeholder"><i class="bi bi-newspaper"></i></div>
                        </div>
                        <div class="news-card-body">
                            <p class="news-card-date">
                                <i class="bi bi-calendar3 me-1"></i>
                                {{ blog.published_at ? new Date(blog.published_at).toLocaleDateString('en-GB', {day:'numeric', month:'short', year:'numeric'}) : '' }}
                            </p>
                            <h5 class="news-card-title">{{ blog.title }}</h5>
                            <Link :href="route('newsDetail', blog.slug)" class="news-card-link">Read More </Link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 d-md-none">
                <Link :href="route('news')" class="btn-primary-navy">View All Updates</Link>
            </div>
        </div>
    </section>

</template>

<style scoped>
/* ============================================================
   TOKENS
============================================================ */
:root {
    --navy: #1B2F6E;
    --navy-dark: #142257;
    --gold: #F59E0B;
    --gold-dark: #D97706;
    --text-primary: #1a1a1a;
    --text-secondary: #555555;
    --text-muted: #888888;
    --bg-light: #f8f9fb;
    --border: #e5e7eb;
}

/* ============================================================
   BUTTONS
============================================================ */
.btn-primary-navy {
    display: inline-flex; align-items: center; gap: 8px;
    background: #1B2F6E; color: #fff;
    font-family: "Pliant", sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 0.3px;
    padding: 13px 28px; border-radius: 50px; text-decoration: none;
    border: 2px solid #1B2F6E; box-shadow: 0 4px 18px rgba(27,47,110,0.22);
    transition: background 0.22s, color 0.22s, transform 0.2s, box-shadow 0.22s; white-space: nowrap;
}
.btn-primary-navy:hover { background: #142257; border-color: #142257; color: #fff; transform: translateY(-2px); box-shadow: 0 8px 28px rgba(27,47,110,0.32); }

.btn-hero-outline {
    display: inline-flex; align-items: center; gap: 8px;
    background: transparent; color: rgba(255,255,255,0.85);
    font-family: "Pliant", sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 0.3px;
    padding: 13px 28px; border-radius: 50px; text-decoration: none;
    border: 1.5px solid rgba(255,255,255,0.35); backdrop-filter: blur(8px);
    transition: border-color 0.22s, background 0.22s, color 0.22s, transform 0.2s; white-space: nowrap;
}
.btn-hero-outline:hover { border-color: rgba(255,255,255,0.8); background: rgba(255,255,255,0.1); color: #fff; transform: translateY(-2px); }

.view-all-link {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: "Pliant", sans-serif; font-size: 13px; font-weight: 700; color: #1B2F6E;
    text-decoration: none; letter-spacing: 0.3px; border-bottom: 2px solid #F59E0B;
    padding-bottom: 2px; transition: color 0.2s; white-space: nowrap;
}
.view-all-link:hover { color: #F59E0B; }

.project-card-link, .news-card-link {
    display: inline-flex; align-items: center; gap: 4px;
    font-family: "Pliant", sans-serif; font-size: 12px; font-weight: 700; color: #1B2F6E;
    text-decoration: none; letter-spacing: 0.3px; border-bottom: 2px solid #F59E0B;
    padding-bottom: 1px; transition: color 0.2s; margin-top: 14px;
}
.project-card-link:hover, .news-card-link:hover { color: #F59E0B; }

.btn-cta-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: #F59E0B; color: #1B2F6E;
    font-family: "Pliant", sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 0.3px;
    padding: 14px 32px; border-radius: 50px; text-decoration: none;
    border: 2px solid #F59E0B; box-shadow: 0 8px 24px rgba(245,158,11,0.35);
    transition: background 0.22s, transform 0.2s, box-shadow 0.22s;
}
.btn-cta-primary:hover { background: #D97706; border-color: #D97706; transform: translateY(-2px); color: #1B2F6E; box-shadow: 0 12px 32px rgba(245,158,11,0.45); }

.btn-cta-outline {
    display: inline-flex; align-items: center; gap: 8px;
    background: transparent; border: 2px solid rgba(255,255,255,0.55); color: #fff;
    font-family: "Pliant", sans-serif; font-size: 13px; font-weight: 700; letter-spacing: 0.3px;
    padding: 14px 32px; border-radius: 50px; text-decoration: none;
    transition: background 0.22s, color 0.22s, border-color 0.22s, transform 0.2s;
}
.btn-cta-outline:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.85); color: #fff; transform: translateY(-2px); }

/* ============================================================
   SECTION HELPERS
============================================================ */
.section-eyebrow {
    display: inline-block; font-family: "Pliant", sans-serif; font-size: 11px;
    font-weight: 800; letter-spacing: 3px; text-transform: uppercase;
    color: #B45309; margin-bottom: 8px;
}
.section-title {
    font-family: "Bricolage Grotesque", sans-serif; font-weight: 800;
    font-size: clamp(22px, 2.8vw, 34px); color: #1B2F6E; line-height: 1.2; margin-bottom: 16px;
}
.section-divider {
    width: 48px; height: 4px; background: #F59E0B; border-radius: 2px; margin-bottom: 20px;
}
.section-body { font-size: 16px; color: #555; line-height: 1.75; }
.text-gold { color: #B45309; }

/* ============================================================
   1. HERO
============================================================ */
.hero-section {
    position: relative; width: 100%; min-height: 100vh;
    display: flex; flex-direction: column; justify-content: center;
    overflow: hidden; background-color: #0B0B0B;
    /* NOTE: 'contain: layout paint' was removed — it caused position:fixed
       elements (navbar) to be clipped relative to this section instead of
       the viewport, making the header disappear on scroll in mobile browsers */
    will-change: auto;
}
.hero-bg {
    position: absolute; inset: 0;
    background-image: url('/assets/img/hero-carousel/hover-1-new.webp');
    background-size: cover; background-position: center 30%;
    z-index: 0; transform: scale(1.04); transition: transform 8s ease-out;
}
.hero-section:hover .hero-bg { transform: scale(1.0); }
.hero-overlay {
    position: absolute; inset: 0; z-index: 1; pointer-events: none;
    background:
        linear-gradient(105deg, rgba(11,11,11,0.88) 0%, rgba(11,11,11,0.72) 45%, rgba(11,11,11,0.30) 75%, transparent 100%),
        linear-gradient(to top, rgba(11,11,11,0.90) 0%, rgba(11,11,11,0.40) 22%, transparent 45%),
        linear-gradient(to bottom, rgba(11,11,11,0.55) 0%, transparent 18%);
}
.hero-grain {
    position: absolute; inset: 0; z-index: 2; pointer-events: none; opacity: 0.035;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
    background-repeat: repeat; background-size: 180px;
    /* transform: translateZ(0) kept for compositing but will-change removed
       to avoid creating a new stacking context that clips fixed descendants */
    transform: translateZ(0);
}
.hero-body {
    position: relative; z-index: 10;
    display: flex; flex-direction: column; align-items: flex-start;
    padding: clamp(100px, 13vh, 140px) clamp(24px, 5vw, 88px) 0;
    max-width: 900px; flex: 1;
}
.hero-headline {
    font-family: "Bricolage Grotesque", sans-serif; font-weight: 900;
    font-size: clamp(42px, 7vw, 88px); line-height: 0.93;
    letter-spacing: -2px; color: #FFFFFF; margin: 0 0 24px 0;
    animation: hero-fade-up 0.9s cubic-bezier(0.22,1,0.36,1) both;
}
@keyframes hero-fade-up {
    from { opacity: 0; transform: translateY(28px); }
    to   { opacity: 1; transform: translateY(0); }
}
.hero-rule {
    width: 280px; height: 1px;
    background: linear-gradient(to right, rgba(27,47,110,0.8), rgba(255,255,255,0.20), transparent);
    margin-bottom: 20px; flex-shrink: 0;
    animation: hero-fade-up 1.0s 0.15s cubic-bezier(0.22,1,0.36,1) both;
}
.hero-sub {
    font-family: "Pliant", sans-serif; color: rgba(255,255,255,0.70);
    font-size: clamp(15px, 1.4vw, 17px); font-weight: 400; line-height: 1.65;
    margin: 0 0 36px 0; max-width: 520px;
    animation: hero-fade-up 1.0s 0.25s cubic-bezier(0.22,1,0.36,1) both;
}
.hero-ctas {
    display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 48px;
    animation: hero-fade-up 1.0s 0.35s cubic-bezier(0.22,1,0.36,1) both;
}
.hero-cta-primary {
    display: inline-flex; align-items: center; gap: 8px;
    background: #1B2F6E; color: #ffffff;
    font-family: "Pliant", sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.3px;
    padding: 13px 28px; border-radius: 50px; text-decoration: none;
    border: 2px solid #1B2F6E; box-shadow: 0 4px 18px rgba(27,47,110,0.30);
    transition: background 0.22s, box-shadow 0.22s, transform 0.2s; white-space: nowrap;
}
.hero-cta-primary:hover { background: #142257; border-color: #142257; box-shadow: 0 8px 28px rgba(27,47,110,0.45); transform: translateY(-2px); color: #fff; }
.hero-cta-ghost {
    display: inline-flex; align-items: center; gap: 8px;
    background: transparent; color: rgba(255,255,255,0.85);
    font-family: "Pliant", sans-serif; font-weight: 700; font-size: 13px; letter-spacing: 0.3px;
    padding: 13px 28px; border-radius: 50px; text-decoration: none;
    border: 1.5px solid rgba(255,255,255,0.35); backdrop-filter: blur(8px);
    transition: border-color 0.22s, background 0.22s, color 0.22s, transform 0.2s; white-space: nowrap;
}
.hero-cta-ghost:hover { border-color: rgba(255,255,255,0.75); background: rgba(255,255,255,0.08); color: #fff; transform: translateY(-2px); }
.hero-stats {
    display: flex; align-items: center; gap: 0;
    animation: hero-fade-up 1.0s 0.45s cubic-bezier(0.22,1,0.36,1) both;
}
.hero-stat { display: flex; flex-direction: column; padding: 0 28px 0 0; }
.hero-stat:first-child { padding-left: 0; }
.hero-stat-num { font-family: "Bricolage Grotesque", sans-serif; font-size: clamp(22px, 2.5vw, 30px); font-weight: 900; color: #fff; line-height: 1; letter-spacing: -0.5px; }
.stat-plus { font-size: 0.65em; color: #93a8e8; font-weight: 900; }
.hero-stat-label { font-size: 11px; font-weight: 700; color: rgba(255,255,255,0.45); text-transform: uppercase; letter-spacing: 1.5px; margin-top: 4px; }
.hero-stat-divider { width: 1px; height: 36px; background: rgba(255,255,255,0.15); margin: 0 28px 0 0; flex-shrink: 0; }
.hero-logos-wrap { position: relative; z-index: 10; margin-top: 32px; padding-bottom: 0; }
.hero-logos-inner {
    border-top: 1px solid rgba(255,255,255,0.10); padding-top: 16px;
    display: flex; align-items: center; gap: 0; overflow: hidden;
}
.hero-marquee-track {
    display: flex; flex-shrink: 0; min-width: 0;
    animation: marquee-scroll 32s linear infinite;
}
.hero-marquee-track:hover { animation-play-state: paused; }
.hero-marquee-set { display: flex; align-items: center; gap: 64px; padding-right: 64px; flex-shrink: 0; }
@keyframes marquee-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
.hero-logo-box { width: 110px; height: 44px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.hero-logo { width: 100%; height: 100%; object-fit: contain; filter: brightness(0) invert(1); opacity: 0.65; transition: opacity 0.25s; }
.hero-logo-box:hover .hero-logo { opacity: 1; }
@media (max-width: 768px) {
    .hero-headline { font-size: clamp(44px, 13vw, 72px); letter-spacing: -1.5px; }
    .hero-body { padding-top: clamp(80px, 10vh, 110px); }
    .hero-stat { padding-right: 18px; }
    .hero-stat-divider { margin-right: 18px; }
}
@media (max-width: 480px) {
    .hero-stats { flex-wrap: wrap; gap: 16px; }
    .hero-stat-divider { display: none; }
    .hero-stat { padding: 0; }
}

/* ============================================================
   2. SERVICE CARDS — photo bg, overlay, number accent
============================================================ */
.svc-section {
    width: 100%;
    overflow: hidden;
    background: #fff;
}

/* Header bar above the grid */
.svc-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 20px;
    padding: 64px clamp(20px, 5vw, 80px) 36px;
    flex-wrap: wrap;
}
.svc-header-left { display: flex; flex-direction: column; gap: 2px; }

@media (max-width: 575px) {
    .svc-header { padding: 48px 20px 28px; flex-direction: column; align-items: flex-start; }
}

.svc-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    min-height: 480px;
}

/* Individual card */
.svc-card {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 36px 32px;
    overflow: hidden;
    text-decoration: none;
    cursor: pointer;
    min-height: 480px;
}

/* Background photo */
.svc-card-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    will-change: transform;
}
.svc-card:hover .svc-card-bg {
    transform: scale(1.08);
}

/* Dark overlay — default */
.svc-card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(5, 10, 30, 0.95) 0%,
        rgba(5, 10, 30, 0.70) 40%,
        rgba(5, 10, 30, 0.30) 100%
    );
    transition: background 0.4s ease;
    z-index: 1;
}

/* Gold-tinted overlay for accent card */
.svc-card-overlay--gold {
    background: linear-gradient(
        to top,
        rgba(15, 10, 0, 0.97) 0%,
        rgba(80, 45, 0, 0.75) 40%,
        rgba(30, 20, 0, 0.35) 100%
    );
}

.svc-card:hover .svc-card-overlay {
    background: linear-gradient(
        to top,
        rgba(5, 10, 30, 0.98) 0%,
        rgba(5, 10, 30, 0.80) 50%,
        rgba(5, 10, 30, 0.45) 100%
    );
}
.svc-card--accent:hover .svc-card-overlay {
    background: linear-gradient(
        to top,
        rgba(15, 10, 0, 0.99) 0%,
        rgba(80, 45, 0, 0.88) 50%,
        rgba(30, 20, 0, 0.55) 100%
    );
}

/* Big number watermark */
.svc-card-num {
    position: absolute;
    top: 20px;
    right: 24px;
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 900;
    font-size: 96px;
    line-height: 1;
    color: rgba(255, 255, 255, 0.06);
    z-index: 2;
    transition: color 0.4s ease, transform 0.4s ease;
    pointer-events: none;
    user-select: none;
}
.svc-card:hover .svc-card-num {
    color: rgba(255, 255, 255, 0.10);
    transform: translateY(-6px);
}
.svc-card--accent:hover .svc-card-num {
    color: rgba(245, 158, 11, 0.18);
}

/* Card content — icon + title + desc + cta */
.svc-card-content {
    position: relative;
    z-index: 3;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

/* Icon */
.svc-card-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.10);
    border: 1px solid rgba(255, 255, 255, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: #F59E0B;
    backdrop-filter: blur(8px);
    transition: background 0.3s, border-color 0.3s, transform 0.3s;
    margin-bottom: 4px;
}
.svc-card:hover .svc-card-icon {
    background: rgba(245, 158, 11, 0.20);
    border-color: rgba(245, 158, 11, 0.50);
    transform: translateY(-3px);
}
.svc-card--accent .svc-card-icon {
    background: rgba(245, 158, 11, 0.15);
    border-color: rgba(245, 158, 11, 0.40);
}

/* Title */
.svc-card-title {
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 800;
    font-size: clamp(18px, 1.6vw, 22px);
    color: #ffffff;
    line-height: 1.2;
    margin: 0;
}

/* Desc — hidden by default, slides up on hover */
.svc-card-desc {
    font-family: "Pliant", sans-serif;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.70);
    line-height: 1.65;
    margin: 0;
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transition: max-height 0.4s ease, opacity 0.35s ease;
    will-change: max-height;
    contain: layout;
}
.svc-card:hover .svc-card-desc {
    max-height: 80px;
    opacity: 1;
}

/* CTA link */
.svc-card-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: "Pliant", sans-serif;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #F59E0B;
    margin-top: 4px;
}
/* Composited animation: translateX on children instead of gap (non-composited) */
.svc-card-cta svg, .svc-card-cta i {
    transition: transform 0.25s ease;
}
.svc-card:hover .svc-card-cta svg, .svc-card:hover .svc-card-cta i {
    transform: translateX(4px);
}

/* Gold bottom-border reveal on hover */
.svc-card-border {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    width: 100%;
    background: #F59E0B;
    z-index: 4;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.45s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.svc-card:hover .svc-card-border { transform: scaleX(1); }

/* Vertical dividers between cards */
.svc-card + .svc-card::before {
    content: '';
    position: absolute;
    top: 10%;
    left: 0;
    width: 1px;
    height: 80%;
    background: rgba(255, 255, 255, 0.08);
    z-index: 4;
    pointer-events: none;
}

/* Responsive */
@media (max-width: 991px) {
    .svc-grid { grid-template-columns: repeat(2, 1fr); }
    .svc-card { min-height: 380px; }
    .svc-card + .svc-card::before { display: none; }
}
@media (max-width: 575px) {
    .svc-grid { grid-template-columns: 1fr; }
    .svc-card { min-height: 300px; padding: 28px 24px; }
    .svc-card-num { font-size: 72px; }
    .svc-card-desc { max-height: 80px; opacity: 1; }
}

/* ============================================================
   3. ABOUT COMPANY
============================================================ */
.glance-section { padding: 100px 0 60px; background: #fff; }
.glance-image-wrap { position: relative; display: inline-block; width: 100%; }
.glance-img { width: 100%; height: 450px; object-fit: cover; border-radius: 20px; box-shadow: 0 30px 70px rgba(27,47,110,0.15); position: relative; z-index: 1; }
.glance-img-badge { position: absolute; bottom: 30px; right: -20px; background: #F59E0B; color: #1B2F6E; padding: 16px 22px; border-radius: 12px; text-align: center; box-shadow: 0 10px 30px rgba(245,158,11,0.4); z-index: 3; }
.glance-badge-number { display: block; font-family: "Bricolage Grotesque", sans-serif; font-size: 28px; font-weight: 900; line-height: 1; }
.glance-badge-label { display: block; font-size: 11px; font-weight: 800; letter-spacing: 0.5px; margin-top: 4px; white-space: nowrap; }
.glance-accent-bar { position: absolute; top: -12px; left: -12px; width: 60px; height: 60px; background: #F59E0B; border-radius: 8px; z-index: 0; }
.glance-accent-dot { position: absolute; bottom: -16px; left: 40px; width: 16px; height: 16px; background: #1B2F6E; border-radius: 50%; z-index: 2; }
.stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px 24px; margin-top: 28px; border-top: 1px solid #e5e7eb; padding-top: 28px; }
.stat-number { font-family: "Bricolage Grotesque", sans-serif; font-weight: 900; font-size: 30px; color: #1B2F6E; line-height: 1; }
.stat-plus { font-size: 0.65em; vertical-align: super; color: #F59E0B; font-weight: 900; }
.stat-label { font-size: 11px; font-weight: 700; color: #6B7280; text-transform: uppercase; letter-spacing: 1px; margin-top: 4px; }
@media (max-width: 991px) { .glance-img-badge { right: 10px; } .stats-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 767px) { .glance-section { padding: 60px 0 40px; } .stats-grid { grid-template-columns: repeat(2, 1fr); gap: 16px; } }

/* ============================================================
   4. WHY CHOOSE US — photo grid (5 cols)
============================================================ */
.why-section { width: 100%; overflow: hidden; background: #fff; }
.why-grid { display: grid; grid-template-columns: repeat(5, 1fr); }
.why-photo-card {
    position: relative; display: flex; flex-direction: column;
    justify-content: flex-end; padding: 32px 28px;
    overflow: hidden; min-height: 360px; cursor: default;
}
.why-photo-card .svc-card-bg { transition: transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94); }
.why-photo-card:hover .svc-card-bg { transform: scale(1.08); }
.why-photo-card:hover .svc-card-desc { max-height: 80px; opacity: 1; }
.why-photo-card:hover .svc-card-border { width: 100%; }
.why-photo-card + .why-photo-card::before {
    content: ''; position: absolute; top: 10%; left: 0;
    width: 1px; height: 80%; background: rgba(255,255,255,0.08); z-index: 4; pointer-events: none;
}
@media (max-width: 991px) {
    .why-grid { grid-template-columns: repeat(3, 1fr); }
    .why-photo-card { min-height: 280px; }
    .why-photo-card + .why-photo-card::before { display: none; }
}
@media (max-width: 575px) {
    .why-grid { grid-template-columns: repeat(2, 1fr); }
    .why-photo-card { min-height: 240px; padding: 20px 18px; }
    .why-photo-card .svc-card-desc { max-height: 60px; opacity: 1; }
}

/* ============================================================
   5. FEATURED PROJECTS — asymmetric grid
============================================================ */
.projects-section { width: 100%; overflow: hidden; background: #fff; }
.proj-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 300px 300px;
}
.proj-card-tall { grid-row: span 2; min-height: 600px; }
.proj-card-short { min-height: 300px; }
.proj-badge {
    display: inline-block; background: rgba(27,47,110,0.85); color: #fff;
    font-size: 10px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;
    padding: 5px 12px; border-radius: 50px; margin-bottom: 10px;
    backdrop-filter: blur(6px); width: fit-content;
}
.proj-badge--gold { background: rgba(245,158,11,0.90); color: #1B2F6E; }
@media (max-width: 767px) {
    .proj-grid { grid-template-columns: 1fr; grid-template-rows: auto; }
    .proj-card-tall { grid-row: auto; min-height: 340px; }
    .proj-card-short { min-height: 280px; }
}

/* ============================================================
   6. ACTIVE SITES (MAP)
============================================================ */
.map-section { padding: 80px 0; background: linear-gradient(135deg, #f8f9fb 0%, #eef0f5 100%); position: relative; overflow: hidden; }
.map-bg-shape { position: absolute; border-radius: 50%; background: rgba(27,47,110,0.04); z-index: 0; }
.map-bg-shape--top { width: 400px; height: 400px; top: -150px; right: -100px; }
.map-bg-shape--bottom { width: 300px; height: 300px; bottom: -100px; left: -80px; background: rgba(245,158,11,0.04); }
.map-card { position: relative; border-radius: 24px; overflow: hidden; box-shadow: 0 25px 60px rgba(27,47,110,0.12); cursor: pointer; transition: transform 0.35s ease; }
.map-card:hover { transform: scale(1.015); }
.map-img { width: 100%; object-fit: contain; display: block; }
.map-hover-overlay { position: absolute; inset: 0; background: rgba(27,47,110,0.0); display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s, background 0.3s; }
.map-card:hover .map-hover-overlay { opacity: 1; background: rgba(27,47,110,0.15); }
.map-zoom-btn { background: #1B2F6E; color: #fff; padding: 12px 28px; border-radius: 50px; font-weight: 700; font-size: 14px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
@media (max-width: 767px) { .map-section { padding: 60px 0; } }

/* ============================================================
   7. INDUSTRIES — 4-col photo grid
============================================================ */
.industries-section { width: 100%; overflow: hidden; background: #fff; }
.industry-grid { display: grid; grid-template-columns: repeat(4, 1fr); }
.ind-photo-card {
    position: relative; display: flex; flex-direction: column;
    justify-content: flex-end; padding: 24px 20px;
    overflow: hidden; min-height: 280px; cursor: default;
}
.ind-photo-card .svc-card-bg { transition: transform 0.7s cubic-bezier(0.25,0.46,0.45,0.94); }
.ind-photo-card:hover .svc-card-bg { transform: scale(1.10); }
.ind-photo-card:hover .svc-card-border { width: 100%; }
.ind-photo-card .svc-card-title { font-size: 16px; }
.ind-photo-card + .ind-photo-card::before {
    content: ''; position: absolute; top: 10%; left: 0;
    width: 1px; height: 80%; background: rgba(255,255,255,0.08); z-index: 4; pointer-events: none;
}
@media (max-width: 991px) {
    .industry-grid { grid-template-columns: repeat(2, 1fr); }
    .ind-photo-card { min-height: 220px; }
    .ind-photo-card + .ind-photo-card::before { display: none; }
}
@media (max-width: 575px) {
    .industry-grid { grid-template-columns: repeat(2, 1fr); }
    .ind-photo-card { min-height: 180px; padding: 18px 16px; }
}

/* ============================================================
   8. EQUIPMENT — 4+4 compact grid
============================================================ */
.equipment-section { width: 100%; overflow: hidden; background: #fff; }
.equip-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, 220px);
}
.equip-photo-card {
    position: relative; overflow: hidden; cursor: default;
    display: flex; align-items: flex-end;
}
.equip-photo-card .svc-card-bg { transition: transform 0.6s ease; }
.equip-photo-card:hover .svc-card-bg { transform: scale(1.10); }
.equip-photo-card:hover .svc-card-border { width: 100%; }
.svc-card-overlay--subtle {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to top, rgba(5,10,30,0.90) 0%, rgba(5,10,30,0.40) 50%, rgba(5,10,30,0.10) 100%);
}
.equip-photo-card:hover .svc-card-overlay--subtle {
    background: linear-gradient(to top, rgba(5,10,30,0.95) 0%, rgba(5,10,30,0.55) 60%, rgba(5,10,30,0.20) 100%);
}
.equip-card-label {
    position: relative; z-index: 3; width: 100%; padding: 16px 18px;
    font-family: "Bricolage Grotesque", sans-serif; font-weight: 800;
    font-size: 13px; text-transform: uppercase; letter-spacing: 0.8px; color: #fff;
}
.equip-photo-card + .equip-photo-card::before {
    content: ''; position: absolute; top: 0; left: 0;
    width: 1px; height: 100%; background: rgba(255,255,255,0.06); z-index: 4; pointer-events: none;
}
@media (max-width: 991px) { .equip-grid { grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(4, 200px); } }
@media (max-width: 575px) {
    .equip-grid { grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(4, 160px); }
    .equip-card-label { font-size: 11px; padding: 12px 14px; }
}

/* ============================================================
   9. CLIENTS
============================================================ */
.clients-section { padding: 0; background: #fff; overflow: hidden; }
.clients-header {
    display: flex; align-items: flex-end; justify-content: space-between;
    gap: 24px; padding: 64px clamp(20px,5vw,80px) 48px; flex-wrap: wrap;
}
.clients-header-left { display: flex; flex-direction: column; gap: 4px; }
.clients-header .btn-primary-navy {
    background: #1B2F6E; border-color: #1B2F6E; color: #fff;
}
.clients-header .btn-primary-navy:hover { background: #142257; border-color: #142257; }
.clients-marquee-wrap { position: relative; overflow: hidden; border-top: 1px solid #f0f0f0; }
.clients-fade { position: absolute; top: 0; bottom: 0; width: 120px; z-index: 2; pointer-events: none; }
.clients-fade--left { left: 0; background: linear-gradient(to right, #fff 0%, transparent 100%); }
.clients-fade--right { right: 0; background: linear-gradient(to left, #fff 0%, transparent 100%); }
.clients-marquee-track { display: flex; width: max-content; animation: clients-scroll 40s linear infinite; }
.clients-marquee-wrap:hover .clients-marquee-track { animation-play-state: paused; }
@keyframes clients-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
.clients-marquee-set { display: flex; align-items: center; }
.client-logo-card {
    display: flex; align-items: center; justify-content: center;
    padding: 36px 52px; border-right: 1px solid #f0f0f0;
    transition: background 0.3s; cursor: default;
}
.client-logo-card:hover { background: #f8f9fb; }
.client-logo-img {
    height: 44px; max-width: 130px; object-fit: contain;
    filter: grayscale(20%); opacity: 0.75;
    transition: opacity 0.3s, filter 0.3s; flex-shrink: 0;
}
.client-logo-card:hover .client-logo-img { opacity: 1; filter: grayscale(0%); }
@media (max-width: 768px) {
    .clients-header { padding: 48px 20px 32px; align-items: flex-start; flex-direction: column; gap: 16px; }
    .client-logo-card { padding: 24px 32px; }
    .client-logo-img { height: 36px; max-width: 100px; }
    .clients-fade { width: 60px; }
}

/* ============================================================
   10. HSE / CERTIFICATIONS
============================================================ */
.hse-section { padding: 90px 0; background-image: url('/assets/img/piping-1.webp'); background-size: cover; background-position: center; position: relative; }
.hse-overlay { position: absolute; inset: 0; background: linear-gradient(135deg, rgba(10,20,60,0.96) 0%, rgba(20,40,100,0.92) 100%); z-index: 1; }
.hse-list { list-style: none; padding: 0; margin: 0; }
.hse-list li { font-size: 15px; color: rgba(255,255,255,0.88); margin-bottom: 14px; display: flex; align-items: center; gap: 12px; line-height: 1.5; }
.hse-list li i { color: #F59E0B; font-size: 18px; flex-shrink: 0; }
.hse-stats-card { background: rgba(255,255,255,0.05); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 40px 36px; display: inline-block; text-align: center; box-shadow: 0 20px 60px rgba(0,0,0,0.3); }
.hse-stat-big { margin-bottom: 24px; }
.hse-stat-number { font-family: "Bricolage Grotesque", sans-serif; font-size: 44px; font-weight: 900; color: #F59E0B; line-height: 1; margin-bottom: 6px; }
.hse-stat-label { font-size: 13px; color: rgba(255,255,255,0.7); text-transform: uppercase; letter-spacing: 1px; font-weight: 700; }
.hse-stat-divider { height: 1px; background: rgba(255,255,255,0.12); margin-bottom: 24px; }
.hse-stats-row { display: flex; gap: 24px; justify-content: center; }
.hse-stat-sm { text-align: center; }
.hse-stat-sm-num { font-size: 22px; font-weight: 900; color: #fff; line-height: 1; }
.hse-stat-sm-label { font-size: 10px; color: rgba(255,255,255,0.55); text-transform: uppercase; letter-spacing: 1px; margin-top: 4px; }
@media (max-width: 991px) { .hse-stats-card { display: block; } .hse-stats-row { gap: 16px; } }

/* ============================================================
   11. TESTIMONIALS
============================================================ */
.testimonials-section { padding: 80px 0; background: #f8f9fb; }
.testimonial-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 16px; padding: 32px; height: 100%; position: relative; transition: box-shadow 0.3s, transform 0.3s; }
.testimonial-card:hover { box-shadow: 0 20px 50px rgba(27,47,110,0.1); transform: translateY(-4px); }
.testimonial-card--featured { background: linear-gradient(135deg, #1B2F6E 0%, #243d8c 100%); border-color: transparent; }
.testimonial-quote-icon { font-size: 48px; color: #e5e7eb; position: absolute; top: 18px; right: 22px; line-height: 1; }
.testimonial-text { font-size: 14px; color: #555; line-height: 1.8; margin-bottom: 22px; position: relative; z-index: 1; }
.testimonial-author { display: flex; align-items: center; gap: 12px; }
.testimonial-avatar { width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 16px; color: #fff; flex-shrink: 0; }
.testimonial-avatar--gold { background: #F59E0B; }
.testimonial-avatar--navy { background: #1B2F6E; }
.testimonial-name { font-weight: 800; font-size: 13px; color: #1B2F6E; margin: 0 0 2px; }
.testimonial-company { font-size: 11px; color: #767676; margin: 0; }
@media (max-width: 767px) { .testimonials-section { padding: 60px 0; } }

/* ============================================================
   12. CTA
============================================================ */
.cta-section { padding: 100px 0; position: relative; overflow: hidden; }
.cta-bg {
    position: absolute; inset: 0; z-index: 0;
    background-image: url('/assets/img/hero-carousel/hover-1-new.webp');
    background-size: cover; background-position: center; background-attachment: fixed;
}
.cta-overlay { position: absolute; inset: 0; z-index: 1; background: linear-gradient(135deg, rgba(11,17,40,0.96) 0%, rgba(27,47,110,0.94) 100%); }
.cta-title { font-family: "Bricolage Grotesque", sans-serif; font-weight: 900; font-size: clamp(28px, 4vw, 48px); color: #fff; line-height: 1.2; margin: 16px 0 20px; }
.cta-desc { font-size: 16px; color: rgba(255,255,255,0.72); max-width: 580px; margin: 0 auto 40px; line-height: 1.75; }
.cta-btn-row { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
@media (max-width: 767px) { .cta-section { padding: 70px 0; } }

/* ============================================================
   13. NEWS
============================================================ */
.news-section { padding: 80px 0; background: #fff; }
.news-card { border: 1px solid #e5e7eb; border-radius: 14px; overflow: hidden; height: 100%; display: flex; flex-direction: column; transition: box-shadow 0.3s, transform 0.3s; }
.news-card:hover { box-shadow: 0 20px 50px rgba(27,47,110,0.1); transform: translateY(-4px); }
.news-card-img-wrap { height: 190px; overflow: hidden; background: #eef0f8; }
.news-card-img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.news-card:hover .news-card-img { transform: scale(1.06); }
.news-card-img-placeholder { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; font-size: 40px; color: #c0c8e0; }
.news-card-body { padding: 20px; flex-grow: 1; display: flex; flex-direction: column; }
.news-card-date { font-size: 11px; color: #B45309; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px; }
.news-card-title { font-weight: 800; font-size: 15px; color: #1a1a1a; line-height: 1.45; margin-bottom: 0; flex-grow: 1; }
.news-card-link { display: inline-block; margin-top: 16px; font-size: 12px; font-weight: 800; color: #1B2F6E; text-decoration: none; letter-spacing: 0.5px; border-bottom: 2px solid #F59E0B; padding-bottom: 1px; transition: color 0.2s; }
.news-card-link:hover { color: #F59E0B; }
@media (max-width: 767px) { .news-section { padding: 60px 0; } }
</style>
