<?php
$pageTitle   = 'Careers';
$base        = '../';
$solidHeader = true;
require __DIR__ . '/../includes/header.php';
?>

<!-- Hero -->
<section class="position-relative overflow-hidden">

    <style>
        .contact-banner {
            width: 100%;
            height: 500px;
            object-fit: cover;
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
    <img src="<?= $base ?>imgs/s5.jpg"
        class="contact-banner"
        alt="Contact Banner">

    <!-- Dark Overlay -->
    <div class="banner-overlay"></div>

    <!-- Content -->
    <div class="banner-content">

        <!-- Vertical Border Lines -->
        <div class="container h-100 position-relative">
            <div class="border-start border-end border-light h-100"></div>

            <!-- Center Text -->
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3 mt-5">

                <div class="contact-subtitle titleFont mb-3 d-none">
                    • CAREERS
                </div>

                <h1 class="display-2 fw-bold text-white text-center titleFont mb-0">
                    Build Your Career With Us
                </h1>

            </div>
        </div>

    </div>

</section>

<!-- Career Section -->
<section>
    <div class="container">
        <!-- Heading -->
        <div class="border border-bottom-0 border-light px-3 py-5 text-center">
            <h2 class="display-6 fw-semibold titleFont">Careers</h2>
            <p class="mb-0 fs-6 pFont">
                Build your career with a research-driven equity advisory team.
            </p>
        </div>

        <!-- Content -->
        <div class="border border-light p-3 p-md-4">

            <div class="row align-items-center g-4 ">

                <!-- Left -->
                <div class="col-md-6 text-center text-lg-start">

                    <h2 class="display-6 fw-semibold titleFont mb-4">
                        Empower Your Journey
                        Build, Innovate,
                        Transform
                    </h2>

                    <img
                        src="<?= $base ?>imgs/faq6.png"
                        alt="Career"
                        class="img-fluid mb-4">

                    <div class="d-grid d-md-inline-block">
                        <button
                            class="btn text-white rounded-0  py-2"
                            style="background:#02181A;">
                            View Current Openings
                        </button>
                    </div>

                </div>

                <!-- Right -->
                <div class="col-md-6">
                    <div class="row g-0">

                        <div class="col-6 d-flex">
                            <div class="border bg-white p-5 text-center w-100 d-flex flex-column justify-content-center" style="min-height:220px;">
                                <h2 class="fw-bold mb-2">1 Million+</h2>
                                <p class="mb-0">Registered Users</p>
                            </div>
                        </div>

                        <div class="col-6 d-flex">
                            <div class="border  p-5 text-center text-white w-100 d-flex flex-column justify-content-center" style="min-height:220px;background-color:#02181A;">
                                <h2 class="fw-bold mb-2">20+</h2>
                                <p class="mb-0">Years of Experience</p>
                            </div>
                        </div>

                        <div class="col-6 d-flex">
                            <div class="border  p-5 text-center text-white w-100 d-flex flex-column justify-content-center" style="min-height:220px;background-color:#02181A;">
                                <h2 class="fw-bold mb-2">11+</h2>
                                <p class="mb-0">Prestigious Awards</p>
                            </div>
                        </div>

                        <div class="col-6 d-flex">
                            <div class="border bg-white p-5 text-center w-100 d-flex flex-column justify-content-center" style="min-height:220px;">
                                <h2 class="fw-bold mb-2">350+</h2>
                                <p class="mb-0">Research Algorithms</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- What We offer Section -->
<section>
    <div class="container">
        <!-- Heading -->
        <div class="border border-bottom-0 border-light px-3 py-5 text-center">
            <h2 class="display-6 fw-semibold titleFont">What We Offer</h2>
            <p class="mb-0 fs-6 pFont">
                A workplace designed to support your growth, nurture your wellbeing,
                and empower you to connect, thrive, and achieve success.
            </p>
        </div>

        <!-- Content -->
        <div class="border border-light border-bottom-0 pb-0">
            <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto hide-scrollbar">

                <!-- Card 1 -->
                <div class="col-md-4 col-10 flex-shrink-0"
                    data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="h-100 p-3 border border-light">
                        <img src="<?= $base ?>imgs/Vector4.svg" class="mb-3" alt="">
                        <h3 class="fs-3 titleFont fw-semibold">
                            5 Days Working
                        </h3>
                        <p class="mb-0 pFont">
                            Enjoy a healthy work-life balance with weekends off to recharge and spend time on personal pursuits.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4 col-10 flex-shrink-0"
                    data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="h-100 p-3 border border-light">
                        <img src="<?= $base ?>imgs/Vector6.svg" class="mb-3" alt="">
                        <h3 class="fs-3 titleFont fw-semibold">
                            Competitive Salary Packages
                        </h3>
                        <p class="mb-0 pFont">
                            We offer industry-leading salaries to ensure you feel valued for your contributions.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4 col-10 flex-shrink-0"
                    data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="h-100 p-3 border border-light">
                        <img src="<?= $base ?>imgs/Vector6.svg" class="mb-3" alt="">
                        <h3 class="fs-3 titleFont fw-semibold">
                            Collaborative Work Environment
                        </h3>
                        <p class="mb-0 pFont">
                            Join a culture of teamwork, innovation, and open communication.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-4 col-10 flex-shrink-0"
                    data-aos="fade-up"
                    data-aos-delay="400">
                    <div class="h-100 p-3 border border-light">
                        <img src="<?= $base ?>imgs/Vector4.svg" class="mb-3" alt="">
                        <h3 class="fs-3 titleFont fw-semibold">
                            Celebrations and Recognition

                        </h3>
                        <p class="mb-0 pFont">
                            Be part of regular team celebrations, rewards, and recognition programs.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4 col-10 flex-shrink-0"
                    data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="h-100 p-3 border border-light">
                        <img src="<?= $base ?>imgs/Vector6.svg" class="mb-3" alt="">
                        <h3 class="fs-3 titleFont fw-semibold">
                            Team Building <br> Activities
                        </h3>
                        <p class="mb-0 pFont">
                            Strengthen connections with fun team outings, retreats, and social events.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- Job Role -->
<section>
    <div class="container">
        <div class="border border-bottom-0 border-light px-3 py-5 text-center">
            <h2 class="display-6 fw-semibold titleFont">Our Openings</h2>
            <p class="mb-0 fs-6 pFont">
                Join our team and be part of something great. <br class="d-none d-md-block">Explore new opportunities, grow your skills, and build your future with us.

            </p>
        </div>
        <div class="border border-light">
            <div class="row g-3">
                <div class="col-md-12 p-4">
                    <h2 class="fw-bold text-dark titleFont mb-3 d-none">
                        Our Openings
                    </h2>
                    <div class="accordion" id="accordionExample">

                        <!-- Relationship Manager - Surat -->
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header" id="headingSurat">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSurat"
                                    aria-expanded="false"
                                    aria-controls="collapseSurat">

                                    <span class="fw-bold">
                                        Relationship Manager
                                    </span>

                                    <small class="text-muted ms-2">
                                        (5 Positions) - Surat
                                    </small>

                                </button>
                            </h2>

                            <div id="collapseSurat"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingSurat"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <div class="row g-4">

                                        <!-- Job Details -->
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-geo-alt"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Location
                                                    </small>
                                                    <p class="mb-0">
                                                        Surat, Gujarat, India
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-building"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Department
                                                    </small>
                                                    <p class="mb-0">
                                                        Sales & Relationship Management
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-people"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Vacancies
                                                    </small>
                                                    <p class="mb-0">
                                                        5 Positions
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Contact Us
                                                    </small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Email Us
                                                    </small>
                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-1 d-none d-md-block">
                                            <div class="vr h-100"></div>
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-7">
                                            <h3 class="h5 fw-bold titleFont">
                                                About the role
                                            </h3>

                                            <p>
                                                We are looking for skilled Relationship Managers to help us sell the learning products and services that our customers have grown to rely on. The ideal candidate will be a quick learner with strong negotiating skills and the ability to showcase our offerings in a compelling way. Often tasked with giving presentations, attending networking events, and attending trade shows, it's essential that our sales representative be personable and professional.
                                            </p>

                                            <h3 class="h5 fw-bold titleFont">
                                                What you'll do
                                            </h3>

                                            <ul>
                                                <li>Represent our company's products and services, starting with a deep and comprehensive understanding and following with consumer research to identify how our solutions meet customer needs.</li>
                                                <li>Maintain working relationships with existing clients to ensure exceptional service and identify potential new sales opportunities.</li>
                                                <li>Develop a strong understanding of the sales process, excel at generating sales, building relationships, and closing deals.</li>
                                            </ul>

                                            <h3 class="h5 fw-bold titleFont">
                                                What we are looking for
                                            </h3>

                                            <ul>
                                                <li>Experience: 0–3 years in Sales.</li>
                                                <li>NISM Certification is preferred.</li>
                                                <li>Excellent communication, interpersonal, problem-solving, presentation, and organizational skills.</li>
                                                <li>Extensive sales experience.</li>
                                                <li>Intuitive and insightful, particularly regarding human behavior.</li>
                                                <li>Ability to generate revenue by identifying pain points and suggesting suitable products or services.</li>
                                                <li>Resourceful, with outstanding research skills.</li>
                                                <li>Emboldened by challenges.</li>
                                                <li>Stock market knowledge is preferred.</li>
                                            </ul>

                                            <div class="d-flex align-items-center my-3 mt-5">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Contact Us
                                                    </small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Email Us
                                                    </small>
                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>

                                            <button type="button"
                                                class="btn btn-dark mt-3"
                                                onclick="showApplyModal('Relationship Manager - Surat')">
                                                Apply Now
                                            </button>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Relationship Manager - Mumbai -->
                        <div class="accordion-item my-3">

                            <h2 class="accordion-header" id="headingMumbai">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseMumbai"
                                    aria-expanded="false"
                                    aria-controls="collapseMumbai">

                                    <span class="fw-bold">
                                        Relationship Manager
                                    </span>

                                    <small class="text-muted ms-2">
                                        (5 Positions) - Mumbai
                                    </small>

                                </button>
                            </h2>


                            <div id="collapseMumbai"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingMumbai"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <div class="row g-4">

                                        <!-- Job Details -->
                                        <div class="col-md-4">

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-geo-alt"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Location
                                                    </small>
                                                    <p class="mb-0">
                                                        Mumbai, Maharashtra, India
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-building"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Department
                                                    </small>
                                                    <p class="mb-0">
                                                        Sales & Relationship Management
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-people"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Vacancies
                                                    </small>
                                                    <p class="mb-0">
                                                        5 Positions
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Contact Us
                                                    </small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Email Us
                                                    </small>
                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 d-none d-md-block">
                                            <div class="vr h-100"></div>
                                        </div>


                                        <!-- Description -->
                                        <div class="col-md-7">

                                            <h3 class="h5 fw-bold titleFont">
                                                About the role
                                            </h3>

                                            <p>
                                                We are looking for skilled Relationship Managers to help us sell the learning products and services that our customers have grown to rely on. The ideal candidate will be a quick learner with strong negotiating skills and the ability to showcase our offerings in a compelling way. Often tasked with giving presentations, attending networking events, and attending trade shows, it's essential that our sales representative be personable and professional.
                                            </p>


                                            <h3 class="h5 fw-bold titleFont">
                                                What you'll do
                                            </h3>

                                            <ul>
                                                <li>
                                                    Represent our company's products and services, starting with a deep and comprehensive understanding and following with consumer research to identify how our solutions meet customer needs.
                                                </li>

                                                <li>
                                                    Maintain working relationships with existing clients to ensure exceptional service and identification of potential new sales opportunities.
                                                </li>

                                                <li>
                                                    Understand the sales process, generate sales, build relationships, and close deals.
                                                </li>
                                            </ul>


                                            <h3 class="h5 fw-bold titleFont">
                                                What we are looking for
                                            </h3>


                                            <ul>
                                                <li>Experience: 0 - 3 years in Sales.</li>
                                                <li>NISM Certification is preferred.</li>
                                                <li>Excellent communication, interpersonal, problem-solving, presentation, and organizational skills.</li>
                                                <li>Extensive sales experience.</li>
                                                <li>Intuitive and insightful, particularly regarding human behavior.</li>
                                                <li>Ability to generate revenue by identifying pain points and suggesting suitable products or services.</li>
                                                <li>Resourceful, with outstanding research skills.</li>
                                                <li>Emboldened by challenges.</li>
                                                <li>Stock market knowledge is preferred.</li>
                                            </ul>


                                            <div class="d-flex align-items-center my-3 mt-5">

                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Contact Us
                                                    </small>

                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>

                                            </div>


                                            <div class="d-flex align-items-center my-3">

                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Email Us
                                                    </small>

                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>

                                            </div>


                                            <button type="button"
                                                class="btn btn-dark mt-3"
                                                onclick="showApplyModal('Relationship Manager - Mumbai')">
                                                Apply Now
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wealth Advisory - Mumbai -->
                        <div class="accordion-item my-3">

                            <h2 class="accordion-header" id="headingWealthMumbai">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseWealthMumbai"
                                    aria-expanded="false"
                                    aria-controls="collapseWealthMumbai">

                                    <span class="fw-bold">
                                        Wealth Advisor
                                    </span>

                                    <small class="text-muted ms-2">
                                        (5 Positions) - Mumbai
                                    </small>

                                </button>
                            </h2>


                            <div id="collapseWealthMumbai"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingWealthMumbai"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <div class="row g-4">

                                        <!-- Job Details -->
                                        <div class="col-md-3">

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-geo-alt"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Location</small>
                                                    <p class="mb-0">
                                                        Mumbai, Maharashtra, India
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-building"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Department</small>
                                                    <p class="mb-0">
                                                        Sales
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-people"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Vacancies</small>
                                                    <p class="mb-0">
                                                        5 Positions
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Contact Us</small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Email Us</small>
                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-1 d-none d-md-block">
                                            <div class="vr h-100"></div>
                                        </div>

                                        <!-- Description -->
                                        <div class="col-md-7">

                                            <h3 class="h5 fw-bold titleFont">
                                                About the role
                                            </h3>

                                            <p>Equitypandit is seeking a high-energy, people-first Wealth Advisor to represent the financial products and services that our customers have grown to rely on. The Wealth Advisor will handle client relationships and grow revenue.</p>
                                            <p>The role requires someone who understands markets, communicates effectively with clients, and closes business deals. The ideal candidate will be a quick learner with strong negotiating skills and the ability to showcase our offerings compellingly.</p>
                                            <h3 class="h5 fw-bold titleFont">
                                                What you'll do
                                            </h3>

                                            <ul>
                                                <li> Represent our company’s products and services, starting with a deep and comprehensive understanding and following with
                                                    consumer research to identify how our solutions meet needs. </li>
                                                <li>Research markets, identify potential clients, and explore new revenue channels.</li>
                                                <li> Create and implement strategies to increase sales, expand the customer base, and meet business targets. </li>
                                                <li> Develop strong, long-term relationships with clients, investors, and existing clients to ensure exceptional service and identification of potential new sales opportunities. </li>
                                                <li> Track market trends and customer needs to support business decisions. </li>
                                                <li> The sales representative will have a strong understanding of the sales process, excelling at generating sales, building relationships, and closing deals. </li>
                                                <li> Present financial products, conduct demos, and negotiate deals with clients.</li>

                                            </ul>

                                            <h3 class="h5 fw-bold titleFont">
                                                What we are looking for
                                            </h3>

                                            <ul>
                                                <li> NISM Certification XA (Level 1) & XB (Level 2) is mandatory.</li>
                                                <li>Excellent communication, interpersonal, problem-solving, presentation, and organizational skills and negotiation skills. </li>
                                                <li> Strong knowledge of capital markets and financial products.</li>
                                                <li>Extensive sales and relationship management experience. </li>
                                                <li> Acquire new clients through referrals, calls, and networking. </li>
                                                <li> Meet monthly and quarterly revenue targets.</li>
                                                <li>Ability to generate revenue by identifying pain points and suggesting suitable products or services</li>
                                                <li>Resourceful, with outstanding research skills.</li>
                                                <li>Target-driven and result-focused.</li>
                                            </ul>

                                            <div class="d-flex align-items-center my-3 mt-5">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Contact Us
                                                    </small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Email Us
                                                    </small>

                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>
                                            <button type="button"
                                                class="btn btn-dark mt-3">
                                                Apply Now
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wealth Advisory - Surat -->
                        <div class="accordion-item my-3">

                            <h2 class="accordion-header" id="headingWealthSurat">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseWealthSurat"
                                    aria-expanded="false"
                                    aria-controls="collapseWealthSurat">

                                    <span class="fw-bold">
                                        Wealth Advisor
                                    </span>

                                    <small class="text-muted ms-2">
                                        (5 Positions) - Surat
                                    </small>

                                </button>
                            </h2>


                            <div id="collapseWealthSurat"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingWealthSurat"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <div class="row g-4">

                                        <!-- Job Details -->
                                        <div class="col-md-3">

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-geo-alt"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Location</small>
                                                    <p class="mb-0">
                                                        Surat, Gujarat, India
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-building"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Department</small>
                                                    <p class="mb-0">
                                                        Sales
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-people"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Vacancies</small>
                                                    <p class="mb-0">
                                                        5 Positions
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Contact Us</small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Email Us</small>
                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-md-1 d-none d-md-block">
                                            <div class="vr h-100"></div>
                                        </div>


                                        <!-- Description -->
                                        <div class="col-md-7">

                                            <h3 class="h5 fw-bold titleFont">
                                                About the role
                                            </h3>

                                            <p>
                                                Equitypandit is seeking a high-energy, people-first Wealth Advisor to represent the financial products and services that our customers have grown to rely on. The Wealth Advisor will handle client relationships and grow revenue.
                                            </p>

                                            <p>
                                                The role requires someone who understands markets, communicates effectively with clients, and closes business deals. The ideal candidate will be a quick learner with strong negotiating skills and the ability to showcase our offerings compellingly.
                                            </p>


                                            <h3 class="h5 fw-bold titleFont">
                                                What you'll do
                                            </h3>

                                            <ul>
                                                <li>Represent our company’s products and services with a deep understanding of our offerings and customer requirements.</li>
                                                <li>Research markets, identify potential clients, and explore new revenue channels.</li>
                                                <li>Create and implement strategies to increase sales, expand the customer base, and meet business targets.</li>
                                                <li>Develop strong, long-term relationships with clients, investors, and existing customers.</li>
                                                <li>Track market trends and customer needs to support business decisions.</li>
                                                <li>Generate sales, build relationships, and successfully close deals.</li>
                                                <li>Present financial products, conduct demos, and negotiate deals with clients.</li>
                                            </ul>


                                            <h3 class="h5 fw-bold titleFont">
                                                What we are looking for
                                            </h3>

                                            <ul>
                                                <li>NISM Certification XA (Level 1) & XB (Level 2) is mandatory.</li>
                                                <li>Excellent communication, interpersonal, problem-solving, presentation, and negotiation skills.</li>
                                                <li>Strong knowledge of capital markets and financial products.</li>
                                                <li>Extensive sales and relationship management experience.</li>
                                                <li>Acquire new clients through referrals, calls, and networking.</li>
                                                <li>Meet monthly and quarterly revenue targets.</li>
                                                <li>Ability to generate revenue by identifying customer needs and suggesting suitable products or services.</li>
                                                <li>Resourceful, with outstanding research skills.</li>
                                                <li>Target-driven and result-focused.</li>
                                            </ul>


                                            <div class="d-flex align-items-center my-3 mt-5">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Contact Us
                                                    </small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Email Us
                                                    </small>

                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>


                                            <button type="button"
                                                class="btn btn-dark mt-3">
                                                Apply Now
                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Compliance Officer - Surat -->
                        <div class="accordion-item my-3">

                            <h2 class="accordion-header" id="headingComplianceSurat">
                                <button class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseComplianceSurat"
                                    aria-expanded="false"
                                    aria-controls="collapseComplianceSurat">

                                    <span class="fw-bold">
                                        Compliance Officer
                                    </span>

                                    <small class="text-muted ms-2">
                                        (1 Position) - Surat
                                    </small>

                                </button>
                            </h2>


                            <div id="collapseComplianceSurat"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingComplianceSurat"
                                data-bs-parent="#accordionExample">

                                <div class="accordion-body">

                                    <div class="row g-4">

                                        <!-- Job Details -->
                                        <div class="col-md-3">

                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-geo-alt"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Location</small>
                                                    <p class="mb-0">
                                                        Surat, Gujarat, India
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-building"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Department</small>
                                                    <p class="mb-0">
                                                        Compliance
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-people"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Vacancies</small>
                                                    <p class="mb-0">
                                                        1 Position
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Contact Us</small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">Email Us</small>
                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-md-1 d-none d-md-block">
                                            <div class="vr h-100"></div>
                                        </div>


                                        <!-- Description -->
                                        <div class="col-md-7">

                                            <h3 class="h5 fw-bold titleFont">
                                                About the role
                                            </h3>

                                            <p> quityPandit Financial Services Private Limited is seeking an experienced Compliance Officer who will handle end-to-end compliance activities, with a strong focus on SEBI regulations, statutory filings, and governance support. </p>
                                            <p> If you enjoy keeping things in order, spotting risks before they become problems, and ensuring the company stays on the right side of the law, this role is for you. </p>

                                            <h3 class="h5 fw-bold titleFont">
                                                What you'll do
                                            </h3>

                                            <ul>
                                                <li>Manage all SEBI-related compliances, filings, and disclosures.</li>
                                                <li>Prepare and file reports with stock exchanges and regulatory bodies.</li>
                                                <li>Maintain statutory registers, minutes, resolutions, and secretarial records.</li>
                                                <li>Support Board and Committee meetings — drafting agendas, notices, and minutes.</li>
                                                <li>Monitor changes in laws and ensure the company remains up to date and compliant.</li>
                                                <li>Coordinate with auditors, regulators, and internal teams for timely submissions.</li>
                                                <li>Review agreements, policies, and processes for compliance gaps.</li>
                                                <li>Assist in drafting corporate governance documents and internal compliance frameworks.</li>
                                                <li>Maintain documentation for inspections, audits, and internal reviews.</li>
                                            </ul>

                                            <h3 class="h5 fw-bold titleFont">
                                                What we are looking for
                                            </h3>

                                            <ul>
                                                <li>Qualified Company Secretary (CS) certification is a mus</li>
                                                <li>3+ years of experience with SEBI Regulations (Investment Advisor/Broking/PMS/AIF)..</li>
                                                <li>Good drafting, reporting, and communication skills.</li>
                                            </ul>


                                            <div class="d-flex align-items-center my-3 mt-5">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-telephone"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Contact Us
                                                    </small>
                                                    <p class="mb-0">
                                                        +91 70435 34934
                                                    </p>
                                                </div>
                                            </div>


                                            <div class="d-flex align-items-center my-3">
                                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                                    <i class="bi bi-envelope"></i>
                                                </div>

                                                <div class="ms-3">
                                                    <small class="text-muted">
                                                        Email Us
                                                    </small>

                                                    <p class="mb-0">
                                                        hr@equitypandit.com
                                                    </p>
                                                </div>
                                            </div>


                                            <button type="button"
                                                class="btn btn-dark mt-3">
                                                Apply Now
                                            </button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Apply Modal -->

                    <div class="modal fade"
                        id="applyModal"
                        tabindex="-1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        Apply for
                                        <span id="modal-position"></span>
                                    </h5>
                                    <button type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <form id="applyForm"
                                    action="apply-job.php"
                                    method="POST"
                                    enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="hidden"
                                            name="position"
                                            id="form-position">

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Name
                                                </label>
                                                <input type="text"
                                                    name="name"
                                                    class="form-control"
                                                    required>

                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Email
                                                </label>
                                                <input type="email"
                                                    name="email"
                                                    class="form-control"
                                                    required>

                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Mobile
                                                </label>
                                                <input type="tel"
                                                    name="mobile"
                                                    class="form-control"
                                                    maxlength="10"
                                                    required>

                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Experience (Years)
                                                </label>
                                                <input type="text"
                                                    name="experience"
                                                    class="form-control"
                                                    required>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Current CTC (LPA)
                                                </label>
                                                <input type="text"
                                                    name="currentCtc"
                                                    class="form-control"
                                                    required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Expected CTC (LPA)
                                                </label>
                                                <input type="text"
                                                    name="expectedCtc"
                                                    class="form-control"
                                                    required>

                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Notice Period (Days)
                                                </label>

                                                <input type="text"
                                                    name="noticePeriod"
                                                    class="form-control"
                                                    required>

                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">
                                                    Upload Resume (PDF only)
                                                </label>
                                                <input type="file"
                                                    name="resume"
                                                    class="form-control"
                                                    accept="application/pdf"
                                                    required>
                                            </div>

                                            <div class="col-12 mb-3">
                                                <label class="form-label">
                                                    Remarks
                                                </label>
                                                <textarea name="remarks"
                                                    class="form-control"
                                                    rows="4"
                                                    required></textarea>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">

                                        <button type="button"
                                            class="btn btn-secondary"
                                            data-bs-dismiss="modal">
                                            Close
                                        </button>

                                        <button type="submit"
                                            class="btn btn-dark">

                                            Apply

                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Bootstrap Icons -->
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<script>
    function showApplyModal(position) {
        document.getElementById("modal-position").innerText = position;
        document.getElementById("form-position").value = position;
        let modalElement = document.getElementById("applyModal");
        let modal = new bootstrap.Modal(modalElement);
        modal.show();
    }
</script>



<?php require __DIR__ . '/../includes/footer.php'; ?>