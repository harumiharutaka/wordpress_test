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

                <ul class="news-posts">

<?php
  $blog_posts = get_custom_posts( 'blog', 8 );
  if ($blog_posts->have_posts()):
    while ($blog_posts->have_posts()): $blog_posts->the_post();
      get_template_part( 'content-news-archive' );
    endwhile;
  endif;
?>

                </ul><!-- /.news-posts -->

              </div>

              <div class="content-box__footer">

                <nav class="pager">

<?php
  page_navi();
	wp_reset_postdata();
?>

                </nav><!-- /.pager -->
                
              </div>

            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>