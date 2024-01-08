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

<?php
if( have_posts() ):
	while( have_posts() ):the_post();
?>

              <div class="content-box__header">

                <h2 class="heading-third"><?php the_title(); ?></h2>

                <div class="content-box__header-bottom">

                  <div class="content-box__header-category">

<?php
$custom_post_tag = 'business_achievement_tag';
$custom_post_tag_terms = wp_get_object_terms($post->ID, $custom_post_tag);
if(!empty($custom_post_tag_terms)){
    if(!is_wp_error($custom_post_tag_terms)){
        foreach($custom_post_tag_terms as $term){
            $tag_term_name = $term->name;
            echo '<span class="class-label">'.$tag_term_name.'</span>';
        }
    }
}
?>

                  </div>

                  <time class="content-box__header-date"><?php the_time( 'Y年n月j日' ); ?></time>
                
                </div>

              </div>

              <div class="content-box__body">

                <?php the_content(); ?>

              </div>

              <div class="content-box__footer">

<?php
$terms = get_the_terms($post->ID,'business_achievement_tag');
foreach( $terms as $term ) {
  echo '<a href="'.get_term_link($term->slug, 'business_achievement_tag').'" class="button">一覧へ戻る</a>';
}
?>

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