<header id="header" class="header d-flex align-items-center" style="background-color: white">
    <div class="container container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center" {{-- style="padding-left:2em" --}}>
            <img src="/assets/img/raya-black.png" alt="Logo Makadia Group International"
                title="Logo Makadia Group International">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li>

                </li>
                <li class="dropdown"><a href="{{ route('whoWeAre') }}"
                        class="{{ Route::is('whoWeAre') ? 'active' : '' }}">Who We Are</a>
                    <ul>
                        <li><a href="{{ route('whoWeAre') }}#company-profile">Company Profile</a></li>
                        <li><a href="{{ route('whoWeAre') }}#vision">Vision & Mission</a></li>
                        <li><a href="{{ route('whoWeAre') }}#core-values">Core Values</a></li>
                        <li><a href="{{ route('whoWeAre') }}#vision">Key Milestones</a></li>
                        <li><a href="{{ route('corporateStructure') }}">Leadership</a></li>
                        <li><a href="{{ route('clientPartner') }}">Client & Partners</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ route('whatWeDo') }}"
                        class="{{ Route::is('whatWeDo') ? 'active' : '' }}">What We Do</a>
                    <ul>
                        <li><a href="{{ route('whatWeDo') }}#catalyst-loading">Catalyst Loading</a></li>
                        <li><a href="{{ route('whatWeDo') }}#plant-maintenance">Plant Maintenance</a></li>
                        <li><a href="{{ route('whatWeDo') }}#engineering">Engineering & Manpower Supply</a></li>
                        <li><a href="{{ route('whatWeDo') }}#construction">Construction & Fabrication</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('index') }}">Sustainability</a>
                </li>
                <li>
                    <a href="{{ route('index') }}">News & Events</a>
                </li>
                <li>
                    <a href="{{ route('career') }}" class="{{ Route::is('career') ? 'active' : '' }}">Careers</a>
                </li>
                <li>
                    <a href="{{ route('contactUs') }}" class="{{ Route::is('contactUs') ? 'active' : '' }}">Contact
                        Us</a>
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
        if (window.pageYOffset > (sticky + 300)) {
            header.classList.add("sticky");
            // header.style.backgroundColor = "white";
        } else {
            header.classList.remove("sticky");
            // header.style.backgroundColor = "white";
        }
    }
</script>
