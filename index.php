<?php
$pageTitle   = 'Home page';
$base        = './';
$solidHeader = false;
require __DIR__ . './includes/header.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">

    <title>EquityPandit Responsive Navbar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://www.equitypandit.com/etheme/vendor/fortawesome/font-awesome/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <script src="https://kit.fontawesome.com/4789acf415.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Work Sans', sans-serif;
            /* font-family: 'Playfair+Display', sans-serif; */
        }

        .border-light {
            border-color: #8a8a8a50 !important;
        }

        .titleFont {
            font-family: "Playfair Display", serif;
            /* font-weight: bold; */
        }

        .pFont {
            font-family: "Work Sans", serif;
        }

        /* Glassmorphism — Bootstrap has no backdrop-filter utility */
        .glass-bg {
            /* From https://css.glass */
            background: rgba(0, 0, 0, 0.25);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(14.1px);
            -webkit-backdrop-filter: blur(14.1px);
        }

        /* Keep horizontal scrolling but hide the scrollbar — no Bootstrap utility for this */
        .hide-scrollbar {
            -ms-overflow-style: none;
            /* IE/old Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
            /* Chrome/Safari/Edge */
        }
    </style>
</head>

<body class="">

    <!-- Demo page content -->
    <main id="home">

        <!-- Hero Section -->
        <section id="hero-section" class="position-relative overflow-hidden vh-100">

            <!-- Video Background -->
            <video
                autoplay
                muted
                loop
                playsinline
                class="position-absolute top-0 start-0 w-100 h-100"
                style="object-fit: cover; z-index:0;">
                <source src="<?= $base ?>imgs/skv1.mp4" type="video/mp4" decoding="async">
            </video>

            <!-- Overlay -->
            <div
                class="position-absolute top-0 start-0 w-100 h-100"
                style="background:linear-gradient(to bottom,rgba(0,0,0,.6) 0%,rgba(0,0,0,0) 25%); z-index:1;">
            </div>

            <!-- Content -->
            <div class="position-relative h-100 d-flex flex-column" style="z-index:2;">

                <!-- Hero Content -->
                <div class="flex-grow-1 d-flex align-items-end">

                    <div class="container h-100">
                        <div class="border-start border-end border-light h-100 d-flex align-items-end">
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="px-md-4 px-3 py-5 text-white text-xl-center text-start">

                                        <!-- <h1 class="display-5 fw-semibold titleFont mb-4">
                                            Long-Term Wealth Built On Discipline Not Noise
                                        </h1> -->
                                        <h1 class="display-3 fw-semibold titleFont mb-4">
                                            Clarity. <br class="d-xl-none" />Conviction. <br class="d-xl-none" />Compounding.
                                        </h1>

                                        <p class="fs-6 pFont mb-3" style="color:#FFFFFFBF;">
                                            Since 2005, EquityPandit has helped Indian investors navigate market cycles through
                                            research-driven equity strategies focused on consistency, risk control, and
                                            long-term value creation.
                                        </p>
                                        <!-- <p class="fs-4 pFont mb-3">
                                            Since 2005, EquityPandit guides investors with research-driven strategies.
                                        </p> -->

                                        <button class="btn btn-light rounded-0 d-none">
                                            Let's Get Started
                                            <i class="fa-solid fa-right-long ms-2"></i>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Logos (Full Width) -->
                <div class="container-fluid glass-bg p-0">

                    <div class="d-flex align-items-center justify-content-start justify-content-md-center overflow-auto hide-scrollbar">

                        <!-- <div class="px-4 py-3 text-white border-end border-light">
                            <p class="titleFont my-0 fst-italic text-nowrap">
                                Featured in
                            </p>
                        </div> -->

                        <div class="p-2">
                            <img src="./imgs/logo/Bussiness_Standard.png" alt="The Week" style="height:60px;">
                        </div>

                        <div class="p-2">
                            <img src="./imgs/logo/Dailyhunt.png" alt="The Week" style="height:60px;">
                        </div>

                        <div class="p-2">
                            <img src="./imgs/logo/Yahoo.png" alt="The Week" style="height:60px;">
                        </div>

                        <div class="p-2">
                            <img src="./imgs/logo/Bloomberg.png" alt="The Week" style="height:60px;">
                        </div>

                        <div class="p-2">
                            <img src="./imgs/logo/The Week.png" alt="The Week" style="height:60px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Since 2005 -->
        <section>
            <div class="container">
                <div class="border-start border-end border-light">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <p class="display-1 mb-0 fw-bold text-secondary text-opacity-25 text-center py-3">Since 2005</p>
                        </div>
                    </div>
                    <div class="row g-0" id="statsSection">
                        <style>
                            .rolling-counter {
                                display: inline-flex;
                                align-items: baseline;
                                line-height: 1;
                                font: inherit;
                            }

                            .digit-box {
                                position: relative;
                                width: 0.65em;
                                /* Adjust if needed */
                                height: 1em;
                                overflow: hidden;
                                display: inline-block;
                                line-height: 1;
                            }

                            .digit-track {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                transition: transform 4s cubic-bezier(.22, 1, .36, 1);
                            }

                            .digit {
                                height: 1em;
                                width: 100%;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                font: inherit;
                                line-height: 1;
                            }
                        </style>
                        <div class="col-md-3 col-6">
                            <div class="border border-start-0 border-light py-md-5 py-3 px-3 h-100">
                                <p class="display-4 fw-semibold d-flex align-items-center pFont">
                                    <span class="rolling-counter" data-count="21"></span><span>+</span>
                                </p>
                                <p class="fs-5 pFont mb-md-0">Years of Market<br />Expertise</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border border-start-0 border-light py-md-5 py-3 px-3 h-100">
                                <p class="display-4 fw-semibold d-flex align-items-center pFont">
                                    <span class="rolling-counter" data-count="1"></span><span>M+</span>
                                </p>
                                <p class="fs-5 pFont mb-md-0">Registered<br />Users</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border border-start-0 border-light py-md-5 py-3 px-3 h-100">
                                <p class="display-4 fw-semibold d-flex align-items-center pFont">
                                    <span class="rolling-counter" data-count="11"></span><span>+</span>
                                </p>
                                <p class="fs-5 pFont mb-md-0">National & International<br />Awards</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border border-start-0 border-light py-md-5 py-3 px-3 h-100 position-relative">

                                <p class="display-4 fw-semibold d-inline-block pFont">SEBI</p>

                                <p class="fs-5 pFont mb-md-0">
                                    Registered Investment<br>
                                    Advisor
                                </p>

                                <img
                                    src="./imgs/Polygon2.svg"
                                    class="position-absolute bottom-0 end-0"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="position-relative">
                                <img
                                    src="./imgs/Frame1.svg"
                                    class="img-fluid"
                                    alt="Business"
                                    loading="lazy"
                                    decoding="async">
                                <div class="text-end">
                                    <img
                                        src="./imgs/Polygon1.svg"
                                        class="position-absolute top-0 end-0"
                                        alt="background">
                                </div>
                            </div>
                            <div class="py-3 py-md-0 px-3 text-center">
                                <h2 class="display-3 titleFont fw-semibold d-inline-block">Start Your Wealth Creation Journey</h2>
                                <p class="fs-6 pFont mb-0">Put your money to work with our research, that suits your style.</p>
                            </div>
                            <div class="text-end">
                                <img
                                    src="./imgs/Frame2.svg"
                                    class="img-fluid"
                                    alt="Business" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <style>
                                .image-box {
                                    cursor: pointer;
                                }

                                .image-content .sub-title {
                                    max-height: 0;
                                    margin: 0;
                                    opacity: 0;
                                    overflow: hidden;
                                    transform: translateY(20px);
                                    transition:
                                        max-height 0.7s ease,
                                        opacity 0.6s ease,
                                        transform 0.6s ease,
                                        margin 0.6s ease;
                                }

                                .image-box:hover .sub-title,
                                .image-box.active .sub-title {
                                    max-height: 250px;
                                    margin-bottom: 1rem;
                                    opacity: 1;
                                    transform: translateY(0);
                                }

                                .logo {
                                    opacity: 1;
                                    transform: rotate(0deg);
                                }

                                .image-box:hover .logo,
                                .image-box.active .logo {
                                    animation: spinIn 1s cubic-bezier(.22, 1, .36, 1) forwards;
                                }

                                /* .image-box:not(:hover) .logo {
                                    transform: rotate(-360deg);
                                    opacity: 0;
                                } */

                                @keyframes spinIn {
                                    from {
                                        transform: rotate(-360deg) scale(0.8);
                                        opacity: 0;
                                    }

                                    to {
                                        transform: rotate(0deg) scale(1);
                                        opacity: 1;
                                    }
                                }
                            </style>
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s1.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business" loading="lazy" decoding="async">

                                <div class="image-content position-absolute bottom-0 start-0 w-75 p-3 text-light" data-bs-theme="dark" style="background-color: #02181A;">
                                    <img
                                        alt="EquityPandit"
                                        src="./imgs/Vector1.svg"
                                        class="img-fluid my-3 logo"
                                        style="max-height: 50px;" />
                                    <h2 class="mb-3 titleFont fs-4 fw-semibold">For an Individuals<br>&nbsp</h2>

                                    <p class="sub-title pFont mb-3 small" style="color: #FFFFFFBF;">
                                        A carefully curated list of 18-20 high-potential stocks, backed by 20+ years of market expertise, designed to create long-term wealth.
                                    </p>

                                    <p class="sub-title pFont small" style="color: #FFFFFFBF;">
                                        <i class="fa-solid fa-circle-check me-1 mt-1"></i> High-Conviction Stocks for 2026<br />
                                        <i class="fa-solid fa-circle-check me-1 mt-1"></i> Diversified Portfolio
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none small pFont">Explore Strategies <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 mt-3 mt-md-0">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s2.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business" loading="lazy" decoding="async">

                                <div class="image-content position-absolute bottom-0 start-0 w-75 p-3 text-light" data-bs-theme="dark" style="background-color: #02181A;">
                                    <img
                                        alt="EquityPandit"
                                        src="./imgs/Vector2.svg"
                                        class="img-fluid my-3 logo"
                                        style="max-height: 50px;" />
                                    <h2 class="mb-3 titleFont fs-4 fw-semibold">For HNI’s and Ultra HNI’s</h2>

                                    <p class="sub-title pFont mb-3 small" style="color: #FFFFFFBF;">
                                        One high-growth stock every month for mid-term holding, focused on fundamentally strong businesses.
                                    </p>

                                    <p class="sub-title pFont small" style="color: #FFFFFFBF;">
                                        <i class="fa-solid fa-circle-check me-1 mt-1"></i> A detailed research report<br>
                                        <i class="fa-solid fa-circle-check me-1 mt-1"></i> Instant Alerts Via App
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none small pFont">Explore Strategies <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3 mt-md-0">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s3.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business" loading="lazy" decoding="async">

                                <div class="image-content position-absolute bottom-0 start-0 w-75 p-3 text-light" data-bs-theme="dark" style="background-color: #02181A;">
                                    <img
                                        alt="EquityPandit"
                                        src="./imgs/Vector3.svg"
                                        class="img-fluid my-3 logo"
                                        style="max-height: 50px;" />
                                    <h2 class="mb-3 titleFont fs-4 fw-semibold">For Family Offices & Institutions</h2>

                                    <p class="sub-title pFont mb-3 small" style="color: #FFFFFFBF;">
                                        WealthX is a comprehensive equity investing service built to keep you aligned with opportunities across market cycles.
                                    </p>

                                    <div class="sub-title pFont small" style="color: #FFFFFFBF;">
                                        <i class="fa-solid fa-circle-check me-1 mt-1"></i> A detailed research report<br>
                                        <i class="fa-solid fa-circle-check me-1 mt-1"></i> Instant Alerts Via App
                                    </div>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none small pFont">Explore Strategies <i class="fa-solid fa-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us? -->
        <section>
            <style>
                .features-wrapper {
                    display: flex;
                    /* border: 1px solid var(--bs-border-color); */
                }

                .feature-card {
                    flex: 1;
                    min-height: 400px;
                    position: relative;
                    overflow: hidden;
                    transition: flex .45s ease;
                    cursor: pointer;
                    /* background: #fff; */
                }

                .features-wrapper:hover .feature-card {
                    flex: .9;
                }

                .features-wrapper:hover .feature-card:hover {
                    flex: 2.2;
                }

                /* ---------- Content ---------- */

                .feature-content p {
                    opacity: 0;
                    max-width: 235px;
                    transform: translateY(12px);
                    transition: .35s;
                }

                .feature-card:hover .feature-content p {
                    opacity: 1;
                    transform: translateY(0);
                }

                /* ---------- Image ---------- */

                .feature-image {
                    width: 70%;
                    height: 40%;
                    transition: .45s ease;
                }

                .feature-image img {
                    transition: .45s ease;
                }

                .feature-card:hover .feature-image {
                    width: 50%;
                    height: 50%;
                }

                .feature-card:hover .feature-image img {
                    transform: scale(1.05);
                }

                /* ---------- Responsive ---------- */

                @media (max-width:991.98px) {

                    .features-wrapper {
                        display: block;
                    }

                    .feature-card {
                        min-height: auto;
                        position: static;
                        border-right: 0 !important;
                        border-bottom: 1px solid var(--bs-border-color);
                        padding: 1rem;
                    }

                    .feature-card:last-child {
                        border-bottom: 0;
                    }

                    .feature-content {
                        position: static !important;
                        padding: 0 !important;
                    }

                    .feature-content p {
                        opacity: 1;
                        transform: none;
                        max-width: 100%;
                        margin-top: .75rem;
                    }

                    .feature-image {
                        position: static !important;
                        width: 100%;
                        height: 220px;
                        margin-top: 1.25rem;
                    }

                    .feature-image img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transform: none !important;
                    }

                    .features-wrapper:hover .feature-card,
                    .features-wrapper:hover .feature-card:hover {
                        flex: 1;
                    }

                    .feature-card:hover .feature-image {
                        width: 100%;
                        height: 220px;
                    }

                    .feature-card:hover .feature-image img {
                        transform: none !important;
                    }

                    .feature-card:hover .feature-content p {
                        opacity: 1;
                        transform: none;
                    }
                }
            </style>
            <div class="container">
                <div class="border border-start border-end border-light">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="text-md-center text-start py-5 px-3">
                                <h2 class="display-5 titleFont fw-semibold d-inline-block">Why Choose Us?</h2>
                                <p class="fs-6 pFont mb-0">For nearly two decades, we’ve built a legacy of trust, transparency, and results. When you work with us, you gain more than just an investment plan—you gain a long-term partner committed to your financial success. Here’s why thousands of clients trust us to manage their investments:</p>
                            </div>
                        </div>
                        <div class="container px-0">

                            <div class="features-wrapper border border-light">

                                <!-- Card 1 -->
                                <div class="feature-card border-end border-light">

                                    <div class="feature-content position-absolute top-0 start-0 p-3 z-2">
                                        <div class="d-md-block d-flex align-items-center">
                                            <img src="./imgs/Vector4.svg" class="mb-3" alt="">

                                            <h2 class="titleFont fw-semibold mb-3 fs-4 ms-md-0 ms-2">
                                                Experience You Can Trust
                                            </h2>
                                        </div>

                                        <p class="pFont mb-0 fs-6">
                                            With over 20+ years in the market, we have navigated all kinds of economic environments, and our insights give you an edge.
                                        </p>
                                    </div>

                                    <div class="feature-image position-absolute bottom-0 end-0">
                                        <img
                                            src="./imgs/business-image-1.jpg"
                                            class="w-100 h-100 object-fit-cover"
                                            alt="">
                                    </div>

                                </div>

                                <!-- Card 2 -->
                                <div class="feature-card border-end border-light">

                                    <div class="feature-content position-absolute top-0 start-0 p-3 z-2">
                                        <div class="d-md-block d-flex align-items-center">
                                            <img src="./imgs/Vector5.svg" class="mb-3" alt="">

                                            <h2 class="titleFont fw-semibold mb-3 fs-4 ms-md-0 ms-2">
                                                Data-Driven Insights
                                            </h2>
                                        </div>

                                        <p class="pFont mb-0 fs-6">
                                            Our strategies are powered by cutting-edge technology, real-time data, and deep market research, ensuring every move is informed and strategic.
                                        </p>
                                    </div>

                                    <div class="feature-image position-absolute bottom-0 end-0">
                                        <img
                                            src="./imgs/business-image-2.jpg"
                                            class="w-100 h-100 object-fit-cover"
                                            alt="">
                                    </div>

                                </div>

                                <!-- Card 3 -->
                                <div class="feature-card border-end border-light">

                                    <div class="feature-content position-absolute top-0 start-0 p-3 z-2">
                                        <div class="d-md-block d-flex align-items-center">
                                            <img src="./imgs/Vector6.svg" class="mb-3" alt="">

                                            <h2 class="titleFont fw-semibold mb-3 fs-4 ms-md-0 ms-2">
                                                Client-Centered Approach
                                            </h2>
                                        </div>

                                        <p class="pFont mb-0 fs-6">
                                            We don’t just give advice; we build a partnership. Our approach is personal, responsive, and designed around your unique needs.
                                        </p>
                                    </div>

                                    <div class="feature-image position-absolute bottom-0 end-0">
                                        <img
                                            src="./imgs/business-image-3.jpg"
                                            class="w-100 h-100 object-fit-cover"
                                            alt="">
                                    </div>

                                </div>

                                <!-- Card 4 -->
                                <div class="feature-card">

                                    <div class="feature-content position-absolute top-0 start-0 p-3 z-2">
                                        <div class="d-md-block d-flex align-items-center">
                                            <img src="./imgs/Vector7.svg" class="mb-3" alt="">

                                            <h2 class="titleFont fw-semibold mb-3 fs-4 ms-md-0 ms-2">
                                                Dedicated Support Every Step
                                            </h2>
                                        </div>

                                        <p class="pFont mb-0 fs-6">
                                            We’re here to guide you with ongoing support, timely updates, and alerts to help you succeed.
                                        </p>
                                    </div>

                                    <div class="feature-image position-absolute bottom-0 end-0">
                                        <img
                                            src="./imgs/business-image-4.jpg"
                                            class="w-100 h-100 object-fit-cover"
                                            alt="">
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- National & International Awards -->
        <section>
            <div class="container">
                <div class="px-3 py-5 border-start border-end border-light">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6">
                            <div class="py-md-5 py-0 pb-0">
                                <h2 class="display-5 titleFont fw-semibold d-inline-block" style="line-height: 1.5;">National & International Awards</h2>
                                <p class="fs-6 pFont mb-0">EquityPandit has consistently recognized by<br class="d-xl-block d-none" /> leading industry institution for innovation, research<br class="d-xl-block d-none" /> quality and investor education initiatives.</p>
                            </div>
                            <button class="btn text-white rounded-0 mt-md-0 mt-3 pFont px-4 py-2 d-inline-flex align-items-center" style="background-color: #02181A;" onclick="window.location.href='#';">
                                Let's Get Started
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </button>
                        </div>
                        <div class="col-md-6 d-none">
                            <?php
                            $awards = [
                                [
                                    'image' => 'ceo-m.png',
                                    'title' => 'CEO Magazine',
                                    'award' => 'Best Leadership Award',
                                    'year'  => '2025'
                                ],
                                [
                                    'image' => 'et.png',
                                    'title' => 'Economic Times',
                                    'award' => 'Business Excellence Award',
                                    'year'  => '2025'
                                ],
                                [
                                    'image' => 'news24.jpg',
                                    'title' => 'News24',
                                    'award' => 'Industry Recognition',
                                    'year'  => '2024'
                                ],
                                [
                                    'image' => 'tew.png',
                                    'title' => 'The Economic World',
                                    'award' => 'Emerging Brand Award',
                                    'year'  => '2024'
                                ],
                                // [
                                //     'image' => 'award-5.png',
                                //     'title' => 'Business Today',
                                //     'award' => 'Company of the Year',
                                //     'year'  => '2024'
                                // ],
                                // [
                                //     'image' => 'award-6.png',
                                //     'title' => 'Forbes India',
                                //     'award' => 'Innovation Excellence',
                                //     'year'  => '2023'
                                // ],
                                // [
                                //     'image' => 'award-7.png',
                                //     'title' => 'Times Business',
                                //     'award' => 'Trusted Brand Award',
                                //     'year'  => '2023'
                                // ],
                                // [
                                //     'image' => 'award-8.png',
                                //     'title' => 'India Today',
                                //     'award' => 'Customer Choice Award',
                                //     'year'  => '2023'
                                // ],
                                // [
                                //     'image' => 'award-9.png',
                                //     'title' => 'Global Business',
                                //     'award' => 'Business Leader Award',
                                //     'year'  => '2022'
                                // ],
                            ];

                            /*
                            * Use 2 items per slide on mobile.
                            * Bootstrap responsive classes show all four positions on desktop.
                            */
                            $slides = array_chunk($awards, 4);
                            ?>
                            <div
                                id="awardsCarousel"
                                class="carousel slide my-md-5 py-3"
                                data-bs-ride="carousel"
                                data-bs-interval="4000"
                                data-bs-touch="true">
                                <div class="carousel-inner">

                                    <?php foreach ($slides as $slideIndex => $slide): ?>
                                        <div class="carousel-item <?= $slideIndex === 0 ? 'active' : '' ?>">
                                            <div class="row g-3 justify-content-center">

                                                <?php foreach ($slide as $award): ?>
                                                    <div class="col-6 col-md-3">
                                                        <article class="card border rounded-0 shadow-sm h-100 overflow-hidden">
                                                            <div class="text-white py-1  fw-semibold text-uppercase small bg-primary-subtle" data-bs-theme="dark"> </div>

                                                            <div
                                                                class="bg-white d-flex align-items-center justify-content-center p-4 b"
                                                                style="height: 100px;">
                                                                <img
                                                                    src="./imgs/awards/<?= htmlspecialchars($award['image']) ?>"
                                                                    class="img-fluid"
                                                                    alt="<?= htmlspecialchars($award['title']) ?>"
                                                                    loading="lazy"
                                                                    style="max-height: 75px; object-fit: contain;">
                                                            </div>

                                                            <div class="card-body text-center">
                                                                <span class="small text-body-secondary mb-2">
                                                                    (<?= htmlspecialchars($award['year']) ?>)
                                                                </span>

                                                                <h2 class="h6 fw-bold mb-2 titleFont">
                                                                    <?= htmlspecialchars($award['title']) ?>
                                                                </h2>

                                                                <p class="small text-secondary mb-0">
                                                                    <?= htmlspecialchars($award['award']) ?>
                                                                </p>
                                                            </div>

                                                        </article>
                                                    </div>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                </div>

                                <!-- Controls -->
                                <?php if (count($slides) > 1): ?>
                                    <button
                                        class="carousel-control-prev justify-content-start"
                                        type="button"
                                        data-bs-target="#awardsCarousel"
                                        data-bs-slide="prev">
                                        <span
                                            class="carousel-control-prev-icon bg-dark rounded-circle p-3"
                                            aria-hidden="true"></span>

                                        <span class="visually-hidden">Previous awards</span>
                                    </button>

                                    <button
                                        class="carousel-control-next justify-content-end"
                                        type="button"
                                        data-bs-target="#awardsCarousel"
                                        data-bs-slide="next">
                                        <span
                                            class="carousel-control-next-icon bg-dark rounded-circle p-3"
                                            aria-hidden="true"></span>

                                        <span class="visually-hidden">Next awards</span>
                                    </button>
                                <?php endif; ?>

                                <!-- Indicators -->
                                <?php if (count($slides) > 1): ?>
                                    <div class="carousel-indicators position-static mt-4 mb-0">
                                        <?php foreach ($slides as $slideIndex => $slide): ?>
                                            <button
                                                type="button"
                                                data-bs-target="#awardsCarousel"
                                                data-bs-slide-to="<?= $slideIndex ?>"
                                                class="bg-dark <?= $slideIndex === 0 ? 'active' : '' ?>"
                                                <?= $slideIndex === 0 ? 'aria-current="true"' : '' ?>
                                                aria-label="Awards slide <?= $slideIndex + 1 ?>"></button>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <?php
                            $awards = [
                                [
                                    'image' => 'Award1.png',
                                    'title' => 'CEO Magazine',
                                    'award' => 'Best Leadership Award',
                                    'year'  => '2025'
                                ],
                                [
                                    'image' => 'Award2.png',
                                    'title' => 'Economic Times',
                                    'award' => 'Business Excellence Award',
                                    'year'  => '2025'
                                ],
                                [
                                    'image' => 'Award3.png',
                                    'title' => 'News24',
                                    'award' => 'Industry Recognition',
                                    'year'  => '2024'
                                ],
                                [
                                    'image' => 'Award4.png',
                                    'title' => 'The Economic World',
                                    'award' => 'Emerging Brand Award',
                                    'year'  => '2024'
                                ],
                                [
                                    'image' => 'Award5.png',
                                    'title' => 'Finext',
                                    'award' => 'Excelence in Finnance',
                                    'year'  => '2024'
                                ],
                                [
                                    'image' => 'Award6.png',
                                    'title' => 'India Today',
                                    'award' => 'Customer Choice Award',
                                    'year'  => '2023'
                                ],
                                [
                                    'image' => 'Award7.png',
                                    'title' => 'Forbes India',
                                    'award' => 'Innovation Excellence',
                                    'year'  => '2023'
                                ],
                                [
                                    'image' => 'Award8.png',
                                    'title' => 'Times Business',
                                    'award' => 'Trusted Brand Award',
                                    'year'  => '2023'
                                ],
                                [
                                    'image' => 'Award9.png',
                                    'title' => 'Global Business',
                                    'award' => 'Business Leader Award',
                                    'year'  => '2022'
                                ],
                            ];
                            ?>

                            <!-- <marquee
                                behavior="scroll"
                                direction="left"
                                scrollamount="12"
                                onmouseover="this.stop();"
                                onmouseout="this.start();">

                                <div class="d-inline-flex gap-3">

                                    <?php for ($i = 0; $i < 10; $i++): ?>
                                        <?php foreach ($awards as $award): ?>
                                            <img
                                                src="./imgs/awards/<?= htmlspecialchars($award['image']) ?>"
                                                class="img-fluid"
                                                alt="<?= htmlspecialchars($award['title']) ?>">

                                            <div class="card-body text-center d-none">
                                                <span class="small text-body-secondary">
                                                    (<?= htmlspecialchars($award['year']) ?>)
                                                </span>

                                                <h2 class="h6 fw-bold mt-2 titleFont">
                                                    <?= htmlspecialchars($award['title']) ?>
                                                </h2>

                                                <p class="small text-secondary mb-0">
                                                    <?= htmlspecialchars($award['award']) ?>
                                                </p>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endfor; ?>
                                </div>

                            </marquee> -->

                            <style>
                                .award-slider {
                                    overflow: hidden;
                                    width: 100%;
                                    position: relative;
                                }

                                .award-track {
                                    display: flex;
                                    width: max-content;
                                    animation: scrollAwards 20s linear infinite;
                                }

                                .award-slider:hover .award-track {
                                    animation-play-state: paused;
                                }

                                .award-item {
                                    flex: 0 0 auto;
                                    padding: 0 10px;
                                }

                                .award-item img {
                                    /* height: 100px; */
                                    width: auto;
                                    display: block;
                                }

                                @keyframes scrollAwards {
                                    from {
                                        transform: translateX(0);
                                    }

                                    to {
                                        transform: translateX(-50%);
                                    }
                                }

                                @media (max-width:768px) {
                                    .award-item {
                                        padding: 0 10px;
                                    }

                                    .award-track {
                                        animation-duration: 28s;
                                    }
                                }
                            </style>

                            <div class="award-slider">

                                <div class="award-track">

                                    <!-- First Set -->
                                    <?php foreach ($awards as $award): ?>
                                        <div class="award-item">
                                            <img
                                                src="<?= $base ?>imgs/awards/<?= htmlspecialchars($award['image']) ?>"
                                                alt="<?= htmlspecialchars($award['title']) ?>"
                                                class="img-fluid">
                                        </div>
                                    <?php endforeach; ?>

                                    <!-- Duplicate Set for Infinite Loop -->
                                    <?php foreach ($awards as $award): ?>
                                        <div class="award-item">
                                            <img
                                                src="<?= $base ?>imgs/awards/<?= htmlspecialchars($award['image']) ?>"
                                                alt="<?= htmlspecialchars($award['title']) ?>"
                                                class="img-fluid">
                                        </div>
                                    <?php endforeach; ?>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- what Our Client Say -->
        <section>
            <div class="container">
                <div class="border-top border-start border-end border-light">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-6 p-md-4 pt-5 px-4">
                            <div class="py-md-5 py-0 pb-0">
                                <h2 class="display-5 titleFont fw-semibold d-inline-block" style="line-height: 1.5;">What Our Clients Say</h2>
                                <p class="fs-6 pFont mb-0">Read what our satisfied clients have to say about their experience with our platform.</p>
                                <img
                                    src="./imgs/Google.svg"
                                    class="img-fluid mt-3"
                                    alt="background">
                            </div>
                            <button class="btn text-white rounded-0 mt-md-0 mt-3 pFont px-4 py-2 d-inline-flex align-items-center" style="background-color: #02181A;" onclick="window.location.href='<?= $base ?>contact-us.php';">
                                Contact Now
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </button>
                        </div>

                        <div class="col-md-6 pb-md-0 pb-5">
                            <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto">

                                <!-- Card 1 -->
                                <div class="col-md-6 col-11 flex-shrink-0">
                                    <div class="card border h-100 p-3 rounded-0">
                                        <div class="text-warning fs-5 mb-3">
                                            ★ ★ ★ ★ ☆
                                        </div>

                                        <p class="mb-3 pFont small">
                                            EP Investors has completely changed the way I invest.
                                            The recommendations are accurate, and the risk management is solid!
                                        </p>

                                        <div class="d-flex align-items-center mt-auto">
                                            <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                                                A
                                            </div>
                                            <h2 class="fw-semibold mb-0 fs-6 pFont">Amit S</h2>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-6 col-11 flex-shrink-0">
                                    <div class="card border h-100 p-3 rounded-0">
                                        <div class="text-warning fs-5 mb-3">
                                            ★ ★ ★ ★ ☆
                                        </div>

                                        <p class="mb-3 pFont small">
                                            Timely alerts and expert analysis make trading effortless.
                                            Highly recommended for short-term investors!
                                        </p>

                                        <div class="d-flex align-items-center mt-auto">
                                            <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                                                P
                                            </div>
                                            <h2 class="fw-semibold mb-0 fs-6 pFont">Priya M.</h2>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-6 col-11 flex-shrink-0">
                                    <div class="card border h-100 p-3 rounded-0">
                                        <div class="text-warning fs-5 mb-3">
                                            ★ ★ ★ ★ ☆
                                        </div>

                                        <p class="mb-3 pFont small">
                                            EP Investors has completely changed the way I invest.
                                            The recommendations are accurate, and the risk management is solid!
                                        </p>

                                        <div class="d-flex align-items-center mt-auto">
                                            <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                                                A
                                            </div>
                                            <h2 class="fw-semibold mb-0 pFont fs-6">Amit S</h2>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 4 -->
                                <div class="col-md-6 col-11 flex-shrink-0">
                                    <div class="card border h-100 p-3 rounded-0">
                                        <div class="text-warning fs-5 mb-3">
                                            ★ ★ ★ ★ ☆
                                        </div>

                                        <p class="mb-3 pFont small">
                                            Consistent profits with minimal effort.
                                            The 80% accuracy claim is real!
                                        </p>

                                        <div class="d-flex align-items-center mt-auto">
                                            <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                                                R
                                            </div>
                                            <h2 class="fw-semibold mb-0 fs-6 pFont">Rahul K.</h2>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What the press has been saying -->
        <section class="text-white bg-danger">
            <div class="container">
                <div class="px-3 py-5 border-start border-end border-light">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-12">
                            <div class="text-start text-md-center">
                                <h2 class="display-5 titleFont fw-semibold" style="line-height: 1.5;">
                                    What the press has been saying
                                </h2>

                                <p class="fs-6 pFont mb-0">
                                    EquityPandit Is A Contributor To The World's Biggest Financial Portals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards -->
            <div class="border border-light" style="background:#02181A;">
                <div class="container">

                    <div class="row g-3">

                        <!-- Card 1 -->
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">

                                <img
                                    src="./imgs/Press1.png"
                                    class="img-fluid w-100"
                                    alt="Business"
                                    loading="lazy"
                                    decoding="async">

                                <div class="image-content position-absolute bottom-0 start-0 p-3 bg-white text-dark">

                                    <!-- <h2 class="mb-1 titleFont fs-2 fw-bold">
                                        Factset
                                    </h2> -->
                                    <img src="imgs/logo/Factest.png"
                                        class="img-fluid mb-3"
                                        style="height: 40px; width:auto"
                                        alt="User">

                                    <p class="sub-title pFont mb-3 fs-6">
                                        A carefully curated list of 18-20 high-potential stocks,
                                        backed by 20+ years of market expertise,
                                        designed to create long-term wealth.
                                    </p>

                                    <a href="#"
                                        class="text-dark text-decoration-none fs-5"
                                        style="border-bottom:2px solid #00DF9C;">
                                        Know More
                                    </a>

                                </div>

                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">

                                <img
                                    src="./imgs/Press2.png"
                                    class="img-fluid w-100"
                                    alt="Business"
                                    loading="lazy"
                                    decoding="async">

                                <div class="image-content position-absolute bottom-0 start-0 p-3 bg-white text-dark">

                                    <!-- <h2 class="mb-1 titleFont fs-2 fw-bold">
                                        Investing.com
                                    </h2> -->

                                    <img src="imgs/logo/Investing.png"
                                        class="img-fluid mb-3"
                                        style="height: 40px; width:auto"
                                        alt="User">

                                    <p class="sub-title pFont mb-3 fs-6">
                                        One high-growth stock every month for mid-term
                                        holding, focused on fundamentally strong businesses.
                                    </p>

                                    <a href="#"
                                        class="text-dark text-decoration-none fs-5"
                                        style="border-bottom:2px solid #00DF9C;">
                                        Know More
                                    </a>

                                </div>

                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">

                                <img
                                    src="./imgs/Press3.png"
                                    class="img-fluid w-100"
                                    alt="Business"
                                    loading="lazy"
                                    decoding="async">

                                <div class="image-content position-absolute bottom-0 start-0 p-3 bg-white text-dark">

                                    <!-- <h2 class="mb-1 titleFont fs-2 fw-bold">
                                        Thomson Reuters
                                    </h2> -->
                                    <img src="imgs/logo/Thomson.png"
                                        class="img-fluid mb-3"
                                        style="height: 40px; width:auto"
                                        alt="User">

                                    <p class="sub-title pFont mb-3 fs-6">
                                        WealthX is a comprehensive equity investing service
                                        built to keep you aligned with opportunities across
                                        market cycles.
                                    </p>

                                    <a href="#"
                                        class="text-dark text-decoration-none fs-5"
                                        style="border-bottom:2px solid #00DF9C;">
                                        Know More
                                    </a>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Bottom spacing -->
            <div style="background:#02181A;">
                <div class="container">
                    <div class="border-start border-end border-light py-4"></div>
                </div>
            </div>

        </section>

        <!-- FAQ -->
        <section>
            <div class="container">
                <div class="px-3 py-5 border border-start border-end border-light">
                    <div class="row g-3 py-md-5">
                        <div class="col-md-6">
                            <h2 class="display-6 titleFont fw-semibold d-inline-block" style="line-height: 1.5;">Frequently Asked Questions</h2>
                            <p class="fs-6 pFont mb-3">Visit our FAQ section for answers to common queries.</p>
                            <img
                                src="./imgs/Faq.jpg"
                                class="img-fluid"
                                alt="background">
                        </div>
                        <div class="col-md-6">
                            <div class="accordion accordion-flush rounded-0 overflow-hidden" id="midcapFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne"><button class="px-0 accordion-button fw-medium text-body bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Is this portfolio suitable for beginners?</button></h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Yes. The portfolio is structured and easy to follow, even if you're new to stock investing.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Will I get updates when the portfolio changes?</button></h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Yes. You will receive timely updates whenever rebalancing or stock changes are made.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Is this a stock tip service?</button></h2>
                                    <div id="collapseThree" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">No. This is a structured portfolio strategy with allocation guidance and disciplined management.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How is this different from free advice online?</button></h2>
                                    <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Free advice is random and unstructured. This portfolio is research-driven, diversified, and actively monitored.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Do I need a minimum investment amount?</button></h2>
                                    <div id="collapseFive" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">No fixed minimum. You can allocate based on your capital size proportionally.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">I’m an NRI. Is this suitable for me?</button></h2>
                                    <div id="collapseSix" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Yes, NRIs can invest subject to regulatory guidelines.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="background-color: transparent; border-bottom: medium;">
                                    <h2 class="accordion-header" id="headingSeven"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Do you execute trades on my behalf?</button></h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">No. We provide guidance. You execute trades through your broker account.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require __DIR__ . '/includes/footer.php'; ?>
    </main>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const counters = document.querySelectorAll(".counter");

            const animateCounter = (counter) => {

                const target = parseInt(counter.dataset.count);
                const duration = 2000;
                const start = 1;

                let current = start;
                const increment = Math.max(1, Math.ceil((target - start) / (duration / 20)));

                const timer = setInterval(() => {
                    current += increment;

                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }

                    counter.textContent = current;
                }, 50);
            };

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        counters.forEach(counter => animateCounter(counter));
                        obs.disconnect();
                    }
                });
            }, {
                threshold: 0.3
            });

            observer.observe(document.getElementById("statsSection"));
        });
    </script>

    <!-- Acive tab option in mobile -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // Only for mobile devices
            if (window.innerWidth < 768) {

                const boxes = document.querySelectorAll(".image-box");

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            // Close all cards
                            boxes.forEach(box => box.classList.remove("active"));

                            // Open current card
                            entry.target.classList.add("active");
                        }

                    });
                }, {
                    threshold: 0.6
                });

                boxes.forEach(box => observer.observe(box));
            }

        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const counters = document.querySelectorAll(".rolling-counter");

            function createCounter(counter) {

                const value = counter.dataset.count.toString();

                counter.innerHTML = "";

                [...value].forEach((num, index) => {

                    const box = document.createElement("div");
                    box.className = "digit-box";

                    const track = document.createElement("div");
                    track.className = "digit-track";

                    const digit = parseInt(num);

                    // Even index -> Top to Bottom
                    if (index % 2 === 0) {

                        // 0 -> target
                        for (let i = 0; i <= digit; i++) {
                            const d = document.createElement("div");
                            d.className = "digit";
                            d.textContent = i;
                            track.appendChild(d);
                        }

                        box.appendChild(track);
                        counter.appendChild(box);

                        requestAnimationFrame(() => {
                            track.style.transform = `translateY(-${digit}em)`;
                        });

                    }
                    // Odd index -> Bottom to Top
                    else {

                        // target -> 9
                        for (let i = digit; i <= 9; i++) {
                            const d = document.createElement("div");
                            d.className = "digit";
                            d.textContent = i;
                            track.appendChild(d);
                        }

                        box.appendChild(track);
                        counter.appendChild(box);

                        // Start at bottom
                        track.style.transform = `translateY(-${9-digit}em)`;

                        requestAnimationFrame(() => {
                            track.style.transform = "translateY(0)";
                        });

                    }

                });

            }

            const observer = new IntersectionObserver((entries) => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {

                        counters.forEach(counter => {

                            if (!counter.dataset.done) {
                                createCounter(counter);
                                counter.dataset.done = "true";
                            }

                        });

                        observer.disconnect();

                    }

                });

            }, {
                threshold: 0.5
            });

            observer.observe(document.querySelector("#statsSection"));

        });
    </script>

</body>

</html>