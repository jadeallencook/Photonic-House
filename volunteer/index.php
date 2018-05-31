<!DOCTYPE HTML>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119906910-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119906910-1');
</script>
  <link rel="shortcut icon" href="/photonichouse/assets/images/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/photonichouse/assets/images/favicon/favicon.ico" type="image/x-icon">
  <title>Photonic House | Light Art Experience</title>
  <?php
      include_once('../components/head-css.html');
      include_once('../components/head-meta.html');
    ?>
</head>
  <body data-spy="scroll" data-target=".navbar" data-offset="71">
    <div class="wrapper">
          <?php 
      
        $sections = array(
          'navbar',
          'volunteer',
          'footer',
          'scroll-to-top',
          'preloader',
          'javascript'
        ); 

        foreach ($sections as $section) {
            include_once("../components/$section.html");
        }

          ?>
    </div>
  </body>
</html>