<?php
/*
Template Name: 企業情報-アクセス
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

<?php
	endwhile;
endif;
?>

              <div class="content-box__body">

                <div class="access-text-area">
                  <div class="access-text-area__left">
                    <span class="access-text-area__heading">住所</span><br>
                    〒100-0000<br>
                    東京都千代田区○○○*-*-* ○○ビル*F
                  </div>
                  <div class="access-text-area__right">
                    <span class="access-text-area__heading">アクセス</span><br>
                    東京メトロ（○○線、○○線）、<br>
                    都営地下鉄（○○線）「○○駅」**出口直結<br>
                    または、JR「東京駅」○○口より徒歩*分<br>
                    ※お車でお越しの際は○○ビル地下1階駐車場をご利用いただけます。
                  </div>
                </div><!-- /.access-text-area -->

                <div class="access-map">地図</div>

              </div>
              
            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>