<?php
/**
 * About options.
 *
 * @package Golden Builder
 */

$default = golden_builder_get_default_theme_options();

// About section
$wp_customize->add_section( 'section_details',
	array(
		'title'      => __( 'About Section', 'golden-builder' ),
		'priority'   => 15,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_details_section]',
	array(
		'default'           => $default['disable_details_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'golden_builder_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Golden_Builder_Switch_Control( $wp_customize, 'theme_options[disable_details_section]',
    array(
		'label' 			=> __('Disable About Section', 'golden-builder'),
		'section'    		=> 'section_details',
		'on_off_label' 		=> golden_builder_switch_options(),
    )
) );

// Additional Information First Page
$wp_customize->add_setting('theme_options[details_page]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'golden_builder_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[details_page]', 
	array(
	'label'       => __('Select Page', 'golden-builder'),
	'section'     => 'section_details',   
	'settings'    => 'theme_options[details_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'golden_builder_details_active',
	)
);
// Cta Big Font Description
$wp_customize->add_setting('theme_options[details_subtitle]', 
	array(
	'default' 			=> $default['details_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[details_subtitle]', 
	array(
	'label'       => __('Description', 'golden-builder'),
	'section'     => 'section_details',   
	'settings'    => 'theme_options[details_subtitle]',
	'active_callback' => 'golden_builder_details_active',		
	'type'        => 'text'
	)
);
// Cta Button Text
$wp_customize->add_setting('theme_options[details_button_label]', 
	array(
	'default' 			=> $default['details_button_label'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[details_button_label]', 
	array(
	'label'       => __('Button Label', 'golden-builder'),
	'section'     => 'section_details',   
	'settings'    => 'theme_options[details_button_label]',	
	'active_callback' => 'golden_builder_details_active',	
	'type'        => 'text'
	)
);