<?php 
	/**
	 * General settings
	 */
	// General settings
	$wp_customize->add_section(
		'overall_blog_general_section',
		array(
			'title' => esc_html__( 'General', 'overall-blog' ),
			'panel' => 'overall_blog_general_panel',
		)
	);
 

	// Breadcrumb enable setting
	$wp_customize->add_setting(
		'overall_blog_breadcrumb_enable',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_breadcrumb_enable',
		array(
			'section'		=> 'overall_blog_general_section',
			'label'			=> esc_html__( 'Enable breadcrumb.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);


?>