<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="What We Do" />
    <section id="catalyst-loading" class="constructions mb-10" style="padding-top:10%">
        <div class="container" data-aos="fade-up">
            <h1 class="mb-5">What We Do</h1>
            <div class="row justify-content-around gy-4" id="construction" style="padding-top: 8vh; ">
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/piping-2.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    " data-aos="fade-left" data-aos-delay="100"></div>
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                    <h2 class="text-upper">
                        CONSTRUCTION & FABRICATION</h2>
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
                    </ul>
                    <a href="#" class="btn btn-get-started" style="max-width: 40%;">Discover
                        More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="row justify-content-around gy-4" id="catalyst-loading" style="padding-top: 15vh; ">
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-left">
                    <h2>
                        CATALYST LOADING</h2>
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
                    <a :href="route('catalyst-loading')" class="btn btn-get-started" style="max-width: 40%;">Discover
                        More <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/catalyst-loading-3.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    " data-aos="fade-right" data-aos-delay="100"></div>
            </div>


            <div class="row justify-content-around gy-4" id="plant-maintenance" style="padding-top: 15vh; ">
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/plant-maintenance.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: cover;
                        background-position: center;
                    " data-aos="fade-keft" data-aos-delay="100"></div>
                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-right">
                    <h2>PLANT MAINTENANCE</h2>
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
                    <a :href="route('plantMaintenance')" class="btn btn-get-started" style="max-width: 40%;">Discover
                        More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>


            <!-- <div class="row justify-content-around gy-4" id="engineering" style="padding-top: 15vh; padding-bottom: 8vh; ">
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
                    <a href="#" class="btn btn-get-started" style="max-width: 40%;">Discover
                        More <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-6 img-bg" style="
                        background-image: url('/assets/img/engineering-manpower.png');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                        background-size: cover;
                    " data-aos="fade-left" data-aos-delay="100"></div>
            </div> -->
        </div>
    </section>
</template>
<style>
.greyscale {
    object-fit: scale-down;
    justify-content: center !important;
    align-items: center !important;
}
</style>
<script>
export default {
    data() {
    },
    mounted() {
    },
    beforeDestroy() {
    },
    methods: {}
};
</script>