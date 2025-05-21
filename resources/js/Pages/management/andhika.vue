<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>
    <Head title="Andhika Permana Sutanto" />
    <!-- ======= Hero Section ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Our Management</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Andhika Permana Sutanto</li>
            </ol>
        </div>
    </div>

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img text-center">
                        <img src="/assets/img/andhika-1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-8" data-aos="fade-up" data-aos-delay="100">
                    <h4>Andhika Permana Sutanto</h4>
                    <u>President Director</u> <br><br>
                    <p class="rapih">
                        Lead by experts in construction industry, we aspire to be one of the leading construction
                        service
                        provider in Indonesia. <br><br>
                        Allow us to introduce our President Director, Mr. Andhika P Sutanto, a distinguished graduate of the
                        Chemical Engineering program at Bandung Institute of Technology. With over a decade of invaluable
                        experience in construction and project management, Mr. Andhika brings more than just expertise to
                        his role. <br><br>
                        His leadership is marked not only by his proficiency but also by an unwavering character. Whether
                        orchestrating intricate projects or delicately navigating client relations, Mr. Andhika embodies the
                        essence of a true leader. His vision promises a future built upon superior strategies and meticulous
                        precision.<br><br>
                        With his steady guidance, Makadia Group Internasional is poised to embark on a journey towards
                        unparalleled prosperity, forging enduring relationships with every client encountered along the way.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>