<header id="header" class="header d-flex align-items-center">
    <div class="container container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="/assets/img/logo-raya-polos.webp" alt="Logo Raya Konstruksi International"
                title="Logo Raya Konstruksi International" width="149" height="44">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list" style="color:#1B2F6E"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="d-flex d-lg-none pb-15">
                    <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                        <img src="/assets/img/logo-raya-polos.webp" alt="Logo Raya Konstruksi International"
                            title="Raya Konstruksi International" width="149" height="44">
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('whoWeAre') }}"
                        class="{{ Route::is('whoWeAre') || Request::is('who-we-are/*') ? 'active' : '' }}">Who
                        We Are
                        <span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </a>
                    <ul>
                        <li><a href="{{ route('whoWeAre') }}#company-profile">Company Profile</a></li>
                        <li><a href="{{ route('whoWeAre') }}#vision">Vision &amp; Mission</a></li>
                        {{-- <li><a href="{{ route('corporateStructure') }}"
                                class="{{ Route::is('corporateStructure') ? 'active' : '' }}">Leadership</a>
                        </li> --}}
                        <li><a href="{{ route('clientPartner') }}">Client &amp; Partners</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route('whatWeDo') }}"
                        class="{{ Route::is('whatWeDo') || Request::is('what-we-do/*') ? 'active' : '' }}">What We
                        Do
                        <span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                    <ul>
                        <li><a href="{{ route('whatWeDo') }}#construction">Construction &amp; Fabrication</a></li>
                        <li><a href="{{ route('catalyst-loading') }}">Catalyst Handling</a></li>
                        <li><a href="{{ route('plantMaintenance') }}">Operation & Maintenance</a></li>
                        <li><a href="{{ route('whatWeDo') }}#civil">Soil &amp; Civil Works</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('sustainability') }}"
                        class="{{ Route::is('sustainability') || Request::is('sustainability/*') ? 'active' : '' }}">Sustainability
                        <span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                    <ul>
                        <li><a href="{{ route('safety') }}">Health, Safety &amp; Environment</a></li>
                        <li><a href="{{ route('respon') }}">Corporate Social Responsibility
                            </a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('news') }}"
                        class="{{ Route::is('news') || Request::is('news-n-event/*') ? 'active' : '' }}">News &amp;
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
                        class="{{ Route::is('contactUs') ? 'active' : '' }}">Contact
                        Us<span class="d-lg-none">
                            <i class="bi bi-chevron-right"></i>
                        </span></a>
                </li>
                <li class="d-flex d-lg-none pt-75">
                    <div>
                        <div class="copyright m-3">
                            &copy; Copyright <b>RAYA Construction International</b> 2026 All Rights
                            Reserved
                        </div>
                    </div>
                </li>
            </ul>
        </nav>

    </div>

</header>

<script>
    var header = document.getElementById("header");

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
</script>
