<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div>
	<input type="text" value="<?php get_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'concerto' ); ?>" />
	</div>
</form>
