<?php
	/**
	 * Proper way to enqueue scripts and styles
	 */
	function theme_css_js_enqueue() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_css_js_enqueue' );