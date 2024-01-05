<?php
/*
Template Name: 企業情報
*/
get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <aside class="sidebar sidebar--2column">
          
          <div class="sidebar-box">

<?php
wp_nav_menu( array(
  'theme_location' => 'place_sidebar_company',
  'container' => false,
  'menu_class' => 'sidebar-list wp_sidebar-menu'
) );
?>

          </div><!-- /.sidebar-box -->
        
        </aside>

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