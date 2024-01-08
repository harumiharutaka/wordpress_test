                  <li class="blog-posts__item">
                    <a href="<?php the_permalink(); ?>" class="blog-posts__link">

<?php if( get_the_post_thumbnail() ) : ?>

                      <img class="blog-posts__img" src="<?php the_post_thumbnail_url(); ?>" alt="BLOGイメージ" width="120" height="120">
                      
<?php else : ?>

                      <img class="blog-posts__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/no-image.png" alt="BLOGイメージ" width="120" height="120">

<?php endif; ?>
                
                      <div class="blog-posts__body">
                        <p class="blog-posts__title"><?php the_title(); ?></p>
                        <div class="blog-posts__class-label">

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
                        <time class="blog-posts__date"><?php the_time( 'Y年n月j日' ); ?></time>
                        <p class="blog-posts__text">
                          <?php echo get_the_excerpt(); ?>
                        </p>
                      </div>
                    </a>
                  </li>