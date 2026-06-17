<script setup>
import { Head, Link } from "@inertiajs/vue3";

const benefits = [
    { icon: "bi-graph-up-arrow",   title: "Professional Growth",    desc: "Continuous training and career development programs tailored to your expertise." },
    { icon: "bi-people-fill",      title: "Collaborative Culture",  desc: "A diverse and inclusive environment where every contribution is valued and recognized." },
    { icon: "bi-shield-check",     title: "Safety First",           desc: "Industry-leading HSE standards protecting every team member on every site." },
    { icon: "bi-geo-alt-fill",     title: "Nationwide Presence",    desc: "Work on major industrial projects across 5 islands in Indonesia." },
    { icon: "bi-award-fill",       title: "Certified Excellence",   desc: "Join a team that holds international certifications and delivers world-class results." },
    { icon: "bi-lightning-charge-fill", title: "Impactful Work",   desc: "Contribute to energy, petrochemical, and manufacturing projects that power Indonesia." },
];
</script>

<script>
export default {
    data() {
        return {
            linkedinPosts: [
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7419212018609680384",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7416807758823391233",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7416807549393461249",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7379845617990356992",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7379361489352192000",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7373984848153292800",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7370785958134231041",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7370786151672000512",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7368933077215055872",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7368551084253986818",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7368294514458836994",
                "https://www.linkedin.com/embed/feed/update/urn:li:share:7368294009443635200",
            ],
        };
    },
    mounted() {
        if (typeof window.Swiper === 'undefined') {
            console.warn('[1career.vue] Swiper not available — LinkedIn slider disabled.');
            return;
        }
        new Swiper(".linkedin-slider", {
            loop: true, speed: 600,
            slidesPerView: 1, spaceBetween: 20,
            autoplay: { delay: 5000, disableOnInteraction: false },
            pagination: { el: ".swiper-pagination", clickable: true },
            breakpoints: {
                768:  { slidesPerView: 2, spaceBetween: 24 },
                1024: { slidesPerView: 3, spaceBetween: 32 },
            },
        });
    },
};
</script>

<template>
    <Head title="Careers" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/projects/lotte-catalyst/catalyst-3.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Join Our Team</span>
            <h1 class="page-hero-title">Build Your Career<br />with RAYA</h1>
            <p class="page-hero-sub">
                We invest in people. Join a team of engineers, technicians, and specialists
                delivering excellence across Indonesia's industrial sector.
            </p>
        </div>
    </section>

    <!-- ── Why Join Us ── -->
    <section class="career-section">
        <div class="container">
            <div class="row align-items-start gy-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="section-eyebrow">Our People First</span>
                    <h2 class="section-title mt-2">Why Join RAYA?</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        Investing in human capital is our HR philosophy. We are committed to enhancing
                        the skills, knowledge, experience, and wellbeing of our people so they can
                        meet the demands of the job and perform at their very best.
                    </p>
                    <p class="section-body mt-3">
                        We recognise the collective efforts of our people — our success is built on
                        our shared commitment and perseverance toward delivering superior engineering
                        solutions. We welcome you to join us!
                    </p>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="row g-3">
                        <div v-for="(b, i) in benefits" :key="i" class="col-md-6">
                            <div class="career-benefit-card">
                                <div class="career-benefit-icon">
                                    <i :class="'bi ' + b.icon"></i>
                                </div>
                                <div>
                                    <h6 class="career-benefit-title">{{ b.title }}</h6>
                                    <p class="career-benefit-desc">{{ b.desc }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Job Opportunities ── -->
    <section class="career-section" style="background: var(--bg-light);">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="career-img-wrap">
                        <img src="/assets/img/projects/lotte-catalyst/catalyst-3.webp"
                             alt="Job Opportunities" class="career-img" />
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5" data-aos="fade-left">
                    <span class="section-eyebrow">Open Positions</span>
                    <h2 class="section-title mt-2">Job Opportunities</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        We believe in workforce diversity and our strength is built on the differences that
                        generate new ideas and creative solutions for our diverse clients.
                        Join <strong>RAYA</strong> and carve a career path that matches your skills and aspirations.
                    </p>
                    <div class="d-flex gap-3 flex-wrap mt-4">
                        <a href="https://pekerjakita.com/" target="_blank" class="btn-primary">
                            Apply Now <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── LinkedIn Updates ── -->
    <section class="career-section">
        <div class="container">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="section-eyebrow">Stay Connected</span>
                <h2 class="section-title mt-2">Latest Updates</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body" style="max-width: 480px; margin: 0 auto;">
                    Stay updated with our latest career opportunities and company news on LinkedIn.
                </p>
            </div>

            <div class="linkedin-slider swiper" style="padding-bottom: 48px;" data-aos="fade-up">
                <div class="swiper-wrapper">
                    <div v-for="(post, i) in linkedinPosts" :key="i" class="swiper-slide">
                        <div class="linkedin-card">
                            <iframe :src="post" height="550" width="100%"
                                frameborder="0" allowfullscreen title="LinkedIn post"></iframe>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination" style="position:relative; margin-top:24px;"></div>
            </div>

            <div class="text-center mt-4">
                <a href="https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all"
                   target="_blank" class="btn-linkedin">
                    <i class="bi bi-linkedin"></i> Follow Us on LinkedIn
                </a>
            </div>
        </div>
    </section>

    <!-- ── Recruitment Fraud ── -->
    <section class="career-section" style="background: var(--bg-light);">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <span class="section-eyebrow">Stay Safe</span>
                    <h2 class="section-title mt-2">Recruitment Fraud</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        If you have queries regarding the legitimacy of a recruitment offer you have received,
                        send your query to <strong>it@rayakonstruksi.com</strong>.
                    </p>
                    <Link :href="route('cyberInfo')" class="btn-primary mt-4">
                        Discover More <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="career-img-wrap">
                        <img src="/assets/img/fraud-5.webp" alt="Recruitment Fraud" class="career-img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.career-section { padding: 80px 0; background: #fff; }
.mb-12  { margin-bottom: 48px; }
.mt-3   { margin-top: 16px !important; }
.mt-4   { margin-top: 20px !important; }
.gap-3  { gap: 12px !important; }

/* Benefit cards */
.career-benefit-card {
    display: flex; align-items: flex-start; gap: 14px;
    background: var(--bg-light); border: 1px solid var(--border);
    border-left: 4px solid var(--navy);
    border-radius: 10px; padding: 18px;
    transition: box-shadow 0.25s, transform 0.25s;
}
.career-benefit-card:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.career-benefit-icon {
    width: 42px; height: 42px; background: var(--navy);
    border-radius: 10px; display: flex; align-items: center;
    justify-content: center; font-size: 18px; color: var(--gold);
    flex-shrink: 0; transition: background 0.25s;
}
.career-benefit-card:hover .career-benefit-icon { background: var(--gold); color: var(--navy); }
.career-benefit-title {
    font-family: var(--font-head); font-weight: 800; font-size: 13px;
    color: var(--navy); margin: 0 0 4px; text-transform: uppercase;
    letter-spacing: 0.3px;
}
.career-benefit-desc { font-size: 13px; color: var(--text-body); margin: 0; line-height: 1.5; }

/* Images */
.career-img-wrap { border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-lg); }
.career-img { width: 100%; max-height: 420px; object-fit: cover; display: block; }

/* LinkedIn card */
.linkedin-card {
    background: #fff; border-radius: 12px; overflow: hidden;
    box-shadow: var(--shadow-sm); border: 1px solid var(--border);
}

/* LinkedIn button */
.btn-linkedin {
    display: inline-flex; align-items: center; gap: 8px;
    background: #0a66c2; color: #fff;
    font-family: var(--font-body); font-size: 13px; font-weight: 700;
    padding: 13px 28px; border-radius: 50px; text-decoration: none;
    border: 2px solid #0a66c2;
    transition: background 0.22s, transform 0.2s;
    box-shadow: 0 4px 18px rgba(10,102,194,0.25);
}
.btn-linkedin:hover { background: #004182; border-color: #004182; color: #fff; transform: translateY(-2px); }
</style>
