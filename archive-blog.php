<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

              <div class="content-box__header">

                <h2 class="heading-second">BLOG一覧</h2>
                
              </div>

              <div class="content-box__body">

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