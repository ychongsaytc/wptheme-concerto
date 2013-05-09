
<nav class="navigation navigation-archives">
	<?php if( function_exists( 'wp_pagenavi' ) ) : ?>
	<?php wp_pagenavi(); ?>
	<?php else : ?>
	<div class="alignleft">
		<div class="nav-previous"><?php next_posts_link( __( 'Previous Entries', 'nlt' ) ); ?></div>
	</div>
	<div class="alignright">
		<div class="nav-next"><?php previous_posts_link( __( 'Next Entries', 'nlt' ) ); ?></div>
	</div>
	<div class="clearfix"></div>
	<?php endif; ?>
</nav><!-- .navigation -->
