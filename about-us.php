<?php
$pageTitle   = 'About Us page';
$base        = '';
$solidHeader = true;
require __DIR__ . '/includes/header.php';
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1">

  <title>About Us</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://www.equitypandit.com/etheme/vendor/fortawesome/font-awesome/css/all.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <script src="https://kit.fontawesome.com/4789acf415.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Work Sans', sans-serif;
      /* font-family: 'Playfair+Display', sans-serif; */
    }

    .border-light {
      border-color: #8a8a8a50 !important;
    }

    .titleFont {
      font-family: "Playfair Display", serif;
      /* font-weight: bold; */
    }

    .pFont {
      font-family: "Work Sans", serif;
    }

    /* Glassmorphism — Bootstrap has no backdrop-filter utility */
    .glass-bg {
      /* From https://css.glass */
      background: rgba(0, 0, 0, 0.25);
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(14.1px);
      -webkit-backdrop-filter: blur(14.1px);
    }

    /* Keep horizontal scrolling but hide the scrollbar — no Bootstrap utility for this */
    .hide-scrollbar {
      -ms-overflow-style: none;
      /* IE/old Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .hide-scrollbar::-webkit-scrollbar {
      display: none;
      /* Chrome/Safari/Edge */
    }


    .portfolio-banner {
      width: 100%;
      height: 450px;
      object-fit: cover;
      object-position: center;
      display: block;
    }

    @media (max-width:991.98px) {
      .portfolio-banner {
        height: 400px;
      }
    }

    @media (max-width:767.98px) {
      .portfolio-banner {
        height: 350px;
        object-fit: cover;
        object-position: center;
      }
    }

    .about {
      margin-top: -100px;
    }

    @media (max-width:767.98px) {
      .about {
        margin-top: -80px;
      }
    }
  </style>
</head>

<body class="">
  <!-- Intro -->
  <section class="position-relative overflow-hidden">

    <!-- Banner -->
    <img
      src="<?= $base ?>imgs/s4.jpg"
      class="portfolio-banner w-100"
      alt="About Us"
      loading="lazy"
      decoding="async">

    <!-- Overlay -->
    <div
      class="position-absolute top-0 start-0 w-100 h-100"
      style="background: rgba(2,24,26,.45);">
    </div>

    <!-- Content Wrapper -->
    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column">

      <!-- Center Content -->
      <div class="flex-grow-1">

        <div class="container h-100">
          <div class="border-start border-end border-light h-100 d-flex align-items-center justify-content-center">

            <h1 class="display-2 fw-bold text-white text-center titleFont mb-0">
              About Us
            </h1>

          </div>
        </div>

      </div>

      <!-- Featured Logos -->
      <div class="container-fluid glass-bg p-0">

        <div class="d-flex align-items-center justify-content-start justify-content-md-center overflow-auto hide-scrollbar">

          <div class="p-2">
            <img src="./imgs/logo/Bussiness_Standard.png" alt="Business Standard" style="height:60px;">
          </div>

          <div class="p-2">
            <img src="./imgs/logo/Dailyhunt.png" alt="Dailyhunt" style="height:60px;">
          </div>

          <div class="p-2">
            <img src="./imgs/logo/Yahoo.png" alt="Yahoo" style="height:60px;">
          </div>

          <div class="p-2">
            <img src="./imgs/logo/Bloomberg.png" alt="Bloomberg" style="height:60px;">
          </div>

          <div class="p-2">
            <img src="./imgs/logo/The Week.png" alt="The Week" style="height:60px;">
          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- About -->
  <section>
    <div class="container">
      <div class="border-start border-end border-light">
        <div class="row g-0">
          <div class="col-md-6 px-3 pt-5">
            <h2 class="display-5 titleFont fw-semibold d-inline-block" style="line-height: 1.5;">About EquityPandit</h2>
            <p class="fs-6 pFont mb-3">Founded in 2005, EquityPandit operates with a single belief: investment advice should be transparent, disciplined, and personalized.</p>
            <p class="fs-6 fw-semibold pFont mb-3">Over the 21+ years:</p>
            <div class="d-flex justify-content-centet mb-3 small">
              <div class="me-2"><i class="fa-solid fa-circle-check" style="color: #02181A;"></i></div>
              <div>
                <p class="pFont mb-0">We have worked with Retail Investors, HNIs, UHNIs, and Institutions.</p>
              </div>
            </div>
            <div class="d-flex justify-content-centet mb-3 small">
              <div class="me-2"><i class="fa-solid fa-circle-check" style="color: #02181A;"></i></div>
              <div>
                <p class="pFont mb-0">We build the community of our 10,00,000+ registered users.</p>
              </div>
            </div>
            <div class="d-flex justify-content-centet mb-3 small">
              <div class="me-2"><i class="fa-solid fa-circle-check" style="color: #02181A;"></i></div>
              <div>
                <p class="pFont mb-0">Clients across 33+ countries.</p>
              </div>
            </div>
            <div class="d-flex justify-content-centet mb-3 small">
              <div class="me-2"><i class="fa-solid fa-circle-check" style="color: #02181A;"></i></div>
              <div>
                <p class="pFont mb-0">350+ Research Algorithms.</p>
              </div>
            </div>

            <p class="pFont mb-0">Trust is built through consistency and responsible
              advisory practices.</p>

          </div>
          <div class="col-md-6 mt-3">
            <img
              src="<?= $base ?>imgs/faq4.png"
              class="img-fluid"
              alt="background">
          </div>

          <div class="col-md-5 position-relative d-none">
            <div class="col-md-5 position-absolute start-50" style="top:-80px;">
              <div class="position-relative overflow-hidden p-3 text-white" style="background:#02181A; border-top:3px #00DF9C solid">

                <!-- Content -->
                <div class="position-relative" style="z-index:2; color:#00DF9C">
                  <p class="fs-6 pFont mb-3">
                    Years of Market Expertise
                  </p>

                  <p class="display-4 pFont fw-semibold mb-0">
                    21+
                  </p>
                </div>

                <!-- Dotted Pattern -->
                <div class="position-absolute start-0 end-0" style="bottom:0;height:100px;background:radial-gradient(circle, #00DF9C 1px, transparent 1px);background-size:8px 8px;z-index:1;">
                </div>

              </div>
            </div>
            <img
              src="<?= $base ?>imgs/faq2.jpg"
              class="img-fluid w-100"
              alt="background">

          </div>

          <div class="col-md-3 d-none d-flex flex-row flex-md-column justify-content-between text-md-start text-center">
            <div class="flex-column">
              <p class="fs-6 pFont mb-md-0">Registered Users</p>
              <p class="display-4 fw-semibold pFont">
                1M+
              </p>
            </div>
            <div class="flex-column">
              <p class="fs-6 pFont mb-md-0">National & International<br class="d-md-block d-none" /> Awards</p>
              <p class="display-4 fw-semibold pFont">
                11+
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- what Our Client Say -->
  <section>
    <div class="container">
      <div class="border-top border-start border-end border-light">
        <div class="row g-0">
          <div class="col-md-6 p-md-4 pt-5 px-4">
            <div class="py-md-5 py-0 pb-0">
              <h2 class="display-5 titleFont fw-semibold d-inline-block" style="line-height: 1.5;">What Our Clients Say</h2>
              <p class="fs-6 pFont mb-0">Read what our satisfied clients have to say about their experience with our platform.</p>
              <img
                src="./imgs/Google.svg"
                class="img-fluid mt-3"
                alt="background">
            </div>
            <button class="btn text-white rounded-0 mt-md-0 mt-3 pFont px-4 py-2 d-inline-flex align-items-center" style="background-color: #02181A;" onclick="window.location.href='<?= $base ?>contact-us.php';">
              Contact Now
              <i class="fa-solid fa-arrow-right-long ms-2"></i>
            </button>
          </div>

          <div class="col-md-6 pb-md-0 pb-5">
            <div class="row g-0 flex-nowrap flex-md-wrap overflow-auto">

              <!-- Card 1 -->
              <div class="col-md-6 col-11 flex-shrink-0">
                <div class="card border h-100 p-3 rounded-0">
                  <div class="text-warning fs-5 mb-3">
                    ★ ★ ★ ★ ☆
                  </div>

                  <p class="mb-3 pFont small">
                    EP Investors has completely changed the way I invest.
                    The recommendations are accurate, and the risk management is solid!
                  </p>

                  <div class="d-flex align-items-center mt-auto">
                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                      style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                      A
                    </div>
                    <h2 class="fw-semibold mb-0 fs-6 pFont">Amit S</h2>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="col-md-6 col-11 flex-shrink-0">
                <div class="card border h-100 p-3 rounded-0">
                  <div class="text-warning fs-5 mb-3">
                    ★ ★ ★ ★ ☆
                  </div>

                  <p class="mb-3 pFont small">
                    Timely alerts and expert analysis make trading effortless.
                    Highly recommended for short-term investors!
                  </p>

                  <div class="d-flex align-items-center mt-auto">
                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                      style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                      P
                    </div>
                    <h2 class="fw-semibold mb-0 fs-6 pFont">Priya M.</h2>
                  </div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="col-md-6 col-11 flex-shrink-0">
                <div class="card border h-100 p-3 rounded-0">
                  <div class="text-warning fs-5 mb-3">
                    ★ ★ ★ ★ ☆
                  </div>

                  <p class="mb-3 pFont small">
                    EP Investors has completely changed the way I invest.
                    The recommendations are accurate, and the risk management is solid!
                  </p>

                  <div class="d-flex align-items-center mt-auto">
                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                      style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                      A
                    </div>
                    <h2 class="fw-semibold mb-0 pFont fs-6">Amit S</h2>
                  </div>
                </div>
              </div>

              <!-- Card 4 -->
              <div class="col-md-6 col-11 flex-shrink-0">
                <div class="card border h-100 p-3 rounded-0">
                  <div class="text-warning fs-5 mb-3">
                    ★ ★ ★ ★ ☆
                  </div>

                  <p class="mb-3 pFont small">
                    Consistent profits with minimal effort.
                    The 80% accuracy claim is real!
                  </p>

                  <div class="d-flex align-items-center mt-auto">
                    <div class="rounded-circle fw-bold d-flex justify-content-center align-items-center me-3"
                      style="width:40px;height:40px; background:#02181A; color:#00DF9C">
                      R
                    </div>
                    <h2 class="fw-semibold mb-0 fs-6 pFont">Rahul K.</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Award -->
  <section>
    <div class="container">
      <div class="py-5 px-3 border-top border-start border-end border-light">
        <div class="row g-0">
          <div class="col-md-12">
            <h2 class="display-6 titleFont fw-semibold" data-aos="fade-up"
              data-aos-delay="100">Put your money to work <br class="d-xl-block d-md-none" />with our research, that suits your style.</h2>
            <p class="pFont fs-6 mt-3 mb-3" data-aos="fade-up"
              data-aos-delay="100">Writerap loved from thousands customers worldwide and get trusted from big companies.</p>
            <?php
            $awards = [
              [
                'image' => 'Award1.png',
                'title' => 'CEO Magazine',
                'award' => 'Best Leadership Award',
                'year'  => '2025'
              ],
              [
                'image' => 'Award2.png',
                'title' => 'Economic Times',
                'award' => 'Business Excellence Award',
                'year'  => '2025'
              ],
              [
                'image' => 'Award3.png',
                'title' => 'News24',
                'award' => 'Industry Recognition',
                'year'  => '2024'
              ],
              [
                'image' => 'Award4.png',
                'title' => 'The Economic World',
                'award' => 'Emerging Brand Award',
                'year'  => '2024'
              ],
              [
                'image' => 'Award5.png',
                'title' => 'Finext',
                'award' => 'Excelence in Finnance',
                'year'  => '2024'
              ],
              [
                'image' => 'Award6.png',
                'title' => 'India Today',
                'award' => 'Customer Choice Award',
                'year'  => '2023'
              ],
              [
                'image' => 'Award7.png',
                'title' => 'Forbes India',
                'award' => 'Innovation Excellence',
                'year'  => '2023'
              ],
              [
                'image' => 'Award8.png',
                'title' => 'Times Business',
                'award' => 'Trusted Brand Award',
                'year'  => '2023'
              ],
              [
                'image' => 'Award9.png',
                'title' => 'Global Business',
                'award' => 'Business Leader Award',
                'year'  => '2022'
              ],
            ];
            ?>

            <style>
              .award-slider {
                overflow: hidden;
                width: 100%;
                position: relative;
              }

              .award-track {
                display: flex;
                width: max-content;
                animation: scrollAwards 20s linear infinite;
              }

              .award-slider:hover .award-track {
                animation-play-state: paused;
              }

              .award-item {
                flex: 0 0 auto;
                padding: 0 10px;
              }

              .award-item img {
                /* height: 100px; */
                width: auto;
                display: block;
              }

              @keyframes scrollAwards {
                from {
                  transform: translateX(0);
                }

                to {
                  transform: translateX(-50%);
                }
              }

              @media (max-width:768px) {
                .award-item {
                  padding: 0 10px;
                }

                .award-track {
                  animation-duration: 28s;
                }
              }
            </style>

            <div class="award-slider">

              <div class="award-track">

                <!-- First Set -->
                <?php foreach ($awards as $award): ?>
                  <div class="award-item">
                    <img
                      src="<?= $base ?>imgs/awards/<?= htmlspecialchars($award['image']) ?>"
                      alt="<?= htmlspecialchars($award['title']) ?>"
                      class="img-fluid">
                  </div>
                <?php endforeach; ?>

                <!-- Duplicate Set for Infinite Loop -->
                <?php foreach ($awards as $award): ?>
                  <div class="award-item">
                    <img
                      src="<?= $base ?>imgs/awards/<?= htmlspecialchars($award['image']) ?>"
                      alt="<?= htmlspecialchars($award['title']) ?>"
                      class="img-fluid">
                  </div>
                <?php endforeach; ?>

              </div>

            </div>
            <button class="btn text-white rounded-0 px-4 py-2 pFont mt-3" style="background-color: #02181A;" data-aos="fade-up"
              data-aos-delay="100" onclick="window.location.href='#';">
              Get Started<i class="fa-solid fa-arrow-right-long ms-2"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require __DIR__ . '/includes/footer.php'; ?>
</body>

</html>