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
    <Head title="PERTAMINA RDMP RU-V BALIKPAPAN" />
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
                                style="background-image: url('/assets/img/projects/rdmp/rdmp-1.jpg');">
                                <div class="container position-relative d-flex flex-column align-items-center"
                                    data-aos="fade">
                                    <br><br><br>
                                    <h3 class="text-white">PERTAMINA RDMP RU-V BALIKPAPAN</h3>
                                    <p class="rapih text-white">Mechanical Work Package 03-2 in RDMP RU-V Balikpapan Project
                                    </p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe class="gmap_iframe" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=-1.2531176,116.8197322&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-4">
                            <center>
                                Scope
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                Schedule
                            </center>
                        </div>
                        <div class="col-4">
                            <center>Location</center>
                        </div>
                        <div class="col-4">
                            <center>
                                <h4>USD 86,000</h4>
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                <h4>May 2022 – July 2023</h4>
                            </center>
                        </div>
                        <div class="col-4">
                            <center>
                                <h4>Balikpapan, Indonesia</h4>
                            </center>
                        </div>
                    </div>
                    <hr style="color: #e6b105">
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
                    <div id="project-detail1">
                        <div class="row">
                            <div class="col-8">
                                <p class="rapih">
                                    RDMP JO Balikpapan is a consortium consists of Hyundai Construction and Rekayasa
                                    Industri, in charge as a Main Contractor of Refinery Development Master Plan (RDMP)
                                    RU-V, Balikpapan. <br> <br>
                                    <b>Scope :</b>
                                <ul>
                                    <li>
                                        Provides scaffolding and other equipment services for SwadayaRAYA to assist the
                                        construction of the plant
                                    </li>
                                </ul>
                                </p>
                            </div>
                            <div class="col-4">
                                <div style="border: dotted; min-height: 7vh;">
                                    <center>
                                        <br>
                                        <p>
                                            <u>PT Kilang Pertamina Internasional</u> <br>
                                            Owner
                                        </p>
                                        <br>
                                        <p>
                                            <u>PT SWADAYA RAYA</u> <br>
                                            Main Contractor
                                        </p>
                                        <br>
                                        <br>
                                        <p>
                                            <u><b>PT Makadia Grup Internasional</b></u><br>
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
                            <div class="row gy-4 portfolio-container aos-init aos-animate" data-aos="fade-up"
                                data-aos-delay="200" style="position: relative;">
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <div class="portfolio-content h-50 w-100">
                                        <img src="/assets/img/projects/rdmp/rdmp-1.png"
                                            style="max-width: 50vh; max-height: 50vh">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <div class="portfolio-content h-50 w-100">
                                        <img src="/assets/img/projects/rdmp/rdmp-2.png"
                                            style="max-width: 50vh; max-height: 50vh">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <div class="portfolio-content h-50 w-100">
                                        <img src="/assets/img/projects/rdmp/rdmp-3.png"
                                            style="max-width: 50vh; max-height: 50vh">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <div class="portfolio-content h-50 w-100">
                                        <img src="/assets/img/projects/rdmp/rdmp-4.png"
                                            style="max-width: 50vh; max-height: 50vh">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <div class="portfolio-content h-50 w-100">
                                        <img src="/assets/img/projects/rdmp/rdmp-5.png"
                                            style="max-width: 50vh; max-height: 50vh">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 portfolio-item">
                                    <div class="portfolio-content h-50 w-100">
                                        <img src="/assets/img/projects/rdmp/cover.png"
                                            style="max-width: 50vh; max-height: 50vh">
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