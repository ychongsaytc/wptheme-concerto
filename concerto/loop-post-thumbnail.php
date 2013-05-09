<?php

if( nlt_opt('is_display_thumbnail') ) :
global $post;
$post_id = intval( $post->ID );
if ( $post_id > 0 ) {
	$html = get_the_post_thumbnail( $post_id, array(180, 180) );
	if( ! empty( $html ) ){
		echo '<div class="thumbnail"><a href="' . get_permalink($post_id) . '">' . $html . '</a></div>';
	}
}
endif;
