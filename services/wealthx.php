<?php
$pageTitle   = 'WealthX';
$base        = '../';
$solidHeader = true;
require __DIR__ . '/../includes/header.php';
?>

<!-- Intro -->
<section>
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-4 align-items-center">
                <div class="col-md-7">
                    <h1 class="display-4 titleFont fw-semibold">WealthX</h1>
                    <p class="fs-5 titleFont">
                        WealthX is a comprehensive equity investing service built to keep you
                        aligned with opportunities across market cycles.
                    </p>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <a href="<?= $base ?>contact-us.php" class="btn btn-dark rounded-0">Get Started</a>
                        <a href="<?= $base ?>contact-us.php" class="btn btn-outline-dark rounded-0">Talk to an Advisor</a>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="<?= $base ?>imgs/services/s3.jpeg" class="img-fluid w-100" alt="WealthX" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What you get -->
<section>
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="pb-md-5 text-start text-md-center">
                        <h2 class="display-5 titleFont fw-semibold d-inline-block">A complete investing service</h2>
                        <p class="fs-5 titleFont">Everything you need to stay invested with conviction.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="h-100 p-4 border border-light">
                        <i class="fa fa-chart-line fs-2 text-success mb-3"></i>
                        <h3 class="fs-4 titleFont fw-semibold">All-cycle coverage</h3>
                        <p class="mb-0">Guidance designed to keep you aligned with opportunities across market cycles.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="h-100 p-4 border border-light">
                        <i class="fa fa-sliders fs-2 text-success mb-3"></i>
                        <h3 class="fs-4 titleFont fw-semibold">Active management</h3>
                        <p class="mb-0">Ongoing reviews and adjustments so your portfolio stays relevant.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="h-100 p-4 border border-light">
                        <i class="fa fa-headset fs-2 text-success mb-3"></i>
                        <h3 class="fs-4 titleFont fw-semibold">Dedicated support</h3>
                        <p class="mb-0">A team you can reach for guidance whenever you need it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="text-white" style="background-color: #c20029;">
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light text-center">
            <h2 class="display-6 titleFont fw-semibold">Build enduring wealth with WealthX</h2>
            <p class="fs-5 titleFont mb-4">Stay invested with a strategy built for the long term.</p>
            <a href="<?= $base ?>contact-us.php" class="btn btn-light rounded-0 btn-lg px-4">Get Started</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>