<?php
/**
 * The template for displaying home page.
 * @package Golden Builder
 */

if ( 'posts' == get_option( 'show_on_front' )  || 'posts' != get_option( 'show_on_front' )){ 
    get_header(); ?>
    <?php $enabled_sections = golden_builder_get_sections();
    if( is_array( $enabled_sections ) ) {
        foreach( $enabled_sections as $section ) {

            if( ( $section['id'] == 'featured-slider' ) ){ ?>
                <?php $disable_featured_slider = golden_builder_get_option( 'disable_featured-slider_section' );
                if( true == $disable_featured_slider): ?>
                    
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <?php $slider_layout = golden_builder_get_option( 'slider_layout_option'); ?>
                        <?php if ($slider_layout=='default-slider'){ ?>
                            <div class="wrapper">
                                <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                            </div>
                        <?php } else {
                                 get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); 
                        } ?>
                    </section>
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'details' ) { ?>
                <?php $disable_details_section = golden_builder_get_option( 'disable_details_section' );
                if( true ==$disable_details_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section> 
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'services' ) { ?>
                <?php $disable_services_section = golden_builder_get_option( 'disable_services_section' );
                 $services_background_image = golden_builder_get_option( 'services_background_image' );
                if( true ==$disable_services_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" style="background-image: url('<?php echo esc_url( $services_background_image );?>');">
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section> 
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'information' ) { ?>
                <?php $disable_information_section = golden_builder_get_option( 'disable_information_section' );
                if( true ==$disable_information_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                    
            <?php endif; ?>

            <?php } elseif( $section['id'] == 'project' ) { ?>
                <?php $disable_project_section = golden_builder_get_option( 'disable_project_section' );
                if( true ==$disable_project_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                        <div class="box"></div>
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                    
            <?php endif; ?> 
            <?php } elseif( $section['id'] == 'cta' ) { ?>
                <?php $disable_cta_section = golden_builder_get_option( 'disable_cta_section' );
                $background_cta_section = golden_builder_get_option( 'background_cta_section' );
                if( true ==$disable_cta_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" style="background-image: url('<?php echo esc_url( $background_cta_section );?>');">

                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>

                    </section>
            <?php endif; ?> 

            <?php } elseif( $section['id'] == 'team' ) { ?>
                <?php $disable_team_section = golden_builder_get_option( 'disable_team_section' );
                $background_team_section = golden_builder_get_option( 'background_team_section' );
                if( true ==$disable_team_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" style="background-image: url('<?php echo esc_url( $background_team_section );?>');">
                        <div class="overlay"></div>
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                    
            <?php endif; ?> 

            <?php } elseif( $section['id'] == 'features' ) { ?>
                <?php $disable_features_section = golden_builder_get_option( 'disable_features_section' );
                if( true ==$disable_features_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>">
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                    
            <?php endif; ?>  

            <?php } elseif( $section['id'] == 'testimonial' ) { ?>
                <?php $disable_testimonial_section = golden_builder_get_option( 'disable_testimonial_section' );
                if( true ==$disable_testimonial_section): ?>
                
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="relative page-section">
                        <div class="testi-box"></div>
                        <div class="wrapper">
                            <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                        </div>
                    </section>
                        
            <?php endif; ?> 

            <?php  } elseif( $section['id'] == 'contact' ) { ?>
                <?php $disable_contact_section = golden_builder_get_option( 'disable_contact_section' );
                if( true ==$disable_contact_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class="clear">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </section>
                <?php endif; ?>  

            <?php } elseif ( $section['id'] == 'blog' ) { ?>
                <?php $disable_blog_section = golden_builder_get_option( 'disable_blog_section' );
                if( true === $disable_blog_section): ?>
                    <section id="<?php echo esc_attr( $section['id'] ); ?>" class=" page-section">
                        <div class="box"></div>
                        <div class="wrapper">
                        <?php get_template_part( 'inc/sections/section', esc_attr( $section['id'] ) ); ?>
                    </div>
                    </section>
                <?php endif; ?>

           <?php
            }
        }
    }
    if('posts' == get_option( 'show_on_front' )){
        include( get_home_template() );
    }

    get_footer();
} 
else{
    include( get_page_template() );
}