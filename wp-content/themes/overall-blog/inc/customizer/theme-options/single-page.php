<?php /**
	 * Single pages setting section 
	 */
	// Single pages setting section 
	$wp_customize->add_section(
		'overall_blog_single_page_settings',
		array(
			'title' => esc_html__( 'Single Pages', 'overall-blog' ),
			'description' => esc_html__( 'Settings for all single pages.', 'overall-blog' ),
			'panel' => 'overall_blog_general_panel',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_page_header_image',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_page_header_image',
		array(
			'section'		=> 'overall_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page Header Image.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_page_author',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_page_author',
		array(
			'section'		=> 'overall_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page Author.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_page_image',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_page_image',
		array(
			'section'		=> 'overall_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page image.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_page_comment',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_page_comment',
		array(
			'section'		=> 'overall_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page Comment.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Pagination enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_single_page_pagination',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_single_page_pagination',
		array(
			'section'		=> 'overall_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable pagination.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);
?>