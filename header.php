<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo esc_html( wp_get_document_title() ); ?></title>
  <meta name="description" content="<?php echo bloginfo( 'description' ); ?>">

  <!-- OGP -->
  <!--meta property="og:url" content="https://template.com/"-->
  <!--meta property="og:type" content="website"-->
  <!--meta property="og:title" content="共通テンプレート"-->
  <!--meta property="og:description" content="description"-->
  <!--meta property="og:site_name" content="共通テンプレート"-->
  <!--meta property="og:image" content="https://template.com/assets/img/image_16-9.png"-->

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

  <!-- リセットCSS -->
  <!--link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/destyle.min.css"-->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/22eeb3d0d6.js" crossorigin="anonymous"></script>

  <!-- Splide -->
  <!--link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/splide-core.min.css"-->
  <!--script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/splide.min.js"></script-->

  <!-- CSS -->
  <!--link rel="stylesheet" crossorigin href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css"-->

  <!-- JavaScript -->
  <!--script type="module" crossorigin src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script-->

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

        <!--ul class="dropdown js_dropdown">
          <li class="dropdown__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="dropdown__link">トップ</a>
          </li>
          <li class="dropdown__item">
            <a tabindex="0" class="dropdown__link js_dropdown_link_parent">
              企業情報<i class="dropdown__link-icon fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown__child">
              <li class="dropdown__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/company/profile.html" class="dropdown__child-link">企業概要</a>
              </li>
              <li class="dropdown__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/company/history.html" class="dropdown__child-link">沿革</a>
              </li>
              <li class="dropdown__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/company/access.html" class="dropdown__child-link">アクセス</a>
              </li>
            </ul>
          </li>
          <li class="dropdown__item">
            <a tabindex="0" class="dropdown__link js_dropdown_link_parent">
              事業紹介<i class="dropdown__link-icon fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown__child">
              <li class="dropdown__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/detail.html" class="dropdown__child-link">事業内容</a>
              </li>
              <li class="dropdown__child-item">
                <a tabindex="0" class="dropdown__child-link js_dropdown_child_parent">
                  事業実績<i class="dropdown__child-icon fa-solid fa-angle-right"></i>
                </a>
                <ul class="dropdown__grandchild">
                  <li class="dropdown__grandchild-item">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="dropdown__grandchild-link">事業カテゴリ1</a>
                  </li>
                  <li class="dropdown__grandchild-item">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="dropdown__grandchild-link">事業カテゴリ2</a>
                  </li>
                  <li class="dropdown__grandchild-item">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="dropdown__grandchild-link">事業カテゴリ3</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/news/" class="dropdown__link">ニュース</a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/blog/" class="dropdown__link">BLOG</a>
          </li>
          <li class="dropdown__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/contact/" class="dropdown__link">お問い合わせ</a>
          </li>
        </ul--><!-- /.dropdown -->

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

        <!--ul class="drawer js_drawer">
          <li class="drawer__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="drawer__link">トップ</a>
          </li>
          <li class="drawer__item">
            <a tabindex="0" class="drawer__link js_drawer_link_parent">
              企業情報<i class="drawer__icon fa-solid fa-angle-right"></i>
            </a>
            <ul class="drawer__child">
              <a tabindex="0" class="drawer__child-link js_drawer_child_close" aria-label="子メニューを閉じる">
                <i class="drawer__icon fa-solid fa-angle-left"></i>
              </a>
              <li class="drawer__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/company/profile.html" class="drawer__child-link">企業概要</a>
              </li>
              <li class="drawer__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/company/history.html" class="drawer__child-link">沿革</a>
              </li>
              <li class="drawer__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/company/access.html" class="drawer__child-link">アクセス</a>
              </li>
            </ul>
          </li>
          <li class="drawer__item">
            <a tabindex="0" class="drawer__link js_drawer_link_parent">
              事業紹介<i class="drawer__icon fa-solid fa-angle-right"></i>
            </a>
            <ul class="drawer__child">
              <a tabindex="0" class="drawer__child-link js_drawer_child_close" aria-label="子メニューを閉じる">
                <i class="drawer__icon fa-solid fa-angle-left"></i>
              </a>
              <li class="drawer__child-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/detail.html" class="drawer__child-link">事業内容</a>
              </li>
              <li class="drawer__child-item">
                <a tabindex="0" class="drawer__child-link js_drawer_child_parent">
                  事業実績<i class="drawer__icon fa-solid fa-angle-right"></i>
                </a>
                <ul class="drawer__grandchild">
                  <a tabindex="0" class="drawer__child-link js_drawer_grandchild_close" aria-label="孫メニューを閉じる">
                    <i class="drawer__icon fa-solid fa-angle-left"></i>
                  </a>
                  <li class="drawer__grandchild-item">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="drawer__grandchild-link">事業カテゴリ1</a>
                  </li>
                  <li class="drawer__grandchild-item">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="drawer__grandchild-link">事業カテゴリ2</a>
                  </li>
                  <li class="drawer__grandchild-item">
                    <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="drawer__grandchild-link">事業カテゴリ3</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="drawer__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/news/" class="drawer__link">ニュース</a>
          </li>
          <li class="drawer__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/blog/" class="drawer__link">BLOG</a>
          </li>
          <li class="drawer__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/contact/" class="drawer__link">お問い合わせ</a>
          </li>
        </ul--><!-- /.drawer -->

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
        <h1 class="page-visual__heading"><?php echo get_the_title(); ?></h1>
      </div>
    </div><!-- /.page-visual -->

    <div class="container container--breadcrum">
      <div class="container__inner">

        <div class="breadcrum">
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/test/template_test/" class="breadcrum__link">Top</a>
          <i class="breadcrum__partition fa-solid fa-angle-right"></i>
          <p class="breadcrum__current"><?php echo get_the_title(); ?></p>
        </div><!-- /.breadcrum -->
        
      </div>
    </div><!-- /.container -->

<?php endif; ?>