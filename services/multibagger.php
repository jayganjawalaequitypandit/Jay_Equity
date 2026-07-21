<?php
$pageTitle = 'Multibagger';
$base = '../';
$solidHeader = true;
require __DIR__ . '/../includes/header.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<!-- Hero + lead form -->
<section>
    <div class="container d-none">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-md-7">
                    <p class="text-success fw-semibold text-uppercase mb-2 Pfont">EP - Multibagger</p>
                    <h1 class="display-4 titleFont fw-semibold">Invest early, before the stock opportunity becomes a
                        success story.</h1>
                    <p class="fs-5 titleFont">Mid-term Investing, Proven Results, Real Wealth.</p>
                </div>
                <div class="col-md-4">
                    <div class="p-5 my-md-5 text-light bg-dark">
                        <h2 class="fs-3 titleFont fw-semibold mb-4">Get The Multibagger</h2>
                        <!-- Markup only — wire up a backend / mail handler before going live -->
                        <form action="#" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control rounded-0" name="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control rounded-0" name="email" placeholder="Your Email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control rounded-0" name="mobile" placeholder="Your Mobile"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-success rounded-0 w-100">Get The Multibagger</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Trust strip -->
            <div class="row g-3 mt-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="h-100 p-3 border border-light">
                        <i class="fa fa-shield-halved fs-3 text-success mb-2"></i>
                        <p class="fw-bold mb-0">SEBI Registered Investment Advisor</p>
                        <small class="text-body-secondary">Reg. No.: INA000006688</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h-100 p-3 border border-light">
                        <i class="fa fa-users fs-3 text-success mb-2"></i>
                        <p class="fw-bold mb-0">Your Trusted Partner</p>
                        <small class="text-body-secondary">Chosen by 1M+ Registered Users</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h-100 p-3 border border-light">
                        <i class="fa fa-award fs-3 text-success mb-2"></i>
                        <p class="fw-bold mb-0">Recognized For Excellence</p>
                        <small class="text-body-secondary">11+ National &amp; International Awards</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h-100 p-3 border border-light">
                        <i class="fa fa-calendar-check fs-3 text-success mb-2"></i>
                        <p class="fw-bold mb-0">20+ Years</p>
                        <small class="text-body-secondary">Experience</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
        <div class="container position-absolute start-50 translate-middle-x px-4 py-5 d-none d-md-block"
            style="top:40px;">

            <a href="<?= $base ?>index.php"
                class="text-decoration-none text-white">
                Home
            </a>

            <span class="text-white mx-1">></span>
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
                            <span>></span>
                            <span style="color:#00DF9C">
                                Multibagger
                            </span>
                        </div>
                        <h1 class="display-6 fw-semibold mb-3 titleFont" data-aos="fade-right">
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
                    <div class="col-md-5 d-flex justify-content-center justify-content-md-end mb-0 mb-md-5" data-aos="fade-left"
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

<!-- What You'll Get -->
<section>
    <div class="container">
        <div class="py-5 border-start border-end border-light">

            <!-- Heading -->
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="pb-md-4 px-3 text-start text-md-center">
                        <h2 class="display-5 titleFont fw-semibold d-inline-block" data-aos="fade-up"
                            data-aos-delay="100">
                            What You'll Get
                        </h2>
                        <p class="fs-6 pFont" data-aos="fade-up"
                            data-aos-delay="100">
                            Everything you need to execute trades with precision and confidence.
                        </p>
                    </div>
                </div>

                <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto hide-scrollbar">

                    <!-- Card 1 -->
                    <div class="col-md-4 col-10 flex-shrink-0"
                        data-aos="fade-right"
                        data-aos-delay="200">
                        <div class="h-100 p-3 border border-light">
                            <img src="<?= $base ?>imgs/Vector4.svg" class="mb-3" alt="">
                            <h3 class="fs-3 titleFont fw-semibold">
                                1 High Growth Stock Per Month
                            </h3>
                            <p class="mb-0 pFont">
                                Discover carefully selected high growth stock every month.
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4 col-10 flex-shrink-0"
                        data-aos="fade-right"
                        data-aos-delay="200">
                        <div class="h-100 p-3 border border-light">
                            <img src="<?= $base ?>imgs/Vector5.svg" class="mb-3" alt="">
                            <h3 class="fs-3 titleFont fw-semibold">
                                A Detailed Research Report
                            </h3>
                            <p class="mb-0 pFont">
                                Expert research highlighting key trends and opportunities.
                            </p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4 col-10 flex-shrink-0"
                        data-aos="fade-right"
                        data-aos-delay="200">
                        <div class="h-100 p-3 border border-light">
                            <img src="<?= $base ?>imgs/Vector5.svg" class="mb-3" alt="">
                            <h3 class="fs-3 titleFont fw-semibold">
                                Timely Entry & Exit Guidance
                            </h3>
                            <p class="mb-0 pFont">
                                Maximize returns with timely entry and exit strategies.
                            </p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-4 col-10 flex-shrink-0"
                        data-aos="fade-right"
                        data-aos-delay="200">
                        <div class="h-100 p-3 border border-light">
                            <img src="<?= $base ?>imgs/Vector4.svg" class="mb-3" alt="">
                            <h3 class="fs-3 titleFont fw-semibold">
                                Quarterly Review & Updates
                            </h3>
                            <p class="mb-0 pFont">
                                Regular quarterly updates to refine strategy and improve performance.
                            </p>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-md-4 col-10 flex-shrink-0"
                        data-aos="fade-right"
                        data-aos-delay="200">
                        <div class="h-100 p-3 border border-light">
                            <img src="<?= $base ?>imgs/Vector5.svg" class="mb-3" alt="">
                            <h3 class="fs-3 titleFont fw-semibold">
                                Real Time <br> Dashboard
                            </h3>
                            <p class="mb-0 pFont">
                                Monitor your portfolio performance with live market data.
                            </p>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-md-4 col-10 flex-shrink-0"
                        data-aos="fade-right"
                        data-aos-delay="200">
                        <div class="h-100 p-3 border border-light">
                            <img src="<?= $base ?>imgs/Vector5.svg" class="mb-3" alt="">
                            <h3 class="fs-3 titleFont fw-semibold">
                                Priority <br> Support
                            </h3>
                            <p class="mb-0 pFont">
                                Dedicated support team ensuring faster responses and solutions.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Button -->
            <div class="text-start px-3 mt-5" data-aos="fade-up"
                data-aos-delay="100">
                <a href="#" class="btn rounded-0 px-4 text-white py-2 " style="background-color:#02181A">
                    Get Started <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Who Should Avail-->
<section>
    <div class="container">

        <div class="border border-light border-bottom">
            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-md-6 order-2 order-md-1">
                    <div class="p-3">

                        <h2 class="display-6 titleFont fw-semibold mb-4" data-aos="fade-up"
                            data-aos-delay="100">
                            Who Should Avail?
                        </h2>

                        <p class="mb-4 PFont" data-aos="fade-up"
                            data-aos-delay="100">
                            Whether You're Starting Your Journey Or Advancing Your <br>
                            Career, Explore The Right Opportunities To Grow And <br>
                            Succeed.
                        </p>

                        <ul class="list-unstyled mb-4" data-aos="fade-right"
                            data-aos-delay="100">

                            <li class="border-start border-2 border-dark ps-3 mb-3">
                                Active Investor, Business Professionals,
                                Salaried / <br> Retired Person
                            </li>

                            <li class="border-start border-2 border-dark ps-3 mb-3">
                                Who Can Invest Min. ₹25,000 Or More <br> Per Stock
                            </li>

                            <li class="border-start border-2 border-dark ps-3 mb-3">
                                Who Can Look For Mid To Long Term <br> Investment
                            </li>

                            <li class="border-start border-2 border-dark ps-3">
                                Who Can Invest Regularly
                            </li>

                        </ul>

                        <a href="#" class="btn btn-dark rounded-0 px-4 py-2 mt-3" style="background-color:#02181A">
                            Get Started <i class="fa fa-arrow-right ms-2"></i>
                        </a>

                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-md-6 order-1 order-md-2">
                    <img src="<?= $base ?>imgs/services/Avail.jpg"
                        class="img-fluid w-100 mt-5 mb-1 mb-md-5 pt-3 pb-0 pb-md-3"
                        alt="Who Should Avail">
                </div>

            </div>

            <div class="text-end">
                <img src="<?= $base ?>imgs/Polygon5.svg" alt="">
            </div>
        </div>

    </div>
</section>

<!-- How we identify -->
<section>
    <div class="container">
        <div class="position-relative">
            <div class="px-3 py-5 border-start border-end border-light">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-10">
                        <div class="text-start text-md-center">
                            <h2 class="display-6 titleFont fw-semibold" data-aos="fade-up"
                                data-aos-delay="100">How We Identify Multibagger Opportunities?</h2>
                            <p class="fs-6 pFont mb-0" data-aos="fade-up"
                                data-aos-delay="100">Our research team evaluates Multibagger stocks using a structured process that <br class="d-none d-md-block"> includes fundamental analysis, market conditions and technical analysis.</p>
                        </div>
                    </div>
                </div>
                <img
                    src="<?= $base ?>imgs/Polygon1.svg"
                    class="position-absolute top-0 end-0"
                    alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <style>
            .image-wrapper {
                overflow: hidden;
            }

            .image-group {
                display: flex;
                align-items: center;
            }

            .main-img {
                width: 80px;
                height: 80px;
                object-fit: cover;
                flex-shrink: 0;
            }

            .extra-img {
                width: 0;
                height: 80px;
                opacity: 0;
                margin-left: 0;
                object-fit: cover;
                overflow: hidden;
                transition: all .4s ease;
                flex-shrink: 0;
            }

            .strength-card:hover .extra-img,
            .strength-card.active .extra-img {
                width: 80px;
                opacity: 1;
                margin-left: 0;
            }
        </style>
        <div class="border border-start border-end border-light">
            <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto">
                <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right"
                    data-aos-delay="100">
                    <div class="strength-card h-100 p-3 border border-light" style="cursor: pointer;">

                        <div class="image-wrapper">

                            <div class="image-group">

                                <!-- Always Visible -->
                                <img
                                    src="<?= $base ?>imgs/Vector8.svg"
                                    class="main-img img-fluid"
                                    alt="">

                                <!-- Show on Hover -->
                                <img
                                    src="<?= $base ?>imgs/Portfolio3.jpg"
                                    class="extra-img img-fluid"
                                    alt="">

                                <img
                                    src="<?= $base ?>imgs/Portfolio4.jpg"
                                    class="extra-img img-fluid"
                                    alt="">
                            </div>
                        </div>

                        <h2 class="fs-4 titleFont fw-semibold mt-5">
                            Business Strength
                        </h2>

                        <ul class="Pfont mt-3 d-flex flex-column gap-1">
                            <li>Consistent sales and profit growth.</li>
                            <li>Strong operating cash flows.</li>
                            <li>Controlled and manageable debt.</li>
                            <li>Promoters with long-term vision.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right"
                    data-aos-delay="100">
                    <div class="strength-card h-100 p-3 border border-light" style="cursor: pointer;">

                        <div class="image-wrapper">

                            <div class="image-group">

                                <!-- Always Visible -->
                                <img
                                    src="<?= $base ?>imgs/Vector9.svg"
                                    class="main-img img-fluid"
                                    alt="">

                                <!-- Show on Hover -->
                                <img
                                    src="<?= $base ?>imgs/Portfolio5.jpg"
                                    class="extra-img img-fluid"
                                    alt="">

                                <img
                                    src="<?= $base ?>imgs/Portfolio6.jpg"
                                    class="extra-img img-fluid"
                                    alt="">
                            </div>
                        </div>

                        <h2 class="fs-4 titleFont fw-semibold mt-5">
                            Sector & Market Position
                        </h2>

                        <ul class="Pfont mt-3 d-flex flex-column gap-1">
                            <li>Sector growth cycles.</li>
                            <li>Capital flow trends.</li>
                            <li>Controlled and manageable debt.</li>
                            <li>Promoters with long-term vision.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right"
                    data-aos-delay="100">
                    <div class="strength-card h-100 p-3 border border-light" style="cursor: pointer;">

                        <div class="image-wrapper">

                            <div class="image-group">

                                <!-- Always Visible -->
                                <img
                                    src="<?= $base ?>imgs/Vector10.svg"
                                    class="main-img img-fluid"
                                    alt="">

                                <!-- Show on Hover -->
                                <img
                                    src="<?= $base ?>imgs/Portfolio7.jpg"
                                    class="extra-img img-fluid"
                                    alt="">

                                <img
                                    src="<?= $base ?>imgs/Portfolio8.jpg"
                                    class="extra-img img-fluid"
                                    alt="">
                            </div>
                        </div>

                        <h2 class="fs-4 titleFont fw-semibold mt-5">
                            Right Timing
                        </h2>

                        <ul class="Pfont mt-3 d-flex flex-column gap-1">
                            <li>Strong institutional funds flow.</li>
                            <li>Identify accumulation zones.</li>
                            <li>Confirm trend strength.</li>
                            <li>Volume analysis to control risk.</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="text-start px-3 py-5" data-aos="fade-right"
                data-aos-delay="100">
                <a href="#" class="btn btn-dark rounded-0 px-4 py-2 " style="background-color:#02181A">
                    Get Started <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Get Started -->
<section class="text-white" style="background:#02181A;">
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3 justify-content-center">
                <div class="col-md-10">
                    <div class="text-start text-md-center">
                        <h2 class="display-6 titleFont fw-semibold" data-aos="fade-up"
                            data-aos-delay="100">Get started in 3 simple steps for Wealth Creation</h2>
                        <p class="fs-6 pFont mb-0" data-aos="fade-up"
                            data-aos-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
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
                <div class="col-md-4" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="process-card h-100 position-relative overflow-hidden bg-white" style=" cursor:pointer;">

                        <span class="position-absolute ms-3 top-0 start-0 text-white fs-1 fw-light z-3">
                            1
                        </span>

                        <img
                            src="<?= $base ?>imgs/risk1.jpg"
                            class="process-img h-100 w-100 object-fit-cover"
                            alt="">

                        <div class="process-content position-absolute bottom-0 start-0 w-100 bg-white p-3 text-black">

                            <img src="<?= $base ?>imgs/Vector11.svg" alt="">
                            <h2 class="fw-semibold mt-2 titleFont">
                                Risk Profiling
                            </h2>

                            <p class="process-desc PFont mt-3 mb-0">
                                To check the capability & willingness to take a risk.
                            </p>

                        </div>

                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="process-card h-100 position-relative overflow-hidden bg-white" style=" cursor:pointer;">

                        <span class="position-absolute ms-3 top-0 start-0 text-white fs-1 fw-light z-3">
                            2
                        </span>

                        <img
                            src="<?= $base ?>imgs/risk2.jpg"
                            class="process-img h-100 w-100 object-fit-cover"
                            alt="">

                        <div class="process-content position-absolute bottom-0 start-0 w-100 bg-white p-3 text-black">

                            <img src="<?= $base ?>imgs/Vector12.svg" alt="">

                            <h2 class="fw-semibold titleFont mt-2">
                                Documentation
                            </h2>

                            <p class="process-desc PFont mt-3 mb-0">
                                Sign an agreement & complete thepayment to begin the journey.
                            </p>

                        </div>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="process-card h-100 position-relative overflow-hidden bg-white" style=" cursor:pointer;">

                        <span class="position-absolute ms-3 top-0 start-0 text-white fs-1 fw-light z-3">
                            3
                        </span>

                        <img
                            src="<?= $base ?>imgs/risk3.jpg"
                            class="process-img h-100 w-100 object-fit-cover"
                            alt="">

                        <div class="process-content position-absolute bottom-0 start-0 w-100 bg-white p-3 text-black">

                            <img src="<?= $base ?>imgs/Vector13.svg" alt="">

                            <h2 class="fw-semibold titleFont mt-2">
                                Service Activation
                            </h2>

                            <p class="process-desc PFont mt-3 mb-0">
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
                            src="<?= $base ?>imgs/avatars.jpg"
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
<section data-aos="fade-up">
    <div class="container">
        <div class="px-3 py-5 border border-start border-end border-light">
            <div class="row g-3 py-md-5">
                <div class="col-md-6">
                    <h2 class="display-6 titleFont fw-semibold d-inline-block" data-aos="fade-up"
                        data-aos-delay="100">Frequently Asked Questions</h2>
                    <p class="fs-6 pFont mb-3" data-aos="fade-up"
                        data-aos-delay="100">Visit our FAQ section for answers to common queries.</p>
                    <img
                        src="<?= $base ?>imgs/Faq.jpg"
                        class="img-fluid"
                        alt="background"
                        data-aos="fade-up"
                        data-aos-delay="100">
                </div>
                <div class="col-md-6">
                    <div class="accordion accordion-flush rounded-0 overflow-hidden" id="midcapFAQ" data-aos="fade-up"
                        data-aos-delay="100">
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