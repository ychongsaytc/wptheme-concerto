<?php global $post, $concerto_options; ?>
<nav class="navigation navigation-archive">
	<?php if( function_exists( 'wp_pagenavi' ) ) : ?>
	<?php wp_pagenavi(); ?>
	<?php else : ?>
	<div class="alignleft">
		<div class="nav-previous"><?php next_posts_link( __( 'Previous Entries', 'concerto' ) ); ?></div>
	</div>
	<div class="alignright">
		<div class="nav-next"><?php previous_posts_link( __( 'Next Entries', 'concerto' ) ); ?></div>
	</div>
	<div class="clearfix"></div>
	<?php endif; ?>
</nav><!-- .navigation -->
