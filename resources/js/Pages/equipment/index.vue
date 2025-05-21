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
.iconx {
    height: 7vh;
    width: 7vh;
    display: block;
    padding: 1vh;
}
</style>

<template>

    <Head title="Equipments" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Equipments</h2>
            <ol>
                <li><a :href="route('index')">Home</a></li>
                <li>Equipments</li>
            </ol>
        </div>
    </div>

    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header" data-aos="fade-down" data-aos-delay="100">
                <h2>Why Us</h2>
            </div>

            <div class="row gy-4 justify-content-around">

                <div class="col-lg-4 col-md-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/assets/img/breadcrumbs-bg.jpg'); background-position: cover;background-position: center; background-size: cover; border-radius: 7px;">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Rental Service</h3>
                            <br>
                            <p class="rapih">
                                Our marketing and customer service team wholeheartedly serves customers from unit
                                selection, unit testing, contract creation to unit delivery to the project location.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/assets/img/asset.jpg'); background-position: cover;background-position: center; background-size: cover; border-radius: 7px;">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">+30 Best Units</h3>
                            <br>
                            <p class="rapih">
                                If you need rentals for a specific period, we offer flexible timing to accommodate your
                                needs.
                                Our quality determines the prices we offer, ensuring reliability and utmost protection.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/assets/img/eq1.jpeg'); background-position: cover;background-position: center; background-size: cover; border-radius: 7px;">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Well-maintained Units</h3>
                            <br>
                            <p class="rapih">
                                If you need rentals for a specific period, we offer flexible timing to accommodate your
                                needs.
                                Our quality determines the prices we offer, ensuring reliability and utmost protection.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Equipments</h2>
                <p class="text-center">Professionalism meets unparalleled execution. With a dedicated team committed to
                    delivering
                    outstanding results, we pride ourselves on our ability to complete equipments with precision &
                    excellence.</p>
            </div>
            <div class="row gy-4">

                <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url('/assets/img/equipment/rough terrain.jpg');"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Rough Terrain</h4>
                                    <p class="rapih">Rough terrain cranes are mobile cranes that are designed to
                                        maneuver
                                        over many different types of surfaces.
                                        <br><br><br><br>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url('/assets/img/equipment/terrain crane.jpg');"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Terrain Crane</h4>
                                    <p class="rapih">Specialised mobile crane designed to operate in demanding and
                                        uneven
                                        terrains typically across construction sites.
                                        <br><br>
                                    </p>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url('/assets/img/equipment/crawler crane.jpg');"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Crawler Crane</h4>
                                    <p class="rapih">A crawler crane is a type of mobile crane that is distinguished by its
                                        tracked undercarriage, resembling a tank.
                                        <br><br>
                                    </p>
                                    <br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url('/assets/img/equipment/terrain crane.png');"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Truck Mounted Crane</h4>
                                    <p class="rapih">Heavy construction machine built for the purpose of lifting,
                                        lowering,
                                        and adjusting heavy material in ports, industrial sites, and road constructions.
                                        <br><br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg" style="background-image: url('/assets/img/equipment/skylift.png');">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Skylift Crane</h4>
                                    <p class="rapih">Skylift crane refers to a type of crane designed for lifting and moving
                                        heavy loads, typically used in construction, manufacturing.
                                        <br><br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg" style="background-image: url('/assets/img/equipment/excavator.jpg');">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Excavator</h4>
                                    <p class="rapih">An excavator is a heavy construction machine used primarily for digging
                                        trenches, foundations, and holes. It consists of a boom, dipper (or stick), bucket,
                                        and cab mounted.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg" style="background-image: url('/assets/img/equipment/towercrane.jpg');">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Tower Crane</h4>
                                    <p class="rapih">Type of lifting machine commonly used in
                                        construction to lift heavy materials and equipment to great heights.
                                        <br><br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url('/assets/img/equipment/scaffolding tube.jpg');">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Scaffolding Tube</h4>
                                    <p class="rapih">Cylindrical structural component used in construction to assemble
                                        scaffolding structures. These tubes are typically made of steel or aluminum.
                                        <br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url('/assets/img/equipment/generator.png');">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Generator</h4>
                                    <p class="rapih">typically involves several key components and processes, whether
                                        it's a
                                        small portable generator or a large industrial generator
                                        <br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url('/assets/img/equipment/welding inverter.png');">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">Welding Inverter</h4>
                                    <p class="rapih">Welding equipment used for joining metals together using the
                                        welding
                                        process. Welding machines that operate on alternating current
                                        (AC)
                                        <br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="color: #e6b105">
            <h5>
                Looking for more options? You can access our catalog <a :href="route('ecatalogue')" target="_blank"
                    rel="noopener noreferrer"> Here</a>
            </h5>
        </div>
    </section>
</template>