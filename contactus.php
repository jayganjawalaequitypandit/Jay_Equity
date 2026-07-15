<?php
$pageTitle = 'Multibagger';
$base = '../';
$solidHeader = true;
require __DIR__ . '/../includes/header.php';
?>
<!-- Hero -->
<section class="position-relative overflow-hidden">

    <style>
        .contact-banner {
            width: 100%;
            height: 600px;
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
    <img src="<?= $base ?>imgs/s3.png"
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
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3">

                <div class="contact-subtitle titleFont mb-3">
                    • CONTACT
                </div>

                <h1 class="contact-title titleFont mb-0">
                    Connect With Us
                </h1>

            </div>
        </div>

    </div>

</section>

<section>
    <div class="container">
        <div class="border border-light border-bottom">
            <div class="row align-items-stretch  ">

                <!-- Left Image -->
                <div class="col-12 col-md-5 order-2 order-md-1">
                    <div class="h-100">
                        <img
                            src="imgs/contact.png"
                            alt="Contact"
                            class="img-fluid w-100 h-100 object-fit-cover">
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-12 col-md-5 order-1 order-md-2 mx-auto px-4 py-4 px-md-0 py-md-5">
                    <div class="h-100 d-flex flex-column justify-content-center">

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

                            <div class="form-floating mb-4">
                                <textarea
                                    class="form-control border-0 border-bottom rounded-0 shadow-none"
                                    id="message"
                                    placeholder="Type Message"
                                    style="height:120px"></textarea>
                                <label for="message">Type Message*</label>
                            </div>

                            <button
                                type="submit"
                                class="btn rounded-0 w-100 text-white py-2 mb-4"
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


<!-- Office Locations -->
<section>
    <div class="container">
        <div class="px-3 py-5 border border-top-0  border-light">
            <div class="row g-3 justify-content-center">
                <div class="col-md-10">
                    <div class="text-start text-md-center">
                        <h2 class="display-6 titleFont fw-semibold">Our Offices</h2>
                        <p class="fs-6 pFont mb-0"> Visit our nearest office or contact us anytime.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-top-0 border-light">
            <style>
                .office-card {
                    transition: background-color 0.3s ease, color 0.3s ease;
                    cursor: pointer;
                }

                .office-card:hover {
                    background: #02181A !important;
                    color: #fff !important;
                }

                .office-card:hover i,
                .office-card:hover h5,
                .office-card:hover p,
                .office-card:hover a {
                    color: #fff !important;
                }

                .office-card i,
                .office-card h5,
                .office-card p,
                .office-card a {
                    transition: color 0.3s ease;
                }
            </style>

            <div class="row g-0">

                <!-- Gujarat -->
                <div class="col-md-3">
                    <div class="card office-card h-100 text-center rounded-0 border-light">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <i class="fa-solid fa-location-dot fs-2 mb-3"></i>

                            <h5 class="mb-3">Gujarat</h5>

                            <p class="small mb-0">
                                209-The Galleria<br>
                                Near Sanjeev Kumar Auditorium<br>
                                Pal, Adajan<br>
                                Surat - 395009
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Rajasthan -->
                <div class="col-md-3">
                    <div class="card office-card h-100 text-center rounded-0 border-light">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <i class="fa-solid fa-location-dot fs-2 mb-3"></i>

                            <h5 class="mb-3">Rajasthan</h5>

                            <p class="small mb-0">
                                A-488 Vidhyut Nagar<br>
                                Ajmer Road<br>
                                Jaipur - 302019
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-3">
                    <div class="card office-card h-100 text-center rounded-0 border-light">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <i class="fa-solid fa-envelope fs-2 mb-3"></i>

                            <h5 class="mb-3">Email</h5>

                            <p class="mb-0">
                                <a href="mailto:support@equitypandit.com"
                                    class="text-decoration-none text-dark">
                                    support@equitypandit.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-3">
                    <div class="card office-card h-100 text-center rounded-0 border-light">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <i class="fa-solid fa-phone fs-2 mb-3"></i>

                            <h5 class="mb-3">Call Us</h5>

                            <p class="mb-0">
                                <a href="tel:+918000816688"
                                    class="text-decoration-none text-dark">
                                    +91 8000816688
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>

<!-- Google Map -->

<section>
    <div class="container">
        <div class="px-3 py-5 border border-top-0 border-light">
            <div class="row g-3 justify-content-center">
                <div class="col-md-10">
                    <div class="text-start text-md-center">
                        <h2 class="display-6 titleFont fw-semibold">Find Us</h2>
                        <p class="fs-6 pFont mb-0"> Visit our office and connect with us in person, or use Google Maps for quick and easy directions to our location.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-top-0 border-light">
            <div class="ratio ratio-21x9  overflow-hidden shadow-sm">
                <iframe
                    src="https://www.google.com/maps?q=209%20The%20Galleria%20Pal%20Surat&output=embed"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section>
    <div class="container">
        <div class="px-4 py-5 border border-top-0 border-start border-end border-light">
            <div class="row g-4 align-items-center">

                <!-- Left Side -->
                <div class="col-md-6">
                    <h2 class="display-6 titleFont fw-semibold d-inline-block">
                        Frequently Asked Questions
                    </h2>
                    <p class="fs-6 pFont mb-3">
                        Visit our FAQ section for answers to common queries.
                    </p>

                    <img
                        src="../imgs/faq2.svg"
                        class="img-fluid"
                        alt="background"
                        style="width:90%; max-width:90%;">
                </div>

                <!-- Right Side -->
                <div class="col-md-6">
                    <div class="accordion accordion-flush rounded-0 overflow-hidden" id="midcapFAQ">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="px-0 accordion-button fw-medium text-body bg-transparent"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Is this portfolio suitable for beginners?
                                </button>
                            </h2>
                            <div id="collapseOne"
                                class="accordion-collapse collapse show"
                                data-bs-parent="#midcapFAQ">
                                <div class="px-0 accordion-body text-body-secondary">
                                    Yes. The portfolio is structured and easy to follow, even if you're new to stock investing.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="px-0 accordion-button collapsed fw-medium text-body"
                                    style="background-color: transparent; box-shadow: none; border: none;"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Will I get updates when the portfolio changes?
                                </button>
                            </h2>
                            <div id="collapseTwo"
                                class="accordion-collapse collapse"
                                data-bs-parent="#midcapFAQ">
                                <div class="px-0 accordion-body text-body-secondary">
                                    Yes. You will receive timely updates whenever rebalancing or stock changes are made.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="px-0 accordion-button collapsed fw-medium text-body"
                                    style="background-color: transparent; box-shadow: none; border: none;"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Is this a stock tip service?
                                </button>
                            </h2>
                            <div id="collapseThree"
                                class="accordion-collapse collapse"
                                data-bs-parent="#midcapFAQ">
                                <div class="px-0 accordion-body text-body-secondary">
                                    No. This is a structured portfolio strategy with allocation guidance and disciplined management.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="px-0 accordion-button collapsed fw-medium text-body"
                                    style="background-color: transparent; box-shadow: none; border: none;"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour"
                                    aria-expanded="false"
                                    aria-controls="collapseFour">
                                    How is this different from free advice online?
                                </button>
                            </h2>
                            <div id="collapseFour"
                                class="accordion-collapse collapse"
                                data-bs-parent="#midcapFAQ">
                                <div class="px-0 accordion-body text-body-secondary">
                                    Free advice is random and unstructured. This portfolio is research-driven, diversified, and actively monitored.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="px-0 accordion-button collapsed fw-medium text-body"
                                    style="background-color: transparent; box-shadow: none; border: none;"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive"
                                    aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Do I need a minimum investment amount?
                                </button>
                            </h2>
                            <div id="collapseFive"
                                class="accordion-collapse collapse"
                                data-bs-parent="#midcapFAQ">
                                <div class="px-0 accordion-body text-body-secondary">
                                    No fixed minimum. You can allocate based on your capital size proportionally.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="px-0 accordion-button collapsed fw-medium text-body"
                                    style="background-color: transparent; box-shadow: none; border: none;"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix"
                                    aria-expanded="false"
                                    aria-controls="collapseSix">
                                    I’m an NRI. Is this suitable for me?
                                </button>
                            </h2>
                            <div id="collapseSix"
                                class="accordion-collapse collapse"
                                data-bs-parent="#midcapFAQ">
                                <div class="px-0 accordion-body text-body-secondary">
                                    Yes, NRIs can invest subject to regulatory guidelines.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" style="background-color: transparent; border-bottom: none;">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="px-0 accordion-button collapsed fw-medium text-body"
                                    style="background-color: transparent; box-shadow: none; border: none;"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven"
                                    aria-expanded="false"
                                    aria-controls="collapseSeven">
                                    Do you execute trades on my behalf?
                                </button>
                            </h2>
                            <div id="collapseSeven"
                                class="accordion-collapse collapse"
                                data-bs-parent="#midcapFAQ">
                                <div class="px-0 accordion-body text-body-secondary">
                                    No. We provide guidance. You execute trades through your broker account.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>