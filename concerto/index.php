<?php get_header(); ?>

<section id="primary">

<?php if( is_archive() || is_search() ) : ?>
	<div class="page-meta">
	<?php if( is_category() ) : ?>
		<?php printf( __( 'Category Archives: %s', 'nlt' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) ) printf( '<p>%s</p>', $category_description );
		?>
	<?php elseif( is_tag() ) : ?>
		<?php printf( __( 'Tag Archives: %s', 'nlt' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
		<?php
			$tag_description = tag_description();
			if ( ! empty( $tag_description ) ) printf( '<p>%s</p>', $tag_description );
		?>
	<?php elseif( is_author() ) : ?>
		<?php printf( __( 'Author Archives: %s', 'nlt' ), '<span>' . get_the_author_meta( 'display_name', get_query_var( 'author' ) ) . '</span>' ); ?>
	<?php elseif( is_search() ) : ?>
		<?php printf( __( 'Search Results for: %s', 'nlt' ), '<span>' . get_search_query() . '</span>' ); ?>
	<?php elseif( is_day() ) : ?>
		<?php printf( __( 'Daily Archives: %s', 'nlt' ), '<span>' . get_the_date() . '</span>' ); ?>
	<?php elseif( is_month() ) : ?>
		<?php printf( __( 'Monthly Archives: %s', 'nlt' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); ?>
	<?php elseif( is_year() ) : ?>
		<?php printf( __( 'Yearly Archives: %s', 'nlt' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?>
	<?php else : ?>
		<?php printf( __( 'Blog Archives', 'nlt' ) ); ?>
	<?php endif; ?>
		<div class="clearfix"></div>
	</div><!-- .page-meta -->
<?php endif; ?>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<hgroup class="post-header">

			<?php get_template_part( 'loop', 'post-title' ); ?>

			<?php get_template_part( 'loop', 'post-meta-primary' ); ?>

		</hgroup>

		<div class="post-entry">
			<?php get_template_part( 'loop', 'post-thumbnail' ); ?>
			<?php the_content( __( 'Read more ...', 'nlt' ) ); ?>
			<div class="clearfix"></div>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages: ', 'nlt' ), 'after' => '</div>', 'link_before' => '<span class="page-link-item">', 'link_after' => '</span>' ) ); ?>
		</div><!-- .post-entry -->

		<?php get_template_part( 'loop', 'post-meta-secondary' ); ?>

		<?php get_template_part( 'loop', 'authorinfo' ); ?>

		<?php get_template_part( 'loop', 'byncsa' ); ?>

	</article><!-- .post -->

	<?php get_template_part( 'navigation', 'single' ); ?>

	<?php comments_template(); ?>

	<?php endwhile; ?>

	<?php get_template_part( 'navigation', 'archives' ); ?>

<?php else : ?>

	<?php _e( 'Sorry, no posts matched your criteria.', 'nlt' ); ?>

<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
