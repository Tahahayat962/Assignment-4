<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shadow Themes
 */

$default = overall_blog_get_default_mods();
?> 
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<!-- supports column-1, column-2, column-3 and column-4 -->
			<!-- supports unequal-width and equal-width -->
			<?php  
			$count = 0;
			for ( $i=1; $i <=4 ; $i++ ) { 
				if ( is_active_sidebar( 'footer-' . $i ) ) {
					$count++;
				}
			}
			
			if ( 0 !== $count ) : ?>
				<?php 
					$footer_bg_class='';
					$footer_background_image = get_theme_mod( 'overall_blog_footer_background_image'); 
					if (!empty($footer_background_image)) {
						$footer_bg_class='footer-bg-e';
					}
				?>
				<div class="footer-widgets-area page-section <?php echo $footer_bg_class; ?> column-<?php echo esc_attr( $count );?> " style="background-image: url('<?php echo esc_url($footer_background_image); ?>');">
						<?php 
						for ( $j=1; $j <=4; $j++ ) { 
							if ( is_active_sidebar( 'footer-' . $j ) ) {
				    			echo '<div class="column-wrapper"><div class="footer-single-widget-area">';
								dynamic_sidebar( 'footer-' . $j ); 
				    			echo '</div></div>';
							}
						}
						?>
				</div><!-- .footer-widget-area -->

			<?php endif;
			 
			$footer_menu = get_theme_mod( 'overall_blog_enable_footer_menu', true );
			$footer_text_enable = get_theme_mod( 'overall_blog_enable_footer_text', true );
			$footer_text = get_theme_mod( 'overall_blog_copyright_txt', $default['overall_blog_copyright_txt'] );
			$powered_by_text = get_theme_mod( 'overall_blog_powered_by_txt', $default['overall_blog_powered_by_txt'] );

			if ( $footer_menu || $footer_text_enable ) :
				$class = ( $footer_menu && $footer_text_enable ) ? 'column-2' : 'column-1' ;
				?>
				<div class="site-info clear <?php echo $class ?>">
					<!-- supports column-1 and column-2 -->
					<?php if ( $footer_text_enable==true && (!empty($footer_text) || !empty($powered_by_text)) ) { ?>
					    <span class="footer-copyright">
					      	<?php 
						      	if (!empty($footer_text)) {
						      		echo wp_kses_post($footer_text );
						      	}  
					      	?>
					      	<?php 
						      	if (!empty($powered_by_text)) {
						      		echo wp_kses_post($powered_by_text );
						      	}  
					      	?>
					    </span><!-- .footer-copyright -->
					<?php } ?>
					<?php if ($footer_menu==true) { ?>
						<span>
							<?php wp_nav_menu( array(
		                        'theme_location' => 'footer-menu',
		                        'container'     => 'div',
		                        'container_class' => 'footer-menu-wrapper',
		                        'menu_class'     => 'footer-menu',
		                        'fallback_cb'   => false,
		                        'depth'          => 1,
		                    ) ); ?>
	                	</span>
	                <?php } ?>   
					
				</div><!-- .site-info -->
			<?php endif; ?>
		</div>
	</footer><!-- #colophon -->
	<div class="popup-overlay"></div>
	<?php  
	$backtop = get_theme_mod( 'overall_blog_back_to_top_enable', true );
	if ( $backtop ) { ?>
		<div class="totop"><?php echo overall_blog_get_icon_svg( 'keyboard_arrow_down' ); ?></div>
	<?php }	?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
