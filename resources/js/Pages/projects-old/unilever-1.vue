<script setup>
import { Head, Link } from '@inertiajs/vue3';
new PureCounter();
defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>
<style>
.filter-remodeling{
    size: contain;
}</style>

<template>

    <Head title="MECHANICAL SUPPORT - UNILEVER OLEOCHEMICAL" />
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
                                style="background-image: url('/assets/img/projects/unilever-1/img-2.jpeg');">
                                <div class="container position-relative d-flex flex-column align-items-center"
                                    data-aos="fade">
                                    <br><br><br>
                                    <h3 class="text-white">MECHANICAL SUPPORT - UNILEVER OLEOCHEMICAL</h3>
                                    <p class="rapih text-white">Mechanocal Supoprt Construction</p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe class="gmap_iframe" width="100%" height="400" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=3.1365317,99.3474369&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-4">
                            <center>
                                Capacity
                                <h4>1.056 Manhours</h4>
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                Schedule
                                <h4>
                                    December 2024 - January 2025 </h4>
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                Location
                                <h4>Sei Mangkei, Indonesia</h4>
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
                                    Makadia, renowned for its expertise in manpower supply, was selected by UOI to
                                    undertake a critical aspect of their Turnaround project: Mechanical Support Open
                                    Manhole [Shutdown]. 
                                    <br>
                                    <br>
                                    This project was subject to stringent time constraints, aligning
                                    with the plant's shutdown schedule. To ensure timely and efficient execution,
                                    Makadia deployed a specialized team equipped with electric torque wrenches. <br>
                                    Additionally, a dedicated workforce was assigned to the project on a 24/7 basis,
                                    guaranteeing round-the-clock operations and seamless project delivery.
                                </p>
                            </div>
                            <div class="col-4">
                                <div style="border: dotted; min-height: 34vh;">
                                    <center>
                                        <br>
                                        <p>
                                            <u>PT Unilever Indonesia Tbk. </u> <br>
                                            Project Owner<br>
                                            &dArr;<br>
                                            <u><b>PT Makadia Grup Internasional</b></u><br>
                                            -
                                        </p>
                                        <br>
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

                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/uoi-1/uoi-1 (1).jpeg"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (3).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (4).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (5).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>                                
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (9).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (10).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (11).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (6).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (8).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/uoi-1/uoi-1 (2).jpeg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
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