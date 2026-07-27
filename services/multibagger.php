<?php
$pageTitle = 'Multibagger';
$base = '../';
$solidHeader = true;
require __DIR__ . '/../includes/header.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<!-- Hero -->
<section class="position-relative">

    <style>
        /* Desktop */
        .multibagger-card {
            margin-top: -180px;
            position: relative;
            z-index: 2;
        }

        .form-card {
            margin-top: -180px;
        }

        .multibagger-banner {
            width: 100%;
            height: auto;
            object-fit: cover;
            object-position: left;
            display: block;
        }

        /* Tablet */
        @media (max-width:991.98px) {

            .multibagger-banner {
                height: 350px;
            }

            .multibagger-card {
                margin-top: -50px;
            }

        }

        /* Mobile */
        @media (max-width:767.98px) {

            .multibagger-banner {
                height: 260px;
            }

            .multibagger-card {
                margin-top: -30px;
            }

            .form-card {
                margin-top: 20px;
            }

        }
    </style>


    <!-- Banner -->
    <div class="container-fluid p-0 position-relative">
        <img src="<?= $base ?>imgs/s2.jpg"
            class="multibagger-banner d-block"
            alt="multibagger"
            loading="lazy"
            decoding="async">
        <div class="container position-absolute top-0 start-50 translate-middle-x h-100">
            <div class="border-start border-end border-light h-100"></div>
        </div>

        <!-- Desktop Breadcrumb -->
        <div class="container position-absolute start-50 translate-middle-x px-4 d-none d-md-block"
            style="top:40px;">

            <a href="<?= $base ?>index.php"
                class="text-decoration-none text-white">
                Home
            </a>

            <i class="fa-solid fa-chevron-right fa-sm text-white"></i>
            <span>
                <a href="<?= $base ?>services/multibagger.php"
                    class="text-decoration-none" style="color:#00DF9C">
                    Multibagger
                </a>
            </span>
        </div>
    </div>
    <!-- Content Card -->
    <div class="container multibagger-card">
        <div class="border-start border-end border-light">
            <div class="text-white p-3 p-md-4"
                style="background:#02181A;">
                <div class="row align-items-center g-0">
                    <!-- LEFT CONTENT -->
                    <div class="col-md-7">
                        <!-- Mobile Breadcrumb -->
                        <div class="d-md-none mb-3">
                            <a href="<?= $base ?>index.php"
                                class="text-decoration-none text-white">
                                Home
                            </a>
                            <i class="fa-solid fa-chevron-right fa-sm text-white"></i>
                            <span style="color:#00DF9C">
                                Multibagger
                            </span>
                        </div>
                        <h1 class="display-5 fw-semibold mb-3 titleFont" data-aos="fade-right">
                            Invest Early, Before The Stock Opportunity Becomes A Success Story.
                        </h1>
                        <p class="text-white-50 mb-3 pFont" data-aos="fade-right">
                            Mid-term Investing, Proven Results, Real Wealth.
                        </p>

                        <button class="btn btn-light px-4 py-2 rounded-0">
                            Explore Benefits →
                        </button>
                        <p class="mt-3 mb-0 pFont" data-aos="fade-up" data-aos-delay="250">
                            Minimum Investment:
                            <span style="color:#00DF9C">
                                ₹20,000 per stock
                            </span>
                        </p>
                    </div>

                    <!-- FORM -->
                    <div class="col-md-5 d-flex justify-content-center justify-content-md-end mb-0 mb-md-5" data-aos="fade-up"
                        data-aos-delay="150">
                        <div class="bg-body text-body p-3 form-card shadow">
                            <p class="mb-1 fs-6 fw-medium pFont">
                                Know more about
                            </p>
                            <h4 class="fw-semibold mb-3 titleFont">
                                Multibaggers Service
                            </h4>
                            <div class="form-floating mb-3">

                                <input type="text"
                                    class="form-control rounded-0"
                                    id="name"
                                    placeholder="Enter Your Name">

                                <label for="name">
                                    Enter Your Name*
                                </label>
                            </div>
                            <div class="form-floating mb-3">

                                <input type="email"
                                    class="form-control rounded-0"
                                    id="email"
                                    placeholder="Enter Your Email">
                                <label for="email">
                                    Enter Your Email*
                                </label>

                            </div>
                            <div class="form-floating mb-4">

                                <input type="text"
                                    class="form-control rounded-0"
                                    id="mobile"
                                    placeholder="Enter Your Mobile">
                                <label for="mobile">
                                    Enter Your Mobile*
                                </label>
                            </div>
                            <button class="btn rounded-0 text-white w-100"
                                style="background:#02181A;">
                                Sign in
                            </button>
                            <p class="small fw-medium mt-3 mb-0 Pfont">
                                By submitting, you agree to our Terms & Conditions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Who Should Avail-->
<section>
    <div class="container">
        <div class="py-5 px-3 border-start border-end border-bottom border-light">
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-md-6">
                    <h2 class="display-5 titleFont fw-semibold" data-aos="fade-up"
                        data-aos-delay="100">Long-term Investing, Proven Results, Real Wealth...
                    </h2>
                    <p class="mb-0 pFont fs-6 mt-3" data-aos="fade-up" data-aos-delay="100">EP Multibaggers is designed for those who believe in wealth creation over time, this service identifies hidden gems in the market, stocks with the potential to grow multifold in value.</p>

                    <p class="pFont mb-0 mt-5 fw-semibold fs-6" data-aos="fade-up" data-aos-delay="100">EP Multibaggers Service focused on</p>

                    <div class="d-flex align-items-center mt-3" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-solid fa-circle-check me-2" style="color: #007873;"></i>
                        <p class="small pFont mb-0">Systematic capital allocation</p>
                    </div>
                    <div class="d-flex align-items-center mt-3" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-solid fa-circle-check me-2" style="color: #007873;"></i>
                        <p class="small pFont mb-0">Fundamental consistency</p>
                    </div>
                    <div class="d-flex align-items-center mt-3" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-solid fa-circle-check me-2" style="color: #007873;"></i>
                        <p class="small pFont mb-0">Disciplined exits when growth weakens</p>
                    </div>
                    <div class="d-flex align-items-center mt-3" data-aos="fade-up" data-aos-delay="100">
                        <i class="fa-solid fa-circle-check me-2" style="color: #007873;"></i>
                        <p class="small pFont mb-0">Recommended Holding Period: 3 Years+</p>
                    </div>
                    <button class="btn text-white rounded-0 pFont px-4 py-2 mt-md-5 mt-3 d-inline-flex align-items-center" style="background-color: #02181A;" data-aos="fade-up"
                        data-aos-delay="100" onclick="window.location.href='#';">
                        Get Started
                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </button>
                </div>
                <div class="col-md-6">
                    <img
                        src="<?= $base ?>imgs/services/Strategic.jpg"
                        class="img-fluid w-100"
                        alt="background" data-aos="fade-up"
                        data-aos-delay="100" />
                </div>
            </div>
        </div>
    </div>
</section>


<!-- What You'll Get -->
<section class="research-section">
    <style>
        .research-section {
            position: relative;
            background: #02181A;
            overflow: hidden;
        }

        .research-section::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("<?= $base ?>imgs/services/multibagger8.png") right center no-repeat;
            background-size: cover;
            /* opacity: .45; */
            /* Increase/decrease visibility */
            z-index: 0;
            background-attachment: fixed;
        }

        .research-section>.container {
            position: relative;
            z-index: 1;
        }
    </style>
    <div class="container">
        <div class="px-3 py-5 py-md-0 pt-md-5 border-start border-end border-light">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="text-white">
                        <h2 class="display-5 titleFont fw-semibold d-inline-block"
                            data-aos="fade-up"
                            data-aos-delay="100">
                            What You’ll Get
                        </h2>
                        <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                            data-aos-delay="100">
                            A complete wealth management ecosystem — research, alerts, analytics, and expert support.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 text-end d-none d-md-block">

                    <style>
                        .ep-badge {
                            width: 180px;
                            aspect-ratio: 1 / 1;
                            display: inline-block;
                            overflow: visible;
                        }

                        .outer-ring {
                            position: absolute;
                            inset: 0;
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                            animation: ringRotate 12s linear infinite;
                            transform-origin: center center;
                        }

                        .ep-logo {
                            position: absolute;
                            width: 60%;
                            aspect-ratio: 1;
                            object-fit: contain;
                            left: 50%;
                            top: 50%;
                            transform: translate(-50%, -50%);
                            z-index: 2;
                        }

                        @keyframes ringRotate {
                            from {
                                transform: rotate(0deg);
                            }

                            to {
                                transform: rotate(360deg);
                            }
                        }
                    </style>

                    <div class="ep-badge position-relative">

                        <img
                            src="<?= $base ?>imgs/services/multibagger10.png"
                            class="outer-ring"
                            alt="SEBI Registered Investment Advisor">

                        <img
                            src="<?= $base ?>imgs/services/multibagger1.png"
                            class="ep-logo"
                            alt="EP">

                    </div>

                </div>
            </div>
        </div>
        <div class="border-start border-end border-light">
            <div class="row g-3 align-items-start">
                <div class="col-md-5 text-md-start text-center">
                    <img
                        src="<?= $base ?>imgs/services/multibagger2.jpg"
                        class="img-fluid"
                        alt="background" data-aos="fade-up"
                        data-aos-delay="100" />
                    <button class="btn rounded-0 pFont px-4 py-2 mt-3 mb-md-5 d-inline-flex align-items-center" style="border: 1px solid #00DF9C; color:#00DF9C" data-aos="fade-up"
                        data-aos-delay="100" onclick="window.location.href='#';">
                        Get Started
                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </button>
                </div>
                <div class="col-md-7">
                    <style>
                        /* Remove Bootstrap arrow */
                        /* Remove Bootstrap arrow */
                        .research-accordion .accordion-button::after {
                            filter: brightness(0) invert(1);
                        }

                        /* Remove border & shadow */
                        .research-accordion .accordion-button,
                        .research-accordion .accordion-button:focus {
                            box-shadow: none;
                            border: 0;
                        }

                        /* Default (Closed) */
                        .research-accordion .accordion-item {
                            background: transparent;
                            transition: .3s ease;
                        }

                        .research-accordion .accordion-button {
                            background: transparent;
                            color: #fff;
                        }

                        /* Open State */
                        .research-accordion .accordion-item:has(.accordion-button:not(.collapsed)) {
                            background: #03262A;
                        }

                        .research-accordion .accordion-button:not(.collapsed) {
                            background: transparent !important;
                            color: #fff;
                        }

                        .research-accordion .accordion-body {
                            background: transparent;
                            color: #fff;
                        }
                    </style>
                    <div class="research-accordion">
                        <div class="accordion pe-md-3" id="researchAccordion" data-aos="fade-up"
                            data-aos-delay="100">

                            <!-- 1 -->
                            <div class="accordion-item border-0 mb-3">
                                <h2 class="accordion-header">

                                    <button class="accordion-button bg-transparent text-white shadow-none"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">

                                        <div class="d-flex align-items-center">
                                            <img
                                                src="<?= $base ?>imgs/services/multibagger3.png"
                                                class="img-fluid me-3"
                                                alt="background" />
                                            <div class="flex-grow-1 text-start">
                                                <h2 class="titleFont fw-semibold fs-5">
                                                    1 High Growth Stock per Month
                                                </h2>
                                            </div>
                                        </div>
                                    </button>

                                </h2>

                                <div id="collapseOne"
                                    class="accordion-collapse collapse show"
                                    data-bs-parent="#researchAccordion">

                                    <p class="accordion-body mb-0 text-light pFont">
                                        Discover carefully selected high growth stock every month
                                    </p>

                                </div>

                            </div>

                            <!-- 2 -->
                            <div class="accordion-item border-0 mb-3">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed bg-transparent text-white shadow-none"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">

                                        <div class="d-flex align-items-center">
                                            <img
                                                src="<?= $base ?>imgs/services/multibagger3.png"
                                                class="img-fluid me-3"
                                                alt="background" />
                                            <div class="flex-grow-1 text-start">
                                                <h2 class="titleFont fw-semibold fs-5">
                                                    A Detailed Research Report
                                                </h2>
                                            </div>
                                        </div>

                                    </button>

                                </h2>

                                <div id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#researchAccordion">
                                    <p class="accordion-body mb-0 text-light pFont">
                                        Expert Research Highlighting Key Trends And Opportunities
                                    </p>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="accordion-item border-0 mb-3">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed bg-transparent text-white shadow-none"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">

                                        <div class="d-flex align-items-center">
                                            <img
                                                src="<?= $base ?>imgs/services/multibagger3.png"
                                                class="img-fluid me-3"
                                                alt="background" />
                                            <div class="flex-grow-1 text-start">
                                                <h2 class="titleFont fw-semibold fs-5">
                                                    Timely Entry & Exit Guidance
                                                </h2>
                                            </div>
                                        </div>

                                    </button>

                                </h2>

                                <div id="collapseThree"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#researchAccordion">
                                    <p class="accordion-body mb-0 text-light pFont">
                                        Maximize returns with timely entry and exit strategies
                                    </p>
                                </div>
                            </div>

                            <!-- 4 -->
                            <div class="accordion-item border-0 mb-3">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed bg-transparent text-white shadow-none"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour">

                                        <div class="d-flex align-items-center">
                                            <img
                                                src="<?= $base ?>imgs/services/multibagger3.png"
                                                class="img-fluid me-3"
                                                alt="background" />
                                            <div class="flex-grow-1 text-start">
                                                <h2 class="titleFont fw-semibold fs-5">
                                                    Quarterly Review & Updates
                                                </h2>
                                            </div>
                                        </div>

                                    </button>

                                </h2>

                                <div id="collapseFour"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#researchAccordion">
                                    <p class="accordion-body mb-0 text-light pFont">
                                        Regular quarterly updates to refine strategy and improve performance
                                    </p>
                                </div>
                            </div>

                            <!-- 5 -->
                            <div class="accordion-item border-0 mb-3">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed bg-transparent text-white shadow-none"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive">

                                        <div class="d-flex align-items-center">
                                            <img
                                                src="<?= $base ?>imgs/services/multibagger3.png"
                                                class="img-fluid me-3"
                                                alt="background" />
                                            <div class="flex-grow-1 text-start">
                                                <h2 class="titleFont fw-semibold fs-5">
                                                    Real Time Dashboard
                                                </h2>
                                            </div>
                                        </div>

                                    </button>

                                </h2>

                                <div id="collapseFive"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#researchAccordion">
                                    <p class="accordion-body mb-0 text-light pFont">
                                        Monitor your portfolio performance with live market data
                                    </p>
                                </div>
                            </div>

                            <!-- 6 -->
                            <div class="accordion-item border-0 mb-3">

                                <h2 class="accordion-header">

                                    <button class="accordion-button collapsed bg-transparent text-white shadow-none"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix">

                                        <div class="d-flex align-items-center">
                                            <img
                                                src="<?= $base ?>imgs/services/multibagger3.png"
                                                class="img-fluid me-3"
                                                alt="background" />
                                            <div class="flex-grow-1 text-start">
                                                <h2 class="titleFont fw-semibold fs-5">
                                                    Priority Support
                                                </h2>
                                            </div>
                                        </div>

                                    </button>

                                </h2>

                                <div id="collapseSix"
                                    class="accordion-collapse collapse"
                                    data-bs-parent="#researchAccordion">
                                    <p class="accordion-body mb-0 text-light pFont">
                                        Dedicated support team ensuring faster responses and solutions
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How we identify -->
<section class="">
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3">
                <div class="col-md-7">
                    <h2 class="display-5 titleFont fw-semibold" data-aos="fade-up"
                        data-aos-delay="100">How We Identify Multibagger Opportunities?</h2>
                    <!-- <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                        data-aos-delay="100">Our research team evaluates Multibagger stocks using a structured process that includes fundamental analysis, market conditions and technical analysis.
                    </p> -->
                    <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                        data-aos-delay="100">Finding multibagger stocks is not about excitement. It is about discipline, timing, and patience. We follow a 3 layer selection process.
                    </p>
                    <div class="d-flex mt-4 gap-4 pFont" data-aos="fade-up"
                        data-aos-delay="100">
                        <h2 class="display-5 mb-3 fw-semibold justify-content-end" style="color: #007873;">01.</h2>
                        <div class="flex-column">
                            <h2 class="fs-4 fw-semibold">Sector Analysis & Market Performance</h2>
                            <p class="mb-0 mt-1 small">Strong companies perform best within strong, stable sectors.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4 gap-3 pFont" data-aos="fade-up"
                        data-aos-delay="100">
                        <h2 class="display-5 mb-3 fw-semibold" style="color: #007873;">02.</h2>
                        <div class="flex-column">
                            <h2 class="fs-4 fw-semibold">Business Strength Analysis</h2>
                            <p class="mb-0 mt-1 small">Sustainable earnings growth guides every investment decision.</p>
                        </div>
                    </div>
                    <div class="d-flex mt-4 gap-3 pFont" data-aos="fade-up"
                        data-aos-delay="100">
                        <h2 class="display-5 mb-3 fw-semibold" style="color: #007873;">03.</h2>
                        <div class="flex-column">
                            <h2 class="fs-4 fw-semibold">Finding a Right Time for Entry</h2>
                            <p class="mb-0 mt-1 small">Strong companies weaken when price exceeds value.</p>
                        </div>
                    </div>
                    <button class="btn text-white rounded-0 pFont px-4 py-2 mt-3 d-inline-flex align-items-center" style="background-color: #02181A;" data-aos="fade-up"
                        data-aos-delay="100" onclick="window.location.href='#';">
                        Get Started
                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </button>
                </div>
                <div class="col-md-5">
                    <img
                        src="<?= $base ?>imgs/services/multibagger4.jpg"
                        class="img-fluid"
                        alt="background" data-aos="fade-up"
                        data-aos-delay="100" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get Started -->
<section class="text-white" style="background:#02181A;">
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3 justify-content-center">
                <div class="col-md-12">
                    <div class="text-start text-md-center">
                        <h2 class="display-5 titleFont fw-semibold" data-aos="fade-up"
                            data-aos-delay="100">Get started in 3 simple steps for Wealth Creation</h2>
                        <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                            data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-bottom border-light" style="background:#02181A;">
        <div class="container">
            <div class="border-start border-end border-light" style="background:#02181A;">

                <style>
                    .process-img {
                        transition: transform .5s ease;
                    }

                    .process-overlay {
                        background: linear-gradient(to top, rgba(0, 0, 0, .65), transparent);
                        opacity: 0;
                        transition: opacity .4s ease;
                    }

                    .process-desc,
                    .process-btn {
                        opacity: 0;
                        transform: translateY(20px);
                        transition: all .35s ease;
                    }

                    .process-card:hover .process-img,
                    .process-card.active .process-img {
                        transform: scale(1.08);
                    }

                    .process-card:hover .process-overlay,
                    .process-card.active .process-overlay,
                    .process-card:hover .process-desc,
                    .process-card.active .process-desc,
                    .process-card:hover .process-btn,
                    .process-card.active .process-btn {
                        opacity: 1;
                        transform: translateY(0);
                    }
                </style>
                <div class="row g-3">

                    <!-- Card 1 -->
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">

                        <div class="process-card">

                            <div class="position-relative overflow-hidden">


                                <img
                                    src="<?= $base ?>imgs/services/multibagger5.jpg"
                                    class="img-fluid process-img"
                                    alt="background" data-aos="fade-up"
                                    data-aos-delay="100" />

                                <!-- Hover Content -->
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-3 process-overlay">

                                    <p class="text-white fs-6 process-desc">
                                        To check the capability & willingness to take a risk.
                                    </p>

                                    <a href="#" class="btn rounded-0 process-btn w-25" style="background-color: #00DF9C; color:#02181A">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                            <!-- Bottom Title -->
                            <div class="d-flex align-items-center px-3 py-3 gap-3">
                                <h2 class="fs-2 fw-semibold" style="color: #00DF9C;">01.</h2>
                                <h2 class="fs-2 fw-semibold titleFont">Risk Profiling</h2>
                            </div>

                        </div>

                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4" data-aos="fade-up"
                        data-aos-delay="200">

                        <div class="process-card">

                            <div class="position-relative overflow-hidden">

                                <img
                                    src="<?= $base ?>imgs/services/multibagger6.jpg"
                                    class="img-fluid process-img"
                                    alt="background" data-aos="fade-up"
                                    data-aos-delay="100" />

                                <!-- Hover Content -->
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-3 process-overlay">

                                    <p class="text-white fs-6 process-desc">
                                        Sign an agreement & complete thepayment to begin the journey.
                                    </p>

                                    <a href="#" class="btn rounded-0 process-btn w-25" style="background-color: #00DF9C; color:#02181A">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                            <!-- Bottom Title -->
                            <div class="d-flex align-items-center px-3 py-3 gap-3">
                                <h2 class="fs-2 fw-semibold" style="color: #00DF9C;">02.</h2>
                                <h2 class="fs-2 fw-semibold titleFont">Documentation</h2>
                            </div>

                        </div>

                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4" data-aos="fade-up"
                        data-aos-delay="250">

                        <div class="process-card">

                            <div class="position-relative overflow-hidden">

                                <img
                                    src="<?= $base ?>imgs/services/multibagger7.jpg"
                                    class="img-fluid process-img"
                                    alt="background" data-aos="fade-up"
                                    data-aos-delay="100" />

                                <!-- Hover Content -->
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-3 process-overlay">

                                    <p class="text-white fs-6 process-desc">
                                        Complete the KYC to activateyour service.
                                    </p>

                                    <a href="#" class="btn rounded-0 process-btn w-25" style="background-color: #00DF9C; color:#02181A">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>

                                </div>

                            </div>

                            <!-- Bottom Title -->
                            <div class="d-flex align-items-center px-3 py-3 gap-3">
                                <h2 class="fs-2 fw-semibold" style="color: #00DF9C;">03.</h2>
                                <h2 class="fs-2 fw-semibold titleFont">Service Activation</h2>
                            </div>

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


<!-- what Our Client Say -->
<section>
    <div class="container">
        <div class="py-5 border-top border-bottom border-start border-end border-light">
            <div class="row g-3 align-items-center">
                <div class="col-md-6">
                    <div class="px-3">
                        <h2 class="display-5 titleFont fw-semibold d-inline-block" data-aos="fade-up"
                            data-aos-delay="100">See how we've helped our clients succeed
                        </h2>
                        <div id="reviewCarousel" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel" data-aos="fade-right" data-aos-delay="100">

                            <div class="carousel-inner">

                                <!-- Slide 1 -->
                                <div class="carousel-item active">
                                    <div class="row g-3">

                                        <!-- Card 1 -->
                                        <div class="col-md-6">
                                            <div class="card border h-100 p-4 rounded-0">
                                                <div class="text-warning fs-5 mb-3">
                                                    ★ ★ ★ ★ ☆
                                                </div>

                                                <p class="mb-3 pFont small">
                                                    EP Investors has completely changed the way I invest.
                                                    The recommendations are accurate, and the risk management is solid!
                                                </p>

                                                <div class="d-flex align-items-center mt-auto">
                                                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                        style="width:40px;height:40px;background:#02181A;color:#00DF9C">
                                                        A
                                                    </div>
                                                    <h2 class="fw-semibold mb-0 fs-6 pFont">Amit S</h2>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 2 -->
                                        <div class="col-md-6">
                                            <div class="card border h-100 p-4 rounded-0">
                                                <div class="text-warning fs-5 mb-3">
                                                    ★ ★ ★ ★ ☆
                                                </div>

                                                <p class="mb-3 pFont small">
                                                    Timely alerts and expert analysis make trading effortless.
                                                    Highly recommended for short-term investors!
                                                </p>

                                                <div class="d-flex align-items-center mt-auto">
                                                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                        style="width:40px;height:40px;background:#02181A;color:#00DF9C">
                                                        P
                                                    </div>
                                                    <h2 class="fw-semibold mb-0 fs-6 pFont">Priya M.</h2>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="carousel-item">
                                    <div class="row g-3">

                                        <!-- Card 3 -->
                                        <div class="col-md-6">
                                            <div class="card border h-100 p-4 rounded-0">
                                                <div class="text-warning fs-5 mb-3">
                                                    ★ ★ ★ ★ ☆
                                                </div>

                                                <p class="mb-3 pFont small">
                                                    EP Investors has completely changed the way I invest.
                                                    The recommendations are accurate, and the risk management is solid!
                                                </p>

                                                <div class="d-flex align-items-center mt-auto">
                                                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                        style="width:40px;height:40px;background:#02181A;color:#00DF9C">
                                                        A
                                                    </div>
                                                    <h2 class="fw-semibold mb-0 fs-6 pFont">Amit S</h2>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Card 4 -->
                                        <div class="col-md-6">
                                            <div class="card border h-100 p-4 rounded-0">
                                                <div class="text-warning fs-5 mb-3">
                                                    ★ ★ ★ ★ ☆
                                                </div>

                                                <p class="mb-3 pFont small">
                                                    Consistent profits with minimal effort.
                                                    The 80% accuracy claim is real!
                                                </p>

                                                <div class="d-flex align-items-center mt-auto">
                                                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                                                        style="width:40px;height:40px;background:#02181A;color:#00DF9C">
                                                        R
                                                    </div>
                                                    <h2 class="fw-semibold mb-0 fs-6 pFont">Rahul K.</h2>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <!-- Indicators -->
                            <div class="carousel-indicators position-static mt-4">

                                <button type="button"
                                    data-bs-target="#reviewCarousel"
                                    data-bs-slide-to="0"
                                    class="active"
                                    aria-current="true"
                                    aria-label="Slide 1"></button>

                                <button type="button"
                                    data-bs-target="#reviewCarousel"
                                    data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>

                            </div>

                            <button class="btn text-white rounded-0 mt-md-0 mt-3 pFont px-4 py-2 d-inline-flex align-items-center" style="background-color: #02181A;" onclick="window.location.href='<?= $base ?>pages/contact-us.php';" data-aos="fade-up"
                                data-aos-delay="100">
                                Contact Now
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img
                        src="<?= $base ?>imgs/services/multibagger9.jpg"
                        class="img-fluid w-100"
                        alt="background" data-aos="fade-up"
                        data-aos-delay="100" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Founded -->
<section class="d-none">
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3 py-4">
                <div class="col-md-6">
                    <h3 class="fs-3 pFont fw-semibold" data-aos="fade-up"
                        data-aos-delay="100">Who are we?</h3>
                    <img
                        src="<?= $base ?>imgs/Vector14.svg"
                        class="img-fluid mt-3"
                        alt="background"
                        data-aos="fade-up"
                        data-aos-delay="100" />
                    <div class="d-flex mt-4">
                        <img
                            src="<?= $base ?>imgs/avatars.png"
                            class="img-fluid"
                            alt="background" data-aos="fade-up"
                            data-aos-delay="100" />
                        <div class="flex-column">
                            <p class="mb-0 pFont fw-medium fs-5" data-aos="fade-up"
                                data-aos-delay="100">Chosen by 1M+</p>
                            <p class="pFont fw-medium fs-5" data-aos="fade-up"
                                data-aos-delay="100">Registered Users</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-dark rounded-0 px-4 py-2 mt-3" style="background-color:#02181A">
                        Get Started <i class="fa fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-md-6">
                    <p class="mb-0 small pFont" data-aos="fade-up"
                        data-aos-delay="100">Founded in 2005, EquityPandit has spent 20+ years delivering transparent, disciplined, and personalized investment advice. Today, we serve Retail Investors, HNIs, UHNIs, and Institutions through a trusted community of 10,00,000+ registered users across 33+ countries, powered by 350+ research algorithms and a commitment to responsible advisory practices.</p>
                    <img
                        src="<?= $base ?>imgs/ep.svg"
                        class="img-fluid mt-3"
                        alt="background"
                        data-aos="fade-up"
                        data-aos-delay="100" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section>
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3 py-md-5">
                <div class="col-md-6">
                    <h2 class="display-6 titleFont fw-semibold">Frequently Asked Questions</h2>
                    <p class="fs-6 pFont mb-0 mt-3">Visit our FAQ section for answers to common queries.</p>
                    <img
                        src="<?= $base ?>imgs/Faq.jpg"
                        class="img-fluid mt-3"
                        alt="background">
                </div>
                <div class="col-md-6">
                    <style>
                        .accordion-button,
                        .accordion-button:focus {
                            box-shadow: none;
                            border: 0;
                        }
                    </style>
                    <div class="accordion bg-body accordion-flush rounded-0 overflow-hidden" id="midcapFAQ">
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
<section class="d-none">
    <div class="container">
        <div class="py-5 px-3 border-start border-end border-light">
            <div class="row g-0">
                <div class="col-md-12">
                    <h2 class="display-6 titleFont fw-semibold" data-aos="fade-up"
                        data-aos-delay="100">Put your money to work <br class="d-xl-block d-md-none" />with our research, that suits your style.</h2>
                    <p class="pFont fs-6 mt-3 mb-3" data-aos="fade-up"
                        data-aos-delay="100">Writerap loved from thousands customers worldwide and get trusted from big companies.</p>
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

                    <a href="#" class="btn btn-dark rounded-0 px-4 py-2 mt-3" style="background-color:#02181A">
                        Get Started <i class="fa fa-arrow-right ms-2"></i>
                    </a>
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

<!-- About -->
<section class="d-none">
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <h2 class="display-5 titleFont fw-semibold">About EquityPandit</h2>
                    <p class="fs-5 titleFont pFont">Founded in 2005, EquityPandit operates with a single belief: investment
                        advice should be transparent, disciplined, and personalized.</p>
                    <p class="fw-semibold mb-2 pFont">Over the 20+ years:</p>
                    <ul class="list-unstyled">
                        <li class="d-flex gap-2 mb-2"><i class="fa fa-check-circle text-success mt-1"></i><span>Worked
                                with Retail Investors, HNIs, UHNIs, and Institutions</span></li>
                        <li class="d-flex gap-2 mb-2"><i class="fa fa-check-circle text-success mt-1"></i><span>A
                                community of 10,00,000+ registered users</span></li>
                        <li class="d-flex gap-2 mb-2"><i class="fa fa-check-circle text-success mt-1"></i><span>Clients
                                across 33+ countries</span></li>
                        <li class="d-flex gap-2 mb-0"><i class="fa fa-check-circle text-success mt-1"></i><span>350+
                                Research Algorithms</span></li>
                    </ul>
                    <p class="mb-0 pFont">Trust is built through consistency and responsible advisory practices.</p>
                </div>
                <div class="col-md-6">
                    <img src="<?= $base ?>imgs/business-image.jpg" class="img-fluid w-100" alt="About EquityPandit"
                        loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Need help -->
<section class="text-white d-none" style="background-color: #c20029;">
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light text-center">
            <h2 class="display-6 titleFont fw-semibold">Need any help? We’re here.</h2>
            <p class="fs-5 titleFont mb-4">We are always there for you and will guide you at every step.</p>
            <p class="fs-4 fw-bold mb-0">
                <a href="tel:+918000816688" class="link-light text-decoration-none">8000 816 688</a>
                <span class="mx-2">|</span>
                <a href="mailto:support@equitypandit.com"
                    class="link-light text-decoration-none">support@equitypandit.com</a>
            </p>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        if (window.innerWidth < 768) {

            function makeActive(selector) {

                const elements = document.querySelectorAll(selector);

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
            makeActive(".strength-card");

        }

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            once: true
        });
    });
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>