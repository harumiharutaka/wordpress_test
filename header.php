<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo esc_html( wp_get_document_title() ); ?></title>

  <!-- ファビコン -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/safari-pinned-tab.svg" color="#000000">
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="preload" as="style">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/22eeb3d0d6.js" crossorigin="anonymous"></script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header class="header">
    <div class="header__inner">

      <a href="<?php echo esc_url( home_url() ); ?>" class="header__title">
        <img class="header__title-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/brand-logo.png" alt="BLAND NAME" width="490" height="64">
      </a>

      <!-- PCドロップダウン表示 -->
      <nav class="header__nav header__nav--pc">

<?php
wp_nav_menu( array(
  'theme_location' => 'place_global',
  'container' => false,
  'menu_class' => 'dropdown js_dropdown'
) );
?>

      </nav>

      <button class="header__hamburger js_header_hamburger" aria-label="メニューの開閉">
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
      </button>

      <!-- SPドロワー表示 -->
      <nav class="header__nav header__nav--sp">

<?php
wp_nav_menu( array(
  'theme_location' => 'place_global',
  'container' => false,
  'menu_class' => 'drawer js_drawer'
) );
?>

      </nav>

    </div>
  </header><!-- /.header -->

  <div class="wrapper">

<?php if( is_front_page() ): ?>

    <div class="splide slideshow">
      <div class="splide__track slideshow__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_blue.png" class="slideshow__img slideshow__img--pc" alt="blue" width="1280" height="720">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_blue_sp.png" class="slideshow__img slideshow__img--sp" alt="blue" width="720" height="1280">
          </li>
          <li class="splide__slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_green.png" class="slideshow__img slideshow__img--pc" alt="green" width="1280" height="720">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_green_sp.png" class="slideshow__img slideshow__img--sp" alt="green" width="720" height="1280">
          </li>
          <li class="splide__slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_yellow.png" class="slideshow__img slideshow__img--pc" alt="yellow" width="1280" height="720">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_yellow_sp.png" class="slideshow__img slideshow__img--sp" alt="yellow" width="720" height="1280">
          </li>
          <li class="splide__slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_red.png" class="slideshow__img slideshow__img--pc" alt="red" width="1280" height="720">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_red_sp.png" class="slideshow__img slideshow__img--sp" alt="red" width="720" height="1280">
          </li>
          <li class="splide__slide">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_purple.png" class="slideshow__img slideshow__img--pc" alt="purple" width="1280" height="720">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_purple_sp.png" class="slideshow__img slideshow__img--sp" alt="purple" width="720" height="1280">
          </li>
        </ul>
      </div>
      <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev slideshow__arrow slideshow__arrow--prev">
          <i class="slideshow__arrow-icon fa-solid fa-angle-left"></i>
          </dbutton>
          <button class="splide__arrow splide__arrow--next slideshow__arrow slideshow__arrow--next">
            <i class="slideshow__arrow-icon fa-solid fa-angle-right"></i>
          </button>
      </div>
      <div class="slideshow__footer">
        <button class="splide__toggle slideshow__toggle">
          <span class="splide__toggle__play slideshow__toggle-play">
            <i class="slideshow__toggle-icon fa-solid fa-play"></i>
          </span>
          <span class="splide__toggle__pause slideshow__toggle-pause">
            <i class="slideshow__toggle-icon fa-solid fa-pause"></i>
          </span>
        </button>
        <span class="slideshow__footer-divider"></span>
        <ul class="splide__pagination slideshow__pagination"></ul>
      </div>
    </div><!-- /.slideshow -->

<?php else: ?>

    <div class="page-visual">
      <div class="page-visual__inner">
        <h1 class="page-visual__heading"><?php echo get_main_title(); ?></h1>
      </div>
    </div><!-- /.page-visual -->

    <div class="container container--breadcrumb">
      <div class="container__inner">

        <div class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/">

<?php
if ( function_exists('bcn_display') ){
	bcn_display();
}
?>

        </div><!-- /.breadcrumb -->
        
      </div>
    </div><!-- /.container -->

<?php endif; ?>