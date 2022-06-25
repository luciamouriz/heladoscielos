<?php
/**
 * Default theme options.
 *
 * @package Golden Builder
 */

if ( ! function_exists( 'golden_builder_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function golden_builder_get_default_theme_options() {

	$theme_data = wp_get_theme();
	$defaults = array();

	$defaults['show_header_contact_info'] 	= true;
	$defaults['disable_homepage_content_section'] 			= false;
    $defaults['header_email']             	= __( 'info@sensationaltheme.com','golden-builder' );
    $defaults['header_phone' ]            	= __( '+1-541-754-3010','golden-builder' );
    $defaults['header_location' ]           = __( 'London, UK','golden-builder' );
    $defaults['show_header_social_links'] 	= true;
    $defaults['header_social_links']		= array();
    $defaults['disable_header_background_section'] = false;
    $defaults['show_header_search'] 	= true;


    $defaults['header_text_transform_options'] 	= 'none';
    $defaults['header_text_decoration_options'] 	= 'none';
    $defaults['header_font_style_options'] 	= 'none';
    $defaults['header_text_design'] 	= false;

	// Featured Slider Section
	$defaults['disable_featured-slider_section']	= false;
	$defaults['number_of_sr_items']			= 4;
	$defaults['number_of_sr_column']		= 1;
	$defaults['slider_layout_option']			= 'fullwidth-slider';
	$defaults['slider_content_position_option']			= 'left-position';
	$defaults['sr_content_type']			= 'sr_page';
	$defaults['slider_speed']				= 800;
	$defaults['disable_white_overlay']		= false;
	$defaults['slider_arrow_enable']		= true;
	$defaults['slider_fade_enable']		= true;
	$defaults['slider_autoplay_enable']		= true;
	$defaults['slider_infinite_enable']		= true;
	$defaults['slider_title_enable']		= true;
	$defaults['slider_category_enable']		= true;
	$defaults['slider_content_enable']		= true;
	$defaults['slider_posted_on_enable']		= false;
	$defaults['disable_blog_banner_section']		= false;

	
	//Details Section	
	$defaults['disable_details_section']	   	= false;
	$defaults['background_details_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['details_custom_title']	   		= esc_html__( 'I never dreamed about success, I worked for it.', 'golden-builder' );
	$defaults['details_subtitle']	   	 		= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing some aspect of cultural identity.', 'golden-builder' );
	$defaults['details_custom_description']	   	 = esc_html__( 'Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum Market.Business consulting excepteur sint occaecat cupidatat consulting', 'golden-builder' );
	$defaults['details_button_label']	   	 	= esc_html__( 'Know More', 'golden-builder' );
	$defaults['details_button_url']	   	 		= '#';
	$defaults['details_content_type']			= 'details_post';
	$defaults['details_content_enable']				= true;

	// Our Service Section
	$defaults['disable_services_section']	= false;
	$defaults['services_title']	   	 		= esc_html__( 'Reasons to Choose My Services', 'golden-builder' );
	$defaults['services_subtitle']	   		= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'golden-builder' );
	$defaults['number_of_services_column']	= 3;
	$defaults['number_of_services_items']	= 6;
	$defaults['services_content_type']		= 'service_post';
	$defaults['services_content_enable']	= true;
	$defaults['disable_services_icon']		= true;

		// Information Section
	$defaults['disable_information_section']	= false;
	$defaults['information_title']	   	 		= esc_html__( 'About Us', 'golden-builder' );
	$defaults['information_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'golden-builder' );
	$defaults['information_details']	   	 	= esc_html__( 'Listed below, an additional lengthy roof extends around the framework. Snuggled in between the glass panes of the ground and higher floors, the floor slab and rooftop seem an atypical duration of stone.', 'golden-builder' );

	$defaults['number_of_information_items']	= 3;
	$defaults['information_content_type']		= 'information_page';
	$defaults['information_skills_enable']				= true;

	// Project Section
	$defaults['disable_project_section']	= false;
	$defaults['number_of_project_items']			= 3;
	$defaults['project_layout_option']			= 'default-project';
	$defaults['project_content_type']			= 'project_post';
	$defaults['project_title']	   	 		= esc_html__( 'Successful Projects', 'golden-builder' );
	$defaults['project_viewall_text']	   	 		= esc_html__( 'View All Projects', 'golden-builder' );
	$defaults['project_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'golden-builder' );
	$defaults['project_category_enable']		= true;
	$defaults['project_posted_on_enable']		= true;
	$defaults['project_arrow_enable']		= true;
	$defaults['project_dots_enable']		= true;
	$defaults['project_content_enable']		= true;


	//Cta Section	
	$defaults['disable_cta_section']	   	= false;
	$defaults['background_cta_section']		= get_template_directory_uri() .'/assets/images/default-header.jpg';
	$defaults['cta_small_description']	   	= esc_html__( 'Need More Help?', 'golden-builder' );
	$defaults['cta_description']	   	 	= esc_html__( 'A better way to hire our best help', 'golden-builder' );
	$defaults['cta_button_label']	   	 	= esc_html__( 'Purchase Now', 'golden-builder' );
	$defaults['cta_button_url']	   	 		= '#';
	$defaults['cta_alt_button_label']	   	= esc_html__( 'Contact Us', 'golden-builder' );
	$defaults['cta_alt_button_url']	   	 	= '#';
	$defaults['cta_content_type']			= 'cta_post';


	// About Section
	$defaults['disable_features_section']	= false;
	$defaults['features_title']	   	 		= esc_html__( 'Our Features', 'golden-builder' );
	$defaults['features_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'golden-builder' );

	$defaults['number_of_features_items']	= 3;
	$defaults['features_content_type']		= 'features_page';


	// Blog Section
	$defaults['disable_blog_section']		= false;
	$defaults['blog_title']	   	 			= esc_html__( 'Latest Post', 'golden-builder' ); 
	$defaults['blog_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'golden-builder' );
	$defaults['blog_number']				= 3;
	$defaults['number_of_blog_column']		= 3;
	$defaults['blog_content_type']			= 'blog_category';
	$defaults['image_buttom']				= false;
	$defaults['blog_content_enable']				= true;
	$defaults['blog_category_enable']				= true;

	//contact Section	
	$defaults['contact_title']	   	 		= esc_html__( 'Get in touch with us!', 'golden-builder' );
	$defaults['contact_sub_title']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'golden-builder' );
	$defaults['disable_contact_section']	= true;

	// Latest Posts Section

	$defaults['latest_posts_title']	   	 	= esc_html__( 'Outer beauty turns the head, but inner beauty turns the heart.', 'golden-builder' );
	$defaults['latest_section_posts_title']	   	 	= esc_html__( 'I love natural beauty, and I think it’s your best look, but I think makeup as an artist is so transformative.', 'golden-builder' );
	$defaults['number_of_latest_posts_column']	= 3;
	$defaults['pagination_type']		= 'default';
	$defaults['latest_category_enable']		= true;
	$defaults['latest_author_enable']		= true;
	$defaults['latest_comment_enable']		= true;
	$defaults['latest_read_more_text_enable']		= true;
	$defaults['latest_posted_on_enable']		= true;
	$defaults['latest_video_enable']		= true;
	$defaults['blog_layout_content_type']		= 'blog-one';
	$defaults['archive_post_header_title_enable']		= true;
	$defaults['blog_post_header_title_enable']		= true;

	// About Section
	$defaults['disable_about_section']	= true;
	$defaults['number_of_about_items']			= 3;
	$defaults['about_layout_option']			= 'default-about';
	$defaults['about_content_type']			= 'about_post';
	$defaults['about_category_enable']		= true;
	$defaults['about_posted_on_enable']		= true;
	$defaults['about_arrow_enable']		= true;
	$defaults['about_dots_enable']		= true;
	$defaults['about_content_enable']		= false;

	// Single Post Option
	$defaults['single_post_category_enable']		= true;
	$defaults['single_post_posted_on_enable']		= true;
	$defaults['single_post_video_enable']		= true;
	$defaults['single_post_comment_enable']		= true;
	$defaults['single_post_author_enable']		= true;
	$defaults['single_post_pagination_enable']		= true;
	$defaults['single_post_image_enable']		= true;
	$defaults['single_post_header_image_enable']		= true;
	$defaults['single_post_header_title_enable']		= true;
	$defaults['single_post_header_image_as_header_image_enable']		= true;

	// Single Post Option
	$defaults['single_page_video_enable']		= true;
	$defaults['single_page_image_enable']		= true;
	$defaults['single_page_header_image_enable']		= true;
	$defaults['single_page_header_title_enable']		= true;
	$defaults['single_page_header_image_as_header_image_enable']		= true;
	
	$defaults['theme_typography']			=  'default';
	$defaults['body_theme_typography']		=  'default';

	//General Section
	$defaults['latest_readmore_text']				= esc_html__('Read More','golden-builder');
	$defaults['excerpt_length']				= 50;
	$defaults['layout_options_blog']			= 'right-sidebar';
	$defaults['layout_options_archive']			= 'right-sidebar';
	$defaults['layout_options_page']			= 'right-sidebar';	
	$defaults['layout_options_single']			= 'right-sidebar';	

	//Footer section 
	$defaults['scroll_top_visible']		= true;		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'golden-builder' );
	$defaults['powered_by_text']			= esc_html__( 'Golden Builder by Sensational Theme', 'golden-builder' );

	// Pass through filter.
	$defaults = apply_filters( 'golden_builder_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'golden_builder_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function golden_builder_get_option( $key ) {

		$default_options = golden_builder_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;