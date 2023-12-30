<?php

// 独自リソースを一元管理する
function my_enqueue_scripts() {
    $uri = esc_url( get_template_directory_uri() );
    wp_enqueue_style( 'reset_css' , $uri . '/assets/css/destyle.min.css' , [] );
    wp_enqueue_style( 'splide_css' , $uri . '/assets/css/splide-core.min.css' , [] );
    wp_enqueue_style( 'style_css' , $uri . '/assets/css/style.css' , [] );
    wp_enqueue_script( 'splide_js' , $uri . '/assets/js/splide.min.js', array(), '', true );
    wp_enqueue_script( 'main_js' , $uri . '/assets/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus( array(
	'place_global' => ' グローバル',
	'place_footer' => ' フッターナビ',
 ) );
