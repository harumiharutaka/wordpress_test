<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <aside class="sidebar sidebar--3column-left">

          <form class="blog-sidebar-search blog-sidebar-search--sp" action="<?php echo esc_url( home_url() ); ?>" method="get">
            <div class="search-box">
              <input class="search-box__input" type="search" name="s" placeholder="検索" />
              <button class="search-box__button" type="submit" aria-label="検索する"><i class="search-box__icon fa-solid fa-magnifying-glass"></i></button>
            </div><!-- /.search-box -->
          </form><!-- /.blog-sidebar-search -->

          <div class="sidebar-box">
            
            <h2 class="heading-fifth">最新の記事</h2>

            <ul class="sidebar-list">

<?php
$blog_posts = get_custom_posts( 'blog', 5 );
if( $blog_posts->have_posts() ):
	while( $blog_posts->have_posts() ): $blog_posts->the_post();
?>
              <li class="sidebar-date">
                <a href="<?php the_permalink(); ?>" class="sidebar-date__link"><?php the_title(); ?></a>
                <time class="sidebar-date__date"><?php the_time( 'Y年n月j日' ); ?></time>
              </li>
<?php
	endwhile;
	wp_reset_postdata();
endif;
?>

            </ul><!-- /.sidebar-list -->

          </div><!-- /.sidebar-box -->

<?php dynamic_sidebar( 'blog-ranking' ); ?>

        </aside><!-- /.sidebar -->

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
$custom_post_tag = 'blog_tag';
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

                <a href="<?php echo esc_url(get_post_type_archive_link(get_post_type())); ?>" class="button">一覧へ戻る</a>

              </div>

<?php
	endwhile;
endif;
?>
              
            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

        <aside class="sidebar sidebar--3column-right">

          <form class="blog-sidebar-search blog-sidebar-search--pc" action="<?php echo esc_url( home_url() ); ?>" method="get">
            <div class="search-box">
              <input class="search-box__input" type="search" name="s" placeholder="検索" />
              <button class="search-box__button" type="submit" aria-label="検索する"><i class="search-box__icon fa-solid fa-magnifying-glass"></i></button>
            </div><!-- /.search-box -->
          </form><!-- /.blog-sidebar-search -->

          <div class="sidebar-box">

            <h2 class="heading-fifth">カテゴリ</h2>

            <ul class="sidebar-list wp_sidebar-filter">

<?php
  $terms = get_terms('blog_tag');
  foreach ( $terms as $term ) {
    echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
  }
?>

            </ul><!-- /.sidebar-list -->

          </div><!-- /.sidebar-box -->

          <div class="sidebar-box">

            <h2 class="heading-fifth">過去の記事</h2>

            <ul class="sidebar-list wp_sidebar-filter">

<?php wp_get_archives( 'post_type=blog&type=monthly' ); ?>

            </ul><!-- /.sidebar-list -->

          </div><!-- /.sidebar-box -->

        </aside><!-- /.sidebar -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>