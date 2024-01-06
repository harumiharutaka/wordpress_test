<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

<?php
if( have_posts() ):
	while( have_posts() ):the_post();
?>

              <div class="content-box__header">

                <h2 class="heading-third"><?php the_title(); ?></h2>

                <p>ブログ記事</p>

                <time class="content-box__header-date"><?php the_time( 'Y年n月j日' ); ?></time>

              </div>

              <div class="content-box__body">

                <?php the_content(); ?>

              </div>

              <div class="content-box__footer">

                <a href="<?php echo get_category_url(); ?>" class="button">一覧へ戻る</a>

              </div>

<?php
	endwhile;
endif;
?>
              
            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>