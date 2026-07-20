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
                                <!-- <a
                                    class="nav-link menu-link text-white py-3 px-xl-4 py-xl-2 text-nowrap"
                                    href="<?= $base ?>about-us.php">
                                    <small>About</small>
                                </a> -->
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
                                <div class="d-flex align-items-center gap-2 ms-xl-3 mt-3 mt-xl-0 pb-3 pb-xl-0">

                                    <div class="dropdown">
                                        <button
                                            class="btn btn-outline-light border-0"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            aria-label="Accessibility Tools">
                                            <i class="fa-brands fa-accessible-icon fa-lg"></i>
                                        </button>

                                        <div id="accessibilityMenu" class="dropdown-menu dropdown-menu-end p-3 shadow border-0"
                                            style="min-width:320px;border-radius:12px;">

                                            <h5 class="text-center fw-bold mb-3">Accessibility Tools</h5>

                                            <div class="mb-3">
                                                <small class="fw-semibold">Theme</small>

                                                <div class="d-flex gap-2 mt-2">
                                                    <button id="lightThemeBtn" class="btn btn-outline-dark flex-fill">
                                                        <i class="fa fa-sun"></i><br>
                                                        <small>Light</small>
                                                    </button>

                                                    <button id="darkThemeBtn" class="btn btn-outline-dark flex-fill">
                                                        <i class="fa-solid fa-circle-half-stroke"></i><br>
                                                        <small>Dark</small>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <small class="fw-semibold">Text Size</small>

                                                <div class="d-flex gap-2 mt-2">
                                                    <button id="normalFontBtn" class="btn btn-outline-dark flex-fill">
                                                        A<br><small>Normal</small>
                                                    </button>

                                                    <button id="increaseFontBtn" class="btn btn-outline-dark flex-fill">
                                                        A+<br><small>Increase</small>
                                                    </button>

                                                    <button id="decreaseFontBtn" class="btn btn-outline-dark flex-fill">
                                                        A-<br><small>Decrease</small>
                                                    </button>
                                                </div>
                                            </div>

                                            <div>
                                                <small class="fw-semibold">Other Controls</small>

                                                <div class="d-flex gap-2 mt-2">

                                                    <button id="hideImagesBtn" class="btn btn-outline-dark flex-fill">
                                                        <i class="fa-solid fa-eye-slash"></i><br>
                                                        <small>Hide Images</small>
                                                    </button>

                                                    <button id="bigCursorBtn" class="btn btn-outline-dark flex-fill">
                                                        <i class="fa-solid fa-computer-mouse"></i><br>
                                                        <small>Big Cursor</small>
                                                    </button>

                                                    <button id="pauseAnimationBtn" class="btn btn-outline-dark flex-fill">
                                                        <i class="fa-solid fa-pause"></i><br>
                                                        <small>Pause Animations</small>
                                                    </button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const lightBtn = document.getElementById('lightThemeBtn');
            const darkBtn = document.getElementById('darkThemeBtn');
            const normalBtn = document.getElementById('normalFontBtn');
            const increaseBtn = document.getElementById('increaseFontBtn');
            const decreaseBtn = document.getElementById('decreaseFontBtn');

            const hideImagesBtn = document.getElementById('hideImagesBtn');
            const bigCursorBtn = document.getElementById('bigCursorBtn');
            const pauseAnimationBtn = document.getElementById('pauseAnimationBtn');

            const dropdown = document.querySelector('.dropdown-menu');

            // ------------------------
            // Theme
            // ------------------------

            function setActive(group, activeBtn) {
                group.forEach(btn => btn.classList.remove("active"));
                activeBtn.classList.add("active");
            }

            const themeButtons = [lightBtn, darkBtn];

            function applyTheme(theme) {

                if (theme === "dark") {

                    document.body.classList.add("bg-black", "text-white");

                    dropdown.style.background = "#1f1f1f";
                    dropdown.style.color = "#fff";

                    dropdown.querySelectorAll(".btn").forEach(btn => {
                        btn.classList.remove("btn-outline-dark");
                        btn.classList.add("btn-outline-light");
                    });

                    setActive(themeButtons, darkBtn);

                } else {

                    document.body.classList.remove("bg-black", "text-white");

                    dropdown.style.background = "#fff";
                    dropdown.style.color = "#000";

                    dropdown.querySelectorAll(".btn").forEach(btn => {
                        btn.classList.remove("btn-outline-light");
                        btn.classList.add("btn-outline-dark");
                    });

                    setActive(themeButtons, lightBtn);
                }

                localStorage.setItem("theme", theme);
            }

            lightBtn.addEventListener("click", () => applyTheme("light"));
            darkBtn.addEventListener("click", () => applyTheme("dark"));

            // ------------------------
            // Font Size
            // ------------------------

            const fontButtons = [normalBtn, increaseBtn, decreaseBtn];

            normalBtn.addEventListener("click", () => {
                document.documentElement.style.fontSize = "16px";
                localStorage.setItem("fontSize", "16px");
                setActive(fontButtons, normalBtn);
            });

            increaseBtn.addEventListener("click", () => {
                document.documentElement.style.fontSize = "18px";
                localStorage.setItem("fontSize", "18px");
                setActive(fontButtons, increaseBtn);
            });

            decreaseBtn.addEventListener("click", () => {
                document.documentElement.style.fontSize = "14px";
                localStorage.setItem("fontSize", "14px");
                setActive(fontButtons, decreaseBtn);
            });

            // ------------------------
            // Hide Images
            // ------------------------

            function updateToggleButton(button, enabled) {
                button.classList.toggle("active", enabled);
            }

            function toggleImages() {

                const hidden = document.body.dataset.hideImages === "true";
                const enabled = !hidden;

                document.querySelectorAll("img").forEach(img => {
                    img.style.visibility = enabled ? "hidden" : "visible";
                });

                document.body.dataset.hideImages = enabled;
                localStorage.setItem("hideImages", enabled);

                updateToggleButton(hideImagesBtn, enabled);
            }

            hideImagesBtn.addEventListener("click", toggleImages);

            // ------------------------
            // Big Cursor
            // ------------------------

            function toggleCursor() {

                const enabled = document.body.dataset.bigCursor === "true";
                const newState = !enabled;

                if (newState) {
                    document.body.style.cursor =
                        'url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2748%27 height=%2748%27 viewBox=%270 0 24 24%27 fill=%27black%27%3E%3Cpath d=%27M3 2L18 17H11L13 22L10 23L8 18H3V2Z%27/%3E%3C/svg%3E") 0 0, auto';
                } else {
                    document.body.style.cursor = "default";
                }

                document.body.dataset.bigCursor = newState;
                localStorage.setItem("bigCursor", newState);

                updateToggleButton(bigCursorBtn, newState);
            }

            bigCursorBtn.addEventListener("click", toggleCursor);

            // ------------------------
            // Pause Animations
            // ------------------------

            function toggleAnimations() {

                const paused = document.body.dataset.pauseAnimations === "true";
                const newState = !paused;

                document.querySelectorAll("*").forEach(el => {

                    if (newState) {
                        el.style.animationPlayState = "paused";
                        el.style.transition = "none";
                    } else {
                        el.style.animationPlayState = "";
                        el.style.transition = "";
                    }

                });

                document.body.dataset.pauseAnimations = newState;
                localStorage.setItem("pauseAnimations", newState);

                updateToggleButton(pauseAnimationBtn, newState);
            }

            pauseAnimationBtn.addEventListener("click", toggleAnimations);

            // ------------------------
            // Restore Settings
            // ------------------------

            applyTheme(localStorage.getItem("theme") || "light");

            const savedFont = localStorage.getItem("fontSize") || "16px";
            document.documentElement.style.fontSize = savedFont;

            if (savedFont === "16px") {
                setActive(fontButtons, normalBtn);
            } else if (savedFont === "18px") {
                setActive(fontButtons, increaseBtn);
            } else if (savedFont === "14px") {
                setActive(fontButtons, decreaseBtn);
            }

            if (localStorage.getItem("hideImages") === "true") {
                toggleImages();
            }

            if (localStorage.getItem("bigCursor") === "true") {
                toggleCursor();
            }

            if (localStorage.getItem("pauseAnimations") === "true") {
                toggleAnimations();
            }

        });
    </script>
    <main>