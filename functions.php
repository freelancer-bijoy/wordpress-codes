<?php
/** Tell WordPress to run my_theme_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'my_theme_setup' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function my_theme_setup(){
    // Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
    add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    // This theme uses post thumbnails
	  add_theme_support( 'post-thumbnails' );

    //Custom Background 
    add_theme_support( 'custom-background' );

    //Custom Header 
    add_theme_support( 'custom-header' );

    //Custom Logo 
    add_theme_support( 'custom-logo' );

    //Title Tag 
    add_theme_support( 'title-tag' );

    //Widgets 
    add_theme_support('widgets');

    // Load Text Domain
    load_theme_textdomain( 'my-theme', get_template_directory() . '/languages' );
}







function twentytwelve_setup() {

	

	

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'twentytwelve', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentytwelve' ),
		'Secondary' => __( 'Secondary Navigation', 'twentytwelve' ),
	) );

	// This theme allows users to set a custom background
	add_custom_background();

	// Your changeable header business starts here
	if ( ! defined( 'HEADER_TEXTCOLOR' ) )
		define( 'HEADER_TEXTCOLOR', '' );

	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	if ( ! defined( 'HEADER_IMAGE' ) )
		define( 'HEADER_IMAGE', '%s/images/headers/path.jpg' );

	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to twentytwelve_header_image_width and twentytwelve_header_image_height to change these values.
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentytwelve_header_image_width', 940 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentytwelve_header_image_height', 198 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 940 pixels wide by 198 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Don't support text inside the header image.
	if ( ! defined( 'NO_HEADER_TEXT' ) )
		define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See twentytwelve_admin_header_style(), below.
	// add_custom_image_header( '', 'twentytwelve_admin_header_style' );

	// ... and thus ends the changeable header business.
