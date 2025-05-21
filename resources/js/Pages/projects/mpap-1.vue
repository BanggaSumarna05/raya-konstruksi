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

    <Head title="MECHANICAL & PIPING PACKAGE - Air Products" />
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
                                style="background-image: url('/assets/img/projects/airproduct/cover-1.jpg');">
                                <div class="container position-relative d-flex flex-column align-items-center"
                                    data-aos="fade">
                                    <br><br><br>
                                    <h3 class="text-white">MECHANICAL & PIPING PACKAGE - Air Products</h3>
                                    <p class="rapih text-white">Equipment Rental for MECHANICAL & PIPING PACKAGE Air
                                        Products, Sei
                                        Mangkei.
                                    </p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe class="gmap_iframe" width="100%" height="400" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=-0.5649586,102.9711527+(Jadestone%20Akatara)&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-4">
                            <center>
                                Capacity
                                <h4>756,000 Hours</h4>
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                Schedule
                                <h4>October - March 2025 </h4>
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
                                    Air Products Indonesia Gasses is in the process of
                                    constructing an Air Separation Unit Plant in Sei Mangkei,
                                    North Sumatra, with Makadia supporting SwadayaRAYA
                                    in the project execution. Makadia’s role involves
                                    providing equipment rental, material supply, tool supply,
                                    and procurement services to assist SwadayaRAYA
                                    throughout the project.
                                    <br><br>
                                <ul>
                                    <li>
                                        Provides heavy equipment such as crane,
                                        TMC, heavy duty genset, welding inverter,
                                        scaffolding, and material support.
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-4">
                                <div style="border: dotted; min-height: 34vh;">
                                    <center>
                                        <br>
                                        <p>
                                            <u>Air Products </u> <br>
                                            Project Owner<br><br>
                                            <u>SwadayaRAYA</u><br>
                                            Client
                                            <br><br>
                                            <u><b>PT Makadia Grup Internasional</b></u><br>
                                            Equipment Rental
                                        </p>
                                        <br>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div>
                            <center>
                                <h3>Gallery</h3>
                            </center>
                            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                                
                                <div class="col-lg-8 col-md-8 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/mpap/mpap1.jpg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/mpap/mpap2.jpg'"
                                            class="img-fluid" style="object-fit: contain;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img :src="'/assets/img/projects/mpap/mpap2.jpg'"
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