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
    <Head title="MURIA SUMBA MANIS SUGAR FACTORY" />
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
                                style="background-image: url('/assets/img/projects/msm/msm-11.jpg');">
                                <div class="container position-relative d-flex flex-column align-items-center"
                                    data-aos="fade">
                                    <br><br><br>
                                    <h3 class="text-white">MURIA SUMBA MANIS SUGAR FACTORY</h3>
                                    <p class="rapih text-white">Operation & Maintenance for Batik Sugar Plant PT Muria Sumba
                                        Manis
                                    </p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe class="gmap_iframe" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=-9.752607,120.564116&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-3">
                            <center>Project Value
                                <h4>USD 600,000</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center> Capacity
                                <h4>6,000 TCD</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center> Schedule
                                <h4>April 2022 - March 2024</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center> Location
                                <h4>Sumba, Indonesia</h4>
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
                                <p class="rapih">
                                    After the plant has been commissioned and ready to operates, Makadia
                                    ensuring the plat operates optimally by providing Operation and Maintenance
                                    service. We provides engineers and technicians integrated to client’s
                                    operation team on Processing Plant, Power Plant, and other utility area to
                                    assists and to provide professional suggestions for maintenance to maximize
                                    production rate. <br> <br>
                                    <b>Scope :</b>
                                <ul>
                                    <li>Providing experienced engineers to assist client’s daily operation</li>
                                    <li>Troubleshooting and performing reparation on-site to ensuring production
                                        rate
                                    </li>
                                    <li>Standing by 24/7 Preventing production loss and reducing downtime</li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-4">
                                <div style="border: dotted; min-height: 34vh;">
                                    <center>
                                        <br>
                                        <p>
                                            <u> PT Muria Sumba Manis</u> <br>
                                            Owner<br><br>
                                            <u><b>PT Makadia Grup Internasional</b></u><br>
                                            Operation and Maintenance Team<br><br>
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
                                        <img src="/assets/img/projects/msm/msm-1.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/msm/msm-2.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/msm/msm-4.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/msm/msm-5.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/msm/msm-8.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/msm/msm-9.jpg" class="img-fluid" alt="">
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