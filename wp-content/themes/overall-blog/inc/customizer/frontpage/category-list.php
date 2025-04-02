<?php
/**
	 * Category List section
	 */
	// Category List section
	$wp_customize->add_section(
		'overall_blog_category_list',
		array(
			'title' => esc_html__( 'Category List', 'overall-blog' ),
			'panel' => 'overall_blog_home_panel',
		)
	);

	// Category List Section enable setting
	$wp_customize->add_setting(
		'overall_blog_category_list_section_enable',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_category_list_section_enable',
		array(
			'section'		=> 'overall_blog_category_list',
			'label'			=> esc_html__( 'Enable Category List Section.', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Category List Autoplay enable setting
	$wp_customize->add_setting(
		'overall_blog_category_list_autoplay_enable',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_category_list_autoplay_enable',
		array(
			'section'		=> 'overall_blog_category_list',
			'label'			=> esc_html__( 'Enable Category List Autoplay.', 'overall-blog' ),
			'type'			=> 'checkbox',
			'active_callback' => 'overall_blog_is_category_list_enable',
		)
	);

	// Category List Infinite Enable setting
	$wp_customize->add_setting(
		'overall_blog_category_list_infinite_enable',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'overall_blog_category_list_infinite_enable',
		array(
			'section'		=> 'overall_blog_category_list',
			'label'			=> esc_html__( 'Enable Category List Infinite Slide.', 'overall-blog' ),
			'type'			=> 'checkbox',
			'active_callback' => 'overall_blog_is_category_list_enable',
		)
	);

	// Setting Multiple Category.
	$wp_customize->add_setting( 'category_list_cat',
		array(

		'sanitize_callback' => 'overall_blog_sanitize_category_list',
		)
	);
	$wp_customize->add_control(
		new Overall_Blog_Dropdown_Multiple_Chooser( $wp_customize, 'category_list_cat',
			array(
			'label'    => __( 'Select Categories', 'overall-blog' ),
			'description' => __('Press Ctrl and select categories for multiple categories', 'overall-blog'),
			'section'  => 'overall_blog_category_list',
			'type'           	=> 'dropdown_multiple_chooser',
			'choices'  => overall_blog_category_choices(),
			'active_callback' => 'overall_blog_is_category_list_enable',		
			)
		)
	);
?>