<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

              <div class="content-box__header">

                <h2 class="heading-second">ニュース一覧</h2>
                
              </div>

              <div class="content-box__body">

                <ul class="news-posts">

<?php
if( have_posts() ):
	while( have_posts() ):the_post();
?>

                  <li class="news-posts__item">
                    <a href="<?php the_permalink(); ?>" class="news-posts__link">
                      <div class="news-posts__header">
                        <time class="news-posts__date"><?php the_time( 'Y年n月j日' ); ?></time>
                      </div>
                      <p class="news-posts__title">
                        <?php the_title(); ?>
                      </p>
                    </a>
                  </li>

<?php
	endwhile;
endif;
?>
              
              
                </ul><!-- /.news-posts -->

              </div>

              <div class="content-box__footer">

                <nav class="pager">
 
<?php
page_navi();
?>

                </nav><!-- /.pager -->
                
              </div>

            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>