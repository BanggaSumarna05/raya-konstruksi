<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
import { onMounted, ref } from 'vue';

const topScroll = ref(null);
const contentScroll = ref(null);

onMounted(() => {
    const top = topScroll.value;
    const content = contentScroll.value;

    const syncScroll = (source, target) => {
        source.addEventListener('scroll', () => {
            target.scrollLeft = source.scrollLeft;
        });
    };

    syncScroll(top, content);
    syncScroll(content, top);
});
</script>

<template>

    <Head title="Who We Are" />
    <section id="company-profile" class="alt-services-2 section mb-10" style="padding-top:10%">
        <div class="container">
            <h1 class="pb-10">Who We Are</h1>
            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 col-sm-12 " data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/hero-carousel/hover-1.png" alt="" class="img-fluid"
                        style="max-height: 18vdh!important;">
                </div>
                <div class="features-image col-lg-5 col-sm-12 order-1 order-lg-1 aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Company Profile</h3>
                    <p class="rapih">
                        RAYA KONSTRUKSI, established in 2018, is a leading provider of Engineering & Construction
                        services, specializing in Piping & Mechanical Construction, Equipment Rental, and Operation &
                        Maintenance.
                        <br><br>
                        Our vision is to deliver top-quality services to global industrial clients, setting high
                        standards of excellence and reliability.
                        Our mission is to achieve outstanding results through a culture of excellence, agility, and
                        continuous learning in engineering, construction, and heavy equipment services.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="vision" class="services pt-5 section-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <h4>Vision</h4>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <p>
                        Delivering Excellent Engineering & Construction Services
                        for Global Industrial Clients
                    </p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-12 col-lg-4">
                    <h4>Mision</h4>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <li>
                        Achieving extraordinary result for our industrial clients through a culture of
                        excellence in
                        construction and heavy equipment services.
                    </li>
                    <li>
                        Building satisfying career for our team by implementing agile mindset and continuous
                        learning to
                        adapt into changes in the industry.
                    </li>
                    <li>
                        Applying best practices in safety, quality, and project management.
                    </li>
                </div>
            </div>
        </div>
    </section>

    <section id="core-values" class="services pt-5">
        <div class="container">
            <h4>Core Values</h4>
            <div class="row px-2">
                <div class="col-sm-12 col-lg-2 p-4">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <center>
                                <div class="card"
                                    style="border-radius: 50%; background-color: #f1f1f1; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <img src="/assets/img/values/ADAPTIVE.png" alt=""
                                        style="max-width: 64px;max-height: 64px;">
                                </div>
                            </center>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Adaptive</h5>
                            <p class="card-text mt-3">
                                We implement continuous improvement to in the industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 p-4">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <center>
                                <div class="card"
                                    style="border-radius: 50%; background-color: #f1f1f1; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <img src="/assets/img/values/COMMITED.png" alt=""
                                        style="max-width: 64px;max-height: 64px;">
                                </div>
                            </center>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Committed</h5>
                            <p class="card-text mt-3">
                                We are committed to delivering the highest quality standards through best practices.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-2 p-4">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <center>
                                <div class="card"
                                    style="border-radius: 50%; background-color: #f1f1f1; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <img src="/assets/img/values/TRUSTWORTHY.png" alt=""
                                        style="max-width: 64px;max-height: 64px;">
                                </div>
                            </center>
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
                <div class="col-sm-12 col-lg-2 p-4">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <center>
                                <div class="card"
                                    style="border-radius: 50%; background-color: #f1f1f1; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <img src="/assets/img/values/INTEGRITY.png" alt=""
                                        style="max-width: 64px;max-height: 64px;">
                                </div>
                            </center>
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
                <div class="col-sm-12 col-lg-2 p-4">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <center>
                                <div class="card"
                                    style="border-radius: 50%; background-color: #f1f1f1; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <img src="/assets/img/values/OWNERSHIP.png" alt=""
                                        style="max-width: 64px;max-height: 64px;">
                                </div>
                            </center>
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
                <div class="col-sm-12 col-lg-2 p-4">
                    <div class="h-100">
                        <div class="card-body text-center">
                            <center>
                                <div class="card"
                                    style="border-radius: 50%; background-color: #f1f1f1; width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <img src="/assets/img/values/SAFETY.png" alt=""
                                        style="max-width: 64px;max-height: 64px;">
                                </div>
                            </center>
                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; margin-bottom: 5vdh; padding: 0.5em;">
                                Safety</h5>
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

    <section id="milestones" class="milestones-section">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h4>Project Milestones</h4>
                <p>Our journey through the years</p>
            </div>

            <div class="milestones-container">
                <div class="year-group">
                    <div class="year-header">2018</div>
                    <div class="milestone-card text-uppercase company-event">
                        <h3>Company Founded</h3>
                        <p>PT Makadia Grup International was established in Jakarta, Indonesia.</p>
                    </div>
                </div>

                <div class="year-group">
                    <div class="year-header">2019</div>
                    <div class="milestone-card text-uppercase">
                        <h3>Enerco RPO TDAE Plant Operation & Maintenance</h3>
                    </div>
                </div>

                <div class="year-group">
                    <div class="year-header">2020</div>
                    <!-- <div class="milestone-card text-uppercase">
                        <h3>Tangguh Expansion Plant Preservation</h3>

                    </div> -->
                    <div class="milestone-card text-uppercase">
                        <h3>Muria Sumba Manis Refinery Piping</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>Enerco Heat Exchanger Maintenance</h3>
                    </div>
                </div>

                <div class="year-group">
                    <div class="year-header">2022</div>
                    <div class="milestone-card text-uppercase">
                        <h3>RDMP RU-V OSBL Tanks Project</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>Pertamina Turnaround Piping</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>Muria Sugar Refinery Maintenance</h3>
                    </div>
                </div>

                <div class="year-group">
                    <div class="year-header">2023</div>
                    <div class="milestone-card text-uppercase">
                        <h3>LINE Ethylene Plant Project</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>Air Products UOI Indonesia</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>Air Products SMIP Piping</h3>
                    </div>
                </div>

                <div class="year-group">
                    <div class="year-header">2024</div>
                    <div class="milestone-card text-uppercase">
                        <h3>RDMP RU-V ISBL Tanks</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>LINE Catalyst Loading</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>UOI Turnaround & Maintenance</h3>
                    </div>
                    <div class="milestone-card text-uppercase">
                        <h3>LINE Manpower Supply</h3>
                    </div>
                </div>

                <div class="year-group">
                    <div class="year-header">2025</div>
                    <div class="milestone-card text-uppercase">
                        <h3>Air Products Offsite SMR</h3>
                    </div>

                    <div class="milestone-card text-uppercase">
                        <h3>Air Products Catalyst Loading</h3>
                    </div>
                    <div class="milestone-card text-uppercase company-event">
                        <h3>Company Rebranding</h3>
                        <p>PT Makadia Grup International changes name to <strong>RAYA KONSTRUKSI INTERNASIONAL</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alt-services-2" class="alt-services-2 section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-3">
                    <div class="card border-0">
                        <img class="card-img-top" src="/assets/img/web4-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a :href="route('corporateStructure')">
                                <h5 class="card-title mb-2"
                                    style="border-bottom: 4px solid #2a4184; margin-bottom: 5vdh; padding: 0.5em; width: 70%; color:black; ">
                                    Leadership
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="card border-0">
                        <img class="card-img-top" src="https://jel.com.sg/wp-content/uploads/2020/12/related3.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <a :href="route('clientPartner')">
                                <h5 class="card-title mb-2"
                                    style="border-bottom: 4px solid #2a4184; margin-bottom: 5vdh; padding: 0.5em; width: 70%; color:black; ">
                                    Client & Partners
                                </h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>