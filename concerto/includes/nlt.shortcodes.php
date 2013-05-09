<?php


function nlt_shortcodes_add() {
	add_shortcode( 'nlt-pagelinks',      'nlt_shortcode_pagelinks_handler'        );
	add_shortcode( 'nlt-wpeasyarchives', 'nlt_shortcode_wpeasyarchives_handler'   );
}
add_action( 'init', 'nlt_shortcodes_add' );

function nlt_shortcode_pagelinks_handler( $atts, $content = null ) {
	echo '<ul class="nlt-box">';
	wp_list_bookmarks( array(
		'title_li' => null,
		'title_before' => '<h3 class="nlt-box-title">',
		'title_after' => '</h3>',
		'orderby' => 'name'
	) );
	echo '</ul>';
}

function nlt_shortcode_wpeasyarchives_handler( $atts, $content = null ) {
	if( function_exists( 'wp_easyarchives' ) ) wp_easyarchives();
}

