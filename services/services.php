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

    <section class="">
        <!-- Full Width Image -->
        <div class="container-fluid p-0 position-relative">
            <div class="py-5 pb-4" style="background:#02181A;">
            </div>
        </div>
        <div class="container py-5">

            <!-- Heading -->
            <div class="text-center mb-3">

                <h1 class="display-6 fw-semibold titleFont">
                    For an Individuals
                </h1>

                <!-- <p class="text-secondary pFont mb-0">
                    Choose the investment solution that best suits your financial goals.
                </p> -->

            </div>

            <div class="row g-3 pFont ">

                <!-- Service 1 -->
                <div class="col-md-4">

                    <div class="card h-100 border-2 rounded-0"
                        style="border-color:#FFC107;">

                        <div class="card-header border-0 p-3 bg-warning-subtle">

                            <h4 class="fw-bold mb-1">
                                Alpha India Portfolio
                            </h4>

                            <p class="small text-secondary mb-0">
                                Stock portfolio for long-term investments
                            </p>

                        </div>

                        <div class="card-body p-3 d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h6 class="fw-bold mb-0">
                                    Key Features
                                </h6>

                                <a href="#" class="small text-decoration-none">
                                    View Details
                                </a>

                            </div>

                            <h5 class="fw-semibold mb-3">
                                High Growth Stocks
                            </h5>

                            <p class="text-secondary">
                                Carefully selected companies with long-term growth potential backed by extensive research.
                            </p>

                            <ul class="ps-3 mb-4">
                                <li class="mb-2">Diversified Portfolio</li>
                                <li class="mb-2">Quarterly Rebalancing</li>
                                <li class="mb-2">Research Reports</li>
                                <li class="mb-2">Real-time Dashboard Updates</li>
                            </ul>

                            <div class="mt-auto">

                                <a href="#"
                                    class="btn btn-dark w-100 py-2">
                                    View Details & Pricing
                                </a>

                            </div>

                        </div>

                        <div class="card-footer bg-white text-center py-3">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

                <!-- Service 2 -->
                <div class="col-md-4">

                    <div class="card h-100 border-2 rounded-0"
                        style="border-color:#0D6EFD;">

                        <div class="card-header border-0 p-3 bg-primary-subtle">

                            <h4 class="fw-bold mb-1">
                                Multibagger Picks
                            </h4>

                            <p class="small text-secondary mb-0">
                                One quality stock recommendation every Mth.
                            </p>

                        </div>

                        <div class="card-body p-3 d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h6 class="fw-bold mb-0">
                                    Key Features
                                </h6>

                                <a href="#" class="small text-decoration-none">
                                    View Details
                                </a>

                            </div>

                            <h5 class="fw-semibold mb-3">
                                Monthly Stock Picks
                            </h5>

                            <p class="text-secondary">
                                Receive one fundamentally strong company every month after detailed market research.
                            </p>

                            <ul class="ps-3 mb-4">
                                <li class="mb-2">One Stock Every Month</li>
                                <li class="mb-2">Mid-term Investment Focus</li>
                                <li class="mb-2">Research-backed Picks</li>
                                <li class="mb-2">Portfolio Tracking</li>
                            </ul>

                            <div class="mt-auto">

                                <a href="#"
                                    class="btn btn-dark w-100 py-2">
                                    View Details & Pricing
                                </a>

                            </div>

                        </div>

                        <div class="card-footer bg-white text-center py-3">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

                <!-- Service 3 -->
                <div class="col-md-4 d-none">

                    <div class="card h-100 border-2 rounded-0"
                        style="border-color:#6F42C1;">

                        <div class="card-header border-0 p-3"
                            style="background:#F1EAFF;">

                            <h4 class="fw-bold mb-1">
                                WealthX
                            </h4>

                            <p class="small text-secondary mb-0">
                                Personalized wealth management services
                            </p>

                        </div>

                        <div class="card-body p-3 d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h6 class="fw-bold mb-0">
                                    Key Features
                                </h6>

                                <a href="#" class="small text-decoration-none">
                                    View Details
                                </a>

                            </div>

                            <h5 class="fw-semibold mb-3">
                                Wealth Planning
                            </h5>

                            <p class="text-secondary">
                                Personalized strategies designed to build and preserve wealth over the long term.
                            </p>

                            <ul class="ps-3 mb-4">
                                <li class="mb-2">Financial Planning</li>
                                <li class="mb-2">Goal-based Investing</li>
                                <li class="mb-2">Tax Planning</li>
                                <li class="mb-2">Dedicated Relationship Manager</li>
                            </ul>

                            <div class="mt-auto">

                                <a href="#"
                                    class="btn btn-dark w-100 py-2">
                                    View Details & Pricing
                                </a>

                            </div>

                        </div>

                        <div class="card-footer bg-white text-center py-3">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Heading 2 -->
            <div class="text-center mb-3 mt-5">

                <h1 class="display-6 fw-semibold titleFont">
                    For HNI’s and Ultra HNI’s
                </h1>

                <!-- <p class="text-secondary pFont mb-0">
                    Choose the investment solution that best suits your financial goals.
                </p> -->

            </div>

            <div class="row g-3 pFont ">

                <!-- Service 1 -->
                <div class="col-md-4 d-none">

                    <div class="card h-100 border-2 rounded-0"
                        style="border-color:#FFC107;">

                        <div class="card-header border-0 p-3 bg-warning-subtle">

                            <h4 class="fw-bold mb-1">
                                Alpha India Portfolio
                            </h4>

                            <p class="small text-secondary mb-0">
                                Stock portfolio for long-term investments
                            </p>

                        </div>

                        <div class="card-body p-3 d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h6 class="fw-bold mb-0">
                                    Key Features
                                </h6>

                                <a href="#" class="small text-decoration-none">
                                    View Details
                                </a>

                            </div>

                            <h5 class="fw-semibold mb-3">
                                High Growth Stocks
                            </h5>

                            <p class="text-secondary">
                                Carefully selected companies with long-term growth potential backed by extensive research.
                            </p>

                            <ul class="ps-3 mb-4">
                                <li class="mb-2">Diversified Portfolio</li>
                                <li class="mb-2">Quarterly Rebalancing</li>
                                <li class="mb-2">Research Reports</li>
                                <li class="mb-2">Real-time Dashboard Updates</li>
                            </ul>

                            <div class="mt-auto">

                                <a href="#"
                                    class="btn btn-dark w-100 py-2">
                                    View Details & Pricing
                                </a>

                            </div>

                        </div>

                        <div class="card-footer bg-white text-center py-3">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

                <!-- Service 2 -->
                <div class="col-md-4 d-none">

                    <div class="card h-100 border-2 rounded-0"
                        style="border-color:#0D6EFD;">

                        <div class="card-header border-0 p-3 bg-primary-subtle">

                            <h4 class="fw-bold mb-1">
                                Multibagger Picks
                            </h4>

                            <p class="small text-secondary mb-0">
                                One quality stock recommendation every Mth.
                            </p>

                        </div>

                        <div class="card-body p-3 d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h6 class="fw-bold mb-0">
                                    Key Features
                                </h6>

                                <a href="#" class="small text-decoration-none">
                                    View Details
                                </a>

                            </div>

                            <h5 class="fw-semibold mb-3">
                                Monthly Stock Picks
                            </h5>

                            <p class="text-secondary">
                                Receive one fundamentally strong company every month after detailed market research.
                            </p>

                            <ul class="ps-3 mb-4">
                                <li class="mb-2">One Stock Every Month</li>
                                <li class="mb-2">Mid-term Investment Focus</li>
                                <li class="mb-2">Research-backed Picks</li>
                                <li class="mb-2">Portfolio Tracking</li>
                            </ul>

                            <div class="mt-auto">

                                <a href="#"
                                    class="btn btn-dark w-100 py-2">
                                    View Details & Pricing
                                </a>

                            </div>

                        </div>

                        <div class="card-footer bg-white text-center py-3">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

                <!-- Service 3 -->
                <div class="col-md-4">

                    <div class="card h-100 border-2 rounded-0"
                        style="border-color:#6F42C1;">

                        <div class="card-header border-0 p-3"
                            style="background:#F1EAFF;">

                            <h4 class="fw-bold mb-1">
                                WealthX
                            </h4>

                            <p class="small text-secondary mb-0">
                                Personalized wealth management services
                            </p>

                        </div>

                        <div class="card-body p-3 d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h6 class="fw-bold mb-0">
                                    Key Features
                                </h6>

                                <a href="#" class="small text-decoration-none">
                                    View Details
                                </a>

                            </div>

                            <h5 class="fw-semibold mb-3">
                                Wealth Planning
                            </h5>

                            <p class="text-secondary">
                                Personalized strategies designed to build and preserve wealth over the long term.
                            </p>

                            <ul class="ps-3 mb-4">
                                <li class="mb-2">Financial Planning</li>
                                <li class="mb-2">Goal-based Investing</li>
                                <li class="mb-2">Tax Planning</li>
                                <li class="mb-2">Dedicated Relationship Manager</li>
                            </ul>

                            <div class="mt-auto">

                                <a href="#"
                                    class="btn btn-dark w-100 py-2">
                                    View Details & Pricing
                                </a>

                            </div>

                        </div>

                        <div class="card-footer bg-white text-center py-3">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

                <!-- Service 3 -->
                <div class="col-md-4">

                    <div class="card h-100 border-2 rounded-0"
                        style="border-color:#DC3545;">

                        <div class="card-header border-0 p-3"
                            style="background:#F1EAFF;">

                            <h4 class="fw-bold mb-1">
                                WealthX plus
                            </h4>

                            <p class="small text-secondary mb-0">
                                Personalized wealth management services
                            </p>

                        </div>

                        <div class="card-body p-3 d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center mb-3">

                                <h6 class="fw-bold mb-0">
                                    Key Features
                                </h6>

                                <a href="#" class="small text-decoration-none">
                                    View Details
                                </a>

                            </div>

                            <h5 class="fw-semibold mb-3">
                                Wealth Planning
                            </h5>

                            <p class="text-secondary">
                                Personalized strategies designed to build and preserve wealth over the long term.
                            </p>

                            <ul class="ps-3 mb-4">
                                <li class="mb-2">Financial Planning</li>
                                <li class="mb-2">Goal-based Investing</li>
                                <li class="mb-2">Tax Planning</li>
                                <li class="mb-2">Dedicated Relationship Manager</li>
                            </ul>

                            <div class="mt-auto">

                                <a href="#"
                                    class="btn btn-dark w-100 py-2">
                                    View Details & Pricing
                                </a>

                            </div>

                        </div>

                        <div class="card-footer bg-white text-center py-3">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Heading 3 -->
            <div class="text-center mb-3 mt-5">

                <h1 class="display-6 fw-semibold titleFont">
                    Family Offices & Institutional
                </h1>

                <!-- <p class="text-secondary pFont mb-0">
                    Choose the investment solution that best suits your financial goals.
                </p> -->

            </div>

            <div class="row g-3 pFont ">


                <!-- Service 3 -->
                <div class="col-md-4">

                    <div class="card h-100 border-2 rounded-0 overflow-hidden">

                        <img src="../imgs/fai.jpg"
                            alt="Family Offices & Institutional"
                            class="card-img-top rounded-0"
                            style="height:250px; object-fit:cover;">

                        <div class="card-body d-flex flex-column">

                            <ul class="ps-3">
                                <li class="mb-2">Customized Equity Advisory</li>
                                <li class="mb-2">Institutional Portfolio Management</li>
                                <li class="mb-2">Research-Driven Investment Strategies</li>
                                <li class="mb-2">Risk & Asset Allocation Planning</li>
                                <li class="mb-2">Long-Term Wealth Preservation</li>
                                <li class="mb-2">Dedicated Advisory Support</li>
                            </ul>

                        </div>

                        <div class="card-footer bg-white text-center py-3 d-none">

                            <small>
                                For Any Query Contact

                                <a href="tel:+918000816688"
                                    class="text-decoration-none">
                                    +91 8000 816 688
                                </a>

                            </small>

                        </div>

                    </div>

                </div>

                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="card  h-100 rounded-0">
                        <div class="card-body p-4 p-lg-5 d-flex flex-column justify-content-center">

                            <h3 class="mb-4 titleFont text-center text-md-start">
                                Send Us A Message
                            </h3>

                            <form>

                                <div class="form-floating mb-3">
                                    <input
                                        type="text"
                                        class="form-control border-0 border-bottom rounded-0 shadow-none"
                                        id="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name*</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input
                                        type="email"
                                        class="form-control border-0 border-bottom rounded-0 shadow-none"
                                        id="email"
                                        placeholder="Email Address">
                                    <label for="email">Email Address*</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input
                                        type="tel"
                                        class="form-control border-0 border-bottom rounded-0 shadow-none"
                                        id="phone"
                                        placeholder="Phone Number">
                                    <label for="phone">Phone Number*</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select
                                        class="form-select border-0 border-bottom rounded-0 shadow-none"
                                        id="subject">
                                        <option selected>Choose Subject</option>
                                        <option>Portfolio</option>
                                        <option>Multibagger</option>
                                        <option>WealthX</option>
                                    </select>
                                    <label for="subject">Choose Subject*</label>
                                </div>

                                <div class="form-floating mb-4 d-none">
                                    <textarea
                                        class="form-control border-0 border-bottom rounded-0 shadow-none"
                                        id="message"
                                        placeholder="Type Message"
                                        style="height:120px"></textarea>
                                    <label for="message">Type Message*</label>
                                </div>

                                <button
                                    type="submit"
                                    class="btn rounded-0 w-100 text-white py-2"
                                    style="background:#02181A;">
                                    Send Message
                                </button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <?php require __DIR__ . '/../includes/footer.php'; ?>

</body>

</html>