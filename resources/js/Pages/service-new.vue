<script setup>
import { Head, Link } from "@inertiajs/vue3";
new PureCounter();
defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>

<template>

    <Head title="Services" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Service</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Service</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Services</h2>
                <p class="text-center">
                    Excellence meets innovation to deliver unparalleled
                    solutions for all your needs. With a commitment to quality,
                    customer satisfaction, and continuous improvement, we are
                    dedicated to providing you with the best possible service to
                    help you achieve your goals and exceed your expectations.
                </p>
            </div>

            <div class="row justify-content-around gy-4" id="catalyst">
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/plant-maintenance.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: cover;
                        background-position: center;
                    " data-aos="fade-keft" data-aos-delay="100"></div>
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                    <h2>Plant Maintenance</h2>
                    <p class="rapih">
                        Driven by an unwavering commitment to client satisfaction, our skilled and dedicated
                        team consistently delivers exceptional results. Our expertise shines through in
                        successful project implementations across diverse sectors, including the demanding Oil &
                        Gas, Oleochemical, and Petrochemical industries.
                    </p>
                    <ul class="ul-2">
                        <li>Welding</li>
                        <li>Tank Maintenance & Cleaning</li>
                        <li>Cut & Re-Weld</li>
                        <li>Platform Fabrication</li>
                        <li>Rotating</li>
                        <li>Pumps</li>
                        <li>Cleaning Exchanger</li>
                        <li>Steam Tracing</li>
                        <li>Internal Parts Installation</li>
                    </ul>
                    <hr />
                    <h4>Related Project</h4>
                    <br />
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100"
                            style="padding-top: 22px">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                JADESTONE ENERGY AKATARA
                                                MAINTENANCE SERVICE <br /><br />
                                            </h4>
                                            <a :href="route(
                                                'jadestone-akatara-mps'
                                            )
                                                " class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100"
                            style="padding-top: 22px">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                ENERCO RPO INTERNATIONAL
                                                MANAGEMENT & MAINTENANCE
                                            </h4>
                                            <br />
                                            <a :href="route('project-enerco-1')
                                                " class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br />

            <div class="row justify-content-around gy-4" id="mechanical">
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                    <h2>Engineering & Manpower Supply</h2>
                    <p class="rapih">
                        Our team of experienced and highly competent engineers is dedicated to ensuring the
                        successful execution of your project. With over 50 engineers and hundreds direct work
                        force strategically located across Indonesia, we are well-equipped to provide tailored
                        solutions and support for your upcoming endeavors.
                    </p>
                    <ul class="ul-2">
                        <li>Utility Design</li>
                        <li>Pre-commisionning Support</li>
                        <li>Commissioning Support</li>
                        <li>Site Engineer</li>
                        <li>Welder SS & CS</li>
                        <li>Rigger</li>
                        <li>Fitter</li>
                        <li>Scaffolder</li>
                    </ul>
                    <br /><br /><br /><br /><br /><br /><br />
                    <hr />
                    <h4>Related Project</h4>
                    <br />
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                MURIA SUMBA MANIS SUGAR FACTORY
                                                <br /><br /><br />
                                            </h4>
                                            <a :href="route('sumba-msm')" class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                LOTTE LINE WORK PACKAGES 03 -
                                                Manpower Supply
                                            </h4>
                                            <a :href="route('lotte-line-wp03')" class="readmore stretched-link">Discover
                                                More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100"
                            style="padding-top: 22px">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                JADESTONE ENERGY AKATARA
                                                MAINTENANCE SERVICE <br /><br />
                                            </h4>
                                            <a :href="route(
                                                'jadestone-akatara-mps'
                                            )
                                                " class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100"
                            style="padding-top: 22px">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                ENERCO RPO INTERNATIONAL
                                                MANAGEMENT & MAINTENANCE
                                            </h4>
                                            <br />
                                            <a :href="route('project-enerco-1')
                                                " class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/engineering-manpower.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    " data-aos="fade-left" data-aos-delay="100"></div>
            </div>
            <br /><br /><br /><br /><br /><br />
            <div class="row justify-content-around gy-4" id="manpower">
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/piping-2.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    " data-aos="fade-left" data-aos-delay="100"></div>
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                    <h2>Construction & Fabrication</h2>
                    <p class="rapih">
                        Our team of skilled engineers and workers collaborate to bring your visions to life
                        across a range of disciplines, including Integrated Steel Structure Fabrication and
                        Installation, Piping Fabrication & Installation, and Mechanical Installation. We
                        meticulously craft every detail to reflect your unique aspirations.
                    </p>
                    <ul class="ul-2">
                        <li>Steel Structure Fabrication</li>
                        <li>Steel Structure Installation</li>
                        <li>Piping Fabrication</li>
                        <li>Piping Installation</li>
                        <li>Mechanical Erection</li>
                        <li>Tank Fabrication</li>
                        <li>Tank Installation</li>
                        <li>Equipment Rental</li>
                    </ul>
                    <hr />
                    <h4>Related Project</h4>
                    <br />
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                MURIA SUMBA MANIS SUGAR FACTORY
                                                <br /><br /><br />
                                            </h4>
                                            <a :href="route('sumba-msm')" class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                LOTTE LINE WORK PACKAGES 03 -
                                                Manpower Supply
                                            </h4>
                                            <a :href="route('lotte-line-wp03')" class="readmore stretched-link">Discover
                                                More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100"
                            style="padding-top: 22px">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                JADESTONE ENERGY AKATARA
                                                MAINTENANCE SERVICE <br /><br />
                                            </h4>
                                            <a :href="route(
                                                'jadestone-akatara-mps'
                                            )
                                                " class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6" data-aos="fade-down" data-aos-delay="100"
                            style="padding-top: 22px">
                            <div class="card-item">
                                <div class="row">
                                    <div class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                ENERCO RPO INTERNATIONAL
                                                MANAGEMENT & MAINTENANCE
                                            </h4>
                                            <br />
                                            <a :href="route('project-enerco-1')
                                                " class="readmore stretched-link">Discover More
                                                <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br /><br /><br /><br /><br />
            <div class="row justify-content-around gy-4" id="eqipment">
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-left">
                    <h2>Catalyst Handling</h2>
                    <p class="rapih">
                        Catalysts play a pivotal role in accelerating industrial processes, we address the
                        critical challenges of loading and unloading these compounds within reactors. To ensure
                        seamless catalyst activation at our clients’ facilities, we provide comprehensive
                        equipment and deploy highly skilled personnel.
                    </p>
                    <ul class="ul-2">
                        <li>Atmospheric Condition</li>
                        <li>Inert Condition</li>
                        <li>Sock Loading</li>
                        <li>Dense Loading</li>
                        <li>Unloading Catalyst</li>
                        <li>Licensed Technicians</li>
                        <li>Loading Equipment</li>
                    </ul>
                    <a :href="route('catalyst-loading')" class="readmore float-right"
                        >Discover More <i class="bi bi-arrow-right"></i
                    ></a>
                    <hr />
                    <h4>Related Project</h4>
                    <br />
                    <div class="row">
                        <div
                            class="col-md-6 col-lg-6 col-xl-6"
                            data-aos="fade-down"
                            data-aos-delay="100"
                        >
                            <div class="card-item">
                                <div class="row">
                                    <div
                                        class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around"
                                    >
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                MURIA SUMBA MANIS SUGAR FACTORY
                                            </h4>
                                            <br />
                                            <a
                                                :href="route('sumba-msm')"
                                                class="readmore stretched-link"
                                                >Discover More
                                                <i class="bi bi-arrow-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-6 col-lg-6 col-xl-6"
                            data-aos="fade-down"
                            data-aos-delay="100"
                        >
                            <div class="card-item">
                                <div class="row">
                                    <div
                                        class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around"
                                    >
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                CATALYSTS LOADING GHU I, II &
                                                CLAY BTX REACTOR
                                            </h4>
                                            <a
                                                :href="route('catalyst-1')"
                                                class="readmore stretched-link"
                                                >Discover More
                                                <i class="bi bi-arrow-right"></i
                                            ></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/catalyst-loading-3.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    " data-aos="fade-right" data-aos-delay="100"></div>
            </div>
            <br /><br /><br /><br /><br /><br />
        </div>
    </section>
</template>
