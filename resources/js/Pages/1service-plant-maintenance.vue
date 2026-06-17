<script setup>
import { Head, Link } from "@inertiajs/vue3";

const scopeItems = [
    {
        icon: "bi-clipboard2-pulse-fill",
        title: "Preventive & Predictive Maintenance",
        desc: "Proactive maintenance to prevent costly breakdowns.",
        items: [
            "Routine inspection & servicing",
            "Lubrication, calibration & alignment",
            "Vibration, temperature & condition monitoring",
            "Performance analysis & maintenance recommendations",
        ],
    },
    {
        icon: "bi-wrench-adjustable-circle-fill",
        title: "Corrective Maintenance & Overhaul",
        desc: "Restoring equipment performance when issues occur.",
        items: [
            "Mechanical repair & component replacement",
            "Pump, valve, and rotating equipment servicing",
            "Alignment, balancing & diagnostics",
            "Major overhaul during planned downtime",
        ],
    },
    {
        icon: "bi-calendar2-check-fill",
        title: "Shutdown & Turnaround Execution",
        desc: "Time-critical maintenance with precise scheduling.",
        items: [
            "Multi-discipline scope management",
            "Critical path scheduling & coordination",
            "HSE supervision throughout execution",
            "On-time handover with full QA/QC documentation",
        ],
    },
    {
        icon: "bi-graph-up-arrow",
        title: "Reliability Improvement",
        desc: "Enhancing equipment reliability for long-term stability.",
        items: [
            "Root Cause Failure Analysis (RCA / RCFA)",
            "Operation & maintenance optimisation",
            "Life cycle and efficiency evaluation",
            "Safety & compliance improvement strategies",
        ],
    },
];

const comparisonRows = [
    { level: "Routine / Preventive", condition: "Equipment operating normally with expected wear", activities: "Inspection, cleaning, lubrication, calibration, scheduled part replacement", result: "Maintain stability & prevent premature failure" },
    { level: "Predictive / Condition-Based", condition: "Early signs of deviation detected via monitoring", activities: "Vibration/temperature trending, oil analysis, targeted inspections", result: "Detect faults early & reduce unplanned downtime" },
    { level: "Corrective", condition: "Performance reduced or malfunction identified", activities: "Troubleshooting, component repair/replacement, alignment & testing", result: "Restore equipment efficiency & reliability" },
    { level: "Overhaul / Major Repair", condition: "Asset at end-of-service cycle or requiring full restoration", activities: "Disassembly, inspection, refurbishment, precision rebuild", result: "Reset equipment to near-new condition" },
    { level: "Shutdown / Turnaround", condition: "Planned full-plant or partial area downtime", activities: "Multi-discipline execution, job sequencing, QA/QC, HSE oversight", result: "Complete maintenance with minimal production interruption" },
];
</script>

<template>
    <Head title="Operation & Maintenance" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/cover-plant.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">What We Do</span>
            <h1 class="page-hero-title">Operation &amp;<br />Maintenance</h1>
            <p class="page-hero-sub">
                Reliable plant maintenance solutions across Oil &amp; Gas, Oleochemical, and
                Petrochemical sectors — minimising downtime and extending asset life.
            </p>
        </div>
    </section>

    <!-- ── Overview ── -->
    <section class="svc-overview">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="section-eyebrow">Overview</span>
                    <h2 class="section-title">Comprehensive Plant<br />Maintenance Services</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        <strong>RAYA</strong> delivers reliable plant maintenance solutions across the
                        <strong>Oil &amp; Gas, Oleochemical, and Petrochemical sectors</strong>. Our services
                        cover both scheduled and unscheduled maintenance, including routine inspections,
                        equipment servicing, and full-scale shutdown or turnaround execution.
                    </p>
                    <p class="section-body mt-3">
                        With disciplined planning, certified manpower, and strict HSE compliance, we ensure
                        your facility operates safely and efficiently — helping prevent costly failures and
                        extending asset life.
                    </p>

                    <!-- Key stats -->
                    <div class="om-stats mt-5">
                        <div class="om-stat">
                            <span class="om-stat-num">1,200,000<sup>+</sup></span>
                            <span class="om-stat-label">Safe Man-Hours</span>
                        </div>
                        <div class="om-stat">
                            <span class="om-stat-num">0</span>
                            <span class="om-stat-label">LTI Incidents</span>
                        </div>
                        <div class="om-stat">
                            <span class="om-stat-num">20<sup>+</sup></span>
                            <span class="om-stat-label">Active Sites</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="svc-img-wrap">
                        <img src="/assets/img/footer-1.webp" alt="Plant Maintenance" class="svc-img" />
                        <div class="svc-img-badge">
                            <i class="bi bi-shield-check-fill"></i>
                            <span>Zero Accident<br />Commitment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Scope of Services ── -->
    <section class="svc-cards-section">
        <div class="container">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="section-eyebrow">Scope of Services</span>
                <h2 class="section-title mt-2">Maintenance Approach</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body mx-auto" style="max-width:560px;">
                    Plant maintenance requires different approaches depending on equipment condition and
                    operational needs. RAYA applies the appropriate method to ensure safe performance,
                    extended asset life, and minimised downtime.
                </p>
            </div>

            <div class="row g-4">
                <div v-for="(item, i) in scopeItems" :key="i"
                     class="col-md-6 col-lg-3"
                     data-aos="fade-up" :data-aos-delay="i * 80">
                    <div class="svc-card">
                        <div class="svc-card-icon">
                            <i :class="'bi ' + item.icon"></i>
                        </div>
                        <h4 class="svc-card-title">{{ item.title }}</h4>
                        <p class="svc-card-desc">{{ item.desc }}</p>
                        <ul class="svc-check-list mt-3">
                            <li v-for="(pt, j) in item.items" :key="j">
                                <i class="bi bi-check-circle-fill"></i> {{ pt }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Comparison Table ── -->
    <section class="comparison-section">
        <div class="container">
            <div class="mb-10" data-aos="fade-up">
                <span class="section-eyebrow">Reference Guide</span>
                <h2 class="section-title mt-2">Maintenance Level Comparison</h2>
                <div class="section-divider"></div>
            </div>

            <div class="table-wrap" data-aos="fade-up" data-aos-delay="100">
                <table class="raya-table">
                    <thead>
                        <tr>
                            <th>Maintenance Level</th>
                            <th>Application Condition</th>
                            <th>Activities Included</th>
                            <th>Expected Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(row, i) in comparisonRows" :key="i">
                            <td class="level-cell">{{ row.level }}</td>
                            <td>{{ row.condition }}</td>
                            <td>{{ row.activities }}</td>
                            <td class="result-cell">{{ row.result }}</td>
                        </tr>
                    </tbody>
                </table>
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
                We'd love to hear from you. Contact our team to discuss your maintenance requirements
                and discover how RAYA can deliver exceptional results for your facility.
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
.mt-3  { margin-top: 16px !important; }
.mt-5  { margin-top: 28px !important; }

.svc-img-wrap { position: relative; border-radius: 20px; overflow: visible; }
.svc-img {
    width: 100%; height: 440px; object-fit: cover;
    border-radius: 20px; display: block;
    box-shadow: var(--shadow-lg);
}
.svc-img-badge {
    position: absolute; bottom: -18px; right: 24px;
    background: var(--navy);
    color: #fff;
    border-radius: 12px;
    padding: 16px 22px;
    display: flex; align-items: center; gap: 12px;
    font-family: var(--font-body);
    font-size: 13px; font-weight: 700; line-height: 1.4;
    box-shadow: 0 10px 30px rgba(27,47,110,0.3);
    z-index: 2;
}
.svc-img-badge i { font-size: 22px; color: var(--gold); flex-shrink: 0; }

/* Stats row */
.om-stats {
    display: flex; gap: 0;
    border-top: 1px solid var(--border);
    padding-top: 24px;
}
.om-stat {
    display: flex; flex-direction: column;
    padding-right: 32px;
    border-right: 1px solid var(--border);
    margin-right: 32px;
}
.om-stat:last-child { border-right: none; }
.om-stat-num {
    font-family: var(--font-head);
    font-size: clamp(22px, 2.5vw, 30px);
    font-weight: 900; color: var(--navy); line-height: 1;
}
.om-stat-num sup { font-size: 0.6em; color: var(--gold); font-weight: 900; }
.om-stat-label {
    font-size: 11px; font-weight: 600; color: var(--text-muted);
    text-transform: uppercase; letter-spacing: 1.5px; margin-top: 5px;
}

/* Cards */
.svc-cards-section { padding: 80px 0; background: var(--bg-light); }
.mb-12 { margin-bottom: 48px; }

.svc-card {
    background: #fff;
    border: 1px solid var(--border);
    border-radius: var(--radius-card);
    padding: 28px 24px;
    height: 100%;
    transition: box-shadow 0.3s, transform 0.3s;
    display: flex; flex-direction: column;
}
.svc-card:hover { box-shadow: var(--shadow-lg); transform: translateY(-5px); }
.svc-card-icon {
    width: 52px; height: 52px;
    background: var(--navy); border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 22px; color: var(--gold); margin-bottom: 18px;
    transition: background 0.25s;
}
.svc-card:hover .svc-card-icon { background: var(--gold); color: var(--navy); }
.svc-card-title {
    font-family: var(--font-head);
    font-size: 15px; font-weight: 800; color: var(--navy);
    margin-bottom: 8px; line-height: 1.35;
}
.svc-card-desc {
    font-size: 13px; color: var(--text-body); line-height: 1.6;
    margin: 0 0 4px; flex-shrink: 0;
}
.svc-check-list {
    list-style: none; padding: 0; margin: 0;
    display: flex; flex-direction: column; gap: 6px; flex-grow: 1;
}
.svc-check-list li {
    font-size: 12px; color: var(--text-body);
    display: flex; align-items: flex-start; gap: 7px; line-height: 1.4;
}
.svc-check-list i { color: var(--navy); font-size: 13px; flex-shrink: 0; margin-top: 1px; }

/* Comparison table */
.comparison-section { padding: 80px 0; background: #fff; }
.mb-10 { margin-bottom: 40px; }
.table-wrap { overflow-x: auto; border-radius: 14px; box-shadow: var(--shadow-sm); }
.raya-table {
    width: 100%; border-collapse: collapse;
    font-family: var(--font-body); font-size: 14px;
}
.raya-table thead tr {
    background: var(--navy); color: #fff;
}
.raya-table th {
    padding: 16px 18px; text-align: left;
    font-weight: 700; font-size: 12px;
    text-transform: uppercase; letter-spacing: 0.5px;
    white-space: nowrap;
}
.raya-table tbody tr {
    border-bottom: 1px solid var(--border);
    transition: background 0.2s;
}
.raya-table tbody tr:hover { background: #f4f6ff; }
.raya-table td {
    padding: 14px 18px; color: var(--text-body);
    vertical-align: top; line-height: 1.55;
}
.level-cell { font-weight: 700; color: var(--navy); white-space: nowrap; }
.result-cell { color: #1a6e3a; font-weight: 600; }
.raya-table tbody tr:nth-child(odd) { background: var(--bg-light); }
.raya-table tbody tr:nth-child(odd):hover { background: #f0f2fa; }

/* CTA */
.svc-cta-section { padding: 96px 0; position: relative; background: var(--gold); }
.svc-cta-overlay {
    position: absolute; inset: 0;
    background: url('/assets/img/cover-plant.webp') center/cover;
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
    .svc-img { height: 280px; }
    .om-stats { flex-wrap: wrap; gap: 20px; }
    .om-stat { border-right: none; padding-right: 0; margin-right: 0; }
    .svc-cards-section, .comparison-section { padding: 60px 0; }
}
</style>
