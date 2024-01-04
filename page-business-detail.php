<?php
/*
Template Name: 事業紹介-事業内容
*/
get_header(); ?>

    <div class="container">
      <div class="container__inner">

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

                <p class="business-detail-massage">
                  テキストテキストテキスト<br>
                  テキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
                  テキストテキストテキストテキスト<br>
                  テキストテキストテキストテキストテキストテキストテキストテキスト<br>
                  テキストテキストテキストテキストテキストテキスト
                </p><!-- /.business-detail-massage -->

                <div class="business-detail-media">

                  <div class="media">
                    <img class="media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_3-2.png" alt="メディアイメージ" width="1080" height="720">
                    <div class="media__body">
                      <h3 class="heading-fifth">見出し</h3>
                      <p class="media__text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                    </div>
                  </div><!-- /.media -->
  
                  <div class="media media--reverse">
                    <img class="media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_3-2.png" alt="メディアイメージ" width="1080" height="720">
                    <div class="media__body">
                      <h3 class="heading-fifth">見出し</h3>
                      <p class="media__text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                    </div>
                  </div><!-- /.media -->  
  
                  <div class="media">
                    <img class="media__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_3-2.png" alt="メディアイメージ" width="1080" height="720">
                    <div class="media__body">
                      <h3 class="heading-fifth">見出し</h3>
                      <p class="media__text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                      </p>
                    </div>
                  </div><!-- /.media -->

                </div><!-- /.business-detail-media -->

                <div class="business-detail-price-box">

                  <h3 class="business-detail-heading">○○サービスシステム</h3>

                  <div class="price-box-group">
                    <div class="price-box-group__item price-box">
                      <div class="price-box__header">
                        <p class="price-box__title">プラン</p>
                        <p class="price-box__price">10,000円/月</p>
                      </div>                          
                      <div class="price-box__body">
                        <p class="price-box__lead">テキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                      </div>
                    </div><!-- /.price-box -->
                    <div class="price-box-group__item price-box">
                      <div class="price-box__header">
                        <p class="price-box__title">プラン</p>
                        <p class="price-box__price">10,000円/月</p>
                      </div>                          
                      <div class="price-box__body">
                        <p class="price-box__lead">テキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                      </div>
                    </div><!-- /.price-box -->
                    <div class="price-box-group__item price-box">
                      <div class="price-box__header">
                        <p class="price-box__title">プラン</p>
                        <p class="price-box__price">10,000円/月</p>
                      </div>                          
                      <div class="price-box__body">
                        <p class="price-box__lead">テキストテキストテキストテキストテキストテキストテキスト</p>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                        <div class="price-box__features">
                          <div class="price-box__features-header">テキスト</div>
                          <div class="price-box__features-text">テキストテキスト</div>
                        </div>
                      </div>
                    </div><!-- /.price-box -->
                  </div><!-- /.price-box-group -->

                </div><!-- /.business-detail-price-box -->

              </div>
              
            </div>
          </artcile><!-- /.content-box -->

        </main><!-- /.content -->

      </div>
    </div><!-- /.container -->

<?php get_footer(); ?>