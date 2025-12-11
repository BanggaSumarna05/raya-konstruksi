<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
import { onMounted, ref } from 'vue';

const topScroll = ref(null);
const contentScroll = ref(null);
const valuesData = [
    {
        img: "/assets/img/values/ADAPTIVE.png",
        title: "Adaptive",
        text: "We implement continuous improvement to in the industry."
    },
    {
        img: "/assets/img/values/COMMITED.png",
        title: "Committed",
        text: "We are committed to delivering the highest quality standards through best practices."
    },
    {
        img: "/assets/img/values/TRUSTWORTHY.png",
        title: "Trustworthy",
        text: "We aim to gain our client trust through responsible actions and long-term relationships."
    },
    {
        img: "/assets/img/values/INTEGRITY.png",
        title: "Integrity",
        text: "We uphold strong work and moral ethics aligned with laws and regulations."
    },
    {
        img: "/assets/img/values/OWNERSHIP.png",
        title: "Ownership",
        text: "We take full responsibility for our work and are accountable for delivering results."
    },
    {
        img: "/assets/img/values/SAFETY.png",
        title: "Safety",
        text: "We encourage initiative and teamwork for the best interest of the company."
    }
];
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
    <section id="company-profile" class="alt-services-2 section mb-10 mt-5">
        <div class="container">
            <h1 class="pb-10">Who We Are</h1>
            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 col-sm-12 " data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/hero-carousel/hover-1.png" alt="" class="img-fluid" loading="lazy"
                        style="max-height: 18vdh!important;"
                        onload="this.previousElementSibling.classList.add('hidden'); this.classList.remove('opacity-0');"
                        onerror="this.previousElementSibling.classList.remove('hidden'); this.classList.add('hidden');">
                </div>
                <div class="features-image col-lg-5 col-sm-12 order-1 order-lg-1 aos-init aos-animate"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Company Profile</h3>
                    <p class="rapih">
                        <b>RAYA KONSTRUKSI</b> established in 2018, is a leading provider of Engineering & Construction
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

    <section id="vision" class="services pt-5 
    
    bg-primary1
    ">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="col-sm-12 col-lg-">
                        <h4>Vision</h4>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="row">
                            <div class="col-sm-1 col-lg-1">
                                <!-- • -->
                            </div>
                            <div class="col-sm-11 col-lg-11">
                                Delivering Excellent Engineering & Construction Services
                                for Global Industrial Clients
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 col-lg-">
                            <h4>Mission</h4>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="row">
                                <div class="col-sm-1 col-lg-1">
                                    •
                                </div>
                                <div class="col-sm-11 col-lg-11">
                                    Achieving extraordinary result for our industrial clients through a culture of
                                    excellence in
                                    construction and heavy equipment services.
                                </div>
                                <div class="col-sm-1 col-lg-1">
                                    •
                                </div>
                                <div class="col-sm-11 col-lg-11">
                                    Building satisfying careers for our team by implementing agile mindset and
                                    continuous
                                    learning to
                                    adapt into changes in the industry.
                                </div>
                                <div class="col-sm-1 col-lg-1">
                                    •
                                </div>
                                <div class="col-sm-11 col-lg-11">
                                    Applying best practices in safety, quality, and project management.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="core-values" class="services pt-5">
        <div class="container">
            <center>
                <h4>Core Values</h4>
                <br>
                <strong>
                    RAYA values of excellence and reliability are deeply embedded in our identity, guiding our vision,
                    mission & every aspect of our operations.
                </strong>
                <br><br></br>
                <p>
                    As we continue to evolve and strengthen our culture, these values shape our collective identity and
                    reinforce our essential role in delivering dependable, value-driven construction solutions.
                    <br><br>
                    In line with the shifting demands of the construction and infrastructure landscape, our values guide
                    us through a transformative journey, reflecting our commitment to adapt, innovate, and consistently
                    meet the industry’s ever-changing challenges.
                </p>
            </center>

            <div class="row px-2">
                <div v-for="(v, i) in valuesData" :key="i" class="col-sm-12 col-lg-4 p-4">
                    <div class="card h-100 shadow-lg">
                        <div class="card-body text-center">
                            <center><img :src="v.img" alt="" style="max-width: 64px; max-height: 64px;
                                     filter: brightness(0) saturate(100%) invert(27%) sepia(29%) saturate(1234%) hue-rotate(191deg) brightness(71%) contrast(95%);
                                    ">
                                </img>
                            </center>

                            <h5 class="card-title mb-2 text-uppercase"
                                style="border-bottom: 2px solid grey; padding: 0.5em;">
                                {{ v.title }}
                            </h5>

                            <p class="card-text mt-3 mb-3">
                                {{ v.text }}
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
                        <img class="card-img-top" src="/assets/img/handshake-3.jpg" alt="Card image cap">
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