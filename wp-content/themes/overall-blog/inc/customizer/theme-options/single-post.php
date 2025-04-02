<?php 
	/**
	 * Single setting section 
	 */
	// Single setting section 
	$wp_customize->add_section(
		'overall_blog_single_settings',
		array(
			'title' => esc_html__( 'Single Posts', 'overall-blog' ),
			'description' => esc_html__( 'Settings for all single posts.', 'overall-blog' ),
			'panel' => 'overall_blog_general_panel',
		)
	);


	// Author enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_post_header_image',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_post_header_image',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable Post Header Image.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Category enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_image',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_image',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable Featured Image.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Category enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_category',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_category',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable categories.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Date enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_date',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_date',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable Date.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);


	// Author enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_author',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_author',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable Author.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Comment enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_comment',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_comment',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable Comment.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Tag enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_tag',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_tag',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable tags.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Pagination enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_pagination',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_pagination',
		array(
			'section'		=> 'overall_blog_single_settings',
			'label'			=> esc_html__( 'Enable pagination.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);
?>