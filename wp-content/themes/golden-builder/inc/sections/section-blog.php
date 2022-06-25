<?php 
/**
 * Template part for displaying Blog Section
 *
 *@package Golden Builder
 */
?>
<?php 
    $blog_post_title    = golden_builder_get_option( 'blog_title' );
    $blog_post_subtitle    = golden_builder_get_option( 'blog_subtitle' );
    $blog_category = golden_builder_get_option( 'blog_category' );
    $blog_content   = golden_builder_get_option( 'blog_content_enable' );
    $blog_category_enable   = golden_builder_get_option( 'blog_category_enable' );
?> 
<?php if( !empty($blog_post_title) || ! empty($blog_post_sub_title ) ):?>
    <div class="section-header">
    <?php if( !empty($blog_post_title)):?>
        <h2 class="section-title"><?php echo esc_html($blog_post_title);?></h2>
    <?php endif;?>
        <?php if ( ! empty($blog_post_subtitle ) ) : ?>
        <p class="section-subtitle"><?php echo esc_html( $blog_post_subtitle ); ?></p>
    <?php endif; ?><!-- .section-header -->
    </div>

<?php endif;?>
  <div class="section-content clear col-3">
    <?php 
        $args = array (

            'posts_per_page' =>3,              
            'post_type' => 'post',
            'post_status' => 'publish',
            'paged' => 1,
            );
            if ( absint( $blog_category ) > 0 ) {
                $args['cat'] = absint( $blog_category );
            }
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
                $i=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                    <article>
                        <?php $blog_image_buttom    = golden_builder_get_option( 'image_buttom' );
                        if ( true == $blog_image_buttom ) {
                            $classes = 'image-buttom';
                        } else {
                            $classes = 'image-top';
                        }?>
                        <div class="blog-item-wrapper <?php echo esc_attr( $classes ); ?>">
                            <?php if(has_post_thumbnail()):?>
                                <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                    <a href="<?php the_permalink();?>"></a>  
                                </div>
                            <?php endif;?>

                            <div class="entry-container">

                                <header class="entry-header">
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    </h2>
                                </header>
                                <?php if ($blog_content == true): ?>
                                    <div class="entry-content">
                                        <?php
                                            $excerpt = golden_builder_the_excerpt( 20 );
                                            echo wp_kses_post( wpautop( $excerpt ) );
                                        ?>
                                    </div><!-- .entry-content -->
                                <?php endif; ?>
                                <?php if ($blog_category_enable == true): ?>
                                    <div class="entry-meta">                 
                                        <?php golden_builder_entry_meta();?>
                                    </div><!-- .entry-meta -->
                                <?php endif; ?>
                                <?php $readmore_text = golden_builder_get_option( 'readmore_text' );
                                if (!empty ($readmore_text)) { ?>

                                  <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($readmore_text);?></a>
                                <?php } ?>
                            </div><!-- .entry-container -->
                        </div><!-- .post-item -->
                    </article>
        <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>
  </div>