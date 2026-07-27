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
                <div class="position-absolute start-50 translate-middle text-center text-white w-100 px-3"
                    style="top: 80%;">

                    <h1 class="display-4 fw-bold text-white text-center titleFont mb-0">
                        Start Your Eealth Creation Journey
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
            background: linear-gradient(180deg, rgba(2, 24, 26, 0) 30%, rgba(2, 24, 26, .92) 100%);
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
    <section id="individuals">
        <div class="container">
            <div class="border border-bottom-0 border-light py-5">

                <div class="mb-3 px-3">
                    <h1 class="display-6 fw-semibold titleFont">
                        For an Individuals
                    </h1>
                </div>

                <div class="row g-0">
                    <!-- Image panel -->
                    <div class="col-md-4">
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

                                <p class="sub-title pFont small mb-0" style="color:#FFFFFFBF;">
                                    A carefully curated list of 18–20 high-potential stocks,
                                    backed by 20+ years of market expertise, designed to create
                                    long-term wealth.
                                </p>

                                <p class="sub-title pFont small mb-0" style="color:#FFFFFFBF;">
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
                    <div class="col-md-4">
                        <div class="h-100 p-4 p-md-3 rounded-1 d-flex flex-column border-0"
                            style="
                            background: linear-gradient(
                                135deg,
                                rgba(222,247,238,0.15) 0%,
                                rgba(222,247,238,0.30) 50%,
                                rgba(222,247,238,0.55) 100%
                            );
                            border:1px solid #D8E7E0;
                        ">

                            <h3 class="titleFont fw-semibold fs-4 mb-3">
                                Alpha India Portfolio
                            </h3>

                            <p class="text-muted-green mb-4" style="font-size:.94rem; line-height:1.7;">
                                A carefully curated list of 18-20 high-potential stocks,
                                backed by 20+ years of market expertise, designed to create
                                long-term wealth.
                            </p>

                            <div class="text-uppercase fw-semibold small mb-3 text-muted-green"
                                style="letter-spacing:.1em;font-size:.72rem;">
                                What you get
                            </div>

                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Diversified Portfolio comprising Largecap, Midcap &amp; Smallcap stocks</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Quarterly Re-balancing</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Personalized Dashboard with real-time updates</span>
                                </li>
                            </ul>

                            <div class="mt-auto pt-3 border-top">
                                <div class="text-muted-green small mb-3">
                                    Minimum Investment:
                                    <strong class="text-success fw-semibold">₹2 Lacs</strong>
                                </div>

                                <a href="../services/portfolio.php"
                                    class="fw-semibold text-dark text-decoration-none d-inline-flex align-items-center gap-2">
                                    Explore Strategies
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Multibagger -->
                    <div class="col-md-4">
                        <div class="h-100 p-4 p-md-3 rounded-1 d-flex flex-column border-0"
                            style="
                            background: linear-gradient(
                                135deg,
                                rgba(222,247,238,0.15) 0%,
                                rgba(222,247,238,0.30) 50%,
                                rgba(222,247,238,0.55) 100%
                            );
                            border:1px solid #D8E7E0;
                        ">

                            <h3 class="titleFont fw-semibold fs-4 mb-3">
                                Multibagger
                            </h3>

                            <p class="text-muted-green mb-4" style="font-size:.94rem; line-height:1.7;">
                                One high-growth stock every month for mid-term holding,
                                focused on fundamentally strong businesses.
                            </p>

                            <div class="text-uppercase fw-semibold small mb-3 text-muted-green"
                                style="letter-spacing:.1em;font-size:.72rem;">
                                What you get
                            </div>

                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>One High-Growth Stock Every Month</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Detailed Research Report</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Mid-term investment</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Live dashboard to track performance</span>
                                </li>
                            </ul>

                            <div class="mt-auto pt-3 border-top">
                                <div class="text-muted-green small mb-3">
                                    Minimum Investment:
                                    <strong class="text-success fw-semibold">₹20,000 per stock</strong>
                                </div>

                                <a href="../services/multibagger.php"
                                    class="fw-semibold text-dark text-decoration-none d-inline-flex align-items-center gap-2">
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
    <section id="hni">
        <div class="container">
            <div class="border border-top-0 border-bottom-0 border-light py-5">

                <div class="mb-3 px-3">
                    <h1 class="display-6 fw-semibold titleFont">
                        For HNI's and Ultra HNI's
                    </h1>
                </div>

                <div class="row g-0">

                    <!-- Image panel -->
                    <div class="col-md-4">
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

                                <p class="sub-title pFont small mb-0" style="color:#FFFFFFBF;">
                                    One high-growth stock every month for mid-term holding,
                                    focused on fundamentally strong businesses.
                                </p>

                                <p class="sub-title pFont small mb-0" style="color:#FFFFFFBF;">
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
                        <div class="h-100 p-4 p-md-3 rounded-1 d-flex flex-column border-0"
                            style="
                            background: linear-gradient(
                                135deg,
                                #FFFBEE 0%,
                                #FFFDF6 100%
                            );
                            border:1px solid #EDE7D5;
                        ">
                            <h3 class="titleFont fw-semibold fs-4 mb-3">
                                WealthX
                            </h3>

                            <p class="text-muted-green mb-4" style="font-size:.94rem; line-height:1.7;">
                                Opportunities Don't Wait. Neither Should You.<br>
                                WealthX is a comprehensive equity investing service built
                                to keep you aligned with opportunities across market cycles.
                            </p>

                            <div class="text-uppercase fw-semibold small mb-3 text-muted-green"
                                style="letter-spacing:.1em;font-size:.72rem;">
                                What you get
                            </div>

                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Curated Stocks Portfolio for long-term wealth creation</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Monthly Stock Ideas backed by research and market structure</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>ETF Recommendations to capture sectoral, thematic, and macro opportunities</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Opportunity-driven strategy to help you act, not react, as markets evolve</span>
                                </li>
                            </ul>

                            <div class="mt-auto pt-3 border-top">
                                <div class="text-muted-green small mb-3">
                                    Minimum Investment:
                                    <strong class="text-success fw-semibold">₹1. Crore</strong>
                                </div>

                                <a href="../services/wealthx.php"
                                    class="fw-semibold text-dark text-decoration-none d-inline-flex align-items-center gap-2">
                                    Explore Strategies
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- WealthX+ -->
                    <div class="col-md-4">
                        <div class="h-100 p-4 p-lg-3 rounded-1 d-flex flex-column border-0"
                            style="
                            background: linear-gradient(
                                135deg,
                                #FFFBEE 0%,
                                #FFFDF6 100%
                            );
                            border:1px solid #EDE7D5;
                        ">

                            <h3 class="titleFont fw-semibold fs-4 mb-3">
                                WealthX+
                            </h3>

                            <p class="text-muted-green mb-4" style="font-size:.94rem; line-height:1.7;">
                                Opportunities Don't Wait. Neither Should You.<br>
                                WealthX is a comprehensive equity investing service built
                                to keep you aligned with opportunities across market cycles.
                            </p>

                            <div class="text-uppercase fw-semibold small mb-3 text-muted-green"
                                style="letter-spacing:.1em;font-size:.72rem;">
                                What you get
                            </div>

                            <ul class="list-unstyled mb-4">
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Curated Stocks Portfolio for long-term wealth creation</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Monthly Stock Ideas backed by research and market structure</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>ETF Recommendations to capture sectoral, thematic, and macro opportunities</span>
                                </li>
                                <li class="d-flex align-items-start gap-2 mb-3">
                                    <i class="fa-solid fa-circle-check text-dark mt-1"></i>
                                    <span>Opportunity-driven strategy to help you act, not react, as markets evolve</span>
                                </li>
                            </ul>

                            <div class="mt-auto pt-3 border-top">
                                <div class="text-muted-green small mb-3">
                                    Minimum Investment:
                                    <strong class="text-success fw-semibold">₹1. Crore</strong>
                                </div>

                                <a href="../services/wealthx.php"
                                    class="fw-semibold text-dark text-decoration-none d-inline-flex align-items-center gap-2">
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
    <section id="institutions">
        <div class="container">
            <div class="border border-top-0 border-bottom-0 border-light py-5">

                <div class="mb-3 px-3">
                    <h1 class="display-6 fw-semibold titleFont">
                        For Family Offices & Institutions
                    </h1>
                </div>

                <div class="row g-0">

                    <!-- Card 1 -->
                    <div class="col-md-5">
                        <div class="image-box position-relative overflow-hidden h-100" style="cursor:pointer;">

                            <img
                                src="<?= $base ?>imgs/c3.png"
                                class="img-fluid w-100 h-100 object-fit-cover"
                                alt="Business"
                                loading="lazy"
                                decoding="async">

                            <div class="image-content position-absolute bottom-0 start-0 w-100 h-100 p-3 text-light d-flex flex-column justify-content-end">

                                <img
                                    src="<?= $base ?>imgs/Vector3.svg"
                                    alt="EquityPandit"
                                    class="img-fluid logo mb-3 d-block align-self-start">

                                <h2 class="titleFont fs-3 fw-semibold mb-0">
                                    For Family Offices
                                    & Institutions
                                </h2>

                                <p class="sub-title pFont small mb-0" style="color:#FFFFFFBF;">
                                    WealthX is a comprehensive equity investing service built to keep you aligned with opportunities across market cycles.
                                </p>

                                <p class="sub-title pFont small mb-0" style="color:#FFFFFFBF;">
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

                    <!-- Right Side: Contact Form -->
                    <div class="col-md-7">
                        <div class="row g-0 h-100">
                            <div class="col-md-12">
                                <div class="card h-100 rounded-0">
                                    <div class="card-body p-4 p-lg-5 d-flex flex-column justify-content-between">

                                        <div>
                                            <h3 class="mb-4 titleFont text-center text-md-start">
                                                Send Us A Message
                                            </h3>

                                            <form>
                                                <div class="form-floating mb-3">
                                                    <input type="text"
                                                        class="form-control border-0 border-bottom rounded-0 shadow-none"
                                                        id="name1"
                                                        placeholder="Your Name">
                                                    <label for="name1">Your Name*</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input type="email"
                                                        class="form-control border-0 border-bottom rounded-0 shadow-none"
                                                        id="email1"
                                                        placeholder="Email Address">
                                                    <label for="email1">Email Address*</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input type="tel"
                                                        class="form-control border-0 border-bottom rounded-0 shadow-none"
                                                        id="phone1"
                                                        placeholder="Phone Number">
                                                    <label for="phone1">Phone Number*</label>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <select class="form-select border-0 border-bottom rounded-0 shadow-none"
                                                        id="subject1">
                                                        <option selected>Choose Subject</option>
                                                        <option>Portfolio</option>
                                                        <option>Multibagger</option>
                                                        <option>WealthX</option>
                                                    </select>
                                                    <label for="subject1">Choose Subject*</label>
                                                </div>
                                            </form>
                                        </div>

                                        <button type="submit"
                                            class="btn rounded-0 w-100 text-white py-2"
                                            style="background:#02181A;">
                                            Send Message
                                        </button>

                                    </div>
                                </div>
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