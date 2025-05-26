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

    <Head title="Air Products SMIP Piping & Mechanical Construction Package" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="breadcrumbs d-flex align-items-center mb-5"
            style="background-image: url('/assets/projects/ap-3/hero.jpeg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h3 class="text-white pt-5 pb-5">Air Products SMIP Piping & Mechanical Construction Package</h3>
                <div class="row pt-2 text-white">
                    <div class="col-4 px-5">
                        <h4>
                            Capacity
                        </h4>
                        <ul>
                            <li>10,000 DI</li>
                        </ul>
                    </div>
                    <div class="col-4 px-5">
                        <h4>
                            Schedule
                        </h4>
                        October 2023 - June 2024
                    </div>
                    <div class="col-4 px-5">
                        <center>
                            <h4>
                                Location
                            </h4>
                            East Kalimantan, Indonesia
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
                                Air Products, a leading industrial gas company, partnered with us to provide an on-site
                                hydrogen gas generator unit for their client PT PSS Oleo one of subsidiary KLK Group
                                Berhad in Sangkulirang, East Kalimantan.
                                <br><br>
                                We expertise encompassed the entire project
                                lifecycle, from spool pipe fabrication and installation to mechanical, piping, and
                                structural works. Our team of over 100 skilled workers, including foremen,
                                welders, riggers, scaffolders, and support staff, with piping installation reach up to
                                10,000 D/I.
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
                                    <img src="/assets/projects/ap-3/gal-1.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 portfolio-item filter-remodeling">
                                <div class="portfolio-content h-100">
                                    <img src="/assets/projects/ap-3/gal-2.jpeg" class="img-fluid" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>