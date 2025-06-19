<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Sustainability" />
    <section id="services" class="services container" style="padding-top:15vh">
        <h1 class="pb-10">Sustainability</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <img class="img-thumbnail" src="/assets/img/projects/akatara/akatara (1).jpg" style="border: 0px;background-color: transparent;
                        min-height: 430px;max-height: 430px;min-width: 100%; object-fit: cover;
                        ">
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div style="padding-top:25%">
                        <h4>HEALTH, SAFETY & ENVIRONTMENT</h4>
                        <p>
                            RAYA through the dedication of its Management and staff, received
                            several awards from our clients in recognition for maintaining exemplary levels of safety at
                            the worksites as well as being able to be committed to maintaining a high level of service
                            excellence and efficiency during the course of our projects.
                        </p>
                        <a :href="route('safety')" rel="noopener noreferrer" class="btn-get-started">
                            Discover More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services px-5 mb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <div style="padding-top:25%">
                        <h4>
                            CORPORATE SOCIAL RESPONSIBILITY</h4>
                        <p>Volunteerism is an important pillar of our corporate giving. We want to build an implicit
                            sense of public service
                            that permeates our identity in the communities which we operate in.</p>
                        <a :href="route('respon')" rel="noopener noreferrer" class="btn-get-started">
                            Discover More
                        </a>
                    </div>

                </div>
                <div class="col-lg-7 col-sm-12">
                    <img src="/assets/img/respon.jpg" style="
                        min-height: 430px;max-height: 430px;min-width: 100%; object-fit: cover;
                        ">
                </div>
            </div>
        </div>
    </section>
</template>