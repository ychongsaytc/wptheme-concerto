<?php

function concerto_shortcodes_add() {
	add_shortcode( 'concerto-wpeasyarchives', 'concerto_shortcode_wpeasyarchives_handler'   );
	add_shortcode( 'concerto-pagelinks',      'concerto_shortcode_pagelinks_handler'        );
	add_shortcode( 'twitter_messages',        'concerto_shortcode_twitter_messages_handler' );
}
add_action( 'init', 'concerto_shortcodes_add' );

function concerto_shortcode_pagelinks_handler( $atts, $content = null ) {
	echo '<ul class="concerto-box">';
	wp_list_bookmarks( array(
		'title_li' => null,
		'title_before' => '<h3 class="concerto-box-title">',
		'title_after' => '</h3>',
		'orderby' => 'name'
	) );
	echo '</ul>';
}

function concerto_shortcode_wpeasyarchives_handler( $atts, $content = null ) {
	if( function_exists( 'wp_easyarchives' ) ) wp_easyarchives();
}

function concerto_shortcode_twitter_messages_handler( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'username' => null,
		'msgs' => 5,
		'list' => null,
		'timestamp' => null,
		'linked' => null,
		'hyperlinks' => null,
		'twitter_users' => null,
		'encode_utf8' => null
	), $atts ) );
	if( !empty( $username ) && function_exists( 'twitter_messages' ) ) {
		ob_start();
		twitter_messages( $username, $msgs, $list, $timestamp, $linked, $hyperlinks, $twitter_users, $encode_utf8 );
		$output = ob_get_clean();
		return $output;
	}
	return false;
}

