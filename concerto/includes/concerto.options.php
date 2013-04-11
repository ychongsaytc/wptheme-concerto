<?php

// all items of theme options
$concerto_options_items = array (
	array(
		'id' => 'sidebar_pos_home',
		'name' => __( 'Sidebar Position: Homepage', 'concerto' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'concerto' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'concerto' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'concerto' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in homepage.', 'concerto' )
	),
	array(
		'id' => 'sidebar_pos_archive',
		'name' => __( 'Sidebar Position: Archives', 'concerto' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'concerto' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'concerto' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'concerto' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in archives page.', 'concerto' )
	),
	array(
		'id' => 'sidebar_pos_single',
		'name' => __( 'Sidebar Position: Single Post', 'concerto' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'concerto' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'concerto' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'concerto' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in single post and standard pages.', 'concerto' )
	),
	array(
		'id' => 'logo_url',
		'name' => __( 'Logo URL', 'concerto' ),
		'type' => 'text',
		'desc' => __( 'Put your website logo URL here. (leave it blank for displaying site name and site description.)', 'concerto' )
	),
	array(
		'id' => 'menu_effect',
		'name' => __( 'Multi-level Menu Effect', 'concerto' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'None', 'concerto' ), 'value' => 'none' ), array( 'name' => __( 'Fade', 'concerto' ), 'value' => 'fade' ), array( 'name' => __( 'Slide', 'concerto' ), 'value' => 'slide' ), array( 'name' => __( 'Flexible', 'concerto' ), 'value' => 'flexible' ) ),
		'desc' => __( 'Select the effect of multi-level navigation menu.', 'concerto' )
	),
	array(
		'id' => 'is_display_homepage_menuitem',
		'name' => __( 'Homepage menu item in navigation menu', 'concerto' ),
		'type' => 'checkbox',
		'data' => __( 'Display homepage menu item', 'concerto' ),
		'desc' => __( 'Enabling this will display the index page menu item in the header navigation menu.', 'concerto' )
	),
	array(
		'id' => 'is_display_author_info',
		'name' => __( 'Author Information', 'concerto' ),
		'type' => 'checkbox',
		'data' => __( 'Display author information', 'concerto' ),
		'desc' => __( 'Enabling this will display your author information in a single post page. (avatars visibility required)', 'concerto' )
	),
	array(
		'id' => 'is_display_by-nc-sa',
		'name' => __( 'BY-NC-SA License Notice', 'concerto' ),
		'type' => 'checkbox',
		'data' => __( 'Display BY-NC-SA license notice', 'concerto' ),
		'desc' => __( 'Enabling this will display the BY-NC-SA License Notice in a singular page.', 'concerto' )
	),
	array(
		'id' => 'is_display_post_meta_in_page',
		'name' => __( 'Post meta in pages', 'concerto' ),
		'type' => 'checkbox',
		'data' => __( 'Display post meta-information in pages', 'concerto' ),
		'desc' => __( 'Enabling this will display the post meta-information under the post title in pages.', 'concerto' )
	),
	array(
		'id' => 'is_display_posts_navi_links_in_single',
		'name' => __( 'Posts navigation links in single posts', 'concerto' ),
		'type' => 'checkbox',
		'data' => __( 'Display posts navigation in single posts', 'concerto' ),
		'desc' => __( 'Enabling this will display the posts navigation links (previous and next post) in a single post.', 'concerto' )
	),
	array(
		'id' => 'rss_url',
		'name' => __( 'RSS URL', 'concerto' ),
		'type' => 'text',
		'desc' => __( 'Put your full RSS subscribe URL here. (with http://, leave it blank for displaying the standard URL.)', 'concerto' )
	),
	array(
		'id' => 'twitter_url',
		'name' => __( 'Twitter URL', 'concerto' ),
		'type' => 'text',
		'desc' => __( 'Put your full Twitter URL here. (with http://, leave it blank for displaying none.)', 'concerto' )
	),
	array(
		'id' => 'facebook_url',
		'name' => __( 'Facebook URL', 'concerto' ),
		'type' => 'text',
		'desc' => __( 'Put your full Facebook URL here. (with http://, leave it blank for displaying none.)', 'concerto' )
	),
	array(
		'id' => 'code_siteinfo',
		'name' => __( 'Custom Website Info String', 'concerto' ),
		'type' => 'textarea',
		'desc' => __( 'Some HTML code replaced the footer\'s website information.', 'concerto' )
	)
);

// default values of the theme options
$concerto_options_default_data = array(
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

add_action( 'admin_init', 'concerto_options_init' );
add_action( 'admin_menu', 'concerto_options_add_page' );
add_action( 'init', 'concerto_options_make_default' );

function concerto_options_init(){
	register_setting( 'concerto_theme_options', 'concerto_theme_options', 'concerto_options_validate' );
}
function concerto_options_add_page() {
	add_theme_page( __( 'Theme Options', 'concerto' ), __( 'Theme Options', 'concerto' ), 'edit_theme_options', 'theme_options', 'concerto_options_do_page' );
}
function concerto_options_validate( $input ) {
	global $concerto_options_items;
	foreach ( $concerto_options_items as $item ) {
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
function concerto_options_make_default() {
	global $concerto_options_items, $concerto_options_default_data;
	$concerto_options = get_option( 'concerto_theme_options' );
	foreach ( $concerto_options_items as $item ) {
		if ( ! isset( $concerto_options[$item['id']] ) ) {
			if ( isset ( $concerto_options_default_data[$item['id']] ) ) {
				$concerto_options[$item['id']] = $concerto_options_default_data[$item['id']];
			} else {
				$concerto_options[$item['id']] = '';
			}
		}
	}
	update_option( 'concerto_theme_options', $concerto_options );
}

// display admin theme options page
function concerto_options_do_page() {

	global $concerto_options_items;

	if ( ! isset( $_GET['settings-updated'] ) ) $_GET['settings-updated'] = false;

	?>
	<div class="wrap">

		<?php screen_icon(); echo "<h2>" . wp_get_theme() . ' ' . __( 'Theme Options', 'concerto' ) . "</h2>"; ?>

		<?php if ( false !== $_GET['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved.', 'concerto' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'concerto_theme_options' ); ?>
			<?php $concerto_options = get_option( 'concerto_theme_options' ); ?>
			<table class="form-table">
				<?php foreach( $concerto_options_items as $item ) { ?>
				<tr valign="top">
					<th scope="row"><?php echo esc_attr( $item['name'] ); ?></th>
					<td>
						<?php if( $item['type'] == 'text' ) : ?>
						<input name="<?php echo 'concerto_theme_options['.$item['id'].']'; ?>" type="text" value="<?php if( $concerto_options[$item['id']] ) echo esc_attr( $concerto_options[$item['id']] ); ?>" size="80" />
						<?php elseif( $item['type'] == 'textarea' ) : ?>
						<textarea name="<?php echo 'concerto_theme_options['.$item['id'].']'; ?>" rows="5" cols="60"><?php if( $concerto_options[$item['id']] ) echo esc_textarea( $concerto_options[$item['id']] ); ?></textarea>
						<?php elseif( $item['type'] == 'select' ) : ?>
						<select name="<?php echo 'concerto_theme_options['.$item['id'].']'; ?>">
							<?php foreach( $item['data'] as $select_data ) : ?>
							<option value="<?php echo $select_data['value']; ?>"<?php selected( $concerto_options[$item['id']], $select_data['value'] ); ?>><?php echo esc_attr( $select_data['name'] ); ?></option>
							<?php endforeach; ?>
						</select>
						<?php elseif( $item['type'] == 'checkbox' ) : ?>
							<label for="<?php echo 'concerto_theme_options['.$item['id'].']'; ?>"><input name="<?php echo 'concerto_theme_options['.$item['id'].']'; ?>" id="<?php echo 'concerto_theme_options['.$item['id'].']'; ?>" type="checkbox" value="1"<?php checked( '1', $concerto_options[$item['id']] ); ?> /><?php echo esc_attr( $item['data'] ); ?></label>
						<?php endif; ?>
						<?php if( ! empty( $item['desc'] ) ) : ?>
						<br/><label class="description" for="<?php echo 'concerto_theme_options['.$item['id'].']'; ?>"><?php echo esc_attr( $item['desc'] ); ?></label>
						<?php endif; ?>
					</td>
				</tr>
				<?php } // endforeach; ?>
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'concerto' ); ?>" />
			</p>
		</form>

	</div><!-- .wrap -->
	<?php

}

// initialize theme options variable array
$concerto_options = get_option( 'concerto_theme_options' );

