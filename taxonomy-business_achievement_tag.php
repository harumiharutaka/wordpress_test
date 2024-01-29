<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

      <aside class="sidebar sidebar--2column">
          
        <div class="sidebar-box">

          <ul class="sidebar-list">

<?php
  $terms = get_terms('business_achievement_tag');
  foreach ( $terms as $term ) {
    echo '<li><a href="'.get_term_link($term).'" class="sidebar-menu">'.$term->name.'</a></li>';
  }
?>

            </ul><!-- /.sidebar-list -->

          </div><!-- /.sidebar-box -->
        
        </aside>

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

              <div class="content-box__header">

                <?php echo '<h2 class="heading-second">'.get_queried_object()->name.'</h2>'; ?>
                
              </div>

              <div class="content-box__body">

              <div class="card-group card-group--column3">

<?php
if( have_posts() ):
	while( have_posts() ):the_post();
    get_template_part( 'content-business-achievement-archive' );
	endwhile;
endif;
?>

                </div><!-- /.card-group -->

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