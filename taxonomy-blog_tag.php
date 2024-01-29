<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

              <div class="content-box__header">

                <h2 class="heading-second">BLOG：<?php single_term_title(); ?></h2>
                
              </div>

              <div class="content-box__body">

               <div class="blog-filter-link">

<?php
  $terms = get_terms('blog_tag');
  foreach ( $terms as $term ) {
    echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
  }
?>

                </div><!-- /.blog-filter-link -->

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