<?php
    $project_title       =golden_builder_get_option( 'project_title' );
    $project_subtitle       =golden_builder_get_option( 'project_subtitle' );
    $project_viewall_text       =golden_builder_get_option( 'project_viewall_text' );
    $project_btn_url       =golden_builder_get_option( 'project_btn_url' );
    $project_content_type     = golden_builder_get_option( 'project_content_type' );
    $enable_category     = golden_builder_get_option( 'project_category_enable' );
    $enable_content     = golden_builder_get_option( 'project_content_enable' );
    $enable_posted_on     = golden_builder_get_option( 'project_posted_on_enable' );
    $project_dots  = golden_builder_get_option( 'project_dots_enable' );
    $project_arrow  = golden_builder_get_option( 'project_arrow_enable' );
    $number_of_project_items  = golden_builder_get_option( 'number_of_project_items' );
    $project_category = golden_builder_get_option( 'project_category' );

?>
<div class="section-header-wrapper clear">
    <div class="section-header">
        <?php if( !empty($project_title)):?>
            <h2 class="section-title"><?php echo esc_html($project_title);?></h2>
        <?php endif;?>
        <?php if (!empty($project_subtitle)): ?>
            <h3 class="section-subtitle"><?php echo esc_html($project_subtitle);?></h3>
        <?php endif; ?>
    </div>
    <?php if (!empty($project_viewall_text) && !empty($project_btn_url)): ?>
        <div class="read-more">
            <a href="<?php echo esc_url($project_btn_url) ?>" class="btn"><?php echo esc_html($project_viewall_text) ?></a>
        </div><!-- read-more -->
    <?php endif ?>
</div><!-- .section-header-wrapper -->
<div class="project-slider modern-slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite": true, "speed": 1200, "dots": <?php if( true== $project_dots){ echo 'true'; } else{ echo 'false'; } ?>, "arrows":<?php if( true== $project_arrow ){ echo 'true'; } else{ echo 'false'; } ?>, "autoplay": true, "fade": false }'>
    <?php 
        $args = array (

        'posts_per_page' =>5,              
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => 1,
        'ignore_sticky_posts' => true, 
        );
        if ( absint( $project_category ) > 0 ) {
            $args['cat'] = absint( $project_category );
        }
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>  
                <article>
                    <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full');?>');');">
                        <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                    </div><!-- .featured-image -->

                    <div class="entry-container">
                        <?php if ( ($enable_category==true) ) : ?>
                            <div class="entry-meta">
                                <?php golden_builder_entry_meta(); ?>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>

                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        </header>

                        <?php if ( ($enable_content==true)): ?>
                            <div class="entry-content">
                                <?php 
                                    $excerpt = golden_builder_the_excerpt( 15 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        <?php endif; ?>
                    </div><!-- .entry-container -->
                </article>         
            <?php endwhile;?>
        <?php endif; ?>
      <?php wp_reset_postdata(); ?>
</div>