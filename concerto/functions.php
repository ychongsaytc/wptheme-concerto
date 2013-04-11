<?php

load_theme_textdomain( 'concerto', get_stylesheet_directory() . '/languages' );

/* ========== Theme widgets ========== */

include( get_stylesheet_directory() . '/includes/concerto.widgets.php' );

/* ========== Theme parts ========== */

include( get_stylesheet_directory() . '/includes/concerto.themeparts.php' );

/* ========== Theme options ========== */

include( get_stylesheet_directory() . '/includes/concerto.options.php' );

/* ========== Theme setup ========== */

function concerto_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'concerto_theme_setup' );

function concerto_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'concerto' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'concerto' ),
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'init', 'concerto_widgets_init' );

function concerto_nav_menus_init() {
	register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'concerto' ) ) );
}
add_action( 'init', 'concerto_nav_menus_init' );

// set variable $content_width ( WP required )
$content_width = 650;

/* ========== Shortcodes ========== */

include( get_stylesheet_directory() . '/includes/concerto.shortcodes.php' );

/* ========== Scripts and styles ========== */

function concerto_init_scripts_and_styles() {
	global $concerto_options;
	if( ! is_admin() ) {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-easing', get_stylesheet_directory_uri() . '/scripts/jquery.easing.js', array( 'jquery' ), '1.3', false );
		wp_enqueue_script( 'concerto-global', get_stylesheet_directory_uri() . '/scripts/concerto-global.js', array( 'jquery' ) );
		wp_enqueue_script( 'concerto-menu-arrow', get_stylesheet_directory_uri() . '/scripts/concerto-menu-arrow.js', array( 'jquery' ) );
		switch( $concerto_options['menu_effect'] ) {
			case 'fade':
				wp_enqueue_script( 'concerto-menu-effect-fade', get_stylesheet_directory_uri() . '/scripts/concerto-menu-effect-fade.js' );
				break;
			case 'slide':
				wp_enqueue_script( 'concerto-menu-effect-slide', get_stylesheet_directory_uri() . '/scripts/concerto-menu-effect-slide.js' );
				break;
			case 'flexible':
				wp_enqueue_script( 'concerto-menu-effect-flexible', get_stylesheet_directory_uri() . '/scripts/concerto-menu-effect-flexible.js' );
				break;
			default:
				wp_enqueue_script( 'concerto-menu-effect-none', get_stylesheet_directory_uri() . '/scripts/concerto-menu-effect-none.js' );
				break;
		}
	}
}
add_action( 'wp_enqueue_scripts', 'concerto_init_scripts_and_styles' );

/* ========== Miscellaneous ========== */

function concerto_wp_title_filter( $title ) {
	global $page, $paged;
	if ( is_feed() ) return $title;
	if ( $paged >= 2 || $page >= 2 ) $title .= sprintf( __( 'Page %s', 'concerto' ), max( $paged, $page ) ) . ' &laquo; ';
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) $title .= ' &#124; ' . $site_description;
	return $title;
}
add_filter( 'wp_title', 'concerto_wp_title_filter' );

// make page menu show home link automatically
if( $concerto_options['is_display_homepage_menuitem'] ) :
function concerto_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'concerto_page_menu_args' );
endif;

add_filter( 'use_default_gallery_style', '__return_false' );

function concerto_html5_iehack() {
	echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
}
add_action( 'wp_head', 'concerto_html5_iehack' );

