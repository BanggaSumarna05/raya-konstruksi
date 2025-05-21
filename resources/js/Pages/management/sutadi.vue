<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Sutadi Raharjo" />
    <!-- ======= Hero Section ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Our Management</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a :href="route('leadership')">Leadership</a></li>
                <li>Sutadi Raharjo</li>
            </ol>
        </div>
    </div>

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100" style="margin-top: 0px;">
                    <div class="member-img text-center">
                        <img src="/assets/img/Sutadi Raharjo.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <h4>Sutadi Raharjo</h4>
                    <u>Vice President Sales & Marketing</u> <br><br>
                    <p class="rapih">
                        Mr. Sutadi Raharjo graduated from Universitas Atma Jaya Jogjakarta with a bachelor’s Degree in
                        Civil Construction Engineering. Accomplished leader with 30+ years of experience, specializing
                        in maximizing business results through effective management, planning, and communication. PT
                        Makadia Group International relies on Mr. Sutadi Raharjo’s expertise in diverse industries, including
                        Oil and Gas plants, refineries, mining, and fabrication. <br><br>
                        Proven track record managing complex projects like LNG, refineries, gold mines, and
                        infrastructure. Adept at overseeing all project aspects, from planning and organization to
                        marketing and problem-solving.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>