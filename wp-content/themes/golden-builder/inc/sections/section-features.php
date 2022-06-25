<?php 
/**
 * Template part for displaying About Section
 *
 *@package Golden Builder
 */

    $features_title       = golden_builder_get_option( 'features_title' );
    $features_subtitle       = golden_builder_get_option( 'features_subtitle' );
    $background_features_section     = golden_builder_get_option( 'background_features_section' );
    $features_content_type     = golden_builder_get_option( 'features_content_type' );
    $number_of_features_items  = golden_builder_get_option( 'number_of_features_items' );
    $features_category = golden_builder_get_option( 'features_category' );
    $disable_features_icon = golden_builder_get_option( 'disable_features_icon' );

    for( $i=1; $i<=5; $i++ ) :
        $features_page_posts[] = absint(golden_builder_get_option( 'features_page_'.$i ) );
    endfor;
    ?>
    <article>
        <?php if(!empty($background_features_section)) : ?>
            <div class="featured-image" style="background-image: url('<?php echo esc_url($background_features_section) ?>');">
            </div><!-- .featured-image -->
        <?php endif; ?>
        <div class="entry-container">
            <?php if( !empty($features_title) || ! empty($features_subtitle ) ):?>
                <div class="featured-header" >
                <?php if( !empty($features_title)):?>
                    <h2 class="section-title"><?php echo esc_html($features_title);?></h2>
                <?php endif;?>
                    <?php if ( ! empty($features_subtitle ) ) : ?>
                    <p class="section-subtitle"><?php echo esc_html( $features_subtitle ); ?></p>
                <?php endif; ?><!-- .section-header -->
                </div> 
            <?php endif; ?>
            <?php $args = array (
                'post_type'     => 'page',
                'post_per_page' => count( $features_page_posts ),
                'post__in'      => $features_page_posts,
                'orderby'       =>'post__in',
                
            ); 
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>    
                <div class="features-item-wrapper">
                    <div class="icon-container">
                        <a href="<?php the_permalink();?>">
                            <i class="fa fa-check"></i>
                        </a>
                    </div>
                    <div class="features-content">
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        </header>

                        <div class="entry-content">
                            <?php
                                $excerpt = golden_builder_the_excerpt( 10 );
                                echo wp_kses_post( wpautop( $excerpt ) );
                            ?>
                        </div><!-- .entry-content -->
                    </div>
                </div>
            <?php endwhile;?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </article> 