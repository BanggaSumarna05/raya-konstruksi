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
    <Head title="JADESTONE ENERGY AKATARA MAINTANCE SERVICE" />
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
                                style="background-image: url('/assets/img/projects/akatara/cover-1.jpg');">
                                <div class="container position-relative d-flex flex-column align-items-center"
                                    data-aos="fade">
                                    <br><br><br>
                                    <h3 class="text-white">JADESTONE ENERGY AKATARA MAINTANCE SERVICE</h3>
                                    <p class="rapih text-white">Operation & Maintenance Manpower & Services for Akatara
                                        Project Jadestone Energy (Lemang) Pte. Ltd.
                                    </p>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <iframe class="gmap_iframe" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=-0.5649586,102.9711527+(Jadestone%20Akatara)&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <hr style="color: #e6b105">
                    <div class="row">
                        <div class="col-3">
                            <center>
                                Project Capitalization
                                <h4>USD $1,000,000</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                Capacity
                                <h4>+200 MP </h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                Schedule
                                <h4>March 2024 - June 2024</h4>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                Location
                                <h4>Jambi, Indonesia</h4>
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
                                <p class="rapih"> Jadestone has an operated 100% interest in the Lemang PSC, located onshore
                                    Sumatra and close to major gas transportation infrastructure. The Lemang PSC includes
                                    the Akatara gas field, which was previously developed as oil field and then
                                    decommissioned. <br><br> Jadestone is pursuing a low-cost development of the field to
                                    produce its
                                    gas resources, condensate and LPG, based on efficient re-use of existing wells and
                                    infrastructure, thereby minimising incremental impact on the local environment. Several
                                    further initiatives to reduce GHG emissions and enhance the environmental performance of
                                    the Akatara development are being considered as part of the overall development.</p>
                            </div>
                            <div class="col-4">
                                <div style="border: dotted; min-height: 34vh;">
                                    <center>
                                        <br>
                                        <p>
                                            <u>PT Jadestone Energy </u> <br>
                                            Owner<br><br>
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
                                        <img src="/assets/img/projects/akatara/akatara (1).jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                                    <div class="portfolio-content h-100">
                                        <img src="/assets/img/projects/akatara/akatara (2).jpg" class="img-fluid" alt="">
                                    </div>
                                </div>

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
        </div>
    </section>
</template>