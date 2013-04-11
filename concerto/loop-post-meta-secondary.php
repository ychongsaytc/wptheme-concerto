<?php global $post, $concerto_options; ?>
<?php if( ! is_page() && ! is_attachment() ) : ?>
<div class="post-footer">
	<?php _e( 'Categories: ', 'concerto' ); ?> <?php the_category( ', ' ); ?><?php the_tags(' | '.__( 'Tags: ', 'concerto' ), ', ', '' ); ?>
</div><!-- .post-meta -->
<?php endif; ?>
