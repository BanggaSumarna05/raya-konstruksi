<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Careers" />

    <section id="services" class="services px-5" style="padding-top:10%">
        <div class="container">
            <h1>
                Careers
            </h1>
            <br><br><br>
            <h4>
                Why Join Us
            </h4>
            <p>
                Investing in human capital is our HR philosophy. We make every effort to enhance the skills, knowledge,
                experience and wellbeing of our people in order for them to cope with the demands of the job and perform
                to their level best. We recognise the collective efforts and contributions of our people and that our
                success is attributed to our shared commitment and perseverance towards providing superior and
                comprehensive engineering solutions to our customers worldwide! We welcome you to join us and we are
                confident that you will find plenty of reasons to build and shape your career with RAYA!
            </p>
            <div class="row gy-4 justify-content-around">
                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="1100">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('/assets/img/projects/lotte-catalyst/catalyst (4).jpeg'); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Our culture</h3><br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="1200">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/projects/msm/msm-13.jpg); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">Our People</h3> <br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-right" data-aos-delay="1300">
                    <div class="service-item card-bg"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(assets/img/projects/msm/msm-13.jpg); background-position: cover;background-position: center; background-size: cover">
                        <div class="card-title text-white" style="margin-top: 10em;">
                            <h3 style="color:white!important">People Development</h3>
                            <br>
                            <a :href="route('project')" class="readmore stretched-link btn-block">Discover More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="/assets/img/hero-carousel/uoi-1 (9).jpeg" alt="" class="img-fluid"
                        style="max-height: 450px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-4">
                    <div style="padding-top: 20%;">
                        <h3>
                            Job Opportunities
                        </h3>
                        <p>
                            We believe in workforce diversity and our strength is built on these differences that
                            generate
                            new
                            ideas
                            and creative solutions for our increasingly diverse clients. We welcome and value individual
                            differences. Join RAYA and carve a career path to match your skills and aspirations!
                        </p>
                        <a href="http://pekerjakita.com/" target="_blank" class="btn-get-started">Search Jobs <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div style="padding-top: 20%;">
                        <h3>
                            Recruitment Fraud
                        </h3>
                        <p>
                            If you have queries regarding the legitimacy of the recruitment offer that you have
                            received, you may send your query to it@rayakonstruksi.com.
                        </p>
                        <a href="http://pekerjakita.com/" target="_blank" class="btn-get-started">Discover More <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-8">
                    <img src="https://jel.com.sg/wp-content/uploads/2022/01/Fraud-image-1024x577.jpg" alt="" class="img-fluid"
                        style="max-height: 450px; width: 100%; object-fit: cover;">
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
    beforeDestroy() {
        // Hapus event listener saat komponen di-destroy
        window.removeEventListener('resize', this.resizeMap);
    },
    methods: {}
};
</script>