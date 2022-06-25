<?php 
/**
 * Template part for displaying Services Section
 *
 *@package Golden Builder
 */

    $services_title       =golden_builder_get_option( 'services_title' );
    $services_subtitle       =golden_builder_get_option( 'services_subtitle' );
    $services_content_type     =golden_builder_get_option( 'services_content_type' );
    $number_of_services_column =golden_builder_get_option( 'number_of_services_column' );
    $number_of_services_items  =golden_builder_get_option( 'number_of_services_items' );
    $services_category =golden_builder_get_option( 'services_category' );
    $disable_services_icon =golden_builder_get_option( 'disable_services_icon' );
    $btn_url =golden_builder_get_option( 'services_btn_url');
    $btn_text =golden_builder_get_option( 'services_btn_text');
    $services_content   =golden_builder_get_option( 'services_content_enable' );
    for( $i=1; $i<=6; $i++ ) :
        $services_page_posts[] = absint(golden_builder_get_option( 'services_page_'.$i ) );
        $services_icon   =golden_builder_get_option( 'services_icon_'.$i );
    endfor;
    ?>

    <?php if( !empty($services_title) ):?>
        <div class="section-header">
        <?php if( !empty($services_title)):?>
            <h2 class="section-title"><?php echo esc_html($services_title);?></h2>
        <?php endif;?>
        <?php if (!empty($services_subtitle)): ?>
            <h3 class="section-subtitle"><?php echo esc_html($services_subtitle);?></h3>
        <?php endif; ?>
        </div>
        
    <?php endif; 

    ?>
    
    <div class="section-content col-3">
        <?php $args = array (
            'post_type'     => 'page',
            'post_per_page' => 6,
            'post__in'      => $services_page_posts,
            'orderby'       =>'post__in',
            
        ); 
    $loop = new WP_Query($args);                        
    if ( $loop->have_posts() ) :
        $i=0;  
        while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                <article>
                    <div class="services-item-wrapper">
                    <?php 
                     $cloud_enable =golden_builder_get_option('disable_homepage_cloud_section');
                     $icon_cloud =golden_builder_get_option('disable_icon_cloud');
                    $services_icon =golden_builder_get_option( 'services_icon_'.$i );
                    if ( ( true == $disable_services_icon ) && !empty($services_icon) ) { ?>
                        <div class="icon-container">
                            <a href="<?php the_permalink();?>">
                            <i class="fa <?php echo esc_attr( $services_icon)?>"></i>
                        </a>
                        </div>
                    <?php  } ?>
                    <?php if ( ( has_post_thumbnail() ) && ( false == $disable_services_icon )  ) : ?>
                        <div class="featured-image">
                            <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                        </div><!-- .featured-image -->
                    <?php endif; ?>
                    <div class="services-content">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        </header>
                        <?php if ($services_content == true): ?>
                            <div class="entry-content">
                                <?php
                                    $excerpt =golden_builder_the_excerpt( 25 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        <?php endif ?>
                    </div>
                  </div>
                </article>
        <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>
</div> 