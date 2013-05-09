<?php

load_theme_textdomain( 'nlt', get_stylesheet_directory() . '/languages' );

define( 'NLT_OPTIONS_KEY', 'neverland_theme_options' );

// set variable $content_width ( WP required )
$content_width = 650;

/* ========== Theme widgets ========== */

include( get_stylesheet_directory() . '/includes/nlt.widgets.php' );

/* ========== Theme options ========== */

include( get_stylesheet_directory() . '/includes/nlt.options.php' );

/* ========== Theme parts ========== */

include( get_stylesheet_directory() . '/includes/nlt.themeparts.php' );

/* ========== Theme setup ========== */

function nlt_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'nlt_theme_setup' );

function nlt_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'nlt' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'nlt' ),
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'init', 'nlt_widgets_init' );

function nlt_nav_menus_init() {
	register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'nlt' ) ) );
}
add_action( 'init', 'nlt_nav_menus_init' );

/* ========== Shortcodes ========== */

include( get_stylesheet_directory() . '/includes/nlt.shortcodes.php' );

/* ========== Scripts and styles ========== */

function nlt_init_scripts_and_styles_frontend() {
	wp_enqueue_style( 'nlt.global', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery.easing', get_stylesheet_directory_uri() . '/scripts/jquery.easing.js', array( 'jquery' ), '1.3', false );
	wp_enqueue_script( 'nlt.global', get_stylesheet_directory_uri() . '/scripts/nlt.global.js', array( 'jquery' ), false, false );
	$params = array(
		'menu_effect' => nlt_opt('menu_effect'),
	);
	wp_localize_script( 'nlt.global', 'nlt', $params );
	global $wp_query;
	if ( is_singular() )
		wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'nlt_init_scripts_and_styles_frontend' );

/* ========== Miscellaneous ========== */

function nlt_wp_title_filter( $title ) {
	global $page, $paged;
	if ( is_feed() ) return $title;
	if ( $paged >= 2 || $page >= 2 ) $title .= sprintf( __( 'Page %s', 'nlt' ), max( $paged, $page ) ) . ' &laquo; ';
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) $title .= ' &#124; ' . $site_description;
	return $title;
}
add_filter( 'wp_title', 'nlt_wp_title_filter' );

// make page menu show home link automatically
if( nlt_opt('is_display_homepage_menuitem') ) :
function nlt_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'nlt_page_menu_args' );
endif;

add_filter( 'use_default_gallery_style', '__return_false' );

function nlt_html5_iehack() {
	echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
}
add_action( 'wp_head', 'nlt_html5_iehack' );

function nlt_opt( $option_key ) {
	global $nlt_options;
	if( isset( $nlt_options[$option_key] ) ) {
		return $nlt_options[$option_key];
	}
	return false;
}

