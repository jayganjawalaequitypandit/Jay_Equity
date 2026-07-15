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

  <title>EquityPandit Responsive Navbar</title>

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
  </style>
</head>

<body class="">
  <!-- Intro -->
  <section class="position-relative">
    <!-- Full Width Image -->
    <div class="container-fluid p-0 position-relative">
      <img
        src="<?= $base ?>imgs/services/portfolio_bg.jpg"
        class="portfolio-banner"
        alt="Portfolio"
        loading="lazy"
        decoding="async">
      <!-- Border aligned with container -->
      <div class="container position-absolute top-0 start-50 translate-middle-x h-100">
        <div class="border-start border-end border-light h-100"></div>
      </div>
      <!-- Content Layer -->
      <div class="container mt-5 position-absolute top-0 start-50 translate-middle-x px-4 py-5">
        <div class="d-md-inline d-none">
          <a href="<?= $base ?>index.php" class="text-decoration-none text-white">Home</a>
          <span class="text-white mx-1">&gt;</span>
          <a href="" class="text-decoration-none" style="color:#00DF9C">Portfolio</a>
        </div>
      </div>
    </div>
  </section>
  <?php require __DIR__ . '/includes/footer.php'; ?>
</body>

</html>