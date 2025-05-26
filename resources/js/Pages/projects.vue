<script setup>
import { Head, Link } from '@inertiajs/vue3';
new PureCounter();
defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>

<template>

    <Head title="Projects" />
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Projects</h2>
            <ol>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li>Projects</li>
            </ol>
        </div>
    </div>

    <section id="constructions" class="constructions">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Projects</h2>
                <p class="text-center">Professionalism meets unparalleled execution. With a dedicated team committed to
                    delivering
                    outstanding results, we pride ourselves on our ability to complete projects with precision &
                    excellence.</p>
            </div>

            <div class="row gy-4">

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        LINE Ethylene Plant Project Structure, Mechanical, Piping Construction Project
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">KINE JO.</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Cielgon, Indonesia.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Muria Sumba Manis Refinery Piping Construction Project
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">PT Muria Sumba Manis</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Sumba, Indonesia.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        RDMP RU-V Balikpapan ME-03.4 ISBL Tanks Project
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">RDMP JO</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Balikpapan, Indonesia.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        RDMP RU-V Balikpapan ME-03.2 OSBL Tanks Project
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">RDMP JO</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Balikpapan, Indonesia.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Pertamina RU-V Balikpapan Turnaround Piping Package
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">PT. JGC Indonesia</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Balikpapan, Indonesia.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Air Products Mechanical Piping of UOl Indonesia 1 x PHG830 + 2 x PSA64-SOG
                                        Package
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">Unilever Oleochemical</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">North Sumatra, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Air Products Mechanical Piping Offsite SMR + 40HPN-SOG Package
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">Unilever Oleochemical</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">North Sumatra, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Air Products SMIP Piping & Mechanical Construction Package
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">Unilever Oleochemical</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">North Sumatra, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Tangguh Expansion Plant Preservation Work, CSTS JO
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">BP P.L.C</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Tangguh, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        LINE Ethylene Plant GHU I, II & Clay Towers Catalyst Loading
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">KINE JO</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Cilegon, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Air Products SMR Reactors & Adsorbers Catalyst Loading
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">Air Products</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">North Sumatra, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        UOI Turnaround & Maintenance Project
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">Unilever Oleochemical</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Sei Mangkei, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Muria Sumba Manis Sugar Refinery & Maintenance Service
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">PT Muria Sumba Manis</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Sumba, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Enerco RPO TDAE Plant Operation & Maintenance Service
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">PT Enerco RPO International</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Batam, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Enerco RPO TDAE Plant Heat Exchanger Maintenance Service
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">PT Enerco RPO International</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Batam, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Akatara Project Pre-Commissioning & Commissioning Works
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">Jadesone</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Jambi, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Enerco RPO 180.000 MPTY TDAE Plant Project Management Consultant
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">PT Enerco RPO International</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Batam, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        Muria Sumba Manis Sugar Refinery Project Management Consultant
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">PT Muria Sumba Manis</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Sumba, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        LINE Ethylene Plant Project Construction Manpower Supply
                                    </h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="float-left">KINE JO</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="float-right">Cilegon, Indonesia.</p>
                                        </div>
                                    </div>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- <div class="row gy-4">

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/adsorbent/adsorbent (11).jpg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        ADSORBENT LOADING PRESSURE - Air Products
                                    </h4>
                                    <p class="text-left">Mechanocal Support UOI, Sei Mangkei Indonesia.</p>
                                    <br>
                                    <a :href="route('catalyst-2')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    :style="`background-image: url('/assets/img/projects/unilever-1/img-2.jpeg');`">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        PLAN MAINTENANCE - UNILEVER OLEOCHEMICAL
                                    </h4>
                                    <p class="text-left">Mechanocal Support UOI, Sei Mangkei Indonesia.</p>
                                    <br>
                                    <a :href="route('unilever-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/lotte/cover-2.jpeg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        CATALYSTS LOADING GHU I, II & CLAY BTX REACTOR - LINE WP3 BTX
                                    </h4>
                                    <p class="text-left">Equipment Rental for Catalyst Loading LINE Project,
                                        Cilegon Indonesia.
                                    </p>
                                    <br>
                                    <a :href="route('catalyst-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/airproduct/cover-1.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">MECHANICAL & PIPING PACKAGE - Air Products</h4>
                                    <p class="text-left">Equipment Rental for MECHANICAL & PIPING PACKAGE Air Products,
                                        Sei
                                        Mangkei.
                                    </p>
                                    <br>
                                    <a :href="route('mpap-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/akatara/cover-1.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">JADESTONE ENERGY AKATARA MAINTENANCE SERVICE</h4>
                                    <p class="text-left">Operation & Maintenance for Batik Sugar Plant PT Jadesone.
                                    </p>
                                    <br>
                                    <a :href="route('jadestone-akatara-mps')" class="readmore stretched-link">Discover
                                        More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/lotte/lotte-4.png);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">LOTTE LINE WORK <br> PACKAGES 03 - Manpower Supply</h4>
                                    <p class="text-left">Manpower Supply of BTX area for LINE PROJECT.
                                    </p>
                                    <br>
                                    <a :href="route('lotte-line-wp03-mps')" class="readmore stretched-link">Discover
                                        More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/lotte/cover.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">LOTTE LINE WORK <br> PACKAGES 03 - Piping & Equipment Rental
                                    </h4>
                                    <p class="text-left">Mechanical, Piping & Equipment Rental work of BTX area for LINE
                                        PROJECT.
                                    </p>
                                    <a :href="route('lotte-line-wp03')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg" style="background-image: url(/assets/img/projects/msm/cover.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">MURIA SUMBA MANIS SUGAR PROJECT MANAGEMENT</h4>
                                    <p class="text-left">Project Management for MURIA SUMBA MANIS SUGAR.
                                    </p>
                                    <br><br>
                                    <a :href="route('sumba-msm-pmc')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg" style="background-image: url(/assets/img/projects/msm/msm-9.jpg);">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">MURIA SUMBA MANIS SUGAR FACTORY - OPERATION & MAINTENNANCE
                                    </h4>
                                    <p class="text-left">Operation & Maintenance for Batik Sugar Plant PT Muria Sumba
                                        Manis.
                                    </p>
                                    <br><br>
                                    <a :href="route('sumba-msm')" class="readmore stretched-link">Discover More <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/project-enerco-2.jpg);"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">ENERCO RPO INTERNATIONAL MAINTENANCE</h4>
                                    <p class="text-left">
                                        Operation & Maintenance for TDAE Plant Project PT Enerco RPO
                                        Internasional.
                                    </p>
                                    <br><br>
                                    <a :href="route('project-enerco-2')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="card-bg"
                                    style="background-image: url(/assets/img/projects/project-enerco-1.jpg);"></div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-around">
                                <div class="card-body">
                                    <h4 class="card-title">ENERCO RPO INTERNATIONAL PROJECT MANAGEMENT CONSULTANT</h4>
                                    <p class="text-left">
                                        Project Management for TDAE Plant Project PT Enerco
                                        RPO
                                        Internasional.
                                        <br> <br>
                                    </p>
                                    <a :href="route('line-1')" class="readmore stretched-link">Discover More
                                        <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
    </section>
</template>