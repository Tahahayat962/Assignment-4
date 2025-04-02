<?php 
/**
	 * Reset all settings
	 */
	// Reset settings section
	$wp_customize->add_section(
		'overall_blog_reset_sections',
		array(
			'title' => esc_html__( 'Reset all', 'overall-blog' ),
			'description' => esc_html__( 'Reset all settings to default.', 'overall-blog' ),
			'panel' => 'overall_blog_general_panel',
		)
	);

	// Reset sortable order setting
	$wp_customize->add_setting(
		'overall_blog_reset_settings',
		array(
			'sanitize_callback' => 'overall_blog_sanitize_checkbox',
			'default' => false,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'overall_blog_reset_settings',
		array(
			'section'		=> 'overall_blog_reset_sections',
			'label'			=> esc_html__( 'Reset all settings?', 'overall-blog' ),
			'type'			=> 'checkbox',
		)
	);
 ?>