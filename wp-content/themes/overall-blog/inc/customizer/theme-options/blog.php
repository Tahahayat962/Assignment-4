<?php 
/**
	 * Blog/Archive section 
	 */
	// Blog/Archive section 
	$wp_customize->add_section(
		'overall_blog_archive_settings',
		array(
			'title' => esc_html__( 'Archive/Blog', 'overall-blog' ),
			'description' => esc_html__( 'Settings for archive pages including blog page too.', 'overall-blog' ),
			'panel' => 'overall_blog_general_panel',
		)
	);


	// Date enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_archive_blog_header_image',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_archive_blog_header_image',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Enable Header Image.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Global archive layout setting
	$wp_customize->add_setting(
		'overall_blog_archive_layout',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'archive-four',
		)
	);

	$wp_customize->add_control(
		'overall_blog_archive_layout',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Archive layout', 'overall-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'archive-four' => esc_html__( 'Design One', 'overall-blog' ), 
				'archive-five' => esc_html__( 'Design Two', 'overall-blog' ), 
			),
		)
	);

	// Global archive layout setting
	$wp_customize->add_setting(
		'overall_blog_content_align',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'content-center',
		)
	);

	$wp_customize->add_control(
		'overall_blog_content_align',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Content Position Align', 'overall-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'content-left' => esc_html__( 'Left', 'overall-blog' ), 
				'content-center' => esc_html__( 'Center', 'overall-blog' ), 
				'content-right' => esc_html__( 'Right', 'overall-blog' ), 
				'content-justify' => esc_html__( 'Justify', 'overall-blog' ),
			),
		)
	);


	// Archive excerpt setting
	$wp_customize->add_setting(
		'overall_blog_archive_excerpt',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => esc_html__( 'View the post', 'overall-blog' ),
		)
	);

	$wp_customize->add_control(
		'overall_blog_archive_excerpt',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Excerpt more text:', 'overall-blog' ),
		)
	);

	// number setting
	$wp_customize->add_setting(
		'overall_blog_blog_archive_column',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_number_range',
			'default' => 2,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'overall_blog_blog_archive_column',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Column of Blog And Archive Page:', 'overall-blog' ),
			'description'			=> esc_html__( 'Min: 1 | Max:2 (Upto 5 in Premium)', 'overall-blog' ),
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 1, 'max' => 2 ),
		)
	);
	// Archive excerpt length setting
	$wp_customize->add_setting(
		'overall_blog_archive_excerpt_length',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_number_range',
			'default' => 15,
		)
	);

	$wp_customize->add_control(
		'overall_blog_archive_excerpt_length',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Excerpt more length:', 'overall-blog' ),
			'type'			=> 'number',
			'input_attrs'   => array( 'min' => 5 ),
		)
	);

	// Category enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_archive_category',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_archive_category',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Enable Category.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Date enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_archive_date',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_archive_date',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Enable Date.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);


	// Featured image enable setting
	$wp_customize->add_setting(
		'overall_blog_enable_archive_featured_img',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_enable_archive_featured_img',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Enable featured image.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

 ?>