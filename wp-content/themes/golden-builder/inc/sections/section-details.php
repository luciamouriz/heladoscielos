<?php 
/**
 * Template part for displaying Details Section
 *
 *@package Golden Builder
 */
    $details_content_type     = golden_builder_get_option( 'details_content_type' );
    $details_button_label       = golden_builder_get_option( 'details_button_label' );
    $details_subtitle       = golden_builder_get_option( 'details_subtitle' );
    $details_button_url         = golden_builder_get_option( 'details_button_url' );
    $details_alt_button_label       = golden_builder_get_option( 'details_alt_button_label' );
    $details_alt_button_url         = golden_builder_get_option( 'details_alt_button_url' );
    $details_content   = golden_builder_get_option( 'details_content_enable' );

?>
    <?php 
        $details_id = golden_builder_get_option( 'details_page' );
            $args = array (
            'post_type'     => 'page',
            'posts_per_page' => 1,
            'p' => $details_id,
            
        ); 
    $the_query = new WP_Query( $args );

    // The Loop
    while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
        <article class="has-post-thumbnail">
            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
            </div><!-- .featured-image -->
            <div class="entry-container">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if ( ! empty( $details_subtitle ) ) : ?>
                        <h3 class="section-subtitle"><?php echo esc_html($details_subtitle); ?></h3>
                    <?php endif; ?>
                </header>

                <?php if ($details_content == true): ?>
                    <div class="entry-content">
                        <?php
                            $excerpt = golden_builder_the_excerpt( 70 );
                            echo wp_kses_post( wpautop( $excerpt ) );
                        ?>
                    </div><!-- .entry-content -->
                <?php endif ?>

                <div class="read-more">
                    <?php if ( ! empty( $details_button_label ) ) : ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html($details_button_label); ?></a>
                    <?php endif; ?>
                </div>
            </div><!-- .entry-container -->
            
        </article>
    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>