<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { VuePreloader } from 'vue-preloader';
import '/node_modules/vue-preloader/dist/style.css';
let csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>

<template>
    <Head title="Contact Us" />
    <!-- ======= Hero Section ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
        <div class="container hero position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2>Contact</h2>
        </div>
    </div>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center px-4">
                        <i class="bi bi-map"></i>
                        <h3>Our Address</h3>
                        <p>Talavera Office Park, 11th floor. T.B. Simatupang, Kav. 22 – 26, South Jakarta, Indonesia</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center px-4">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>marketing@makadiagroup.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center px-4">
                        <a href="https://wa.me/6281931889626" target="_blank" rel="noopener noreferrer"><i
                                class="bi bi-telephone"></i></a>
                        <h3>Call Us</h3>
                        <p><a href="https://wa.me/6281931889626" target="_blank" rel="noopener noreferrer">(+62)
                                81931889626</a></p>
                    </div>
                </div>

            </div>

            <div class="row gy-4 mt-1">

                <div class="col-lg-6 ">
                    <iframe
                        src="https://maps.google.com/maps?width=600&amp;height=800&amp;hl=en&amp;q=talavera office park&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        frameborder="0" style="border:0; width: 100%; height: 720px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form :action="route('submitEmail')" method="POST" role="form" class="php-email-form">
                        <input type="hidden" name="_token" :value="csrf">
                        <div class="row gy-4">
                            <div class="col-lg-12 form-group">
                                <div class="section-header" data-aos="fade-down" data-aos-delay="100"
                                    style="margin-bottom: 0px;padding-bottom: 4px">
                                    <h2>Get in touch</h2>
                                </div>
                                <p class="rapih" style="font-size: 0.9em;">
                                    Experience our 24-hour rental service, boasting a fleet of over 30 meticulously
                                    selected units renowned for their world-class quality. From luxurious vehicles to
                                    versatile equipment, we ensure that each unit exceeds expectations, providing you with
                                    unparalleled reliability and performance. <br><br>
                                    Every aspect of our fleet is maintained with precision and expertise,
                                    adhering to stringent standards to guarantee optimal functionality and safety. We take
                                    pride in our <b>ISO 9001:2015</b> & <b>14001:2015</b>
                                    certifications. Affirmed
                                    our commitment to quality. Contact us now to access top-tier
                                    rentals and experience.
                                </p>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LcPescpAAAAAC6TDCB7lTlGDzC1jms6yrvgo2pd"></div>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section>
</template>