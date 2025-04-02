<?php
/**
	 * Trending section
	 */
	// Trending section
	$wp_customize->add_section(
		'overall_blog_trending',
		array(
			'title' => esc_html__( 'Trending Section', 'overall-blog' ),
			'panel' => 'overall_blog_home_panel',
		)
	);

	// Trending Section enable setting
	$wp_customize->add_setting(
		'overall_blog_trending_section_enable',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_trending_section_enable',
		array(
			'section'		=> 'overall_blog_trending',
			'label'			=> esc_html__( 'Enable Trending Section.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);
		// Trending custom content setting
	$wp_customize->add_setting(
		'overall_blog_trending_section_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'overall_blog_trending_section_title',
		array(
			'section'		=> 'overall_blog_trending',
			'label'			=> esc_html__( 'Section Title ', 'overall-blog' ),
			'active_callback' => 'overall_blog_is_trending_enable',
			'type'			=> 'text'
		)
	);

	// Trending number setting
	$wp_customize->add_setting(
		'overall_blog_trending_num',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_number_range',
			'default' => 4,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'overall_blog_trending_num',
		array(
			'section'		=> 'overall_blog_trending',
			'label'			=> esc_html__( 'Number of trending:', 'overall-blog' ),
			'description'			=> esc_html__( 'Min: 1 | Max: 16', 'overall-blog' ),
			'active_callback' => 'overall_blog_is_trending_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 1, 'max' => 16, 'step'   => 1 ),
		)
	);

	// Trending enable settings
	$wp_customize->add_setting(
		'overall_blog_trending_content_type',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'cat'
		)
	);

	$wp_customize->add_control(
		'overall_blog_trending_content_type',
		array(
			'section'		=> 'overall_blog_trending',
			'label'			=> esc_html__( 'Content type:', 'overall-blog' ),
			'description'			=> esc_html__( 'Choose where you want to render the content from.', 'overall-blog' ),
			'type'			=> 'select',
			'active_callback' => 'overall_blog_is_trending_enable',
			'choices'		=> array( 
					'post' => esc_html__( 'Post', 'overall-blog' ),
					'cat' => esc_html__( 'Category', 'overall-blog' ),
			 	)
		)
	);

	// Trending category setting
	$wp_customize->add_setting(
		'overall_blog_trending_cat',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'overall_blog_trending_cat',
		array(
			'section'		=> 'overall_blog_trending',
			'label'			=> esc_html__( 'Category:', 'overall-blog' ),
			'active_callback' => 'overall_blog_if_trending_cat',
			'type'			=> 'select',
			'choices'		=> overall_blog_get_post_cat_choices(),
		)
	);
	$trending_num = get_theme_mod( 'overall_blog_trending_num', 4 );
	for ( $i=1; $i <= $trending_num; $i++ ) { 
		// Trending post setting
		$wp_customize->add_setting(
			'overall_blog_trending_post_' . $i,
			array(
				'sanitize_callback' => 'overall_blog_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control(
			'overall_blog_trending_post_' . $i,
			array(
				'section'		=> 'overall_blog_trending',
				'label'			=> esc_html__( 'Post ', 'overall-blog' ) . $i,
				'active_callback' => 'overall_blog_if_trending_post',
				'type'			=> 'select',
				'choices'		=> overall_blog_get_post_choices(),
			)
		);
	}
?>