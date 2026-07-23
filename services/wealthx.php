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
    <section class="position-relative" style="background-color: #F7F5EF;">

        <!-- Dark Background -->
        <div class="container-fluid p-0">
            <div class="container position-relative">

                <!-- Border -->
                <div class="border-start border-end border-light">
                    <!-- Hero Content -->
                    <div class="pt-5">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <!-- Breadcrumb -->
                                        <div class="px-3">
                                            <div class="mb-4 mt-5">
                                                <a href="<?= $base ?>index.php"
                                                    class="text-decoration-none text-black">
                                                    Home
                                                </a>
                                                <span class="mx-1">&gt;</span>

                                                <a href="#"
                                                    class="text-decoration-none"
                                                    style="color:#D6B770;">
                                                    WealthX
                                                </a>
                                            </div>

                                            <!-- Heading -->
                                            <h1 class="titleFont display-6 fw-semibold mb-4">
                                                Your Wealth Deserves
                                                <br class="d-none d-md-block">
                                                To Work Smarter.
                                            </h1>

                                            <!-- Description -->
                                            <p class="pFont"> <small>
                                                    WealthX is a multi-asset investment advisory service built to capture
                                                    <br class=" d-none d-md-block">
                                                    every market opportunity - combining expert research, disciplined
                                                    <br class="d-none d-md-block">
                                                    allocation, and active portfolio management.
                                                </small>
                                            </p>

                                            <!-- Button -->
                                            <button class="btn btn-dark rounded-0 px-4 py-2 mt-4" style="color:#D6B770;">
                                                Explore Benefits
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Image 1 -->
                                    <div class="col-md-6 col-6 d-flex align-items-end justify-content-end d-none d-md-block">
                                        <img src="<?= $base ?>imgs/services/w1.jpg"
                                            class="h-auto img-fluid">
                                    </div>

                                    <!-- Image 2 -->
                                    <div class="col-md-6 col-6 d-flex align-items-end justify-content-end d-none d-md-block">
                                        <img src="<?= $base ?>imgs/services/w2.jpg"
                                            class="h-auto img-fluid">
                                    </div>
                                </div>
                            </div>

                            <!-- Image 3 -->
                            <div class="col-md-3 col-12 mt-3 mt-md-0 d-flex align-items-end justify-content-end">
                                <img src="<?= $base ?>imgs/services/w3.gif"
                                    class=" h-auto img-fluid">

                            </div>
                            <div class="col-md-3 col-6 mt-3 mt-md-0 d-flex align-items-end justify-content-end d-none d-md-inline-flex ">
                                <!-- Image 4 -->
                                <img src="<?= $base ?>imgs/services/w4.jpg"
                                    class="h-auto img-fluid">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- section 2 -->
    <section>
        <div class="container">
            <div class="border">
                <!-- Top -->
                <div class="px-3 py-5 border-start border-end border-light">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-3">
                            <p class="fs-5 pFont mb-0">• About EquityPandit</p>
                        </div>

                        <div class="col-md-9">
                            <h2 class="display-6 pFon fw-semibold">
                                Accelerating Business Success Through Expert Strategy,
                                Innovation, And Sustainable Long-Term Growth.
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Bottom -->
                <div class="row g-0">

                    <!-- Box 1 -->
                    <div class="col-lg-4 border-top border-end p-4 d-flex flex-column">

                        <div class="flex-grow-1">
                            <img src="<?= $base ?>imgs/Avtar2.svg" class="img-fluid" alt="Avtar Image">
                            <h6 class="fw-bold mt-1">1M+ REGISTERED USER</h6>
                        </div>
                        <!-- This paragraph fills the space -->
                        <p class="small fw-semibold flex-grow-1 d-flex align-items-center">
                            Over 21 years of industry expertise,
                            delivering trusted solutions and measurable
                            results across diverse markets.
                        </p>

                        <!-- Always stays at the bottom -->
                        <div class="mt-auto">
                            <h1 class="display-4 fw-bold mb-0">21+</h1>
                            <p class="mb-0">Years Of Market Expertise</p>
                        </div>

                    </div>
                    <!-- Box 2 -->
                    <div class="col-lg-4 border-top border-end p-4 d-flex flex-column">

                        <!-- Top Text -->
                        <p class="small text-muted">
                            Recognized with 11+ national and international awards for excellence,
                            innovation, and outstanding business achievements.
                        </p>

                        <!-- Center Image -->
                        <div class="flex-grow-1 d-flex align-items-center justify-content-center my-3">
                            <img src="<?= $base ?>imgs/services/w6.jpg"
                                class="img-fluid"
                                alt="Award Image">
                        </div>

                        <!-- Bottom Content -->
                        <p class="mb-0">
                            <i class="fa-solid fa-circle me-2 small" style="color:#D6B770;"></i><br>
                            Ready To Accelerate Your Business Growth
                        </p>

                    </div>
                    <!-- Box 3 -->
                    <div class="col-md-4 ">
                        <img src=" <?= $base ?>imgs/w5.jpg"
                            class="img-fluid h-auto">
                        <div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- section 3 -->
    <section>
        <style>
            /* Outer wrapper reserves ONE scroll runway sized to the
           number of steps — this is what the sticky block pins against */
            .target-scroll-wrapper {
                position: relative;
                height: 400vh;
                /* 100vh per step × 4 steps */
            }

            /* Pinned block — stays fixed in viewport for the entire
           runway above, then releases exactly when the wrapper ends */
            .target-sticky {
                position: sticky;
                top: 0;
                height: 100vh;
                overflow: hidden;
            }

            .circle-wrapper {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 400px;
                height: 400px;
                transform: translate(-50%, -50%);
                pointer-events: none;
            }

            .circle-number {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: 2px;
            }

            #circleRotate {
                transform-origin: center;
                transition: transform .6s cubic-bezier(.4, 0, .2, 1);
            }

            /* Base fallback rule — actual color control happens via
           inline style set in JS below, which always wins over
           Bootstrap/theme color rules regardless of specificity */
            .service-content h2 {
                transition: color .4s ease;
            }

            .service-content-wrap {
                max-height: 0;
                overflow: hidden;
                opacity: 0;
                transition:
                    max-height .5s ease,
                    opacity .4s ease;
            }

            .service-item.active .service-content-wrap {
                max-height: 300px;
                opacity: 1;
                transition-delay: 0s, .1s;
            }

            .service-content img {
                max-width: 260px;
            }

            /* Mobile fallback — release the sticky pin and let the
           accordion content stay open (Bootstrap's own breakpoint
           utilities can't reach inside these custom classes) */
            @media(max-width: 991px) {
                .target-scroll-wrapper {
                    height: auto;
                }

                .target-sticky {
                    position: static;
                    height: auto;
                }

                .service-content-wrap {
                    max-height: none !important;
                    opacity: 1 !important;
                    overflow: visible;
                }
            }
        </style>

        <div class="container">

            <div class="py-5 px-3 border border-light">
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

            <div class="border-start border-end border-bottom border-light">
                <div class="target-scroll-wrapper" id="targetWrapper">
                    <div class="target-sticky d-flex align-items-center">
                        <div class="row g-0 w-100 align-items-center gx-4 flex-md-nowrap">

                            <!-- LEFT SIDE -->
                            <div class="col-12 col-md-5 d-flex flex-column position-relative">
                                <div class="position-relative overflow-hidden flex-fill m-0 p-0">
                                    <img class="w-100 h-auto d-block m-0 p-0"
                                        src="<?= $base ?>imgs/services/welthx_1.jpg" alt="">

                                    <div class="circle-wrapper">
                                        <svg width="100%" height="100%" viewBox="0 0 300 300">

                                            <!-- Thin background circle -->
                                            <circle
                                                cx="150"
                                                cy="150"
                                                r="105"
                                                fill="none"
                                                stroke="rgba(255,255,255,0.45)"
                                                stroke-width="1" />

                                            <!-- Thin progress arc -->
                                            <g id="circleRotate">
                                                <path
                                                    d="M150 45 A105 105 0 0 1 255 150"
                                                    fill="none"
                                                    stroke="#fff"
                                                    stroke-width="1.5"
                                                    stroke-linecap="round" />
                                            </g>
                                        </svg>

                                        <div id="circleNumber" class="circle-number">
                                            [ 01 ] / [ 04 ]
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <a href="#"
                                        class="btn rounded-0 text-white mt-3 px-4 py-2 mb-3 pFont"
                                        style="background-color: #02181A;">
                                        Learn How It Works
                                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-1"></div>

                            <!-- RIGHT SIDE -->
                            <div class="col-12 col-md-6">
                                <div class="service-item active" data-index="0">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><small>[01]</small></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-6 fw-semibold m-0">Expert Research</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2" style="max-width:450px;">Every position backed by rigorous fundamental analysis and live market intelligence.</p>
                                                <img class="img-fluid rounded" src="<?= $base ?>imgs/services/welthx_2.jpg" alt="Expert Research">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-item" data-index="1">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><small>[02]</small></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-6 fw-semibold m-0">Disciplined Construction</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2" style="max-width:450px;">Portfolios built with clear allocation logic — not guesswork or short-term noise.</p>
                                                <img class="img-fluid rounded" src="<?= $base ?>imgs/services/welthx_3.jpg" alt="Disciplined Construction">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-item" data-index="2">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><small>[03]</small></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-6 fw-semibold m-0">Dynamic Allocation</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2" style="max-width:450px;">Capital shifts toward stronger asset classes. Quarterly rebalancing. Event-based adjustments.</p>
                                                <img class="img-fluid rounded" src="<?= $base ?>imgs/services/welthx_4.jpg" alt="Dynamic Allocation">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-item" data-index="3">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><small>[04]</small></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-6 fw-semibold m-0">Continuous Compounding</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2" style="max-width:450px;">When one asset class falls, others keep working. The portfolio never stops compounding.</p>
                                                <img class="img-fluid rounded" src="<?= $base ?>imgs/services/welthx_5.jpg" alt="Continuous Compounding">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const wrapper = document.getElementById("targetWrapper");
            const items = document.querySelectorAll(".service-item");
            const circle = document.getElementById("circleRotate");
            const number = document.getElementById("circleNumber");
            const total = items.length;

            function paintHeadings() {
                items.forEach(item => {
                    const heading = item.querySelector(".service-content h2");
                    if (!heading) return;
                    heading.classList.toggle("is-active", item.classList.contains("active"));
                    heading.classList.toggle("is-inactive", !item.classList.contains("active"));
                });
            }

            let current = 0;
            let ticking = false;

            function updateActive() {
                ticking = false;
                const rect = wrapper.getBoundingClientRect();
                const scrollableDistance = wrapper.offsetHeight - window.innerHeight;
                if (scrollableDistance <= 0) return;

                let progress = -rect.top / scrollableDistance;
                progress = Math.min(Math.max(progress, 0), 0.999);
                const index = Math.floor(progress * total);

                if (index === current) return;
                current = index;

                items.forEach(item => item.classList.remove("active"));
                items[index].classList.add("active");
                paintHeadings();

                const label = String(index + 1).padStart(2, "0");
                if (number) number.innerHTML = `[ ${label} ] / [ 0${total} ]`;
                if (circle) circle.style.transform = `rotate(${index * (360 / total)}deg)`;
            }

            function onScroll() {
                if (!ticking) {
                    window.requestAnimationFrame(updateActive);
                    ticking = true;
                }
            }

            window.addEventListener("scroll", onScroll, {
                passive: true
            });
            window.addEventListener("load", updateActive);
            updateActive();
            paintHeadings();
        });
    </script>

    <!-- Services -->

    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">


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

                    <!-- Cards Slider -->
                    <div class="col-md-8 col-12">
                        <div class="wealth-slider">
                            <!-- Card 1 -->
                            <div class="px-2">
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
                            <div class="px-2">
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
                            <div class="px-2">
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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Slick JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.wealth-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                dots: true,
                responsive: [

                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2
                        }
                    },

                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>

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
    <!-- <script>
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
    </script> -->
</body>

</html>