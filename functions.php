<?php

// 独自リソースを一元管理する
function my_enqueue_scripts() {
    $uri = esc_url( get_template_directory_uri() );
    wp_enqueue_style( 'reset_css' , $uri . '/assets/css/destyle.min.css' , array(), date("ymdHis", filemtime( $uri . '/assets/css/destyle.min.css' )) );
    wp_enqueue_style( 'splide_css' , $uri . '/assets/css/splide-core.min.css' , array(), date("ymdHis", filemtime( $uri . '/assets/css/splide-core.min.css' )) );
    wp_enqueue_style( 'style_css' , $uri . '/assets/css/style.css' , array(), date("ymdHis", filemtime( $uri . '/assets/css/dstyle.css' )) );
    wp_enqueue_script( 'splide_js' , $uri . '/assets/js/splide.min.js', array(), date("ymdHis", filemtime( $uri . '/assets/js/splide.min.js' )), true );
    wp_enqueue_script( 'main_js' , $uri . '/assets/js/main.js', array(), date("ymdHis", filemtime( $uri . '/assets/js/main.js' )), true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

// ヘッダー、フッターのカスタムメニュー化
register_nav_menus( array(
	'place_global' => ' グローバル',
	'place_footer' => ' フッターナビ',
 ) );

// 指定したIDの子ページのIDを取得
function get_child_id($id) {
    $args = array(
        'post_parent' => $id,
        'post_type' => 'page',
        'order' => 'ASC',
        ); 
    $posts = get_posts($args);
    $post_id = $post->ID;
    $page_id = get_page($post_id);
    return $page_id;
}

// メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
	if ( is_singular( 'post' ) ):
		$category_obj = get_the_category();
		return $category_obj[0]->name;
    elseif ( is_page( array('contact','contact-confirm','contact-finish') ) ):
        return 'お問い合わせ';
    elseif ( is_page( get_child_id(15) ) ):
        $parent_id = $post->post_parent; // 親ページのIDを取得
        $parent = get_post($parent_id);  // 親ページの情報を取得
        return get_the_title($parent->post_parent);
    elseif ( is_page( get_child_id(27) ) ):
        $parent_id = $post->post_parent; // 親ページのIDを取得
        $parent = get_post($parent_id);  // 親ページの情報を取得
        return get_the_title($parent->post_parent);
	elseif ( is_page() ):
		return get_the_title();
    elseif ( is_category() || is_tax() ):
        return single_cat_title();
	elseif ( is_404() ):
		return 'ページが見つかりません';
	endif;
}

// 所属しているカテゴリー一覧のURLを取得
function get_category_url() {
    $cat = get_the_category(); 
    $cat_id = $cat[0]->cat_ID; 
    $link = get_category_link($cat_id);
    return $link;
}

// 特定の記事を抽出する関数
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

// ContactForm7にメールアドレスの再入力チェック機能を追加する
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