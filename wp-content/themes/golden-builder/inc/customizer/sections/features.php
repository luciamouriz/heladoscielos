<?php
/**
 * Features options.
 *
 * @package Golden Builder
 */

$default = golden_builder_get_default_theme_options();

// Features Section
$wp_customize->add_section( 'section_home_features',
	array(
		'title'      => __( 'Features Section', 'golden-builder' ),
		'priority'   => 45,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_features_section]',
	array(
		'default'           => $default['disable_features_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'golden_builder_sanitize_switch_control',
	)
);
$wp_customize->add_control( new Golden_Builder_Switch_Control( $wp_customize, 'theme_options[disable_features_section]',
    array(
		'label' 			=> __('Enable/Disable Features Section', 'golden-builder'),
		'section'    		=> 'section_home_features',
		 'settings'  		=> 'theme_options[disable_features_section]',
		'on_off_label' 		=> golden_builder_switch_options(),
    )
) );


// Cta Background Image
$wp_customize->add_setting('theme_options[background_features_section]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'golden_builder_sanitize_image'
	)
);

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,
	'theme_options[background_features_section]', 
	array(
	'label'       => __('Background Image', 'golden-builder'),
	'section'     => 'section_home_features',   
	'settings'    => 'theme_options[background_features_section]',		
	'active_callback' => 'golden_builder_features_active',
	'type'        => 'image',
	)
	)
);

//Features Section title
$wp_customize->add_setting('theme_options[features_title]', 
	array(
	'default'           => $default['features_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[features_title]', 
	array(
	'label'       => __('Section Title', 'golden-builder'),
	'section'     => 'section_home_features',   
	'settings'    => 'theme_options[features_title]',
	'active_callback' => 'golden_builder_features_active',		
	'type'        => 'text'
	)
);

//Features Section Subtitle
$wp_customize->add_setting('theme_options[features_subtitle]', 
	array(
	'default'           => $default['features_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[features_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'golden-builder'),
	'section'     => 'section_home_features',   
	'settings'    => 'theme_options[features_subtitle]',
	'active_callback' => 'golden_builder_features_active',		
	'type'        => 'text'
	)
);

for( $i=1; $i<=5; $i++ ){

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[features_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'golden_builder_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[features_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'golden-builder'), $i),
		'section'     => 'section_home_features',   
		'settings'    => 'theme_options[features_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'golden_builder_features_active',
		)
	);

}
