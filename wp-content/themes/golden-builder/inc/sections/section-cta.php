<?php 
/**
 * Template part for displaying CTA Section
 *
 *@package Golden Builder
 */
    $cta_content_type     = golden_builder_get_option( 'cta_content_type' );
    $cta_button_label       = golden_builder_get_option( 'cta_button_label' );
    $cta_button_url         = golden_builder_get_option( 'cta_button_url' );
    $cta_alt_button_label       = golden_builder_get_option( 'cta_alt_button_label' );
    $cta_alt_button_url         = golden_builder_get_option( 'cta_alt_button_url' );

?>

    <?php 
        $cta_id = golden_builder_get_option( 'cta_page' );
            $args = array (
            'post_type'     => 'page',
            'posts_per_page' => 1,
            'p' => $cta_id,
            
        ); 
        $the_query = new WP_Query( $args );

    // The Loop
    while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
            <div class="section-header">
                <h3 class="section-title" ><?php the_title(); ?></h3>
                <h3 class="section-subtitle">
                    <?php $excerpt = golden_builder_the_excerpt( 15 );
                    echo wp_kses_post( wpautop( $excerpt ) ); ?>
                </h3>
            </div><!-- .section-header -->

        <?php if ( !empty($cta_button_label ) || !empty($cta_alt_button_label ) )  :?>
            <div class="read-more">
                <?php if ( ! empty( $cta_button_label ) ) : ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html($cta_button_label); ?></a>
                <?php endif; ?>
                <?php if ( ! empty( $cta_alt_button_label ) && ! empty( $cta_alt_button_url ) ) : ?>
                    <a href="<?php echo esc_url( $cta_alt_button_url ); ?>" class="btn btn-transparent"><?php echo esc_html( $cta_alt_button_label); ?></a>
                <?php endif; ?>
            </div><!-- .read-more -->
        <?php endif;?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
