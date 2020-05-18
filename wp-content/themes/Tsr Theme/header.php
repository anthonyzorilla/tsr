<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <!-- Title -->
    <title><?php bloginfo('name');?> | <?php is_front_page()? bloginfo('description'): wp_title(); ?></title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description');?>">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../../favicon.ico">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700%7COpen+Sans:400,600,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/animate.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify Theme -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/styles.bm-classic.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <style>
        body{
          background-image: url("<?php bloginfo('template_directory'); ?>/img/background.jpg");
          background-size:cover;
          background-repeat:no-repeat;
          background-position:center; 
          background:fixed;
        }
    </style>
</head>

  <body>
    <main class="container-fluid col-lg-8" style="background:rgba(255,255,255,0.7);">
      <!-- Header -->
      <header id="js-header" class="u-header u-header--static u-shadow-v19">
        <!-- Top Bar -->
        <div class="u-header__section g-brd-bottom g-brd-gray-light-v4 g-py-18">
          <div class="container">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-md-3 g-hidden-md-down">
                <a href="bm-classic-home-page-1.html" class="navbar-brand">
                  <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo">
                </a>
              </div>
              <!-- End Logo -->
              
              <!-- Subscribe Form -->
              <div class="col-6 col-md-5">
                <form class="input-group rounded">
                  <input class="form-control g-brd-secondary-light-v2 g-brd-primary--focus g-color-secondary-dark-v1 g-placeholder-secondary-dark-v1 g-bg-white g-font-weight-400 g-font-size-13 g-px-20 g-py-12" type="text" placeholder="Search the entire site">
                  <span class="input-group-append g-brd-none g-py-0 g-pr-0">
                    <button class="btn u-btn-white g-color-primary--hover g-bg-secondary g-font-weight-600 g-font-size-13 text-uppercase g-py-12 g-px-20" type="submit">
                      <span class="g-hidden-md-down">Search</span>
                      <i class="g-hidden-lg-up fa fa-search"></i>
                    </button>
                  </span>
                </form>
              </div>
              <!-- End Subscribe Form -->
            </div>
          </div>
        </div>
        <!-- End Top Bar -->

        <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
          <nav class="js-mega-menu navbar navbar-expand-lg g-px-0">
            <div class="container g-px-15">
              <!-- Logo -->
              <a class="navbar-brand g-hidden-lg-up" href="bm-classic-home-page-1.html">
                <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo">
              </a>
              <!-- End Logo -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 ml-auto" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider g-pa-0">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg" id="navBar">
                <div class="custom-menu-class"> 
                <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container_class' => 'custom-menu-class'
                  ));
                ?>
                </div>
              <!-- End Navigation -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header -->