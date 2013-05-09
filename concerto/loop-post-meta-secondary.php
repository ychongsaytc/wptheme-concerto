
<?php if( ! is_page() && ! is_attachment() ) : ?>
<div class="post-footer">
	<?php _e( 'Categories: ', 'nlt' ); ?><?php the_category( ', ' ); ?><?php the_tags( ' | '.__( 'Tags: ', 'nlt' ), ', ', '' ); ?>
</div><!-- .post-footer -->
<?php endif; ?>
