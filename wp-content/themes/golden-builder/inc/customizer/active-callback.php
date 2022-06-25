<?php
/**
 * Active callback functions.
 *
 * @package Golden Builder
 */

function golden_builder_header_background_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_header_background_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_about_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_about_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_about_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( golden_builder_about_active( $control ) && ( 'about_custom' == $content_type ) );
} 

function golden_builder_about_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( golden_builder_about_active( $control ) && ( 'about_page' == $content_type ) );
}

function golden_builder_about_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( golden_builder_about_active( $control ) && ( 'about_post' == $content_type ) );
}

function golden_builder_about_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( golden_builder_about_active( $control ) && ( 'about_category' == $content_type ) );
}


//========================Slider Section=====================//

function golden_builder_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured-slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( golden_builder_slider_active( $control ) && ( 'sr_page' == $content_type ) );
}

function golden_builder_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( golden_builder_slider_active( $control ) && ( 'sr_post' == $content_type ) );
}

function golden_builder_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return  golden_builder_slider_seperator( $control ) && ( in_array( $content_type, array( 'sr_page', 'sr_post', 'sr_custom' ) ) ) ;
}

function golden_builder_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( golden_builder_slider_active( $control ) && ( 'sr_custom' == $content_type ) );
}

function golden_builder_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( golden_builder_slider_active( $control ) && ( 'sr_category' == $content_type ) );
}



//========================Services Section=====================//

function golden_builder_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}
function golden_builder_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( golden_builder_services_active( $control ) && ( 'services_page' == $content_type ) );
}

function golden_builder_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( golden_builder_services_active( $control ) && ( 'services_post' == $content_type ) );
}

function golden_builder_services_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[services_content_type]' )->value();
    return ( golden_builder_services_active( $control ) && ( 'services_category' == $content_type ) );
}
//===================End Services Section==============//


//========================Information Section=====================//

function golden_builder_information_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_information_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_information_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( golden_builder_information_active( $control ) && ( 'information_custom' == $content_type ) );
} 

function golden_builder_information_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( golden_builder_information_active( $control ) && ( 'information_page' == $content_type ) );
}

function golden_builder_information_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( golden_builder_information_active( $control ) && ( 'information_post' == $content_type ) );
}


//========================detail Section=====================//

function golden_builder_details_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_details_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_details_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( golden_builder_details_active( $control ) && ( 'details_custom' == $content_type ) );
} 

function golden_builder_details_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( golden_builder_details_active( $control ) && ( 'details_page' == $content_type ) );
}

function golden_builder_details_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[details_content_type]' )->value();
    return ( golden_builder_details_active( $control ) && ( 'details_post' == $content_type ) );
}


//========================Project Section=====================//

function golden_builder_project_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_project_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_project_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( golden_builder_project_active( $control ) && ( 'project_custom' == $content_type ) );
} 

function golden_builder_project_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( golden_builder_project_active( $control ) && ( 'project_page' == $content_type ) );
}

function golden_builder_project_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( golden_builder_project_active( $control ) && ( 'project_post' == $content_type ) );
}

function golden_builder_project_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( golden_builder_project_active( $control ) && ( 'project_category' == $content_type ) );
}


//========================Cta Section=====================//

function golden_builder_cta_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_cta_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_cta_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( golden_builder_cta_active( $control ) && ( 'cta_custom' == $content_type ) );
} 

function golden_builder_cta_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( golden_builder_cta_active( $control ) && ( 'cta_page' == $content_type ) );
}

function golden_builder_cta_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( golden_builder_cta_active( $control ) && ( 'cta_post' == $content_type ) );
}


//========================Team Section=====================//

function golden_builder_team_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_team_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_team_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( golden_builder_team_active( $control ) && ( 'team_custom' == $content_type ) );
} 

function golden_builder_team_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( golden_builder_team_active( $control ) && ( 'team_page' == $content_type ) );
}

function golden_builder_team_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( golden_builder_team_active( $control ) && ( 'team_post' == $content_type ) );
}

function golden_builder_team_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( golden_builder_team_active( $control ) && ( 'team_category' == $content_type ) );
}

//========================Team Section=====================//

function golden_builder_features_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_features_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_features_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( golden_builder_features_active( $control ) && ( 'features_custom' == $content_type ) );
} 

function golden_builder_features_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( golden_builder_features_active( $control ) && ( 'features_page' == $content_type ) );
}

function golden_builder_features_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( golden_builder_features_active( $control ) && ( 'features_post' == $content_type ) );
}

function golden_builder_features_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( golden_builder_features_active( $control ) && ( 'features_category' == $content_type ) );
}

//========================Conatct Section=====================//

function golden_builder_contact_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_contact_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

//========================Testimonial Section=====================//

function golden_builder_testimonial_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_testimonial_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_testimonial_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( golden_builder_testimonial_active( $control ) && ( 'testimonial_custom' == $content_type ) );
} 

function golden_builder_testimonial_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( golden_builder_testimonial_active( $control ) && ( 'testimonial_page' == $content_type ) );
}

function golden_builder_testimonial_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( golden_builder_testimonial_active( $control ) && ( 'testimonial_post' == $content_type ) );
}

function golden_builder_testimonial_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( golden_builder_testimonial_active( $control ) && ( 'testimonial_category' == $content_type ) );
}

//========================Popular Section=====================//

function golden_builder_popular_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_popular_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_popular_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( golden_builder_popular_active( $control ) && ( 'popular_page' == $content_type ) );
}

function golden_builder_popular_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( golden_builder_popular_active( $control ) && ( 'popular_post' == $content_type ) );
}

function golden_builder_popular_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( golden_builder_popular_active( $control ) && ( 'popular_category' == $content_type ) );
}

function golden_builder_popular_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return ( golden_builder_popular_active( $control ) && ( 'popular_custom' == $content_type ) );
}

function golden_builder_popular_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[popular_content_type]' )->value();
    return  golden_builder_popular_seperator( $control ) && ( in_array( $content_type, array( 'popular_page', 'popular_post', 'popular_custom' ) ) ) ;
}




function golden_builder_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( golden_builder_blog_active( $control ) && ( 'blog_page' == $content_type ) );
}

function golden_builder_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( golden_builder_blog_active( $control ) && ( 'blog_post' == $content_type ) );
}

function golden_builder_blog_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( golden_builder_blog_active( $control ) && ( 'blog_category' == $content_type ) );
}

function golden_builder_message_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_message_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_message_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( golden_builder_message_active( $control ) && ( 'message_custom' == $content_type ) );
} 

function golden_builder_message_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( golden_builder_message_active( $control ) && ( 'message_page' == $content_type ) );
}

function golden_builder_message_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[message_content_type]' )->value();
    return ( golden_builder_message_active( $control ) && ( 'message_post' == $content_type ) );
}
function golden_builder_video_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_video_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_trending_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_trending_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_trending_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( golden_builder_trending_active( $control ) && ( 'trending_page' == $content_type ) );
}

function golden_builder_trending_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( golden_builder_trending_active( $control ) && ( 'trending_post' == $content_type ) );
}

function golden_builder_trending_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[trending_content_type]' )->value();
    return ( golden_builder_trending_active( $control ) && ( 'trending_category' == $content_type ) );
}

function golden_builder_sensational_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_sensational_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_sensational_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( golden_builder_sensational_active( $control ) && ( 'sensational_page' == $content_type ) );
}

function golden_builder_sensational_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( golden_builder_sensational_active( $control ) && ( 'sensational_post' == $content_type ) );
}

function golden_builder_sensational_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sensational_content_type]' )->value();
    return ( golden_builder_sensational_active( $control ) && ( 'sensational_category' == $content_type ) );
}

function golden_builder_mustread_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_mustread_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_mustread_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( golden_builder_mustread_active( $control ) && ( 'mustread_page' == $content_type ) );
}

function golden_builder_mustread_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( golden_builder_mustread_active( $control ) && ( 'mustread_post' == $content_type ) );
}

function golden_builder_mustread_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[mustread_content_type]' )->value();
    return ( golden_builder_mustread_active( $control ) && ( 'mustread_category' == $content_type ) );
}

function golden_builder_tips_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_tips_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_tips_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( golden_builder_tips_active( $control ) && ( 'tips_page' == $content_type ) );
}

function golden_builder_tips_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( golden_builder_tips_active( $control ) && ( 'tips_post' == $content_type ) );
}

function golden_builder_tips_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[tips_content_type]' )->value();
    return ( golden_builder_tips_active( $control ) && ( 'tips_category' == $content_type ) );
}

function golden_builder_featured_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function golden_builder_featured_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( golden_builder_featured_active( $control ) && ( 'featured_page' == $content_type ) );
}

function golden_builder_featured_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( golden_builder_featured_active( $control ) && ( 'featured_post' == $content_type ) );
}

function golden_builder_featured_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[featured_content_type]' )->value();
    return ( golden_builder_featured_active( $control ) && ( 'featured_category' == $content_type ) );
}



/**
 * Active Callback for top bar section
 */
function golden_builder_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function golden_builder_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

