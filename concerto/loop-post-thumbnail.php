<?php
	global $post;
	$post_id = intval( $post->ID );
	if ( $post_id > 0 ) {
		$html = get_the_post_thumbnail( $id, array(180, 180) );
		if( ! empty( $html ) ){
			echo '<div class="thumbnail"><a href="' . get_permalink($id) . '">' . $html . '</a></div>';
		}
	}
