<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
let csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>

<template>

    <Head title="Contact Us" />
    <section id="contact" class="contact mb-10">
        <div class="container" data-aos="fade-up" data-aos-delay="100" style="padding-top:10%">
            <h1 class="pb-10">Contact Us</h1>
            <div class="row">
                <div class="col-sm-12 col-lg-6 p-2">
                    <iframe class="gmap_iframe" width="100%" height="720vdh" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?hl=en&amp;q=talavera office park&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>
                </div>

                <div class="col-sm-12 col-lg-6 p-2">
                    <div style="padding-top: 7%; padding-left: 5%;">
                        <h3 style="color: black">Contact Details</h3>
                        <br>
                        <h4>
                            PT RAYA KONSTRUKSI INTERNASIONAL
                        </h4>
                        <br><br>
                        <a href="mailto:marketing@rayakonstruksi.com" style="color: black">
                            <i class="bi bi-envelope-fill" style="margin-right: 6px"></i>
                            <b>marketing@rayakonstruksi.com</b>
                            <i class="bi bi-box-arrow-up-right" style="margin-left: 6px"></i>
                        </a>
                        <br><br>
                        <h5>HEAD OFFICE JAKARTA</h5>
                        <div class="row" style="border-bottom: solid 1px black;">
                            <div class="col-8">
                                <p>
                                    Talavera Office Park, 15th Floor.
                                    <br>
                                    Jl. TB Simatupang No.Kav. 22 - 26, South Jakarta, Indonesia
                                </p>
                            </div>
                            <div class="col-4">
                                <a href="https://www.google.com/maps/place/Talavera+Office+Park/@-6.2912807,106.8010619,17z/data=!3m2!4b1!5s0x2e69f23014dd0ff3:0x4c271fab74d25e1!4m6!3m5!1s0x2e69f1e6f0a64c15:0x623a0f8bf591c886!8m2!3d-6.291286!4d106.8036422!16s%2Fg%2F11gzt0dl1?entry=ttu&g_ep=EgoyMDI1MDkxMC4wIKXMDSoASAFQAw%3D%3D"
                                    target="_blank" style="color: black; margin-left: 10px;" class="see-on-maps-link">
                                    <i class="bi bi-geo-alt-fill" style="margin-right: 6px"></i>
                                    <b>See On Maps</b>
                                </a>
                            </div>
                        </div>
                        <br>
                        <h5>RIAU OFFICE</h5>
                        <div class="row" style="border-bottom: solid 1px black;">
                            <div class="col-8">
                                <p>
                                    Jl. Dwikora I No.16, Suka Maju, Kec. Sail,
                                    <br> Kota Pekanbaru, Riau 28115, Indonesia
                                </p>
                            </div>
                            <div class="col-4">
                                <a href="https://www.google.com/maps/place/Jl.+Dwikora+I+No.16,+Suka+Maju,+Kec.+Sail,+Kota+Pekanbaru,+Riau+28115/@0.5177796,101.4628545,17z/data=!3m1!4b1!4m5!3m4!1s0x31d5ac265500d6d1:0x137509788843f687!8m2!3d0.5177742!4d101.4654348?entry=ttu&g_ep=EgoyMDI1MDkxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="color: black; margin-left: 10px;"
                                    class="see-on-maps-link">
                                    <i class="bi bi-geo-alt-fill" style="margin-right: 6px"></i>
                                    <b>See On Maps</b>
                                </a>
                            </div>
                        </div>
                        <br>
                        <h5>WORKSHOP</h5>
                        <div class="row" style="border-bottom: solid 1px black;">
                            <div class="col-8">
                                <p>
                                    Jl. Balai Kimia l 15, RT 15/RW 9, Pekayon, <br>Kec. Ps.
                                    Rebo, East Jakarta, Jakarta 13790, <br> Indonesia
                                </p>
                            </div>
                            <div class="col-4">
                                <a href="https://www.google.com/maps/search/Jl.+Balai+Kimia+l+15,+RT+15%2FRW+9,+Pekayon,+Kec.+Ps.+Rebo,+East+Jakarta,+Jakarta+13790,+Indonesia/@-6.3444593,106.8569056,17z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDkxMC4wIKXMDSoASAFQAw%3D%3D" target="_blank" style="color: black; margin-left: 10px;"
                                    class="see-on-maps-link">
                                    <i class="bi bi-geo-alt-fill" style="margin-right: 6px"></i>
                                    <b>See On Maps</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</template>
<style scoped>
.see-on-maps-link:hover,
.see-on-maps-link:focus {
    color: #007bff;
    text-decoration: underline;
    outline: none;
}
</style>