<?php

/*********************************
    head関連
*********************************/

//独自リソースを一元管理する
function my_enqueue_scripts() {
    $dire_uri = esc_url( get_template_directory_uri() );
    $path_uri = esc_url( get_template_directory() );
    wp_enqueue_style( 'reset_css' , $dire_uri . '/assets/css/destyle.min.css' , array(), date("ymdHis", filemtime( $path_uri . '/assets/css/destyle.min.css' )) );
    wp_enqueue_style( 'splide_css' , $dire_uri . '/assets/css/splide-core.min.css' , array(), date("ymdHis", filemtime( $path_uri . '/assets/css/splide-core.min.css' )) );
    wp_enqueue_style( 'style_css' , $dire_uri . '/assets/css/style.css' , array(), date("ymdHis", filemtime( $path_uri . '/assets/css/style.css' )) );
    wp_enqueue_script( 'splide_js' , $dire_uri . '/assets/js/splide.min.js', array(), date("ymdHis", filemtime( $path_uri . '/assets/js/splide.min.js' )), true );
    wp_enqueue_script( 'main_js' , $dire_uri . '/assets/js/main.js', array(), date("ymdHis", filemtime( $path_uri . '/assets/js/main.js' )), true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

//AIOSEOの構造化データからパンくずのみを削除する
add_filter( 'aioseo_schema_output', 'aioseo_filter_schema_output' );
function aioseo_filter_schema_output( $graphs ) {
    foreach ( $graphs as $index => $graph ) {
		if ( 'BreadcrumbList' === $graph['@type'] ) {
			unset( $graphs[ $index ] );
		}

		foreach ( $graph as $key => $value ) {
			if ( 'breadcrumb' === $key ) {
				unset( $graphs[ $index ][ $key ] );
			}
		}
	}
	return $graphs;
}

/*********************************
    管理画面関連
*********************************/

//カスタムメニュー
register_nav_menus( array(
	'place_global' => 'グローバル',
	'place_footer' => 'フッターナビ',
	'place_sidebar_company' => '企業情報サイドバー',
	'place_sidebar_business' => '事業紹介サイドバー',
	'place_sitemap' => 'サイトマップ',
) );

//ウィジェット機能を有効化
function theme_widgets_init() {
	register_sidebar( array(
		'name' => ' BLOG人気の記事',
		'id' => 'blog-ranking',
		'description' => ' BLOG人気の記事',
		'before_widget' => '<div class="sidebar-box">',
		'after_widget' => '</div><!-- /.sidebar-box -->',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

//特定の権限で管理画面の左メニューを非表示
function authority_remove_menus(){
    if ( current_user_can( 'page-staff') ) { //ページスタッフ
        remove_menu_page( 'index.php' );
        remove_menu_page( 'edit-comments.php' );
        remove_menu_page( 'tools.php' );
        remove_menu_page( 'options-general.php' );
        remove_menu_page( 'wpcf7' ); 
    } elseif ( current_user_can( 'posts-staff') ) { //投稿スタッフ
        remove_menu_page( 'index.php' );
        remove_menu_page( 'edit-comments.php' );
        remove_menu_page( 'tools.php' ); 
        remove_menu_page( 'options-general.php' );
        remove_menu_page( 'wpcf7' ); 
        remove_menu_page( 'edit.php?post_type=blog' ); 
        remove_menu_page( 'edit.php?post_type=business_achievement' ); 
    } elseif ( current_user_can( 'blog-staff') ) { //BLOGスタッフ
        remove_menu_page( 'edit.php' );
        remove_menu_page( 'index.php' );
        remove_menu_page( 'edit-comments.php' );
        remove_menu_page( 'tools.php' ); 
        remove_menu_page( 'options-general.php' );
        remove_menu_page( 'wpcf7' ); 
        remove_menu_page( 'edit.php?post_type=business_achievement' ); 
    }
}
add_action( 'admin_menu', 'authority_remove_menus', 999 );

//特定の権限で管理バーの要素を非表示
function remove_admin_bar_menu( $wp_admin_bar ) {
    if ( current_user_can( 'page-staff') || current_user_can( 'posts-staff') || current_user_can( 'blog-staff') ) { //ページスタッフ＆投稿スタッフ＆BLOGスタッフ
        $wp_admin_bar->remove_menu( 'edit' );         // 投稿を編集(ウェブサイト側)
        $wp_admin_bar->remove_menu( 'comments' );     // コメント
        $wp_admin_bar->remove_menu( 'updates' );      // 更新
        $wp_admin_bar->remove_menu( 'new-content' );  // 新規
        $wp_admin_bar->remove_menu( 'search' );       // 検索（ウェブサイト側）
        $wp_admin_bar->remove_menu( 'preview' );      // 投稿を表示(管理画面側)
    }
}
add_action('admin_bar_menu', 'remove_admin_bar_menu', 150);

//特定の権限でブロックを非表示
add_filter( 'allowed_block_types_all', 'my_plugin_allowed_block_types_all', 10, 2 );
function my_plugin_allowed_block_types_all( $allowed_block_types, $block_editor_context ) {
    if ( current_user_can( 'page-staff') || current_user_can( 'posts-staff') || current_user_can( 'blog-staff') ) { //ページスタッフ＆投稿スタッフ＆BLOGスタッフ
        $allowed_block_types = array(
            'core/paragraph', //段落
            'core/image', //画像
        );
        return $allowed_block_types;
    }
}

//カスタム投稿で初期タームを設定する
function add_defaultcategory_automatically_blog($post_ID) {
    global $wpdb;
    $curTerm = wp_get_object_terms($post_ID, 'blog_category');
    if (0 == count($curTerm)) {
      $defaultTerm = array(17); // 初期タームのID
      wp_set_object_terms($post_ID, $defaultTerm, 'blog_category');
    }
}
add_action('publish_blog', 'add_defaultcategory_automatically_blog');

function add_defaultcategory_automatically_business_achievement($post_ID) {
    global $wpdb;
    $curTerm = wp_get_object_terms($post_ID, 'business_achievement_category');
    if (0 == count($curTerm)) {
        $defaultTerm = array(21); // 初期タームのID
        wp_set_object_terms($post_ID, $defaultTerm, 'business_achievement_category');
    }
}
add_action('publish_business_achievement', 'add_defaultcategory_automatically_business_achievement');

// 管理画面のカスタム投稿一覧にカテゴリー(ターム)を表示
function add_blog_custom_column( $defaults ) {
    $defaults['blog_tag'] = 'BLOGタグ（カテゴリ）';
    return $defaults;
}
  add_filter('manage_blog_posts_columns', 'add_blog_custom_column');
  function add_blog_custom_column_id($column_name, $id) {
    $terms = get_the_terms($id, $column_name);
    if ( $terms && ! is_wp_error( $terms ) ){
        $blog_links = array();
        foreach ( $terms as $term ) {
            $blog_links[] = $term->name;
        }
        echo join( ", ", $blog_links );
    }
}
add_action('manage_blog_posts_custom_column', 'add_blog_custom_column_id', 10, 2);

function add_business_achievement_custom_column( $defaults ) {
    $defaults['business_achievement_tag'] = '事業実績タグ（カテゴリ）';
    return $defaults;
}
  add_filter('manage_business_achievement_posts_columns', 'add_business_achievement_custom_column');
  function add_business_achievement_custom_column_id($column_name, $id) {
    $terms = get_the_terms($id, $column_name);
    if ( $terms && ! is_wp_error( $terms ) ){
      $business_achievement_links = array();
      foreach ( $terms as $term ) {
        $business_achievement_links[] = $term->name;
      }
      echo join( ", ", $business_achievement_links );
    }
}
add_action('manage_business_achievement_posts_custom_column', 'add_business_achievement_custom_column_id', 10, 2);

/*********************************
    WPの機能を修正・追加
*********************************/

//投稿のタグをチェックボックスで選択できるようにする
function change_post_tag_to_checkbox() {
    $args = get_taxonomy('post_tag');
    $args -> hierarchical = true;//Gutenberg用
    $args -> meta_box_cb = 'post_categories_meta_box';//Classicエディタ用
    register_taxonomy( 'post_tag', 'post', $args);
}
add_action( 'init', 'change_post_tag_to_checkbox', 1 );

//ContactForm7にメールアドレスの再入力チェック機能を追加する
add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_confrim', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_confrim', 11, 2 );
function wpcf7_validate_email_filter_confrim( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){ //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
                $posted_value = trim( (string) $_POST[$name] ); //前後空白の削除
                $posted_target_value = trim( (string) $_POST[$target_name] ); //前後空白の削除
            if ($posted_value != $posted_target_value) {
                $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
            }
        }
    }
    return $result;
}

//カスタム投稿タイプ別にアーカイブ表示件数を指定する
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_post_type_archive('blog') || $query->is_tax('blog_tag') || $query->is_search() ) {
        $query->set( 'posts_per_page', '8' );
        return;
    }
    if ( $query->is_tax('business_achievement_tag') ) {
        $query->set( 'posts_per_page', '9' );
        return;
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

//抜粋文の最後につく文字を変更
function cms_excerpt_more() {
	return '...';
}
add_filter( 'excerpt_more', 'cms_excerpt_more' );

//抜粋文の文字数をWP Multibyte Patch標準の110文字から80文字に変更
function cms_excerpt_length() {
	return 80;
}
add_filter( 'excerpt_mblength', 'cms_excerpt_length' );

//検索を特定の投稿タイプのみ対象にする
function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'blog' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );

/*********************************
    テンプレート内のコードを関数化
*********************************/

//メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
	if ( is_singular( 'post' ) ):
		$category_obj = get_the_category();
		return $category_obj[0]->name;
    elseif ( is_singular( 'blog' ) || is_archive( 'blog' ) || is_singular( 'business_achievement' ) ):
		return get_post_type_object(get_post_type())->label;
	elseif ( is_page() ):
        if ( get_field( 'page-visual-tilte' ) ) {
            return get_field( 'page-visual-tilte' );
           } else {
            return get_the_title();
           };
    elseif ( is_category() || is_tax() ):
        return single_cat_title();
	elseif ( is_search() ):
		return 'BLOG';
	elseif ( is_404() ):
		return 'ページが見つかりません';
	endif;
}

//特定の投稿タイプを抽出する関数（ページャー対応）
function get_custom_posts( $post_type, $number ) {
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $number,
        'paged' => $paged,
        );
    $custom_posts = new WP_Query( $args );
	return $custom_posts;
}

//特定の記事を抽出する関数
function get_specific_posts( $post_type, $taxonomy = null, $term = null, $number = -1 ) {
	if ( ! $term ):
		$terms_obj = get_terms( 'event' );
		$term = wp_list_pluck( $terms_obj, 'slug' );
	endif;
	
	$args = array(
		'post_type' => $post_type,
		'tax_query' => array(
			array(
				'taxonomy' => $taxonomy,
				'field' => 'slug',
				'terms' => $term,
            ),
		),
		'posts_per_page' => $number,
    );
	$specific_posts = new WP_Query( $args );
	return $specific_posts;
} 

//所属しているカテゴリー一覧のURLを取得
function get_category_url() {
    $cat = get_the_category(); 
    $cat_id = $cat[0]->cat_ID; 
    $link = get_category_link($cat_id);
    return $link;
}

//ページャーを表示
function page_navi() {
	the_posts_pagination( array(
		'mid_size' => 2,
		'prev_text' => '<i class="pager__icon fa-solid fa-angle-left"></i>',
		'next_text' => '<i class="pager__icon fa-solid fa-angle-right"></i>',
	) );
}

//各抜粋文を適度な長さに調整する
function get_flexible_excerpt( $number ) {
	$value = get_the_excerpt();
	$value = wp_trim_words( $value, $number, '...' );
	return $value;
}