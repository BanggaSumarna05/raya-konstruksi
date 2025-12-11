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
            hsePolicy: [
                {
                    no: '01',
                    title: 'Embracing HSE as a core value and integral part of our business culture.'
                },
                {
                    no: '02',
                    title: 'Complying with all applicable HSE laws, regulations, and industry standards.'
                },
                {
                    no: '03',
                    title: 'Managing HSE risks and opportunities across our workplace and operations.'
                },
                {
                    no: '04',
                    title: 'Demonstrating HSE ownership through visible and inspiring leadership.'
                },
                {
                    no: '05',
                    title: 'Reinforcing safe work behaviour through consultation and participation.'
                },
                {
                    no: '06',
                    title: 'Learning and improving through shared insights and collaboration.'
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
            <div class="carousel-item active position-relative h-100" style="background-image: url('/assets/img/cover-plant.jpg');
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
                                Health, Safety and Environment (HSE)
                            </h1>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="services" class="alt-services section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-4 col-lg-4 col-sm-12">
                    <strong>
                        HSE at RAYA
                    </strong>
                    <br>
                    <h3 class="text-white">
                        Our vision is Target Zero –
                        no injuries, no property damage, no harm to the environment
                    </h3>
                </div>
                <div class="col-8 col-md-8 col-lg-8 col-sm-12">
                    The health and safety of our people, and integrity of our operations is our top priority. We
                    strongly believe that all incidents related to people, environment and assets can be prevented.
                    <br><br>
                    We focus on preventing personal injuries, work related illnesses and major accidents, and the goal
                    of Target Zero has become part of how we think and work, with a strong focus on continuous
                    improvement.
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-4 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card bg-white p-10 h-100">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div style="text-align: center; padding-bottom: 10%; border-bottom: 3px solid #2a4184;">
                                    <h1><b>0</b></h1>
                                </div>
                                <div style="text-align: center; padding-top: 10%;">
                                    <h4>Fatalities</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card bg-white p-10 h-100">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div style="text-align: center; padding-bottom: 10%; border-bottom: 3px solid #2a4184;">
                                    <h1><b>0</b></h1>
                                </div>
                                <div style="text-align: center; padding-top: 10%;">
                                    <h4>Lost Time Incident Frequency (LTIF) at the end of 2024</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card bg-white p-10 h-100">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div style="text-align: center; padding-bottom: 10%; border-bottom: 3px solid #2a4184;">
                                    <h1><b>0</b></h1>
                                </div>
                                <div style="text-align: center; padding-top: 10%;">
                                    <h4>Total Recordable Incident Frequency (TRIF) at the end of 2024</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="pt-10">
                The LTIF indicator measures the number of actual unintentional serious incidents per million working
                hours and includes number of fatalities and lost time injuries. The Total Reportable Injury Frequency
                (TRIF) indicator measures the number of fatalities, lost-time injuries, restricted work cases and
                medical treatment injuries per million working hours.
            </p>
        </div>
    </section>

    <section id="safety" class="safety pb-10 bg-primary2">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h4 style="text-align: center;" class="text-white"><strong>Safety is a<br>Core Value</strong></h4>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <p>
                        Our values embody the spirit and energy of <strong>RAYA</strong> at its best. They help us set
                        direction, and
                        they guide our decisions, actions and the way we interact with others. Our values express the
                        ideals we strive to live up to every day. Every company desires safe operations, but the
                        challenge is to translate this desire into action. Written rules, standards and procedures while
                        important and necessary, are not enough. Companies must develop a culture in which safety as a
                        value is embedded in every level of the workforce. In <strong>RAYA</strong> safety is a core
                        value.
                        <br><br>
                        Safety is positioned as the first of five pillars that forms the foundation of the company, with
                        people, profit, sustainability and digitalisation being the other four pillars. Our leaders are
                        expected to drive the development of a strong safety culture founded on our values, our
                        facilities must be well maintained at all times and procedures for safe operations must be in
                        place and followed.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="hse" class="hse pb-10 bg-whitesmoke">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h2 style="text-align: left;" class="text-primary">
                        <strong>
                            RAYA HSE <br>
                            POLICY
                        </strong>
                    </h2>
                </div>

                <div class="col-lg-8 col-sm-12">
                    <p>
                        The <strong>RAYA</strong> HSE Policy serves as a foundation document that provides guidance and
                        clear
                        expectations aimed at protecting and improving the health and safety of our workers, as well as
                        the environment and communities in which we operate.
                    </p>
                </div>
            </div>

            <div class="row gy-4 pt-4">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-2" v-for="(item, index) in hsePolicy" :key="index"
                    data-aos="fade-up" :data-aos-delay="(index + 1) * 100">
                    <div class="card bg-white p-10 h-100 w-80">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <div>
                                    <h1><b>{{ item.no }}</b></h1>
                                </div>
                                <div>
                                    <p><strong>{{ item.title }}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <HseSlide />


</template>