<?php
$pageTitle   = 'Services';
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

    <title>Services</title>

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

    <section class="position-relative overflow-hidden">

        <style>
            .contact-banner {
                width: 100%;
                height: auto;
                object-fit: cover;
                object-position: center;
                display: block;
            }

            .banner-overlay {
                position: absolute;
                inset: 0;
                background: rgba(2, 24, 26, 0.45);
            }

            .banner-content {
                position: absolute;
                inset: 0;
                z-index: 2;
            }

            .contact-title {
                font-size: 72px;
                font-weight: 600;
                line-height: 1.1;
            }

            .contact-subtitle {
                letter-spacing: 3px;
                font-weight: 600;
                text-transform: uppercase;
            }

            @media (max-width:991.98px) {
                .contact-banner {
                    height: 450px;
                }

                .contact-title {
                    font-size: 52px;
                }
            }

            @media (max-width:767.98px) {
                .contact-banner {
                    height: 320px;
                }

                .contact-title {
                    font-size: 34px;
                }

                .contact-subtitle {
                    font-size: 12px;
                    letter-spacing: 2px;
                }
            }

            .hero-text {
                top: 70%;
            }

            @media (max-width: 768px) {
                .hero-text {
                    top: 40%;
                }
            }
        </style>

        <!-- Background Image -->
        <div class="container-fluid p-0 position-relative">
            <img
                src="<?= $base ?>imgs/s6.png"
                class="contact-banner"
                alt="contact"
                loading="lazy"
                decoding="async">
            <!-- Border aligned with container -->
            <div class="container position-absolute top-0 start-50 translate-middle-x h-100">
                <div class="border-start border-end border-light h-100"></div>
            </div>
        </div>
        <!-- Dark Overlay -->
        <!-- <div class="banner-overlay"></div> -->

        <!-- Content -->
        <div class="banner-content">

            <!-- Vertical Border Lines -->
            <div class="container h-100 position-relative">
                <div class="border-start border-end border-light h-100"></div>

                <!-- Center Text (Lower Position) -->
                <div class="position-absolute start-50 translate-middle-x text-center text-white w-100 px-3 hero-text">

                    <h1 class="display-4 fw-bold text-white titleFont mb-0">
                        Start Your wealth creation journey
                    </h1>

                    <div class="pFont fs-5 mb-3">
                        Invest with conviction using strategies built for growth, stability, and opportunity.
                    </div>

                </div>
            </div>

        </div>

    </section>

    <style>
        /* Shared styles for all three service sections */
        .image-box {
            min-height: 460px;
        }

        .image-content {
            background: transparent;
            transition: all .4s ease;
        }

        .image-content .sub-title,
        .image-content .explore-btn {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transform: translateY(20px);
            transition: all .6s ease;
            margin: 0 !important;
            display: block;
        }

        .image-box:hover .sub-title,
        .image-box:hover .explore-btn,
        .image-box.active .sub-title,
        .image-box.active .explore-btn {
            max-height: 300px;
            opacity: 1;
            transform: translateY(0);
            margin-top: 12px !important;
        }

        .logo {
            max-height: 50px;
            transition: transform .8s ease;
        }

        .image-box:hover .logo,
        .image-box.active .logo {
            transform: rotate(360deg);
        }

        .text-muted-green {
            color: #5b6b64;
        }
    </style>

    <!-- SECTION 1: For an Individuals -->
    <section id="for-individuals">
        <div class="container">
            <div class="border border-bottom-0 border-light py-5">

                <div class="mb-3 px-3">
                    <h1 class="display-6 fw-semibold titleFont">
                        For an Individuals
                    </h1>
                </div>

                <div class="row g-0">
                    <!-- Image panel -->
                    <div class="col-md-4 border-bottom ">
                        <div class="image-box position-relative overflow-hidden h-100" style="cursor:pointer;">

                            <img
                                src="<?= $base ?>imgs//c1.png"
                                class="img-fluid w-100 h-100 object-fit-cover"
                                alt="Business"
                                loading="lazy"
                                decoding="async">

                            <div class="image-content position-absolute bottom-0 start-0 w-100 h-100 p-3 text-light d-flex flex-column justify-content-end">

                                <img
                                    src="<?= $base ?>imgs/Vector1.svg"
                                    alt="EquityPandit"
                                    class="img-fluid logo d-block align-self-start">

                                <h2 class="titleFont fs-3 fw-semibold mt-3">
                                    For Individuals
                                </h2>

                                <p class="sub-title pFont small mb-0">
                                    A carefully curated list of 18-20 high-potential stocks,
                                    backed by 20+ years of market expertise, designed to create
                                    long-term wealth.
                                </p>

                                <p class="sub-title pFont small mb-0">
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>
                                    High-Conviction Stocks for 2026
                                    <br>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>
                                    Diversified Portfolio
                                </p>

                                <a href="#" class="explore-btn pFont small text-light text-decoration-none border-bottom border-success border-2 d-inline-flex align-items-center" style="width:fit-content;">
                                    Explore Strategies
                                    <i class="fa-solid fa-arrow-right-long ms-1"></i>
                                </a>

                            </div>

                        </div>
                    </div>

                    <!-- Alpha India Portfolio -->
                    <div class="col-md-4 border-bottom">
                        <div class="h-100 p-4 p-md-3  d-flex flex-column border-0 border-end theme-card">
                            <style>
                                :root {
                                    --card-top: rgba(0, 0, 0, 0.90);
                                    --card-bottom: rgba(110, 231, 183, 0.25);
                                    --card-border: rgba(34, 197, 94, 0.20);
                                }

                                [data-bs-theme="light"] {
                                    --card-top: rgba(255, 255, 255, 0.95);
                                    --card-bottom: rgba(167, 243, 208, 0.45);
                                    --card-border: rgba(34, 197, 94, 0.25);
                                }

                                [data-bs-theme="dark"] {
                                    --card-top: rgba(0, 0, 0, 0.90);
                                    --card-bottom: rgba(110, 231, 183, 0.25);
                                    --card-border: rgba(34, 197, 94, 0.20);
                                }

                                .theme-card {
                                    background: linear-gradient(0deg,
                                            var(--card-top) 0%,
                                            var(--card-bottom) 100%);
                                    border: 1px solid var(--card-border);
                                }
                            </style>
                            <h3 class="titleFont fw-semibold fs-4 mb-3 text-body-emphasis">
                                Alpha India Portfolio
                            </h3>

                            <p class="text-muted-dark mb-4" ">
                                A carefully curated list of 18-20 high-potential stocks,
                                backed by 20+ years of market expertise, designed to create
                                long-term wealth.
                            </p>

                            <div class=" text-uppercase fw-semibold small mb-3 text-body-emphasis">
                                What you get
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li class="d-flex align-items-start gap-2 mb-3">
                                <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                <span>Diversified Portfolio comprising Largecap, Midcap &amp; Smallcap stocks</span>
                            </li>
                            <li class="d-flex align-items-start gap-2 mb-3">
                                <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                <span>Quarterly Re-balancing</span>
                            </li>
                            <li class="d-flex align-items-start gap-2 mb-3">
                                <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                <span>Personalized Dashboard with real-time updates</span>
                            </li>
                        </ul>

                        <div class="mt-auto pt-3 ">
                            <div class="text-muted-secondary small mb-3">
                                Minimum Investment:
                                <strong class="text-body fw-semibold">₹2 Lacs</strong>
                            </div>

                            <a href="../services/portfolio.php"
                                class="fw-semibold text-body-emphasis text-decoration-none d-inline-flex align-items-center gap-2">
                                Explore Strategies
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Multibagger -->
                <div class="col-md-4 border-bottom">
                    <div class="h-100 p-4 p-md-3 d-flex flex-column border-0 theme-card">
                        <style>
                            :root {
                                --card-top: rgba(0, 0, 0, 0.90);
                                --card-bottom: rgba(110, 231, 183, 0.25);
                                --card-border: rgba(34, 197, 94, 0.20);
                            }

                            [data-bs-theme="light"] {
                                --card-top: rgba(255, 255, 255, 0.95);
                                --card-bottom: rgba(167, 243, 208, 0.45);
                                --card-border: rgba(34, 197, 94, 0.25);
                            }

                            [data-bs-theme="dark"] {
                                --card-top: rgba(0, 0, 0, 0.90);
                                --card-bottom: rgba(110, 231, 183, 0.25);
                                --card-border: rgba(34, 197, 94, 0.20);
                            }

                            .theme-card {
                                background: linear-gradient(0deg,
                                        var(--card-top) 0%,
                                        var(--card-bottom) 100%);
                                border: 1px solid var(--card-border);
                            }
                        </style>
                        <h3 class="titleFont fw-semibold fs-4 mb-3 text-body-emphasis">
                            Multibagger
                        </h3>

                        <p class="text-muted-dark mb-4">
                            One high-growth stock every month for mid-term holding,
                            focused on fundamentally strong businesses.
                        </p>

                        <div class="text-uppercase fw-semibold small mb-3 text-body-emphasis">
                            What you get
                        </div>

                        <ul class="list-unstyled mb-4">
                            <li class="d-flex align-items-start gap-2 mb-3">
                                <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                <span>One High-Growth Stock Every Month</span>
                            </li>
                            <li class="d-flex align-items-start gap-2 mb-3">
                                <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                <span>Detailed Research Report</span>
                            </li>
                            <li class="d-flex align-items-start gap-2 mb-3">
                                <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                <span>Mid-term investment</span>
                            </li>
                            <li class="d-flex align-items-start gap-2 mb-3">
                                <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                <span>Live dashboard to track performance</span>
                            </li>
                        </ul>

                        <div class="mt-auto pt-3 ">
                            <div class="text-muted-secondary small mb-3">
                                Minimum Investment:
                                <strong class="text-body fw-semibold">₹20,000 per stock</strong>
                            </div>

                            <a href="../services/multibagger.php"
                                class="fw-semibold text-body-emphasis text-decoration-none d-inline-flex align-items-center gap-2">
                                Explore Strategies
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!-- SECTION 2: For HNI's and Ultra HNI's -->
    <section id="for-hni">
        <div class="container">
            <div class="border border-top-0 border-bottom-0 border-light py-5">

                <div class="mb-3 px-3">
                    <h1 class="display-6 fw-semibold titleFont">
                        For HNI's and Ultra HNI's
                    </h1>
                </div>

                <div class="row g-0">

                    <!-- Image panel -->
                    <div class="col-md-4 border-bottom">
                        <div class="image-box position-relative overflow-hidden h-100" style="cursor:pointer;">

                            <img
                                src="<?= $base ?>imgs//c2.png"
                                class="img-fluid w-100 h-100 object-fit-cover"
                                alt="Business"
                                loading="lazy"
                                decoding="async">

                            <div class="image-content position-absolute bottom-0 start-0 w-100 h-100 p-3 text-light d-flex flex-column justify-content-end">

                                <img
                                    src="<?= $base ?>imgs/Vector2.svg"
                                    alt="EquityPandit"
                                    class="img-fluid logo mb-3 d-block align-self-start">

                                <h2 class="titleFont fs-3 fw-semibold mb-0">
                                    For HNI's and Ultra
                                    HNI's
                                </h2>

                                <p class="sub-title pFont small mb-0">
                                    One high-growth stock every month for mid-term holding,
                                    focused on fundamentally strong businesses.
                                </p>

                                <p class="sub-title pFont small mb-0">
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>
                                    A detailed research report
                                    <br>
                                    <i class="fa-solid fa-circle-check me-2 text-success"></i>
                                    Instant Alerts Via App
                                </p>

                                <a href="#" class="explore-btn pFont small text-light text-decoration-none border-bottom border-success border-2 d-inline-flex align-items-center" style="width:fit-content;">
                                    Explore Strategies
                                    <i class="fa-solid fa-arrow-right-long ms-1"></i>
                                </a>

                            </div>

                        </div>
                    </div>

                    <!-- WealthX -->
                    <div class="col-md-4">
                        <div class="h-100 p-4 p-md-3 d-flex flex-column border-0 border-end border-bottom theam1-card">
                            <style>
                                :root {
                                    /* WealthX Card Colors */
                                    --wealthx-card-top: rgba(0, 0, 0, 0.90);
                                    --wealthx-card-mid: rgba(18, 18, 18, 1);
                                    --wealthx-card-bottom: rgba(107, 90, 39, 0.35);
                                    --wealthx-card-border: rgba(145, 120, 55, 0.25);
                                }

                                /* Light Theme */
                                [data-bs-theme="light"] {
                                    --wealthx-card-top: rgba(255, 255, 255, 0.96);
                                    --wealthx-card-mid: rgba(195, 170, 95, 0.18);
                                    --wealthx-card-bottom: rgba(195, 170, 95, 0.18);
                                    --wealthx-card-border: rgba(145, 120, 55, 0.28);
                                }

                                /* Dark Theme */
                                [data-bs-theme="dark"] {
                                    --wealthx-card-top: #080808;
                                    --wealthx-card-mid: #776937;
                                    --wealthx-card-bottom: rgba(107, 90, 39, 0.75);
                                    --wealthx-card-border: rgba(145, 120, 55, 0.22);
                                }

                                /* WealthX Card */
                                .theam1-card {
                                    background: linear-gradient(0deg,
                                            var(--wealthx-card-top) 0%,
                                            var(--wealthx-card-mid) 72%,
                                            var(--wealthx-card-bottom) 100%);
                                    border: 1px solid var(--wealthx-card-border);
                                    transition: background .3s ease, border-color .3s ease;
                                }
                            </style>

                            <h3 class="titleFont fw-semibold fs-4 mb-3 text-body-emphasis">
                                WealthX
                            </h3>

                            <p class="text-body mb-4">
                                Opportunities Don't Wait. Neither Should You.<br>
                                WealthX is a comprehensive equity investing service built
                                to keep you aligned with opportunities across market cycles.
                            </p>

                            <div class="text-uppercase fw-semibold small mb-3 text-body-emphasis">
                                What you get
                            </div>

                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>Curated Stocks Portfolio for long-term wealth creation</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>Monthly Stock Ideas backed by research and market structure</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>ETF Recommendations to capture sectoral, thematic, and macro opportunities</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>Opportunity-driven strategy to help you act, not react, as markets evolve</span>
                                </li>
                            </ul>

                            <div class="mt-auto pt-3 ">
                                <div class="text-muted-secondary small mb-3">
                                    Minimum Investment:
                                    <strong class="fw-semibold text-body">₹1. Crore</strong>
                                </div>

                                <a href="../services/wealthx.php"
                                    class="fw-semibold text-body-emphasis text-decoration-none d-inline-flex align-items-center gap-2">
                                    Explore Strategies
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- WealthX+ -->
                    <div class="col-md-4">
                        <div class="h-100 p-4 p-md-3 d-flex flex-column border-0 border-bottom theam1-card">
                            <style>
                                :root {
                                    /* WealthX Card Colors */
                                    --wealthx-card-top: rgba(0, 0, 0, 0.90);
                                    --wealthx-card-mid: rgba(18, 18, 18, 1);
                                    --wealthx-card-bottom: rgba(107, 90, 39, 0.35);
                                    --wealthx-card-border: rgba(145, 120, 55, 0.25);
                                }

                                /* Light Theme */
                                [data-bs-theme="light"] {
                                    --wealthx-card-top: rgba(255, 255, 255, 0.96);
                                    --wealthx-card-mid: rgba(195, 170, 95, 0.18);
                                    --wealthx-card-bottom: rgba(195, 170, 95, 0.18);
                                    --wealthx-card-border: rgba(145, 120, 55, 0.28);
                                }

                                /* Dark Theme */
                                [data-bs-theme="dark"] {
                                    --wealthx-card-top: #080808;
                                    --wealthx-card-mid: #776937;
                                    --wealthx-card-bottom: rgba(107, 90, 39, 0.75);
                                    --wealthx-card-border: rgba(145, 120, 55, 0.22);
                                }

                                /* WealthX Card */
                                .theam1-card {
                                    background: linear-gradient(0deg,
                                            var(--wealthx-card-top) 0%,
                                            var(--wealthx-card-mid) 72%,
                                            var(--wealthx-card-bottom) 100%);
                                    border: 1px solid var(--wealthx-card-border);
                                    transition: background .3s ease, border-color .3s ease;
                                }
                            </style>

                            <h3 class="titleFont fw-semibold fs-4 mb-3 text-body-emphasis">
                                WealthX+
                            </h3>

                            <p class="text-body mb-4">
                                Opportunities Don't Wait. Neither Should You.<br>
                                WealthX is a comprehensive equity investing service built
                                to keep you aligned with opportunities across market cycles.
                            </p>

                            <div class="text-uppercase fw-semibold small mb-3 text-body-emphasis">
                                What you get
                            </div>

                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>Curated Stocks Portfolio for long-term wealth creation</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>Monthly Stock Ideas backed by research and market structure</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>ETF Recommendations to capture sectoral, thematic, and macro opportunities</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-body mt-1"></i>
                                    <span>Opportunity-driven strategy to help you act, not react, as markets evolve</span>
                                </li>
                            </ul>

                            <div class="mt-auto pt-3 ">
                                <div class="text-muted-secondary small mb-3">
                                    Minimum Investment:
                                    <strong class="fw-semibold text-body">₹1. Crore</strong>
                                </div>

                                <a href="../services/wealthx.php"
                                    class="fw-semibold text-body-emphasis text-decoration-none d-inline-flex align-items-center gap-2">
                                    Explore Strategies
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: For Family Offices & Institutions -->
    <section id="for-institutions">
        <style>
            #for-institutions .image-box {
                min-height: 550px;
                background-size: cover;
                background-position: center;
            }

            #for-institutions .form-card {
                width: 100%;
                max-width: 400px;
                z-index: 10;
                position: relative;
                opacity: 1 !important;
                visibility: visible !important;
                display: block !important;
                transform: none !important;
            }

            #for-institutions .col-md-5,
            #for-institutions .col-md-2 {
                position: relative;
                z-index: 5;
            }

            /* Fallback CSS: center form-card column if Bootstrap flex utilities
       aren't enough (e.g. custom grid overrides elsewhere) */
            #for-institutions .form-col-center {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100%;
            }

            @media (max-width: 767px) {
                #for-institutions .image-box {
                    min-height: auto;
                    /* remove the shared background — each column handles its own on mobile */
                    background-image: none !important;
                }

                /* Left content keeps the background image on mobile */
                #for-institutions .left-content-box {
                    background-image: var(--mobile-bg-image);
                    background-size: cover;
                    background-position: center;
                }

                /* Form column gets a plain solid background on mobile */
                /* #for-institutions .form-col-center {
                    background-color: #02181A;
                } */
            }
        </style>

        <div class="container">
            <div class="border border-top-0 border-bottom-0 border-light py-0 py-md-5">

                <div class="mb-3 px-3">
                    <h1 class="display-6 fw-semibold titleFont">
                        For Family Offices & Institutions
                    </h1>
                </div>

                <div class="row g-0">

                    <div class="col-md-12">
                        <div class="image-box position-relative overflow-hidden"
                            style="background-image: url('<?= $base ?>imgs/c3.png');">

                            <div class="row g-0 h-100 align-items-center">

                                <!-- Left Content: bg image visible on mobile & desktop -->
                                <div class="col-md-5">
                                    <div class="left-content-box position-relative h-100 p-3 p-lg-5 text-light d-flex flex-column justify-content-center"
                                        style="--mobile-bg-image: url('<?= $base ?>imgs/c3.png');">

                                        <img
                                            src="<?= $base ?>imgs/Vector3.svg"
                                            alt="EquityPandit"
                                            class="img-fluid logo mb-3 d-block align-self-start">

                                        <h2 class="titleFont fs-3 fw-semibold mb-0">
                                            For Family Offices
                                            & Institutions
                                        </h2>

                                        <p class="pFont small mb-0">
                                            WealthX is a comprehensive equity investing service built to keep you aligned with opportunities across market cycles.
                                        </p>

                                        <p class="pFont small mb-0">
                                            <i class="fa-solid fa-circle-check me-2 text-success"></i>
                                            A detailed research report
                                            <br>
                                            <i class="fa-solid fa-circle-check me-2 text-success"></i>
                                            Instant Alerts Via App
                                        </p>

                                        <a href="#" class="mt-3 pFont small text-light text-decoration-none border-bottom border-success border-2 d-inline-flex align-items-center" style="width:fit-content;">
                                            Explore Strategies
                                            <i class="fa-solid fa-arrow-right-long ms-1"></i>
                                        </a>

                                    </div>
                                </div>

                                <div class="col-md-2 d-none d-md-block"></div>

                                <!-- Right Side: Contact Form — plain bg on mobile, transparent (shows image) on desktop -->
                                <!-- Right Side: Contact Form -->
                                <div class="col-md-5 d-flex align-items-center justify-content-center justify-content-md-center justify-content-end form-col-center py-0 py-md-5">

                                    <div class="bg-body text-body p-3 form-card">

                                        <!-- ================= Contact Form Card ================= -->
                                        <div id="contactCard">

                                            <h4 class="fw-semibold mb-3 titleFont">
                                                Send Us A Message
                                            </h4>

                                            <form id="contactForm">

                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control rounded-0 border-0 border-bottom" id="name" placeholder="Enter Your Name" required>
                                                    <label for="name">Enter Your Name*</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control rounded-0 border-0 border-bottom" id="email" placeholder="Enter Your Email" required>
                                                    <label for="email">Enter Your Email*</label>
                                                </div>

                                                <div class="form-floating mb-4">
                                                    <input type="tel" class="form-control rounded-0 border-0 border-bottom" id="mobile" placeholder="Enter Your Mobile" required>
                                                    <label for="mobile">Enter Your Mobile*</label>
                                                </div>

                                                <div class="form-floating mb-4">
                                                    <textarea class="form-control rounded-0 border-0 border-bottom" id="message" placeholder="Enter Your Message" style="height: 120px;" required></textarea>
                                                    <label for="message">Enter Your Message*</label>
                                                </div>

                                                <!-- OTP field: hidden until "Send Otp" is clicked -->
                                                <div class="form-floating mb-4 d-none" id="otpFieldWrap">
                                                    <input type="text"
                                                        class="form-control rounded-0 border-0 border-bottom "
                                                        id="otp"
                                                        maxlength="6"
                                                        placeholder="OTP">
                                                    <label for="otp">Enter OTP*</label>
                                                </div>

                                                <button type="button" id="actionBtn" class="btn rounded-0 text-white w-100" style="background-color: #02181A;">
                                                    Send Otp
                                                </button>

                                                <p class="small fw-medium mt-3 mb-0">
                                                    By submitting, you agree to our Terms & Conditions
                                                </p>

                                            </form>

                                        </div>

                                        <!-- ================= Thank You Card ================= -->
                                        <div id="thankYouCard" class="d-none text-center">

                                            <div class="mb-4">
                                                <div class="rounded-circle border border-4 d-flex align-items-center justify-content-center mx-auto"
                                                    style="width:110px;height:110px;border-color:#198754!important;">
                                                    <i class="fa-solid fa-check fs-1 text-success"></i>
                                                </div>
                                            </div>

                                            <h4 class="titleFont fw-bold mb-0">
                                                Thank You For
                                            </h4>

                                            <h4 class="titleFont fw-bold text-success mb-4">
                                                Registering With Us!
                                            </h4>

                                            <p class="text-muted mb-4 small">
                                                Our team has received your details and will contact you shortly for your free consultation.
                                            </p>

                                            <div class="border border-success px-4 py-2 d-inline-block">
                                                <i class="fa-solid fa-headset text-success me-2"></i>
                                                <span class="small">Our Team Will Reach Out To You Soon</span>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <script>
                                    // Demo OTP
                                    const demoOTP = "123456";

                                    // Tracks whether we're in "send" mode or "verify" mode
                                    let otpSent = false;

                                    const actionBtn = document.getElementById("actionBtn");
                                    const otpFieldWrap = document.getElementById("otpFieldWrap");

                                    actionBtn.addEventListener("click", function() {

                                        if (!otpSent) {

                                            // ---- Step 1: Send OTP ----
                                            if (
                                                document.getElementById("name").value.trim() === "" ||
                                                document.getElementById("email").value.trim() === "" ||
                                                document.getElementById("mobile").value.trim() === "" ||
                                                document.getElementById("message").value.trim() === ""
                                            ) {
                                                alert("Please fill all required fields.");
                                                return;
                                            }

                                            // Replace with your OTP API
                                            alert("OTP Sent Successfully!\n\nDemo OTP: 123456");

                                            // Reveal OTP field
                                            otpFieldWrap.classList.remove("d-none");

                                            // Switch button to verify mode
                                            actionBtn.textContent = "Verify Otp";
                                            otpSent = true;

                                        } else {

                                            // ---- Step 2: Verify OTP ----
                                            let otp = document.getElementById("otp").value.trim();

                                            if (otp === "") {
                                                alert("Please enter OTP.");
                                                return;
                                            }

                                            if (otp === demoOTP) {

                                                // Hide form, show thank you card
                                                document.getElementById("contactCard").classList.add("d-none");
                                                document.getElementById("thankYouCard").classList.remove("d-none");

                                            } else {
                                                alert("Invalid OTP.");
                                            }

                                        }

                                    });
                                </script>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php require __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>