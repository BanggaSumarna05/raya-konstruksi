<script setup>
import { Head, Link } from "@inertiajs/vue3";

const methods = [
    {
        icon: "bi-moisture",
        title: "Dry Catalyst Loading",
        desc: "Solid catalysts introduced into the reactor without any auxiliary equipment or liquid medium.",
        advantages: ["Cost-effective and simple to implement", "No additional materials required, reducing preparation time"],
        applications: ["Suitable for hydrocracking, hydrogenation, and fixed-bed processes in petrochemical industry"],
    },
    {
        icon: "bi-layers-fill",
        title: "Dense Catalyst Loading",
        desc: "Optimises catalyst placement by maximising packing density and reducing void spaces in the reactor.",
        advantages: ["Enhances reactor efficiency by improving catalyst density", "Reduces risk of channeling due to better distribution"],
        applications: ["Widely used in hydroprocessing — e.g. hydrodesulfurization — and high-capacity oil refinery processes"],
    },
    {
        icon: "bi-wind",
        title: "Sock Catalyst Loading",
        desc: "Employs a tubular bag to guide catalysts into the reactor gently, minimising physical damage.",
        advantages: ["Protects fragile catalysts from mechanical damage", "Suitable for reloading expensive or sensitive catalysts"],
        applications: ["Used for large-scale reactors or delicate catalysts such as in reforming processes"],
    },
];

const comparisonRows = [
    { method: "Dry Loading",   ease: "Easy",     cost: "Low",    efficiency: "Moderate", bestFor: "Fixed-bed reactors (small)" },
    { method: "Dense Loading", ease: "Moderate", cost: "High",   efficiency: "High",     bestFor: "High-capacity hydroprocessing" },
    { method: "Sock Loading",  ease: "Moderate", cost: "Medium", efficiency: "High",     bestFor: "Fragile or expensive catalysts" },
];
</script>

<template>
    <Head title="Catalyst Handling" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/cover-catalyst.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">What We Do</span>
            <h1 class="page-hero-title">Catalyst<br />Handling</h1>
            <p class="page-hero-sub">
                Professional catalyst loading, unloading, and reactor handling following
                global refinery safety standards — atmospheric and inert conditions.
            </p>
        </div>
    </section>

    <!-- ── Overview ── -->
    <section class="svc-overview">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-eyebrow">Overview</span>
                    <h2 class="section-title">Precision Catalyst<br />Loading &amp; Handling</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        Catalyst loading is the process of placing a catalyst into a chemical reactor to facilitate
                        reactions without being consumed. This step is critical to ensure reaction efficiency,
                        uniform catalyst distribution, and maximum conversion of reactants to products.
                    </p>
                    <p class="section-body mt-3">
                        We carry out the loading process using <strong>Big-Bags</strong> or <strong>Drums</strong>,
                        depending on client preferences or the equipment and location within the plant.
                    </p>

                    <!-- Key capabilities -->
                    <div class="cat-caps mt-5">
                        <div class="cat-cap-item">
                            <i class="bi bi-radioactive"></i>
                            <span>Atmospheric &amp; Inert Condition</span>
                        </div>
                        <div class="cat-cap-item">
                            <i class="bi bi-bag-fill"></i>
                            <span>Sock &amp; Dense Loading</span>
                        </div>
                        <div class="cat-cap-item">
                            <i class="bi bi-arrow-repeat"></i>
                            <span>Change of Catalyst</span>
                        </div>
                        <div class="cat-cap-item">
                            <i class="bi bi-tornado"></i>
                            <span>Industrial Grade Vacuum</span>
                        </div>
                        <div class="cat-cap-item">
                            <i class="bi bi-person-check-fill"></i>
                            <span>Licensed Technicians</span>
                        </div>
                    </div>
                </div>

                <!-- Loading type cards -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="80">
                    <div class="row g-3">
                        <!-- Drums -->
                        <div class="col-12">
                            <div class="loading-type-card">
                                <div class="loading-type-header">
                                    <div class="loading-type-icon"><i class="bi bi-box-fill"></i></div>
                                    <h4 class="loading-type-title">Loading with DRUMS</h4>
                                </div>
                                <p class="loading-type-desc">
                                    Drums are reusable — once emptied they can be returned to the supplier,
                                    considerably reducing waste generation at the plant. The hopper is filled,
                                    raised to the reactor mouth, and the catalyst is loaded.
                                </p>
                                <div class="loading-type-img-wrap">
                                    <img src="/assets/img/catalyst-loading-1.webp" alt="Drum loading" class="loading-type-img" />
                                </div>
                            </div>
                        </div>
                        <!-- Big-Bags -->
                        <div class="col-12">
                            <div class="loading-type-card">
                                <div class="loading-type-header">
                                    <div class="loading-type-icon"><i class="bi bi-bag-check-fill"></i></div>
                                    <h4 class="loading-type-title">Loading with BIG-BAGS</h4>
                                </div>
                                <p class="loading-type-desc">
                                    Big-bags are flexible, large containers that are more adaptable in limited
                                    manoeuvring spaces. The hopper is placed at the reactor mouth and big bags are
                                    raised without moving the hopper at each manoeuvre.
                                </p>
                                <div class="loading-type-img-wrap">
                                    <img src="/assets/img/catalyst-loading-2.webp" alt="Big-bag loading" class="loading-type-img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Catalyst Methods ── -->
    <section class="svc-cards-section">
        <div class="container">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="section-eyebrow">Catalyst Methods</span>
                <h2 class="section-title mt-2">Loading Techniques We Apply</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body mx-auto" style="max-width:540px;">
                    We commonly employ three proven catalyst loading methods, selected based on reactor type,
                    catalyst properties, and project requirements.
                </p>
            </div>

            <div class="row g-4 mb-5">
                <div v-for="(m, i) in methods" :key="i"
                     class="col-md-4"
                     data-aos="fade-up" :data-aos-delay="i * 80">
                    <div class="svc-card">
                        <div class="svc-card-icon"><i :class="'bi ' + m.icon"></i></div>
                        <h4 class="svc-card-title">{{ m.title }}</h4>
                        <p class="svc-card-desc">{{ m.desc }}</p>

                        <div class="method-block mt-3">
                            <span class="method-block-label">Advantages</span>
                            <ul class="svc-check-list">
                                <li v-for="(a, j) in m.advantages" :key="j">
                                    <i class="bi bi-check-circle-fill"></i> {{ a }}
                                </li>
                            </ul>
                        </div>
                        <div class="method-block mt-3">
                            <span class="method-block-label">Applications</span>
                            <ul class="svc-check-list">
                                <li v-for="(a, j) in m.applications" :key="j">
                                    <i class="bi bi-arrow-right-circle-fill"></i> {{ a }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison table -->
            <div data-aos="fade-up">
                <h3 class="comparison-heading">Method Comparison</h3>
                <div class="table-wrap">
                    <table class="raya-table">
                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Ease of Use</th>
                                <th>Cost</th>
                                <th>Efficiency</th>
                                <th>Best For</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(row, i) in comparisonRows" :key="i">
                                <td class="level-cell">{{ row.method }}</td>
                                <td>{{ row.ease }}</td>
                                <td>
                                    <span :class="['cost-badge', 'cost-badge--' + row.cost.toLowerCase()]">
                                        {{ row.cost }}
                                    </span>
                                </td>
                                <td>
                                    <span :class="['eff-badge', 'eff-badge--' + row.efficiency.toLowerCase()]">
                                        {{ row.efficiency }}
                                    </span>
                                </td>
                                <td>{{ row.bestFor }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="svc-cta-section">
        <div class="svc-cta-overlay"></div>
        <div class="container text-center" style="position:relative;z-index:2;" data-aos="fade-up">
            <span class="section-eyebrow" style="color:rgba(27,47,110,0.7);">Partner With Raya</span>
            <h2 class="svc-cta-title">Ready to Work With Us?</h2>
            <p class="svc-cta-desc">
                Contact our team to discuss your catalyst handling requirements and discover
                how RAYA can deliver safe, efficient, and reliable results for your facility.
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
/* Overview */
.svc-overview { padding: 96px 0; background: #fff; }
.mt-3 { margin-top: 16px !important; }
.mt-5 { margin-top: 28px !important; }
.mb-5 { margin-bottom: 28px !important; }

/* Capability badges */
.cat-caps {
    display: flex; flex-direction: column; gap: 10px;
    border-top: 1px solid var(--border); padding-top: 24px;
}
.cat-cap-item {
    display: flex; align-items: center; gap: 12px;
    font-family: var(--font-body); font-size: 14px;
    font-weight: 600; color: var(--text-body);
}
.cat-cap-item i { font-size: 18px; color: var(--navy); flex-shrink: 0; }

/* Loading type cards */
.loading-type-card {
    background: #fff; border: 1px solid var(--border);
    border-radius: var(--radius-card); padding: 24px;
    transition: box-shadow 0.3s;
}
.loading-type-card:hover { box-shadow: var(--shadow-md); }
.loading-type-header { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; }
.loading-type-icon {
    width: 44px; height: 44px; background: var(--navy);
    border-radius: 10px; display: flex; align-items: center;
    justify-content: center; font-size: 20px; color: var(--gold);
    flex-shrink: 0;
}
.loading-type-title {
    font-family: var(--font-head); font-size: 15px;
    font-weight: 800; color: var(--navy); margin: 0;
}
.loading-type-desc {
    font-size: 13px; color: var(--text-body);
    line-height: 1.6; margin-bottom: 16px;
}
.loading-type-img-wrap {
    background: var(--bg-light); border-radius: 10px;
    padding: 16px; text-align: center;
}
.loading-type-img { max-height: 160px; max-width: 100%; object-fit: contain; }

/* Methods cards */
.svc-cards-section { padding: 80px 0; background: var(--bg-light); }
.mb-12 { margin-bottom: 48px; }

.svc-card {
    background: #fff; border: 1px solid var(--border);
    border-radius: var(--radius-card); padding: 28px 24px;
    height: 100%; display: flex; flex-direction: column;
    transition: box-shadow 0.3s, transform 0.3s;
}
.svc-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-5px); }
.svc-card-icon {
    width: 52px; height: 52px; background: var(--navy);
    border-radius: 12px; display: flex; align-items: center;
    justify-content: center; font-size: 22px; color: var(--gold);
    margin-bottom: 16px; transition: background 0.25s;
}
.svc-card:hover .svc-card-icon { background: var(--gold); color: var(--navy); }
.svc-card-title {
    font-family: var(--font-head); font-size: 15px; font-weight: 800;
    color: var(--navy); margin-bottom: 8px; line-height: 1.35;
}
.svc-card-desc { font-size: 13px; color: var(--text-body); line-height: 1.6; margin: 0; }

.method-block { flex-shrink: 0; }
.method-block-label {
    font-family: var(--font-body); font-size: 11px; font-weight: 800;
    text-transform: uppercase; letter-spacing: 1.5px;
    color: var(--navy); display: block; margin-bottom: 6px;
}
.svc-check-list {
    list-style: none; padding: 0; margin: 0;
    display: flex; flex-direction: column; gap: 5px;
}
.svc-check-list li {
    font-size: 12px; color: var(--text-body);
    display: flex; align-items: flex-start; gap: 7px; line-height: 1.4;
}
.svc-check-list i { font-size: 12px; flex-shrink: 0; margin-top: 1px; color: var(--navy); }

/* Comparison */
.comparison-heading {
    font-family: var(--font-head); font-size: 20px; font-weight: 800;
    color: var(--navy); margin-bottom: 16px;
}
.table-wrap { overflow-x: auto; border-radius: 14px; box-shadow: var(--shadow-sm); }
.raya-table { width: 100%; border-collapse: collapse; font-family: var(--font-body); font-size: 14px; }
.raya-table thead tr { background: var(--navy); color: #fff; }
.raya-table th {
    padding: 14px 18px; text-align: left; font-weight: 700;
    font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; white-space: nowrap;
}
.raya-table tbody tr { border-bottom: 1px solid var(--border); transition: background 0.2s; }
.raya-table tbody tr:nth-child(odd) { background: var(--bg-light); }
.raya-table tbody tr:hover { background: #eef0fc; }
.raya-table td { padding: 13px 18px; color: var(--text-body); vertical-align: middle; }
.level-cell { font-weight: 700; color: var(--navy); white-space: nowrap; }

/* Cost / efficiency badges */
.cost-badge, .eff-badge {
    display: inline-block; padding: 3px 10px;
    border-radius: 50px; font-size: 11px; font-weight: 700;
}
.cost-badge--low    { background: #d1fae5; color: #065f46; }
.cost-badge--medium { background: #fef3c7; color: #92400e; }
.cost-badge--high   { background: #fee2e2; color: #991b1b; }
.eff-badge--high    { background: #dbeafe; color: #1e40af; }
.eff-badge--moderate{ background: #f3f4f6; color: #374151; }

/* CTA */
.svc-cta-section { padding: 96px 0; position: relative; background: var(--gold); }
.svc-cta-overlay {
    position: absolute; inset: 0;
    background: url('/assets/img/cover-catalyst.webp') center/cover;
    opacity: 0.06; z-index: 0;
}
.svc-cta-title {
    font-family: var(--font-head);
    font-size: clamp(28px, 4vw, 44px); font-weight: 900;
    color: var(--navy); margin: 10px 0 20px;
}
.svc-cta-desc {
    font-size: 17px; color: rgba(27,47,110,0.80);
    max-width: 620px; margin: 0 auto 36px; line-height: 1.7;
}
.gap-3 { gap: 12px !important; }

@media (max-width: 768px) {
    .svc-overview { padding: 60px 0; }
    .svc-cards-section { padding: 60px 0; }
    .svc-cta-section { padding: 64px 0; }
}
</style>
