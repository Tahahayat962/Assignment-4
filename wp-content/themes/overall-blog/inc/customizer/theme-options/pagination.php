<?php 

	// Pagination type setting
	$wp_customize->add_setting(
		'overall_blog_archive_pagination_type',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_select',
			'default' => 'numeric',
		)
	);

	$archive_pagination_description = '';
	$archive_pagination_choices = array( 
				'disable' => esc_html__( '--Disable--', 'overall-blog' ),
				'numeric' => esc_html__( 'Numeric', 'overall-blog' ),
				'older_newer' => esc_html__( 'Older / Newer', 'overall-blog' ),
			);
	
	$wp_customize->add_control(
		'overall_blog_archive_pagination_type',
		array(
			'section'		=> 'overall_blog_archive_settings',
			'label'			=> esc_html__( 'Pagination type:', 'overall-blog' ),
			'description'			=>  $archive_pagination_description,
			'type'			=> 'select',
			'choices'		=> $archive_pagination_choices,
		)
	);
 ?>