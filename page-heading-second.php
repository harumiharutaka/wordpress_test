<?php
/*
Template Name: 見出し2あり
*/
get_header(); ?>

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

                <h2 class="heading-second"><?php the_title(); ?></h2>

              </div>

              <div class="content-box__body">

                <?php the_content(); ?>

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