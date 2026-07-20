<?php
$pageTitle = 'Investor Grievance | EquityPandit';
$base      = '../';
require __DIR__ . '/../includes/header.php';
?>

<section>
    <!-- Full Width Image -->
    <div class="container-fluid p-0 position-relative">
        <div class="py-5 pb-4" style="background:#02181A;">
        </div>
    </div>
    <div class="container">
        <div class="border-start border-end bordere-light">
            <div class="row g-3 align-items-center justify-content-center py-5 px-3">
                <div class="col-md-12">
                    <h1 class="fw-bold mb-3 titleFont">Investor Grievance</h1>

                    <!-- Monthly Complaints -->
                    <div class="table-responsive">
                        <h2 id="monthly-complaints-heading" class="pFont fs-5 fw-bold mb-3">
                            Data For The Month Ending
                        </h2>

                        <!-- Google Sheets Iframe -->
                        <iframe
                            src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJwDlK9Txp-SXNLg_Zv8BY7Cf7LFurznhwGfmp8Px7a9rJL23ig_Zz8SW-kDFa1omf5rDpXsAudDsg/pubhtml?gid=0&single=true&chrome=false&widget=true&headers=false&rm=minimal"
                            title="Data For The Month Ending October 2025"
                            aria-label="Data For The Month Ending October 2025"
                            width="100%"
                            height="200"
                            frameborder="0"
                            style="border: 1px solid #ddd; border-radius: 8px; margin-bottom: 20px;">
                        </iframe>
                    </div>

                    <div class="mb-5 mt-2 pFont">
                        <p class="mb-1"><small>* Inclusive of complaints of previous month resolved in the current month.</small></p>
                        <p class="mb-1"><small># Inclusive of complaints pending as on the last day of the month.</small></p>
                        <p class="mb-1"><small>^Average resolution time is the sum of time taken to resolve each complaint in days, in the current month divided by total number of complaints resolved in the current month.</small></p>
                    </div>

                    <!-- Trend Of Monthly Disposal -->
                    <div class="table-responsive mt-3">
                        <h2 id="monthly-disposal-heading" class="fs-5 pFont fw-bold mb-3">
                            Trend Of Monthly Disposal Of Complaints
                        </h2>

                        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJwDlK9Txp-SXNLg_Zv8BY7Cf7LFurznhwGfmp8Px7a9rJL23ig_Zz8SW-kDFa1omf5rDpXsAudDsg/pubhtml?gid=187827722&chrome=false&single=true&widget=true&headers=false&rm=minimal"
                            title="Trend Of Monthly Disposal Of Complaints"
                            width="100%"
                            height="300"
                            frameborder="0"
                            style="border: 1px solid #ddd; border-radius: 8px;">
                        </iframe>
                    </div>

                    <div class="mb-5 mt-2 pFont">
                        <p class="mb-1"><small>* Inclusive of complaints of previous month resolved in the current month.</small></p>
                        <p class="mb-1"><small># Inclusive of complaints pending as on the last day of the month.</small></p>
                    </div>

                    <!-- Trend Of Annual Disposal -->
                    <div class="table-responsive mt-3">
                        <h2 id="annual-disposal-heading" class="fs-5 pFont fw-bold mb-3">
                            Trend Of Annual Disposal Of Complaints
                        </h2>

                        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQJwDlK9Txp-SXNLg_Zv8BY7Cf7LFurznhwGfmp8Px7a9rJL23ig_Zz8SW-kDFa1omf5rDpXsAudDsg/pubhtml?gid=1698791034&chrome=false&single=true&widget=true&headers=false&rm=minimal"
                            title="Trend Of Annual Disposal Of Complaints"
                            width="100%"
                            height="300"
                            frameborder="0"
                            style="border: 1px solid #ddd; border-radius: 8px;">
                        </iframe>
                    </div>

                    <div class="mb-5 mt-2 pFont">
                        <p class="mb-1"><small>* Inclusive of complaints of previous year resolved in the current year.</small></p>
                        <p class="mb-1"><small># Inclusive of complaints pending as on the last day of the year.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require __DIR__ . '/../includes/footer.php';
?>