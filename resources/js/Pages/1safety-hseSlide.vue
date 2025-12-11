<template>
    <section class="hse-slider container my-5">

        <!-- Slider Area -->
        <div class="row align-items-stretch slider-wrapper no-gap">
            <!-- LEFT (TEXT BLOCK) -->
            <div class="col-lg-6 left-pane" :style="{ backgroundColor: activeSlide.bg }">
                <div class="p-5 text-white">
                    <h4 class="fw-bold">{{ activeSlide.title }}</h4>
                    <p class="mt-3 description" v-html="activeSlide.description"></p>
                </div>
            </div>

            <!-- RIGHT (IMAGE BLOCK) -->
            <div class="col-lg-6 right-pane">
                <img :src="activeSlide.image" class="img-fluid w-100 h-100 object-fit-cover" />
            </div>
        </div>

        <!-- SLIDER CONTROLS -->
        <div class="d-flex justify-content-center gap-2 my-4">
            <button class="btn bg-primary " @click="prevSlide">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="btn  bg-primary" @click="nextSlide">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <!-- TEXT NAVIGATION LIST -->
        <div class="row mt-4 list-wrapper">
            <div v-for="(item, index) in slides" :key="index" class="col-lg-3 col-md-4 col-sm-6 py-10 nav-item"
                :class="{ active: index === currentIndex }" @click="goToSlide(index)">
                <p><strong>{{ item.title }}</strong></p>
                <div class="line"></div>
            </div>
        </div>

    </section>
</template>

<script>
export default {
    data() {
        return {
            currentIndex: 0,
            slides: [
                // row 1
                {
                    title: "HSE Annual Letter of Assurance",
                    description:
                        `At the start of each year, every Business Unit Head issues an <strong>HSE Annual Letter of Assurance</strong> to the Group CEO. This letter reaffirms their commitment to HSE and pledges relentless effort to achieve our goal: <strong>zero harm to people, property, and the environment.</strong> This commitment is founded on <strong>RAYA's 5 Safety Principles</strong> and reinforced by visible, informed, and inspiring leadership.`,
                    image: "/assets/img/projects/msm/cover.jpg",
                    bg: "#2a4184"
                },
                {
                    title: "Hazard and Risk Assessment",
                    description:
                        `We systematically identify all hazards and assess the associated risks. Measures are then implemented based on the <strong>Hierarchy of Controls</strong> to mitigate these risks to the lowest reasonable level.`,
                    image: "/assets/img/projects/uoi-1/uoi-1 (8).jpeg",
                    bg: "#2a4184"
                },
                {
                    title: "Group HSE Expectations",
                    description:
                        `The Group HSE Expectations document clearly articulates top management's aspirations for HSE performance. It focuses on key management principles for an effective system: <strong>leadership, risk management, continuous improvement, and implementation.</strong> The document provides a framework of <strong>six (6) elements</strong> and <strong>seventy-four (74) sub-elements</strong> of accountability, aligned with ISO Standards. All <strong>RAYA</strong> Sites maintain certification to both <strong>ISO 45001:2018</strong> and <strong>ISO 14001:2015</strong>.`,
                    image: "/assets/img/projects/msm/msm-11.jpg",
                    bg: "#2a4184"
                },
                {
                    title: "Group HSE Standards",
                    description:
                        `Our Standards are documented requirements, rules, or instructions that fully support the <strong>RAYA</strong> HSE Policy by addressing specific activities, risks, threats, or impacts. <strong>Eight (8)</strong> core HSE Standards have been developed for group-wide implementation: <strong>HSE Performance Monitoring and Reporting, HSE Risk Management, Incident Investigation, Management of Change, Emergency Management, HSE Audit, HSE Consequence Management, and GHG Emissions.</strong> All Sites must develop and implement appropriate Safe Work Procedures based on these Standards.`,
                    image: "/assets/img/projects/uoi-1/uoi-1 (11).jpeg",
                    bg: "#2a4184"
                },

                // row 2
                {
                    title: "Think Safe, Act Safe - 12 Non-Compromising Rules",
                    description:
                        `These 12 Rules are designated as the <strong>life-saving rules</strong> for the <strong>RAYA</strong> Group of Companies. We maintain a <strong>zero-tolerance</strong> policy for any violation of these critical rules.`,
                    image: "/assets/img/projects/adsorbent/adsorbent (2).jpg",
                    bg: "#2a4184"
                },
                {
                    title: "HSE Competencies",
                    description:
                        `Personnel in HSE critical roles must possess the required <strong>knowledge, skills, and attitude</strong> to ensure work is carried out safely. We pay particular attention to the training, certification, and qualifications of these staff, often exceeding legal requirements, to ensure they remain competent in their duties. The ultimate objective is to foster an engaged, proactive workforce with a renewed sense of risk vulnerability.`,
                    image: "/assets/img/projects/akatara/akatara (2).jpg",
                    bg: "#2a4184"
                },
                {
                    title: "Risk Factor and Risk Containment",
                    description:
                        `The <strong>RAYA i-START Risk Factor and Risk Containment</strong> program, facilitated by DuPont, drives a safety culture transformation. It shifts workers' focus from 'safety' to <strong>'risk'</strong> and aims to proactively prevent incidents by avoiding violations of rules and procedures, especially the <strong>RAYA's 12 Non-Compromising Rules.</strong> These initiatives have been positively received through leadership engagement, training, and communication.`,
                    image: "/assets/img/projects/akatara/akatara (4).jpg",
                    bg: "#2a4184"
                },
                {
                    title: "Group HSE Standards (Repeat - Please confirm if this is intentional)",
                    description:
                        `Standards are documented requirements, rules or instructions that support the <strong>RAYA</strong> HSE Policy in relation to specific activities or to address specific risks, threats or impacts. <strong>Eight (8)</strong> HSE Standards have been developed for implementation across the Group. These are HSE Performance Monitoring and Reporting, HSE Risk Management, Incident Investigation, Management of Change, Emergency Management, HSE Audit, HSE Consequence Management and GHG Emissions. All Sites are expected to develop and implement appropriate Safe Work Procedures based on these Standards.`,
                    image: "/assets/img/projects/akatara/cover-1.jpg",
                    bg: "#2a4184"
                },

                // row 3
                {
                    title: "CARE Cards (Safety Observations)",
                    description:
                        `All workers at all Sites conduct daily <strong>Safety Observations</strong> (unsafe acts and unsafe conditions) using an online system. Insights derived from these observations (known as <strong>CARE Cards</strong>) are used to develop targeted campaigns for corrective actions and continuous improvement. Crucially, any competent, trained worker has the <strong>obligation and responsibility to stop work</strong> immediately if they deem a situation unsafe or detect imminent danger.`,
                    image: "/assets/img/projects/msm/cover.jpg",
                    bg: "#2a4184"
                },
                {
                    title: "Safety Induction",
                    description:
                        `A <strong>mandatory</strong> safety induction program is required for all new employees, contractors, and visitors, valid for a defined period. The content of this essential induction program is regularly reviewed and updated.`,
                    image: "/assets/img/projects/uoi-1/uoi-1 (8).jpeg",
                    bg: "#2a4184"
                },
                {
                    title: "Management Walkabouts",
                    description:
                        `We conduct <strong>Management Walkabouts</strong> to facilitate constructive engagement with our workers and contractors. These engagements are vital for the continuous development, implementation, evaluation, and improvement of the HSE management system and practices.`,
                    image: "/assets/img/projects/msm/msm-11.jpg",
                    bg: "#2a4184"
                },
                {
                    title: "HSE Performance and Monitoring",
                    description:
                        `<strong>RAYA</strong> is deeply committed to maintaining a proactive safety culture to prevent major incidents, thereby protecting people, the environment, and safeguarding against serious economic and reputational damage. This commitment is driven by top-level leadership and requires comprehensive commitment and capabilities across the company.
            
            HSE performance is assessed using a two-tiered approach:
            * <strong>Leading KPIs (15 activities):</strong> Termed <strong>RAYA Care Plus</strong>, these focus on proactive measures to prevent incidents.
            * <strong>Lagging KPIs (18 outcomes):</strong> These monitor actual outcomes, allowing us to learn from past incidents and undertake effective corrective and preventive actions.
            
            We have clear, firm expectations for recording and following up on all incidents. All incidents, including near misses, are promptly reported, investigated to identify root causes, and shared as <strong>HSE Alerts</strong> across the <strong>RAYA</strong> Group to ensure continuous learning and improvement.`,
                    image: "/assets/img/projects/msm/msm-7.jpg",
                    bg: "#2a4184"
                },
            ]
        };
    },

    computed: {
        activeSlide() {
            return this.slides[this.currentIndex];
        }
    },

    methods: {
        nextSlide() {
            this.currentIndex =
                (this.currentIndex + 1) % this.slides.length;
        },
        prevSlide() {
            this.currentIndex =
                (this.currentIndex - 1 + this.slides.length) %
                this.slides.length;
        },
        goToSlide(index) {
            this.currentIndex = index;
        }
    }
};
</script>

<style scoped>
.hse-slider {
    user-select: none;

    overflow: hidden;
}

.slider-wrapper {
    height: 50%;
}

.left-pane,
.right-pane {
    height: 100%;
}

.left-pane {
    display: flex;
    justify-content: center;
    flex-direction: column;
}

.right-pane img {
    object-fit: cover;
    height: 100%;
}

.nav-item {
    cursor: pointer;
}

.nav-item .nav-title {
    font-weight: 600;
    color: #333;
}

.nav-item .line {
    width: 100%;
    height: 2px;
    background-color: #ccc;
    transition: 0.3s ease;
}

.nav-item.active .nav-title {
    color: #2A4184;
    font-weight: 700;
}

.nav-item.active .line {
    background-color: #2A4184;
    height: 2.5px;
}

.description {
    font-size: 0.9rem;
    line-height: 1.4;
    opacity: 0.85;
}

/* Responsiveness */
@media (max-width: 768px) {
    .hse-slider {
        height: auto;
        /* biar tidak meledak di mobile */
    }

    .slider-wrapper {
        height: auto;
    }

    .left-pane,
    .right-pane {
        height: auto;
    }
}
</style>
