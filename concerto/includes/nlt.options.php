<?php


// all items of theme options
$nlt_options_items = array (
	array(
		'id' => 'sidebar_pos_home',
		'name' => __( 'Sidebar Position: Homepage', 'nlt' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'nlt' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'nlt' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'nlt' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in homepage.', 'nlt' )
	),
	array(
		'id' => 'sidebar_pos_archive',
		'name' => __( 'Sidebar Position: Archives', 'nlt' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'nlt' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'nlt' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'nlt' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in archives page.', 'nlt' )
	),
	array(
		'id' => 'sidebar_pos_single',
		'name' => __( 'Sidebar Position: Single Post', 'nlt' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'nlt' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'nlt' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'nlt' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in single post and standard pages.', 'nlt' )
	),
	array(
		'id' => 'logo_url',
		'name' => __( 'Logo URL', 'nlt' ),
		'type' => 'text',
		'desc' => __( 'Put your website logo URL here. (leave it blank for displaying site name and site description.)', 'nlt' )
	),
	array(
		'id' => 'menu_effect',
		'name' => __( 'Multi-level Menu Effect', 'nlt' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'None', 'nlt' ), 'value' => 'none' ), array( 'name' => __( 'Fade', 'nlt' ), 'value' => 'fade' ), array( 'name' => __( 'Slide', 'nlt' ), 'value' => 'slide' ), array( 'name' => __( 'Flexible', 'nlt' ), 'value' => 'flexible' ) ),
		'desc' => __( 'Select the effect of multi-level navigation menu.', 'nlt' )
	),
	array(
		'id' => 'is_display_homepage_menuitem',
		'name' => __( 'Homepage menu item in navigation menu', 'nlt' ),
		'type' => 'checkbox',
		'data' => __( 'Display homepage menu item', 'nlt' ),
		'desc' => __( 'Enabling this will display the index page menu item in the header navigation menu.', 'nlt' )
	),
	array(
		'id' => 'is_display_thumbnail',
		'name' => __( 'Post Thumbnail', 'nlt' ),
		'type' => 'checkbox',
		'data' => __( 'Display post thumbnail image', 'nlt' ),
		'desc' => __( 'Enabling this will display thumbnail images in a single post page and post archives page.', 'nlt' )
	),
	array(
		'id' => 'is_display_author_info',
		'name' => __( 'Author Information', 'nlt' ),
		'type' => 'checkbox',
		'data' => __( 'Display author information', 'nlt' ),
		'desc' => __( 'Enabling this will display your author information in a single post page. (avatars visibility required)', 'nlt' )
	),
	array(
		'id' => 'is_display_by-nc-sa',
		'name' => __( 'BY-NC-SA License Notice', 'nlt' ),
		'type' => 'checkbox',
		'data' => __( 'Display BY-NC-SA license notice', 'nlt' ),
		'desc' => __( 'Enabling this will display the BY-NC-SA License Notice in a singular page.', 'nlt' )
	),
	array(
		'id' => 'is_display_post_meta_in_page',
		'name' => __( 'Post meta in pages', 'nlt' ),
		'type' => 'checkbox',
		'data' => __( 'Display post meta-information in pages', 'nlt' ),
		'desc' => __( 'Enabling this will display the post meta-information under the post title in pages.', 'nlt' )
	),
	array(
		'id' => 'is_display_posts_navi_links_in_single',
		'name' => __( 'Posts navigation links in single posts', 'nlt' ),
		'type' => 'checkbox',
		'data' => __( 'Display posts navigation in single posts', 'nlt' ),
		'desc' => __( 'Enabling this will display the posts navigation links (previous and next post) in a single post.', 'nlt' )
	),
	array(
		'id' => 'rss_url',
		'name' => __( 'RSS URL', 'nlt' ),
		'type' => 'text',
		'desc' => __( 'Put your full RSS subscribe URL here. (with http://, leave it blank for displaying the standard URL.)', 'nlt' )
	),
	array(
		'id' => 'sns_tw',
		'name' => __( 'Twitter URL', 'nlt' ),
		'type' => 'text',
		'desc' => __( 'Put your full Twitter URL here. (with http://, leave it blank for displaying none.)', 'nlt' )
	),
	array(
		'id' => 'sns_fb',
		'name' => __( 'Facebook URL', 'nlt' ),
		'type' => 'text',
		'desc' => __( 'Put your full Facebook URL here. (with http://, leave it blank for displaying none.)', 'nlt' )
	),
	array(
		'id' => 'sns_wb',
		'name' => __( 'Sina WeiBo URL', 'nlt' ),
		'type' => 'text',
		'desc' => __( 'Put your full Sina WeiBo URL here. (with http://, leave it blank for displaying none.)', 'nlt' )
	),
	array(
		'id' => 'code_siteinfo',
		'name' => __( 'Custom Website Info String', 'nlt' ),
		'type' => 'textarea',
		'desc' => __( 'Some HTML code replaced the footer\'s website information.', 'nlt' )
	)
);

// default values of theme options
$nlt_options_default_data = array(
	'sidebar_pos_home'                      => 'right',
	'sidebar_pos_archive'                   => 'right',
	'sidebar_pos_single'                    => 'right',
	'menu_effect'                           => 'fade',
	'is_display_homepage_menuitem'          => '1',
	'is_display_author_info'                => '0',
	'is_display_by-nc-sa'                   => '0',
	'is_display_post_meta_in_page'          => '0',
	'is_display_posts_navi_links_in_single' => '1',
);

// register option via WP options
function nlt_options_init(){
	register_setting( NLT_OPTIONS_KEY, NLT_OPTIONS_KEY, 'nlt_options_validate' );
}
add_action( 'admin_init', 'nlt_options_init' );

// validation of option input
function nlt_options_validate( $input ) {
	global $nlt_options_items;
	foreach ( $nlt_options_items as $item ) {
		if( !isset( $input[$item['id']] ) ) $input[$item['id']] = '';
		switch ( $item['type'] ) {
			case 'text':
				$input[$item['id']] = wp_filter_nohtml_kses( $input[$item['id']] );
				break;
			case 'textarea':
				$input[$item['id']] = $input[$item['id']];
				break;
			case 'checkbox':
				$input[$item['id']] = ( $input[$item['id']] == 1 ? 1 : 0 );
				break;
		}
	}
	return $input;
}

// set options values to default if empty
function nlt_options_make_default() {
	global $nlt_options_items, $nlt_options_default_data;
	$nlt_options = get_option( NLT_OPTIONS_KEY );
	foreach ( $nlt_options_items as $item ) {
		if ( ! isset( $nlt_options[$item['id']] ) ) {
			if ( isset ( $nlt_options_default_data[$item['id']] ) ) {
				$nlt_options[$item['id']] = $nlt_options_default_data[$item['id']];
			} else {
				$nlt_options[$item['id']] = '';
			}
		}
	}
	update_option( NLT_OPTIONS_KEY, $nlt_options );
}
add_action( 'init', 'nlt_options_make_default' );

// add page link to admin menu
function nlt_options_add_page() {
	add_theme_page( __( 'Theme Options', 'nlt' ), __( 'Theme Options', 'nlt' ), 'edit_theme_options', 'theme_options', 'nlt_options_do_page' );
}
add_action( 'admin_menu', 'nlt_options_add_page' );

// display options page
function nlt_options_do_page() {

	global $nlt_options_items;

	if( isset( $_REQUEST['_wpnonce'] ) ) {
		if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], NLT_OPTIONS_KEY . '-options' ) ) die( 'Security check' );
	}

	if ( ! isset( $_GET['settings-updated'] ) ) $_GET['settings-updated'] = false;

	?>
	<div class="wrap">

		<?php screen_icon(); echo "<h2>" . wp_get_theme() . ' ' . __( 'Theme Options', 'nlt' ) . "</h2>"; ?>

		<?php if ( false !== $_GET['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved.', 'nlt' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( NLT_OPTIONS_KEY ); ?>
			<?php $nlt_options = get_option( NLT_OPTIONS_KEY ); ?>
			<table class="form-table">
				<?php foreach( $nlt_options_items as $item ) { ?>
				<tr valign="top">
					<th scope="row"><?php echo esc_attr( $item['name'] ); ?></th>
					<td>
						<?php if( $item['type'] == 'text' ) : ?>
						<input name="<?php echo NLT_OPTIONS_KEY . '['.$item['id'].']'; ?>" type="text" value="<?php if( $nlt_options[$item['id']] ) echo esc_attr( $nlt_options[$item['id']] ); ?>" size="80" />
						<?php elseif( $item['type'] == 'textarea' ) : ?>
						<textarea name="<?php echo NLT_OPTIONS_KEY . '['.$item['id'].']'; ?>" rows="5" cols="60"><?php if( $nlt_options[$item['id']] ) echo esc_textarea( $nlt_options[$item['id']] ); ?></textarea>
						<?php elseif( $item['type'] == 'select' ) : ?>
						<select name="<?php echo NLT_OPTIONS_KEY . '['.$item['id'].']'; ?>">
							<?php foreach( $item['data'] as $select_data ) : ?>
							<option value="<?php echo $select_data['value']; ?>"<?php selected( $nlt_options[$item['id']], $select_data['value'] ); ?>><?php echo esc_attr( $select_data['name'] ); ?></option>
							<?php endforeach; ?>
						</select>
						<?php elseif( $item['type'] == 'checkbox' ) : ?>
							<label for="<?php echo NLT_OPTIONS_KEY . '['.$item['id'].']'; ?>"><input name="<?php echo NLT_OPTIONS_KEY . '['.$item['id'].']'; ?>" id="<?php echo NLT_OPTIONS_KEY . '['.$item['id'].']'; ?>" type="checkbox" value="1"<?php checked( '1', $nlt_options[$item['id']] ); ?> /><?php echo esc_attr( $item['data'] ); ?></label>
						<?php endif; ?>
						<?php if( ! empty( $item['desc'] ) ) : ?>
						<br/><label class="description" for="<?php echo NLT_OPTIONS_KEY . '['.$item['id'].']'; ?>"><?php echo esc_attr( $item['desc'] ); ?></label>
						<?php endif; ?>
					</td>
				</tr>
				<?php } // endforeach; ?>
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'nlt' ); ?>" />
			</p>
		</form>

	</div><!-- .wrap -->
	<?php

}

// initialize theme options variable array
$nlt_options = get_option( NLT_OPTIONS_KEY );

