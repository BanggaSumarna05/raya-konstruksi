<script setup>
import { Head, Link } from "@inertiajs/vue3";
new PureCounter();
defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>
<style>
.grayscale{
    filter: grayscale(1);
}
.grayscale:hover {
    -webkit-filter: grayscale(20%); /* Chrome 19+ & Safari 6+ */
    -moz-filter: grayscale(200%)
}

</style>

<template>

    <Head title="Leadership" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Leadership</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Leadership</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->

<!-- pak Robby -->
<section id="about" class="about">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-4" style="" data-aos="fade-left">                    
                    <img src="/assets/img/robby1.jpg" 
                    class="grayscale"
                    style="
                    max-width: 60vh;
                    max-height: 60vh;
                    margin-top: 6em;
                    "
                    alt="">
                </div>
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="section-header"
                    style="min-width: 300vh;"
                    >
                        <h2 class="inner-title" style="left: -55vh;">President Commissioners Message</h2>
                    </div>
                    <div class="our-story">
                        <!-- <h4>Est 2018</h4> -->
                        <div class="text-left">
                            <h3>Robby Satria Manurung</h3>
                            <span><i>President Commissioners of Makadia Group International</i></span>
                        </div>
                        <br />
                        <h5 class="rapih" style="padding-left: 2em;">
                            <q>
                                <i>
                                    in the industrial construction sector, I recognize that precision in planning and execution is fundamental to the success of any project. At Makadia, we are committed to delivering customized solutions that align with our clients' strategic objectives. Whether in infrastructure development, maintenance services, heavy equipment leasing, or workforce provision, our investment in the construction sector is driven by a vision of long-term growth and excellence. We believe that by fostering innovation and operational efficiency, we can create lasting value for our partners and stakeholders, ensuring the success of every project we undertake.
                                </i>
                            </q>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!-- end pak robby -->

    <!-- pak Jim -->
    <section id="about" class="about">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-8" data-aos="fade-right" style="z-index: 99;">
                    <br />
                    <div class="section-header" style="padding-bottom: 0px">
                        <h2 class="inner-title">Director Message</h2>
                    </div>
                    <div class="our-story">
                        <!-- <h4>Est 2018</h4> -->
                        <div class="text-left">
                            <h3>Jimmy P. Sanjaya</h3>
                            <span><i>Director of Makadia Group International</i></span>
                        </div>
                        <br /><br /><br /><br />
                        <h5 class="rapih">
                            <q>
                                <i>
                                    In a fast-paced environment like industrial
                                    construction, accuracy in planning and execution
                                    is key to project success. Therefore Makadia
                                    strives to provide tailor-made solutions to meet
                                    client needs. Whether it's construction
                                    services, maintenance services, heavy equipment
                                    rental, or providing labor, we are committed to
                                    making the project a success.
                                </i>
                            </q>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4" style="" data-aos="fade-left">
                    <img src="/assets/img/jimmy-3.png" 
                    class="grayscale"
                    style="
                    max-width: 60vh;
                    max-height: 60vh;
                    margin-left: -30%;
                    "
                    alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end pak Jim -->


    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Management</h2>
            </div>

            <div class="row gy-5 align-center">

                <div class="col-lg-4 col-md-6 member" data-aos="fade-right" data-aos-delay="600">
                    <center>
                        <a :href="route('suwoto')" type="button">
                        <div class="member-img">
                            <center>
                                <img src="/assets/img/Suwoto.png" class="img-fluid grayscale" alt="Suwoto">
                            </center>
                        </div>
                        <div class="member-info text-center">
                            <h4>Suwoto</h4>
                            <span>
                                Senior Manager Proposal & Estimator
                            </span>
                        </div>
                    </a>
                    </center>
                </div>

                <div class="col-lg-4 col-md-6 member" data-aos="fade-right" data-aos-delay="700">
                    <center>
                        <a :href="route('sutadi')" type="button">
                        <div class="member-img">
                            <center>
                                <img src="/assets/img/Sutadi Raharjo.png" class="img-fluid grayscale" alt="Sutadi Raharjo">
                            </center>
                        </div>
                        <div class="member-info text-center">
                            <h4>Sutadi Raharjo</h4>
                            <span>
                                Vice President Sales & Marketing
                            </span>
                        </div>
                    </a>
                    </center>
                </div>

                <div class="col-lg-4 col-md-6 member" data-aos="fade-right" data-aos-delay="800">
                    <center>
                        <a :href="route('henry')" type="button">
                        <div class="member-img">
                            <center>
                                <img src="/assets/img/Henry Adrianto.png" class="img-fluid grayscale" alt="Henry Adrianto">
                            </center>
                        </div>
                        <div class="member-info text-center">
                            <h4>Henry Adrianto</h4>
                            <span>
                                Vice President Business Operation
                            </span>
                        </div>
                    </a>
                    </center>
                </div>
                <!-- newline -->

            </div>
            <div class="row">   
                <div class="col-lg-4 col-md-6 member" data-aos="fade-right" data-aos-delay="900">
                    <center>
                        <a :href="route('anggi')" type="button">
                        <div class="member-img">
                            <center>
                                <img src="/assets/img/anggi1.png" class="img-fluid grayscale" alt="Anggi Simatupang">
                            </center>
                        </div>
                        <div class="member-info text-center">
                            <h4>Anggi Simatupang</h4>
                            <span>
                                Assistant Manager Industrial Marketing
                            </span>
                        </div>
                    </a>
                    </center>
                </div>

                <div class="col-lg-4 col-md-6 member" data-aos="fade-right" data-aos-delay="1000">
                    <center>
                        <a href="#" type="button">
                        <div class="member-img">
                            <center>
                                <img src="/assets/img/nada1.png" class="img-fluid grayscale" alt="Sutadi Raharjo">
                            </center>
                        </div>
                        <div class="member-info text-center">
                            <h4>Nada Shelawati</h4>
                            <span>
                                Estimator
                            </span>
                        </div>
                    </a>
                    </center>
                </div>

                <div class="col-lg-4 col-md-6 member" data-aos="fade-right" data-aos-delay="1100">
                    <center>
                        <a href="#" type="button">
                        <div class="member-img">
                            <center>
                                <img src="/assets/img/daffa1.png" class="img-fluid grayscale" alt="Henry Adrianto">
                            </center>
                        </div>
                        <div class="member-info text-center">
                            <h4>Daffa Luthfi Pujiantoro</h4>
                            <span>
                                Estimator
                            </span>
                        </div>
                    </a>
                    </center>
                </div>

                <div class="col-lg-4 col-md-6 member" data-aos="fade-right" data-aos-delay="1200">
                    <center>
                        <a href="#" type="button">
                        <div class="member-img">
                            <center>
                                <img src="https://media.istockphoto.com/id/530297753/vector/male-adult-avatar-profile-picture-vector.jpg?s=612x612&w=0&k=20&c=99qPabNtnHrfWjZ5wJqpnVnm7GdSVUWzy-YpW1NTc_Y=" class="img-fluid grayscale" alt="Anggi Simatupang">
                            </center>
                        </div>
                        <div class="member-info text-center">
                            <h4>Sirgio Demas Simajuntak</h4>
                            <span>
                                Industrial Marketing Officer
                            </span>
                        </div>
                    </a>
                    </center>
                </div>
            </div>
        </div>
    </section>
</template>
