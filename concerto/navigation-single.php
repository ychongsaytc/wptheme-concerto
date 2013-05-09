
<?php if( is_single() && nlt_opt('is_display_posts_navi_links_in_single') ) : ?>
<nav class="navigation navigation-single">
	<div class="alignleft">
		<div class="nav-previous"><?php next_post_link( __( '%link', 'nlt' ) ); ?></div>
	</div>
	<div class="alignright">
		<div class="nav-next"><?php previous_post_link( __( '%link', 'nlt' ) ); ?></div>
	</div>
	<div class="clearfix"></div>
</nav><!-- .navigation -->
<?php endif; ?>
