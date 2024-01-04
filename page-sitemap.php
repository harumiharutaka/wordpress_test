<?php
/*
Template Name: サイトマップ
*/
get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

              <div class="content-box__body">

<?php
wp_nav_menu( array(
  'theme_location' => 'place_sitemap',
  'container' => false,
  'menu_class' => 'wp_sitemap'
) );
?>

              </div>
              
            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>