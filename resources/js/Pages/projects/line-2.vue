<script setup>
import { Head, Link } from '@inertiajs/vue3';
new PureCounter();
defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>

<template>

    <Head title="LINE Ethylene Plant GHU I, II & Clay Towers Catalyst Loading" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="breadcrumbs d-flex align-items-center mb-5"
            style="background-image: url('/assets/projects/line-2/hero.jpeg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h3 class="text-white pt-5 pb-5">LINE Ethylene Plant GHU I, II & Clay Towers Catalyst Loading</h3>
                <div class="row pt-2 text-white">
                    <div class="col-4 px-5">
                        <h4>
                            Capacity
                        </h4>
                        <ul>
                            <li>5 Reactors</li>
                        </ul>
                    </div>
                    <div class="col-4 px-5">
                        <h4>
                            Schedule
                        </h4>
                        November 2024 - December 2024
                    </div>
                    <div class="col-4 px-5">
                        <center>
                            <h4>
                                Location
                            </h4>
                            Cilegon, Indonesia
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row" id="project1">
                <div id="project-detail">
                    <div class="row">
                        <div class="col-8">
                            <center>
                                <b>Scope</b>
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                <b>Stakeholder</b>
                            </center>
                        </div>
                    </div>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-8">
                            <p class="rapih">
                                RAYA Construction Internasional has been entrusted with the task of loading fresh
                                catalyst
                                and inert balls into the BTX Reactors of the Gasoline Hydrotreating Unit (GHU) I and II,
                                as well as the Clay Tower at PT Lotte Chemical Indonesia, with KINE JO as Main
                                Contractor.
                                <br><br>
                                Our scope of work include loading 330 cubic meters of catalyst into 5
                                reactors within 20 days timeframe. To ensure optimal performance, we provided our client
                                with highly trained, licensed technicians, and utilized advanced vacuum and hopper
                                equipment. This combination of expertise and technology guarantees
                                precision, efficiency, and the highest standards of quality for reactor loading.
                            </p>
                        </div>
                        <div class="col-4">
                            <div style="border: dotted; min-height: 24vh;">
                                <center>
                                    <br>
                                    <p>
                                        <u>KINE JO</u> <br>
                                        Project Owner<br><br>
                                        <u><b>RAYA Construction Internasional</b></u><br>
                                        Contractor
                                    </p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- gallery -->
                    <div>
                        <center>
                            <h3>Gallery</h3>
                        </center>
                        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-lg-12 col-md-12 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="/assets/projects/line-2/gal-1.jpg" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>