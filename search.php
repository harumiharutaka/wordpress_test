<?php get_header(); ?>

    <div class="container">
      <div class="container__inner">

        <main class="content">

          <artcile class="content-box">
            <div class="content-box__inner">

<?php if ( get_search_query() ): ?>
              <div class="content-box__header">

                <h2 class="heading-second">BLOG検索：<?php the_search_query(); ?></h2>
                
                <p class="blog-header-events">全<?php echo $wp_query->found_posts; ?>件</p>

              </div>
              
<?php endif; ?>

              <div class="content-box__body">

                <form class="blog-content-search" action="<?php echo esc_url( home_url() ); ?>" method="get">
                  <div class="search-box">
                    <input class="search-box__input" type="search" name="s" placeholder="検索" />
                    <button class="search-box__button" type="submit" aria-label="検索する"><i class="search-box__icon fa-solid fa-magnifying-glass"></i></button>
                  </div><!-- /.search-box -->
                </form><!-- /.blog-content-search -->
                
<?php
if ( have_posts() && get_search_query() ) :
?>

                <ul class="blog-posts">

<?php
	while ( have_posts() ) : the_post();
    get_template_part( 'content-blog-archive' );
	endwhile;
?>

                </ul><!-- /.blog-posts -->

              </div>

              <div class="content-box__footer">

                <div class="pager">

<?php
page_navi();
?>

                </div><!-- /.pager -->

<?php elseif( ! get_search_query() ): ?>
                <p> 検索ワードが入力されていません</p>
<?php else: ?>
                <p> 該当する記事は見つかりませんでした。</p>
<?php endif; ?>

              </div>

            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>