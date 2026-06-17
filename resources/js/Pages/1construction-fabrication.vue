<script setup>
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Construction & Fabrication" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/cover-const.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">What We Do</span>
            <h1 class="page-hero-title">Construction &amp;<br />Fabrication</h1>
            <p class="page-hero-sub">
                Precision engineering — from steel structures and piping to tanks and mechanical erection —
                delivered to the highest industrial standards.
            </p>
        </div>
    </section>

    <!-- ── Overview ── -->
    <section class="svc-overview">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-eyebrow">Overview</span>
                    <h2 class="section-title">Integrated Construction<br />&amp; Fabrication Solutions</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        <strong>RAYA</strong> delivers integrated construction and fabrication solutions covering
                        structural, piping, and tank systems. Supported by experienced engineers, modern facilities,
                        and strict quality control, we ensure every project meets the highest industrial standards —
                        from design and fabrication to installation and maintenance.
                    </p>
                    <p class="section-body mt-3">
                        Our team is committed to precision, safety, and reliability in every phase of execution.
                        We work closely with clients to optimise performance, extend asset lifespan, and deliver
                        results that stand the test of time.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="svc-img-wrap">
                        <img src="/assets/img/construction.webp" alt="Construction & Fabrication" class="svc-img" width="600" height="420" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Core Services ── -->
    <section class="svc-cards-section">
        <div class="container">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="section-eyebrow">Scope of Services</span>
                <h2 class="section-title mt-2">What We Deliver</h2>
                <div class="section-divider mx-auto"></div>
            </div>

            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="svc-card">
                        <div class="svc-card-icon"><i class="bi bi-layers-fill"></i></div>
                        <h4 class="svc-card-title">Steel Structure<br />Fabrication &amp; Installation</h4>
                        <p class="svc-card-desc">
                            From industrial to commercial projects, precision steel structure fabrication and
                            on-site installation ensuring strength, accuracy, and durability.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="svc-card">
                        <div class="svc-card-icon"><i class="bi bi-arrows-angle-expand"></i></div>
                        <h4 class="svc-card-title">Piping Fabrication<br />&amp; Installation</h4>
                        <p class="svc-card-desc">
                            Comprehensive piping solutions for process, utility, and high-pressure systems,
                            executed under strict QA/QC standards for efficiency and safety.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="svc-card">
                        <div class="svc-card-icon"><i class="bi bi-database-fill"></i></div>
                        <h4 class="svc-card-title">Tank Fabrication<br />&amp; Installation</h4>
                        <p class="svc-card-desc">
                            Custom-built storage and process tanks, engineered for optimal performance,
                            corrosion resistance, and long-term reliability.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="svc-card">
                        <div class="svc-card-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <h4 class="svc-card-title">Mechanical Erection</h4>
                        <p class="svc-card-desc">
                            Mechanical installation of industrial equipment including pumps, compressors,
                            turbines, and reactors with alignment precision and reliable performance.
                        </p>
                        <ul class="svc-check-list mt-3">
                            <li><i class="bi bi-check-circle-fill"></i> Skilled manpower with proven track record</li>
                            <li><i class="bi bi-check-circle-fill"></i> Detailed alignment &amp; load-testing</li>
                            <li><i class="bi bi-check-circle-fill"></i> Safe and efficient installation practices</li>
                        </ul>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
                    <div class="svc-card">
                        <div class="svc-card-icon"><i class="bi bi-truck-front-fill"></i></div>
                        <h4 class="svc-card-title">Equipment Rental<br />&amp; Operation</h4>
                        <p class="svc-card-desc">
                            Heavy equipment rental and operation services: cranes, forklifts, welding machines,
                            and lifting equipment operated by certified personnel.
                        </p>
                        <ul class="svc-check-list mt-3">
                            <li><i class="bi bi-check-circle-fill"></i> Flexible rental duration</li>
                            <li><i class="bi bi-check-circle-fill"></i> On-site technical assistance</li>
                            <li><i class="bi bi-check-circle-fill"></i> Reliable &amp; safe equipment</li>
                        </ul>
                    </div>
                </div>
                <!-- Card 6 — image -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                    <div class="svc-card svc-card--img">
                        <img src="/assets/img/projects/lotte-catalyst/catalyst-3 - Copy.webp"
                             alt="Fabrication work" class="svc-card-bg-img" width="400" height="300" />
                        <div class="svc-card-img-overlay">
                            <span class="svc-card-img-label">Active Projects</span>
                            <h4 class="svc-card-img-title">50+ Projects<br />Completed</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="svc-cta-section">
        <div class="svc-cta-overlay"></div>
        <div class="container text-center" style="position:relative;z-index:2;" data-aos="fade-up">
            <span class="section-eyebrow" style="color:rgba(27,47,110,0.7);">Let's Build Together</span>
            <h2 class="svc-cta-title">Ready to Work With Us?</h2>
            <p class="svc-cta-desc">
                With a commitment to quality, safety, and timely delivery, RAYA ensures every project runs
                smoothly from start to finish. Let's build lasting value together.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <Link :href="route('contactUs')" class="btn-primary btn-lg">
                    Contact Us Now
                    <i class="bi bi-arrow-right"></i>
                </Link>
                <Link :href="route('portfolio')" class="btn-outline btn-lg">View Portfolio</Link>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Overview */
.svc-overview { padding: 96px 0; background: #fff; }
.svc-img-wrap { border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-lg); }
.svc-img { width: 100%; height: 420px; object-fit: cover; display: block; }
.mt-3 { margin-top: 16px !important; }

/* Cards section */
.svc-cards-section { padding: 80px 0; background: var(--bg-light); }
.mb-12 { margin-bottom: 48px; }

.svc-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: var(--radius-card);
    padding: 32px 28px;
    height: 100%;
    transition: box-shadow 0.3s, transform 0.3s;
    display: flex;
    flex-direction: column;
}
.svc-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-5px); }

.svc-card-icon {
    width: 56px; height: 56px;
    background: var(--navy);
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 24px; color: var(--gold);
    margin-bottom: 20px; flex-shrink: 0;
    transition: background 0.25s;
}
.svc-card:hover .svc-card-icon { background: var(--gold); color: var(--navy); }

.svc-card-title {
    font-family: var(--font-head);
    font-size: 16px; font-weight: 800;
    color: var(--navy);
    margin-bottom: 10px; line-height: 1.35;
}
.svc-card-desc {
    font-family: var(--font-body);
    font-size: 14px; color: var(--text-body);
    line-height: 1.65; margin: 0; flex-grow: 1;
}

.svc-check-list {
    list-style: none; padding: 0; margin: 0;
    display: flex; flex-direction: column; gap: 7px;
}
.svc-check-list li {
    font-size: 13px; color: var(--text-body);
    display: flex; align-items: flex-start; gap: 8px;
}
.svc-check-list i { color: var(--navy); font-size: 14px; flex-shrink: 0; margin-top: 1px; }

/* Image card */
.svc-card--img {
    position: relative; overflow: hidden;
    padding: 0; border: none; min-height: 280px;
}
.svc-card-bg-img {
    position: absolute; inset: 0;
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.6s ease;
}
.svc-card--img:hover .svc-card-bg-img { transform: scale(1.06); }
.svc-card-img-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(11,11,11,0.85) 0%, rgba(11,11,11,0.2) 60%, transparent 100%);
    display: flex; flex-direction: column;
    justify-content: flex-end; padding: 28px;
    z-index: 1;
}
.svc-card-img-label {
    font-family: var(--font-body);
    font-size: 11px; font-weight: 800;
    letter-spacing: 2.5px; text-transform: uppercase;
    color: var(--gold); margin-bottom: 8px;
}
.svc-card-img-title {
    font-family: var(--font-head);
    font-size: 22px; font-weight: 900;
    color: #fff; line-height: 1.2; margin: 0;
}

/* CTA section */
.svc-cta-section {
    padding: 96px 0; position: relative;
    background: var(--gold);
}
.svc-cta-overlay {
    position: absolute; inset: 0;
    background: url('/assets/img/footer-1.webp') center/cover;
    opacity: 0.08; z-index: 0;
}
.svc-cta-title {
    font-family: var(--font-head);
    font-size: clamp(28px, 4vw, 44px); font-weight: 900;
    color: var(--navy); margin: 10px 0 20px; line-height: 1.1;
}
.svc-cta-desc {
    font-family: var(--font-body);
    font-size: 17px; color: rgba(27,47,110,0.80);
    max-width: 620px; margin: 0 auto 36px; line-height: 1.7;
}
.gap-3 { gap: 12px !important; }

/* Responsive */
@media (max-width: 768px) {
    .svc-overview { padding: 60px 0; }
    .svc-img { height: 280px; }
    .svc-cards-section { padding: 60px 0; }
    .svc-cta-section { padding: 64px 0; }
}
</style>
