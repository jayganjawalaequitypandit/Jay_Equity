<?php
$pageTitle   = 'Compliance Audit';
$base        = '../';
$solidHeader = true;
require __DIR__ . '/../includes/header.php';
?>


<section">
    <div class="container-fluid p-0 position-relative">
        <div class="py-5 pb-4" style="background:#02181A;">
        </div>
    </div>
    <div class="container">
        <!-- Heading -->
        <div class="border-start border-end border-light px-3 py-5 text-center">
            <h2 class="display-6 fw-semibold titleFont">Compliance Audit</h2>
            <p class="mb-0 fs-6 pFont">
                A workplace designed to support your growth, nurture your wellbeing,
                and empower you to connect, thrive, and achieve success.
            </p>

            <div class="table-responsive mt-5">
                <table class="table table-bordered align-middle text-center">
                    <caption class="visually-hidden">
                        Compliance audit status and audit report links by financial year
                    </caption>

                    <thead class="table-light">
                        <tr>
                            <th style="min-width:70px;">S. No</th>
                            <th style="min-width:130px;">Financial Year</th>
                            <th style="min-width:180px;">Compliance Audit Status</th>
                            <th style="min-width:220px;">Audit Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>FY 2020-21</td>
                            <td>Conducted</td>
                            <td>
                                <a href="<?php echo htmlspecialchars($base); ?>documents/EP_Compliance_Audit_Report_2020-21.pdf"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-decoration-underline">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>FY 2021-22</td>
                            <td>Conducted</td>
                            <td>
                                <a href="<?php echo htmlspecialchars($base); ?>documents/EP_Compliance_Audit_Report_2021-22.pdf"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-decoration-underline">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>FY 2022-23</td>
                            <td>Conducted</td>
                            <td>
                                <a href="<?php echo htmlspecialchars($base); ?>documents/EP_Compliance_Audit_Report_2022-23.pdf"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-decoration-underline">
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>FY 2023-24</td>
                            <td>Conducted</td>
                            <td>
                                <a href="<?php echo htmlspecialchars($base); ?>documents/EP_Compliance_Audit_Report_2023-24.pdf"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="d-block text-decoration-underline">
                                    View
                                </a>

                                <a href="<?php echo htmlspecialchars($base); ?>documents/Client_Level_Segregation_Certificate_2023-24.pdf"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="d-block mt-2 text-decoration-underline">
                                    Client Level Segregation Certificate
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>FY 2024-25</td>
                            <td>Conducted</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </section>

    <?php
    require_once __DIR__ . "/../includes/footer.php";
    ?>