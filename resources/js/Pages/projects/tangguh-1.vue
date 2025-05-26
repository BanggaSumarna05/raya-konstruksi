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

    <Head title="Tangguh Expansion Plant Preservation Work, CSTS JO" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="breadcrumbs d-flex align-items-center mb-5"
            style="background-image: url('/assets/projects/tangguh-1/hero.jpeg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h3 class="text-white pt-5 pb-5">Tangguh Expansion Plant Preservation Work, CSTS JO</h3>
                <div class="row pt-2 text-white">
                    <div class="col-4 px-5">
                        <h4>
                            Capacity
                        </h4>
                        <ul>
                            <li>11,4 MMSCFD</li>
                        </ul>
                    </div>
                    <div class="col-4 px-5">
                        <h4>
                            Schedule
                        </h4>
                        May 2020 - December 2020
                    </div>
                    <div class="col-4 px-5">
                        <center>
                            <h4>
                                Location
                            </h4>
                            Tangguh, Indonesia
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
                                CSTS JO plays a crucial role as a key player within the Engineering, Procurement, and
                                Construction (EPC)
                                Project for Tangguh LNG, a significant undertaking in the energy sector. Our specific
                                contribution involves
                                providing comprehensive support for the essential preservation work required across the
                                entire LNG plant facility. The sheer scale of this construction and maintenance endeavor
                                necessitates a substantial and skilled workforce. Indeed, over 50 professionals were
                                actively engaged on-site to ensure the integrity and longevity of the plant.
                                <br><br>
                                These
                                dedicated individuals likely encompassed a range of specialized roles, including
                                experienced rigger engineers responsible for the safe lifting and movement of heavy
                                components, skilled heavy equipment operators managing the large machinery critical to
                                the project, and a variety of essential support personnel ensuring the smooth operation
                                of all activities.
                            </p>
                        </div>
                        <div class="col-4">
                            <div style="border: dotted; min-height: 24vh;">
                                <center>
                                    <br>
                                    <p>
                                        <u>BP P.L.C</u> <br>
                                        Project Owner<br><br>
                                        CSTS JO<br>
                                        Main Contractor
                                        <br><br>
                                        <u><b>RAYA Construction Internasional</b></u><br>
                                        Sub Contractor
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
                                    <img src="/assets/projects/tangguh-1/gal-1.jpeg" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>