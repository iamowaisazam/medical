<?php
$currentURL  = "https://" .$_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GAREEB NAWAAZ SURGICAL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/favicon.png" rel="icon">
  <!--<link href="assets/img/favicon.png" rel="icon">-->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
      <!-- Add Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Add Slick theme CSS if you want -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>



  <style>
#services {
  padding-top: 0px;
 
}
   
.mobile_logo {
  display: none; 
  
  }
  

  @media screen and (max-width: 768px) {
    .mobile_logo {
      display: block; 
    }
    .logo_image{
      display: none;
    }
}
.slick-dots {
      margin-bottom: 41px;
 
}
 
</style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> 8AM - 7PM Monday - Sunday
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +255 242 234 840

      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
 <a href="/" class="logo me-auto">
        <img class="logo_image" src="./logo.png" alt="">
        <img class="mobile_logo" src="<?php echo $currentURL?>/assets/img/logo/footer-logo.png" alt="">
      </a>
      <!--<a href="/" class="logo me-auto"><img src="./logo.png" alt=""></a>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="<?php echo $currentURL?>#silder">Home</a></li>
          <li class="dropdown">
            <a href="#">
              <span>Category</span> 
              <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="category_menu_dropdown" >
        
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo $currentURL?>#about">About</a></li>
          <!--<li><a class="nav-link scrollto" href="#featured-services">Category</a></li>-->
          <li><a class="nav-link scrollto" href="<?php echo $currentURL?>#doctors">Team</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $currentURL?>#testimonials">testimonials</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $currentURL?>#gallery">CLIENTS</a></li>
          <li><a class="nav-link scrollto" href="<?php echo $currentURL?>#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->
  
