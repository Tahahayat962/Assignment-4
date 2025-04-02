<?php
/**
 * Shadow Themes Customizer
 *
 * @package Shadow Themes
 */
 
/**
 * Get all the default values of the theme mods.
 */
function overall_blog_get_default_mods() {
	$overall_blog_default_mods = array(
		'overall_blog_custom_color_scheme' => '#0d58c1',
		// Sliders
		'overall_blog_slider_custom_title' => esc_html__( 'We carve design in most possible beautiful way.', 'overall-blog'),
		'overall_blog_slider_custom_content' => esc_html__( 'Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma – which is living with the results of other people’s thinking.', 'overall-blog'),
		'overall_blog_slider_custom_btn' => esc_html__( 'Read The Article', 'overall-blog' ),
		'overall_blog_slider_custom_subtitle' => esc_html__( 'Lorem Ipsum is simply dummy text.', 'overall-blog' ),
		'overall_blog_featured_slider_dot_enable'		=> true,
		'overall_blog_featured_slider_fade_enable'		=> false,
		'overall_blog_featured_slider_autoplay_enable'		=> true,
		'overall_blog_featured_slider_infinite_enable'		=> true,

		// Trending
		'overall_blog_trending_section_title' => esc_html__( 'Journey to Amazing Places', 'overall-blog' ),
		'overall_blog_trending_custom_content' => esc_html__( 'Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma – which is living with the results of other people’s thinking.', 'overall-blog' ),
		'overall_blog_trending_dot_enable'		=> true,
		'overall_blog_trending_fade_enable'		=> false,
		'overall_blog_trending_autoplay_enable'		=> true,
		'overall_blog_trending_infinite_enable'		=> true,

		// Popular
		'overall_blog_popular_title' => esc_html__( 'Get Ready for an Adventure', 'overall-blog' ),

		// Must read
		'overall_blog_must_read_title' => esc_html__( 'Ultimate Guide to Exploring', 'overall-blog' ),

		// Video
		'overall_blog_video_section_title' => esc_html__( 'Travel Stories Captured on Film', 'overall-blog' ),



		// Recent posts
		'overall_blog_recent_posts_more' => esc_html__( 'See More', 'overall-blog' ),

		// Footer copyright
		'overall_blog_copyright_txt' => esc_html__( 'Copyright &copy; All rights reserved.', 'overall-blog' ),
		'overall_blog_powered_by_txt' => sprintf( esc_html__( '%1$s by %2$s.', 'overall-blog' ), 'Overall Blog', '<a href="' . esc_url( 'http://shadowthemes.com/' ) . '">Shadow Themes</a>' ),

		
	);

	return apply_filters( 'overall_blog_default_mods', $overall_blog_default_mods );
}