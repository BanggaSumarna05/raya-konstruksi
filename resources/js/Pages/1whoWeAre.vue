<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
</script>

<template>

    <Head title="Who We Are" />
    <section id="company-profile" class="alt-services-2 section" style="padding-top:10%">
        <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1 aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/hero-carousel/header-6.jpg" alt="" class="img-fluid"
                        style="max-height: 20vdh!important;">
                </div>
                <div class="features-image col-lg-5 order-1 order-lg-2 aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>Company Profile</h3>
                    <p>
                        RAYA is a leading construction company based in Indonesia. Since inception in
                        2019, RAYA has reliably delivered successful projects in power & industrial plants in more than
                        30 countries.
                        <br><br>
                        Today, RAYA has an international network of companies spanning across Asia, Africa and the
                        Middle East. Its global initiatives have provided the added advantage to establish strategic
                        collaboration with multinational corporations in the same field.
                        <br><br>
                        With an outstanding track record, strong engineering expertise, and extensive range of
                        experience, we partner customers to achieve success in new markets, challenges, and geographies.
                    </p>
                    <a href="#" rel="noopener noreferrer" class="btn-get-started">
                        Discover More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="vision" class="services pt-5">
        <div class="container">
            <div class="row">
                <div class="col-4 m-10">
                    <h4>Vision</h4>
                </div>
                <div class="col-6">
                    Delivering Excellent Engineering & Construction Services
                    for Global Industrial Clients
                </div>
            </div>
            <div class="row" style="padding-top: 5vh;">
                <div class="col-4 m-10">
                    <h4>Mision</h4>
                </div>
                <div class="col-6">

                    <ul>
                        <li>Achieving extraordinary result for our industrial clients through a culture of
                            excellence in
                            construction and heavy equipment services.</li>
                        <li>
                            Building satisfying career for our team by implementing agile mindset and continuous
                            learning to
                            adapt into changes in the industry.
                        </li>
                        <li>
                            Applying best practices in safety, quality, and project management.
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section id="core-values" class="services pt-5">
        <div class="container">
            <div class="row" style="padding-top: 8vh;">
                <div class="col-12 m-10">
                    <h4>Core Values</h4>
                    <br>
                </div>
                <div class="col-2">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <i class="fa-brands fa-docker" style="font-size: 64px;"></i>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Adaptive</h5>
                            <p class="card-text mt-3">
                                We implement continuous improvement to in the industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <i class="fa-brands fa-docker" style="font-size: 64px;"></i>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Committed</h5>
                            <p class="card-text mt-3">
                                We devote our best effort in achieving the highest
                                standard in quality through project management best
                                practiced and Good Corporate Governance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <i class="fa-brands fa-docker" style="font-size: 64px;"></i>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Trustworthy</h5>
                            <p class="card-text mt-3">We aim to gain our client trust through responsible
                                actions and positive longterm relationships with our
                                stakeholders.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <i class="fa-brands fa-docker" style="font-size: 64px;"></i>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Integrity</h5>
                            <p class="card-text mt-3">We uphold a strong work and moral ethics aligning with
                                applicable law and
                                regulation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <i class="fa-brands fa-docker" style="font-size: 64px;"></i>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Ownership</h5>
                            <p class="card-text mt-3">We uphold a strong work and moral ethics aligning with
                                applicable law and
                                regulation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <i class="fa-brands fa-docker" style="font-size: 64px;"></i>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Safety & Health</h5>
                            <p class="card-text mt-3"> We encourage everyone to take initiative and contribute as a
                                team for the
                                best interest of company.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alt-services-2" class="alt-services-2 section">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="card border-0">
                        <img class="card-img-top" src="https://jel.com.sg/wp-content/uploads/2020/12/related1.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-2"
                                style="border-bottom: 4px solid #fcd03b; margin-bottom: 5vdh; padding: 0.5em; width: 70%; ">
                                Adaptive</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0">
                        <img class="card-img-top" src="https://jel.com.sg/wp-content/uploads/2020/12/related1.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-2"
                                style="border-bottom: 4px solid #fcd03b; margin-bottom: 50vdh; padding: 0.5em; width: 70%; ">
                                Client & Partners</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<style>
.greyscale {
    object-fit: scale-down;
    justify-content: center !important;
    align-items: center !important;
}
</style>
<script>
export default {
    data() {
    },
    mounted() {
    },
    beforeDestroy() {
    },
    methods: {}
};
</script>