<?php get_header(); ?>

    <div class="home-massage">
      <div class="home-massage__inner">

        <p class="home-massage__catch-phrase"><?php the_field( 'massage-catch-phrase' ); ?></p>

        <p class="home-massage__text"><?php the_field( 'massage-text' ); ?></p>

      </div>
    </div><!-- /.home-massage -->

    <article class="home-media-group">

      <section class="home-media">
        <div class="home-media__inner">
          <div class="home-media__body">

            <h2 class="heading-first"><?php the_field( 'home-media-first-title' ); ?></h2>

            <p><?php the_field( 'home-media-first-text' ); ?></p>

          </div>
          <img class="home-media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="メディアイメージ" width="1280" height="720">
        </div>
      </section><!-- /.home-media -->

      <section class="home-media home-media--second">
        <div class="home-media__inner">
          <div class="home-media__body">

            <h2 class="heading-first"><?php the_field( 'home-media-second-title' ); ?></h2>

            <p><?php the_field( 'home-media-second-text' ); ?></p>

          </div>
          <img class="home-media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_16-9.png" alt="メディアイメージ" width="1280" height="720">
        </div>
      </section><!-- /.home-media -->

      <section class="home-media home-media--third">
        <div class="home-media__inner">
          <div class="home-media__body">

            <h2 class="heading-first"><?php the_field( 'home-media-third-title' ); ?></h2>

            <p><?php the_field( 'home-media-third-text' ); ?></p>

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

<?php
  $terms = get_terms('business_achievement_tag');
  foreach ( $terms as $term ) {
?>

          <a href="<?php echo get_term_link($term); ?>" class="card-group__item card card--link">

<?php if( get_field('business-achievement-image', $term) ) : ?>

            <img class="card__img" src="<?php echo get_field('business-achievement-image', $term); ?>" alt="カードイメージ" width="1280" height="720">

<?php else : ?>

            <img class="card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/no-image.png" alt="カードイメージ" width="1280" height="720">

<?php endif; ?>

            <div class="card__body">
              <p class="card__title"><?php echo $term->name ?></p>
              <p class="card__text">
                <?php echo wp_trim_words( $term->description, 50, '...' ) ?>
              </p>
            </div>
          </a><!-- /.card -->

<?php } ?>

        </div><!-- /.card-group -->

      </div>
    </div><!-- /.home-container -->

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