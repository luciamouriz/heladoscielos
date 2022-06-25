<?php
/**
 * Home Page Options.
 *
 * @package Golden Builder
 */

$default = golden_builder_get_default_theme_options();

// Latest Blog Section
$wp_customize->add_section( 'section_home_blog',
	array(
		'title'      => __( 'Blog Section', 'golden-builder' ),
		'priority'   => 60,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_blog_section]',
	array(
		'default'           => $default['disable_blog_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'golden_builder_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Golden_Builder_Switch_Control( $wp_customize, 'theme_options[disable_blog_section]',
    array(
		'label' 	=> __('Disable Blog Section', 'golden-builder'),
		'section'    			=> 'section_home_blog',
		
		'on_off_label' 		=> golden_builder_switch_options(),
    )
) );


// Blog title
$wp_customize->add_setting('theme_options[blog_title]', 
	array(
	'default'           => $default['blog_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_title]', 
	array(
	'label'       => __('Section Title', 'golden-builder'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_title]',	
	'active_callback' => 'golden_builder_blog_active',		
	'type'        => 'text'
	)
);

// Blog title
$wp_customize->add_setting('theme_options[blog_subtitle]', 
	array(
	'default'           => $default['blog_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'golden-builder'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_subtitle]',	
	'active_callback' => 'golden_builder_blog_active',		
	'type'        => 'text'
	)
);

// Setting  Blog Category.
$wp_customize->add_setting( 'theme_options[blog_category]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Golden_Builder_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',
		array(
		'label'    => __( 'Select Category', 'golden-builder' ),
		'section'  => 'section_home_blog',
		'settings' => 'theme_options[blog_category]',	
		'active_callback' => 'golden_builder_blog_active',		
		'priority' => 100,
		)
	)
);

