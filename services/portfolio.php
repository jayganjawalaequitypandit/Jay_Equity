<?php
$pageTitle   = 'Portfolio';
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
    <section class="position-relative d-none">
        <style>
            /* Desktop */
            .portfolio-card {
                margin-top: -120px;
            }

            /* Tablet */
            @media (max-width: 991.98px) {
                .portfolio-card {
                    margin-top: -80px;
                }
            }

            /* Mobile */
            @media (max-width: 767.98px) {
                .portfolio-card {
                    margin-top: -40px;
                }
            }


            .portfolio-banner {
                width: 100%;
                height: 420px;
                object-fit: cover;
                object-position: center;
                display: block;
            }

            /* Tablet */
            @media (max-width:991.98px) {
                .portfolio-banner {
                    height: 350px;
                }
            }

            /* Mobile */
            @media (max-width:767.98px) {
                .portfolio-banner {
                    height: 260px;
                    object-fit: cover;
                    object-position: center;
                }

                .portfolio-card {
                    margin-top: -60px;
                }
            }
        </style>

        <!-- Full Width Image -->
        <div class="container-fluid p-0 position-relative">
            <img
                src="<?= $base ?>imgs/services/portfolio_bg.jpg"
                class="portfolio-banner"
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
                    <a href="" class="text-decoration-none text-white">Portfolio</a>
                </div>
            </div>

        </div>

        <!-- Content Box -->
        <div class="container position-relative portfolio-card">
            <div class="border-start border-end border-light">
                <div class="text-white p-3 p-md-5" style="background-color:#02181A;">

                    <div class="row">
                        <div class="col-md-10">
                            <div class="d-md-none mb-3"><a class="text-decoration-none text-white" href="<?= $base ?>index.php">Home</a> <span>></span> <a class="text-decoration-none text-white" href="">Poftfolio</a></div>
                            <h1 class="display-5 fw-semibold mb-3 titleFont">
                                Perfect Portfolio for 2026 & Beyond
                            </h1>

                            <p class="text-white-50 mb-3 pFont">
                                A carefully curated selection of high-potential stocks across sectors, designed to reduce risk & maximize growth opportunities in 2026.
                            </p>
                        </div>
                    </div>

                    <div class="row text-center text-md-start">

                        <div class="col-md-2 col-4">
                            <h2 class="fw-semibold display-6 mb-2">21+</h2>
                            <p class="mb-0 small">Years Experience</p>
                        </div>

                        <div class="col-md-2 col-4">
                            <h2 class="fw-semibold display-6 mb-2">1M+</h2>
                            <p class="mb-0 small">Registered Users</p>
                        </div>

                        <div class="col-md-3 col-4">
                            <h2 class="fw-semibold display-6 mb-2">350+</h2>
                            <p class="mb-0 small">Research Algorithms</p>
                        </div>
                        <!-- Button -->
                        <div class="col-md-5 text-md-end my-4 text-start">
                            <a href="#" class="btn btn-light px-4 py-2 rounded-0">
                                Explore Benefits →
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Intro -->
    <section class="position-relative">
        <style>
            /* Desktop */
            .portfolio-card {
                margin-top: -120px;
            }

            .form-card {
                margin-top: -180px;
            }

            /* Tablet */
            @media (max-width: 991.98px) {
                .portfolio-card {
                    margin-top: -80px;
                }
            }

            /* Mobile */
            @media (max-width: 767.98px) {
                .portfolio-card {
                    margin-top: -40px;
                }
            }


            .portfolio-banner {
                width: 100%;
                height: auto;
                /* 420px */
                object-fit: cover;
                object-position: center;
                display: block;
            }

            /* Tablet */
            @media (max-width:991.98px) {
                .portfolio-banner {
                    height: 350px;
                }
            }

            /* Mobile */
            @media (max-width:767.98px) {
                .portfolio-banner {
                    height: 260px;
                    object-fit: cover;
                    object-position: center;
                }

                .portfolio-card {
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
                src="<?= $base ?>imgs/services/portfolio_bg.jpg"
                class="portfolio-banner"
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
                    <a href="" class="text-decoration-none" style="color:#00DF9C">Portfolio</a>
                </div>
            </div>
        </div>

        <!-- Content Box -->
        <div class="container position-relative portfolio-card">
            <div class="border-start border-end border-light">
                <div class="text-white p-3 p-md-4" style="background-color:#02181A;">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="d-md-none mb-3">
                                <a class="text-decoration-none text-white" href="<?= $base ?>index.php">Home</a> <span>></span> <a class="text-decoration-none" style="color:#00DF9C" href="">Poftfolio</a>
                            </div>
                            <h1 class="display-5 fw-semibold mb-3 titleFont" data-aos="fade-right">
                                Perfect Portfolio for 2026 & Beyond
                            </h1>

                            <p class="text-white-50 mb-3 pFont" data-aos="fade-right"
                                data-aos-delay="100">
                                Selected stocks from high growth sectors.
                            </p>

                            <!-- Button -->
                            <button class="btn btn-light rounded-0 mt-md-0 mt-3 pFont px-4 py-2 d-inline-flex align-items-center" data-aos="fade-up"
                                data-aos-delay="100">
                                Explore Benefits
                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                            </button>
                            <p class="mb-0 mt-3 pFont" data-aos="fade-up"
                                data-aos-delay="100">Minimum Investment: <span style="color: #00DF9C;">₹2 Lacs</span>
                            </p>
                        </div>

                        <!-- RIGHT SIDE -->
                        <div class="col-md-5 d-flex justify-content-center justify-content-md-end mb-0 mb-md-5">

                            <!-- Form Box -->
                            <div class="bg-body text-body p-3 form-card" data-aos="fade-left"
                                data-aos-delay="150">
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

    <!-- Stratagic -->
    <section>
        <div class="container">
            <div class="py-5 border-start border-end border-bottom border-light">
                <div class="row g-0 align-items-center">
                    <div class="col-md-6 px-3">
                        <h2 class="display-5 titleFont fw-semibold" data-aos="fade-up"
                            data-aos-delay="100">Strategic Construct</h2>
                        <p class="mb-0 pFont fs-6 mt-3" data-aos="fade-up" data-aos-delay="100">A complete wealth management ecosystem — research, alerts, analytics, and expert support.</p>

                        <ul class="Pfont mt-3 mb-0 d-flex flex-column gap-2">
                            <li data-aos="fade-up" data-aos-delay="100">Recommended investment horizon: <b>3+ years.</b></li>
                            <li data-aos="fade-up" data-aos-delay="100">Market cap mix: <b>16%</b> Large Cap, <b>42%</b> Mid Cap, <b>41%</b> Small Cap.</li>
                            <li data-aos="fade-up" data-aos-delay="100">Portfolio includes <b>18+</b> curated equity stocks.</li>
                            <li data-aos="fade-up" data-aos-delay="100">Designed for <b>long-term</b> wealth creation.</li>
                            <li data-aos="fade-up" data-aos-delay="100">Maximum <b>10%</b> allocation per stock.</li>
                            <li data-aos="fade-up" data-aos-delay="100">Maximum <b>35%</b> allocation per sector.</li>
                        </ul>

                        <!-- <div class="card p-2 rounded-0 mt-4 border-0 border-start border-1" style="--bs-border-color:#02181A;">
                            <h2 class="fs-6 pFont fw-semibold">Investment Horizon</h2>
                            <p class="small pFont mb-0">Recommended Holding Period: 3 Years+</p>
                        </div>
                        <div class="card p-2 rounded-0 mt-2 border-0 border-start border-1" style="--bs-border-color:#02181A;">
                            <h2 class="fs-6 pFont fw-semibold">Market Cap Mix</h2>
                            <p class="small pFont mb-0">16% Large Cap | 42% Mid Cap | 41% Small Cap</p>
                        </div>
                        <div class="card p-2 rounded-0 mt-2 border-0 border-start border-1" style="--bs-border-color:#02181A;">
                            <h2 class="fs-6 pFont fw-semibold">Stock Universe</h2>
                            <p class="small pFont mb-0">18+ Curated Equity Picks</p>
                        </div>
                        <div class="card p-2 rounded-0 mt-2 border-0 border-start border-1" style="--bs-border-color:#02181A;">
                            <h2 class="fs-6 pFont fw-semibold">Ideal For</h2>
                            <p class="small pFont mb-0">Investors focused on building wealth over the long term.</p>
                        </div>
                        <div class="card p-2 rounded-0 mt-2 border-0 border-start border-1" style="--bs-border-color:#02181A;">
                            <h2 class="fs-6 pFont fw-semibold">Stock Allocation Limit</h2>
                            <p class="small pFont mb-0">Up to 10% exposure per stock on initial allocation.</p>
                        </div>
                        <div class="card p-2 rounded-0 mt-2 border-0 border-start border-1" style="--bs-border-color:#02181A;">
                            <h2 class="fs-6 pFont fw-semibold">Sector Exposure Limit</h2>
                            <p class="small pFont mb-0">Up to 35% portfolio allocation per sector.</p>
                        </div> -->
                        <button class="btn btn-dark rounded-0 pFont px-4 py-2 mt-3 d-inline-flex align-items-center" style="background-color: #02181A;" data-aos="fade-up"
                            data-aos-delay="100" onclick="window.location.href='#';">
                            Get Started
                            <i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </button>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
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

    <!-- What you get -->
    <section>
        <div class="container">
            <div class="pt-5 border-bottom border-start border-end border-light">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="pb-md-4 px-3 text-start text-md-center">
                            <h2 class="display-5 titleFont fw-semibold d-inline-block"
                                data-aos="fade-up"
                                data-aos-delay="100">
                                What You'll Get
                            </h2>
                            <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                                data-aos-delay="250">A complete wealth management ecosystem — research, alerts, analytics, and expert support.</p>
                        </div>
                    </div>

                    <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto mt-3">

                        <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
                            <div class="h-100 p-3 border border-light">
                                <img src="<?= $base ?>imgs/Vector4.svg" class="mb-3" alt="">
                                <h2 class="fs-3 titleFont fw-semibold">A Detailed Research Report</h2>
                                <p class="mb-0 pFont">
                                    Expert research highlighting key trends and opportunities
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
                            <div class="h-100 p-3 border border-light">
                                <img src="<?= $base ?>imgs/Vector5.svg" class="mb-3" alt="">
                                <h2 class="fs-3 titleFont fw-semibold">Timely Entry & Exit Guidance</h2>
                                <p class="mb-0 pFont">
                                    Maximize returns with timely entry and exit strategies
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
                            <div class="h-100 p-3 border border-light">
                                <img src="<?= $base ?>imgs/Vector6.svg" class="mb-3" alt="">
                                <h2 class="fs-3 titleFont fw-semibold">Quarterly Review & Updates</h2>
                                <p class="mb-0 pFont">
                                    Regular quarterly updates to refine strategy and improve performance
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
                            <div class="h-100 p-3 border border-light">
                                <img src="<?= $base ?>imgs/Vector5.svg" class="mb-3" alt="">
                                <h2 class="fs-3 titleFont fw-semibold">Real Time <br />Dashboard</h2>
                                <p class="mb-0 pFont">
                                    Monitor your portfolio performance with live market data
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
                            <div class="h-100 p-3 border border-light">
                                <img src="<?= $base ?>imgs/Vector6.svg" class="mb-3" alt="">
                                <h2 class="fs-3 titleFont fw-semibold">Priority <br />Support</h2>
                                <p class="mb-0 pFont">
                                    Dedicated support team ensuring faster responses and solutions
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-11 flex-shrink-0 d-md-block d-none" data-aos="fade-right" data-aos-delay="100">
                            <img
                                src="<?= $base ?>imgs/services/portfolio1.jpg"
                                class="img-fluid mt-3 mt-md-0 w-100"
                                style="cursor:pointer;"
                                alt="background" onclick="window.location.href='#';" />
                        </div>
                    </div>
                    <div class="text-start px-3 mt-5 d-none" data-aos="fade-up"
                        data-aos-delay="100">
                        <button class="btn text-white rounded-0 px-4 py-2 pFont" style="background-color: #02181A;" onclick="window.location.href='#';">
                            Get Started<i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How will provide our service -->
    <section>
        <div class="container">
            <div class="px-3 py-5 border-start border-end border-light">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="text-start text-md-center">
                            <h2 class="display-5 titleFont fw-semibold d-inline-block"
                                data-aos="fade-up"
                                data-aos-delay="100">
                                How Will Provide our services
                            </h2>
                            <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                                data-aos-delay="100">A complete wealth management ecosystem — research, alerts, analytics, and expert support.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5 py-md-0 border-start border-end border-top border-light">
                <div class="row g-0 align-items-center">
                    <div class="col-md-6 px-3">
                        <div class="d-flex">
                            <img
                                src="<?= $base ?>imgs/services/portfolio1.svg"
                                class="img-fluid"
                                alt="background" data-aos="fade-up"
                                data-aos-delay="100" />
                            <div class="flex-column gap-1 ms-3">
                                <h2 class="fs-5 fw-semibold titleFont" data-aos="fade-up"
                                    data-aos-delay="100">Short-Term Stock Recommendations</h2>
                                <p class="small mb-0 pFont" data-aos="fade-up"
                                    data-aos-delay="100">
                                    Carefully selected stocks with a 15-20 day holding period.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <img
                                src="<?= $base ?>imgs/services/portfolio2.svg"
                                class="img-fluid"
                                alt="background" data-aos="fade-up"
                                data-aos-delay="100" />
                            <div class="flex-column gap-1 ms-3">
                                <h2 class="fs-5 fw-semibold titleFont" data-aos="fade-up"
                                    data-aos-delay="100">Clear Entry, Target & Stop-Loss</h2>
                                <p class="small mb-0 pFont" data-aos="fade-up"
                                    data-aos-delay="100">
                                    No guesswork, every position carries a clear 10% target stop-loss.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <img
                                src="<?= $base ?>imgs/services/portfolio3.svg"
                                class="img-fluid"
                                alt="background" data-aos="fade-up"
                                data-aos-delay="100" />
                            <div class="flex-column gap-1 ms-3">
                                <h2 class="fs-5 fw-semibold titleFont" data-aos="fade-up"
                                    data-aos-delay="100">Expert Analysis</h2>
                                <p class="small mb-0 pFont" data-aos="fade-up"
                                    data-aos-delay="100">
                                    Where price trends meet solid business fundamentals.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <img
                                src="<?= $base ?>imgs/services/portfolio4.svg"
                                class="img-fluid"
                                alt="background" data-aos="fade-up"
                                data-aos-delay="100" />
                            <div class="flex-column gap-1 ms-3">
                                <h2 class="fs-5 fw-semibold titleFont" data-aos="fade-up"
                                    data-aos-delay="100">Timely Alert</h2>
                                <p class="small mb-0 pFont" data-aos="fade-up"
                                    data-aos-delay="100">
                                    Smart stock picks designed to help you stay ahead of the market.
                                </p>
                            </div>
                        </div>

                        <button class="btn text-white rounded-0 px-4 py-2 pFont mt-4" style="background-color: #02181A;" onclick="window.location.href='#';" data-aos="fade-up"
                            data-aos-delay="100">
                            Get Started<i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </button>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <img
                            src="<?= $base ?>imgs/services/portfolio2.jpg"
                            class="img-fluid w-100"
                            alt="background" data-aos="fade-up"
                            data-aos-delay="100" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="d-none">
        <div class="container">
            <div class="px-3 py-5 border-start border-end border-light">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="pb-md-5 text-start text-md-center">
                            <h2 class="display-5 titleFont fw-semibold d-inline-block">How it works</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-3 align-items-start mb-4">
                            <span class="fs-3 fw-bold titleFont text-success">1.</span>
                            <div>
                                <h2 class="fs-5 titleFont fw-semibold mb-1">Share your goals</h2>
                                <p class="mb-0">Tell us your investment horizon and risk appetite.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 align-items-start mb-4">
                            <span class="fs-3 fw-bold titleFont text-success">2.</span>
                            <div>
                                <h2 class="fs-5 titleFont fw-semibold mb-1">Receive your portfolio</h2>
                                <p class="mb-0">Get a research-backed list with clear allocation guidance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex gap-3 align-items-start mb-4">
                            <span class="fs-3 fw-bold titleFont text-success">3.</span>
                            <div>
                                <h2 class="fs-5 titleFont fw-semibold mb-1">Track &amp; rebalance</h2>
                                <p class="mb-0">Monitor performance and act on periodic rebalancing updates.</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3 align-items-start mb-4">
                            <span class="fs-3 fw-bold titleFont text-success">4.</span>
                            <div>
                                <h2 class="fs-5 titleFont fw-semibold mb-1">Stay supported</h2>
                                <p class="mb-0">Reach our team whenever you need guidance along the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Focused On Sustainable Wealth Creation. -->
    <section class="text-white" style="background:#02181A;">
        <style>
            .hide-scrollbar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .hide-scrollbar::-webkit-scrollbar {
                display: none;
            }

            .sticky-section {
                height: 100vh;
            }

            @media (max-width: 991.98px) {
                .sticky-section {
                    height: auto;
                }
            }
        </style>
        <div class="container">

            <div class="row g-0 border border-light">

                <!-- LEFT SIDE -->
                <div class="col-md-4 border-end border-light">

                    <div class="position-sticky top-0 p-3 sticky-section">

                        <h2 class="display-6 fw-semibold titleFont" data-aos="fade-up"
                            data-aos-delay="100">
                            Focused On Sustainable Wealth Creation.
                        </h2>

                        <p class="small fs-6 mt-3" data-aos="fade-up"
                            data-aos-delay="100">
                            Rigorous Screening, Smart Entries, And Active Monitoring
                            Deliver Long-Term Portfolio Growth.
                        </p>
                        <img
                            src="<?= $base ?>imgs/Portfolio2.svg"
                            class="img-fluid"
                            alt="background" data-aos="fade-up"
                            data-aos-delay="100">

                        <a href="#"
                            class="btn btn-light rounded-0 mt-5 px-4 py-2 pFont" data-aos="fade-up"
                            data-aos-delay="100">
                            Get Started <i class="fa-solid fa-arrow-right-long ms-2"></i>
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
                        <section id="stocks" class="p-3 border-bottom border-light">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="fs-4 fw-semibold titleFont" data-aos="fade-up"
                                        data-aos-delay="100">18 Stocks For A Strong 2026</h2>
                                    <p class="fs-6 pFont" data-aos="fade-up"
                                        data-aos-delay="100">
                                        A thoughtfully selected basket of high-potential
                                        stocks across emerging and stable sectors.
                                    </p>
                                </div>
                                <div class="col-md-2 text-end" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <button class="btn btn-outline-light border-secondary rounded-0">
                                        →
                                    </button>
                                </div>
                            </div>
                            <div class="row g-1 mt-3">
                                <div class="col-md-12">
                                    <p class="fs-6 fw-semibold pFont" data-aos="fade-up"
                                        data-aos-delay="100">What You Get</p>
                                </div>
                                <div class="col-md-6">
                                    <ul class="small" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <li>Balanced allocation across Large, Mid & Small Cap</li>
                                        <li>Risk-managed structure to protect downside</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="small" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <li>Exposure to high-growth sectors like Pharma, Finance, Manufacturing, Infra & Tech</li>
                                        <li>Long-term wealth creation strategy (not speculation)</li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        <!-- Section 2 -->
                        <section id="rebalance" class="p-3 border-bottom border-light">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="fs-4 titleFont fw-semibold" data-aos="fade-up"
                                        data-aos-delay="100">Quarterly Rebalancing</h2>
                                    <p class="fs-6 pFont" data-aos="fade-up"
                                        data-aos-delay="100">
                                        Markets change. Your portfolio should too. We continuously monitor economic trends, sector movements, and company performance to keep your portfolio optimized.
                                    </p>
                                </div>
                                <div class="col-md-2 text-end" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <button class="btn btn-outline-light border-secondary rounded-0">
                                        →
                                    </button>
                                </div>
                            </div>
                            <div class="row g-1 mt-3">
                                <div class="col-md-12">
                                    <p class="fs-6 pFont fw-semibold" data-aos="fade-up"
                                        data-aos-delay="100">Our Process</p>
                                </div>
                                <div class="col-md-6">
                                    <ul class="small" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <li>Ongoing performance tracking</li>
                                        <li>Adding new high-potential opportunities</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="small" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <li>Removing underperforming stocks</li>
                                        <li>Rebalancing allocation for optimal returns</li>
                                    </ul>
                                </div>
                            </div>

                        </section>

                        <!-- Section 3 -->
                        <section id="timing" class="p-3">

                            <div class="row">
                                <div class="col-md-10">
                                    <h2 class="fs-4 titleFont fw-semibold" data-aos="fade-up"
                                        data-aos-delay="100">Timely Entry & Exit Guidance</h2>
                                    <p class="fs-6 pFont" data-aos="fade-up"
                                        data-aos-delay="100">
                                        Don’t just buy stocks — buy them at the right time. We provide clear, actionable updates so you know exactly what to do. Structured alerts. No confusion. No noise.
                                    </p>
                                </div>
                                <div class="col-md-2 text-end" data-aos="fade-up"
                                    data-aos-delay="100">
                                    <button class="btn btn-outline-light border-secondary rounded-0">
                                        →
                                    </button>
                                </div>
                            </div>
                            <div class="row g-1 mt-3">
                                <div class="col-md-12">
                                    <p class="fs-6 pFont fw-semibold" data-aos="fade-up"
                                        data-aos-delay="100">What You Get</p>
                                </div>
                                <div class="col-md-6">
                                    <ul class="small" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <li>Balanced allocation across Large, Mid & Small Cap</li>
                                        <li>Risk-managed structure to protect downside</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="small" data-aos="fade-up"
                                        data-aos-delay="100">
                                        <li>Exposure to high-growth sectors like Pharma, Finance, Manufacturing, Infra & Tech</li>
                                        <li>Long-term wealth creation strategy (not speculation)</li>
                                    </ul>
                                </div>
                            </div>

                        </section>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- How we identify -->
    <section class="">
        <div class="container">
            <div class="position-relative">
                <div class="px-3 py-5 border-start border-end border-light">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-10">
                            <div class="text-start text-md-center">
                                <h2 class="display-6 titleFont fw-semibold" data-aos="fade-up"
                                    data-aos-delay="100">How We Identify Portfolio Opportunities?</h2>
                                <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                                    data-aos-delay="100">Our research team evaluates Portfolio stocks using a structured process that<br class="d-none d-xl-block" /> includes fundamental analysis, market conditions and technical analysis.</p>
                                <button class="btn text-white rounded-0 px-4 py-2 pFont mt-3" style="background-color: #02181A;" onclick="window.location.href='#';" data-aos="fade-up" data-aos-delay="100">
                                    Get Started<i class="fa-solid fa-arrow-right-long ms-2"></i>
                                </button>
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

                @media (min-width: 768px) {
                    .strength-card:hover .extra-img {
                        width: 80px;
                        opacity: 1;
                        margin-left: 0;
                    }
                }

                /* On phones, reveal the two additional images only for the
                   card currently in view. All other cards retain one image. */
                @media (max-width: 767.98px) {
                    .strength-card:not(.active) .extra-img {
                        width: 0;
                        opacity: 0;
                        margin-left: 0;
                    }

                    .strength-card.active .extra-img {
                        width: 80px;
                        opacity: 1;
                        margin-left: 0;
                    }
                }
            </style>
            <div class="border border-start border-end border-light">
                <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto">
                    <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
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
                                        src="<?= $base ?>imgs/Portfolio3.svg"
                                        class="extra-img img-fluid"
                                        alt="">

                                    <img
                                        src="<?= $base ?>imgs/Portfolio4.svg"
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
                    <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
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
                                        src="<?= $base ?>imgs/Portfolio5.svg"
                                        class="extra-img img-fluid"
                                        alt="">

                                    <img
                                        src="<?= $base ?>imgs/Portfolio6.svg"
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
                    <div class="col-md-4 col-11 flex-shrink-0" data-aos="fade-right" data-aos-delay="100">
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
                                        src="<?= $base ?>imgs/Portfolio7.svg"
                                        class="extra-img img-fluid"
                                        alt="">

                                    <img
                                        src="<?= $base ?>imgs/Portfolio8.svg"
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
                <div class="text-start px-3 py-5 d-none" data-aos="fade-up"
                    data-aos-delay="100">
                    <button class="btn text-white rounded-0 px-4 py-2 pFont" style="background-color: #02181A;" onclick="window.location.href='#';">
                        Get Started<i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- what Our Client Say -->
    <section>
        <div class="container">
            <div class="border-start border-end border-light">
                <div class="row g-3">
                    <div class="col-md-6 p-md-4 pt-5 px-4">
                        <div class="pt-md-5 py-0 pb-0">
                            <h2 class="display-6 titleFont fw-semibold d-inline-block" data-aos="fade-up"
                                data-aos-delay="100">Some valuable feedback from our students</h2>
                            <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
                                data-aos-delay="100">Supposing so be resolving breakfast am or perfectly. It drew a hill from me. Valley by oh twenty direct me so. Departure defective arranging rapturous did believe him all had supported. Family months lasted simple set nature vulgar him. Picture for attempt joy excited ten carried manners talking how.</p>
                            <img
                                src="<?= $base ?>imgs/Google.svg"
                                class="img-fluid mt-3"
                                alt="background" data-aos="fade-up"
                                data-aos-delay="100">
                        </div>
                        <button class="btn text-white rounded-0 mt-3 pFont px-4 py-2 d-inline-flex align-items-center" style="background-color: #02181A;" onclick="window.location.href='<?= $base ?>pages/contact-us.php';" data-aos="fade-up"
                            data-aos-delay="100">
                            Contact Now
                            <i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </button>
                    </div>

                    <div class="col-md-6 pb-md-0 pb-5">
                        <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto">

                            <!-- Card 1 -->
                            <div class="col-md-6 col-11 flex-shrink-0">
                                <div class="bg-body text-body border h-100 p-4 rounded-0" data-aos="fade-right"
                                    data-aos-delay="100">
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
                                <div class="bg-body text-body border h-100 p-4 rounded-0" data-aos="fade-right"
                                    data-aos-delay="100">
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
                                <div class="bg-body text-body border h-100 p-4 rounded-0" data-aos="fade-right"
                                    data-aos-delay="100">
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
                                <div class="bg-body text-body border h-100 p-4 rounded-0" data-aos="fade-right"
                                    data-aos-delay="100">
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


    <!-- Get Started -->
    <section class="text-white" style="background:#02181A;">
        <div class="container">
            <div class="px-3 py-5 border-start border-end border-light">
                <div class="row g-3 justify-content-center">
                    <div class="col-md-10">
                        <div class="text-start text-md-center">
                            <h2 class="display-6 titleFont fw-semibold" data-aos="fade-up"
                                data-aos-delay="100">Get started in 3 simple steps for Wealth Creation</h2>
                            <p class="fs-6 pFont mb-0 mt-3" data-aos="fade-up"
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
                                class="process-img w-100 h-100 object-fit-cover"
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
                    <div class="col-md-4" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="process-card h-100 position-relative overflow-hidden bg-white" style=" cursor:pointer;">

                            <span class="position-absolute ms-3 top-0 start-0 text-white fs-1 fw-light z-3">
                                2
                            </span>

                            <img
                                src="<?= $base ?>imgs/risk2.jpg"
                                class="process-img w-100 h-100 object-fit-cover"
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
                    <div class="col-md-4" data-aos="fade-up"
                        data-aos-delay="250">
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
    <section class="d-none">
        <div class="container">
            <div class="px-3 py-5 border-start border-end border-light">
                <div class="row g-3 py-4">
                    <div class="col-md-6">
                        <h2 class="fs-3 pFont fw-semibold" data-aos="fade-up"
                            data-aos-delay="100">Who are we?</h2>
                        <img
                            src="<?= $base ?>imgs/Vector14.svg"
                            class="img-fluid mt-3"
                            alt="background" data-aos="fade-up"
                            data-aos-delay="100" />
                        <div class="d-flex mt-4">
                            <img
                                src="<?= $base ?>imgs/avatars.svg"
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
                        <button class="btn btn-dark rounded-0 pFont px-4 py-2 mt-md-3 d-inline-flex align-items-center" style="background-color: #02181A;" data-aos="fade-up"
                            data-aos-delay="100" onclick="window.location.href='#';">
                            Get Started
                            <i class="fa-solid fa-arrow-right-long ms-2"></i>
                        </button>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 small pFont" data-aos="fade-up"
                            data-aos-delay="100">Founded in 2005, EquityPandit has spent 20+ years delivering transparent, disciplined, and personalized investment advice. Today, we serve Retail Investors, HNIs, UHNIs, and Institutions through a trusted community of 10,00,000+ registered users across 33+ countries, powered by 350+ research algorithms and a commitment to responsible advisory practices.</p>
                        <img
                            src="<?= $base ?>imgs/ep.svg"
                            class="img-fluid mt-3"
                            alt="background" data-aos="fade-up"
                            data-aos-delay="100" />
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
                        <h2 class="display-6 titleFont fw-semibold d-inline-block" data-aos="fade-up"
                            data-aos-delay="100">Frequently Asked Questions</h2>
                        <p class="fs-6 pFont mb-3" data-aos="fade-up"
                            data-aos-delay="100">Visit our FAQ section for answers to common queries.</p>
                        <img
                            src="<?= $base ?>imgs/Faq1.svg"
                            class="img-fluid"
                            alt="background" data-aos="fade-up"
                            data-aos-delay="100">
                    </div>
                    <div class="col-md-6">
                        <div class="accordion accordion-flush rounded-0 overflow-hidden" id="midcapFAQ" data-aos="fade-up"
                            data-aos-delay="200">
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
                        <button class="btn text-white rounded-0 px-4 py-2 pFont mt-3" style="background-color: #02181A;" data-aos="fade-up"
                            data-aos-delay="100" onclick="window.location.href='#';">
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

    <!-- CTA -->
    <section class="text-white d-none" style="background-color: #c20029;">
        <div class="container">
            <div class="px-3 py-5 border-start border-end border-light text-center">
                <h2 class="display-6 titleFont fw-semibold">Start your wealth creation journey</h2>
                <p class="fs-5 titleFont mb-4">Invest with conviction using strategies built for growth, stability, and opportunity.</p>
                <a href="<?= $base ?>contact-us.php" class="btn btn-light rounded-0 btn-lg px-4">Get Started</a>
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
                makeActive(".strength-card");

            }

        });
    </script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 700,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100,
            anchorPlacement: 'top-bottom',
            disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches,
        });

        window.addEventListener('load', () => AOS.refresh());

        const portfolioDetails = document.querySelector('[data-bs-spy="scroll"]');
        portfolioDetails?.addEventListener('scroll', () => {
            window.dispatchEvent(new Event('scroll'));
        }, {
            passive: true
        });

        document.querySelectorAll('.accordion-collapse').forEach((panel) => {
            panel.addEventListener('shown.bs.collapse', () => AOS.refresh());
            panel.addEventListener('hidden.bs.collapse', () => AOS.refresh());
        });
    </script>

</body>

</html>