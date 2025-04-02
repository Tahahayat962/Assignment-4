<?php 
/**
	 * Sidebar Layout
	 */
	// Sidebar Layout
	$wp_customize->add_section(
		'overall_blog_global_layout',
		array(
			'title' => esc_html__( 'Global & Sidebar Layout', 'overall-blog' ),
			'panel' => 'overall_blog_general_panel',
		)
	);


	// Sidebar archive layout setting
	$wp_customize->add_setting(
		'overall_blog_archive_sidebar',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'right',
		)
	);

	$wp_customize->add_control(
		'overall_blog_archive_sidebar',
		array(
			'section'		=> 'overall_blog_global_layout',
			'label'			=> esc_html__( 'Archive Sidebar', 'overall-blog' ),
			'description'	=> esc_html__( 'This option works on all archive pages like: 404, search, date, category and so on.', 'overall-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'right' => esc_html__( 'Right', 'overall-blog' ), 
				'no' => esc_html__( 'No Sidebar', 'overall-blog' ), 
			),
		)
	);

	// Blog layout setting
	$wp_customize->add_setting(
		'overall_blog_blog_sidebar',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'right',
		)
	);

	$wp_customize->add_control(
		'overall_blog_blog_sidebar',
		array(
			'section'		=> 'overall_blog_global_layout',
			'label'			=> esc_html__( 'Blog Sidebar', 'overall-blog' ),
			'description'			=> esc_html__( 'This option works on blog and "Your latest posts"', 'overall-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'right' => esc_html__( 'Right', 'overall-blog' ), 
				'no' => esc_html__( 'No Sidebar', 'overall-blog' ), 
			),
		)
	);

	// Sidebar page layout setting
	$wp_customize->add_setting(
		'overall_blog_global_page_layout',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'right',
		)
	);

	$wp_customize->add_control(
		'overall_blog_global_page_layout',
		array(
			'section'		=> 'overall_blog_global_layout',
			'label'			=> esc_html__( 'Sidebar page sidebar', 'overall-blog' ),
			'description'	=> esc_html__( 'This option works only on single pages including "Posts page". This setting can be overridden for single page from the metabox too.', 'overall-blog' ),
			'type'			=> 'radio',
			'choices'		=> array(  
				'right' 	=> esc_html__( 'Right', 'overall-blog' ), 
				'no' 		=> esc_html__( 'No Sidebar', 'overall-blog' ), 
			),
		)
	);

	// Sidebar post layout setting
	$wp_customize->add_setting(
		'overall_blog_global_post_layout',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'right',
		)
	);

	$wp_customize->add_control(
		'overall_blog_global_post_layout',
		array(
			'section'		=> 'overall_blog_global_layout',
			'label'			=> esc_html__( 'Sidebar post sidebar', 'overall-blog' ),
			'description'	=> esc_html__( 'This option works only on single posts. This setting can be overridden for single post from the metabox too.', 'overall-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'right' => esc_html__( 'Right', 'overall-blog' ), 
				'no' => esc_html__( 'No Sidebar', 'overall-blog' ), 
			),
		)
	);
 ?>