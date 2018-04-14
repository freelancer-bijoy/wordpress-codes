////////////////Self-Closing Shortcodes/////////////
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


////////////////Enclosing Shortcodes/////////////
<?php
	function themeShortcodes($atts, $content)
	{
		extract(shortcode_atts( array(
			'color' => 'black', 
			'font_size'  => '25px', 
		), $atts ));
		return "<p style='color: ".$color."; font-size: ".$font_size.";'>".$content."</p>";
	}
	add_shortcode( 'hello', 'themeShortcodes' );
?>
[hello color= "blue" font-size= "30px"]Hello This Bijoy[/hello]


////////////////Nested Shortcode/////////////
