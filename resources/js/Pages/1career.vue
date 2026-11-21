<script setup>
import { computed, ref, onMounted, onUnmounted } from "vue";
import { Head, Link, usePage } from "@inertiajs/vue3";
import { usePageMotion } from "../Composables/usePageMotion";
import { createTrackCarousel } from "../Composables/useTrackCarousel";

usePageMotion();

// Lowongan dari DB (panel: Content Management > Careers / Lowongan)
const props = defineProps({
    careers: {
        type: Array,
        default: () => [],
    },
    threadsPosts: {
        type: Array,
        default: () => [],
    },
    linkedinPosts: {
        type: Array,
        default: () => [],
    },
});

const openCareers = computed(() => props.careers || []);

const page = usePage();
const linkedinUrl = computed(() => page.props.social?.linkedin || "https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all");
const threadsUrl = computed(() => page.props.social?.threads || "https://www.threads.net/@raya.konstruksi");
const threadsHandle = computed(() => {
    const match = threadsUrl.value.match(/threads\.(?:net|com)\/(@[^/?#]+)/i);
    return match ? match[1] : "@raya.konstruksi";
});

const threadsTrack = ref(null);
const threadsPage = ref(0);
const threadsPageCount = ref(1);

const linkedinTrack = ref(null);
const linkedinPage = ref(0);
const linkedinPageCount = ref(1);

const threadsCarousel = createTrackCarousel(threadsTrack, ".threads-card", threadsPage, threadsPageCount);
const linkedinCarousel = createTrackCarousel(linkedinTrack, ".linkedin-post", linkedinPage, linkedinPageCount);

function updatePagers() {
    threadsCarousel.update();
    linkedinCarousel.update();
}

onMounted(() => {
    updatePagers();
    window.addEventListener("resize", updatePagers);
});

onUnmounted(() => {
    window.removeEventListener("resize", updatePagers);
});

// Modal detail lowongan
const selectedJob = ref(null);
const jobModalEl = ref(null);
const jobModal = ref(null);

function openJobModal(job) {
    selectedJob.value = job;
    if (!jobModal.value && jobModalEl.value && typeof window.bootstrap !== 'undefined') {
        jobModal.value = new window.bootstrap.Modal(jobModalEl.value);
    }
    jobModal.value?.show();
}

const descCache = new Map();
function jobDescription(job) {
    if (!job.description) return '';
    const key = job.id + '|' + job.title;
    if (descCache.has(key)) return descCache.get(key);

    let html = job.description;
    if (typeof DOMParser !== 'undefined') {
        const doc = new DOMParser().parseFromString(html, 'text/html');
        const first = doc.body.firstElementChild;
        if (first && /^H[1-6]$/.test(first.tagName)
            && first.textContent.trim().toLowerCase() === job.title.trim().toLowerCase()) {
            first.remove();
        }
        html = doc.body.innerHTML;
    }
    descCache.set(key, html);
    return html;
}

const benefits = [
    { icon: "bi-graph-up-arrow",   title: "Professional Growth",    desc: "Continuous training and career development programs tailored to your expertise." },
    { icon: "bi-people-fill",      title: "Collaborative Culture",  desc: "A diverse and inclusive environment where every contribution is valued and recognized." },
    { icon: "bi-shield-check",     title: "Safety First",           desc: "Industry-leading HSE standards protecting every team member on every site." },
    { icon: "bi-geo-alt-fill",     title: "Nationwide Presence",    desc: "Work on major industrial projects across 5 islands in Indonesia." },
    { icon: "bi-award-fill",       title: "Certified Excellence",   desc: "Join a team that holds international certifications and delivers world-class results." },
    { icon: "bi-lightning-charge-fill", title: "Impactful Work",   desc: "Contribute to energy, petrochemical, and manufacturing projects that power Indonesia." },
];
</script>

<template>
    <Head title="Careers" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/refresh/career-hero.jpg');">
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
                <div class="col-lg-5" data-rv>
                    <span class="section-eyebrow">Our People First</span>
                    <h2 class="section-title mt-2">Why Join RAYA?</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        Investing in human capital is our HR philosophy. We are committed to enhancing
                        the skills, knowledge, experience, and wellbeing of our people so they can
                        meet the demands of the job and perform at their very best.
                    </p>
                    <p class="section-body mt-3">
                        We recognise the collective efforts of our people: our success is built on
                        our shared commitment and perseverance toward delivering superior engineering
                        solutions. We welcome you to join us!
                    </p>
                </div>
                <div class="col-lg-7" data-rv>
                    <div class="row g-3">
                        <div v-for="(b, i) in benefits" :key="i" class="col-md-6">
                            <div class="career-benefit-card">
                                <div class="career-benefit-icon">
                                    <i :class="'bi ' + b.icon"></i>
                                </div>
                                <div>
                                    <h3 class="career-benefit-title">{{ b.title }}</h3>
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
    <section class="career-section career-section--light">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-7" data-rv>
                    <div class="career-img-wrap">
                        <img src="/assets/img/refresh/career-team.webp"
                             alt="Job Opportunities" class="career-img" />
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5" data-rv>
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

    <!-- ── Vacancies (dari DB, tersembunyi jika kosong) ── -->
    <section v-if="openCareers.length" class="career-section">
        <div class="container">
            <div class="svc-header mb-4">
                <div class="svc-header-left">
                    <span class="section-eyebrow">Vacancies</span>
                    <h2 class="section-title mt-1 mb-0">Current Openings</h2>
                </div>
            </div>
            <div class="row g-4">
                <div v-for="job in openCareers" :key="job.id" class="col-md-6 col-lg-4" data-rv>
                    <article class="vacancy-card">
                        <div class="vacancy-meta">
                            <span v-if="job.employment_type" class="vacancy-type">{{ job.employment_type }}</span>
                            <span v-if="job.location" class="vacancy-loc">
                                <i class="bi bi-geo-alt-fill"></i> {{ job.location }}
                            </span>
                        </div>
                        <h3 class="vacancy-title">{{ job.title }}</h3>
                        <div v-if="job.description" class="vacancy-desc" v-html="jobDescription(job)"></div>
                        <div class="vacancy-actions">
                            <button type="button" class="vacancy-details" @click="openJobModal(job)">
                                View Details <i class="bi bi-arrows-angle-expand"></i>
                            </button>
                            <a
                                :href="'mailto:recruitment@rayakonstruksi.com?subject=' + encodeURIComponent('Application: ' + job.title)"
                                class="vacancy-apply"
                            >
                                Apply Now <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Modal detail lowongan ── -->
    <div ref="jobModalEl" class="modal fade vacancy-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" v-if="selectedJob">
                <div class="vacancy-modal-head">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="vacancy-meta">
                        <span v-if="selectedJob.employment_type" class="vacancy-type">{{ selectedJob.employment_type }}</span>
                        <span v-if="selectedJob.location" class="vacancy-loc">
                            <i class="bi bi-geo-alt-fill"></i> {{ selectedJob.location }}
                        </span>
                    </div>
                    <h3 class="vacancy-modal-title">{{ selectedJob.title }}</h3>
                </div>
                <div class="modal-body">
                    <div class="vacancy-modal-desc" v-html="jobDescription(selectedJob)"></div>
                </div>
                <div class="vacancy-modal-foot">
                    <button type="button" class="vacancy-details" data-bs-dismiss="modal">Close</button>
                    <a
                        :href="'mailto:recruitment@rayakonstruksi.com?subject=' + encodeURIComponent('Application: ' + selectedJob.title)"
                        class="vacancy-apply"
                    >
                        Apply Now <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ── LinkedIn Updates ── -->
    <section class="career-section linkedin-section">
        <div class="container">
            <div class="linkedin-layout">
                <div class="linkedin-intro" data-rv>
                    <span class="linkedin-eyebrow"><span class="linkedin-eyebrow-bar" aria-hidden="true"></span>Our Social Media</span>
                    <i class="bi bi-linkedin linkedin-mark" aria-hidden="true"></i>
                    <h2 class="linkedin-heading">Connect With Us on<br><span>LinkedIn</span></h2>
                    <p class="linkedin-lead">
                        Career opportunities, project milestones, and company announcements straight from our LinkedIn page.
                    </p>
                    <a :href="linkedinUrl" target="_blank" rel="noopener noreferrer" class="linkedin-cta">
                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                        Follow Us on LinkedIn
                        <span class="linkedin-cta-arrow"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                    </a>
                </div>

                <div v-if="linkedinPosts.length" class="linkedin-stage" data-rv>
                    <div class="linkedin-head">
                        <div class="linkedin-profile">
                            <span class="linkedin-avatar">
                                <img src="/assets/img/logo-raya-polos.webp" alt="Raya Konstruksi">
                            </span>
                            <div class="linkedin-profile-meta">
                                <span class="linkedin-name">Raya Konstruksi International</span>
                                <span class="linkedin-sub">LinkedIn</span>
                            </div>
                        </div>
                        <a :href="linkedinUrl" target="_blank" rel="noopener noreferrer" class="linkedin-follow-btn">
                            <i class="bi bi-linkedin" aria-hidden="true"></i> Follow
                        </a>
                    </div>

                    <div class="linkedin-carousel">
                        <button type="button" class="linkedin-nav" @click="linkedinCarousel.scroll(1)" aria-label="Next posts">
                            <i class="bi bi-chevron-right" aria-hidden="true"></i>
                        </button>
                        <div ref="linkedinTrack" class="linkedin-track" @scroll="linkedinCarousel.update">
                            <div v-for="post in linkedinPosts" :key="post.id" class="linkedin-post">
                                <iframe :src="post.url" title="LinkedIn post"
                                    width="100%" height="550" frameborder="0" loading="lazy"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div v-if="linkedinPageCount > 1" class="linkedin-dots">
                        <button v-for="n in linkedinPageCount" :key="n" type="button" class="linkedin-dot"
                            :class="{ 'is-active': linkedinPage === n - 1 }" :aria-label="'Go to page ' + n"
                            @click="linkedinCarousel.go(n - 1)"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Threads Updates ── -->
    <section class="career-section career-section--light threads-section">
        <div class="container">
            <div class="threads-layout">
                <div class="threads-intro" data-rv>
                    <span class="threads-eyebrow"><span class="threads-eyebrow-bar" aria-hidden="true"></span>Our Social Media</span>
                    <i class="bi bi-threads threads-mark" aria-hidden="true"></i>
                    <h2 class="threads-heading">Follow Our Updates on<br><span>Threads</span></h2>
                    <p class="threads-lead">
                        Get the latest company updates, project highlights, and career opportunities from Raya Konstruksi.
                    </p>
                    <a :href="threadsUrl" target="_blank" rel="noopener noreferrer" class="threads-cta">
                        <i class="bi bi-threads" aria-hidden="true"></i>
                        Follow Us on Threads
                        <span class="threads-cta-arrow"><i class="bi bi-arrow-right" aria-hidden="true"></i></span>
                    </a>
                </div>

                <div v-if="threadsPosts.length" class="threads-stage" data-rv>
                    <div class="threads-head">
                        <div class="threads-profile">
                            <span class="threads-avatar">
                                <img src="/assets/img/logo-raya-polos.webp" alt="Raya Konstruksi">
                            </span>
                            <div class="threads-profile-meta">
                                <span class="threads-name">
                                    {{ threadsHandle.replace('@', '') }}
                                    <i class="bi bi-patch-check-fill" aria-label="Verified"></i>
                                </span>
                                <span class="threads-sub">Threads</span>
                            </div>
                        </div>
                        <a :href="threadsUrl" target="_blank" rel="noopener noreferrer" class="threads-follow-btn">
                            <i class="bi bi-threads" aria-hidden="true"></i> Follow
                        </a>
                    </div>

                    <div class="threads-carousel">
                        <button type="button" class="threads-nav" @click="threadsCarousel.scroll(1)" aria-label="Next posts">
                            <i class="bi bi-chevron-right" aria-hidden="true"></i>
                        </button>
                        <div ref="threadsTrack" class="threads-track" @scroll="threadsCarousel.update">
                            <div v-for="post in threadsPosts" :key="post.id" class="threads-card">
                                <iframe :src="post.embed" title="Threads post"
                                    width="100%" height="480" frameborder="0" loading="lazy"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div v-if="threadsPageCount > 1" class="threads-dots">
                        <button v-for="n in threadsPageCount" :key="n" type="button" class="threads-dot"
                            :class="{ 'is-active': threadsPage === n - 1 }" :aria-label="'Go to page ' + n"
                            @click="threadsCarousel.go(n - 1)"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Recruitment Fraud ── -->
    <section class="career-section career-section--light">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-4" data-rv>
                    <span class="section-eyebrow">Stay Safe</span>
                    <h2 class="section-title mt-2">Recruitment Fraud</h2>
                    <div class="section-divider"></div>
                    <p class="section-body">
                        If you have queries regarding the legitimacy of a recruitment offer you have received,
                        send your query to <strong>hrd@rayakonstruksi.com</strong>.
                    </p>
                    <Link :href="route('cyberInfo')" class="btn-primary mt-4">
                        Discover More <i class="bi bi-arrow-right"></i>
                    </Link>
                </div>
                <div class="col-lg-8" data-rv>
                    <div class="career-img-wrap">
                        <img src="/assets/img/fraud-5.webp" alt="Recruitment Fraud" class="career-img" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.career-section { padding: 80px 0; background: var(--paper); }
.career-section--light { background: var(--off); }
.career-section--light .section-eyebrow { color: var(--az); }
.career-section--light .section-eyebrow::before { background: var(--gold); }
.career-section--light .section-title { color: var(--eerie); }
.career-section--light .section-body { color: var(--muted); }
.career-section--light .section-body strong { color: var(--eerie); }
.mb-12  { margin-bottom: 48px; }
.mt-3   { margin-top: 16px !important; }
.mt-4   { margin-top: 20px !important; }
.gap-3  { gap: 12px !important; }

/* Benefit cards */
.career-benefit-card {
    display: flex; align-items: flex-start; gap: 14px;
    background: #fff; border: 1px solid var(--border);
    border-left: 4px solid var(--gold);
    border-radius: 10px; padding: 18px;
    transition: box-shadow 0.25s, transform 0.25s;
}
.career-benefit-card:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.career-benefit-icon {
    width: 42px; height: 42px; background: var(--navy);
    border-radius: 10px; display: flex; align-items: center;
    justify-content: center; font-size: 18px; color: var(--tint);
    flex-shrink: 0; transition: background 0.25s;
}
.career-benefit-card:hover .career-benefit-icon { background: var(--navy-dark); color: #FFFFFF; }
.career-benefit-title {
    font-family: var(--font-head); font-weight: 800; font-size: 14px;
    color: var(--eerie); margin: 0 0 4px;
    letter-spacing: 0;
}
.career-benefit-desc { font-size: 13px; color: var(--muted); margin: 0; line-height: 1.5; }

/* Images */
.career-img-wrap { border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-lg); }
.career-img { width: 100%; max-height: 420px; object-fit: cover; display: block; }

/* ── LinkedIn section ── */
.linkedin-section { overflow: hidden; }

.linkedin-layout {
    display: grid;
    grid-template-columns: minmax(0, 0.7fr) minmax(0, 1.7fr);
    gap: clamp(32px, 5vw, 72px);
    align-items: center;
}

.linkedin-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-family: "Figtree", sans-serif;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--eerie);
}
.linkedin-eyebrow-bar {
    width: 38px;
    height: 6px;
    border-radius: 999px;
    background: #f28c28;
}

.linkedin-mark {
    display: block;
    margin: 28px 0 20px;
    font-size: 56px;
    line-height: 1;
    color: #0a66c2;
}

.linkedin-heading {
    margin: 0 0 18px;
    font-family: "Figtree", sans-serif;
    font-size: clamp(32px, 4vw, 52px);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -0.01em;
    color: #0b2a5b;
}
.linkedin-heading span { color: #0a66c2; }

.linkedin-lead {
    max-width: 400px;
    margin: 0 0 30px;
    font-size: 16px;
    line-height: 1.65;
    color: var(--muted);
}

.linkedin-cta {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 13px 14px 13px 24px;
    background: #0a66c2;
    border: 1px solid #7fb0e8;
    border-radius: 999px;
    text-decoration: none;
    font-family: "Figtree", sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #fff;
    box-shadow: 0 10px 24px rgba(10, 102, 194, 0.22);
    transition: transform 0.22s ease, box-shadow 0.22s ease, background 0.22s ease;
}
.linkedin-cta:hover {
    background: #004182;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(10, 102, 194, 0.3);
}
.linkedin-cta > i { font-size: 17px; }
.linkedin-cta-arrow {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 50%;
    font-size: 12px;
    color: #fff;
}

.linkedin-stage {
    position: relative;
    padding: 18px;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: 0 18px 48px rgba(15, 23, 42, 0.08);
}

.linkedin-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 2px 2px 16px;
}
.linkedin-profile { display: flex; align-items: center; gap: 12px; min-width: 0; }
.linkedin-avatar {
    width: 48px;
    height: 48px;
    flex: 0 0 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border-radius: 50%;
    background: #0a66c2;
}
.linkedin-avatar img {
    width: 62%;
    height: auto;
    filter: brightness(0) invert(1);
    opacity: 0.95;
}
.linkedin-profile-meta { display: flex; flex-direction: column; gap: 2px; min-width: 0; }
.linkedin-name {
    font-family: "Figtree", sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--eerie);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.linkedin-sub { font-size: 13px; color: var(--muted); }

.linkedin-follow-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    gap: 8px;
    padding: 10px 18px;
    background: #0a66c2;
    border-radius: 999px;
    text-decoration: none;
    font-family: "Figtree", sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
    transition: background 0.2s ease;
}
.linkedin-follow-btn:hover { background: #004182; color: #fff; }

.linkedin-carousel { position: relative; }

.linkedin-track {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% - 14px) / 2);
    gap: 14px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
}
.linkedin-track::-webkit-scrollbar { display: none; }

.linkedin-post {
    min-width: 0;
    overflow: hidden;
    border: 1px solid var(--border);
    border-radius: 14px;
    background: #fff;
    box-shadow: var(--shadow-sm);
    scroll-snap-align: start;
}
.linkedin-post iframe {
    display: block;
    width: 100%;
    border: 0;
    background: #fff;
}

.linkedin-nav {
    position: absolute;
    top: 50%;
    right: -22px;
    transform: translateY(-50%);
    z-index: 3;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 1px solid var(--border);
    border-radius: 50%;
    background: #fff;
    color: var(--eerie);
    box-shadow: 0 10px 26px rgba(15, 23, 42, 0.16);
    cursor: pointer;
    transition: background 0.2s ease, transform 0.2s ease;
}
.linkedin-nav:hover { background: #f8fafc; transform: translateY(-50%) scale(1.04); }

.linkedin-dots {
    display: flex;
    justify-content: center;
    gap: 0;
    margin-top: 12px;
}
.linkedin-dot {
    position: relative;
    width: 32px;
    height: 44px;
    padding: 0;
    border: 0;
    background: transparent;
    cursor: pointer;
}
.linkedin-dot::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 8px;
    height: 8px;
    margin: -4px 0 0 -4px;
    border-radius: 50%;
    background: #cdd3dd;
    transition: background 0.2s ease, transform 0.2s ease;
}
.linkedin-dot.is-active::before { background: #0a66c2; transform: scale(1.15); }

@media (max-width: 991px) {
    .linkedin-layout { grid-template-columns: minmax(0, 1fr); }
    .linkedin-stage { margin-top: 40px; }
    .linkedin-nav { right: 4px; }
}
@media (max-width: 575px) {
    .linkedin-mark { font-size: 44px; margin: 22px 0 16px; }
    .linkedin-stage { padding: 12px; }
    .linkedin-track { grid-auto-columns: 100%; }
    .linkedin-follow-btn { padding: 9px 14px; font-size: 13px; }
    .linkedin-avatar { width: 42px; height: 42px; flex-basis: 42px; }
}

/* ── Threads section ── */
.threads-section { overflow: hidden; }

.threads-layout {
    display: grid;
    grid-template-columns: minmax(0, 0.8fr) minmax(0, 1.6fr);
    gap: clamp(32px, 5vw, 72px);
    align-items: center;
}

.threads-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-family: "Figtree", sans-serif;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--eerie);
}
.threads-eyebrow-bar {
    width: 38px;
    height: 6px;
    border-radius: 999px;
    background: #f28c28;
}

.threads-mark {
    display: block;
    margin: 28px 0 20px;
    font-size: 56px;
    line-height: 1;
    color: #0b1220;
}

.threads-heading {
    margin: 0 0 18px;
    font-family: "Figtree", sans-serif;
    font-size: clamp(32px, 4vw, 52px);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -0.01em;
    color: #0b2a5b;
}
.threads-heading span { color: #b45309; }

.threads-lead {
    max-width: 400px;
    margin: 0 0 30px;
    font-size: 16px;
    line-height: 1.65;
    color: var(--muted);
}

.threads-cta {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 13px 14px 13px 24px;
    background: #0b2a5b;
    border: 1px solid #f0a24b;
    border-radius: 999px;
    text-decoration: none;
    font-family: "Figtree", sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #fff;
    box-shadow: 0 10px 24px rgba(11, 42, 91, 0.22);
    transition: transform 0.22s ease, box-shadow 0.22s ease, background 0.22s ease;
}
.threads-cta:hover {
    background: #0a2350;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(11, 42, 91, 0.3);
}
.threads-cta > i { font-size: 17px; }
.threads-cta-arrow {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255, 255, 255, 0.35);
    border-radius: 50%;
    font-size: 12px;
    color: #fff;
}

.threads-stage {
    position: relative;
    padding: 18px;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: 0 18px 48px rgba(15, 23, 42, 0.08);
}

.threads-head {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 2px 2px 16px;
}
.threads-profile { display: flex; align-items: center; gap: 12px; min-width: 0; }
.threads-avatar {
    width: 48px;
    height: 48px;
    flex: 0 0 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border-radius: 50%;
    background: #0b2a5b;
}
.threads-avatar img {
    width: 62%;
    height: auto;
    filter: brightness(0) invert(1);
    opacity: 0.95;
}
.threads-profile-meta { display: flex; flex-direction: column; gap: 2px; min-width: 0; }
.threads-name {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: "Figtree", sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: var(--eerie);
}
.threads-name i { font-size: 14px; color: #1d9bf0; }
.threads-sub { font-size: 13px; color: var(--muted); }

.threads-follow-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 44px;
    gap: 8px;
    padding: 10px 18px;
    background: #0f1115;
    border-radius: 999px;
    text-decoration: none;
    font-family: "Figtree", sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
    flex-shrink: 0;
    transition: background 0.2s ease;
}
.threads-follow-btn:hover { background: #262a31; color: #fff; }

.threads-carousel { position: relative; }

.threads-track {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% - 28px) / 3);
    gap: 14px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
}
.threads-track::-webkit-scrollbar { display: none; }

.threads-card {
    min-width: 0;
    overflow: hidden;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 14px;
    box-shadow: var(--shadow-sm);
    scroll-snap-align: start;
}
.threads-card iframe {
    display: block;
    width: 100%;
    border: 0;
    background: #fff;
}

.threads-nav {
    position: absolute;
    top: 50%;
    right: -22px;
    transform: translateY(-50%);
    z-index: 3;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border: 1px solid var(--border);
    border-radius: 50%;
    background: #fff;
    color: var(--eerie);
    box-shadow: 0 10px 26px rgba(15, 23, 42, 0.16);
    cursor: pointer;
    transition: background 0.2s ease, transform 0.2s ease;
}
.threads-nav:hover { background: #f8fafc; transform: translateY(-50%) scale(1.04); }

.threads-dots {
    display: flex;
    justify-content: center;
    gap: 0;
    margin-top: 12px;
}
.threads-dot {
    position: relative;
    width: 32px;
    height: 44px;
    padding: 0;
    border: 0;
    background: transparent;
    cursor: pointer;
}
.threads-dot::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 8px;
    height: 8px;
    margin: -4px 0 0 -4px;
    border-radius: 50%;
    background: #cdd3dd;
    transition: background 0.2s ease, transform 0.2s ease;
}
.threads-dot.is-active::before { background: #0b2a5b; transform: scale(1.15); }

@media (max-width: 991px) {
    .threads-layout { grid-template-columns: minmax(0, 1fr); }
    .threads-stage { margin-top: 40px; }
    .threads-track { grid-auto-columns: calc((100% - 14px) / 2); }
    .threads-nav { right: 4px; }
}
@media (max-width: 575px) {
    .threads-mark { font-size: 44px; margin: 22px 0 16px; }
    .threads-stage { padding: 12px; }
    .threads-track { grid-auto-columns: 86%; }
    .threads-follow-btn { padding: 9px 14px; font-size: 13px; }
    .threads-avatar { width: 42px; height: 42px; flex-basis: 42px; }
}

/* ── Vacancy cards (dari DB) ── */
.vacancy-card {
    height: 100%;
    display: flex; flex-direction: column;
    background: #fff;
    border: 1px solid var(--border);
    border-left: 4px solid var(--gold);
    border-radius: 12px;
    padding: 22px;
    transition: box-shadow 0.25s, transform 0.25s;
}
.vacancy-card:hover { box-shadow: var(--shadow-md); transform: translateY(-3px); }
.vacancy-meta { display: flex; flex-wrap: wrap; gap: 8px; align-items: center; margin-bottom: 10px; }
.vacancy-type {
    font-family: var(--font-head); font-size: 10px; font-weight: 800;
    letter-spacing: 0.5px; text-transform: uppercase;
    background: var(--navy); color: var(--tint);
    padding: 4px 10px; border-radius: 50px;
}
.vacancy-loc { font-size: 12px; color: var(--muted); font-weight: 600; }
.vacancy-loc i { color: var(--gold); margin-right: 2px; }
.vacancy-title {
    font-family: var(--font-head); font-weight: 800;
    font-size: 18px; color: var(--eerie);
    margin: 0 0 10px; line-height: 1.3;
}
.vacancy-desc {
    flex-grow: 1;
    font-size: 13px; color: var(--muted); line-height: 1.55;
    max-height: 240px; overflow: hidden;
    padding-bottom: 6px; margin-bottom: 14px;
    position: relative;
    border-bottom: 1px solid var(--border);
}
.vacancy-desc::after {
    content: ""; position: absolute; left: 0; right: 0; bottom: 0;
    height: 34px;
    background: linear-gradient(transparent, #fff);
}
/* Konten v-html (RichEditor) dibatasi agar tidak merusak kartu */
.vacancy-desc :deep(p) { margin: 0 0 8px; }
.vacancy-desc :deep(p:last-child) { margin-bottom: 0; }
.vacancy-desc :deep(img) {
    display: block; max-width: 100%; height: auto;
    max-height: 180px; object-fit: cover;
    border-radius: 8px; margin: 8px 0;
}
.vacancy-desc :deep(strong) { color: var(--eerie); }
.vacancy-desc :deep(ul), .vacancy-desc :deep(ol) { padding-left: 18px; margin: 0 0 8px; }
.vacancy-desc :deep(h1), .vacancy-desc :deep(h2), .vacancy-desc :deep(h3), .vacancy-desc :deep(h4) {
    font-family: var(--font-head); font-size: 14px !important;
    color: var(--eerie); margin: 10px 0 6px;
}
.vacancy-apply {
    display: inline-flex; align-items: center; gap: 8px;
    align-self: flex-start;
    background: var(--navy); color: #fff;
    font-family: var(--font-body); font-size: 13px; font-weight: 600;
    letter-spacing: 0;
    padding: 10px 20px; border-radius: 50px; text-decoration: none;
    border: 2px solid var(--navy);
    transition: background 0.22s, transform 0.2s;
}
.vacancy-apply:hover {
    background: var(--navy-dark); border-color: var(--navy-dark); color: #FFFFFF;
    transform: translateY(-2px);
}

/* Tombol & aksi kartu */
.vacancy-actions { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; }
.vacancy-details {
    display: inline-flex; align-items: center; gap: 8px;
    background: transparent; color: var(--navy);
    font-family: var(--font-body); font-size: 13px; font-weight: 600;
    letter-spacing: 0;
    padding: 8px 18px; border-radius: 50px; text-decoration: none;
    border: 2px solid var(--navy);
    cursor: pointer;
    transition: background 0.22s, color 0.22s, transform 0.2s;
}
.vacancy-details:hover { background: var(--navy); color: #fff; transform: translateY(-2px); }

/* ── Modal detail ── */
.vacancy-modal .modal-content {
    border: 0; border-radius: 16px; overflow: hidden;
    box-shadow: var(--shadow-lg);
}
.vacancy-modal-head {
    background: var(--navy); color: #fff;
    padding: 26px 28px 22px; position: relative;
}
.vacancy-modal-head .btn-close { position: absolute; top: 16px; right: 18px; }
.vacancy-modal-head .vacancy-meta { margin-bottom: 8px; }
.vacancy-modal-head .vacancy-loc { color: rgba(255,255,255,0.75); }
.vacancy-modal-title {
    font-family: var(--font-head); font-weight: 800;
    font-size: 24px; color: #fff; margin: 0; line-height: 1.25;
}
.vacancy-modal-head .vacancy-type { background: rgba(255,255,255,0.16); color: #FFFFFF; }
.vacancy-modal .modal-body { padding: 26px 28px; }
.vacancy-modal-desc { font-size: 14px; color: var(--muted); line-height: 1.65; }
.vacancy-modal-desc :deep(p) { margin: 0 0 10px; }
.vacancy-modal-desc :deep(strong) { color: var(--eerie); }
.vacancy-modal-desc :deep(img) {
    display: block; max-width: 100%; height: auto;
    border-radius: 10px; margin: 12px 0;
}
.vacancy-modal-desc :deep(ul), .vacancy-modal-desc :deep(ol) { padding-left: 20px; margin: 0 0 10px; }
.vacancy-modal-desc :deep(h1), .vacancy-modal-desc :deep(h2), .vacancy-modal-desc :deep(h3), .vacancy-modal-desc :deep(h4) {
    font-family: var(--font-head); font-size: 16px !important;
    color: var(--eerie); margin: 14px 0 8px;
}
.vacancy-modal-foot {
    display: flex; justify-content: flex-end; gap: 12px;
    padding: 18px 28px;
    border-top: 1px solid var(--border);
    background: #fafbfc;
}
@media (max-width: 575.98px) {
    .vacancy-modal-foot { flex-direction: column-reverse; }
    .vacancy-modal-foot .vacancy-apply, .vacancy-modal-foot .vacancy-details { width: 100%; justify-content: center; }
}
</style>