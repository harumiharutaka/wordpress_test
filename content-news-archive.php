                  <li class="news-posts__item">
                    <a href="<?php the_permalink(); ?>" class="news-posts__link">
                      <div class="news-posts__header">
                        <time class="news-posts__date"><?php the_time( 'Y年n月j日' ); ?></time>
                        <?php if( has_tag('new') ): ?><span class="class-label class-label--success">NEW</span><?php endif; ?>
                        <?php if( has_tag('important') ): ?><span class="class-label class-label--alert">重要</span><?php endif; ?>
                      </div>
                      <p class="news-posts__title">
                        <?php the_title(); ?>
                      </p>
                    </a>
                  </li>