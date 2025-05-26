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

    <Head title="Pertamina RU-V Balikpapan Turnaround Piping Package" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="breadcrumbs d-flex align-items-center mb-5"
            style="background-image: url('/assets/projects/pertamina-1/hero.jpeg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h3 class="text-white pt-5 pb-5">Pertamina RU-V Balikpapan Turnaround Piping Package</h3>
                <div class="row pt-2 text-white">
                    <div class="col-4 px-5">
                        <h4>
                            Capacity
                        </h4>
                        <ul>
                            <li>20,000 DI</li>
                        </ul>
                    </div>
                    <div class="col-4 px-5">
                        <h4>
                            Schedule
                        </h4>
                        July 2022 - August 2022
                    </div>
                    <div class="col-4 px-5">
                        <center>
                            <h4>
                                Location
                            </h4>
                            Balikpapan, Indonesia
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
                                With a well-known reputation for its piping fabrication and installation works Makadia
                                and SwadayaRAYA are appointed by JGC Indonesia to work on Pertamina’s RU-V Piping
                                Turnaround project, which includes
                                piping fabrication and construction on brownfield area.
                                <br><br>
                                This project is highly demanding project since needs to be done according to the plant
                                shutdown schedule. We managed to fabricate and install a total of 20,000 dia-in piping
                                in a very tight schedule, with more than 400+ workers is assigned to work on the project
                                24/7.
                            </p>
                        </div>
                        <div class="col-4">
                            <div style="border: dotted; min-height: 24vh;">
                                <center>
                                    <br>
                                    <p>
                                        <u>PT. JGC Indonesia</u> <br>
                                        Owner<br><br>
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
                                    <img src="/assets/projects/pertamina-1/gal-1.png" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>