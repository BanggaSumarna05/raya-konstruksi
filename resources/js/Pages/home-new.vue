<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>
    <VuePreloader background-color="black" color="#FCD03B" transition-type="fade-up" :loading-speed="40"
        :transition-speed="600" @loading-is-over="loadingIsOver" @transition-is-over="transitionIsOver"></VuePreloader>

    <Head title="Home" />
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 data-aos="fade-down" data-aos-delay="2200">
                            RAYA CONSTRUCTION INTERNATIONAL
                        </h2>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-up" data-aos-delay="2300" class="text-center">
                            With an eye on the horizon, our industrial construction company
                            continues to pave the way for a future where possibility knows no bounds.</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6200">
            <div class="carousel-item active" style="background-image: url('assets/img/hero-carousel/uoi-1 (5).jpeg')">
            </div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (9).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/adsorbent (4).jpg')">
            </div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (2).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (3).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (4).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (9).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (10).jpeg')"></div>

            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/header-7.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/header-4.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/header-2.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/header-5.jpg)"></div>
            <!-- <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/header-1.jpg)"></div> -->
            <div class="carousel-item " style="background-image: url(assets/img/hero-carousel/header-6.jpg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <section id="services" class="services section-bg" style="padding-bottom: 0px;">
        <div class="container" data-aos="fade-up">
            <div class="section-header" data-aos="fade-down" data-aos-delay="100">
                <h2>Our Solutions</h2>
                <p class="text-center">We offer a comprehensive
                    range of services designed to address the diverse needs.
                    Construction, our team of experts is
                    dedicated to helping you unlock the full potential of your business.</p>
            </div>
            <div class="row gy-4 justify-content-around">

                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1100">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Projects</h3><br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1200">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/projects/msm/msm-13.jpg); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">People</h3> <br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1300">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/projects/lotte/lotte-5.png); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Asset</h3>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1400">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/building.jpg); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Office</h3>
                            <br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="services" class="services section-bg" style="padding-bottom: 0px">
        <div class="container" data-aos="fade-up">
            <div class="section-header" data-aos="fade-down" data-aos-delay="100" style="padding-bottom: 35px">
                <h2>Our Presence</h2>
            </div>
            <!-- map -->
            <div class="responsive">
                <center>
                    <img class="img-thumbnail" src="/assets/img/map.png" usemap="#image-map"
                        style="border: 0px;background-color: transparent;">
                    <map name="image-map">
                        <area target="_self" alt="Enerco RPO International Project"
                            title="Enerco RPO International Project" :href="route('enerco-1')" coords="221,135,19"
                            shape="circle">
                        <area target="_self" alt="JADESTONE ENERGY AKATARA" title="JADESTONE ENERGY AKATARA"
                            :href="route('akatara-1')" coords="205,186,19" shape="circle">
                        <area target="_self" alt="LOTTE LINE WORK PACKAGES 03" title="LOTTE LINE WORK PACKAGES 03"
                            :href="route('line-1')" coords="264,294,23" shape="circle">
                        <area target="_self" alt="PERTAMINA RDMP RU-V" title="PERTAMINA RDMP RU-V"
                            :href="route('pertamina-1')" coords="502,190,30" shape="circle">
                        <area target="_self" alt="MURIA SUMBA MANIS SUGAR FACTORY"
                            title="MURIA SUMBA MANIS SUGAR FACTORY" :href="route('msm-1')" coords="555,372,26"
                            shape="circle">
                        <area target="_self" alt="MECHANICAL SUPPORT - UNILEVER OLEOCHEMICAL"
                            title="MECHANICAL SUPPORT - UNILEVER OLEOCHEMICAL" :href="route('uoi-1')"
                            coords="121,104,26" shape="circle">
                    </map>
                </center>
            </div>
        </div>
    </section>

    <section id="features" class="features section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Services</h2>
                <p class="text-center">Excellence meets innovation to deliver unparalleled solutions for all your
                    needs.
                    With a
                    commitment to quality, customer satisfaction, and continuous improvement, we are
                    dedicated to
                    providing
                    you with the best possible service to help you achieve your goals and exceed your
                    expectations.
                </p>
            </div>
            <ul class="nav nav-tabs row  g-2 d-flex" role="tablist">

                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link show active" data-bs-toggle="tab" data-bs-target="#tab-1" aria-selected="true"
                        role="tab">
                        <h4 class="text-uppercase">Construction & Fabrication</h4>
                    </a>
                </li>
                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" aria-selected="true" role="tab">
                        <h4 class="text-uppercase">Catalyst Loading</h4>
                    </a>
                </li>
                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3" aria-selected="true" role="tab">
                        <h4 class="text-uppercase">Plant Maintenance</h4>
                    </a>
                </li>
                <li class="nav-item col-3" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4" aria-selected="true" role="tab">
                        <h4 class="text-uppercase">Engineering & Manpower Supply</h4>
                    </a>
                </li>

            </ul>

            <div class="tab-content">


                <div class="tab-pane active show" id="tab-1" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center aos-init aos-animate"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-uppercase">Construction & Fabrication</h3>
                            <p class="rapih">
                                Our team of skilled engineers and workers collaborate to bring your visions to life
                                across a range of disciplines, including Integrated Steel Structure Fabrication and
                                Installation, Piping Fabrication & Installation, and Mechanical Installation. We
                                meticulously craft every detail to reflect your unique aspirations.
                            </p>
                            <ul class="ul-2">
                                <li>Steel Structure Fabrication & Installation</li>
                                <li>Piping Fabrication & Installation</li>
                                <li>Mechanical Erection</li>
                                <li>Tank Fabrication & Installation</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200">
                            <img src="assets/img/construction-fabrication.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab-2" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center aos-init aos-animate"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-uppercase">Catalyst Handling</h3>
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
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200">
                            <img src="assets/img/catalyst-loading-3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab-3" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center aos-init aos-animate"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-uppercase">Plant Maintenance</h3>
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
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200">
                            <img src="assets/img/plant-maintenance.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="tab-4" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center aos-init aos-animate"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-uppercase">Engineering & Manpower Supply</h3>
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
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200">
                            <img src="assets/img/engineering-manpower.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">
            <!-- comment here -->
            <div class="section-header">
                <h2>Our Client</h2>
            </div>
            <div class="row gy-4">

                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1100">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/logo-air-products.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1200">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/logo-enerco.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1300">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/logo-jadestone.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1400">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/logo-msm.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1500">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/kine-jo-logo.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1600">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/logo-asraya.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1700">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/logo-unilever.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-6 col-lg-3" data-aos="fade-right" data-aos-delay="1800">
                    <center>
                        <img class="greyscale card-bg img-fluid" src="/assets/img/client/swg.png" alt="">
                    </center>
                </div>

            </div>
        </div>
    </section>
</template>
<style>
.greyscale {
    object-fit: scale-down;
    /* display: flex; */
    justify-content: center !important;
    align-items: center !important;
}
</style>
<script>
export default {
    data() {
    },
    mounted() {
        // Panggil fungsi resizeMap saat komponen di-mount
        this.resizeMap();
        window.addEventListener('resize', this.resizeMap);
    },
    beforeDestroy() {
        // Hapus event listener saat komponen di-destroy
        window.removeEventListener('resize', this.resizeMap);
    },
    methods: {
        // Fungsi untuk menyesuaikan koordinat area berdasarkan skala gambar
        resizeMap() {
            const img = this.$refs.image;
            const width = img.naturalWidth;
            const currentWidth = img.clientWidth;

            if (!width) return; // Jika gambar belum termuat, hentikan eksekusi

            const scale = currentWidth / width;

            // Sesuaikan koordinat area berdasarkan skala gambar
            this.areas = this.originalAreas.map(area => {
                const originalCoords = area.coords.split(',').map(Number);
                const scaledCoords = originalCoords.map(coord => coord * scale);
                return {
                    ...area,
                    coords: scaledCoords.join(',')
                };
            });
        }
    }
};
</script>

<style scoped>
/* Gambar dibuat responsif */
.imgmap1 {
    max-width: 100%;
    height: auto;
}
</style>