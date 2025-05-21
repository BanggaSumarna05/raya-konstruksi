<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <main>
        <header id="header" class="header d-flex align-items-center">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <Link :href="route('index')" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="/assets/img/makadia.png" alt="Logo Makadia Group International" srcset="">
                </Link>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li>
                            <Link :href="route('index')" class=" Route::is('index') ? 'active' : '' ">Home</Link>
                        </li>
                        <li class="dropdown">
                            <Link :href="route('about')" class=" Route::is('about') ? 'active' : '' "><span>About
                                Us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></Link>
                            <ul>
                                <li>
                                    <Link :href="route('about')">About</Link>
                                </li>
                                <li>
                                    <Link :href="route('about')">Value</Link>
                                </li>
                                <li>
                                    <Link :href="route('about')">Visi & Misi</Link>
                                </li>
                                <li>
                                    <Link :href="route('about')">Management</Link>
                                </li>
                            </ul>
                        </li>
                        <li><a :href="route('service')" class=" Route::is('service') ? 'active' : '' ">Services</a>
                        </li>
                        <li><a :href="route('project')" class=" Route::is('project') ? 'active' : '' ">Projects</a>
                        </li>
                        <li><a class="" :href="route('equipment.index')">Equipment</a></li>
                        <li><a :href="route('contact')">Contact</a></li>
                    </ul>
                </nav><!-- .navbar -->

            </div>
        </header>

        <body>
            <slot />
        </body>
        <footer id="footer" class="footer">
            <div class="footer-content position-relative">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-3" data-aos="fade-right" data-aos-delay="100">
                            <div class="footer-info">
                                <img src="/assets/img/makadia.png" alt="Logo Makadia Group International"
                                    style="max-width: 70%">
                                <br><br>
                                <div class="row" style="background-color: transparent;">
                                    <div class="social-links d-flex mt-3">
                                        <img src="assets/img/isos2.png" style="max-width: 22em; max-height: 5.8em;" alt=""
                                            srcset="">
                                    </div>
                                </div>
                                <br><br>
                                <p>
                                    <strong>Phone:</strong> (021) 2781 4774<br>
                                    <strong>Email:</strong> marketing@makadiagroup.com
                                </p>
                                <div class="social-links d-flex mt-3">
                                    <a href="https://www.instagram.com/makadiagroupinternational/" target="_blank"
                                        class="d-flex align-items-center justify-content-center"><i
                                            class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/pt-makadia-grup-internasional/"
                                        target="_blank" class="d-flex align-items-center justify-content-center"><i
                                            class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End footer info column-->

                        <div class="col-lg-3 col-md-3 footer-links" data-aos="fade-right" data-aos-delay="100">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('service') }}">Services</a></li>
                                <li><a href="{{ route('project') }}">Projects</a></li>
                                <li><a href="{{ route('index') }}">Equipments</a></li>

                            </ul>
                            <br>
                            <h4>Informative</h4>
                            <ul>
                                <li><a href="{{ route('cyberInfo') }}">
                                        Cyber Security Information
                                    </a></li>
                            </ul>
                        </div>
                        <!-- End footer links column-->

                        <div class="col-lg-3 col-md-3 footer-links" data-aos="fade-left" data-aos-delay="100">
                            <h4>Our Services</h4>
                            <ul>
                                <li><a href="#">Piping & Mechanical Construction</a></li>
                                <li><a href="#">Construction Equipment Rental Provider</a></li>
                                <li><a href="#">Operation & Maintenance</a></li>
                                <li><a href="#">Catalyst Handling Services</a></li>
                            </ul>
                        </div>
                        <!-- End footer links column-->

                        <div class="col-lg-3 col-md-3 footer-links" data-aos="fade-left" data-aos-delay="100">
                            <h4>Location</h4>
                            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=800&amp;hl=en&amp;q=talavera office park&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            <br><br>
                            <p class="rapih">
                                Talavera Office Park, 11th floor.
                                T.B. Simatupang, Kav. 22 – 26,
                                South Jakarta, Indonesia
                            </p>
                        </div>
                        <!-- End footer links column-->

                    </div>
                </div>
            </div>

            <div class="footer-legal text-center position-relative">
                <div class="container">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Makadia Group International</span></strong>. All Rights Reserved
                    </div>
                </div>
            </div>

        </footer>

    </main>
</template>