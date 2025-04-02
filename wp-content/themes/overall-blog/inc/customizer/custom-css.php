<?php 
function overall_blog_button_custom_css(){

	?>

	<style type="text/css">

		<?php	
		$css='';

		//Buttom Css
		$css .= '
			.btn, 
			.featured-content-wrapper .btn {
			    padding:  '.get_theme_mod('overall_blog_button_top_padding').'px '.get_theme_mod('overall_blog_button_right_padding').'px '.get_theme_mod('overall_blog_button_bottom_padding').'px '.get_theme_mod('overall_blog_button_left_padding').'px';
		echo $css;?>
	</style>
	<?php
}