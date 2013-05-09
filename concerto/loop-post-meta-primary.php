
<?php if( ! is_page() || nlt_opt('is_display_post_meta_in_page') ) : ?>
<div class="post-meta">
	<?php printf( __( 'Posted on %1$s by %2$s', 'nlt' ),
		sprintf( '<time class="date time published updated sc" datetime="%s" title="%s">%s</time> ', get_the_time( 'Y-m-d\TH:i:s.uP' ), get_the_time(), get_the_date() ),
		sprintf( '<a href="%s" title="%s">%s</a> ', get_author_posts_url( get_the_author_meta( 'ID' ) ), esc_attr( get_the_author() ), esc_html( get_the_author() ) )
	); ?>
	, <span class="comments_popup_link"><?php comments_popup_link( __( 'No Comments', 'nlt' ), __( '1 Comment', 'nlt' ), __( '% Comments', 'nlt' ), '', __( 'Comments off', 'nlt' ) ); ?></span>
	<?php edit_post_link( __( 'Edit', 'nlt' ), ' | ', '' ); ?>
</div><!-- .post-meta -->
<?php endif; ?>
