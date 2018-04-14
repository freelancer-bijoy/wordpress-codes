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



[hello color= "blue" font_size= "30px"]


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
[hello color= "blue" font_size= "30px"]Hello This Bijoy[/hello]


////////////////Nested Shortcode/////////////

<?php
	function themeShortcodes($atts, $content)
	{
		extract(shortcode_atts( array(
			'color' => 'black', 
			'font_size'  => '25px', 
		), $atts ));
		$nesting_contents = do_shortcode( $content );
		return "<p style='color: ".$color."; font-size: ".$font_size.";'>".$nesting_contents."</p>";
	}
	add_shortcode( 'hello', 'themeShortcodes' );
?>

<?php
	function nestedShortcodes($atts, $content)
	{
		extract(shortcode_atts( array(
			'color' => 'black', 
			'font_size'  => '25px', 
		), $atts ));
		$nesting_contents = do_shortcode( $content );
		return "<p style='color: ".$color."; font-size: ".$font_size.";'>".$content."</p>";
	}
	add_shortcode( 'nested', 'nestedShortcodes' );
?>

[hello color= "blue" font_size= "30px"]Hello This Bijoy[nested color= "green" font_size= "50px"]Kumar Kar[/nested][/hello]
