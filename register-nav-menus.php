<?php 
	register_nav_menus( array(
		'navigation_menu' => 'Theme Navigation Menu',
		'footer_menu' => 'My Custom Footer Menu',
	) );

?>

// Display Menus on Theme
<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
