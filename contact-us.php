<?php
$pageTitle   = 'Contact Us';
$base        = '';
$solidHeader = true;
require __DIR__ . '/includes/header.php';
?>

<section>
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="pb-md-5 text-start text-md-center">
                        <h1 class="display-5 titleFont fw-semibold d-inline-block">Contact Us</h1>
                        <p class="fs-5 titleFont">We’d love to help you start your wealth creation journey.</p>
                    </div>
                </div>

                <!-- Details -->
                <div class="col-lg-5">
                    <div class="h-100 p-4 border border-light">
                        <h2 class="fs-4 titleFont fw-semibold mb-3">Reach us</h2>

                        <div class="d-flex gap-3 mb-3">
                            <i class="fa fa-location-dot fs-5 text-success mt-1"></i>
                            <p class="mb-0">
                                EquityPandit Financial Services Private Limited<br>
                                209 – The Galleria, Near Sanjeev Kumar Auditorium,<br>
                                Pal, Adajan, Surat, Gujarat – 395009
                            </p>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i class="fa fa-phone fs-5 text-success mt-1"></i>
                            <p class="mb-0"><a href="tel:+918000816688" class="link-dark text-decoration-none">+91 8000 816 688</a></p>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i class="fa fa-clock fs-5 text-success mt-1"></i>
                            <p class="mb-0">Monday – Friday, 10 a.m. to 6 p.m. IST</p>
                        </div>

                        <!-- TODO: confirm official .in email address -->
                        <div class="d-flex gap-3">
                            <i class="fa fa-envelope fs-5 text-success mt-1"></i>
                            <p class="mb-0"><a href="mailto:info@equitypandit.in" class="link-dark text-decoration-none">info@equitypandit.in</a></p>
                        </div>
                    </div>
                </div>

                <!-- Form (markup only — wire up a backend / mail handler before going live) -->
                <div class="col-lg-7">
                    <div class="h-100 p-4 border border-light">
                        <h2 class="fs-4 titleFont fw-semibold mb-3">Send a message</h2>
                        <form action="#" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control rounded-0" id="name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control rounded-0" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Mobile</label>
                                    <input type="tel" class="form-control rounded-0" id="phone" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label for="interest" class="form-label">Interested in</label>
                                    <select class="form-select rounded-0" id="interest" name="interest">
                                        <option selected>Portfolio</option>
                                        <option>Multibagger</option>
                                        <option>WealthX</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control rounded-0" id="message" name="message" rows="4"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark rounded-0 px-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
