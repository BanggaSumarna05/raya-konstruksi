<header id="header" class="header d-flex align-items-center" style="background-color: white">
    <div class="container container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="/assets/img/logo-raya.png" alt="Logo Raya Konstruksi International"
                title="Logo Makadia Group International">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color:#2a4184"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="d-flex d-lg-none pb-15">
                    <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                        <img src="/assets/img/logo-raya.png" alt="Logo Raya Konstruksi International"
                            title="Raya Konstruksi International">
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('whoWeAre') }}"
                        class="
                     {{ Route::is('whoWeAre') || Request::is('who-we-are/*') ? 'active' : '' }}
                     ">Who
                        We Are
                        <span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </a>
                    <ul>
                        <li><a href="{{ route('whoWeAre') }}#company-profile">Company Profile</a></li>
                        <li><a href="{{ route('whoWeAre') }}#vision">Vision & Mission</a></li>
                        <li><a href="{{ route('whoWeAre') }}#core-values">Core Values</a></li>
                        <li><a href="{{ route('whoWeAre') }}#milestones">Key Milestones</a></li>
                        <li><a href="{{ route('corporateStructure') }}"
                                class="{{ Route::is('corporateStructure') || Request::is('who-we-are/*') ? 'active' : '' }}">Leadership</a>
                        </li>

                        <li><a href="{{ route('clientPartner') }}">Client & Partners</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route('whatWeDo') }}"
                        class="{{ Route::is('whatWeDo') || Request::is('what-we-do/*') ? 'active' : '' }}">What We
                        Do
                        <span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                    <ul>
                        <li><a href="{{ route('whatWeDo') }}#construction">Construction & Fabrication</a></li>
                        <li><a href="{{ route('catalyst-loading') }}">Catalyst Loading</a></li>
                        <li><a href="{{ route('plantMaintenance') }}">Plant Maintenance</a></li>
                        <li><a href="{{ route('whatWeDo') }}">Soil & Civil Works</a></li>
                        <li><a href="{{ route('heaveyRental') }}">Heavy Equipment List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('sustainability') }}"
                        class="{{ Route::is('sustainability') || Request::is('sustainability/*') ? 'active' : '' }}">Sustainability
                        <span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                    <ul>
                        <li><a href="{{ route('safety') }}">Health, Safety & Environment</a></li>
                        <li><a href="{{ route('respon') }}">Corporate Social Responsibility
                            </a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('news') }}"
                        class="{{ Route::is('news') || Request::is('news-n-event/*') ? 'active' : '' }}">News &
                        Events<span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                </li>
                <li>
                    <a href="{{ route('career') }}"
                        class="{{ Route::is('career') || Request::is('career/*') ? 'active' : '' }}">Careers<span
                            class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                </li>
                <li>
                    <a href="{{ route('contactUs') }}"
                        class="{{ Route::is('contactUs') || Request::is('contactUs/*') ? 'active' : '' }}">Contact
                        Us<span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}" target="_blank"
                        class="{{ Route::is('portfolio') || Request::is('portfolio/*') ? 'active' : '' }}">Portfolio<span
                            class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                </li>
                <li class="d-flex d-lg-none pt-75">
                    <div>
                        <div class="copyright m-3">
                            &copy; Copyright <b>RAYA Construction International</b> 2025 All Rights
                            Reserved
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

    </div>

</header>

<script>
    window.onscroll = function() {
        myFunction();
    };


    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
        // header.style.backgroundColor = "white";
        if (window.pageYOffset > (sticky + 150)) {
            header.classList.add("sticky");
            // header.style.backgroundColor = "white";
        } else {
            header.classList.remove("sticky");
            // header.style.backgroundColor = "white";
        }
    }
</script>
