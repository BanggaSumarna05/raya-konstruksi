<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>
    <!-- <VuePreloader background-color="black" color="#FCD03B" transition-type="fade-up" :loading-speed="40"
        :transition-speed="600" @loading-is-over="loadingIsOver" @transition-is-over="transitionIsOver"></VuePreloader> -->

    <Head title="Home" />
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">


        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-item" style="background-image: url('assets/img/hero-carousel/uoi-1 (2).jpeg')"></div>
            <div class="carousel-item" style="background-image: url('assets/img/hero-carousel/uoi-1 (5).jpeg')">
            </div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (9).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/adsorbent (4).jpg')">
            </div>

            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (3).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (4).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (9).jpeg')"></div>
            <div class="carousel-item " style="background-image: url('assets/img/hero-carousel/uoi-1 (10).jpeg')"></div>

            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/header-7.jpg)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/header-4.jpg)"></div>
            <div class="carousel-item " style="background-image: url(assets/img/hero-carousel/header-2.jpg)"></div>
            <div class="carousel-item " style="background-image: url(assets/img/hero-carousel/header-5.jpg)"></div>
            <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/header-6.jpg)">
            </div>
        </div>
    </section>

    <section id="services" class="services container">
        <div class="row">
            <div class="col-4">
                <h4>RAYA At A Glance</h4>
                <p>
                    RAYA is leading construction company based in Indonesia.
                    <br><br>
                    With multifaceted project management capabilities and a strong diverse workforce.
                    RAYA provides a full range of services in procurement, construction and maintenance
                    across the world.
                </p>
                <a href="#" rel="noopener noreferrer" class="btn-get-started">
                    Discover More
                </a>
            </div>
            <div class="col-8">
                <div class="px-5" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 10px;">
                    <div>
                        <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon1-1.png" alt=""
                            style="max-width:64px;max-height:64px;">
                    </div>
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">7</h3>
                            <p>
                                Years History
                            </p>
                        </div>
                    </div>
                    <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon2.png" alt=""
                        style="max-width:64px;max-height:64px;">
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">1</h3>
                            <p>
                                Group Offices
                            </p>
                        </div>
                    </div>
                    <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon3.png" alt=""
                        style="max-width:64px;max-height:64px;">
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">1,000+</h3>
                            <p>
                                Group Employees
                            </p>
                        </div>
                    </div>
                    <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon4.png" alt=""
                        style="max-width:64px;max-height:64px;">
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">10</h3>
                            <p>
                                Power Plants
                            </p>
                        </div>
                    </div>
                    <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon5.png" alt=""
                        style="max-width:64px;max-height:64px;">
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">10+</h3>
                            <p>
                                Industrial Facilities Built
                            </p>
                        </div>
                    </div>
                    <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon6.png" alt=""
                        style="max-width:64px;max-height:64px;">
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">2.1m</h3>
                            <p>
                                Total Manhour 2025
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services px-5">
        <div class="container">
            <h4>
                News & Events
            </h4>
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
                            <br>
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
            <a href="#" rel="noopener noreferrer" class="btn-get-started">
                Discover More
            </a>
        </div>
    </section>

    <section id="locations" class="services section-bg px-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-4">
                    <h4>Our Locations</h4>
                    <p>
                        Our subsidiaries and offices across the globe.
                    </p>
                    <br>
                    <a href="#" rel="noopener noreferrer" class="btn-get-started">
                        Discover More
                    </a>
                </div>
                <div class="col-8">
                    <div class="responsive">
                        <center>
                            <img class="img-thumbnail" src="/assets/img/map.png" usemap="#image-map"
                                style="border: 0px;background-color: transparent;">
                            <map name="image-map">
                                <area target="_self" alt="Enerco RPO International Project"
                                    title="Enerco RPO International Project" :href="route('enerco-1')"
                                    coords="221,135,19" shape="circle">
                                <area target="_self" alt="JADESTONE ENERGY AKATARA" title="JADESTONE ENERGY AKATARA"
                                    :href="route('akatara-1')" coords="205,186,19" shape="circle">
                                <area target="_self" alt="LOTTE LINE WORK PACKAGES 03"
                                    title="LOTTE LINE WORK PACKAGES 03" :href="route('line-1')" coords="264,294,23"
                                    shape="circle">
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