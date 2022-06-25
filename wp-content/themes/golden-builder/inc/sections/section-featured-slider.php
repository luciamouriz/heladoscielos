<?php 
/**
 * Template part for displaying Featured Slider Section
 *
 *@package Golden Builder
 */
    $sr_content_type   = golden_builder_get_option( 'sr_content_type' );
    $number_of_sr_items = golden_builder_get_option( 'number_of_sr_items' );
    $slider_column = golden_builder_get_option( 'number_of_sr_column' );
    $slider_category = golden_builder_get_option( 'slider_category' );
    $enable_content     = golden_builder_get_option( 'slider_content_enable' );
    $enable_title     = golden_builder_get_option( 'slider_title_enable' );
    $enable_category     = golden_builder_get_option( 'slider_category_enable' );
    $enable_posted_on     = golden_builder_get_option( 'slider_posted_on_enable' );
    $slider_speed   = golden_builder_get_option( 'slider_speed' );
    $slider_dot   = golden_builder_get_option( 'slider_dot' );
    $slider_arrow   = golden_builder_get_option( 'slider_arrow_enable' );
    $slider_autoplay  = golden_builder_get_option( 'slider_autoplay_enable' );
    $slider_infinite  = golden_builder_get_option( 'slider_infinite_enable' );
    $slider_fade  = golden_builder_get_option( 'slider_fade_enable' );
    $image_overlay   = golden_builder_get_option( 'disable_white_overlay' );
    $header_font_size = golden_builder_get_option( 'slider_font_size');
    $slider_content_position = golden_builder_get_option( 'slider_content_position_option');
    $slider_alt_btn_text = golden_builder_get_option( 'slider_alt_custom_btn_text');
    $slider_alt_btn_url = golden_builder_get_option( 'slider_alt_custom_btn_url');
    $class ='';
    if (true == $slider_dot) {
       $class = 'true';
    } else{
        $class = 'false';
    }
    for( $i=1; $i<=3; $i++ ) :
        $featured_slider_page_posts[] = golden_builder_get_option( 'slider_page_'.$i );
    endfor;
    ?>
    
<div class="featured-slider-wrapper <?php echo esc_attr($slider_content_position); ?>" 
data-slick='{"slidesToShow": <?php echo esc_attr( $slider_column) ?>,
 "slidesToScroll": 1, 
 "infinite": <?php if( true== $slider_infinite ){ echo 'true'; } else{ echo 'false'; } ?>, 
 "speed": <?php echo esc_attr( $slider_speed) ?>, 
 "dots": <?php echo esc_html($class) ?>, 
 "arrows":<?php if( true== $slider_arrow ){ echo 'true'; } else{ echo 'false'; } ?>, 
 "autoplay": <?php if( true== $slider_autoplay ){ echo 'true'; } else{ echo 'false'; } ?>, 
 "fade": <?php if( true== $slider_fade && $slider_column==1){ echo 'true'; } else{ echo 'false'; } ?> }'>

    <?php
        $args = array (

        'post_type'     => 'page',
        'post_per_page' => 3,
        'post__in'      => $featured_slider_page_posts,
        'orderby'       =>'post__in',
    );

    $loop = new WP_Query($args);                        
    if ( $loop->have_posts() ) :
    $i=0;  
        while ($loop->have_posts()) : $loop->the_post(); $i++;?>

            <article class="slick-item" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                <?php 
                    $class='';
                    if (false == $image_overlay) { 
                        $class='image-overlay';
                    } else{
                        $class='content-overlay';
                    }
                    if (false == $image_overlay)  {
                ?>
                    <div class="overlay"></div>
                <?php } ?>
                <div class="wrapper">
                    <div class="<?php echo esc_attr($class); ?> featured-content-wrapper">
                        <header class="entry-header">
                            <?php if ( ($enable_category==true)) { ?>
                                <div class="entry-meta">
                                    <?php golden_builder_entry_meta(); ?>
                                </div><!-- .entry-meta -->
                            <?php } ?>
                            <?php if ($enable_title==true): ?>
                                <a href="<?php the_permalink();?>" >
                                    <h2 class="entry-title"><?php the_title();?></h2>
                                </a>
                            <?php endif ?>
                        </header>
                        <?php if ( ($enable_content==true)): ?>
                            <div class="entry-content">
                                <?php
                                    $excerpt = golden_builder_the_excerpt( 30 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        <?php endif; ?>
                        
                        <?php if ( ($enable_posted_on==true)) { ?>
                            <div class="entry-meta">                 
                                <?php golden_builder_posted_on(); ?>
                            </div><!-- .entry-meta -->
                        <?php } ?>
                        <?php
                        $readmore_text   = golden_builder_get_option( 'slider_custom_btn_text_' . $i ); 
                        if ( ! empty( $readmore_text )|| ! empty( $slider_alt_btn_text ) ) { ?>
                                <div class="read-more">
                                <?php if ( ! empty( $readmore_text ) ) : ?>
                                        <a href="<?php the_permalink();?>" class="btn btn-primary"><?php echo esc_html($readmore_text);?></a>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $slider_alt_btn_text ) && ! empty( $slider_alt_btn_url ) ) : ?>
                                        <a href="<?php echo esc_url( $slider_alt_btn_url ); ?>" class=" btn-transparent"><?php echo esc_html( $slider_alt_btn_text); ?></a>
                                    <?php endif; ?>
                                </div><!-- .read-more -->
                            <?php } ?>
                    </div><!-- .featured-content-wrapper -->
                </div><!-- .wrapper -->
            </article><!-- .slick-item -->
        <?php endwhile;?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div><!-- .featured-slider-wrapper -->