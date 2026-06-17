<script setup>
import { Head, Link } from "@inertiajs/vue3";
defineProps({ blogs: Array });
</script>

<template>
    <Head title="Home" />

    <!-- HERO -->
    <section
        id="hero"
        style="
            position: relative;
            height: calc(100vh - 72px);
            min-height: 650px;
            display: flex;
            flex-direction: column;
            background-color: #050a1a;
        "
    >
        <!-- Carousel Background & Text -->
        <div
            id="heroCarousel"
            class="carousel slide carousel-fade"
            data-bs-ride="carousel"
            data-bs-interval="5000"
            style="flex: 1; position: absolute; inset: 0; z-index: 1"
        >
            <div class="carousel-inner" style="height: 100%">
                <!-- Slide 1 -->
                <div
                    class="carousel-item active"
                    style="
                        height: 100%;
                        background: url(&quot;/assets/img/hero-carousel/hover-1-new.jpg&quot;)
                            center/cover no-repeat;
                    "
                >
                    <!-- Gradient overlay -->
                    <div
                        style="
                            position: absolute;
                            inset: 0;
                            background: linear-gradient(
                                to right,
                                rgba(10, 20, 50, 0.85) 30%,
                                rgba(10, 20, 50, 0.4) 65%,
                                rgba(10, 20, 50, 0.1) 100%
                            );
                            z-index: 1;
                        "
                    ></div>

                    <div
                        class="container position-relative d-flex flex-column justify-content-center"
                        style="
                            z-index: 2;
                            height: 100%;
                            padding-top: 20px;
                            padding-bottom: 120px;
                        "
                    >
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <h1
                                    style="
                                        font-weight: 800;
                                        font-size: clamp(24px, 4vw, 52px);
                                        color: #ffffff;
                                        line-height: 1.15;
                                        margin-bottom: 20px;
                                        text-transform: uppercase;
                                    "
                                >
                                    Building Tomorrow, Today
                                </h1>
                                <p
                                    style="
                                        color: rgba(255, 255, 255, 0.85);
                                        font-size: 15px;
                                        line-height: 1.75;
                                        max-width: 480px;
                                        margin-bottom: 0;
                                    "
                                >
                                    <strong style="color: #fff"
                                        >Raya Konstruksi</strong
                                    >
                                    provides end-to-end solutions including
                                    structural fabrication, civil works,
                                    installation, maintenance, and project
                                    execution—ensuring every client receives
                                    reliable workmanship, safe operations, and
                                    on-time delivery.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div
                    class="carousel-item"
                    style="
                        height: 100%;
                        background: url(&quot;/assets/img/hero-carousel/hover-2-new.jpg&quot;)
                            center/cover no-repeat;
                    "
                >
                    <!-- Gradient overlay -->
                    <div
                        style="
                            position: absolute;
                            inset: 0;
                            background: linear-gradient(
                                to right,
                                rgba(10, 20, 50, 0.85) 30%,
                                rgba(10, 20, 50, 0.4) 65%,
                                rgba(10, 20, 50, 0.1) 100%
                            );
                            z-index: 1;
                        "
                    ></div>

                    <div
                        class="container position-relative d-flex flex-column justify-content-center"
                        style="
                            z-index: 2;
                            height: 100%;
                            padding-top: 20px;
                            padding-bottom: 120px;
                        "
                    >
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <h1
                                    style="
                                        font-weight: 800;
                                        font-size: clamp(24px, 4vw, 52px);
                                        color: #ffffff;
                                        line-height: 1.15;
                                        margin-bottom: 20px;
                                        text-transform: uppercase;
                                    "
                                >
                                    Building Tomorrow, Today
                                </h1>
                                <p
                                    style="
                                        color: rgba(255, 255, 255, 0.85);
                                        font-size: 15px;
                                        line-height: 1.75;
                                        max-width: 480px;
                                        margin-bottom: 0;
                                    "
                                >
                                    <strong style="color: #fff"
                                        >Raya Konstruksi</strong
                                    >
                                    helps clients execute construction and
                                    industrial projects with strict quality
                                    control, reliable timelines, and a
                                    professional team committed to delivering
                                    clean, safe, and efficient work from
                                    planning to final handover.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="prev"
                style="width: 5%; z-index: 4"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                    style="
                        width: 3rem;
                        height: 3rem;
                        background-color: rgba(0, 0, 0, 0.3);
                        border-radius: 50%;
                    "
                ></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#heroCarousel"
                data-bs-slide="next"
                style="width: 5%; z-index: 4"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                    style="
                        width: 3rem;
                        height: 3rem;
                        background-color: rgba(0, 0, 0, 0.3);
                        border-radius: 50%;
                    "
                ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>

    <!-- 3 Service Cards Section (Moved from hero) -->
    <section class="service-cards-section" style="background: #050a1a; padding: 0;">
        <div class="container-fluid px-0">
            <div class="row g-0 justify-content-center">
                <!-- Card 1: Green -->
                <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                    <Link
                        :href="route('constructionFabrication')"
                        style="text-decoration: none; display: block; height: 100%;"
                    >
                        <div
                            style="background-color: #1b2f6e; padding: 32px 28px; height: 100%; transition: background-color 0.25s;"
                            onmouseover="this.style.backgroundColor = '#142257'"
                            onmouseout="this.style.backgroundColor = '#1B2F6E'"
                        >
                            <i class="bi bi-building" style="font-size: 26px; color: rgba(255, 255, 255, 0.9); display: block; margin-bottom: 16px;"></i>
                            <h5 style="font-weight: 700; font-size: 15px; color: #fff; margin-bottom: 10px; line-height: 1.4;">Construction &amp;<br />Fabrication</h5>
                            <p style="font-size: 11px; line-height: 1.6; color: rgba(255, 255, 255, 0.85); margin: 0;">Delivering high-quality civil works, steel fabrication, and industrial construction with strict safety and compliance standards.</p>
                        </div>
                    </Link>
                </div>
                <!-- Card 2: Gold -->
                <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                    <Link
                        :href="route('catalyst-loading')"
                        style="text-decoration: none; display: block; height: 100%;"
                    >
                        <div
                            style="background-color: #1b2f6e; padding: 32px 28px; height: 100%; transition: background-color 0.25s;"
                            onmouseover="this.style.backgroundColor = '#142257'"
                            onmouseout="this.style.backgroundColor = '#1B2F6E'"
                        >
                            <i class="bi bi-radioactive" style="font-size: 26px; color: rgba(255, 255, 255, 0.95); display: block; margin-bottom: 16px;"></i>
                            <h5 style="font-weight: 700; font-size: 15px; color: #fff; margin-bottom: 10px; line-height: 1.4;">Catalyst Handling</h5>
                            <p style="font-size: 11px; line-height: 1.6; color: rgba(255, 255, 255, 0.9); margin: 0;">Professional catalyst loading, unloading, and reactor handling services following global refinery safety standards.</p>
                        </div>
                    </Link>
                </div>
                <!-- Card 3: Navy -->
                <div class="col-lg-4 col-12 mb-lg-0 mb-3">
                    <Link
                        :href="route('plantMaintenance')"
                        style="text-decoration: none; display: block; height: 100%;"
                    >
                        <div
                            style="background-color: #1b2f6e; padding: 32px 28px; height: 100%; transition: background-color 0.25s;"
                            onmouseover="this.style.backgroundColor = '#142257'"
                            onmouseout="this.style.backgroundColor = '#1B2F6E'"
                        >
                            <i class="bi bi-gear-wide-connected" style="font-size: 26px; color: rgba(255, 255, 255, 0.9); display: block; margin-bottom: 16px;"></i>
                            <h5 style="font-weight: 700; font-size: 15px; color: #fff; margin-bottom: 10px; line-height: 1.4;">Operation &amp; Maintenance</h5>
                            <p style="font-size: 11px; line-height: 1.6; color: rgba(255, 255, 255, 0.8); margin: 0;">Comprehensive plant maintenance for industrial facilities, ensuring safe operations and minimal downtime.</p>
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </section>

    <!-- RAYA AT A GLANCE -->

    <!-- RAYA AT A GLANCE -->

    <section class="raya-glance-section" style="background: #fff">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Image Left -->
                <div class="col-lg-6">
                    <div
                        style="
                            position: relative;
                            display: inline-block;
                            width: 100%;
                        "
                    >
                        <img
                            src="/assets/img/culture2.jpg"
                            alt="Raya Konstruksi"
                            style="
                                width: 100%;
                                height: 400px;
                                object-fit: cover;
                                border-radius: 24px;
                            "
                        />
                        <!-- Accent block decoration -->
                        <div
                            style="
                                position: absolute;
                                bottom: 0;
                                left: 0;
                                width: 80px;
                                height: 80px;
                                background: #1b2f6e;
                                z-index: 2;
                            "
                        ></div>
                    </div>
                </div>
                <!-- Content Right -->
                <div class="col-lg-6 ps-lg-5">
                    <p
                        class="text-xs font-bold tracking-widest text-[#1B2F6E] uppercase mb-2"
                        style="
                            font-size: 12px;
                            font-weight: 700;
                            color: #1b2f6e;
                            letter-spacing: 2px;
                        "
                    >
                        RAYA AT A GLANCE
                    </p>
                    <h2
                        class="text-3xl lg:text-4xl font-black uppercase text-[#1B2F6E] leading-tight mb-3"
                        style="
                            font-weight: 900;
                            color: #1b2f6e;
                            text-transform: uppercase;
                        "
                    >
                        RAYA IS A TRUSTED<br />CONSTRUCTION COMPANY<br />BASED
                        IN INDONESIA.
                    </h2>
                    <!-- Divider -->
                    <div
                        class="w-10 h-1 bg-[#1B2F6E] my-4"
                        style="
                            width: 40px;
                            height: 4px;
                            background-color: #1b2f6e;
                        "
                    ></div>
                    <!-- Body text -->
                    <p
                        class="text-base mb-5"
                        style="
                            color: #555555;
                            font-size: 16px;
                            line-height: 1.7;
                        "
                    >
                        <strong>RAYA</strong> delivers comprehensive solutions
                        in fabrication, plant maintenance, catalyst handling
                        &amp; civil works for industrial projects across the
                        region.
                    </p>
                    <!-- Stats Grid -->
                    <div
                        class="row g-3"
                        style="border-top: 1px solid #e5e5e5; padding-top: 24px"
                    >
                        <div class="col-6 col-md-3">
                            <div style="text-align: left">
                                <div
                                    class="text-3xl font-black text-[#1B2F6E]"
                                    style="
                                        font-weight: 900;
                                        font-size: 28px;
                                        color: #1b2f6e;
                                    "
                                >
                                    36+
                                </div>
                                <div
                                    class="text-xs text-[#555555] uppercase tracking-wide mt-1"
                                    style="
                                        font-size: 11px;
                                        color: #555555;
                                        text-transform: uppercase;
                                        letter-spacing: 1px;
                                    "
                                >
                                    Completed<br />Projects
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div style="text-align: left">
                                <div
                                    class="text-3xl font-black text-[#1B2F6E]"
                                    style="
                                        font-weight: 900;
                                        font-size: 28px;
                                        color: #1b2f6e;
                                    "
                                >
                                    750+
                                </div>
                                <div
                                    class="text-xs text-[#555555] uppercase tracking-wide mt-1"
                                    style="
                                        font-size: 11px;
                                        color: #555555;
                                        text-transform: uppercase;
                                        letter-spacing: 1px;
                                    "
                                >
                                    Skilled<br />Manpower
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div style="text-align: left">
                                <div
                                    class="text-3xl font-black text-[#1B2F6E]"
                                    style="
                                        font-weight: 900;
                                        font-size: 28px;
                                        color: #1b2f6e;
                                    "
                                >
                                    10+
                                </div>
                                <div
                                    class="text-xs text-[#555555] uppercase tracking-wide mt-1"
                                    style="
                                        font-size: 11px;
                                        color: #555555;
                                        text-transform: uppercase;
                                        letter-spacing: 1px;
                                    "
                                >
                                    Years<br />Experience
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trusted By Section -->
            <div class="mt-5 pt-4">
                <div class="d-flex align-items-center gap-4 mb-4">
                    <hr
                        class="flex-grow-1"
                        style="border-color: #e5e5e5; margin: 0"
                    />
                    <span
                        class="text-xs font-bold tracking-widest text-[#555555] uppercase text-center"
                        style="
                            font-size: 11px;
                            font-weight: 700;
                            color: #555555;
                            letter-spacing: 2px;
                        "
                        >TRUSTED BY</span
                    >
                    <hr
                        class="flex-grow-1"
                        style="border-color: #e5e5e5; margin: 0"
                    />
                </div>
                <div
                    class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-lg-5"
                >
                    <img
                        src="/assets/img/client/logo-msm.png"
                        alt="Pertamina"
                        class="client-logo"
                    />
                    <img
                        src="/assets/img/client/logo-air-products.png"
                        alt="Pupuk Indonesia"
                        class="client-logo"
                    />
                    <img
                        src="/assets/img/client/lotte-chemical.png"
                        alt="Chandra Asri"
                        class="client-logo"
                    />
                    <img
                        src="/assets/img/client/logo-enerco.png"
                        alt="PLN"
                        class="client-logo"
                    />
                    <img
                        src="/assets/img/client/logo-unilever.png"
                        alt="Kideco"
                        class="client-logo"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE RAYA + FEATURED PROJECTS -->
    <section style="padding: 50px 0; background: #f5f6fa">
        <div class="container">
            <div class="row gy-5">
                <!-- Why Choose Raya -->
                <div class="col-lg-4">
                    <p
                        class="text-xs font-bold tracking-widest text-[#1B2F6E] uppercase mb-4"
                        style="
                            font-size: 12px;
                            font-weight: 700;
                            color: #1b2f6e;
                            letter-spacing: 2px;
                        "
                    >
                        WHY CHOOSE RAYA
                    </p>
                    <div class="d-flex flex-col gap-4">
                        <!-- Item 1 -->
                        <div class="d-flex gap-4 align-items-start mb-3">
                            <div
                                class="rounded-full bg-[#1B2F6E] d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 40px; height: 40px"
                            >
                                <i
                                    class="bi bi-people-fill"
                                    style="color: #fff; font-size: 20px"
                                ></i>
                            </div>
                            <div>
                                <h6
                                    style="
                                        font-weight: 700;
                                        color: #1b2f6e;
                                        font-size: 14px;
                                        text-transform: uppercase;
                                        margin: 0 0 4px;
                                    "
                                >
                                    Experienced Industrial Team
                                </h6>
                                <p
                                    style="
                                        color: #555555;
                                        font-size: 14px;
                                        margin: 0;
                                        line-height: 1.5;
                                    "
                                >
                                    Supported by skilled professionals with
                                    extensive industry experience.
                                </p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="d-flex gap-4 align-items-start mb-3">
                            <div
                                class="rounded-full bg-[#1B2F6E] d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 40px; height: 40px"
                            >
                                <i
                                    class="bi bi-shield-check"
                                    style="color: #fff; font-size: 20px"
                                ></i>
                            </div>
                            <div>
                                <h6
                                    style="
                                        font-weight: 700;
                                        color: #1b2f6e;
                                        font-size: 14px;
                                        text-transform: uppercase;
                                        margin: 0 0 4px;
                                    "
                                >
                                    Strong Safety Culture
                                </h6>
                                <p
                                    style="
                                        color: #555555;
                                        font-size: 14px;
                                        margin: 0;
                                        line-height: 1.5;
                                    "
                                >
                                    Safety is our top priority in every project
                                    we deliver.
                                </p>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="d-flex gap-4 align-items-start mb-3">
                            <div
                                class="rounded-full bg-[#1B2F6E] d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 40px; height: 40px"
                            >
                                <i
                                    class="bi bi-award"
                                    style="color: #fff; font-size: 20px"
                                ></i>
                            </div>
                            <div>
                                <h6
                                    style="
                                        font-weight: 700;
                                        color: #1b2f6e;
                                        font-size: 14px;
                                        text-transform: uppercase;
                                        margin: 0 0 4px;
                                    "
                                >
                                    Certified &amp; Compliant
                                </h6>
                                <p
                                    style="
                                        color: #555555;
                                        font-size: 14px;
                                        margin: 0;
                                        line-height: 1.5;
                                    "
                                >
                                    We adhere to international standards and
                                    industry best practices.
                                </p>
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="d-flex gap-4 align-items-start mb-3">
                            <div
                                class="rounded-full bg-[#1B2F6E] d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 40px; height: 40px"
                            >
                                <i
                                    class="bi bi-clock-history"
                                    style="color: #fff; font-size: 20px"
                                ></i>
                            </div>
                            <div>
                                <h6
                                    style="
                                        font-weight: 700;
                                        color: #1b2f6e;
                                        font-size: 14px;
                                        text-transform: uppercase;
                                        margin: 0 0 4px;
                                    "
                                >
                                    On-Time Project Delivery
                                </h6>
                                <p
                                    style="
                                        color: #555555;
                                        font-size: 14px;
                                        margin: 0;
                                        line-height: 1.5;
                                    "
                                >
                                    Committed to delivering quality work on
                                    schedule.
                                </p>
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="d-flex gap-4 align-items-start">
                            <div
                                class="rounded-full bg-[#1B2F6E] d-flex align-items-center justify-content-center flex-shrink-0"
                                style="width: 40px; height: 40px"
                            >
                                <i
                                    class="bi bi-geo-alt-fill"
                                    style="color: #fff; font-size: 20px"
                                ></i>
                            </div>
                            <div>
                                <h6
                                    style="
                                        font-weight: 700;
                                        color: #1b2f6e;
                                        font-size: 14px;
                                        text-transform: uppercase;
                                        margin: 0 0 4px;
                                    "
                                >
                                    Nationwide Coverage
                                </h6>
                                <p
                                    style="
                                        color: #555555;
                                        font-size: 14px;
                                        margin: 0;
                                        line-height: 1.5;
                                    "
                                >
                                    Serving industrial projects across
                                    Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Featured Projects -->
                <div class="col-lg-8">
                    <div
                        class="d-flex justify-content-between align-items-center mb-4"
                    >
                        <p
                            class="text-xs font-bold tracking-widest text-[#1B2F6E] uppercase mb-0"
                            style="
                                font-size: 12px;
                                font-weight: 700;
                                color: #1b2f6e;
                                letter-spacing: 2px;
                                margin: 0;
                            "
                        >
                            FEATURED PROJECTS
                        </p>
                        <Link
                            :href="route('portfolio')"
                            style="
                                font-size: 13px;
                                color: #1b2f6e;
                                font-weight: 700;
                                text-decoration: none;
                            "
                            >VIEW ALL PROJECTS →</Link
                        >
                    </div>
                    <div class="row g-3">
                        <!-- Project 1 -->
                        <div class="col-md-4">
                            <div
                                style="
                                    background: #ffffff;
                                    border: 1px solid #e5e5e5;
                                    border-radius: 8px;
                                    overflow: hidden;
                                    height: 100%;
                                    display: flex;
                                    flex-direction: column;
                                "
                            >
                                <div
                                    style="
                                        position: relative;
                                        width: 100%;
                                        aspect-ratio: 16/9;
                                        overflow: hidden;
                                    "
                                >
                                    <img
                                        src="/assets/img/cover-plant.jpg"
                                        alt="LINE Ethylene Complex Project"
                                        style="
                                            width: 100%;
                                            height: 100%;
                                            object-fit: cover;
                                        "
                                    />
                                    <span
                                        style="
                                            position: absolute;
                                            top: 12px;
                                            left: 12px;
                                            background: #1b2f6e;
                                            color: #ffffff;
                                            font-size: 10px;
                                            font-weight: 700;
                                            padding: 4px 10px;
                                            border-radius: 50px;
                                            text-transform: uppercase;
                                            letter-spacing: 0.5px;
                                        "
                                        >Fabrication &amp; Construction</span
                                    >
                                </div>
                                <div
                                    style="
                                        padding: 16px;
                                        flex-grow: 1;
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: between;
                                    "
                                >
                                    <div>
                                        <h5
                                            style="
                                                font-weight: 700;
                                                font-size: 15px;
                                                color: #1a1a1a;
                                                margin-bottom: 6px;
                                                line-height: 1.4;
                                            "
                                        >
                                            LINE Ethylene Complex Project
                                        </h5>
                                        <p
                                            style="
                                                font-size: 12px;
                                                color: #555555;
                                                margin-bottom: 2px;
                                                font-weight: 600;
                                            "
                                        >
                                            PT Lotte Chemical Indonesia
                                        </p>
                                        <p
                                            style="
                                                font-size: 11px;
                                                color: #777777;
                                                margin-bottom: 8px;
                                            "
                                        >
                                            <i
                                                class="bi bi-geo-alt-fill"
                                                style="
                                                    color: #1b2f6e;
                                                    font-size: 11px;
                                                    margin-right: 2px;
                                                "
                                            ></i
                                            >Cilegon, Banten
                                        </p>
                                        <p
                                            style="
                                                font-size: 11px;
                                                color: #999999;
                                                margin-bottom: 12px;
                                            "
                                        >
                                            Jan 2023 – Nov 2024
                                        </p>
                                    </div>
                                    <div>
                                        <Link
                                            :href="route('portfolio')"
                                            class="font-bold hover-underline"
                                            style="
                                                font-size: 12px;
                                                color: #1b2f6e;
                                                text-decoration: none;
                                                font-weight: 700;
                                            "
                                            >VIEW CASE STUDY →</Link
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 2 -->
                        <div class="col-md-4">
                            <div
                                style="
                                    background: #ffffff;
                                    border: 1px solid #e5e5e5;
                                    border-radius: 8px;
                                    overflow: hidden;
                                    height: 100%;
                                    display: flex;
                                    flex-direction: column;
                                "
                            >
                                <div
                                    style="
                                        position: relative;
                                        width: 100%;
                                        aspect-ratio: 16/9;
                                        overflow: hidden;
                                    "
                                >
                                    <img
                                        src="/assets/img/cover-plant.jpg"
                                        alt="Air Products SMIP Mechanical &amp; Piping"
                                        style="
                                            width: 100%;
                                            height: 100%;
                                            object-fit: cover;
                                        "
                                    />
                                    <span
                                        style="
                                            position: absolute;
                                            top: 12px;
                                            left: 12px;
                                            background: #1b2f6e;
                                            color: #ffffff;
                                            font-size: 10px;
                                            font-weight: 700;
                                            padding: 4px 10px;
                                            border-radius: 50px;
                                            text-transform: uppercase;
                                            letter-spacing: 0.5px;
                                        "
                                        >Operation &amp; Maintenance</span
                                    >
                                </div>
                                <div
                                    style="
                                        padding: 16px;
                                        flex-grow: 1;
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: between;
                                    "
                                >
                                    <div>
                                        <h5
                                            style="
                                                font-weight: 700;
                                                font-size: 15px;
                                                color: #1a1a1a;
                                                margin-bottom: 6px;
                                                line-height: 1.4;
                                            "
                                        >
                                            Air Products SMIP Mechanical &amp;
                                            Piping
                                        </h5>
                                        <p
                                            style="
                                                font-size: 12px;
                                                color: #555555;
                                                margin-bottom: 2px;
                                                font-weight: 600;
                                            "
                                        >
                                            PT Air Products Indonesia Gases
                                        </p>
                                        <p
                                            style="
                                                font-size: 11px;
                                                color: #777777;
                                                margin-bottom: 8px;
                                            "
                                        >
                                            <i
                                                class="bi bi-geo-alt-fill"
                                                style="
                                                    color: #1b2f6e;
                                                    font-size: 11px;
                                                    margin-right: 2px;
                                                "
                                            ></i
                                            >Sei Mangkei, Sumatera Utara
                                        </p>
                                        <p
                                            style="
                                                font-size: 11px;
                                                color: #999999;
                                                margin-bottom: 12px;
                                            "
                                        >
                                            Jan 2023 – Jun 2025
                                        </p>
                                    </div>
                                    <div>
                                        <Link
                                            :href="route('portfolio')"
                                            class="font-bold hover-underline"
                                            style="
                                                font-size: 12px;
                                                color: #1b2f6e;
                                                text-decoration: none;
                                                font-weight: 700;
                                            "
                                            >VIEW CASE STUDY →</Link
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 3 -->
                        <div class="col-md-4">
                            <div
                                style="
                                    background: #ffffff;
                                    border: 1px solid #e5e5e5;
                                    border-radius: 8px;
                                    overflow: hidden;
                                    height: 100%;
                                    display: flex;
                                    flex-direction: column;
                                "
                            >
                                <div
                                    style="
                                        position: relative;
                                        width: 100%;
                                        aspect-ratio: 16/9;
                                        overflow: hidden;
                                    "
                                >
                                    <img
                                        src="/assets/img/cover-catalyst.jpg"
                                        alt="RDMP RU-V Balikpapan Tanks Project"
                                        style="
                                            width: 100%;
                                            height: 100%;
                                            object-fit: cover;
                                        "
                                    />
                                    <span
                                        style="
                                            position: absolute;
                                            top: 12px;
                                            left: 12px;
                                            background: #1b2f6e;
                                            color: #ffffff;
                                            font-size: 10px;
                                            font-weight: 700;
                                            padding: 4px 10px;
                                            border-radius: 50px;
                                            text-transform: uppercase;
                                            letter-spacing: 0.5px;
                                        "
                                        >Fabrication &amp; Construction</span
                                    >
                                </div>
                                <div
                                    style="
                                        padding: 16px;
                                        flex-grow: 1;
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: between;
                                    "
                                >
                                    <div>
                                        <h5
                                            style="
                                                font-weight: 700;
                                                font-size: 15px;
                                                color: #1a1a1a;
                                                margin-bottom: 6px;
                                                line-height: 1.4;
                                            "
                                        >
                                            RDMP RU-V Balikpapan Tanks Project
                                        </h5>
                                        <p
                                            style="
                                                font-size: 12px;
                                                color: #555555;
                                                margin-bottom: 2px;
                                                font-weight: 600;
                                            "
                                        >
                                            RDMP JO / Pertamina
                                        </p>
                                        <p
                                            style="
                                                font-size: 11px;
                                                color: #777777;
                                                margin-bottom: 8px;
                                            "
                                        >
                                            <i
                                                class="bi bi-geo-alt-fill"
                                                style="
                                                    color: #1b2f6e;
                                                    font-size: 11px;
                                                    margin-right: 2px;
                                                "
                                            ></i
                                            >Balikpapan, Kalimantan Timur
                                        </p>
                                        <p
                                            style="
                                                font-size: 11px;
                                                color: #999999;
                                                margin-bottom: 12px;
                                            "
                                        >
                                            Mar 2022 – Feb 2025
                                        </p>
                                    </div>
                                    <div>
                                        <Link
                                            :href="route('portfolio')"
                                            class="font-bold hover-underline"
                                            style="
                                                font-size: 12px;
                                                color: #1b2f6e;
                                                text-decoration: none;
                                                font-weight: 700;
                                            "
                                            >VIEW CASE STUDY →</Link
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR LOCATIONS -->
    <section style="padding: 60px 0; background: #f5f6fa">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Locations Card List -->
                <div class="col-lg-5">
                    <p
                        class="text-xs font-bold tracking-widest text-[#1B2F6E] uppercase mb-2"
                        style="
                            font-size: 12px;
                            font-weight: 700;
                            color: #1b2f6e;
                            letter-spacing: 2px;
                            margin-bottom: 8px;
                        "
                    >
                        OUR LOCATIONS
                    </p>
                    <p
                        style="
                            color: #555555;
                            font-size: 14px;
                            margin-bottom: 24px;
                        "
                    >
                        Our branch offices and project locations across
                        Indonesia
                    </p>

                    <!-- Card 1: Head Office -->
                    <div
                        class="location-card"
                        style="
                            background: #ffffff;
                            border: 1px solid #e5e5e5;
                            border-left: 4px solid #1b2f6e;
                            padding: 16px;
                            margin-bottom: 12px;
                            border-radius: 0;
                        "
                    >
                        <h6
                            style="
                                font-weight: 700;
                                color: #1b2f6e;
                                font-size: 14px;
                                text-transform: uppercase;
                                margin-bottom: 4px;
                                margin-top: 0;
                            "
                        >
                            HEAD OFFICE JAKARTA
                        </h6>
                        <p
                            style="
                                color: #555555;
                                font-size: 12px;
                                margin: 0;
                                line-height: 1.4;
                            "
                        >
                            Talavera Office Park, 15th Floor.<br />
                            Jl. TB Simatupang No.Kav. 22 - 26, South Jakarta,
                            Indonesia
                        </p>
                    </div>

                    <!-- Card 2: Riau Branch -->
                    <div
                        class="location-card"
                        style="
                            background: #ffffff;
                            border: 1px solid #e5e5e5;
                            border-left: 4px solid #1b2f6e;
                            padding: 16px;
                            margin-bottom: 12px;
                            border-radius: 0;
                        "
                    >
                        <h6
                            style="
                                font-weight: 700;
                                color: #1b2f6e;
                                font-size: 14px;
                                text-transform: uppercase;
                                margin-bottom: 4px;
                                margin-top: 0;
                            "
                        >
                            RIAU BRANCH OFFICE
                        </h6>
                        <p
                            style="
                                color: #555555;
                                font-size: 12px;
                                margin: 0;
                                line-height: 1.4;
                            "
                        >
                            Jl. Dwikora I No.16, Suka Maju, Kec. Sail,<br />
                            Kota Pekanbaru, Riau 28115, Indonesia
                        </p>
                    </div>

                    <!-- Card 3: Workshop -->
                    <div
                        class="location-card"
                        style="
                            background: #ffffff;
                            border: 1px solid #e5e5e5;
                            border-left: 4px solid #1b2f6e;
                            padding: 16px;
                            margin-bottom: 0;
                            border-radius: 0;
                        "
                    >
                        <h6
                            style="
                                font-weight: 700;
                                color: #1b2f6e;
                                font-size: 14px;
                                text-transform: uppercase;
                                margin-bottom: 4px;
                                margin-top: 0;
                            "
                        >
                            WORKSHOP
                        </h6>
                        <p
                            style="
                                color: #555555;
                                font-size: 12px;
                                margin: 0;
                                line-height: 1.4;
                            "
                        >
                            Jl. Balai Kimia l 15, RT 15/RW 9, Pekayon,<br />
                            Kec. Ps. Rebo, East Jakarta, Jakarta 13790,
                            Indonesia
                        </p>
                    </div>
                </div>
                <!-- Map Left / Right -->
                <div class="col-lg-7">
                    <div
                        style="
                            position: relative;
                            width: 100%;
                            display: inline-block;
                        "
                    >
                        <img
                            src="/assets/img/map.png"
                            alt="Indonesia Map"
                            style="width: 100%; object-fit: contain"
                        />

                        <!-- Marker 1: Jakarta Head Office -->
                        <div
                            class="map-marker-container"
                            style="position: absolute; top: 73%; left: 31%"
                        >
                            <div class="map-marker"></div>
                            <div
                                class="marker-tooltip"
                                style="min-width: 200px"
                            >
                                <strong>Head Office Jakarta</strong><br />
                                Talavera Office Park, South Jakarta
                            </div>
                        </div>

                        <!-- Marker 2: Workshop (East Jakarta) -->
                        <div
                            class="map-marker-container"
                            style="position: absolute; top: 70%; left: 33%"
                        >
                            <div class="map-marker"></div>
                            <div
                                class="marker-tooltip"
                                style="min-width: 200px"
                            >
                                <strong>Workshop</strong><br />
                                Ps. Rebo, East Jakarta
                            </div>
                        </div>

                        <!-- Marker 3: Riau Branch (Pekanbaru) -->
                        <div
                            class="map-marker-container"
                            style="position: absolute; top: 38%; left: 18%"
                        >
                            <div class="map-marker"></div>
                            <div
                                class="marker-tooltip"
                                style="min-width: 200px"
                            >
                                <strong>Riau Branch Office</strong><br />
                                Kota Pekanbaru, Riau
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LATEST NEWS -->
    <section style="padding: 60px 0; background: #ffffff">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <p
                    class="text-xs font-bold tracking-widest text-[#1B2F6E] uppercase mb-0"
                    style="
                        font-size: 12px;
                        font-weight: 700;
                        color: #1b2f6e;
                        letter-spacing: 2px;
                        margin: 0;
                    "
                >
                    LATEST NEWS
                </p>
                <Link
                    :href="route('news')"
                    style="
                        font-size: 13px;
                        color: #1b2f6e;
                        font-weight: 700;
                        text-decoration: none;
                    "
                    >VIEW ALL NEWS →</Link
                >
            </div>
            <div v-if="blogs && blogs.length > 0">
                <div class="row g-4">
                    <div
                        v-for="blog in blogs.slice(0, 3)"
                        :key="blog.id"
                        class="col-md-4"
                    >
                        <div
                            style="
                                background: #ffffff;
                                border: 1px solid #e5e5e5;
                                border-radius: 8px;
                                overflow: hidden;
                                height: 100%;
                                display: flex;
                                flex-direction: column;
                                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
                            "
                        >
                            <img
                                :src="'/storage/' + blog.image"
                                :alt="blog.title"
                                style="
                                    width: 100%;
                                    height: 180px;
                                    object-fit: cover;
                                "
                            />
                            <div
                                style="
                                    padding: 16px;
                                    flex-grow: 1;
                                    display: flex;
                                    flex-direction: column;
                                    justify-content: between;
                                "
                            >
                                <div>
                                    <p
                                        style="
                                            font-weight: 700;
                                            color: #1a1a1a;
                                            font-size: 15px;
                                            line-height: 1.4;
                                            margin-bottom: 8px;
                                        "
                                    >
                                        {{ blog.title }}
                                    </p>
                                    <p
                                        style="
                                            font-size: 12px;
                                            color: #999999;
                                            margin-bottom: 12px;
                                        "
                                    >
                                        {{ blog.created_at }}
                                    </p>
                                </div>
                                <div>
                                    <Link
                                        :href="route('news')"
                                        style="
                                            font-size: 12px;
                                            color: #1b2f6e;
                                            font-weight: 700;
                                            text-decoration: none;
                                        "
                                        >READ MORE →</Link
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<style scoped>
.service-card {
    background: #1b2f6e;
    color: #fff;
    padding: 24px;
    height: 100%;
    transition: background 0.3s ease;
    border-radius: 0;
}
.service-card:hover {
    background: #3a5db0;
}

.client-logo {
    max-height: 40px !important;
    object-fit: contain;
    filter: grayscale(100%);
    opacity: 0.6;
    transition: all 0.3s ease;
    margin: 0 8px;
}
@media (min-width: 768px) {
    .client-logo {
        max-height: 80px !important;
        margin: 0 15px !important;
    }
}

.client-logo:hover {
    filter: grayscale(0%) !important;
    opacity: 1 !important;
}

@keyframes pulse {
    0% {
        transform: scale(0.8);
        opacity: 0.5;
    }
    50% {
        transform: scale(1.2);
        opacity: 1;
    }
    100% {
        transform: scale(1.8);
        opacity: 0;
    }
}
.map-marker-container {
    position: absolute;
    transform: translate(-50%, -50%);
    width: 26px;
    height: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.map-marker {
    width: 12px;
    height: 12px;
    background-color: #1b2f6e;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
    border: 2px solid #ffffff;
}
.map-marker-container::after {
    content: "";
    position: absolute;
    width: 26px;
    height: 26px;
    border: 2px solid rgba(27, 47, 110, 0.6);
    border-radius: 50%;
    animation: pulse 1.8s infinite ease-out;
}
.marker-tooltip {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%) translateY(10px);
    background: #1b2f6e;
    color: #ffffff;
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 11px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    z-index: 20;
    pointer-events: none;
    line-height: 1.4;
}
.marker-tooltip::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    border-width: 5px;
    border-style: solid;
    border-color: #1b2f6e transparent transparent transparent;
}
.map-marker-container:hover .marker-tooltip {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
}
.location-card:hover {
    transform: translateX(4px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}
</style>
