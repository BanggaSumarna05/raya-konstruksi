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

    <Head title="Projects" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Projects</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Projects</li>
            </ol>
        </div>
    </div>

    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Projects</h2>
                <p class="text-center">Professionalism meets unparalleled execution. With a dedicated team committed to
                    delivering
                    outstanding results, we pride ourselves on our ability to complete projects with precision &
                    excellence.</p>
            </div>

            <div class="row gy-4">

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        ADSORBENT LOADING PRESSURE - Air Products
                                    </h4>
                                    <p class="text-left">Mechanocal Support UOI, Sei Mangkei Indonesia.</p>
                                    <br>
                                    <a :href="route('catalyst-2')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/unilever-1/img-2.jpeg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        PLAN MAINTENANCE - UNILEVER OLEOCHEMICAL
                                    </h4>
                                    <p class="text-left">Mechanocal Support UOI, Sei Mangkei Indonesia.</p>
                                    <br>
                                    <a :href="route('unilever-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/lotte/cover-2.jpeg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        CATALYSTS LOADING GHU I, II & CLAY BTX REACTOR - LINE WP3 BTX
                                    </h4>
                                    <p class="text-left">Equipment Rental for Catalyst Loading LINE Project,
                                        Cilegon Indonesia.
                                    </p>
                                    <br>
                                    <a :href="route('catalyst-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/airproduct/cover-1.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">MECHANICAL & PIPING PACKAGE - Air Products</h4>
                                    <p class="text-left">Equipment Rental for MECHANICAL & PIPING PACKAGE Air Products,
                                        Sei
                                        Mangkei.
                                    </p>
                                    <br>
                                    <a :href="route('mpap-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/akatara/cover-1.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">JADESTONE ENERGY AKATARA MAINTENANCE SERVICE</h4>
                                    <p class="text-left">Operation & Maintenance for Batik Sugar Plant PT Jadesone.
                                    </p>
                                    <br>
                                    <a :href="route('jadestone-akatara-mps')" class="readmore stretched-link">Discover
                                        More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/lotte/lotte-4.png);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">LOTTE LINE WORK <br> PACKAGES 03 - Manpower Supply</h4>
                                    <p class="text-left">Manpower Supply of BTX area for LINE PROJECT.
                                    </p>
                                    <br>
                                    <a :href="route('lotte-line-wp03-mps')" class="readmore stretched-link">Discover
                                        More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/lotte/cover.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">LOTTE LINE WORK <br> PACKAGES 03 - Piping & Equipment Rental
                                    </h4>
                                    <p class="text-left">Mechanical, Piping & Equipment Rental work of BTX area for LINE
                                        PROJECT.
                                    </p>
                                    <a :href="route('lotte-line-wp03')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg" style="background-image: url(/assets/img/projects/msm/cover.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">MURIA SUMBA MANIS SUGAR PROJECT MANAGEMENT</h4>
                                    <p class="text-left">Project Management for MURIA SUMBA MANIS SUGAR.
                                    </p>
                                    <br><br>
                                    <a :href="route('sumba-msm-pmc')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg" style="background-image: url(/assets/img/projects/msm/msm-9.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">MURIA SUMBA MANIS SUGAR FACTORY - OPERATION & MAINTENNANCE</h4>
                                    <p class="text-left">Operation & Maintenance for Batik Sugar Plant PT Muria Sumba
                                        Manis.
                                    </p>
                                    <br><br>
                                    <a :href="route('sumba-msm')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/project-enerco-2.jpg);"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">ENERCO RPO INTERNATIONAL MAINTENANCE</h4>
                                    <p class="text-left">
                                        Operation & Maintenance for TDAE Plant Project PT Enerco RPO
                                        Internasional.
                                    </p>
                                    <br><br>
                                    <a :href="route('project-enerco-2')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/project-enerco-1.jpg);"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">ENERCO RPO INTERNATIONAL PROJECT MANAGEMENT CONSULTANT</h4>
                                    <p class="text-left">
                                        Project Management for TDAE Plant Project PT Enerco
                                        RPO
                                        Internasional.
                                        <br> <br>
                                    </p>
                                    <a :href="route('project-enerco-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>