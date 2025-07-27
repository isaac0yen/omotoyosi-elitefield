<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php echo isset($pageTitle) ? $pageTitle : 'Omotoyosi Elitefield Educational Foundation'; ?></title>
  <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Omotoyosi Elitefield Educational Foundation - Providing underprivileged children with access to quality education'; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="shortcut icon" type="image/x-icon" href="./resources/logo_white.jpg" />

  <!-- Tailwind CSS -->
  <script src="./resources/script/tailwind.js"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'custom-blue': 'rgb(67, 142, 198)',
            'custom-orange': 'rgb(231, 120, 46)',
          },
        },
        container: {
          center: true,
          padding: '1rem',
        },
      },
      corePlugins: {
        preflight: false, // Disable Tailwind's base styles to prevent conflicts
      },
    }
  </script>

  <!-- Font awesome alternate -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
    integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    
  <link rel="stylesheet" href="./resources/style/custom.css" />
  <link rel="stylesheet" href="./resources/style/tailwind-custom.css" />

  <link rel="stylesheet" href="./resources/style/custom.css" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.css" />
  <link rel="stylesheet" href="assets/css/progressbar_barfiller.css" />
  <link rel="stylesheet" href="assets/css/gijgo.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/animated-headline.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />


  <style>
    /* Override styles to fix conflicts */
    .pagination .page-item.active .page-link {
      background-color: rgb(231, 120, 46);
      border-color: rgb(231, 120, 46);
      color: white;
    }

    /* Testimonial dot styling */
    .dot-style .slick-dots {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .dot-style .slick-dots li {
      margin: 0 5px;
      list-style: none;
    }

    .dot-style .slick-dots button {
      display: block;
      width: 12px;
      height: 12px;
      padding: 0;
      border: none;
      border-radius: 100%;
      background-color: #ddd;
      text-indent: -9999px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .dot-style .slick-dots li.slick-active button {
      background-color: rgb(231, 120, 46);
      transform: scale(1.2);
    }
  </style>

  <?php if (isset($additionalHeadContent)) echo $additionalHeadContent; ?>
</head>

<body>
  <!-- ? Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img
            src="./resources/logo_white.jpg"
            alt="Omotoyosi Elitefield Educational Foundation Loader" />
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start -->