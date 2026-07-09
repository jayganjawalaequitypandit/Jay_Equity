<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">

    <title>EquityPandit Responsive Navbar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.equitypandit.com/etheme/vendor/fortawesome/font-awesome/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    </style>
</head>

<body class="">

    <!-- Header -->
    <header id="siteHeader" class="fixed-top border-bottom border-light">

        <nav
            class="navbar navbar-expand-xl py-0">
            <div class="container">
                <div class="row row-cols-auto justify-content-between w-100 position-relative">

                    <!-- Logo: mobile/tablet — normal flow, left aligned -->
                    <a
                        href="#home"
                        class="navbar-brand site-logo d-flex d-xl-none align-items-center py-0 me-0 text-white"
                        aria-label="EquityPandit Investment Advisor">
                        <span class="logo-full text-center">
                            <img src="./imgs/logo/logo.png" class="img-fluid ms-3" style="max-height: 40px;" />
                        </span>

                        <span class="logo-short d-none fs-3 fw-semibold lh-1">
                            <img src="./imgs/logo/icon.png" class="img-fluid ms-3" style="max-height: 25px;" />
                        </span>
                    </a>

                    <!-- Logo: desktop — absolutely centered via Bootstrap position utilities -->
                    <a
                        href="#home"
                        class="navbar-brand site-logo d-none d-xl-flex align-items-center text-white position-absolute top-50 start-50 translate-middle m-0 z-3"
                        aria-label="EquityPandit Investment Advisor">
                        <span class="logo-full text-center">
                            <img src="./imgs/logo/logo.png" class="img-fluid" style="max-height: 40px;" />
                        </span>

                        <span class="logo-short d-none fs-3 fw-semibold lh-1">
                            <img src="./imgs/logo/icon.png" class="img-fluid" style="max-height: 25px;" />
                        </span>
                    </a>

                    <!-- Mobile menu button -->
                    <button
                        class="navbar-toggler border-0 shadow-none ms-auto pe-0"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-theme="dark"
                        data-bs-target="#mainMenu"
                        aria-controls="mainMenu"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- One common menu for desktop and mobile -->
                    <div class="collapse navbar-collapse" id="mainMenu">

                        <div class="navbar-nav flex-xl-row align-items-xl-center w-100">

                            <!-- Left menu -->
                            <div class="d-flex flex-column flex-xl-row align-items-xl-center">
                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#community">
                                    <small>Services</small>
                                </a>

                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#services">
                                    <small>Portfolio</small>
                                </a>

                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#asset-management">
                                    <small>Multibagger</small>
                                </a>

                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#community">
                                    <small>WealthX</small>
                                </a>



                            </div>

                            <!-- Right menu -->
                            <div class="d-flex flex-column flex-xl-row align-items-xl-center ms-xl-auto">
                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#about">
                                    <small>About</small>
                                </a>
                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#contact">
                                    <small>Contact</small>
                                </a>
                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#careers">
                                    <small>Login</small>
                                </a>
                                <!-- CTA -->
                                <div class="d-grid d-xl-block ms-xl-3 mt-3 mt-xl-0 pb-3 pb-xl-0">
                                    <a
                                        class="btn btn-outline-light get-started-button rounded-0 text-nowrap w-auto"
                                        href="#get-started">
                                        Get Started
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <!-- Demo page content -->
    <main id="home">

        <section id="hero-section" class="position-relative overflow-hidden vh-100">
            <!-- Video Background -->
            <video
                autoplay
                muted
                loop
                playsinline
                class="position-absolute top-0 start-0 w-100 h-100"
                style="object-fit: cover; z-index: 0;">
                <source src="./imgs/skv2.mp4" type="video/mp4">
                <!-- <source src="https://stream.mux.com/XcI0196UEfua2kltVLB02flUWs02MoPHc5k/high.mp4" type="video/mp4"> -->
            </video>

            <!-- Dark overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 25%); z-index: 1;">
            </div>

            <!-- Content -->
            <div class="position-relative vh-100 d-flex flex-column" style="z-index: 2;">
                <div style="height: 100vh;"></div>
                <div class="row align-items-end ">
                    <div class="col-md-12">
                        <div class="px-3 pb-5 text-start text-md-center text-white titleFont">
                            <h1 class="fw-bold display-3">Clarity. <br class="d-block d-md-none" />Conviction. <br class="d-block d-md-none" />Compounding.</h1>
                            <p class="fs-3">Since 2005, EquityPandit guides investors with research-driven strategies.</p>
                        </div>
                        <!-- Press logos pinned to the bottom -->
                        <div class="d-flex px-3 align-items-center justify-content-start justify-content-md-center glass-bg overflow-x-auto gap-0 hide-scrollbar">
                            <div class="text-center text-white">
                                <p class="titleFont my-0 fst-italic" style="height: 40px; min-width: 100px; align-content: center;">Featured in</p>
                            </div>
                            <div class="text-center p-3 text-white">
                                <img src="./imgs/the-week.png" alt="The Week" style="height: 40px; width: auto;" />
                            </div>
                            <div class="text-center p-3 text-white">
                                <img src="./imgs/the-week.png" alt="The Week" style="height: 40px; width: auto;" />
                            </div>
                            <div class="text-center p-3 text-white">
                                <img src="./imgs/the-week.png" alt="The Week" style="height: 40px; width: auto;" />
                            </div>
                            <div class="text-center p-3 text-white">
                                <img src="./imgs/the-week.png" alt="The Week" style="height: 40px; width: auto;" />
                            </div>
                            <div class="text-center p-3 text-white">
                                <img src="./imgs/the-week.png" alt="The Week" style="height: 40px; width: auto;" />
                            </div>
                            <div class="text-center p-3 text-white">
                                <img src="./imgs/the-week.png" alt="The Week" style="height: 40px; width: auto;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="border-start border-end border-light">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <p class="display-1 mb-0 fw-bold text-secondary text-opacity-25 text-center py-3">Since 2005</p>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-3 col-6">
                            <div class="border border-start-0 border-light py-md-5 py-3 px-3 h-100">
                                <p class="display-4 fw-semibold d-inline-block ">20+</p>
                                <p class="fs-5">Years of Market<br />Expertise</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border border-start-0 border-light py-md-5 py-3 px-3 h-100">
                                <p class="display-4 fw-semibold d-inline-block ">1M+</p>
                                <p class="fs-5">Registered<br />Users</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border border-start-0 border-light py-md-5 py-3 px-3 h-100">
                                <p class="display-4 fw-semibold d-inline-block ">11+</p>
                                <p class="fs-5">National & International<br />Awards</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border-top border-bottom  border-light py-md-5 py-3 px-3 h-100">
                                <p class="display-4 fw-semibold d-inline-block ">SEBI</p>
                                <p class="fs-5">Registered Investment<br />Advisor</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="py-5 px-3 text-start text-md-center">
                                <p class="display-5 titleFont fw-semibold d-inline-block">Start Your wealth creation journey</p>
                                <p class="fs-5 titleFont">Invest with conviction using strategies built for growth, stability, and opportunity.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <style>
                                .image-content .sub-title {
                                    max-height: 0;
                                    margin: 0;
                                    opacity: 0;
                                    overflow: hidden;
                                    transform: translateY(10px);
                                    transition:
                                        max-height 0.4s ease,
                                        opacity 0.3s ease,
                                        transform 0.3s ease,
                                        margin 0.3s ease;
                                }

                                .image-box:hover .sub-title {
                                    max-height: 200px;
                                    margin-bottom: 1rem;
                                    opacity: 1;
                                    transform: translateY(0);
                                }
                            </style>
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s1.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0 w-75 bg-success-subtle p-3 text-light" data-bs-theme="dark">
                                    <img src="./imgs/logo/icon.png" class="img-fluid my-3" style="max-height: 35px;" />
                                    <p class="mb-1 titleFont fs-2 fw-bold">Portfolio</p>

                                    <p class="sub-title titleFont mb-3 fs-5">
                                        A carefully curated list of 18-20 high-potential stocks, backed by 20+ years of market expertise, designed to create long-term wealth.
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none fs-5">Know More</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s2.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0 w-75 bg-success-subtle p-3 text-light" data-bs-theme="dark">
                                    <img src="./imgs/logo/icon.png" class="img-fluid my-3" style="max-height: 35px;" />
                                    <p class="mb-1 titleFont fs-2 fw-bold">Multibagger</p>

                                    <p class="sub-title titleFont mb-3 fs-5">
                                        One high-growth stock every month for mid-term holding, focused on fundamentally strong businesses.
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none fs-5">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s3.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0 w-75 bg-success-subtle p-3 text-light" data-bs-theme="dark">
                                    <img src="./imgs/logo/icon.png" class="img-fluid my-3" style="max-height: 35px;" />
                                    <p class="mb-1 titleFont fs-2 fw-bold">WealthX</p>

                                    <p class="sub-title titleFont mb-3 fs-5">
                                        WealthX is a comprehensive equity investing service built to keep you aligned with opportunities across market cycles.
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none fs-5">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="border-start border-end border-light">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="py-5 px-3 text-start text-md-center">
                                <p class="display-5 titleFont fw-semibold d-inline-block">Why Choose Us?</p>
                                <p class="fs-5 titleFont">For nearly two decades, we’ve built a legacy of trust, transparency, and results. When you work with us, you gain more than just an investment plan—you gain a long-term partner committed to your financial success. Here’s why thousands of clients trust us to manage their investments:</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/business-image.jpg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0 bg-primary-subtle p-3 text-light" data-bs-theme="dark">
                                    <p class="titleFont fs-5 fw-bold">Experience You Can Trust</p>

                                    <p class="sub-title titleFont mb-3">
                                        With over 20+ years in the market, we have navigated all kinds of economic environments, and our insights give you an edge.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/business-image.jpg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0 bg-warning p-3 text-light" data-bs-theme="dark">
                                    <p class="titleFont fs-5 fw-bold">Data-Driven Insights</p>

                                    <p class="sub-title titleFont mb-3">
                                        Our strategies are powered by cutting-edge technology, real-time data, and deep market research, ensuring that every move is informed and strategic.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/business-image.jpg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0 bg-dark p-3 text-light" data-bs-theme="dark">
                                    <p class="titleFont fs-5 fw-bold">Client-Centered Approach</p>

                                    <p class="sub-title titleFont mb-3">
                                        We don’t just give you advice; we build a partnership. Our approach is personal, responsive, and designed around your unique needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/business-image.jpg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0 bg-danger-subtle p-3 text-light" data-bs-theme="dark">
                                    <p class="titleFont fs-5 fw-bold">Dedicated Support Every Step</p>

                                    <p class="sub-title titleFont mb-3">
                                        We’re here to guide you with ongoing support on anything, timely updates, and alerts to help you succeed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="border-start border-end border-light py-5">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-5">
                            <div class="px-3 py-md-5 pt-5 pb-0">
                                <p class="display-5 titleFont fw-semibold d-inline-block">National & International Awards</p>
                                <p class="titleFont fs-5">EquityPandit has consistently recognized by leading industry institution for innovation, research quality and investor education initiatives.</p>
                                <button class="btn btn-dark rounded-0">Let's Get Started</button>
                            </div>
                        </div>
                        <div class="col-md-7">
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
                                                                <span class="small text-muted mb-2">
                                                                    (<?= htmlspecialchars($award['year']) ?>)
                                                                </span>

                                                                <h3 class="h6 fw-bold mb-2 titleFont">
                                                                    <?= htmlspecialchars($award['title']) ?>
                                                                </h3>

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
                    </div>
                </div>
        </section>

        <section class="text-white" style="background-color: #c20029;">
            <div class="container">
                <div class="py-5 border-start border-end border-light">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="pb-md-5 text-start text-md-center">
                                <p class="display-5 titleFont fw-semibold d-inline-block">What the press has been saying</p>
                                <p class="fs-5 titleFont">EquityPandit Is A Contributor To The World’s Biggest Financial Portals.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s1.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0  bg-primary-subtle p-3 text-light" data-bs-theme="dark">
                                    <p class="mb-1 titleFont fs-2 fw-bold">Factset</p>

                                    <p class="sub-title titleFont mb-3 fs-5">
                                        A carefully curated list of 18-20 high-potential stocks, backed by 20+ years of market expertise, designed to create long-term wealth.
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none fs-5">Know More</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s2.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0  bg-primary-subtle p-3 text-light" data-bs-theme="dark">
                                    <p class="mb-1 titleFont fs-2 fw-bold">investing.com</p>

                                    <p class="sub-title titleFont mb-3 fs-5">
                                        One high-growth stock every month for mid-term holding, focused on fundamentally strong businesses.
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none fs-5">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="image-box position-relative overflow-hidden">
                                <img
                                    src="./imgs/services/s3.jpeg"
                                    class="img-fluid w-100"
                                    alt="Business">

                                <div class="image-content position-absolute bottom-0 start-0  bg-primary-subtle p-3 text-light" data-bs-theme="dark">
                                    <p class="mb-1 titleFont fs-2 fw-bold">Thomson Reuters</p>

                                    <p class="sub-title titleFont mb-3 fs-5">
                                        WealthX is a comprehensive equity investing service built to keep you aligned with opportunities across market cycles.
                                    </p>

                                    <a href="#" class="text-light border-bottom border-2 border-success text-decoration-none fs-5">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="px-3 py-5 border-start border-end border-light">
                    <div class="row g-2 justify-content-ceneter align-items-center">
                        <div class="col-md-5">
                            <p class="display-5 titleFont fw-semibold">Frequently Asked Questions</p>
                        </div>
                        <div class="col-md-7">
                            <div class="accordion accordion-flush rounded-3 overflow-hidden" id="midcapFAQ">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne"><button class="px-0 accordion-button  fw-semibold text-body bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Is this portfolio suitable for beginners?</button></h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Yes. The portfolio is structured and easy to follow, even if you're new to stock investing.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo"><button class="px-0 accordion-button collapsed fw-semibold text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Will I get updates when the portfolio changes?</button></h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Yes. You will receive timely updates whenever rebalancing or stock changes are made.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree"><button class="px-0 accordion-button collapsed fw-semibold text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Is this a stock tip service?</button></h2>
                                    <div id="collapseThree" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">No. This is a structured portfolio strategy with allocation guidance and disciplined management.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour"><button class="px-0 accordion-button collapsed fw-semibold text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How is this different from free advice online?</button></h2>
                                    <div id="collapseFour" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Free advice is random and unstructured. This portfolio is research-driven, diversified, and actively monitored.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive"><button class="px-0 accordion-button collapsed fw-semibold text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Do I need a minimum investment amount?</button></h2>
                                    <div id="collapseFive" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">No fixed minimum. You can allocate based on your capital size proportionally.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix"><button class="px-0 accordion-button collapsed fw-semibold text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">I’m an NRI. Is this suitable for me?</button></h2>
                                    <div id="collapseSix" class="accordion-collapse collapse " data-bs-parent="#midcapFAQ">
                                        <div class="px-0 accordion-body text-body-secondary">Yes, NRIs can invest subject to regulatory guidelines.</div>
                                    </div>
                                </div>
                                <div class="accordion-item" style="background-color: transparent; border-bottom: medium;">
                                    <h2 class="accordion-header" id="headingSeven"><button class="px-0 accordion-button collapsed fw-semibold text-body" style="background-color: transparent; box-shadow: none; border: medium;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Do you execute trades on my behalf?</button></h2>
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

        <footer class="bg-black text-white-50">
            <div class="container">
                <div class="px-3 py-5 border-start border-end border-light">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-12">
                            <p class="h4 text-white fw-bold mb-3 titleFont">EquityPandit</p>
                            <p>
                                <small>
                                    <b class="text-white">Disclaimer:</b> Investments in securities market are subject to market risks. Read all the related documents carefully before investing. Historical performance does not guarantee future performance. Registration granted by SEBI, enlistment as Investment Advisor with exchange, and certification from National Institute of Securities Markets (NISM) do not guarantee performance of the intermediary or provide any assurance of returns to investors.
                                </small>
                            </p>
                            <hr class="border-secondary my-4">
                            <p>
                                <small>
                                    EquityPandit Financial Services Private Limited <br />SEBI Registration No.: INA000006688 | Type of registration: Non-Individual | Validity: Perpetual | BSE Enlistment No.: 1684 | CIN: U67120RJ2013PTC041600
                                </small>
                            </p>
                            <p class="mb-0">
                                <small>
                                    Registered Address: 209 – The Galleria, Near Sanjeev Kumar Auditorium, Pal, Adajan, Surat, Gujarat – 395009
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>


    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('#siteHeader .navbar');
            const navInner = navbar.querySelector('.container');
            const fullLogos = document.querySelectorAll('.logo-full');
            const shortLogos = document.querySelectorAll('.logo-short');
            const mainMenu = document.getElementById('mainMenu');
            const menuLinks = mainMenu.querySelectorAll('a');

            let menuOpen = false;

            function updateNavbar() {
                const isScrolled = window.scrollY > 40;

                // Solid black bar once scrolled OR while the mobile menu is open
                // (so the links stay readable over a transparent header).
                navbar.classList.toggle('bg-black', isScrolled || menuOpen);
                navbar.classList.toggle('shadow', isScrolled);

                // Tighten the header on scroll using Bootstrap padding utilities.
                navInner.classList.toggle('py-3', !isScrolled);
                navInner.classList.toggle('py-2', isScrolled);

                // Switch full logo <-> short "EP" logo (both mobile + desktop copies).
                fullLogos.forEach(el => el.classList.toggle('d-none', isScrolled));
                shortLogos.forEach(el => el.classList.toggle('d-none', !isScrolled));
            }

            updateNavbar();

            window.addEventListener('scroll', updateNavbar, {
                passive: true
            });

            // Keep the header solid behind the open mobile menu.
            mainMenu.addEventListener('show.bs.collapse', function() {
                menuOpen = true;
                updateNavbar();
            });
            mainMenu.addEventListener('hidden.bs.collapse', function() {
                menuOpen = false;
                updateNavbar();
            });

            // Close mobile menu after clicking a menu link.
            menuLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 1200) {
                        bootstrap.Collapse.getOrCreateInstance(mainMenu, {
                            toggle: false
                        }).hide();
                    }
                });
            });
        });
    </script>

</body>

</html>

<?php require __DIR__ . '/../includes/footer.php'; ?>