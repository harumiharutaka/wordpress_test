<?php
/**
 * Plugin Name: My Gutenberg
 */

 function my_gutenberg_example() {

  // ブロック用のスクリプトを登録
	wp_register_script(
		'my-gutenberg-script',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-element' ),
		'1.0.0',
		true
	);

  // ブロックの定義を登録
	register_block_type( 'my-gutenberg/policy-heading', array(
		'editor_script' => 'my-gutenberg-script',
	) );

}
add_action( 'init', 'my_gutenberg_example' );