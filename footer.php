    <button class="pagetop js_pagetop" aria-label="トップへ戻る">
      <i class="pagetop__icon fa-solid fa-angle-up"></i>
    </button><!-- /.pagetop -->

  </div><!-- /.wrapper -->

  <footer class="footer">
    <div class="footer__inner">

      <div class="footer__menu">

        <div class="footer__left-column">

          <div class="footer__sns-header">
            <p class="footer__sns-title">SNS</p>
          </div>

          <div class="footer__sns-body">
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_x.svg" alt="X" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_instagram.svg" alt="Instagram" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_facebook.svg" alt="Facebook" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_youtube.svg" alt="YouTube" width="36" height="36">
            </a>
            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/" class="footer__sns-link">
              <img class="footer__sns-logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/sns_logo_line.svg" alt="LINE" width="36" height="36">
            </a>
          </div>

        </div>

        <div class="footer__right-column">

          <nav class="footer__nav">
            <ul class="footer__nav-list">
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/policy.html" class="footer__nav-link">サイトポリシー</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/policy.html" class="footer__nav-link">プライバシーポリシー</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/policy.html" class="footer__nav-link">セキュリティポリシー</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/sitemap.html" class="footer__nav-link">サイトマップ</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/contact/" class="footer__nav-link">お問い合わせ</a>
              </li>
              <li class="footer__nav-item">
                <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/component.html" class="footer__nav-link">コンポーネント一覧</a>
              </li>
              </ui>
          </nav>

          <div class="footer__banner">
            <a href="" class="footer__banner-link">
              <img class="footer__banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_banner.png" alt="バナー" width="234" height="60">
            </a>
            <a href="" class="footer__banner-link">
              <img class="footer__banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_banner.png" alt="バナー" width="234" height="60">
            </a>
            <a href="" class="footer__banner-link">
              <img class="footer__banner-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/image_banner.png" alt="バナー" width="234" height="60">
            </a>
          </div>

        </div>

      </div>

      <div class="footer__copyright">
        <p>Copyright © 2023 Brand Name All Rights Reserved.</p>
      </div>

    </div>
  </footer><!-- /.footer -->

  <div class="drawer-overlay js_drawer-overlay"></div>

<?php if( is_front_page() ): ?>

  <div class="loading js_loading">
    <div class="loading__inner">
      <div class="loading__icon"></div>
      <div class="loading__progress-bar">
        <span class="loading__bar js_loading_bar"></span>
      </div>
    </div>
  </div><!-- /.loading -->

<?php endif; ?>

<?php wp_footer(); ?>
  
</body>

</html>