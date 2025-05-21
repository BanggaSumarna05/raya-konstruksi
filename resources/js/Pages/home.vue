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
                            Makadia Group International
                        </h2>
                    </div>
                    <div class="col-lg-7">
                        <p data-aos="fade-up" data-aos-delay="2300" class="text-center">
                            With an eye on the horizon, our industrial construction company
                            continues to pave the way for a future where possibility knows no bounds.</p>
                        <br>
                        <!-- <div class="text-center" data-aos="fade-up" data-aos-delay="2400">
                            <p>
                                <b>Subsidiary Of</b>
                            </p>
                            <a href="https:/azureinvestama.com" target="_blank"><span><img class="image"
                                        src="/assets/img/azureinvestama.png" style="max-width: 28%"
                                        alt="Logo Azure Investama Group" title="Logo Azure Investama Group"></span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6200">
            <div class="carousel-item active" style="background-image: url('assets/img/hero-carousel/uoi-1 (5).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (9).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (1).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (2).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (3).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (4).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (7).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (9).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (10).jpeg')"></div>
            <div class="carousel-item" style="background-image: url('assets/img/hero-carousel/uoi-1 (3).jpeg')"></div>

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
                    Construction and Rental, our team of experts is
                    dedicated to helping you unlock the full potential of your business.</p>
            </div>
            <div class="row gy-4 justify-content-around">

                <div class="col-lg-3 col-md-6" data-aos="fade-down" data-aos-delay="100" st>
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Projects</h3><br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-down" data-aos-delay="100" st>
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/projects/msm/msm-13.jpg); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">+200 People</h3> <br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-down" data-aos-delay="100" st>
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/projects/lotte/lotte-5.png); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">+4,500 Asset</h3>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-down" data-aos-delay="100" st>
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/building.jpg); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">2 Office's</h3>
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
                            title="Enerco RPO International Project" :href="route('project-enerco-1')"
                            coords="221,135,19" shape="circle">
                        <area target="_self" alt="JADESTONE ENERGY AKATARA" title="JADESTONE ENERGY AKATARA"
                            :href="route('jadestone-akatara-mps')" coords="205,186,19" shape="circle">
                        <area target="_self" alt="LOTTE LINE WORK PACKAGES 03" title="LOTTE LINE WORK PACKAGES 03"
                            :href="route('lotte-line-wp03')" coords="264,294,23" shape="circle">
                        <area target="_self" alt="PERTAMINA RDMP RU-V" title="PERTAMINA RDMP RU-V"
                            :href="route('pertamina-rdmp-v')" coords="502,190,30" shape="circle">
                        <area target="_self" alt="MURIA SUMBA MANIS SUGAR FACTORY"
                            title="MURIA SUMBA MANIS SUGAR FACTORY" :href="route('sumba-msm')" coords="555,372,26"
                            shape="circle">
                        <area target="_self" alt="MECHANICAL SUPPORT - UNILEVER OLEOCHEMICAL" title="MECHANICAL SUPPORT - UNILEVER OLEOCHEMICAL" :href="route('unilever-1')" coords="121,104,26" 
                            shape="circle">
                    </map>
                </center>
            </div>
        </div>
    </section>
    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">
            <!-- comment here -->
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

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url('assets/img/projects/lotte-catalyst/catalyst (3).jpeg');">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Catalyst Loading</h4>
                                    <p class="rapih">Trusted partner in optimizing industrial processes and
                                        maximizing
                                        operational efficiency.
                                        <br><br>
                                    </p>
                                    <br>
                                    <a :href="route('service')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(assets/img/piping-1.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Steel Structure, Piping & Mechanical Construction</h4>
                                    <p class="rapih">Skilled engineers and workers work to transform your
                                        visions into reality, ensuring every detail reflects your unique
                                        aspirations.
                                    </p>
                                    <br>
                                    <a :href="route('service')" class="readmore stretched-link">Discover
                                        More <i class="bi bi-arrow-right"></i></a>
                                    <!-- <router-link :to="{ name: 'index' }">Login</router-link> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(/assets/img/projects/msm/cover.jpg);">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Manpower Supply</h4>
                                    <p class="rapih">Highly skilled and experienced engineers and dedicated
                                        workers collaborate
                                        passionately to turn your visionary ideas into tangible reality.</p>
                                    <br>
                                    <a :href="route('service')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(/assets/img/rental-1.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Equipment & Scaffolding Rental</h4>
                                    <!-- here -->
                                    <p class="rapih">Provide you with a vast fleet of
                                        high-quality machinery and tools
                                        that unlock the potential of every endeavour.</p>
                                    <br>
                                    <a :href="route('service')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(assets/img/pmc-1.jpg);">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Project Management Consultant</h4>
                                    <p class="rapih">With over 50 experienced and highly competent engineers
                                        strategically in Indonesia, we are well-equipped to provide tailored
                                        solutions and support for your upcoming endeavors.
                                        <br><br>
                                    </p>
                                    <br>
                                    <a :href="route('service')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

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

                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/logo-air-products.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/logo-enerco.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/logo-jadestone.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/logo-msm.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/kine-jo-logo.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/logo-asraya.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/logo-unilever.png" alt="">
                    </center>
                </div>
                <div class="col-3 col-sm-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <center>
                        <img class="greyscale" src="/assets/img/client/swg.png" alt="">
                    </center>
                </div>

            </div>
        </div>
    </section>
</template>
<style>
.greyscale {
    object-fit: scale-down;
    min-width: 20vh;
    max-width: 20vh;
    /* filter: grayscale(1); */
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