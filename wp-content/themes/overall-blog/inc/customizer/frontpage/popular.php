<?php
/**
	 * Popular section
	 */
	// Popular section
	$wp_customize->add_section(
		'overall_blog_popular',
		array(
			'title' => esc_html__( 'Popular Post', 'overall-blog' ),
			'panel' => 'overall_blog_home_panel',
		)
	);

	// Popular Section enable setting
	$wp_customize->add_setting(
		'overall_blog_popular_section_enable',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_popular_section_enable',
		array(
			'section'		=> 'overall_blog_popular',
			'label'			=> esc_html__( 'Enable Popular Section.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Popular title setting
	$wp_customize->add_setting(
		'overall_blog_popular_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'overall_blog_popular_title',
		array(
			'section'		=> 'overall_blog_popular',
			'label'			=> esc_html__( 'Title:', 'overall-blog' ),
			'active_callback' => 'overall_blog_is_popular_enable'
		)
	);

	// Popular number setting
	$wp_customize->add_setting(
		'overall_blog_popular_num',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_number_range',
			'default' => 3,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'overall_blog_popular_num',
		array(
			'section'		=> 'overall_blog_popular',
			'label'			=> esc_html__( 'Number of popular:', 'overall-blog' ),
			'description'			=> esc_html__( 'Min: 1 | Max: 15', 'overall-blog' ),
			'active_callback' => 'overall_blog_is_popular_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 1, 'max' => 15,'step' => 1 ),
		)
	);
	// Popular Excerpt setting
	$wp_customize->add_setting(
		'overall_blog_popular_secion_excerpt',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_number_range',
			'default' => 20,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'overall_blog_popular_secion_excerpt',
		array(
			'section'		=> 'overall_blog_popular',
			'label'			=> esc_html__( 'Excerpt Length', 'overall-blog' ),
			'description'			=> esc_html__( 'Min: 10 | Max: 300', 'overall-blog' ),
			'active_callback' => 'overall_blog_is_popular_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 10, 'max' => 300 ),
		)
	);

	// Popular enable settings
	$wp_customize->add_setting(
		'overall_blog_popular_content_type',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'cat'
		)
	);

	$wp_customize->add_control(
		'overall_blog_popular_content_type',
		array(
			'section'		=> 'overall_blog_popular',
			'label'			=> esc_html__( 'Content type:', 'overall-blog' ),
			'description'			=> esc_html__( 'Choose where you want to render the content from.', 'overall-blog' ),
			'type'			=> 'select',
			'active_callback' => 'overall_blog_is_popular_enable',
			'choices'		=> array( 
					'post' => esc_html__( 'Post', 'overall-blog' ),
					'cat' => esc_html__( 'Category', 'overall-blog' ),
			 	)
		)
	);

	// Popular category setting
	$wp_customize->add_setting(
		'overall_blog_popular_cat',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'overall_blog_popular_cat',
		array(
			'section'		=> 'overall_blog_popular',
			'label'			=> esc_html__( 'Category:', 'overall-blog' ),
			'active_callback' => 'overall_blog_if_popular_cat',
			'type'			=> 'select',
			'choices'		=> overall_blog_get_post_cat_choices(),
		)
	);
	$popular_num = get_theme_mod( 'overall_blog_popular_num', 3 );
	for ( $i=1; $i <= $popular_num; $i++ ) { 

		// Popular post setting
		$wp_customize->add_setting(
			'overall_blog_popular_post_' . $i,
			array(
				'sanitize_callback' => 'overall_blog_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control(
			'overall_blog_popular_post_' . $i,
			array(
				'section'		=> 'overall_blog_popular',
				'label'			=> esc_html__( 'Post ', 'overall-blog' ) . $i,
				'active_callback' => 'overall_blog_if_popular_post',
				'type'			=> 'select',
				'choices'		=> overall_blog_get_post_choices(),
			)
		);
		
		// Popular custom separator setting
		$wp_customize->add_setting(
			'overall_blog_popular_custom_separator_' . $i,
			array(
				'sanitize_callback' => 'overall_blog_sanitize_html',
			)
		);

		$wp_customize->add_control(
			new overall_blog_Separator_Custom_Control( 
			$wp_customize,
			'overall_blog_popular_custom_separator_' . $i,
				array(
					'section'		=> 'overall_blog_popular',
					'active_callback' => 'overall_blog_is_popular_enable',
					'type'			=> 'overall-blog-separator',
				)
			)
		);
	}
?>