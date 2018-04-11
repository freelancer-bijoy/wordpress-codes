<?php 
	//Register Menus
	register_nav_menus( array(
		'navigation_menu' => 'Theme Navigation Menu',
		'footer_menu' => 'My Custom Footer Menu',
	) );

?>


<?php 
	// Display Menus on Theme	
	wp_nav_menu( array( 
		'theme_location' => 'navigation_menu',
		'container'      => 'div',
		'container_class'      => 'navbar-collapse collapse align-left',
		'menu_class'           => 'nav navbar-nav',
		'depth'			=> '3',
	)); 
?>
