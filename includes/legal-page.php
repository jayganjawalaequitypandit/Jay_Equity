<?php
// Reusable renderer for legal / regulatory pages.
// A page sets: $pageTitle, $base (default ''), optional $intro, and
// $sections = [ ['Heading', 'Body HTML'], ... ];  then requires this file.
$base        = $base ?? '';
$solidHeader = true;
require __DIR__ . '/header.php';
?>

<section>
    <div class="container">
        <div class="px-3 py-5 border-start border-end border-light">
            <div class="row g-3 justify-content-center">
                <div class="col-lg-10">

                    <h1 class="display-5 titleFont fw-semibold"><?= htmlspecialchars($pageTitle) ?></h1>
                    <p class="text-body-secondary">EquityPandit Financial Services Private Limited</p>

                    <!-- TEMPLATE NOTICE — remove once the official text is added -->
                    <div class="alert alert-warning rounded-0 border-0 small" role="alert">
                        This is a layout template. Replace the placeholder copy below with the official,
                        legally-approved content from equitypandit.in.
                    </div>

                    <?php if (!empty($intro)): ?>
                        <p class="fs-5 titleFont"><?= $intro ?></p>
                    <?php endif; ?>

                    <?php foreach (($sections ?? []) as $i => $sec): ?>
                        <h2 class="fs-4 titleFont fw-semibold mt-4"><?= ($i + 1) . '. ' . htmlspecialchars($sec[0]) ?></h2>
                        <p><?= $sec[1] ?></p>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/footer.php'; ?>
