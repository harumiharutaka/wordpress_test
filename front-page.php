<?php get_header(); ?>

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

    <style>
    /*
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
    */
    </style>

    <div class="home-container home-container--news">
      <div class="home-container__inner">

<?php $term_obj = get_term_by( 'slug', 'news', 'category' ); ?>

        <div class="home-container__header">
          <h2 class="home-container__heading"><?php echo $term_obj->name; ?></h2>
        </div>

        <ul class="news-posts">

<?php
$news_posts = get_specific_posts( 'post', 'category', 'news', 3 );
if( $news_posts->have_posts() ):
	while( $news_posts->have_posts() ): $news_posts->the_post();
    get_template_part( 'content-news-archive' );
	endwhile;
	wp_reset_postdata();
endif;
?>

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

<?php get_footer(); ?>