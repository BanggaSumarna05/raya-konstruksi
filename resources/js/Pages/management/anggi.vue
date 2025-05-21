<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Anggi Simatupang" />
    <!-- ======= Hero Section ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Our Management</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a :href="route('leadership')">Leadership</a></li>
                <li>Anggi Simatupang</li>
            </ol>
        </div>
    </div>

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100" style="margin-top: 0px;">
                    <div class="member-img text-center">
                        <img src="/assets/img/anggi1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <h4>Anggi Simatupang</h4>
                    <u>Assistant Manager Industrial Marketing</u> <br><br>
                    <p class="rapih">
                        Mr. Anggi dedicated professional in Industrial Marketing & Development, holding a Bachelor's
                        degree in Metallurgy & Materials Engineering from Universitas Indonesia. Known for being a
                        creative problem solver with a curious mindset, fully committed to priorities and
                        excels in time management. <br> <br>
                        Involved in strategic Infrastructure
                        Management Projects, EPC (Engineering, Procurement, Construction), and Property Projects. In
                        his role as Business Strategy and Portfolio, responsible for subsidiaries and partners,
                        maintaining client relations, and developing business
                        plans and strategies for diversification.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>