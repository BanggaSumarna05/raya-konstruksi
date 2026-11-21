<footer id="footer" class="rk-footer">
    <div class="rk-footer__inner">
        <div class="rk-footer__brand">
            <a href="{{ route('index') }}" class="rk-footer__logo" aria-label="PT Raya Konstruksi Internasional">
                <img src="{{ asset('assets/img/logo-raya-polos.webp') }}"
                    alt="PT Raya Konstruksi Internasional" width="200" height="57" loading="lazy"
                    decoding="async">
            </a>
            <p class="rk-footer__tagline">Building Tomorrow,<br>
                Today.</p>
            <a href="{{ route('contactUs') }}" class="rk-footer__cta">
                Contact Us
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

        <div class="rk-footer__rule" aria-hidden="true"></div>

        <nav class="rk-footer__nav" aria-label="Footer navigation">
            <div class="rk-footer__col">
                <p class="rk-footer__col-title">Company</p>
                <ul aria-label="Company">
                    <li><a href="{{ route('whoWeAre') }}">About Us</a></li>
                    <li><a href="{{ route('whoWeAre') }}#company-profile">Company Profile</a></li>
                    <li><a href="{{ route('whoWeAre') }}#vision">Vision &amp; Mission</a></li>
                    <li><a href="{{ route('corporateStructure') }}">Our Team</a></li>
                </ul>
            </div>
            <div class="rk-footer__col">
                <p class="rk-footer__col-title">Our Business</p>
                <ul aria-label="Our Business">
                    <li><a href="{{ route('whatWeDo') }}">Services</a></li>
                    <li><a href="{{ route('portfolio') }}">Projects</a></li>
                    <li><a href="{{ route('clientPartner') }}">Clients &amp; Partners</a></li>
                </ul>
            </div>
            <div class="rk-footer__col">
                <p class="rk-footer__col-title">Information</p>
                <ul aria-label="Information">
                    <li><a href="{{ route('news') }}">News &amp; Events</a></li>
                    <li><a href="{{ route('career') }}">Careers</a></li>
                    <li><a href="{{ route('sustainability') }}">Sustainability</a></li>
                    <li><a href="{{ route('cyberInfo') }}">Cyber Security</a></li>
                </ul>
            </div>
            <div class="rk-footer__col rk-footer__col--contact">
                <p class="rk-footer__col-title">Contact</p>
                <ul aria-label="Contact">
                    <li>
                        <a href="{{ route('contactUs') }}" class="rk-footer__address">
                            Talavera Office Park,<br>
                            15th&nbsp;Floor<br>
                            Jl. TB Simatupang No. 23, South Jakarta
                        </a>
                    </li>
                    <li><a href="mailto:marketing@rayakonstruksi.com">marketing@<wbr>rayakonstruksi.com</a></li>
                    <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <div class="rk-footer__bottom">
            <p class="rk-footer__copyright">&copy; {{ date('Y') }} PT Raya Konstruksi.</p>
            <div class="rk-footer__legal">
                <span>Privacy Policy</span>
                <span>Terms &amp; Conditions</span>
            </div>
            <div class="rk-footer__social" aria-label="Social media">
                @php
                    $instagramUrl = \App\Models\Setting::get('instagram_url', 'https://www.instagram.com/raya.konstruksi');
                    $threadsUrl = \App\Models\Setting::get('threads_url', 'https://www.threads.net/@raya.konstruksi');
                    $linkedinUrl = \App\Models\Setting::get('linkedin_url', 'https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all');
                @endphp
                <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                    <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
                <a href="{{ $threadsUrl }}" target="_blank" rel="noopener noreferrer" aria-label="Threads">
                    <i class="bi bi-threads" aria-hidden="true"></i>
                </a>
                <a href="{{ $linkedinUrl }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<style>
    .rk-footer {
        --rk-navy: #2B4184;
        position: relative;
        isolation: isolate;
        overflow: hidden;
        background:
            radial-gradient(120% 160% at 100% 0%, rgba(255, 255, 255, 0.07) 0%, rgba(255, 255, 255, 0) 48%),
            var(--rk-navy);
        color: #FFFFFF;
        margin: 0;
    }

    .rk-footer__inner {
        position: relative;
        z-index: 1;
        max-width: 1200px;
        margin: 0 auto;
        padding: clamp(56px, 6vw, 84px) clamp(20px, 5vw, 40px) 0;
    }

    /* Brand row */
    .rk-footer__brand {
        display: flex;
        align-items: center;
        gap: clamp(24px, 4vw, 56px);
        padding-bottom: clamp(30px, 4vw, 44px);
    }

    .rk-footer__logo {
        display: inline-flex;
        flex: 0 0 auto;
        width: fit-content;
    }

    .rk-footer__logo img {
        width: clamp(150px, 14vw, 190px);
        height: auto;
        filter: brightness(0) invert(1);
        opacity: 0.97;
    }

    .rk-footer__tagline {
        flex: 1 1 auto;
        margin: 0;
        text-align: center;
        font-family: "Figtree", sans-serif;
        font-size: clamp(15px, 1.75vw, 24px);
        font-weight: 800;
        line-height: 1.25;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #FFFFFF;
    }

    .rk-footer__cta {
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        height: 44px;
        padding: 0 20px;
        border: 1px solid rgba(255, 255, 255, 0.7);
        border-radius: 9999px;
        background: transparent;
        color: #FFFFFF;
        font-family: "Figtree", sans-serif;
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        text-decoration: none;
        white-space: nowrap;
        transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease;
    }

    .rk-footer__cta i {
        font-size: 12px;
        transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .rk-footer__cta:hover {
        background: #FFFFFF;
        border-color: #FFFFFF;
        color: var(--rk-navy);
    }

    .rk-footer__cta:hover i {
        transform: translateX(3px);
    }

    .rk-footer__cta:focus-visible,
    .rk-footer__logo:focus-visible,
    .rk-footer__nav a:focus-visible,
    .rk-footer__social a:focus-visible {
        outline: 2px solid #CAD0E0;
        outline-offset: 4px;
        border-radius: 2px;
    }

    .rk-footer__rule {
        height: 1px;
        background: rgba(255, 255, 255, 0.16);
    }

    /* Navigation */
    .rk-footer__nav {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: clamp(28px, 4vw, 56px);
        padding: clamp(36px, 4.4vw, 50px) 0 clamp(26px, 3vw, 36px);
    }

    .rk-footer__col-title {
        margin: 0 0 12px;
        font-family: "Figtree", sans-serif;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: rgba(220, 227, 237, 0.82);
    }

    .rk-footer__col ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .rk-footer__col li + li {
        margin-top: 4px;
    }

    .rk-footer__col a {
        display: inline-flex;
        align-items: center;
        min-height: 44px;
        padding: 0;
        font-family: "Figtree", system-ui, sans-serif;
        font-size: 13.5px;
        line-height: 1.6;
        color: rgba(220, 227, 237, 0.86);
        text-decoration: none;
        transition: color 0.25s ease;
    }

    .rk-footer__col a:hover {
        color: #FFFFFF;
    }

    .rk-footer__address {
        font-size: 13px !important;
        color: rgba(220, 227, 237, 0.76) !important;
    }

    .rk-footer__address:hover {
        color: #FFFFFF !important;
    }

    /* Social */
    .rk-footer__social {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .rk-footer__social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border: 1px solid rgba(255, 255, 255, 0.26);
        border-radius: 50%;
        color: #FFFFFF;
        font-size: 15px;
        text-decoration: none;
        transition: background 0.3s ease, border-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    }

    .rk-footer__social a:hover {
        background: #CAD0E0;
        border-color: #CAD0E0;
        color: #101820;
        transform: translateY(-2px);
    }

    /* Bottom */
    .rk-footer__bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px 32px;
        margin-top: clamp(36px, 4vw, 56px);
        padding: 24px 0 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.14);
    }

    .rk-footer__copyright,
    .rk-footer__legal {
        margin: 0;
        font-family: "Figtree", system-ui, sans-serif;
        font-size: 12px;
        color: rgba(220, 227, 237, 0.62);
    }

    .rk-footer__legal {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 6px 18px;
    }

    .rk-footer__legal span + span {
        position: relative;
    }

    .rk-footer__legal span + span::before {
        content: "";
        position: absolute;
        left: -10px;
        top: 50%;
        width: 3px;
        height: 3px;
        margin-top: -1.5px;
        border-radius: 50%;
        background: rgba(220, 227, 237, 0.35);
    }

    /* Tablet */
    @media (max-width: 1024px) {
        .rk-footer__nav {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 32px 40px;
        }

        .rk-footer__tagline {
            font-size: clamp(15px, 2.2vw, 19px);
        }
    }

    /* Mobile */
    @media (max-width: 767px) {
        .rk-footer__brand {
            flex-direction: column;
            align-items: center;
            gap: 22px;
            text-align: center;
        }

        .rk-footer__tagline br {
            display: none;
        }

        .rk-footer__cta {
            height: 44px;
        }

        .rk-footer__nav {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 28px;
        }

        .rk-footer__bottom {
            flex-direction: column;
            justify-content: center;
            gap: 16px;
            padding-bottom: 34px;
            text-align: center;
        }

        .rk-footer__legal span + span::before {
            display: none;
        }
    }

    @media (max-width: 479px) {
        .rk-footer__tagline {
            font-size: 14px;
        }

        .rk-footer__col-title {
            font-size: 10px;
        }

        .rk-footer__col a {
            font-size: 13px;
        }
    }
</style>
