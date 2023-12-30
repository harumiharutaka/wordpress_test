<!DOCTYPE html>
<html lang="ja">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>共通テンプレート</title>
  <meta name="description" content="description">

  <!-- OGP -->
  <meta property="og:url" content="https://template.com/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="共通テンプレート">
  <meta property="og:description" content="description">
  <meta property="og:site_name" content="共通テンプレート">
  <meta property="og:image" content="https://template.com/assets/img/image_16-9.png">

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
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/destyle.min.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/22eeb3d0d6.js" crossorigin="anonymous"></script>

  <!-- Splide -->
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/splide-core.min.css">
  <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/splide.min.js"></script>

  <!-- 検索エンジンにインデックスさせない -->
  <meta name="robots" content="noindex">

  <!-- CSS -->


  <!-- JavaScript -->


  <script type="module" crossorigin src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>
  <link rel="stylesheet" crossorigin href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
</head>

<body class="
home
">

  <header class="header">
    <div class="header__inner">

      <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="header__title">
        <img class="header__title-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/brand-logo.png" alt="BLAND NAME" width="490" height="64">
      </a>

      <!-- PCドロップダウン表示 -->
      <nav class="header__nav header__nav--pc">

        <ul class="dropdown js_dropdown">
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
        </ul><!-- /.dropdown -->

      </nav>

      <button class="header__hamburger js_header_hamburger" aria-label="メニューの開閉">
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
      </button>

      <!-- SPドロワー表示 -->
      <nav class="header__nav header__nav--sp">

        <ul class="drawer js_drawer">
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
        </ul><!-- /.drawer -->

      </nav>

    </div>
  </header><!-- /.header -->

  <div class="wrapper">


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


    <div class="home-massage">
      <div class="home-massage__inner">

        <p class="home-massage__catch-phrase">キャッチフレーズ</p>

        <p class="home-massage__text">
          テキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキスト
        </p>

      </div>
    </div><!-- /.home-massage -->

    <article class="home-media-group">

      <section class="home-media">
        <div class="home-media__inner">
          <div class="home-media__body">

            <h2 class="heading-first">見出し</h2>

            <p>
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>

          </div>
          <img class="home-media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="メディアイメージ" width="1280" height="720">
        </div>
      </section><!-- /.home-media -->

      <section class="home-media home-media--second">
        <div class="home-media__inner">
          <div class="home-media__body">

            <h2 class="heading-first">見出し</h2>

            <p>
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>

          </div>
          <img class="home-media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="メディアイメージ" width="1280" height="720">
        </div>
      </section><!-- /.home-media -->

      <section class="home-media home-media--third">
        <div class="home-media__inner">
          <div class="home-media__body">

            <h2 class="heading-first">見出し</h2>

            <p>
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>

          </div>
          <img class="home-media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="メディアイメージ" width="1280" height="720">
        </div>
      </section><!-- /.home-media -->

    </article><!-- /.home-media-group -->

    <div class="home-container home-container--results">
      <div class="home-container__inner">

        <div class="home-container__header">
          <h2 class="home-container__heading">事業実績</h2>
        </div>

        <div class="card-group card-group--column3">
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="card-group__item card card--link">
            <img class="card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="カードイメージ" width="1280" height="720">
            <div class="card__body">
              <p class="card__title">タイトル </p>
              <p class="card__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </div>
          </a><!-- /.card -->
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="card-group__item card card--link">
            <img class="card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="カードイメージ" width="1280" height="720">
            <div class="card__body">
              <p class="card__title">タイトル </p>
              <p class="card__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </div>
          </a><!-- /.card -->
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/business/achievement/category.html" class="card-group__item card card--link">
            <img class="card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="カードイメージ" width="1280" height="720">
            <div class="card__body">
              <p class="card__title">タイトル </p>
              <p class="card__text">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </div>
          </a><!-- /.card -->
        </div><!-- /.card-group -->

      </div>
    </div><!-- /.home-container -->

    <div class="home-container home-container--news">
      <div class="home-container__inner">

        <div class="home-container__header">
          <h2 class="home-container__heading">ニュース</h2>
        </div>

        <ul class="news-posts">
          <li class="news-posts__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/news/single.html" class="news-posts__link">
              <div class="news-posts__header">
                <time class="news-posts__date" datatime="2023-11-01">2023年11月1日</time>
                <span class="class-label class-label--success">NEW</span>
              </div>
              <p class="news-posts__title">
                ニュースタイトル
              </p>
            </a>
          </li>
          <li class="news-news-posts__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/news/single.html" class="news-posts__link">
              <div class="news-posts__header">
                <time class="news-posts__date" datatime="2023-11-01">2023年11月1日</time>
                <span class="class-label class-label--alert">重要</span>
              </div>
              <p class="news-posts__title">
                ニュースタイトル
              </p>
            </a>
          </li>
          <li class="news-posts__item">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/news/single.html" class="news-posts__link">
              <div class="news-posts__header">
                <time class="news-posts__date" datatime="2023-11-01">2023年11月1日</time>
              </div>
              <p class="news-posts__title">
                ニュースタイトル
              </p>
            </a>
          </li>
        </ul><!-- /.news-posts -->

      </div>
    </div><!-- /.home-container -->

    <div class="home-container home-container--cta">
      <div class="home-container__inner">

        <div class="cta-area cta-area--bg-none">
          <p class="cta-area__title">気軽にお問い合わせください</p>
          <hr class="cta-area__divider">
          <p class="cta-area__text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/contact/" class="button">お問い合わせをする</a>
        </div><!-- /.cta-area -->

      </div>
    </div><!-- /.home-container -->


    <button class="pagetop js_pagetop" aria-label="トップへ戻る">
      <i class="pagetop__icon fa-solid fa-angle-up"></i>
    </button><!-- /.pagetop -->

  </div><!-- /.wrapper -->

  <footer class="footer">
    <div class="footer__inner">

      <div class="footer__menu">

        <div class="footer__left-column">

          <div class="footer__sns-header">
            <p class="footer__sns-title">SNS</p>
          </div>

          <div class="footer__sns-body">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_x.svg" alt="X" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_instagram.svg" alt="Instagram" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_facebook.svg" alt="Facebook" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_youtube.svg" alt="YouTube" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_line.svg" alt="LINE" width="36" height="36">
            </a>
          </div>

        </div>

        <div class="footer__right-column">

          <nav class="footer__nav">
            <ul class="footer__nav-list">
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/policy.html" class="footer__nav-link">サイトポリシー</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/policy.html" class="footer__nav-link">プライバシーポリシー</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/policy.html" class="footer__nav-link">セキュリティポリシー</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/sitemap.html" class="footer__nav-link">サイトマップ</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/contact/" class="footer__nav-link">お問い合わせ</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/component.html" class="footer__nav-link">コンポーネント一覧</a>
              </li>
              </ui>
          </nav>

          <div class="footer__banner">
            <a href="" class="footer__banner-link">
              <img class="footer__banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_banner.png" alt="バナー" width="234" height="60">
            </a>
            <a href="" class="footer__banner-link">
              <img class="footer__banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_banner.png" alt="バナー" width="234" height="60">
            </a>
            <a href="" class="footer__banner-link">
              <img class="footer__banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_banner.png" alt="バナー" width="234" height="60">
            </a>
          </div>

        </div>

      </div>

      <div class="footer__copyright">
        <p>Copyright © 2023 Brand Name All Rights Reserved.</p>
      </div>

    </div>
  </footer><!-- /.footer -->

  <div class="drawer-overlay js_drawer-overlay"></div>


  <div class="loading js_loading">
    <div class="loading__inner">
      <div class="loading__icon"></div>
      <div class="loading__progress-bar">
        <span class="loading__bar js_loading_bar"></span>
      </div>
    </div>
  </div><!-- /.loading -->


</body>

</html>