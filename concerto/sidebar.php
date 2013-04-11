<?php global $concerto_options; ?>

<section id="secondary" role="complementary" class="sidebar">

	<?php if( ! dynamic_sidebar('primary-widget-area') ) : ?>

	<aside id="recent-posts-2" class="widget-container widget_recent_entries">
		<h3 class="widget-title"><?php _e( 'Recent Posts', 'concerto' ); ?></h3>
		<ul>
			<?php
				$posts = get_posts( array( 'numberposts' => 5, 'orderby' => 'post_date' ) );
				foreach( $posts as $post ) {
					setup_postdata( $post );
					echo '<li><a href="' . get_permalink() . '" title="' . the_title_attribute( array( 'echo' => false ) ) . '">' . get_the_title() . '</a></li>';
				}
			?>
		</ul>
	</aside>

	<aside id="categories-2" class="widget-container widget_categories">
		<h3 class="widget-title"><?php _e( 'Categories', 'concerto' ); ?></h3>
		<ul>
			<?php wp_list_categories( array( 'title_li' => '' ) ); ?>
		</ul>
	</aside>

	<aside id="tag_cloud-2" class="widget-container widget_tag_cloud">
		<h3 class="widget-title"><?php _e( 'Tag Cloud', 'concerto' ); ?></h3>
		<ul>
			<?php wp_tag_cloud(); ?>
		</ul>
	</aside>

	<aside id="archives-2" class="widget-container widget_archive">
		<h3 class="widget-title"><?php _e( 'Archives', 'concerto' ); ?></h3>
		<ul>
			<?php wp_get_archives(); ?>
		</ul>
	</aside>

	<aside id="search-2" class="widget-container widget_search">
		<?php get_search_form(); ?>
	</aside>

	<?php endif; ?>

</section><!-- #secondary -->
