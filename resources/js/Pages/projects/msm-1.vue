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

    <Head title="Muria Sumba Manis Refinery Piping Construction Project" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="breadcrumbs d-flex align-items-center mb-5"
            style="background-image: url('/assets/projects/msm-1/hero.jpeg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h3 class="text-white pt-5 pb-5">Muria Sumba Manis Refinery Piping Construction Project</h3>
                <div class="row pt-2 text-white">
                    <div class="col-4 px-5">
                        <h4>
                            Capacity
                        </h4>
                        <ul>
                            <li>105.000 DI</li>
                        </ul>
                    </div>
                    <div class="col-4 px-5">
                        <h4>
                            Schedule
                        </h4>
                        January 2020 - June 2022
                    </div>
                    <div class="col-4 px-5">
                        <center>
                            <h4>
                                Location
                            </h4>
                            Sumba, Indonesia
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
                                In agrobusiness industry, we also awarded to work on 6,000-12,000 TCD sugar milling and
                                refining plant
                                by PT Muria Sumba Manis. Consisting of cane sugar mill, process house, 1x22MW
                                cogeneration Power Plant, and many supporting facilities, This project is in need for a
                                high-performing construction team.
                                <br /><br />
                                We managed to construct the whole plant construction
                                on budget and on time. Managing
                                over 300 direct worker consists of fitter, welder, painter, insulator, helpers, we able
                                to
                                construct 70,000 Dia-in of piping, from fabrication, welding, sand blasting, and
                                painting, also mechanical installation weighs 8,000 T and steel structure construction
                                weighs 30,000 T.
                            </p>
                        </div>
                        <div class="col-4">
                            <div style="border: dotted; min-height: 24vh;">
                                <center>
                                    <br>
                                    <p>
                                        <u>Muria Sumba Manis</u> <br>
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

                            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="/assets/img/projects/akatara/akatara (4).jpg" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>