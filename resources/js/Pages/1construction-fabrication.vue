<script setup>
import { Head, Link } from "@inertiajs/vue3";
new PureCounter();
defineProps({
    canLogin: {
        type: Boolean,
    },
});
</script>
<style>
.th {
    background-color: yellow !important;
}
</style>
<template>

    <Head title="Construction & Fabrication in Indonesia" />
    <!-- End Breadcrumbs -->
    <section id="constructions" class="constructions mb-10" style="padding-top: 10%;">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Construction & Fabrication</h2>
                <p class="rapih">
                    Our team of skilled engineers and workers collaborate to bring your visions to life across a range
                    of disciplines, including Integrated Steel Structure Fabrication and Installation, Piping
                    Fabrication & Installation, and Mechanical Installation. We meticulously craft every detail to
                    reflect your unique aspirations.
                </p>
            </div>

            <div class="row justify-content-around gy-4">
                <div class="col-lg-12 d-flex flex-column" data-aos="fade-right">
                    <!-- <h3>Steel Structure Fabrication</h3>
                    <hr /> -->
                    <div class="row">
                        <div class="col-4">
                            <p class="rapih">
                                <b>RAYA</b> delivers integrated construction and fabrication solutions covering
                                structural,
                                piping, and tank systems.
                                <br><br></br> Supported by experienced engineers, modern facilities, and
                                strict
                                quality control, we ensure every project meets the highest industrial standards — from
                                design
                                and fabrication to installation and maintenance.
                                <br><br></br>
                                Our team is committed to precision, safety, and reliability in every phase of execution.
                                We work
                                closely with clients to optimize performance, extend asset lifespan, and deliver results
                                that
                                stand the test of time.
                            </p>

                        </div>
                        <div class="col-lg-4 d-flex flex-column" data-aos="fade-left">
                            <div class="image-overlay-container">
                                <img src="/assets/img/construction.jpg" alt="Construction & Fabrication"
                                    class="responsive img-fluid" style="border-radius: 6px;" />
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column" data-aos="fade-left">
                            <p class="rapih"><b>Our expertise</b> in construction and fabrication covers various
                                industrial sectors,
                                delivering precision and reliability in every stage of project execution:</p>
                            <ul class="list-unstyled">
                                <li>
                                    <h6><b>Steel Structure Fabrication & Installation</b></h6>
                                    <p class="rapih">
                                        From industrial to commercial projects, we provide precision steel
                                        structure
                                        fabrication and on-site installation ensuring strength, accuracy, and
                                        durability.
                                    </p>
                                </li>
                                <li>
                                    <h6><b>Piping Fabrication & Installation</b></h6>
                                    <p class="rapih">
                                        Comprehensive piping solutions for process, utility, and high-pressure
                                        systems,
                                        executed under strict QA/QC standards for efficiency and safety.
                                    </p>
                                </li>
                                <li>
                                    <h6><b>Tank Fabrication & Installation</b></h6>
                                    <p class="rapih">
                                        Custom-built storage and process tanks, engineered for optimal
                                        performance,
                                        corrosion resistance, and long-term reliability.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>




                <div class="col-lg-6 d-flex flex-column" data-aos="fade-right">
                    <h3>Mechanical Erection</h3>
                    <hr />
                    <p class="rapih">
                        Handle the mechanical installation of industrial equipment, including pumps, compressors,
                        turbines, and reactors. Our team ensures alignment precision, proper anchoring, and reliable
                        performance during plant operations.
                    </p>
                    <div class="row">
                        <div class="col-9">
                            <b>Advantages :</b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Skilled manpower with proven track record.
                                </li>
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Detailed alignment and load-testing procedures.
                                </li>
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Safe and efficient installation practices.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex flex-column" data-aos="fade-up">
                    <h3>Equipment Rental & Operation</h3>
                    <hr />
                    <p class="rapih">
                        <b>RAYA</b> also provides heavy equipment rental and operation services to support
                        construction and industrial projects. Our well-maintained fleet includes cranes, forklifts,
                        welding machines, and lifting equipment operated by certified personnel.
                    </p>
                    <div class="row">
                        <div class="col-9">
                            <b>Advantages :</b>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Flexible rental duration.
                                </li>
                                <li>
                                    <i class="bi bi-check2"></i>
                                    On-site technical assistance.
                                </li>
                                <li>
                                    <i class="bi bi-check2"></i>
                                    Reliable and safe equipment performance.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 d-flex flex-column" data-aos="fade-left">
                    <div class="image-overlay-container">
                        <center><img src="/assets/img/projects/lotte-catalyst/catalyst-3 - Copy.jpeg"
                                alt="Construction & Fabrication" class="img-fluid" style="border-radius: 6px;" />
                        </center>
                    </div>
                </div>

                <div class="col-lg-12 d-flex flex-column" data-aos="fade-right">
                    <h3>Why Us ?</h3>
                    <hr />
                    <p class="rapih">
                        With a commitment to quality, safety, and timely delivery, RAYA ensures every project
                        runs smoothly from start to finish. Our experience, certified team, and modern facilities make
                        us a trusted partner for industrial fabrication and installation.
                        <br>
                        📞 Ready to collaborate? Let’s build lasting value together.
                        <a href="mailto:marketing@rayakonstruksi.com"><u>marketing@rayakonstruksi.com</u></a>
                    </p>
                </div>

            </div>
        </div>
    </section>
</template>