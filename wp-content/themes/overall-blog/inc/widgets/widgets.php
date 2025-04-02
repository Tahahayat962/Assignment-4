<?php 

/**
 * Load files
 *
 * @package Overall Blog
 */

	// Popular Posts 
	require get_template_directory() . '/inc/widgets/popular-news-widget.php';

	// Sldebar Popular Posts 
	require get_template_directory() . '/inc/widgets/sidebar-popular-news-widget.php';

	// Author
	require get_template_directory() . '/inc/widgets/author-info-widget.php';

	function overall_blog_register_widgets() {
		register_widget( 'Overall_Blog_Author_Information_Widget' );
	}
	add_action( 'widgets_init', 'overall_blog_register_widgets' );
	
 ?>