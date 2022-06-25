<?php
/**
 * Post Slider options.
 *
 * @package Golden Builder
 */

$default = golden_builder_get_default_theme_options();

// Post Slider Author Section
$wp_customize->add_section( 'section_home_project',
	array(
		'title'      => __( 'Project Section', 'golden-builder' ),
		'priority'   => 30,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_project_section]',
	array(
		'default'           => $default['disable_project_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'golden_builder_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Golden_Builder_Switch_Control( $wp_customize, 'theme_options[disable_project_section]',
    array(
		'label' 			=> __('Enable/Disable Project Section', 'golden-builder'),
		'section'    		=> 'section_home_project',
		 'settings'  		=> 'theme_options[disable_project_section]',
		'on_off_label' 		=> golden_builder_switch_options(),
    )
) );
//About Section title
$wp_customize->add_setting('theme_options[project_title]', 
	array(
	'default'           => $default['project_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_title]', 
	array(
	'label'       => __('Section Title', 'golden-builder'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_title]',
	'active_callback' => 'golden_builder_project_active',		
	'type'        => 'text'
	)
);

//About Section Subtitle
$wp_customize->add_setting('theme_options[project_subtitle]', 
	array(
	'default'           => $default['project_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'golden-builder'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_subtitle]',
	'active_callback' => 'golden_builder_project_active',		
	'type'        => 'text'
	)
);

//About Section Subtitle
$wp_customize->add_setting('theme_options[project_viewall_text]', 
	array(
	'default'           => $default['project_viewall_text'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_viewall_text]', 
	array(
	'label'       => __('Button Text', 'golden-builder'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_viewall_text]',
	'active_callback' => 'golden_builder_project_active',		
	'type'        => 'text'
	)
);

// About Button Url
$wp_customize->add_setting('theme_options[project_btn_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control('theme_options[project_btn_url]', 
	array(
	'label'       => __('Button Url', 'golden-builder'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_btn_url]',	
	'active_callback' => 'golden_builder_project_active',	
	'type'        => 'url',
	)
);

// Setting  Team Category.
$wp_customize->add_setting( 'theme_options[project_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new Golden_Builder_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[project_category]',
		array(
		'label'    => __( 'Select Category', 'golden-builder' ),
		'section'  => 'section_home_project',
		'settings' => 'theme_options[project_category]',	
		'active_callback' => 'golden_builder_project_active',		
		)
	)
);
