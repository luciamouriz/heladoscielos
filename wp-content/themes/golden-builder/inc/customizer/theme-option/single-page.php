<?php 
/**
 * Theme Options.
 *
 * @package Golden Builder
 */

$default = golden_builder_get_default_theme_options();

// Single Page Setting Section starts
$wp_customize->add_section('section_single_page', 
	array(    
	'title'       => __('Single Page Option', 'golden-builder'),
	'panel'       => 'theme_option_panel'    
	)
);

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'default'           => $default['single_page_header_image_as_header_image_enable'],
	'sanitize_callback' => 'golden_builder_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image As Header Image', 'golden-builder' ),
	'description' => __('If this option is Enable then Display Header Image as Header Image Otherwise display Featured Image as Header Image  ', 'golden-builder'),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_title_enable]', array(
	'default'           => $default['single_page_header_title_enable'],
	'sanitize_callback' => 'golden_builder_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_title_enable]', array(
	'label'             => esc_html__( 'Enable Header Title', 'golden-builder' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

