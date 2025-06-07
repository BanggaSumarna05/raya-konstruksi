<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Sustainability" />

    <section id="services" class="services container" style="padding-top:10%">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img class="img-thumbnail" src="/assets/img/projects/akatara/akatara (1).jpg"
                        style="border: 0px;background-color: transparent;">
                </div>
                <div class="col-4">
                    <div style="padding-top:25%">
                        <h4>Health, Safety & Environment</h4>
                        <p>
                            RAYA and its subsidiaries have, through the dedication of its Management and staff, received
                            several
                            awards from our clients in recognition for maintaining exemplary levels of safety at the
                            worksites
                            as
                            well as being able to be committed to maintaining a high level of service excellence and
                            efficiency
                            during the course of our projects.
                        </p>

                        <a :href="route('safety')" rel="noopener noreferrer" class="btn-get-started">
                            Discover More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services px-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div style="padding-top:25%">
                        <h4>Quality & Risk Management</h4>
                        <p>Risk Management Department (RMD) spearheads risk management activities and manages the
                            Integrated Management System in JEL and subsidiaries in the JEL Group of Companies.</p>

                        <a :href="route('quality')" rel="noopener noreferrer" class="btn-get-started">
                            Discover More
                        </a>
                    </div>

                </div>
                <div class="col-8">
                    <img class="img-thumbnail" src="/assets/img/management.jpg"
                        style="border: 0px;background-color: transparent;">
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="services" class="services px-5">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img class="img-thumbnail" src="/assets/img/projects/akatara/akatara (1).jpg"
                        style="border: 0px;background-color: transparent;">
                </div>
                <div class="col-4">
                    <div style="padding-top:25%">
                        <h4>Awards & Certificates</h4>
                        <p>
                            RAYA and its subsidiaries have, through the dedication of its Management and staff, received
                            several
                            awards from our clients in recognition for maintaining exemplary levels of safety at the
                            worksites
                            as
                            well as being able to be committed to maintaining a high level of service excellence and
                            efficiency
                            during the course of our projects.
                        </p>

                        <a href="#" rel="noopener noreferrer" class="btn-get-started">
                            Discover More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="services" class="services px-5">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img class="img-thumbnail" src="/assets/img/respon.jpg"
                        style="border: 0px;background-color: transparent;">
                </div>
                <div class="col-4">
                    <div style="padding-top:25%">
                        <h4>Corporate Social Responsibility</h4>
                        <p>Volunteerism is an important pillar of our corporate giving. Not only do we walk out of the
                            ivory tower to connect with others, but we want to build an implicit sense of public service
                            that permeates our identity in the communities which we operate in.</p>

                        <a :href="route('respon')" rel="noopener noreferrer" class="btn-get-started">
                            Discover More
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>
</template>