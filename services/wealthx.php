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

<body>
    <!-- Intro -->
    <section class="position-relative wealth-section">
        <style>
            .wealth-section {
                background-color: #F7F5EF;
            }

            /* Bootstrap 5.3 dark mode */
            [data-bs-theme="dark"] .wealth-section {
                background-color: #000 !important;
            }
        </style>

        <!-- Dark Background -->
        <div class="container-fluid p-0">
            <div class="container position-relative">

                <!-- Border -->
                <div class="border-start border-end border-light">
                    <!-- Hero Content -->
                    <div class="pt-5">

                        <div class="row g-3 align-items-stretch">

                            <!-- Text -->
                            <div class="col-md-7">
                                <div class="px-3">

                                    <!-- Breadcrumb -->
                                    <div class="mb-4">
                                        <a href="<?= $base ?>index.php"
                                            class="text-decoration-none text-body">
                                            Home
                                        </a>

                                        <i class="fa-solid fa-chevron-right fa-sm mx-1"></i>

                                        <a href="#"
                                            class="text-decoration-none"
                                            style="color:#D6B770;">
                                            WealthX
                                        </a>
                                    </div>

                                    <!-- Heading -->
                                    <h1 class="titleFont display-5 fw-semibold text-body-emphasis">
                                        Your Wealth Deserves
                                        To Work Smarter.
                                    </h1>
                                </div>
                            </div>

                            <!-- Left Content -->
                            <div class="col-md-6">
                                <div class="row g-3 h-100">


                                    <!-- Description -->
                                    <div class="col-md-12">
                                        <div class="px-3">

                                            <p class="pFont mb-4 fs-5">
                                                WealthX is a multi-asset investment advisory service built to capture
                                                every market opportunity-combining expert research, disciplined
                                                allocation, and active portfolio management.
                                            </p>

                                            <!-- Button -->
                                            <button class="btn btn-dark rounded-0 px-4 py-2"
                                                style="color:#D6B770;">
                                                Explore Benefits
                                                <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Bottom Images  -->
                                    <div class="col-md-6 d-none d-md-flex align-items-end  ">
                                        <img src="<?= $base ?>imgs/services/w1.jpg"
                                            class="img-fluid w-100">
                                    </div>

                                    <div class="col-md-6 d-none d-md-flex align-items-end">
                                        <img src="<?= $base ?>imgs/services/w2.jpg"
                                            class="img-fluid w-100">
                                    </div>

                                </div>
                            </div>

                            <!-- Video -->
                            <div class="col-md-3 col-12 d-flex align-items-end  ">
                                <video
                                    class="img-fluid w-100"
                                    autoplay
                                    muted
                                    loop
                                    playsinline>
                                    <source src="<?= $base ?>imgs/services/w3.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                            <!-- Right Image -->
                            <div class="col-md-3 d-none d-md-flex align-items-end">
                                <img src="<?= $base ?>imgs/services/w4.jpg"
                                    class="img-fluid w-100">
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
                    <div class="row g-3 justify-content-center mt-5 mb-4 mt-md-4 mb-md-0">
                        <div class="col-md-3">
                            <p class="fs-5 pFont mb-0">• About EquityPandit</p>
                        </div>

                        <div class="col-md-9">
                            <h2 class="display-6 titleFont fst-italic fw-semibold scroll-reveal-text text-body-emphasis fst-italic">
                                Accelerating business success through expert strategy,
                                innovation, and sustainable long-term growth.
                            </h2>
                            <style>
                                .scroll-reveal-text span {
                                    color: #d0d0d0;
                                    /* muted/gray default (light mode) */
                                    transition: color 0.2s ease;
                                }

                                .scroll-reveal-text span.active {
                                    color: #1a1a1a;
                                    /* dark/revealed (light mode) */
                                }

                                /* Dark mode: swap the shades so the reveal direction stays consistent */
                                [data-bs-theme="dark"] .scroll-reveal-text span {
                                    color: #4d4d4d;
                                    /* muted/dark-gray default against a dark background */
                                }

                                [data-bs-theme="dark"] .scroll-reveal-text span.active {
                                    color: #f5f5f5;
                                    /* bright/revealed against a dark background */
                                }
                            </style>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    // 1. Split every .scroll-reveal-text heading into word-spans
                                    const headings = document.querySelectorAll(".scroll-reveal-text");

                                    headings.forEach((heading) => {
                                        const words = heading.textContent.trim().split(/\s+/);
                                        heading.innerHTML = words
                                            .map((word) => `<span>${word}</span>`)
                                            .join(" ");
                                    });

                                    const allWords = document.querySelectorAll(".scroll-reveal-text span");

                                    // 2. On scroll, calculate progress of each heading through the viewport
                                    function updateReveal() {
                                        headings.forEach((heading) => {
                                            const rect = heading.getBoundingClientRect();
                                            const windowHeight = window.innerHeight;

                                            // Progress: 0 when heading top enters bottom of viewport,
                                            // 1 when heading bottom reaches top third of viewport
                                            const start = windowHeight * 0.9; // when reveal starts
                                            const end = windowHeight * 0.4; // when reveal completes

                                            const total = start - end;
                                            const scrolled = start - rect.top;
                                            let progress = scrolled / total;
                                            progress = Math.max(0, Math.min(1, progress));

                                            const words = heading.querySelectorAll("span");
                                            const activeCount = Math.floor(progress * words.length);

                                            words.forEach((word, i) => {
                                                word.classList.toggle("active", i < activeCount);
                                            });
                                        });
                                    }

                                    window.addEventListener("scroll", updateReveal);
                                    window.addEventListener("resize", updateReveal);
                                    updateReveal(); // run once on load
                                });
                            </script>
                        </div>
                    </div>
                </div>

                <!-- Bottom -->
                <style>
                    .theme-icon {
                        filter: brightness(0);
                    }

                    [data-bs-theme="dark"] .theme-icon {
                        filter: brightness(0) invert(1);
                    }
                </style>

                <div class="row g-0 align-items-stretch">

                    <!-- Box 1 -->
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

                    <div class="col-12 col-md-4 d-flex">
                        <div class="border-top border-end p-4 d-flex flex-column w-100 h-100">

                            <p class="flex-grow-1 pFont d-flex align-items-center mt-md-0">
                                Over 21 years of industry expertise, delivering trusted solutions and
                                measurable results across diverse markets.
                            </p>

                            <div class="flex-grow-1 d-flex align-items-end justify-content-between mt-3">
                                <div>
                                    <h2 class="display-4 fw-medium text-body-emphasis">
                                        <span class="js-roll-counter" data-value="21"></span>+
                                    </h2>
                                    <p class="mb-0 fs-6">Years of Market Expertise</p>
                                </div>
                                <img src="<?= $base ?>imgs/services/w17.png"
                                    alt="Icon" class="img-fluid align-self-end theme-icon" style="height: 140px;">
                            </div>

                            <div class="flex-grow-1 ">
                                <img src="<?= $base ?>imgs/Avtar2.svg" class="img-fluid mt-5" alt="Avatar Image">
                                <h6 class="fw-semibold mt-2 text-body-emphasis">
                                    1M+ REGISTERED USER
                                </h6>
                            </div>

                        </div>
                    </div>

                    <!-- Box 2 -->
                    <div class="col-12 col-md-4 d-flex">
                        <div class="border-top border-end p-4 d-flex flex-column w-100 h-100">

                            <p class="pFont ">
                                Recognized with 11+ national and international awards for excellence,
                                innovation, and outstanding business achievements.
                            </p>

                            <div class="flex-grow-1 d-flex align-items-center justify-content-between mt-3">
                                <div>
                                    <h1 class="display-4 fw-medium text-body-emphasis">
                                        <span class="js-roll-counter" data-value="11"></span>+
                                    </h1>
                                    <p class="mb-0 fs-6">Registered Users</p>
                                </div>
                                <img src="<?= $base ?>imgs/services/w6.png"
                                    class="img-fluid theme-icon"
                                    alt="Bar Chart Icon"
                                    style="margin-top: -60px; width: 140px; height: auto;">
                            </div>

                            <p class="mb-0 mt-5 fs-5 text-body-emphasis text-medium">
                                <i class="fa-solid fa-circle me-2 p" style="color:#D6B770;"></i>
                                <br>
                                Ready To Accelerate Your Business Growth
                            </p>

                        </div>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {

                            // Build a single digit's rolling track (0-9 stacked)
                            // startAt: which digit (0-9) the track shows initially, before rolling
                            function buildDigitBox(targetDigit, startAt) {
                                const box = document.createElement('span');
                                box.className = 'digit-box';

                                const track = document.createElement('span');
                                track.className = 'digit-track';
                                track.style.transform = `translateY(-${startAt}em)`; // initial position

                                for (let i = 0; i <= 9; i++) {
                                    const d = document.createElement('span');
                                    d.className = 'digit';
                                    d.textContent = i;
                                    track.appendChild(d);
                                }

                                box.appendChild(track);
                                box.dataset.target = targetDigit;
                                return box;
                            }

                            // Turn a span[data-value] into a rolling-counter of digit-boxes
                            // digitIndex 0 (first digit) starts at 0, all other digits start at 9
                            function buildRollingCounter(span) {
                                const value = span.dataset.value;
                                const wrapper = document.createElement('span');
                                wrapper.className = 'rolling-counter';

                                const digitsOnly = value.split('').filter(ch => /\d/.test(ch));
                                let digitIndex = 0;

                                value.split('').forEach(ch => {
                                    if (/\d/.test(ch)) {
                                        const startAt = (digitIndex === 0) ? 0 : 9;
                                        wrapper.appendChild(buildDigitBox(ch, startAt));
                                        digitIndex++;
                                    } else {
                                        const plain = document.createElement('span');
                                        plain.textContent = ch;
                                        wrapper.appendChild(plain);
                                    }
                                });

                                span.replaceWith(wrapper);
                                return wrapper;
                            }

                            // Trigger the roll: move each track to its target digit, staggered
                            function rollCounter(wrapper) {
                                const boxes = wrapper.querySelectorAll('.digit-box');
                                boxes.forEach((box, index) => {
                                    const target = box.dataset.target;
                                    const track = box.querySelector('.digit-track');

                                    const delay = index * 0.15; // stagger in seconds
                                    track.style.transitionDelay = `${delay}s`;

                                    void track.offsetHeight; // force reflow
                                    track.style.transform = `translateY(-${target}em)`;
                                });
                            }

                            const counters = Array.from(document.querySelectorAll('.js-roll-counter'))
                                .map(buildRollingCounter);

                            const observer = new IntersectionObserver((entries, obs) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        rollCounter(entry.target);
                                        obs.unobserve(entry.target);
                                    }
                                });
                            }, {
                                threshold: 0.5
                            });

                            counters.forEach(wrapper => observer.observe(wrapper));
                        });
                    </script>

                    <!-- Box 3 -->
                    <div class="col-12 col-md-4 d-flex">
                        <div class="w-100 h-100 position-relative growth-card overflow-hidden">

                            <!-- Background image -->
                            <img src="<?= $base ?>imgs/w5.jpg"
                                class="img-fluid w-100 h-100 object-fit-cover position-absolute top-0 start-0"
                                alt="Image">

                            <!-- Gradient overlay -->
                            <div class="position-absolute top-0 start-0 w-100 h-100 growth-overlay"></div>

                            <!-- Text content -->
                            <div class="position-relative p-4 d-flex flex-column h-100 text-dark">

                                <div>
                                    <h5 class="fw-semibold mb-1">
                                        Strategic Business Growth
                                    </h5>

                                    <p class="d-block fw-semibold fs-6">
                                        © 2026 Equitypandit Financial Services Private Limited
                                    </p>
                                </div>
                                <div class="d-flex align-items-baseline mb-1 mt-4">
                                    <span class="fw-medium me-1" style="font-size:60px;">
                                        4.5
                                    </span>

                                    <span class="fs-3">
                                        /5
                                    </span>
                                </div>
                                <div class="text-warning mb-2 fs-4">
                                    ★★★★★
                                </div>
                                <div class="mt-auto">
                                    <p class="fw-semibold mb-0 fs-5">
                                        Trusted By Businesses
                                        Across The Globe.
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- section 3 -->
    <section class="">
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

            /* Mobile fallback — release the sticky pin; content opens
       via tap (accordion), left image/circle column is hidden */
            @media(max-width: 991px) {
                .target-scroll-wrapper {
                    height: auto;
                }

                .target-sticky {
                    position: static;
                    height: auto;
                }

                .service-content-wrap {
                    overflow: hidden;
                }

                .service-header {
                    cursor: pointer;
                }
            }
        </style>

        <div class="container">

            <div class="py-5 px-3 border border-light">
                <div class="row mt-5 mb-4 mb-md-0">
                    <div class="col-md-4 d-flex align-items-center">
                        <h2 class="display-6 titleFont fw-semibold d-inline-block text-body-emphasis">
                            Built For Every Market Condition
                        </h2>
                    </div>
                    <div class="col-md-8 ">
                        <p class="fs-5 pFont">WealthX is a comprehensive multi-asset investment advisory service designed to capture every market opportunity for the super compounding of your wealth.</p>
                        <p class="fs-5 pFont mb-0">By combining expert research, disciplined portfolio construction, and active capital allocation, WealthX delivers institutional-quality investment
                            strategy - made accessible to individual investors.</p>
                    </div>
                </div>
            </div>

            <div class="border-start border-end border-bottom border-light">
                <div class="target-scroll-wrapper" id="targetWrapper">
                    <div class="target-sticky d-flex align-items-center">
                        <div class="row g-0 w-100 align-items-center gx-4 flex-md-nowrap">

                            <!-- LEFT SIDE (hidden on mobile) -->
                            <div class="col-12 col-md-5 d-none d-md-flex flex-column position-relative">
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
                                    <!-- Button -->
                                    <button class="btn btn-dark rounded-0 px-4 py-2 mt-3 ms-3"
                                        style="color:#D6B770;">
                                        Learn How It Works
                                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-1 d-none d-md-block"></div>

                            <!-- RIGHT SIDE -->
                            <div class="col-12 col-md-6">
                                <div class="service-item active" data-index="0">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><span class="text-body-emphasis">[01]</span></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-5 fw-semibold m-0">Expert Research</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2 fs-6" style=" max-width:450px;">Every position backed by rigorous fundamental analysis and live market intelligence.</p>
                                                <img class="img-fluid rounded" src="<?= $base ?>imgs/services/welthx_2.jpg" alt="Expert Research">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-item" data-index="1">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><span class="text-body-emphasis">[02]</span></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-5 fw-semibold m-0">Disciplined Construction</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2 fs-6" style="max-width:450px;">Portfolios built with clear allocation logic — not guesswork or short-term noise.</p>
                                                <img class="img-fluid rounded" src="<?= $base ?>imgs/services/welthx_3.jpg" alt="Disciplined Construction">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-item" data-index="2">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><span class="text-body-emphasis">[03]</span></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-5 fw-semibold m-0">Dynamic Allocation</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2 fs-6" style="max-width:450px;">Capital shifts toward stronger asset classes. Quarterly rebalancing. Event-based adjustments.</p>
                                                <img class="img-fluid rounded" src="<?= $base ?>imgs/services/welthx_4.jpg" alt="Dynamic Allocation">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="service-item" data-index="3">
                                    <div class="service-header d-flex gap-3 align-items-start p-3 border-bottom">
                                        <div class="service-number"><span class="text-body-emphasis">[04]</span></div>
                                        <div class="service-content w-100">
                                            <h2 class="fs-5 fw-semibold m-0">Continuous Compounding</h2>
                                            <div class="service-content-wrap">
                                                <p class="pFont mt-2 fs-6" style="max-width:450px;">When one asset class falls, others keep working. The portfolio never stops compounding.</p>
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

        <script>
            // Mobile-only accordion: tap a service-header to open its content,
            // closing the others. Runs independently of the desktop scroll-driven
            // script that already toggles .active based on scroll position.
            (function() {
                var mq = window.matchMedia('(max-width: 991px)');

                document.querySelectorAll('.service-item .service-header').forEach(function(header) {
                    header.addEventListener('click', function() {
                        if (!mq.matches) return; // let desktop scroll-JS handle it above 991px

                        var item = header.closest('.service-item');
                        var isActive = item.classList.contains('active');

                        document.querySelectorAll('.service-item').forEach(function(el) {
                            el.classList.remove('active');
                        });

                        if (!isActive) {
                            item.classList.add('active');
                        }
                    });
                });
            })();
        </script>
    </section>
    <!-- section 4 -->
    <section class="bg-black text-white ">
        <div class="container">
            <div class="px-3 py-5 border border-light">
                <div class="row g-3 mt-5 mb-4 mt-md-4 mb-md-0 justify-content-between">
                    <div class="col-md-4">
                        <h2 class="display-6 titleFont fw-semibold">
                            Every Market.
                            Every Opportunity.
                        </h2>
                    </div>
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-6">
                        <p class="fs-5 pFont ">
                            A complete wealth management ecosystem - research,
                            alerts, analytics, and expert support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black text-white">
        <div class="container">
            <div class="border border-top-0 border-light">
                <div class="row align-items-center g-0">

                    <!-- Equity portfolio -->
                    <div class="border-bottom border-light ">
                        <div class="col-md-12">
                            <div class="row">
                                <!-- Left -->
                                <div class="col-md-6 col-12 p-4 p-md-5">
                                    <h3 class="fs-2 titleFont fw-semibold">Equity Portfolio</h3>

                                    <p class="text-uppercase d-block mb-4" style="color:#D8BB63">
                                        The Growth Core
                                    </p>

                                    <p class="text-secondary fs-6 pFont ">
                                        A Curated Basket Of Fundamentally Strong Stocks.
                                        Deep Analysis Of Business Quality, Earnings Growth,
                                        And Management Track Record. Rebalanced Quarterly.
                                    </p>

                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-regular fa-gem me-2"></i>
                                                Fundamentally Strong Stocks
                                            </p>
                                        </div>

                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-arrow-up-right-dots me-2"></i>
                                                In-depth Research & Analysis
                                            </p>
                                        </div>

                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-battery-three-quarters me-2"></i>
                                                Quarterly Rebalancing
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right -->
                                <div class="col-md-6 col-12 text-end">
                                    <img src="<?= $base ?>imgs/services/w8.jpg"
                                        class="img-fluid h-auto"
                                        alt="Equity Portfolio">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Multibaggers -->
                    <div class="border-bottom border-light ">
                        <div class="col-md-12">
                            <div class="row">
                                <!-- Left -->
                                <div class="col-md-6 col-12 p-4 p-md-5">
                                    <h3 class="display-6 titleFont fw-semibold">Multibaggers</h3>

                                    <p class="text-uppercase  d-block mb-4" style="color:#539AFF">
                                        HIGH-CONVICTION PICKS
                                    </p>

                                    <p class="text-secondary fs-6 pFont ">
                                        One high-growth opportunity every month. Quality businesses with
                                        strong structural trends and mid-term horizon. Carefully researched - not speculative.
                                    </p>

                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-money-bill-trend-up me-2"></i>
                                                1 High-Growth Stock Every Month
                                            </p>
                                        </div>

                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-microscope me-2"></i>
                                                Research-Backed, Not Speculative
                                            </p>
                                        </div>

                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-arrow-trend-up me-2"></i>
                                                Quality Businesses, Strong Trends
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right -->
                                <div class="col-md-6 col-12 text-end">
                                    <img src="<?= $base ?>imgs/services/w9.jpg"
                                        class="img-fluid h-auto"
                                        alt="Multibagger">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ETFs -->
                    <div class="border-bottom border-light ">
                        <div class="col-md-12">
                            <div class="row">
                                <!-- Left -->
                                <div class="col-md-6 col-12 p-4 p-md-5">
                                    <h3 class="display-6 titleFont fw-semibold">ETFs</h3>

                                    <p class="text-uppercase  d-block mb-4" style="color:#5BFFB4">
                                        DIVERSIFIED EXPOSURE
                                    </p>

                                    <p class="text-secondary fs-6 pFont ">
                                        Strategic allocations to commodity, index, and debt ETFs.
                                        Broad macro coverage across sectors and geographies
                                        that stock picking alone cannot reach.
                                    </p>

                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-globe me-2"></i>
                                                Global & Sector Diversification
                                            </p>
                                        </div>

                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-arrows-down-to-people me-2"></i>
                                                Commodity, Index & Debt ETFS
                                            </p>
                                        </div>

                                        <div class="card border rounded-0 bg-black text-white border-secondary p-2 d-flex justify-content-center align-items-center">
                                            <p class="pFont fs-6 mb-0 text-center">
                                                <i class="fa-solid fa-person-walking-arrow-loop-left me-2"></i>
                                                Reduce Risk, Enhance Returns
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right -->
                                <div class="col-md-6 col-12 text-end">
                                    <img src="<?= $base ?>imgs/services/w10.jpg"
                                        class="img-fluid h-auto"
                                        alt="ETF">
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


    <!-- Generate Wealth -->
    <section>
        <div class="container">
            <div class="border border-light border-top-0 border-bottom-0">
                <div class="row align-items-stretch justify-content-center text-center py-5">

                    <div class="col-12 ">

                        <div class="d-inline-block p-3 mb-4 mx-auto">
                            <p class="titleFont fw-semibold mb-0 display-6 fst-italic " style="color:#D0AB58;">
                                "The Goal Is Not To Predict The Future - It Is
                                To Be Positioned For Every Version Of It."
                            </p>
                        </div>

                        <div class="d-flex flex-wrap justify-content-center gap-2 pFont">
                            <span> Rising Markets |</span>
                            <span> Volatile Periods |</span>
                            <span> Market Catalysts |</span>
                            <span> Through It All </span>
                        </div>

                        <button class="btn btn-dark rounded-0 px-4 py-2 mt-4" style="color:#D6B770;">
                            Schedule a Consultation
                        </button>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- Section 5 -->
    <section>
        <style>
            /* Desktop */
            .hover-card:hover {
                flex: 2.5 !important;
                background: #02181A;
                color: #fff;
            }

            .hover-content {
                max-height: 0;
                opacity: 0;
                overflow: hidden;
                transition: all .45s ease;
            }

            .hover-card:hover .hover-content {
                max-height: 220px;
                opacity: 1;
            }

            .hover-card hr {
                border-color: rgba(255, 255, 255, .2);
            }

            .icon {
                width: 42px;
                height: 42px;
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

            /* Dark mode default: white icon so it's visible against the dark card */
            [data-bs-theme="dark"] .icon {
                background: #fff;
            }

            .hover-card:hover .icon {
                background: #D6B770;
            }

            /* Mobile */
            @media (max-width:767.98px) {

                .card-scroll-row {
                    display: flex !important;
                    flex-wrap: nowrap !important;
                    overflow-x: auto !important;
                    overflow-y: hidden !important;
                    scrollbar-width: none;
                    -ms-overflow-style: none;
                }

                .card-scroll-row::-webkit-scrollbar {
                    display: none;
                }

                .hover-card {
                    flex: 0 0 80% !important;
                    background: #02181A;
                    color: #fff;
                    border-right: 0 !important;
                    border-bottom: 0 !important;
                    min-height: 260px;
                }

                .hover-content {
                    max-height: 300px;
                    opacity: 1;
                    overflow: visible;
                    margin-top: 1.25rem !important;
                }

                .hover-card hr {
                    border-color: rgba(255, 255, 255, .2);
                }

                .icon {
                    background: #D6B770;
                }

                .hover-card:hover {
                    flex: 0 0 80% !important;
                    background: #02181A;
                    color: #fff;
                }
            }
        </style>

        <div class="container">
            <div class="border border-light">
                <div class="d-flex card-scroll-row" style="min-height:380px;">

                    <!-- Card 1 -->
                    <div class="hover-card d-flex flex-column p-3 border border-light"
                        style="flex:1;transition:.45s;cursor:pointer;overflow:hidden;">

                        <span class="icon icon-1"></span>

                        <div class="mt-3">
                            <h2 class="titleFont mb-0">
                                Rising Markets
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Captured Through Equities And Monthly High-Conviction
                                Multibagger Picks.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold pt-3">
                            <i class="fa-solid fa-circle me-2 p"></i>
                            Explore More
                        </div>

                    </div>

                    <!-- Card 2 -->
                    <div class="hover-card d-flex flex-column p-3 border border-light"
                        style="flex:1;transition:.45s;cursor:pointer;overflow:hidden;">

                        <span class="icon icon-2"></span>

                        <div class="mt-3">
                            <h2 class="titleFont mb-0">
                                Volatile Periods
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Cushioned Through ETF Diversification Across
                                Uncorrelated Asset Classes.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold pt-3">
                            <i class="fa-solid fa-circle me-2 p"></i>
                            Explore More
                        </div>

                    </div>

                    <!-- Card 3 -->
                    <div class="hover-card d-flex flex-column p-3 border border-light"
                        style="flex:1;transition:.45s;cursor:pointer;overflow:hidden;">

                        <span class="icon icon-3"></span>

                        <div class="mt-3">
                            <h2 class="titleFont mb-0">
                                Market Catalysts
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Strategic Allocation Adjustments During Key Market
                                Events And Opportunities.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold pt-3">
                            <i class="fa-solid fa-circle me-2 p"></i>
                            Explore More
                        </div>

                    </div>

                    <!-- Card 4 -->
                    <div class="hover-card d-flex flex-column p-3 border border-light"
                        style="flex:1;transition:.45s;cursor:pointer;overflow:hidden;">

                        <span class="icon icon-4"></span>

                        <div class="mt-3">
                            <h2 class="titleFont mb-0">
                                Through It All
                            </h2>
                        </div>

                        <div class="hover-content mt-4">
                            <hr>
                            <p class="pFont mb-0">
                                Built To Navigate Multiple Market Cycles While
                                Focusing On Long-Term Wealth Creation.
                            </p>
                        </div>

                        <div class="mt-auto fw-semibold pt-3">
                            <i class="fa-solid fa-circle me-2 p"></i>
                            Explore More
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <style>
        .cta-gold-section {
            position: relative;
            overflow: hidden;
            background: #D6B770;
            color: #02181A;
        }

        .cta-gold-section::after {
            content: "";
            position: absolute;
            top: -180px;
            right: -120px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .22);
            box-shadow:
                0 0 0 80px rgba(255, 255, 255, .12),
                0 0 0 150px rgba(255, 255, 255, .06);
            z-index: 0;
        }

        .cta-gold-section .container {
            position: relative;
            z-index: 1;
        }

        .btn-ep-outline {
            border: 1px solid #02181A;
            color: #02181A;
            background: transparent;
            transition: .3s;
        }

        .btn-ep-outline:hover {
            background: #02181A;
            color: #fff;
        }
    </style>

    <section class="cta-gold-section py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center gy-4">

                <!-- Left Content -->
                <div class="col-md-8 text-center text-md-start">
                    <h2 class="titleFont fw-semibold display-6 mb-3 " style="color:#02181A;">
                        Invest with Intelligence.<br>
                        Compound with Confidence.
                    </h2>

                    <p class="pFont mb-0 w-md-75 fs-5 " style="color:#02181A">
                        WealthX is built for investors serious about long-term wealth.
                        Discipline, diversification, and expert guidance-in one coherent strategy.
                    </p>
                </div>

                <!-- Right Button -->
                <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                    <button class="btn btn-dark rounded-0 px-4 py-2 mt-4" style="color:#D6B770;">
                        Schedule a Consultation
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- Clients Should Expect -->
    <section>
        <div class="container">
            <div class="border">
                <!-- Top -->
                <div class="px-3 py-5 border border-start-0 border-end-0 border-light">
                    <div class="row g-3 justify-content-centermt-5 mb-4 mt-md-4 mb-md-0">
                        <div class="col-md-5">
                            <h2 class="display-6 titleFont fw-semibold text-body-emphasis">What Clients Should Expect From Us.</h2>
                        </div>
                        <div class="col-md-7">
                            <p class=" pFont fs-5">
                                A high-quality advisory relationship is defined by
                                clarity and service-not claims of easy or guaranteed profits.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Bottom -->
                <div class="row g-0 service-row">
                    <!-- Card 1 -->
                    <div class="col-md-3 col-8 flex-shrink-0 border-end border-bottom border-light p-3 d-flex flex-column service-card">
                        <img src="<?= $base ?>imgs/services/w13.svg" alt="Clear rationale" class="mb-5" style="width:80px;">
                        <h2 class="titleFont mb-3 text-body-emphasis ">Clear Rationale</h2>
                        <p class=" pFont mb-0">
                            Advice accompanied by understandable research,
                            investment context and material risk factors.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3 col-8 flex-shrink-0 border-end border-bottom border-light p-3 d-flex flex-column service-card">
                        <img src="<?= $base ?>imgs/services/w14.svg" alt="Timely Updates" class="mb-5" style="width:80px;">
                        <h2 class="titleFont mb-3 text-body-emphasis">Timely Updates</h2>
                        <p class="p pFont mb-0">
                            Relevant portfolio changes, alerts and research
                            developments communicated through official channels.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3 col-8 flex-shrink-0 border-end border-bottom border-light p-4 d-flex flex-column service-card">
                        <img src="<?= $base ?>imgs/services/w15.svg" alt="Risk Transparency" class="mb-5" style="width:60px;">
                        <h2 class="titleFont mb-3 text-body-emphasis">Risk Transparency</h2>
                        <p class="p pFont mb-0">
                            No guaranteed-return language, hidden certainty
                            or avoidance of the risks inherent in equity markets.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-3 col-8 flex-shrink-0 border-bottom border-light p-4 d-flex flex-column service-card">
                        <img src="<?= $base ?>imgs/services/w16.svg" alt="Accessible Support" class="mb-5" style="width:80px;">
                        <h2 class="titleFont mb-3 text-body-emphasis ">Accessible Support</h2>
                        <p class="p pFont mb-0 ">
                            Defined client-support, principal-officer and
                            grievance contacts for accountable communication.
                        </p>
                    </div>
                </div>
                <style>
                    .service-card {
                        transition: background-color .3s ease;
                    }

                    .service-card img {
                        transition: filter .3s ease;
                    }

                    /* Dark mode default: make icons white so they're visible against the dark bg */
                    [data-bs-theme="dark"] .service-card img {
                        filter: brightness(0) invert(1);
                    }

                    /* Desktop Hover */
                    @media (min-width:768px) {
                        .service-card:hover {
                            background: #02181A;
                        }

                        .service-card:hover h2,
                        .service-card:hover p {
                            color: #fff !important;
                        }

                        .service-card:hover img {
                            filter: brightness(0) saturate(100%) invert(79%) sepia(29%) saturate(550%) hue-rotate(355deg) brightness(90%) contrast(85%);
                        }
                    }

                    /* Mobile */
                    @media (max-width:767.98px) {
                        .service-card {
                            background: #02181A;
                        }

                        .service-card h2,
                        .service-card p {
                            color: #fff !important;
                        }

                        .service-card img {
                            filter: brightness(0) saturate(100%) invert(79%) sepia(29%) saturate(550%) hue-rotate(355deg) brightness(90%) contrast(85%);
                        }

                        div.row.service-row {
                            flex-wrap: nowrap !important;
                            overflow-x: auto !important;
                            overflow-y: hidden !important;
                            scrollbar-width: none;
                            -ms-overflow-style: none;
                        }

                        div.row.service-row::-webkit-scrollbar {
                            display: none;
                        }
                    }
                </style>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section>
        <div class="container">
            <div class="px-3 py-5 border border-start border-top-0 border-end border-light">
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
                        <style>
                            .accordion-button,
                            .accordion-button:focus {
                                box-shadow: none;
                                border: 0;
                            }
                        </style>
                        <div class="accordion accordion-flush rounded-0 overflow-hidden bg-transparent" id="midcapFAQ">
                            <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="headingOne"><button class="px-0 accordion-button fw-medium text-body bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Is this portfolio suitable for beginners?</button></h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#midcapFAQ">
                                    <div class="px-0 accordion-body text-body-secondary">Yes. The portfolio is structured and easy to follow, even if you're new to stock investing.</div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="headingTwo"><button class="px-0 accordion-button collapsed fw-medium text-body bg-transparent" style="box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Will I get updates when the portfolio changes?</button></h2>
                                <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                    <div class="px-0 accordion-body text-body-secondary">Yes. You will receive timely updates whenever rebalancing or stock changes are made.</div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="headingThree"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Is this a stock tip service?</button></h2>
                                <div id="collapseThree" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                    <div class="px-0 accordion-body text-body-secondary">No. This is a structured portfolio strategy with allocation guidance and disciplined management.</div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="headingFour"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How is this different from free advice online?</button></h2>
                                <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                    <div class="px-0 accordion-body text-body-secondary">Free advice is random and unstructured. This portfolio is research-driven, diversified, and actively monitored.</div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="headingFive"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Do I need a minimum investment amount?</button></h2>
                                <div id="collapseFive" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                    <div class="px-0 accordion-body text-body-secondary">No fixed minimum. You can allocate based on your capital size proportionally.</div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="headingSix"><button class="px-0 accordion-button collapsed fw-medium text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">I’m an NRI. Is this suitable for me?</button></h2>
                                <div id="collapseSix" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                    <div class="px-0 accordion-body text-body-secondary">Yes, NRIs can invest subject to regulatory guidelines.</div>
                                </div>
                            </div>
                            <div class="accordion-item bg-transparent border-0" style="border-bottom: medium;">
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