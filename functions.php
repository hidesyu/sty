<?php

function post_output_css() {
    $pt = get_post_type();
    if ($pt == 'page') {
        $hide_postdiv_css = '<style type="text/css">#postdiv, #postdivrich { display: none; }</style>';
        echo $hide_postdiv_css;
    }
}
add_action('admin_head', 'post_output_css');



// add_action( 'enqueue_block_editor_assets', function() {
// 	$file_css = 'editor.css';
// 	wp_enqueue_style( 'my-block', plugins_url( $file_css, __FILE__ ), array( 'wp-block-library' ) );
// } );

add_action( 'enqueue_block_assets', function() {
	$file_css = 'editor.css';
	wp_enqueue_style( 'my-block', plugins_url( $file_css, __FILE__ ), array( 'wp-block-library' ) );
	// wp_enqueue_style( 'my-block', plugins_url( $file_css, __FILE__ ), array( 'wp-block-styles' ) );
} );
