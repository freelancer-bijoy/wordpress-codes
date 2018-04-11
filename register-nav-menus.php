<?php
	require_once ('inc/class-wp-bootstrap-navwalker.php');

<?php 
	//Register Menus
	register_nav_menus( array(
		'navigation_menu' => 'Theme Navigation Menu',
		'footer_menu' => 'My Custom Footer Menu',
	) );

?>


<?php
	wp_nav_menu( array(
	    'theme_location'    => 'navigation_menu',
	    'depth'             => '3', // 1 = with dropdowns, 0 = no dropdowns.
	    'container'         => 'div',
	    'container_class'   => 'navbar-collapse collapse align-left',
	    'menu_class'        => 'nav navbar-nav',
	    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	    'walker'            => new WP_Bootstrap_Navwalker()
	) );
?>
