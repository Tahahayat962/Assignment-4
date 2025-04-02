<?php /**
	 *
	 *
	 * Footer copyright
	 *
	 *
	 */
	// Footer copyright
	$wp_customize->add_section(
		'overall_blog_footer_section',
		array(
			'title' => esc_html__( 'Footer', 'overall-blog' ),
			'priority' => 106,
			'panel' => 'overall_blog_general_panel',
		)
	);
	// Video custom image setting
	$wp_customize->add_setting(
		'overall_blog_footer_background_image',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'overall_blog_footer_background_image',
			array(
				'section'		=> 'overall_blog_footer_section',
				'label'			=> esc_html__( 'Footer Background Image', 'overall-blog' ),
			)
		)
	);
	// Footer social menu enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_footer_text',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_footer_text',
		array(
			'section'		=> 'overall_blog_footer_section',
			'label'			=> esc_html__( 'Enable Footer text.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Footer social menu enable setting
	$wp_customize->add_setting(
		'overall_blog_back_to_top_enable',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_back_to_top_enable',
		array(
			'section'		=> 'overall_blog_footer_section',
			'label'			=> esc_html__( 'Enable Back To Top.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Footer copyright setting
	$wp_customize->add_setting(
		'overall_blog_copyright_txt',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_html',
			'default' => $default['overall_blog_copyright_txt'],
		)
	);

	$wp_customize->add_control(
		'overall_blog_copyright_txt',
		array(
			'section'		=> 'overall_blog_footer_section',
			'label'			=> esc_html__( 'Copyright Text:', 'overall-blog' ),
			'type'			=> 'textarea',
			
		)
	);

?>