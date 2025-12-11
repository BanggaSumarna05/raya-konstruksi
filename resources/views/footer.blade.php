<footer id="footer" class="footer improved-footer">

    <div class="footer-content position-relative">
        <div class="container px-20 pt-10">
            <div class="row">
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="text-white">
                        RAYA
                        {{-- KONSTRUKSI INTERNASIONAL --}}
                    </h1>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="border-bottom: 3px solid #ffff; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;"
                        class="text-white">
                        Who We are</h4>
                    <ul>
                        <li><a href="{{ route('whoWeAre') }}#company-profile" class="text-white">Company Profile</a>
                        </li>
                        <li><a href="{{ route('whoWeAre') }}#vision" class="text-white">Vision & Mission</a></li>
                        <li><a href="{{ route('whoWeAre') }}#core-values" class="text-white">Core Values</a></li>
                        <li><a href="{{ route('whoWeAre') }}#vision" class="text-white">Key Milestones</a></li>
                        <li><a href="{{ route('corporateStructure') }}" class="text-white">Leadership</a></li>
                        <li><a href="{{ route('clientPartner') }}" class="text-white">Client & Partners</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="border-bottom: 3px solid #ffff; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;"
                        class="text-white">
                        What We Do</h4>
                    <ul>
                        <li><a href="{{ route('catalyst-loading') }}#catalyst-loading" class="text-white">Catalyst
                                Loading</a></li>
                        <li><a href="{{ route('plantMaintenance') }}" class="text-white">Plant Maintenance</a></li>
                        <li><a href="{{ route('whatWeDo') }}#construction" class="text-white">Construction &
                                Fabrication</a></li>
                        <li><a href="{{ route('whatWeDo') }}#construction" class="text-white">Soil & Civil Works</a>
                        </li>
                        {{-- <li><a href="{{ route('whatWeDo') }}#construction">Portfolio</a></li>
                        <li><a href="{{ route('heaveyRental') }}">Heavy Equipment List</a></li> --}}
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="border-bottom: 3px solid #ffff; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;"
                        class="text-white">
                        Sustainability</h4>
                    <ul>
                        <li><a href="{{ route('sustainability') }}" class="text-white">Health, Safety & Environment</a>
                        </li>
                        {{-- <li><a href="{{ route('whatWeDo') }}#catalyst-loading">Quality & Risk Management</a></li> --}}
                        {{-- <li><a href="{{ route('whatWeDo') }}#catalyst-loading">QOHSE Policy</a></li> --}}
                        {{-- <li><a href="{{ route('whatWeDo') }}#catalyst-loading">Awards & Certificates</a></li> --}}
                        <li><a href="{{ route('whatWeDo') }}#catalyst-loading" class="text-white">Corporate Social
                                Responsibility</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="border-bottom: 3px solid #ffff; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;"
                        class="text-white">
                        Careers</h4>
                    <ul>
                        <li>
                            <a href="{{ route('career') }}"
                                class="{{ Route::is('career') ? 'active' : '' }} text-white">Why Join
                                Us</a>
                        </li>
                        <li>
                            <a href="{{ route('career') }}"
                                class="{{ Route::is('career') ? 'active' : '' }} text-white">Job
                                Opportunities</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4
                        style="border-bottom: 3px solid #ffff; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;">
                        News & Events</h4>
                    <ul>
                        <li><a href="#">News</a></li>
                    </ul>
                </div> --}}
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="border-bottom: 3px solid #ffff; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;"
                        class="text-white">
                        Contact Us</h4>
                    <ul>
                        <a href="{{ route('contactUs') }}"
                            class="{{ Route::is('contactUs') ? 'active' : '' }} text-white">Get In
                            Touch</a>
                    </ul>
                    <h4 style="border-bottom: 3px solid #ffff; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;"
                        class="mt-5 text-white">
                        Follow Us</h4>
                    <ul>
                        <li>
                            <a href="https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all"
                                aria-label="L2inkedIn" target="_blank" class="text-white">
                                <i class="bi bi-linkedin"></i> Linkedin
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/rayakonstruksiinternasional/" aria-label="Instagram"
                                class="text-white">
                                <i class="bi bi-instagram"></i> Instagram
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-legal position-relative">
                <div class="copyright text-white align-center">
                    &copy; Copyright RAYA KONSTRUKSI INTERNASIONAL. All Rights Reserved.
                </div>
            </div>
        </div>

    </div>


</footer>
<style>
    .improved-footer {
        position: relative;
        background-color: #2a4184;
        /* tetap solid */
        overflow: hidden;
        z-index: 1;
    }

    /* Hanya background image + filter invert + gradient transparan */
    .improved-footer::before {
        content: "";
        position: absolute;
        inset: 0;

        background-image: url('/assets/img/logo-raya-clean-footer.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;

        filter: brightness(0) invert(1);
        /* gambar jadi putih */

        /* Inilah kuncinya → hanya gambar yang kena gradasi */
        -webkit-mask-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 0.4),
                /* bagian atas 100% terlihat */
                rgba(0, 0, 0, 0.3),
                /* tengah 50% transparan */
                rgba(0, 0, 0, 0)
                /* bawah hilang total */
            );
        mask-image: linear-gradient(to bottom,
                rgba(0, 0, 0, 0.4),
                rgba(0, 0, 0, 0.3),
                rgba(0, 0, 0, 0));

        z-index: -1;
    }
</style>
