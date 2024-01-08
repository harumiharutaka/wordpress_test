                  <a href="<?php the_permalink(); ?>" class="card-group__item card card--link">

<?php if( get_the_post_thumbnail() ) : ?>

                    <img class="card__img" src="<?php the_post_thumbnail_url(); ?>" alt="カードイメージ" width="1280" height="720">

<?php else : ?>

                    <img class="card__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/no-image.png" alt="カードイメージ" width="1280" height="720">

<?php endif; ?>
                    <div class="card__body">
                      <p class="card__title"><?php the_title(); ?> </p>
                      <p class="card__text">
                        <?php echo get_flexible_excerpt( 50 ) ?>
                      </p>
                    </div>
                  </a><!-- /.card -->