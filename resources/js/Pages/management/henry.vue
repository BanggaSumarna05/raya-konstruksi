<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Henry Adrianto" />
    <!-- ======= Hero Section ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Our Management</h2>
            <ol>
                <li><a :href="route('index')">Home</a></li>
                <li><a :href="route('leadership')">Leadership</a></li>
                <li>Henry Adrianto</li>
            </ol>
        </div>
    </div>

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img text-center">
                        <img src="/assets/img/Henry Adrianto.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <h4>Henry Adrianto</h4>
                    <u>Vice President Sales & Marketing</u> <br><br>
                    <p class="rapih">
                        As Vice President of Business and Operations of Makadia Group International, Mr. Henry Adrianto
                        has more than 20 years of Engineering and Construction Management experience in the EPC field,
                        including Construction Management EPC for Oil and Gas, Petrochemical, and Mineral projects on
                        national and international scales. <br><br>
                        Graduated from Merdeka University Malang, with a Mechanical Engineering bachelor degree with
                        special expertise in Construction Management EPC for medium and scale Onshore & Offshore
                        projects at home & abroad with international scale clients, Makadia Group International and its
                        subsidiaries can provide services in the construction industry with maximum quality and on time
                        for customer satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>