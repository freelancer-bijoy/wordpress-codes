<?php
	/**
	 * Proper way to enqueue scripts and styles
	 */
	function theme_css_js_enqueue() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );

		// flaticon.css
		wp_enqueue_style( 'flaticon-css', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', all );
		// font-awesome.min.css
		wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', all );
		// text-animation.css
		wp_enqueue_style( 'text-animation-css', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', all );
		// fancybox.min.css
		wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0.0', all );
		// magnific-popup.css
		wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), '1.0.0', all );
		// google fonts
		wp_enqueue_style( 'google-fonts-css', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900', array(), '1.0.0', all );
		// owl.carousel.min.css
		wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', all );
		// slider revolution css
		wp_enqueue_style( 'slider-revolution-layers-css', get_template_directory_uri() . '/rs-plugin/css/layers.css', array(), '1.0.0', all );
		wp_enqueue_style( 'slider-revolution-settings-css', get_template_directory_uri() . '/rs-plugin/css/settings.css', array(), '1.0.0', all );
		// bootstrap.min.css
		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', all );
		// plugins.css
		wp_enqueue_style( 'custom-plugins-css', get_template_directory_uri() . '/assets/css/plugins.css', array(), '1.0.0', all );
		// icons.css
		wp_enqueue_style( 'icons-css', get_template_directory_uri() . '/assets/css/icons.css', array(), '1.0.0', all );
		// menu-css.css
		wp_enqueue_style( 'menu-css', get_template_directory_uri() . '/assets/css/menu-css.css', array(), '1.0.0', all );
		// style.css
		wp_enqueue_style( 'theme-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', all );
		// responsive.css
		wp_enqueue_style( 'theme-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', all );


    	// jquery.min.js
    	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true );

    	// Include all compiled plugins (below), or include individual files as needed

    	// modernizr and waypoints
    	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '1.0.0', true );


    	// bootstrap
    	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
    	// plugins js
    	wp_enqueue_script( 'scrollup-js', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), '1.0.0', true );
    	// scrollup js
    	wp_enqueue_script( 'example-js', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    	

    	// gmaps
    	wp_enqueue_script( 'gmaps-link-js', get_template_directory_uri() . 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY', array(), '1.0.0', true );
    	wp_enqueue_script( 'gmaps-name', get_template_directory_uri() . '/assets/js/gmaps.js', array(), '1.0.0', true );


    	// jquery.fancybox.min.js
    	wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '1.0.0', true );
    	// jquery.magnific-popup.min.js
    	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
    	// isotope.pkgd.min.js
    	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0.0', true );
    	// jquery counterup
    	wp_enqueue_script( 'counter-js', get_template_directory_uri() . '/assets/js/counterup.min.js', array(), '1.0.0', true );
    	// owl.carousel.min.js
    	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true );
    	// wow.min.js
    	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
    	// jquery.lettering.js
    	wp_enqueue_script( 'lettering-js', get_template_directory_uri() . '/assets/js/jquery.lettering.js', array(), '1.0.0', true );
    	// jquery.textillate.js
    	wp_enqueue_script( 'textillate-js', get_template_directory_uri() . '/assets/js/jquery.textillate.js', array(), '1.0.0', true );
    	// mixitup.js
    	wp_enqueue_script( 'mixitup-js', get_template_directory_uri() . '/assets/js/mixitup.js', array(), '1.0.0', true );
    	

    	// chart.js
    	wp_enqueue_script( 'chart-js', get_template_directory_uri() . '/assets/js/chart.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'chart-active-js', get_template_directory_uri() . '/assets/js/chart-active.js', array(), '1.0.0', true );


    	// slider revolution scripts
    	wp_enqueue_script( 'rs-themepunch-tools-js', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-themepunch-js', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true );


    	// slider revolution 5.0 extensions
    	wp_enqueue_script( 'rs-actions-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.actions.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-kenburn-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-layeranimation-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-migration-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.migration.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-navigation-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-parallax-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-slideanims-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array(), '1.0.0', true );
    	wp_enqueue_script( 'rs-video-js', get_template_directory_uri() . '/rs-plugin/js/extensions/revolution.extension.video.min.js', array(), '1.0.0', true );

    	// custom.js
    	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'theme_css_js_enqueue' );
