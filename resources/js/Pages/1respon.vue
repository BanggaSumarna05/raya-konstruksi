<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
import HseSlide from '@/Pages/1safety-hseSlide.vue'

// let hsePolicy = [
//     {
//         no: '01',
//         title: 'Embracing HSE as a core value and an integral part of our business culture',
//         no: '02',
//         title: 'Complying with applicable HSE laws and regulations and industry standards',
//         no: '03',
//         title: 'Managing HSE risk and opportunities related to our workplace and operations',
//         no: '04',
//         title: 'Demonstrating HSE ownership through visible informing, influencing and inspiring leadership',
//         no: '05',
//         title: 'Reinforcing safe work behaviours through consultation and participation by our workers',
//         no: '06',
//         title: 'Learning from what we and others do through sharing and collaboration',
//     }
// ]
</script>
<script>
export default {
    data() {
        return {
            Sdgs: [
                {
                    no: 'SDG 6',
                    title: 'Clean Water and Sanitation',
                    img: "/assets/img/sdg/Sustainable_Development_Goal_06CleanWaterSanitation.svg"
                },
                {
                    no: 'SDG 7',
                    title: 'Affordable and Clean Energy',
                    img: "/assets/img/sdg/Sustainable_Development_Goal_07CleanEnergy.svg"
                },
                {
                    no: 'SDG 9',
                    title: 'Industry, Innovation, and Infrastructure',
                    img: "/assets/img/sdg/Sustainable_Development_Goal_09Industry.png"
                },
                {
                    no: 'SDG 11',
                    title: 'Sustainable Cities and Communities',
                    img: "/assets/img/sdg/Sustainable_Development_Goal_11SustainableCities.svg"
                },

                {
                    no: 'SDG 12',
                    title: 'Responsible Consumption and Production',
                    img: "/assets/img/sdg/Sustainable_Development_Goal_12ResponsibleConsumption.svg"
                },
                {
                    no: 'SDG 13',
                    title: 'Climate Action',
                    img: "/assets/img/sdg/Sustainable_Development_Goal_13Climate.svg"
                }
            ]

        };
    }
};
</script>

<template>
    <!-- <VuePreloader background-color="black" color="black" transition-type="fade-up" :loading-speed="40"
        :transition-speed="600" @loading-is-over="loadingIsOver" @transition-is-over="transitionIsOver"></VuePreloader> -->

    <Head title="Home" />
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero" style="height: 100vh; min-height: 100vh; position: relative;">
        <div id="hero-carousel" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="6000"
            style="padding-bottom: 0px!important;">

            <!-- Slide 1 -->
            <div class="carousel-item active position-relative h-100" style="background-image: url('/assets/img/respon.jpg');
                   background-position: center right;
                   background-size: cover; background-repeat: no-repeat;">

                <!-- DARK OVERLAY -->
                <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.45);"></div>

                <!-- CONTENT -->
                <div class="container position-relative d-flex align-items-center justify-content-center h-100"
                    style="z-index: 2;">
                    <div class="row justify-content-center">

                        <div class="col-12 col-md-10 col-lg-8 text-center">
                            <h1 class="text-white fw-bold mb-4" style="line-height: 1.2; font-size: 3rem;">
                                Corporate Social Responsibility
                            </h1>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="services" class="alt-services section bg-primary2">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-4 col-lg-4 col-sm-12">
                    <strong>
                        CSR at Raya
                    </strong>
                    <br>
                    <h4 class="text-white">
                        Corporate Social Responsibility
                    </h4>
                </div>
                <div class="col-8 col-md-8 col-lg-8 col-sm-12">
                    Corporate Social Responsibility (CSR) at <strong>Raya Konstruksi</strong> is grounded in the
                    understanding that
                    business sustainability requires a balanced responsibility across economic performance, social
                    contribution, and environmental stewardship. CSR integrated into the <strong>RAYA
                        Konstruksi</strong> operational
                    and strategic framework to ensure long-term value creation for all stakeholders.
                </div>
            </div>
        </div>
    </section>

    <section id="safety" class="safety pb-10 bg-white">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <h4>Dual Responsibility</h4>
                    <p>
                        <strong>Raya Konstruksi</strong> recognizes its dual responsibility as a corporate entity.
                        The company is accountable not only for achieving sound economic performance, its
                        for fulfilling its responsibilities toward society and the environment.
                        <br><br>
                        Economic responsibility ensures business continuity, operational excellence, and value creation.
                        Concurrently, social and environmental responsibilities guide the company to operate
                        ethically, minimize negative
                        impacts, and contribute positively to the communities and ecosystems in which it operates.
                    </p>

                    <p>
                        CSR at <strong>Raya Konstruksi</strong> is designed to address the expectations and
                        responsibilities toward a
                        broad range of stakeholders, including employees, customers, suppliers, communities, and the
                        environment. The company is committed to fostering sustainable development through initiatives
                        that promote
                        social well-being, environmental conservation, and economic growth.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <img src="/assets/img/globe.png" alt=""
                        style="mask-image: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%); -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);">
                </div>
            </div>
        </div>
    </section>

    <section id="csr" class="csr pb-10 bg-whitesmoke">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h2 style="text-align: left;" class="text-primary">
                        <strong>
                            Sustainable Development Goals (SDGs) <br>
                            in Construction Industry
                        </strong>
                    </h2>
                </div>

                <div class="col-lg-8 col-sm-12">
                    <p>
                        <strong>The Sustainable Development Goals (SDGs) </strong>are highly relevant to the
                        construction industry, given
                        its significant contribution to energy consumption, resource utilization, and environmental
                        impact. As a key driver of infrastructure development, the construction sector plays a strategic
                        role in supporting sustainable economic growth while reducing environmental and social risks.
                        <br><br>
                        <strong>Raya Konstruksi</strong> is committed to advancing sustainable construction practices
                        through the
                        application of green building principles, improved energy and water efficiency, responsible use
                        of materials, and fair and ethical working practices. These efforts are essential to minimizing
                        negative environmental impact while enhancing long-term value for society.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="csr-list" class="pb-10 bg-white">
        <div class="container">
            <div class="row gy-4 pt-4">
                <h4>Our initiatives directly support several priority SDGs, including:</h4>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-3" v-for="(item, index) in Sdgs" :key="index"
                    data-aos="fade-up" :data-aos-delay="(index + 1) * 100">
                    <div class="card bg-white h-100 shadow-sm border-0 overflow-hidden">
                        <img :src="item.img" alt="SDG" class="" style="object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>