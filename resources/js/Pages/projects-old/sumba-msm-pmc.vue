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
                                style="background-image: url('/assets/img/projects/msm/cover.jpg');">
                                <div class="container position-relative d-flex flex-column align-items-center"
                                    data-aos="fade">
                                    <br><br><br>
                                    <h3 class="text-white">MURIA SUMBA MANIS SUGAR PROJECT MANAGEMENT</h3>
                                    <p class="rapih text-white">Project Management for MURIA SUMBA MANIS SUGAR.
                                    </p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe class="gmap_iframe" width="100%" height="400" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=-9.752607,120.564116&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-3">
                            <center> Capacity
                                <h4>35 Project Management Team</h4>
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
                                    After the project has been completed and is ready for operation, Makadia ensures
                                    optimal performance by providing Project Management Consultancy services. We
                                    integrate our consultants with the client's operation team in various areas,
                                    including the Processing Plant, Power Plant, and other utility sectors, offering
                                    expert advice and professional recommendations to optimize operations and achieve
                                    maximum efficiency.<br> <br>
                                    <b>Project Management and Consultancy Services:</b>
                                <ul>
                                    <li>• Project status and progress evaluation</li>
                                    <li>• Commissioning and Start-up assist
                                    </li>
                                    <li>• Contract settlement process</li>
                                    <li>• Crash program design to speed up the project</li>
                                    <li>• Refinery sugar is available to be processed from
                                        sugar cane and raw sugar</li>
                                    <li>
                                        • Construct and commission boiler STG
                                        powered with bagasse and coal
                                    </li>
                                    <li>• Design, construct and commission coal
                                        handling system</li>
                                    <li>• Design, construct and commission of
                                        automatic bagging system
                                    </li>
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
                                            Contractor<br><br>
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
                                        <img src="/assets/img/projects/msm/msm-14.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/msm/msm-12.jpg" class="img-fluid" alt="">
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