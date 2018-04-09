<?php
/*
 * Requiring Files
*/
require_once(get_template_directory().'/inc/enqueue.php');

/*
 * Tell WordPress to run my_theme_setup() when the 'after_setup_theme' hook is run. 
*/
add_action( 'after_setup_theme', 'my_theme_setup' );

/*
 * Sets up theme defaults and registers support for various WordPress features.
*/
function my_theme_setup(){
    // Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
    	add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    // This theme uses post thumbnails
	  add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'twentytwelve' ),
		'Secondary' => __( 'Secondary Navigation', 'twentytwelve' ),
	) );

   // This theme allows users to set a custom background
   	add_theme_support( 'custom-background' );

    //Custom Header 
    	add_theme_support( 'custom-header' );

    //Custom Logo 
    	add_theme_support( 'custom-logo' );

    //Title Tag 
    	add_theme_support( 'title-tag' );

    //Widgets 
    	add_theme_support('widgets');

    // Make theme available for translation
    // Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'textdomain', get_template_directory() . '/languages' );
	
}
