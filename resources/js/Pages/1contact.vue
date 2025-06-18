<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
let csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>

<template>

    <Head title="Contact Us" />
    <section id="contact" class="contact mb-10" >
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
                    <div style="padding-top: 40%; padding-left: 5%;">
                        <h4 style="color: black">Contact Details</h4>
                        <br>
                        <h5>PT RAYA KONSTRUKSI INTERNASIONAL</h5>
                        <p>
                            Talavera Office Park, 15th Floor.
                            <br>
                            Jl. TB Simatupang No.Kav. 22 - 26, South Jakarta, Indonesia
                        </p>
                        <a href="mailto:marketing@rayakonstruksi.com" style="color: black">
                            <i class="bi bi-envelope-fill" style="margin-right: 6px"></i>
                            <b>marketing@rayakonstruksi.com</b>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
</template>