<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shadow Themes
 */

get_header(); 
    $default = overall_blog_get_default_mods();
// Call home.php if Homepage setting is set to latest posts.
if ( ( is_front_page() || is_home() )) {
	get_template_part( 'inc/homepage/category-list');
	get_template_part( 'inc/homepage/trending');
	get_template_part( 'inc/homepage/popular');

	if ( is_home() ) {

		include( get_home_template() );
	}
}
 
get_footer();
