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
    <div
        class="breadcrumbs d-flex align-items-center"
        style="background-image: url('/assets/img/breadcrumbs-bg.jpg')"
    >
        <div
            class="container position-relative d-flex flex-column align-items-center"
            data-aos="fade"
        >
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
                <div
                    class="col-lg-6 img-bg"
                    style="
                        background-image: url('/assets/img/projects/lotte-catalyst/catalyst (3).jpeg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: cover;
                        background-position: center;
                    "
                    data-aos="fade-keft"
                    data-aos-delay="100"
                ></div>
                <div
                    class="col-lg-5 d-flex flex-column justify-content-center"
                    data-aos="fade-right"
                >
                    <h2>Catalyst Loading</h2>
                    <p class="rapih">
                        We offer a wide range of catalyst loading services such
                        as soft/distance free fall vacuum unloading/loading; wet
                        unloading; sock loading; dense loading and catalyst
                        change out in normal ambient & under inert atmospheric
                        at various type of reactors. Activation of new catalyst
                        in reactors, reformers, converters is basic initial
                        process requirement for catalysts’ optimum performance.
                        And we may provide experienced process engineers to
                        supervise, analyze & report of new catalyst activation
                        progress that may take round the clock for several days.
                        We own access to pool of skilled catalyst technicians,
                        experienced catalyst supervisors, and certified catalyst
                        HSE officers.
                    </p>
                    <a :href="route('catalyst-loading')" class="readmore"
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
            </div>
            <br /><br /><br /><br /><br /><br />

            <div class="row justify-content-around gy-4" id="mechanical">
                <div
                    class="col-lg-5 d-flex flex-column justify-content-center"
                    data-aos="fade-right"
                >
                    <h2>Steel Structure, Piping & Mechanical Construction</h2>
                    <p class="rapih">
                        Our team of skilled engineers and workers work to
                        transform your visions into reality, ensuring every
                        detail reflects your unique aspirations. Let us be your
                        trusted partner on this exciting journey of creation,
                        where each milestones is a step toward shaping a better
                        future.
                    </p>
                    <br /><br /><br /><br /><br /><br /><br />
                    <hr />
                    <h4>Related Project</h4>
                    <br />
                    <div class="row">
                        <div
                            class="col-md-12 col-lg-6 col-xl-6"
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
                                                LOTTE LINE WORK <br />
                                                PACKAGES 03
                                            </h4>
                                            <br />
                                            <a
                                                :href="route('lotte-line-wp03')"
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
                            class="col-md-12 col-lg-6 col-xl-6"
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
                                                MECHANICAL SUPPORT - UNILEVER
                                                OLEOCHEMICAL
                                            </h4>
                                            <a
                                                :href="route('unilever-1')"
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
                <div
                    class="col-lg-6 img-bg"
                    style="
                        background-image: url('/assets/img/piping-1.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    "
                    data-aos="fade-left"
                    data-aos-delay="100"
                ></div>
            </div>
            <br /><br /><br /><br /><br /><br />
            <div class="row justify-content-around gy-4" id="manpower">
                <div
                    class="col-lg-6 img-bg"
                    style="
                        background-image: url('/assets/img/projects/msm/cover.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    "
                    data-aos="fade-left"
                    data-aos-delay="100"
                ></div>
                <div
                    class="col-lg-5 d-flex flex-column justify-content-center"
                    data-aos="fade-right"
                >
                    <h2>Manpower Supply</h2>
                    <p class="rapih">
                        Provide highly competent and comprehensive manpower
                        supply services tailored to meet your business needs
                        with the highest standards. Leveraging extensive
                        experience and deep industry knowledge, we deliver
                        precise and efficient workforce solutions. Our team of
                        professionals is dedicated to ensuring that every
                        candidate we supply not only meets the required
                        qualifications but also demonstrates superior skills and
                        work ethics. Trust us with your manpower needs and
                        experience the difference in quality and productivity
                        that we bring.
                    </p>
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
                                                <br /><br /><br />
                                            </h4>
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
                                                LOTTE LINE WORK PACKAGES 03 -
                                                Manpower Supply
                                            </h4>
                                            <a
                                                :href="route('lotte-line-wp03')"
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
                            style="padding-top: 22px"
                        >
                            <div class="card-item">
                                <div class="row">
                                    <div
                                        class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around"
                                    >
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                JADESTONE ENERGY AKATARA
                                                MAINTENANCE SERVICE <br /><br />
                                            </h4>
                                            <a
                                                :href="
                                                    route(
                                                        'jadestone-akatara-mps'
                                                    )
                                                "
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
                            style="padding-top: 22px"
                        >
                            <div class="card-item">
                                <div class="row">
                                    <div
                                        class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around"
                                    >
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                ENERCO RPO INTERNATIONAL
                                                MANAGEMENT & MAINTENANCE
                                            </h4>
                                            <br />
                                            <a
                                                :href="
                                                    route('project-enerco-1')
                                                "
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
            </div>
            <br /><br /><br /><br /><br /><br />
            <div class="row justify-content-around gy-4" id="eqipment">
                <div
                    class="col-lg-5 d-flex flex-column justify-content-center"
                    data-aos="fade-left"
                >
                    <h2>Scaffolding & Equipment Rental</h2>
                    <p class="rapih">
                        Our Equipment Rental services provide you with a vast
                        fleet of highquality machinery and tools that unlock the
                        potential of every endeavour. Whether it’s construction,
                        or industrial tasks, we have the right equipment for the
                        job. Our well-maintained and modern fleet of Heavy
                        Equipments, Genset, Scaffolding, and coupled with
                        flexible rental options, ensures you have the tools you
                        need when you need them, eliminating delays and boosting
                        productivity. Let us be your reliable partner,
                        empowering your projects with the right resources, so
                        you can build without limits and achieve greatness.
                    </p>
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
                                                LOTTE LINE WORK <br />
                                                PACKAGES 03
                                            </h4>
                                            <a
                                                :href="route('lotte-line-wp03')"
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
                                                MURIA SUMBA MANIS SUGAR FACTORY
                                            </h4>
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
                            style="padding-top: 22px"
                        >
                            <div class="card-item">
                                <div class="row">
                                    <div
                                        class="col-10 col-md-10 col-lg-10 col-xl-10 d-flex justify-content-around"
                                    >
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                MECHANICAL & PIPING PACKAGE -
                                                Air Products
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
                <div
                    class="col-lg-6 img-bg"
                    style="
                        background-image: url('/assets/img/rental-1.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    "
                    data-aos="fade-right"
                    data-aos-delay="100"
                ></div>
            </div>
            <br /><br /><br /><br /><br /><br />
            <div class="row justify-content-around gy-4" id="management">
                <div
                    class="col-lg-5 d-flex flex-column justify-content-center"
                    data-aos="fade-right"
                >
                    <h2>Project Management Consultant</h2>
                    <p class="rapih">
                        Our team of experienced and highly competent engineers
                        is committed to the successful execution of your
                        projects, regardless of complexity or scale. With a
                        wealth of technical expertise and practical knowledge,
                        we ensure that every aspect of your project is handled
                        with precision and professionalism. Boasting a team of
                        over 50 engineers who are strategically stationed across
                        Indonesia, we are well-positioned to deliver customized
                        solutions that meet your specific needs. From project
                        planning to implementation and ongoing support, we stand
                        ready to provide comprehensive assistance at every
                        stage, ensuring that your endeavors are completed on
                        time and within budget. Our local presence allows us to
                        respond swiftly to challenges, providing unparalleled
                        support and ensuring that your project objectives are
                        not only met but exceeded.
                    </p>
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
                                                ENERCO RPO INTERNATIONAL PROJECT
                                                MANAGEMENT CONSULTANT
                                                <br /><br /><br />
                                            </h4>
                                            <a
                                                :href="
                                                    route('project-enerco-1')
                                                "
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
                                                MURIA SUMBA MANIS PROJECT
                                                MANAGEMENT CONSULTANT
                                                <br />
                                                <br />
                                                <br />
                                            </h4>
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
                    </div>
                </div>
                <div
                    class="col-lg-6 img-bg"
                    style="
                        background-image: url('/assets/img/pmc-1.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    "
                    data-aos="fade-left"
                    data-aos-delay="100"
                ></div>
            </div>
        </div>
    </section>
</template>
