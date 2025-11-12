<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
import MapMultipleMarker from '@/Components/MapMultipleMarker.vue';

defineProps({ blogs: Array })

</script>

<template>
    <!-- <VuePreloader background-color="black" color="black" transition-type="fade-up" :loading-speed="40"
        :transition-speed="600" @loading-is-over="loadingIsOver" @transition-is-over="transitionIsOver"></VuePreloader> -->

    <Head title="Home" />
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-item active"
                style="background-image: url('assets/img/hero-carousel/hover-1-new.jpg'); background-position: top 100 center; background-size: cover;">
            </div>
            <div class="carousel-item" style="background-image: url('assets/img/hero-carousel/hover-2-new.jpg')">
            </div>
        </div>
    </section>

    <!-- <section id="services" class="services">
        <div class="container">
            <h2 class="pb-10">RAYA AT A GLANCE</h2>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
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
                <div class="col-sm-12 col-lg-8">
                    <div class="px-5 row">
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon1-1.png" alt=""
                                    style="max-width:64px;max-height:64px;">
                            </center>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <div>
                                    <h3 style="color:black">8</h3>
                                    <p>
                                        Years History
                                    </p>
                                </div>
                            </center>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon2.png" alt=""
                                    style="max-width:64px;max-height:64px;">
                            </center>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <div>
                                    <h3 style="color:black">20+</h3>
                                    <p>
                                        Projects
                                    </p>
                                </div>
                            </center>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <img src="https://jel.com.sg/wp-content/uploads/2020/11/icon4.png" alt=""
                                    style="max-width:64px;max-height:64px;">
                            </center>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <div>
                                    <h3 style="color:black">3</h3>
                                    <p>
                                        Catalyst Loading
                                    </p>
                                </div>
                            </center>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <img src="assets/img/worker.svg" alt=""
                                    style="max-width:64px;max-height:64px; color:red">
                            </center>
                        </div>
                        <div class="col-sm-6 col-lg-2">
                            <center>
                                <div>
                                    <h3 style="color:black">750+</h3>
                                    <p>
                                        Manpower
                                    </p>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="services" class="services section-bg">
        <div class="container">
            <h4>
                News & Events
            </h4>
            <br>
            <div class="row ">

                <div v-for="(blog, idx) in blogs" :key="blog.id" class="col-lg-3 col-md-6" data-aos="fade-right"
                    :data-aos-delay="1100 + idx * 100" style="padding: 0 6px 12px 6px;">
                    <a :href="route('newsDetail', blog.slug)">
                        <div class="card"
                            style="width: 100%; border-radius: 0px; box-shadow: 0 4px 16px rgba(0,0,0,0.15);">
                            <img class="card-img-top"
                                :src="blog.image ? `/storage/${blog.image}` : '/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'"
                                alt="Card image cap"
                                style="max-height: 30vh;min-height: 30vh; object-fit: cover; width: 100%;" />
                            <div class="card-body">
                                <p
                                    style="border-bottom: 3px solid black; display: inline-block; margin-bottom: 18px; padding-bottom: 6px;">
                                    {{ new Date(blog.published_at).toLocaleDateString('id-ID', {
                                        year: 'numeric', month: 'long',
                                        day: 'numeric'
                                    }) }}
                                </p>

                                <h5 class="card-title text-black">
                                    {{ blog.title }}
                                </h5>
                                <p class="card-text">
                                    {{ blog.content.replace(/<[^>]*>/g, '').slice(0, 56) + '...' }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <a :href="route('news')" rel="noopener noreferrer" class="btn-get-started">
                Discover More
            </a>
        </div>
    </section>

    <section id="locations" class="services pb-10">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h4>Our Locations</h4>
                    <p>
                        Our subsidiaries and offices across the indonesia.
                    </p>
                    <br>
                    <a :href="route('whoWeAre')" rel="noopener noreferrer" class="btn-get-started">
                        Discover More
                    </a>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="responsive">
                        <center>
                            <img class="img-thumbnail" src="/assets/img/map.png" usemap="#image-map"
                                style="border: 0px;background-color: transparent; min-height: 100%;">
                            <!-- <div @click.prevent.stop>
                                <MapMultipleMarker />
                            </div> -->
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
    },
    mounted() {
    },
    beforeDestroy() { },
    methods: {
    }
};
</script>