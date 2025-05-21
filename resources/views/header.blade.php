<header id="header" class="header d-flex align-items-center" {{-- style="background-color: red" --}}>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between" style="margin-left: 0vh;">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <img src="/assets/img/makadia-new.png" alt="Logo Makadia Group International"
                title="Logo Makadia Group International">
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('index') }}" class="{{ Route::is('index') ? 'active' : '' }}">Home</a></li>
                <li class="dropdown"><a href="#" class="{{ Route::is('about') ? 'active' : '' }}"><span>About
                            Us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('about') }}#about">About</a></li>
                        <li><a href="{{ route('about') }}#value">Value</a></li>
                        <li><a href="{{ route('about') }}#vision">Vision & Mission</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('leadership') }}"
                        class="{{ Route::is('leadership') ? 'active' : '' }}">Leadership</a></li>
                <li class="dropdown"><a href="#"
                        class="{{ Route::is('service') ? 'active' : '' }}"><span>Services</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('service') }}">Plant Maintenance</a></li>
                        <li><a href="{{ route('service') }}">Engineering & Manpower Supply</a></li>
                        <li><a href="{{ route('service') }}">Construction & Fabrication</a></li>
                        <li><a href="{{ route('service') }}">Catalyst Loading</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('project') }}" class="{{ Route::is('project') ? 'active' : '' }}">Projects</a>
                </li>
                <li><a class="{{ Route::is('equipment.index') ? 'active' : '' }}"
                        href="{{ route('equipment.index') }}">Equipment</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li>
                    <a href="https://www.pekerjakita.com" target="_blank" style="position-left: 14vh;">
                        <img src="/assets/img/pekerjakita-w.png" alt=""
                            style="max-width: 24vh;
                          padding: 4px">
                    </a>
                <li>

                </li>
                <li>
                    <a href="{{ route('index') }}" class="">
                        <img class="tagline img-thumbnail" src="/assets/img/tagline-mgi.png" alt=""
                            style="background-color: transparent;border: 0px">
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</header>

<script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("header");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > (sticky + 300)) {
            header.classList.add("sticky");
            header.style.backgroundColor = "black";
        } else {
            header.classList.remove("sticky");
            header.style.backgroundColor = "transparent";
        }
    }
</script>