<?php
// Shared page shell — set these before including:
//   $pageTitle   = 'Portfolio';            // <title>
//   $base        = '../';                   // relative path back to web root ('' for root pages)
//   $solidHeader = true;                    // sub-pages: solid sticky header (no dark hero behind)
$base        = $base        ?? '';
$pageTitle   = $pageTitle   ?? 'Investment Advisor';
$solidHeader = $solidHeader ?? true;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= htmlspecialchars($pageTitle) ?> | EquityPandit Investment Advisor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://www.equitypandit.com/etheme/vendor/fortawesome/font-awesome/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <script src="https://kit.fontawesome.com/4789acf415.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Work Sans', sans-serif;
        }

        .border-light {
            border-color: #8a8a8a50 !important;
        }

        .titleFont {
            font-family: "Playfair Display", serif;
        }

        /* Glassmorphism — Bootstrap has no backdrop-filter utility */
        .glass-bg {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(14.1px);
            -webkit-backdrop-filter: blur(14.1px);
        }

        /* Horizontal scroll without a visible scrollbar — no Bootstrap utility for this */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Hover-reveal for image overlay cards (shared with home) */
        .image-content .sub-title {
            max-height: 0;
            margin: 0;
            opacity: 0;
            overflow: hidden;
            transform: translateY(10px);
            transition: max-height 0.4s ease, opacity 0.3s ease, transform 0.3s ease, margin 0.3s ease;
        }

        .image-box:hover .sub-title {
            max-height: 200px;
            margin-bottom: 1rem;
            opacity: 1;
            transform: translateY(0);
        }

        /* Desktop only */
        @media (min-width: 1200px) {

            .menu-link {
                position: relative;
                display: inline-flex;
                justify-content: center;
                align-items: center;
            }

            .menu-link::after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 4px;
                width: 0;
                height: 2px;
                background: #00DF9C;
                border-radius: 50px;
                transform: translateX(-50%);
                transition: width .3s ease-in-out;
            }

            .menu-link:hover::after,
            .menu-link.active::after {
                width: calc(100% - 24px);
            }
        }
    </style>
</head>

<body data-solid-header="<?= $solidHeader ? 'true' : 'false' ?>">

    <!-- Header -->
    <header id="siteHeader" class="fixed-top border-bottom border-light">
        <nav class="navbar navbar-expand-xl py-0">
            <div class="container">
                <div class="row row-cols-auto justify-content-between w-100 position-relative">

                    <!-- Logo: mobile/tablet — normal flow, left aligned -->
                    <a
                        href="<?= $base ?>index.php"
                        class="navbar-brand site-logo d-flex d-xl-none align-items-center py-0 me-0 text-white"
                        aria-label="EquityPandit Investment Advisor">
                        <span class="logo-full text-center">
                            <img alt="EquityPandit" src="<?= $base ?>imgs/logo/logo.png" class="img-fluid ms-3" style="max-height: 35px;" />
                        </span>

                        <span class="logo-short d-none fs-3 fw-semibold lh-1">
                            <img alt="EquityPandit" src="<?= $base ?>imgs/logo/icon.png" class="img-fluid ms-3" style="max-height: 35px;" />
                        </span>
                    </a>

                    <!-- Logo: desktop — absolutely centered via Bootstrap position utilities -->
                    <a
                        href="<?= $base ?>index.php"
                        class="navbar-brand site-logo d-none d-xl-flex align-items-center text-white position-absolute top-50 start-50 translate-middle m-0 z-3"
                        aria-label="EquityPandit Investment Advisor">
                        <span class="logo-full text-center">
                            <img alt="EquityPandit" src="<?= $base ?>imgs/logo/logo.png" class="img-fluid" style="max-height: 35px;" />
                        </span>

                        <span class="logo-short d-none fs-3 fw-semibold lh-1">
                            <img alt="EquityPandit" src="<?= $base ?>imgs/logo/icon.png" class="img-fluid" style="max-height: 35px;" />
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
                                    href="<?= $base ?>index.php">
                                    <small>Home</small>
                                </a>

                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="<?= $base ?>services/portfolio.php">
                                    <small>Portfolio</small>
                                </a>

                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="<?= $base ?>services/multibagger.php">
                                    <small>Multibagger</small>
                                </a>

                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="<?= $base ?>services/wealthx.php">
                                    <small>WealthX</small>
                                </a>
                            </div>

                            <!-- Right menu -->
                            <div class="d-flex flex-column flex-xl-row align-items-xl-center ms-xl-auto">
                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="<?= $base ?>about-us.php">
                                    <small>About</small>
                                </a>
                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="<?= $base ?>contact-us.php">
                                    <small>Contact Us</small>
                                </a>
                                <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="#careers">
                                    <small>Login</small>
                                </a>
                                <!-- CTA -->
                                <div class="d-grid d-xl-block ms-xl-3 mt-3 mt-xl-0 pb-3 pb-xl-0">
                                    <a
                                        class="btn btn-outline-light rounded-0 text-nowrap w-auto"
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

    <!-- Bootstrap JavaScript -->
    <!-- <script defer
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script> -->

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

    <main>