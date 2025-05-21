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

    <Head title="LOTTE LINE WORK PACKAGES 03" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row" id="project1">
                <div class="col-md-12">
                    <div class=" row">
                        <div class="col-md-12">
                            <div class="breadcrumbs d-flex align-items-center"
                                style="background-image: url(/assets/img/projects/lotte/cover.jpg);">
                                <div class="container position-relative d-flex flex-column align-items-center"
                                    data-aos="fade">
                                    <br><br><br>
                                    <h3 class="text-white">LOTTE LINE WORK PACKAGES 03 - Manpower Supply</h3>
                                    <p class="rapih text-white">Manpower Supply work of BTX area for LINE
                                        PROJECT
                                    </p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe class="gmap_iframe" width="100%" height="400" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=-5.98141,105.9935982&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-3">
                            <center>
                                Project Capitalization
                                <h4> TBA</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                Capacity
                                <h4>140.000 H</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                Schedule
                                <h4>June 2024 – September 2024</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                Location
                                <h4>Cilegon, Indonesia</h4>
                            </center>
                        </div>
                    </div>
                    <hr style="color: #e6b105">
                    <div id="project-detail1">
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
                                <p class="rapih"> As a company specializing in manpower supply, scaffolding provision,
                                    and equipment for piping construction, we are dedicated to delivering exceptional
                                    services to our clients. With extensive experience and proven expertise, we ensure
                                    that every aspect of manpower provision and construction is managed with the highest
                                    level of professionalism. From selecting skilled labor to timely scheduling, we
                                    guarantee that each project receives meticulous and efficient handling. <br> <br>

                                    Precision, reliability, and dedication in managing manpower supply, scaffolding, and
                                    services for piping construction are the cornerstones of our reputation. With a
                                    customer satisfaction-oriented approach, we not only provide solutions tailored to
                                    project needs but also adhere to strict safety and quality standards. Continuous
                                    technical support and strong partnerships with leading suppliers ensure that every
                                    step from inquiry to project completion is conducted with transparency and high
                                    integrity.</p>
                                <b>Scope:</b>
                                <ul>
                                    <li>
                                        - Manpower Supply
                                    </li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <div style="border: dotted; min-height: 34vh;">
                                    <center>
                                        <br>
                                        <p>
                                            <u> PT Lotte Chemical Titan Tbk </u> <br>
                                            Owner<br><br>

                                            <u>SwadayaRAYA</u>
                                            <br>
                                            Client
                                            <br><br>
                                            <u><b>PT Makadia Grup Internasional</b></u><br>
                                            Contractor
                                        </p>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- gallery -->
                        <div>
                            <center>
                                <h3>Gallery</h3>
                            </center>
                            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/lotte-mps/lotte-mps (1).jpeg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/lotte-mps/lotte-mps (2).jpeg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/lotte-mps/lotte-mps (3).jpeg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/lotte-mps/lotte-mps (4).jpeg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/lotte-mps/lotte-mps (5).jpeg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/lotte/lotte-6.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
