<?php
/**
 * Services options.
 *
 * @package Fotoografia Pro
 */

$default = golden_builder_get_default_theme_options();

// Services Section
$wp_customize->add_section( 'section_home_services',
	array(
		'title'      => __( 'Services Section', 'golden-builder' ),
		'priority'   => 20,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_services_section]',
	array(
		'default'           => $default['disable_services_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'golden_builder_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Golden_Builder_Switch_Control( $wp_customize, 'theme_options[disable_services_section]',
    array(
		'label' 			=> __('Enable/Disable Service Section', 'golden-builder'),
		'section'    		=> 'section_home_services',
		 'settings'  		=> 'theme_options[disable_services_section]',
		'on_off_label' 		=> golden_builder_switch_options(),
    )
) );

// services title setting and control
$wp_customize->add_setting( 'theme_options[services_background_image]', array(
	'type'              => 'theme_mod',
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[services_background_image]', array(
	 esc_html__( 'Select Background Image', 'golden-builder' ),
	'section'        	=> 'section_home_services',
	'settings'    		=> 'theme_options[services_background_image]',	
	'active_callback' 	=> 'golden_builder_services_active',
) ) );

//Services Section title
$wp_customize->add_setting('theme_options[services_title]', 
	array(
	'default'           => $default['services_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[services_title]', 
	array(
	'label'       => __('Section Title', 'golden-builder'),
	'section'     => 'section_home_services',   
	'settings'    => 'theme_options[services_title]',
	'active_callback' => 'golden_builder_services_active',		
	'type'        => 'text'
	)
);

//Contact Section title
$wp_customize->add_setting('theme_options[services_subtitle]', 
	array(
	'default'           => $default['services_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[services_subtitle]', 
	array(
	'label'       => __('Section Title', 'golden-builder'),
	'section'     => 'section_home_services',   
	'settings'    => 'theme_options[services_subtitle]',
	'active_callback' => 'golden_builder_services_active',		
	'type'        => 'text'
	)
);

// Add autoplay enable setting and control.
$wp_customize->add_setting( 'theme_options[disable_services_icon]', array(
	'default'           => $default['disable_services_icon'],
	'sanitize_callback' => 'golden_builder_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[disable_services_icon]', array(
	'label' 			=> __('Enable/Disable Service icons', 'golden-builder'),
	'description' => __('If Services icons is disable then features image is enable', 'golden-builder'),
	'section'    		=> 'section_home_services',
	'settings'  		=> 'theme_options[disable_services_icon]',
	'type'              => 'checkbox',
	'active_callback' => 'golden_builder_services_active',
) );

for( $i=1; $i<=6; $i++ ){

		//Services Section icon
	$wp_customize->add_setting('theme_options[services_icon_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[services_icon_'.$i.']', 
		array(
		'label'       => sprintf( __('Icon #%1$s', 'golden-builder'), $i),
		'description' => sprintf( __('Please input icon as eg: fa-archive. Find Font-awesome icons %1$shere%2$s', 'golden-builder'), '<a href="' . esc_url( 'https://fontawesome.com/v4.7.0/cheatsheet/' ) . '" target="_blank">', '</a>' ),
		'section'     => 'section_home_services',   
		'settings'    => 'theme_options[services_icon_'.$i.']',
		'active_callback' => 'golden_builder_services_active',		
		'type'        => 'text'
		)
	);

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[services_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'golden_builder_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[services_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'golden-builder'), $i),
		'section'     => 'section_home_services',   
		'settings'    => 'theme_options[services_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'golden_builder_services_active',
		)
	);
}
