<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

              <div class="content-box__header">

<?php if( is_year() ) : ?>

                <h2 class="heading-second">BLOG：<?php the_time( 'Y年' ); ?></h2>

<?php elseif( is_month() ) : ?>
              
                <h2 class="heading-second">BLOG：<?php the_time( 'Y年n月' ); ?></h2>
      
<?php else : ?>

                <h2 class="heading-second">BLOG一覧</h2>

<?php endif; ?>

              </div>

              <div class="content-box__body">


<?php if( is_date() ) : ?>

                <div class="blog-filter-link">

                  <?php wp_get_archives( 'post_type=blog&type=monthly&format=a' ); ?>

                </div><!-- /.blog-filter-link -->

<?php endif; ?>

                <ul class="blog-posts">

<?php
if( have_posts() ):
	while( have_posts() ):the_post();
    get_template_part( 'content-blog-archive' );
	endwhile;
endif;
?>

                </ul><!-- /.blog-posts -->

              </div>

              <div class="content-box__footer">

                <div class="pager">

<?php
page_navi();
?>

                </div><!-- /.pager -->
                
              </div>

            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>