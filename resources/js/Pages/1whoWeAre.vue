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
<style>
.core-values-list .icon-wrapper {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    /* background: #f1f1f1; */
    filter: brightness(0) invert(1);
    display: flex;
    align-items: center;
    justify-content: center;
}

.core-values-list .icon-wrapper img {
    max-width: 48px;
    max-height: 48px;
}

.core-values-list h5 {
    border-bottom: 2px solid #ccc;
    display: inline-block;
}

.vision-list {
    list-style: disc;
    padding-left: 1.5rem;
    margin: 0;
}

.vision-list li {
    margin-bottom: .5rem;
    line-height: 1.6;
    font-size: 1.05rem;
}

.mission-list {
    list-style: disc;
    padding-left: 1.5rem;
    margin: 0;
}

.mission-list li {
    margin-bottom: .75rem;
    font-size: 1.05rem;
    line-height: 1.6;
}
</style>
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

    <section id="vision" class="services pt-5 bg-primary">
        <div class="ml-10 mr-10">
            <div class="row">
                <div class="col-4 col-md-4 col-lg-4 col-sm-12">
                    <!-- <div class="row">
                        <div class="col-12 col-sm-12 col-lg-12">
                            Driven by innovation and a commitment to excellence, we deliver solutions that empower our
                            clients and elevate industry standards.
                            <br><br>
                            Our Vision and Mission reflect the values that guide every step we take toward sustainable
                            growth and impactful results.
                            <br><br><br>
                        </div>
                    </div> -->
                    <div class="vision-section">
                        <h4 class="mb-3">Vision</h4>

                        <ul class="vision-list">
                            <li>Delivering Excellent Engineering & Construction Services for Global Industrial Clients
                            </li>
                        </ul>
                    </div>
                    <div class="mission-section pt-5">
                        <h4 class="mb-3">Mission</h4>

                        <ul class="mission-list">
                            <li>
                                Achieving extraordinary results for our industrial clients through a culture of
                                excellence in
                                construction and heavy equipment services.
                            </li>
                            <li>
                                Building satisfying careers for our team by implementing an agile mindset and continuous
                                learning
                                to adapt to changes in the industry.
                            </li>
                            <li>
                                Applying best practices in safety, quality, and project management.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-sm-12">
                    <div>
                        <img src="/assets/img/breadcrumbs-bg.jpg" alt="" style="" loading="lazy"
                            onload="this.previousElementSibling?.classList.add('hidden'); this.classList.remove('opacity-0');"
                            onerror="this.previousElementSibling?.classList.remove('hidden'); this.classList.add('hidden');">
                    </div>
                </div>
                <div class="col-4 col-md-4 col-lg-4 col-sm-12">
                    <center class="mb-4">
                        <h4>Core Values</h4>
                    </center>
                    <ul class="list-unstyled core-values-list" style=" column-count: 2;">
                        <li class="d-flex align-items-start mb-4">
                            <div>
                                <b>Adaptive</b>
                                <p class="mb-0">We implement continuous improvement to in the industry.</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-start mb-4">
                            <div>
                                <b>Committed</b>
                                <p class="mb-0">We are committed to delivering the highest quality standards through
                                    best
                                    practices.</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-start mb-4">
                            <div>
                                <b>Trustworthy</b>
                                <p class="mb-0">We aim to gain our clients’ trust through responsible actions and
                                    long-term
                                    relationships.</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-start mb-4">
                            <div>
                                <b>Integrity</b>
                                <p class="mb-0">We uphold strong work ethics aligned with applicable laws and
                                    regulations.</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-start mb-4">
                            <div>
                                <b>Ownership</b>
                                <p class="mb-0">We take full responsibility and are accountable for delivering results
                                    that meet
                                    company goals.</p>
                            </div>
                        </li>

                        <li class="d-flex align-items-start mb-4">
                            <div>
                                <b>Safety</b>
                                <p class="mb-0">We encourage initiative and teamwork for the best interest of the
                                    company.</p>
                            </div>
                        </li>

                    </ul>
                </div>


            </div>

        </div>
    </section>

    <section id="core-values" class="services pt-5">
        <div class="container">


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