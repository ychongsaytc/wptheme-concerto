<?php global $post; ?>
<h2 class="post-title">
	<?php if( is_single() || is_page() || is_attachment() ) : ?>
		<?php the_title(); ?>
	<?php else : ?>
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	<?php endif; ?>
</h2>
