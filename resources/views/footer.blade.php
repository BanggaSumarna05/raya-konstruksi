<footer id="footer" class="footer">
    <div class="footer-content position-relative">
        <div class="container px-5">
            <div class="row">

                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4
                        style="border-bottom: 3px solid #2a4184; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;">
                        Who We are</h4>
                    <ul>
                        <li><a href="{{ route('whoWeAre') }}#company-profile">Company Profile</a></li>
                        <li><a href="{{ route('whoWeAre') }}#vision">Vision & Mission</a></li>
                        <li><a href="{{ route('whoWeAre') }}#core-values">Core Values</a></li>
                        <li><a href="{{ route('whoWeAre') }}#vision">Key Milestones</a></li>
                        <li><a href="{{ route('corporateStructure') }}">Leadership</a></li>
                        <li><a href="{{ route('clientPartner') }}">Client & Partners</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4
                        style="border-bottom: 3px solid #2a4184; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;">
                        What We Do</h4>
                    <ul>
                        <li><a href="{{ route('catalyst-loading') }}#catalyst-loading">Catalyst Loading</a></li>
                        <li><a href="{{ route('plantMaintenance') }}">Plant Maintenance</a></li>
                        <li><a href="{{ route('whatWeDo') }}#construction">Construction & Fabrication</a></li>
                        <li><a href="{{ route('whatWeDo') }}#construction">Soil & Civil Works</a></li>
                        {{-- <li><a href="{{ route('whatWeDo') }}#construction">Portfolio</a></li>
                        <li><a href="{{ route('heaveyRental') }}">Heavy Equipment List</a></li> --}}
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4
                        style="border-bottom: 3px solid #2a4184; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;">
                        Sustainability</h4>
                    <ul>
                        <li><a href="{{ route('sustainability') }}">Health, Safety & Environment</a></li>
                        {{-- <li><a href="{{ route('whatWeDo') }}#catalyst-loading">Quality & Risk Management</a></li> --}}
                        {{-- <li><a href="{{ route('whatWeDo') }}#catalyst-loading">QOHSE Policy</a></li> --}}
                        {{-- <li><a href="{{ route('whatWeDo') }}#catalyst-loading">Awards & Certificates</a></li> --}}
                        <li><a href="{{ route('whatWeDo') }}#catalyst-loading">Corporate Social Responsibility</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4
                        style="border-bottom: 3px solid #2a4184; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;">
                        Careers</h4>
                    <ul>
                        <li>
                            <a href="{{ route('career') }}" class="{{ Route::is('career') ? 'active' : '' }}">Why Join
                                Us</a>
                        </li>
                        <li>
                            <a href="{{ route('career') }}" class="{{ Route::is('career') ? 'active' : '' }}">Job
                                Opportunities</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4
                        style="border-bottom: 3px solid #2a4184; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;">
                        News & Events</h4>
                    <ul>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-2 footer-links" data-aos="fade-up" data-aos-delay="100">
                    <h4
                        style="border-bottom: 3px solid #2a4184; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;">
                        Contact Us</h4>
                    <ul>
                        <a href="{{ route('contactUs') }}" class="{{ Route::is('contactUs') ? 'active' : '' }}">Get In
                            Touch</a>
                    </ul>
                    <h4 style="border-bottom: 3px solid #2a4184; display: inline-block; padding-bottom: 12px; margin-bottom: 16px;"
                        class="mt-5">
                        Follow Us</h4>
                    <ul>
                        <li>
                            <a href="https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all" aria-label="L2inkedIn" target="_blank">
                                <i class="bi bi-linkedin"></i> Linkedin
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/rayakonstruksiinternasional/" aria-label="Instagram">
                                <i class="bi bi-instagram"></i> Instagram
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-legal position-relative">
                <div class="copyright">
                    &copy; Copyright RAYA Construction International 2025 All Rights
                    Reserved
                </div>
            </div>
        </div>

    </div>


</footer>
