
<?php if( is_single() && get_option( 'show_avatars' ) && nlt_opt('is_display_author_info') ) : ?>
<div class="post-author-info vcard">
	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 120 ); ?>
	</div><!-- .author-avatar -->
	<div class="author-description">
		<h3 class="author-description-title"><?php printf( esc_html( 'About %s', 'concerto' ), get_the_author() ); ?></h3>
		<div class="author-bio"><?php the_author_meta( 'description' ); ?></div>
		<div class="author-link">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<?php printf( __( 'View all posts by %s', 'concerto' ).'<span class="meta-nav">&rarr;</span>', get_the_author() ); ?>
			</a>
		</div><!-- .author-link -->
	</div><!-- .author-description -->
</div><!-- .post-author-info -->
<?php endif; ?>
