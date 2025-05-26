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

    <Head title="LINE Ethylene Plant Project Structure, Mechanical, Piping Construction Project" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Our Project</h2>
        </div>
    </div>

    <!-- story -->
    <section id="about" class="about">
        <div class="breadcrumbs d-flex align-items-center mb-5"
            style="background-image: url('/assets/projects/line-1/hero.jpeg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
                <h3 class="text-white pt-5 pb-5">LINE Ethylene Plant Project Structure, Mechanical, Piping
                    Construction Project</h3>
                <div class="row pt-2 text-white">
                    <div class="col-4 px-5">
                        <h4>
                            Capacity
                        </h4>
                        <ul>
                            <li>170.000 DI</li>
                            <li>2.000 Ton Mechanical</li>
                            <li>2.500 Ton Structure</li>
                        </ul>
                    </div>
                    <div class="col-4 px-5">
                        <h4>
                            Schedule
                        </h4>
                        January 2023 - November 2023
                    </div>
                    <div class="col-4 px-5">
                        <center>
                            <h4>
                                Location
                            </h4>
                            Jambi, Indonesia
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
                            <p class="rapih"> Lotte Chemicals Indonesia has completed a new ethylene plant (LINE) in
                                Cilegon, Banten. The facility will enhance ethylene production for various industries.
                                Makadia Grup Internasional ensures the plant’s infrastructure meets the high-quality
                                standards and achieve smooth operation of the plant.
                                <br /><br />
                                We contributes to construct the
                                facilities for aromatics by-products: benzene, toluene, and xylene (BTX) process area:
                                installing steel structure, pipe rack, and mechanical equipment reaching up to 2,500 MT
                                of work volume, utilizing crane up to 200 MT, and piping installation +170,000 D/I work
                                of volume with peak 1000+ direct and indirect workers.
                            </p>
                        </div>
                        <div class="col-4">
                            <div style="border: dotted; min-height: 24vh;">
                                <center>
                                    <br>
                                    <p>
                                        <u>Lotte Chemical Indonesia</u> <br>
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