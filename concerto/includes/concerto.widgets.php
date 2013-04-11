<?php

class concerto_widget_randomposts extends WP_Widget {

	function concerto_widget_randomposts() {
		parent::__construct( false, __( 'Concerto Random Posts Widget', 'nest' ), array( 'description' => __( 'A widget for displaying random posts.', 'concerto' ) ) );
	}

	function widget( $args, $instance ) {
		extract( $args );
		$numberposts = ( ( isset( $instance['numberposts'] ) && ( ! intval( $instance['numberposts'] ) ) ) ) ? intval( $instance['numberposts'] ) : 5;
		$title = ( ( isset( $instance['title'] ) ) && ( ! empty( $instance['title'] ) ) ) ? $instance['title'] : __( 'Random Posts', 'concerto' );
		?>
			<?php echo $before_widget; ?>
			<?php if( ! empty( $title ) ) echo $before_title . $title . $after_title; ?>
			<ul>
				<?php
					$posts = get_posts( array( 'numberposts' => $numberposts, 'orderby' => 'rand' ) );
					foreach( $posts as $post ) {
						echo '<li><a href="' . get_permalink( $post->ID ) . '" title="' . esc_attr( strip_tags( get_the_title( $post->ID ) ) ) . '">' . get_the_title( $post->ID ) . '</a></li>';
					}
					wp_reset_query();
				?>
			</ul>
			<?php echo $after_widget; ?>
		<?php
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	function form( $instance ) {
		?>
			<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title: ', 'concerto' ); ?></label><input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php if( isset( $instance['title'] ) ) { echo esc_attr( $instance['title'] ); } ?>" /></p>
			<p><label for="<?php echo $this->get_field_id( 'numberposts' ); ?>"><?php _e( 'Number of posts to show: ', 'concerto' ); ?></label><input id="<?php echo $this->get_field_id( 'numberposts' ); ?>" name="<?php echo $this->get_field_name( 'numberposts' ); ?>" type="text" value="<?php if( isset( $instance['numberposts'] ) ) { echo esc_attr( $instance['numberposts'] ); } else { echo '5'; } ?>" size="3"></p>
		<?php
	}

}

function concerto_register_widgets() {
	register_widget( 'concerto_widget_randomposts' );
}
add_action( 'widgets_init', 'concerto_register_widgets' );

