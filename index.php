<!DOCTYPE HTML>
<html lang="en">

<head>
  <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
  <title>Yorker- Single Page theme</title>
  <?php
      include_once('components/head-css.html');
      include_once('components/head-meta.html');
    ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="71">
  <div class="wrapper">
    
    <?php 
      include_once('components/navbar.html'); 
      include_once('components/video-background.html'); 
      include_once('components/how-it-works.html');
      include_once('components/features.html');
      include_once('components/our-story.html');
      include_once('components/bar-charts.html');
      include_once('components/about.html');
      include_once('components/about-us-context.html');
      include_once('components/number-counters.html');
      include_once('components/example-pic-grid.html');
      include_once('components/section-header.html');
      include_once('components/parallax.html');
      include_once('components/pricing.html');
      include_once('components/team.html');
      include_once('components/blog.html');
      include_once('components/contact.html');
      include_once('components/map.html');
      include_once('components/footer.html');
      include_once('components/scroll-to-top.html');
      include_once('components/footer.html');
      include_once('components/preloader.html');
    ?>


  <!-- JAVASCRIPT
      ================================================== -->

  <!-- Jquery-->
  <script src="assets/js/jquery.js"></script>
  <!-- Bootstrap Jquery-->
  <script src="assets/js/bootstrap/js/bootstrap.min.js"></script>
  <!-- Jquery Easing-->
  <script src="assets/js/jquery.easing.min.js"></script>
  <!-- Wow Animation -->
  <script src="assets/plugins/wow/wow.min.js"></script>
  <!-- Smooth Scroll-->
  <script type="text/javascript" src="assets/plugins/SmoothScroll/SmoothScroll.js"></script>
  <!-- Stellar-->
  <script type="text/javascript" src="assets/plugins/stellar/jquery.stellar.min.js"></script>
  <!-- Waypoint and Counters-->
  <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
  <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
  <!--Isotope-->
  <script type="text/javascript" src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
  <!--Magnific Popup-->
  <script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!--Images Load-->
  <script type="text/javascript" src="assets/plugins/imagesloaded/imagesloaded.pkgd.js"></script>
  <!-- Owl Carousel-->
  <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
  <!-- NIVO LIGHTBOX-->
  <script type="text/javascript" src="assets/plugins/nivo-lightbox/nivo-lightbox.js"></script>
  <!--Visible-->
  <script type="text/javascript" src="assets/plugins/visible/visible.js"></script>
  <!--Fitvids-->
  <script type="text/javascript" src="assets/plugins/fitvids/fitvids.js"></script>
  <!-- Google Maps-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>
  <script type="text/javascript" src="assets/js/map.js"></script>
  <!-- Recaptcha-->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- Contact-->
  <script src="assets/js/contact.js"></script>
  <!-- switcher js -->
  <script src="assets/js/switcher.js"></script>
  <!--YTPlayer-->
  <script type="text/javascript" src="assets/plugins/YTPlayer/jquery.mb.YTPlayer.min.js"></script>
  <!--Custom JS-->
  <script src="assets/js/custom.js"></script>
  <script>
    new WOW().init();
    jQuery(document).ready(function () {
      $(".player").mb_YTPlayer();
    });
  </script>
</body>

</html>