    </main>

    <?php
    $base = $base ?? '';
    ?>
    <footer class="text-white-50" style="background-color: #02181A;">
        <div class="container">
            <div class="position-relative">
                <img
                    src="<?= $base ?>imgs/Polygon5.svg"
                    class="position-absolute d-md-block d-none"
                    style="left:-22px; bottom:0px;"
                    alt="">
                <div class="border-start border-end border-light">
                    <div class="row g-3 justify-content-center">
                        <div class="col-md-12 p-4 pb-md-0">
                            <h3 class="fs-2 text-white fw-bold mb-2 titleFont" style="line-height: 1.5;">
                                Need any help? Contact To Our Support Team!
                            </h3>

                            <p class="text-light pFont">
                                We are always there for you every time and will guide you at every step.
                            </p>

                            <div class="d-md-flex pFont">
                                <div class="me-3">
                                    <i class="fa-solid fa-phone me-1" style="color:#00DF9C"></i>
                                    +91 8000 816 688
                                </div>

                                <div>
                                    <i class="fa-solid fa-envelope me-1" style="color:#00DF9C"></i>
                                    support@equitypandit.com
                                </div>
                            </div>
                            <div class="mt-3">
                                <i class="fa-brands fa-twitter fa-lg me-1" style="color:#00DF9C"></i>
                                <i class="fa-brands fa-instagram fa-lg me-1" style="color:#00DF9C"></i>
                                <i class="fa-brands fa-facebook fa-lg" style="color:#00DF9C"></i>
                            </div>
                        </div>

                        <div class="col-md-12 position-relative">
                            <div class="position-absolute top-0 start-75 ms-3 translate-start">
                                <button class="btn btn-sm btn-light rounded-0 px-5 py-2 mt-md-5 pFont" onclick="window.location.href='<?= $base ?>contact-us.php';">
                                    Contact Us
                                </button>
                            </div>
                            <img
                                src="<?= $base ?>imgs/cells 1.svg"
                                class="img-fluid"
                                alt="background">
                        </div>
                    </div>
                    <div class="row g-3 justify-content-between px-3 py-5 pFont small">
                        <div class="col-md-12">

                            <!-- Company -->
                            <div class="row align-items-start mb-3">

                                <div class="col-auto pe-0">
                                    <span class="text-white">Company</span>
                                </div>

                                <div class="col px-2 pt-2">
                                    <div class="border-bottom border-2"
                                        style="border-bottom-style:dotted !important;"></div>
                                </div>

                                <div class="col-7 col-md-auto text-start text-md-end">
                                    <a href="<?= $base ?>index.php" class="text-decoration-none text-white">Home</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/about-us.php" class="text-decoration-none text-white">About Us</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/careers.php" class="text-decoration-none text-white">Careers</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/contact-us.php" class="text-decoration-none text-white">Contact Us</a>
                                </div>

                            </div>

                            <!-- Services -->
                            <div class="row align-items-start mb-3">

                                <div class="col-auto pe-0">
                                    <span class="text-white">Services</span>
                                </div>

                                <div class="col px-2 pt-2">
                                    <div class="border-bottom border-2"
                                        style="border-bottom-style:dotted !important;"></div>
                                </div>

                                <div class="col-7 col-md-auto text-start text-md-end">
                                    <a href="<?= $base ?>pages/services.php" class="text-decoration-none text-white">For an Individuals</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/services.php" class="text-decoration-none text-white">For HNI’s and Ultra HNI’s</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/services.php" class="text-decoration-none text-white">For Family Offices & Institutions</a>
                                </div>

                            </div>

                            <!-- Legal -->
                            <div class="row align-items-start">

                                <div class="col-auto pe-0">
                                    <span class="text-white">Legal &amp; Privacy</span>
                                </div>

                                <div class="col px-2 pt-2">
                                    <div class="border-bottom border-2"
                                        style="border-bottom-style:dotted !important;"></div>
                                </div>

                                <div class="col-7 col-md-end text-start text-md-end">
                                    <a href="<?= $base ?>pages/terms-conditions.php" class="text-decoration-none text-white">Terms and Conditions</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>documents/EP_Grievance_Redressal_Escalation_Matrix.pdf" class="text-decoration-none text-white" target="_blank">Grievance Redressal / Escalation Matrix</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/privacy-policy.php" class="text-decoration-none text-white">Privacy Policy</a>
                                    <span class="mx-1 d-md-none">/</span>

                                    <a href="<?= $base ?>pages/disclosures.php" class="text-decoration-none text-white">Disclosure</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>documents/INVESTOR_CHARTER_EP.pdf" class="text-decoration-none text-white" target="_blank">Investor Charter</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/grievance-mechanism.php" class="text-decoration-none text-white">Investor Grievance</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>pages/compliance-audit.php" class="text-decoration-none text-white">Compliance Audit</a>
                                </div>

                            </div>

                            <!-- <div class="d-flex align-items-center mb-3 flex-wrap">
                                <div class="text-white">Company</div>

                                <div class="flex-grow-1 mx-2 border-bottom border-2 mt-2"
                                    style="border-bottom-style:dotted !important;"></div>

                                <div class="text-end ms-auto">
                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Home</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>about" class="text-decoration-none text-white">About Us</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>career" class="text-decoration-none text-white">Careers</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>contact" class="text-decoration-none text-white">Contact Us</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3 flex-wrap">
                                <div class="text-white">Services</div>

                                <div class="flex-grow-1 mx-2 border-bottom border-2 mt-2"
                                    style="border-bottom-style:dotted !important;"></div>

                                <div class="text-end ms-auto">
                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Plan &amp; Pricing</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Investing &amp; Trading</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">HNI Services</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Institutional Investors</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-start flex-wrap">
                                <div class="text-white">Legal &amp; Privacy</div>

                                <div class="flex-grow-1 mx-2 border-bottom border-2 mt-3"
                                    style="border-bottom-style:dotted !important;"></div>

                                <div class="text-end ms-auto" style="max-width:600px;">
                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Terms and Conditions</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Grievance Redressal</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Escalation Matrix</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Privacy Policy</a>
                                    <span class="d-md-none mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Disclosure</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Investor Charter</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Investor Grievance</a>
                                    <span class="mx-1">/</span>

                                    <a href="<?= $base ?>" class="text-decoration-none text-white">Compliance Audit</a>
                                </div>
                            </div> -->

                            <!-- <p>
                                <small>
                                    EquityPandit Financial Services Private Limited <br />SEBI Registration No.: INA000006688 | Type of registration: Non-Individual | Validity: Perpetual | BSE Enlistment No.: 1684 | CIN: U67120RJ2013PTC041600
                                </small>
                            </p> -->
                            <!-- <p class="mb-0">
                                <small>
                                    Registered Address: 209 – The Galleria, Near Sanjeev Kumar Auditorium, Pal, Adajan, Surat, Gujarat – 395009
                                </small>
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="border-top border-light">
            <div class="container">
                <div class="border-start border-end border-light position-relative">
                    <img
                        src="<?= $base ?>imgs/Vector.svg"
                        class="img-fluid p-3 p-md-5 my-5"
                        alt="background" />
                    <div class="text-end">
                        <img
                            src="<?= $base ?>imgs/Polygon3.svg"
                            class="position-absolute top-0 start-0"
                            alt="background">
                    </div>
                    <div class="text-end">
                        <img
                            src="<?= $base ?>imgs/Polygon4.svg"
                            class="position-absolute bottom-0 end-0"
                            alt="background">
                    </div>
                </div>
            </div>
        </section>
        <section class="border-top border-bottom border-light text-white">
            <div class="container">
                <div class="position-relative">
                    <img
                        src="<?= $base ?>imgs/Polygon6.svg"
                        class="position-absolute d-md-block d-none"
                        style="right:-22px; top:0px;"
                        alt="">
                    <div class="border-start border-end border-light p-2">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="fw-bold pFont">
                                    SEBI Registered Investment Advisor Details:
                                </p>

                                <p>
                                    Registered Name: Equitypandit Financial Services Private Limited
                                    <br>
                                    Type of registration: Non-Individual
                                    <br>
                                    Registration No.: INA000006688
                                    <br>
                                    Validity: Perpetual
                                    <br>
                                    BSE Enlistment No.: 1684
                                    <br>
                                    CIN: U67120RJ2013PTC041600
                                </p>

                                <p class="mb-0">
                                    Registered Address: 209 – The Galleria, Near Sanjeev Kumar Auditorium,
                                    Pal, Adajan, Surat, Gujarat – 395009
                                </p>
                            </div>

                            <div class="col-md-8 mt-md-0 mt-3">
                                <p>
                                    Principal Officer: Kamlesh Sachar |
                                    Email: <a class="text-decoration-none" href="mailto:po@equitypandit.com">po@equitypandit.com</a> |
                                    Contact No.: <a class="text-decoration-none" href="tel:+918000816688">+91 8000816688</a> |
                                    SEBI LO.: Ground Floor, Jeevan Nidhi 2 LIC Building,
                                    Ambedkar Circle, Bhawani Singh Rd, Jaipur, Rajasthan 302005
                                </p>

                                <p class="mt-3 d-none">
                                    Disclaimer: There is no guarantee of profits or no exceptions from losses.
                                    The investment advice provided is solely the personal views of the research
                                    team. Equitypandit will not accept any liability for loss or damage as a
                                    result of reliance on the information contained within this website
                                    including data, quotes, charts and buy/sell signals. Please be fully
                                    informed regarding the risks and costs associated with trading the
                                    financial markets, it is one of the riskiest investment forms possible.
                                    Therefore, Equitypandit doesn’t bear any responsibility for any trading
                                    losses you might incur as a result of using this data.
                                    *KYC is mandatory for all subscriptions.
                                </p>

                                <p class="fw-bold">Disclaimers:</p>

                                <ol>
                                    <li>
                                        <p>
                                            Registration granted by SEBI, membership of BASL and certification
                                            from NISM in no way guarantee performance of the intermediary or
                                            provide any assurance of returns to investors.
                                        </p>
                                    </li>

                                    <li>
                                        <p>
                                            The securities quoted, if any, are for illustration only and are
                                            not recommendatory.
                                        </p>
                                    </li>

                                    <li>
                                        <p>
                                            Investments in securities market are subject to market risks.
                                            Read all the related documents carefully before investing.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="text-center p-2">
                            <small>
                                © Copyright 2026<br class="d-md-none" />
                                <a
                                    href="https://equitypandit.in"
                                    tabIndex={0}
                                    class="text-decoration-none fw-semibold"
                                    aria-label="Equitypandit Financial Services Private Limited">
                                    Equitypandit Financial Services Private Limited. </a> All Rights Reserved
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mainMenu = document.getElementById('mainMenu');
            if (!mainMenu) return;

            // Close the mobile menu after tapping a link.
            mainMenu.querySelectorAll('a').forEach(function(link) {
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