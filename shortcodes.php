<?php
	function themeShortcodes($atts)
	{
		extract(shortcode_atts( array(
			'color' => 'black', 
			'font_size'  => '25px', 
		), $atts ));
		return "<p style='color: ".$color."; font-size: ".$font_size.";'>Welcome to my site.</p>";
	}
	add_shortcode( 'hello', 'themeShortcodes' );
?>



[hello color= "blue" font-size= "30px"]
