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

    <Head title="Air Products Mechanical Piping of UOl Indonesia 1 x PHG830 + 2 x PSA64-SOG Package" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="breadcrumbs d-flex align-items-center mb-5"
            style="background-image: url('/assets/projects/ap-1/hero.jpeg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h3 class="text-white pt-5 pb-5">Air Products Mechanical Piping of UOl Indonesia 1 x PHG830 + 2 x
                    PSA64-SOG Package</h3>
                <div class="row pt-2 text-white">
                    <div class="col-4 px-5">
                        <h4>
                            Capacity
                        </h4>
                        <ul>
                            <li>15,000 DI</li>
                        </ul>
                    </div>
                    <div class="col-4 px-5">
                        <h4>
                            Schedule
                        </h4>
                        January 2023 - July 2023
                    </div>
                    <div class="col-4 px-5">
                        <center>
                            <h4>
                                Location
                            </h4>
                            North Sumatra, Indonesia
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
                                Air Products one of the top market leader in the industrial gas business and currently
                                providing N2 and H2 On-Site Gas Generator Unit for Unilever Oleochemical Indonesia, in
                                Sei Mangkei, North Sumatera.
                                <br><br>
                                We manages to construct their facility from piping
                                fabrication and site installation, equipment erection, and project management. Our
                                piping installation reaches up to 15,000 D/I of work volume with 100+
                                workers and consist of Foreman, Welder, Rigger, Scaffolder, and all indirect labor.
                            </p>
                        </div>
                        <div class="col-4">
                            <div style="border: dotted; min-height: 24vh;">
                                <center>
                                    <br>
                                    <p>
                                        <u>Unilever Oleochemical</u> <br>
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

                            <div class="col-lg-6 col-md-12 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="/assets/projects/ap-1/hero.jpeg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="/assets/projects/ap-1/gal-1.png" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>