<?php
$pageTitle   = 'WealthX';
$base        = '../';
$solidHeader = true;
require __DIR__ . '/../includes/header.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">

    <title>WealthX</title>

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
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
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
            background: rgba(255, 255, 255, 0.2);
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

        /* Keep motion subtle and respect visitors who disable animation. */
        @media (prefers-reduced-motion: reduce) {
            [data-aos] {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body class="">
    <!-- Intro -->
    <section class="position-relative">
        <style>
            /* Desktop */
            .welthx-card {
                margin-top: -180px;
            }

            .form-card {
                margin-top: -140px;
            }

            /* Tablet */
            @media (max-width: 991.98px) {
                .welthx-card {
                    margin-top: -80px;
                }
            }

            /* Mobile */
            @media (max-width: 767.98px) {
                .welthx-card {
                    margin-top: -40px;
                }
            }


            .welthx-banner {
                width: 100%;
                height: auto;
                /* 420px */
                object-fit: cover;
                object-position: center;
                display: block;
            }

            /* Tablet */
            @media (max-width:991.98px) {
                .welthx-banner {
                    height: 350px;
                }
            }

            /* Mobile */
            @media (max-width:767.98px) {
                .welthx-banner {
                    height: 260px;
                    object-fit: cover;
                    object-position: center;
                }

                .welthx-card {
                    margin-top: -60px;
                }

                .form-card {
                    margin-top: 20px;
                }
            }
        </style>

        <!-- Full Width Image -->
        <div class="container-fluid p-0 position-relative">
            <img
                src="<?= $base ?>imgs/services/welthx_bg.jpg"
                class="welthx-banner"
                alt="Portfolio"
                loading="lazy"
                decoding="async">
            <!-- Border aligned with container -->
            <div class="container position-absolute top-0 start-50 translate-middle-x h-100">
                <div class="border-start border-end border-light h-100"></div>
            </div>
            <!-- Content Layer -->
            <div class="container mt-5 position-absolute top-0 start-50 translate-middle-x px-4 py-5">
                <div class="d-md-inline d-none">
                    <a href="<?= $base ?>index.php" class="text-decoration-none text-white">Home</a>
                    <span class="text-white mx-1">&gt;</span>
                    <a href="" class="text-decoration-none" style="color:#00DF9C">WealthX</a>
                </div>
            </div>
        </div>

        <!-- Content Box -->
        <div class="container position-relative welthx-card">
            <div class="border-start border-end border-light">
                <div class="text-white p-3 p-md-4" style="background-color:#02181A;">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="d-md-none mb-3">
                                <a class="text-decoration-none text-white" href="<?= $base ?>index.php">Home</a> <span>></span> <a class="text-decoration-none" style="color:#00DF9C" href="">WealthX</a>
                            </div>
                            <h1 class="display-5 fw-semibold mb-3 titleFont">
                                Your Wealth DeservesTo Work Smarter.
                            </h1>

                            <p class="text-white-50 mb-3 pFont">
                                WealthX is a multi-asset investment advisory service built to captureevery market opportunity - combining expert research, disciplinedallocation, and active portfolio management.
                            </p>

                            <!-- Button -->
                            <button class="btn btn-light rounded-0 mt-md-0 mt-3 pFont px-4 py-2 d-inline-flex align-items-center">
                                Explore Benefits
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </button>
                            <p class="mb-0 mt-3 pFont">Minimum Investment: <span style="color: #00DF9C;">₹1. Crore</span></p>
                        </div>

                        <!-- RIGHT SIDE -->
                        <div class="col-md-5 d-flex justify-content-center justify-content-md-end mb-0 mb-md-5">

                            <!-- Form Box -->
                            <div class="bg-body text-body p-3 form-card">
                                <p class="pFont mb-1 fs-6 fw-medium">
                                    Know more about
                                </p>

                                <h4 class="fw-semibold mb-3 titleFont">
                                    WealthX Service
                                </h4>

                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control rounded-0"
                                        id="name"
                                        placeholder="Enter Your Name">
                                    <label for="name">Enter Your Name*</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input
                                        type="email"
                                        class="form-control rounded-0"
                                        id="email"
                                        placeholder="Enter Your Email">
                                    <label for="email">Enter Your Email*</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <input
                                        type="text"
                                        class="form-control rounded-0"
                                        id="mobile"
                                        placeholder="Enter Your Mobile">
                                    <label for="mobile">Enter Your Mobile*</label>
                                </div>

                                <button class="btn rounded-0 text-white w-100" style="background-color: #02181A;">
                                    Sign in
                                </button>

                                <p class="small fw-medium mt-3 mb-0">
                                    By submitting, you agree to our Terms & Conditions
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- What you get -->
    <section>
        <div class="container">
            <div class="py-5 px-3 border-start border-end border-light">
                <div class="row g-0">
                    <div class="col-md-6 d-flex align-items-center">
                        <h2 class="display-5 titleFont fw-semibold d-inline-block">
                            Built For Every<br />Market Condition
                        </h2>
                    </div>
                    <div class="col-md-6 mt-2 mt-md-0">
                        <p class="fs-6 pFont">WealthX is a comprehensive multi-asset investment advisory service designed to capture every market opportunity for the super compounding of your wealth.</p>
                        <p class="fs-6 pFont mb-0">By combining expert research, disciplined portfolio construction, and active capital allocation, WealthX delivers institutional-quality investment
                            strategy — made accessible to individual investors.</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .hide-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .hide-scrollbar::-webkit-scrollbar {
                display: none;
            }

            /* .sticky-section {
                height: 100vh;
            }

            @media (max-width: 991.98px) {
                .sticky-section {
                    height: auto;
                }
            } */

            .circle-wrapper {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 290px;
                height: 290px;
                transform: translate(-50%, -50%);
                pointer-events: none;
            }

            .circle-number {
                position: absolute;
                top: 30%;
                left: 33%;
                color: #fff;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: 2px;
            }

            #circleRotate {
                transform-origin: center;
                transition: transform .7s ease;
            }

            .service-section img {
                max-width: 240px;
            }

            @media(max-width:991px) {
                .circle-wrapper {
                    width: 240px;
                    height: 240px;
                }

                .circle-number {
                    position: absolute;
                    top: 30%;
                    left: 30%;
                    color: #fff;
                    font-size: 15px;
                    font-weight: 600;
                    letter-spacing: 2px;
                }

            }
        </style>

        <div class="container">
            <div class="row g-0 border border-light">

                <!-- LEFT SIDE -->
                <div class="col-md-4 border-end-0 border-light">

                    <div class="position-sticky top-0 sticky-section">
                        <div class="position-relative">

                            <img
                                src="<?= $base ?>imgs/services/welthx_1.jpg"
                                class="img-fluid w-100"
                                alt="">

                            <div class="circle-wrapper">

                                <svg
                                    width="100%"
                                    height="100%"
                                    viewBox="0 0 300 300">

                                    <!-- circle -->

                                    <circle
                                        cx="150"
                                        cy="150"
                                        r="105"
                                        fill="none"
                                        stroke="rgba(255,255,255,.45)"
                                        stroke-width="2" />

                                    <!-- rotating arc -->

                                    <g id="circleRotate">

                                        <path
                                            d="M150 45
                                       A105 105 0 0 1 255 150"
                                            fill="none"
                                            stroke="#fff"
                                            stroke-width="3" />

                                    </g>

                                </svg>

                                <div
                                    id="circleNumber"
                                    class="circle-number">

                                    [ 1 ] / [ 4 ]

                                </div>

                            </div>

                        </div>

                        <a href="#"
                            class="btn rounded-0 text-white mt-3 px-4 py-2 mb-3 pFont" style="background-color: #02181A;">
                            Learn How It Works <i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </a>

                    </div>

                </div>

                <!-- RIGHT SIDE -->
                <div class="col-md-8">

                    <div
                        data-bs-spy="scroll"
                        data-bs-target="#wealth-nav"
                        data-bs-smooth-scroll="true"
                        tabindex="0">
                        <!-- class="overflow-auto hide-scrollbar"
                        style="height:100vh;" -->

                        <!-- Section 1 -->
                        <section id="expert" class="service-section p-3 border-bottom border-light" data-index="1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex gap-3">
                                        <h2 class="fs-5 fw-semibold titleFont flex-shrink-0 mb-0">[ 1 ]</h2>
                                        <div class="flex-column">
                                            <h2 class="fs-5 fw-semibold titleFont ">Expert Research</h2>
                                            <p class="fs-6 pFont mt-3">
                                                Every position backed by rigorous fundamental analysis and live market intelligence.
                                            </p>
                                            <img
                                                src="<?= $base ?>imgs/services/welthx_2.jpg"
                                                class="img-fluid"
                                                alt="background">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 2 -->
                        <section id="disciplined" class="service-section p-3 border-bottom border-light" data-index="2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex gap-3">
                                        <h2 class="fs-5 fw-semibold titleFont flex-shrink-0 mb-0">[ 2 ]</h2>
                                        <div class="flex-column">
                                            <h2 class="fs-5 fw-semibold titleFont ">Disciplined Construction</h2>
                                            <p class="fs-6 pFont mt-3">
                                                Portfolios built with clear allocation logic — not guesswork or short-term noise.
                                            </p>
                                            <img
                                                src="<?= $base ?>imgs/services/welthx_3.jpg"
                                                class="img-fluid"
                                                alt="background">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 3 -->
                        <section id="dynamic" class="service-section p-3 border-bottom border-light" data-index="3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex gap-3">
                                        <h2 class="fs-5 fw-semibold titleFont flex-shrink-0 mb-0">[ 3 ]</h2>
                                        <div class="flex-column">
                                            <h2 class="fs-5 fw-semibold titleFont ">Dynamic Allocation</h2>
                                            <p class="fs-6 pFont mt-3">
                                                Capital shifts toward stronger asset classes. Quarterly rebalancing. Event-based adjustments.
                                            </p>
                                            <img
                                                src="<?= $base ?>imgs/services/welthx_4.jpg"
                                                class="img-fluid"
                                                alt="background">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 4 -->
                        <section id="continuous" class="service-section p-3 border-bottom border-light" data-index="4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex gap-3">
                                        <h2 class="fs-5 fw-semibold titleFont flex-shrink-0 mb-0">[ 4 ]</h2>
                                        <div class="flex-column">
                                            <h2 class="fs-5 fw-semibold titleFont ">Continuous Compounding</h2>
                                            <p class="fs-6 pFont mt-3">
                                                When one asset class falls, others keep working. The portfolio never stops compounding.
                                            </p>
                                            <img
                                                src="<?= $base ?>imgs/services/welthx_5.jpg"
                                                class="img-fluid"
                                                alt="background">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- Services -->
    <section class="position-relative overflow-hidden">

        <!-- Background Image -->
        <img
            src="<?= $base ?>imgs/services/welthx_6.png"
            class="position-absolute top-0 start-0 w-100 h-100"
            alt="Portfolio"
            loading="lazy"
            decoding="async"
            style="object-fit:cover;">


        <!-- Dark Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-25"></div>

        <!-- Container Borders -->
        <div class="container position-absolute top-0 start-50 translate-middle-x h-100 d-none d-md-block">
            <div class="border-start border-end border-light h-100"></div>
        </div>

        <!-- Content -->
        <div class="position-relative py-5">
            <div class="container py-md-5">
                <div class="row align-items-center g-4">
                    <!-- Left Content -->
                    <div class="col-md-4 col-12 text-white">
                        <h1 class="display-6 mb-4 titleFont">
                            Every market. Every opportunity.
                        </h1>
                        <p class="fs-5 pFont">
                            A complete wealth management ecosystem -
                            research, alerts, analytics, and expert support.
                        </p>
                    </div>

                    <!-- Cards -->
                    <div class="col-md-8 col-12">
                        <div class="row g-3">
                            <!-- Card 1 -->
                            <div class=" col-md-4 col-12">
                                <div class="bg-dark bg-opacity-75 text-white p-4 h-100">
                                    <h4 class="mb-3 titleFont">
                                        Equity Portfolio
                                    </h4>
                                    <p class="small pFont">
                                        A curated basket of fundamentally strong stocks.
                                        Deep analysis of business quality, earnings growth,
                                        and management track record. Rebalanced quarterly.
                                    </p>
                                    <ul class="small ps-3 mb-0">
                                        <li>Fundamentally Strong Stocks</li>
                                        <li>In-depth Research & Analysis</li>
                                        <li>Quarterly Rebalancing</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-4 col-12">
                                <div class="bg-secondary bg-opacity-75 text-white p-4 h-100">
                                    <h4 class="mb-3 titleFont">
                                        Multibaggers
                                    </h4>
                                    <p class="small pFont">
                                        One high-growth opportunity every month.
                                        Quality businesses with strong structural trends
                                        and mid-term return potential.
                                    </p>
                                    <ul class="small ps-3 mb-0">
                                        <li>High-Growth Stock Every Month</li>
                                        <li>Quality Businesses, Strong Trends</li>
                                        <li>Research Backed</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-4 col-12">
                                <div class="bg-dark bg-opacity-50 text-white p-4 h-100">
                                    <h4 class="mb-3 titleFont">
                                        ETFs
                                    </h4>
                                    <p class="small pFont">
                                        Strategic allocations to commodity, index,
                                        and debt ETFs. Broad macro coverage across
                                        sectors and geographies.
                                    </p>
                                    <ul class="small ps-3 mb-0">
                                        <li>Global Diversification</li>
                                        <li>Commodity, Index & Debt ETFs</li>
                                        <li>Reduce Risk, Enhance Returns</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Generate Wealth -->
    <section>
        <div class="container">
            <div class="border border-light border-top-0 border-bottom-0">
                <div class="row align-items-stretch  ">

                    <!-- Left Side -->
                    <div class="col-12 col-md-6 ">
                        <div class="h-100">
                            <img
                                src="<?= $base ?>imgs/services/welthx_7.jpg"
                                alt="Contact"
                                class="img-fluid w-100 h-100 object-fit-cover">
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-12 col-md-6 p-4 p-md-5">
                        <h2 class="display-6 titleFont mb-4">
                            Not Built To Generate <br class="d-none d-md-block">
                            Excitement. Built To Generate
                            Wealth.
                        </h2>

                        <div class="d-inline-block p-4 mb-4" style="background:#213738;">
                            <p class="fst-italic mb-0 fs-5" style="color:#00DF9C;">
                                "The Goal Is Not To Predict The Future - It Is
                                To Be Positioned For Every Version Of It."
                            </p>
                        </div>

                        <div class="mb-5 d-flex flex-wrap gap-2 pFont">
                            <span>| Rising Markets |</span>
                            <span>| Volatile Periods |</span>
                            <span>| Market Catalysts |</span>
                            <span>| Through It All |</span>
                        </div>

                        <a href="contact.php"
                            class="btn text-white rounded-0 py-2"
                            style="background:#02181A;">
                            Schedule a Consultation
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="">
        <div class="container">
            <div class="border border-light">
                <div class="d-md-flex" style="min-height:380px;">

                    <!-- Card 1 -->
                    <div class="hover-card d-flex flex-column p-4 border-end"
                        style="flex:1; transition:.45s; cursor:pointer; overflow:hidden;">

                        <span class="icon icon-1"></span>

                        <div class="mt-2">
                            <h2 class="titleFont mb-0">
                                Rising<br>Markets
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Captured Through Equities And Monthly High-Conviction
                                Multibagger Picks.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold">
                            <i class="fa-solid fa-circle me-2 small"></i>
                            Explore More
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="hover-card d-flex flex-column p-4 border-end"
                        style="flex:1; transition:.45s; cursor:pointer; overflow:hidden;">

                        <span class="icon icon-2"></span>

                        <div class="mt-2">
                            <h2 class="titleFont mb-0">
                                Volatile<br>Periods
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Cushioned Through ETF Diversification Across
                                Uncorrelated Asset Classes.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold">
                            <i class="fa-solid fa-circle me-2 small"></i>
                            Explore More
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="hover-card d-flex flex-column p-4 border-end"
                        style="flex:1; transition:.45s; cursor:pointer; overflow:hidden;">

                        <span class="icon icon-3"></span>

                        <div class="mt-2">
                            <h2 class="titleFont mb-0">
                                Market<br>Catalysts
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Strategic Allocation Adjustments During Key Market
                                Events And Opportunities.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold">
                            <i class="fa-solid fa-circle me-2 small"></i>
                            Explore More
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="hover-card d-flex flex-column p-4"
                        style="flex:1; transition:.45s; cursor:pointer; overflow:hidden;">

                        <span class="icon icon-4"></span>

                        <div class="mt-2">
                            <h2 class="titleFont mb-0">
                                Through<br>It All
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Built To Navigate Multiple Market Cycles While
                                Focusing On Long-Term Wealth Creation.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold">
                            <i class="fa-solid fa-circle me-2 small"></i>
                            Explore More
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        .hover-card:hover {
            flex: 2.5 !important;
            background: #02181A;
            color: #fff;
        }

        .hover-content {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: all .4s ease;
        }

        .hover-card:hover .hover-content {
            max-height: 200px;
            opacity: 1;
        }

        .hover-card hr {
            border-color: rgba(255, 255, 255, .25);
        }

        /* Icons */
        .icon {
            width: 40px;
            height: 40px;
            display: inline-block;
            background: #000;
            transition: .3s;
            -webkit-mask-repeat: no-repeat;
            -webkit-mask-position: center;
            -webkit-mask-size: contain;
            mask-repeat: no-repeat;
            mask-position: center;
            mask-size: contain;
        }

        .icon-1 {
            -webkit-mask-image: url("../imgs/Vector15.svg");
            mask-image: url("../imgs/Vector15.svg");
        }

        .icon-2 {
            -webkit-mask-image: url("../imgs/Vector16.svg");
            mask-image: url("../imgs/Vector16.svg");
        }

        .icon-3 {
            -webkit-mask-image: url("../imgs/Vector17.svg");
            mask-image: url("../imgs/Vector17.svg");
        }

        .icon-4 {
            -webkit-mask-image: url("../imgs/Vector18.svg");
            mask-image: url("../imgs/Vector18.svg");
        }

        .hover-card:hover .icon {
            background: #00DF9C;
        }

        @media (max-width:767.98px) {

            .hover-card {
                border-right: 0 !important;
                border-bottom: 1px solid #dee2e6;
            }

            .hover-content {
                max-height: 300px;
                opacity: 1;
            }

            .hover-card:hover {
                flex: 1 !important;
            }
        }
    </style>


    <!-- Get Started -->
    <section class="text-white" style="background:#02181A;">
        <div class="container">
            <div class="px-3 py-5 border-start border-end border-light">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-10">
                        <div class="text-start text-md-center">
                            <h2 class="display-6 titleFont fw-semibold">Get started in 3 simple steps for Wealth Creation</h2>
                            <p class="fs-6 pFont mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-light" style="background:#02181A;">
            <div class="container">
                <style>
                    .process-content {
                        height: 140px;
                        transition: height .45s ease;
                    }

                    .process-img {
                        transition: transform .45s ease;
                    }

                    .process-desc {
                        opacity: 0;
                        transform: translateY(15px);
                        transition: opacity .3s ease, transform .3s ease;
                    }

                    .process-card:hover .process-img,
                    .process-card.active .process-img {
                        transform: translateY(-70px);
                    }

                    .process-card:hover .process-content,
                    .process-card.active .process-content {
                        height: 190px;
                    }

                    .process-card:hover .process-desc,
                    .process-card.active .process-desc {
                        opacity: 1;
                        transform: translateY(0);
                    }
                </style>
                <div class="row g-3">

                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="process-card h-100 position-relative overflow-hidden bg-white" style=" cursor:pointer;">

                            <span class="position-absolute ms-3 top-0 start-0 text-white fs-1 fw-light z-3">
                                1
                            </span>

                            <img
                                src="<?= $base ?>imgs/risk1.jpg"
                                class="process-img h-100 object-fit-cover"
                                alt="">

                            <div class="process-content position-absolute bottom-0 start-0 w-100 bg-white p-3 text-black">

                                <img src="<?= $base ?>imgs/Vector11.svg" alt="">

                                <h2 class="fw-semibold mt-2 titleFont">
                                    Risk Profiling
                                </h2>

                                <p class="process-desc Pfont mt-3 mb-0">
                                    To check the capability & willingness to take a risk.
                                </p>

                            </div>

                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="process-card h-100 position-relative overflow-hidden bg-white" style=" cursor:pointer;">

                            <span class="position-absolute ms-3 top-0 start-0 text-white fs-1 fw-light z-3">
                                2
                            </span>

                            <img
                                src="<?= $base ?>imgs/risk2.jpg"
                                class="process-img h-100 object-fit-cover"
                                alt="">

                            <div class="process-content position-absolute bottom-0 start-0 w-100 bg-white p-3 text-black">

                                <img src="<?= $base ?>imgs/Vector12.svg" alt="">

                                <h2 class="fw-semibold titleFont mt-2">
                                    Documentation
                                </h2>

                                <p class="process-desc Pfont mt-3 mb-0">
                                    Sign an agreement & complete thepayment to begin the journey.
                                </p>

                            </div>

                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="process-card h-100 position-relative overflow-hidden bg-white" style=" cursor:pointer;">

                            <span class="position-absolute ms-3 top-0 start-0 text-white fs-1 fw-light z-3">
                                3
                            </span>

                            <img
                                src="<?= $base ?>imgs/risk3.jpg"
                                class="process-img h-100 object-fit-cover"
                                alt="">

                            <div class="process-content position-absolute bottom-0 start-0 w-100 bg-white p-3 text-black">

                                <img src="<?= $base ?>imgs/Vector13.svg" alt="">

                                <h2 class="fw-semibold titleFont mt-2">
                                    Service Activation
                                </h2>

                                <p class="process-desc Pfont mt-3 mb-0">
                                    Complete the KYC to activateyour service.
                                </p>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- white-space -->
        <div style="background:#02181A;">
            <div class="container">
                <div class="border border-bottom-0 border-top-0 border-light py-4">
                </div>
            </div>
        </div>
    </section>


    <!-- Founded -->
    <section>
        <div class="container">
            <div class="px-3 py-5 border-start border-end border-light">
                <div class="row g-3 py-4">
                    <div class="col-md-6">
                        <h2 class="fs-3 pFont fw-semibold">Who are we?</h2>
                        <img
                            src="<?= $base ?>imgs/Vector14.svg"
                            class="img-fluid mt-3"
                            alt="background" />
                        <div class="d-flex mt-4">
                            <img
                                src="<?= $base ?>imgs/avatars.jpg"
                                class="img-fluid"
                                alt="background" />
                            <div class="flex-column">
                                <p class="mb-0 pFont fw-medium fs-5">Chosen by 1M+</p>
                                <p class="pFont fw-medium fs-5">Registered Users</p>
                            </div>
                        </div>
                        <button class="btn btn-dark rounded-0 pFont px-4 py-2 mt-md-3 d-inline-flex align-items-center" style="background-color: #02181A;" onclick="window.location.href='#';">
                            Get Started
                            <i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 small pFont">Founded in 2005, EquityPandit has spent 20+ years delivering transparent, disciplined, and personalized investment advice. Today, we serve Retail Investors, HNIs, UHNIs, and Institutions through a trusted community of 10,00,000+ registered users across 33+ countries, powered by 350+ research algorithms and a commitment to responsible advisory practices.</p>
                        <img
                            src="<?= $base ?>imgs/ep.svg"
                            class="img-fluid mt-3"
                            alt="background" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ -->
    <section>
        <div class="container">
            <div class="px-3 py-5 border border-start border-end border-light">
                <div class="row g-3 py-md-5">
                    <div class="col-md-6">
                        <h2 class="display-6 titleFont fw-semibold d-inline-block">Frequently Asked Questions</h2>
                        <p class="fs-6 pFont mb-3">Visit our FAQ section for answers to common queries.</p>
                        <img
                            src="<?= $base ?>imgs/Faq.jpg"
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

    <!-- Award -->
    <section>
        <div class="container">
            <div class="py-5 px-3 border-start border-end border-light">
                <div class="row g-0">
                    <div class="col-md-12">
                        <h2 class="display-6 titleFont fw-semibold">Put your money to work <br class="d-xl-block d-md-none" />with our research, that suits your style.</h2>
                        <p class="pFont fs-6 mt-3 mb-3">Writerap loved from thousands customers worldwide and get trusted from big companies.</p>
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
                        <button class="btn text-white rounded-0 px-4 py-2 pFont mt-3" style="background-color: #02181A;" onclick="window.location.href='#';">
                            Get Started<i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </button>
                    </div>
                    <!-- RIGHT SIDE -->
                    <div class="col-md-6 d-flex justify-content-center justify-content-md-end d-none">
                        <div class="position-relative w-100 p-5 overflow-hidden"
                            style="max-width:450px; background-color:#02181A;box-sizing:border-box;">
                            <!-- Background Image -->
                            <!-- <img
                                src="<?= $base ?>imgs/Form_Frame.svg"
                                alt="background"
                                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover"> -->


                            <!-- Form Box -->
                            <div class="bg-white p-3">
                                <div class="text-center mb-3">
                                    <img src="<?= $base ?>imgs/Form_logo.svg" width="55" alt="form icon">
                                </div>

                                <p class="pFont mb-1 fs-6 fw-medium">
                                    Know more about
                                </p>

                                <h4 class="fw-semibold mb-3 titleFont">
                                    Portfolio Service
                                </h4>

                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control rounded-0"
                                        id="name"
                                        placeholder="Enter Your Name">
                                    <label for="name">Enter Your Name*</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input
                                        type="email"
                                        class="form-control rounded-0"
                                        id="email"
                                        placeholder="Enter Your Email">
                                    <label for="email">Enter Your Email*</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <input
                                        type="text"
                                        class="form-control rounded-0"
                                        id="mobile"
                                        placeholder="Enter Your Mobile">
                                    <label for="mobile">Enter Your Mobile*</label>
                                </div>

                                <button class="btn rounded-0 text-white w-100" style="background-color: #02181A;">
                                    Sign in
                                </button>

                                <p class="small fw-medium mt-3 mb-0">
                                    By submitting, you agree to our Terms & Conditions
                                </p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/../includes/footer.php'; ?>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            if (window.innerWidth < 768) {

                function makeActive(selector) {

                    const elements = document.querySelectorAll(selector);

                    if (!elements.length) return;

                    // Ensure the first mobile card has its expanded state
                    // before the observer receives its first callback.
                    elements[0].classList.add("active");

                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {

                            if (entry.isIntersecting) {
                                elements.forEach(el => el.classList.remove("active"));
                                entry.target.classList.add("active");
                            }

                        });
                    }, {
                        threshold: 0.6
                    });

                    elements.forEach(el => observer.observe(el));
                }

                makeActive(".process-card");
            }

        });
    </script>

    <!-- Circle moving section -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const sections = document.querySelectorAll(".service-section");

            const circle = document.getElementById("circleRotate");

            const number = document.getElementById("circleNumber");

            const observer = new IntersectionObserver(function(entries) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {

                        let index = parseInt(entry.target.dataset.index);

                        // number.innerHTML = `[ ${String(index).padStart(2,"0")} ] / [ 04 ]`;
                        number.innerHTML = `[ ${index} ] / [ 4 ]`;
                        circle.style.transform =
                            "rotate(" + ((index - 1) * 90) + "deg)";

                    }

                });

            }, {

                threshold: .55

            });

            sections.forEach(section => observer.observe(section));

        });
    </script>
</body>

</html>