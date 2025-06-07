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
                            <h3 style="color:#fcd03b">6</h3>
                            <p>
                                Power Plants
                            </p>
                        </div>
                    </div>
                    <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon5.png" alt=""
                        style="max-width:64px;max-height:64px;">
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">5</h3>
                            <p>
                                Industrial Facilities Built
                            </p>
                        </div>
                    </div>
                    <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon6.png" alt=""
                        style="max-width:64px;max-height:64px;">
                    <div>
                        <div>
                            <h3 style="color:#fcd03b">8,000+</h3>
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
            <br>
            <div class="row ">

                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1100"
                    style="padding: 0 6px 12px 6px;">
                    <div class="card" style="width: 100%; border-radius: 0px; box-shadow: 0 4px 16px rgba(0,0,0,0.15);">
                        <img class="card-img-top" src="/assets/img/projects/lotte-catalyst/catalyst (4).jpeg"
                            alt="Card image cap" style="max-height: 30vh; object-fit: cover; width: 100%;" />
                        <div class="card-body">
                            <p
                                style="border-bottom: 3px solid #fcd03b; display: inline-block; margin-bottom: 18px; padding-bottom: 6px;">
                                2 Febuary 2025
                            </p>
                            <a :href="route('newsDetail')">
                                <h5 class="card-title text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
                            </a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque distinctio ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1100"
                    style="padding: 0 6px 12px 6px;">
                    <div class="card" style="width: 100%; border-radius: 0px; box-shadow: 0 4px 16px rgba(0,0,0,0.15);">
                        <img class="card-img-top" src="/assets/img/projects/lotte-catalyst/catalyst (4).jpeg"
                            alt="Card image cap" style="max-height: 30vh; object-fit: cover; width: 100%;" />
                        <div class="card-body">
                            <p
                                style="border-bottom: 3px solid #fcd03b; display: inline-block; margin-bottom: 18px; padding-bottom: 6px;">
                                2 Febuary 2025
                            </p>
                            <a :href="route('newsDetail')">
                                <h5 class="card-title text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
                            </a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque distinctio ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1100"
                    style="padding: 0 6px 12px 6px;">
                    <div class="card" style="width: 100%; border-radius: 0px; box-shadow: 0 4px 16px rgba(0,0,0,0.15);">
                        <img class="card-img-top" src="/assets/img/projects/lotte-catalyst/catalyst (4).jpeg"
                            alt="Card image cap" style="max-height: 30vh; object-fit: cover; width: 100%;" />
                        <div class="card-body">
                            <p
                                style="border-bottom: 3px solid #fcd03b; display: inline-block; margin-bottom: 18px; padding-bottom: 6px;">
                                2 Febuary 2025
                            </p>
                            <a :href="route('newsDetail')">
                                <h5 class="card-title text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
                            </a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque distinctio ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-right" data-aos-delay="1100"
                    style="padding: 0 6px 12px 6px;">
                    <div class="card" style="width: 100%; border-radius: 0px; box-shadow: 0 4px 16px rgba(0,0,0,0.15);">
                        <img class="card-img-top" src="/assets/img/projects/lotte-catalyst/catalyst (4).jpeg"
                            alt="Card image cap" style="max-height: 30vh; object-fit: cover; width: 100%;" />
                        <div class="card-body">
                            <p
                                style="border-bottom: 3px solid #fcd03b; display: inline-block; margin-bottom: 18px; padding-bottom: 6px;">
                                2 Febuary 2025
                            </p>
                            <a :href="route('newsDetail')">
                                <h5 class="card-title text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit</h5>
                            </a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque distinctio ...
                            </p>
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
        // this.resizeMap();
        // window.addEventListener('resize', this.resizeMap);
    },
    beforeDestroy() {
        // Hapus event listener saat komponen di-destroy
        // window.removeEventListener('resize', this.resizeMap);
    },
    methods: {
    }
};
</script>