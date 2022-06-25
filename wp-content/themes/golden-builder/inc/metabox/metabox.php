<?php
/**
 * Golden Builder metabox file.
 *
 * This is the template that includes all the other files for metaboxes of Golden Builder theme
 *
 * @package Golden Builder
 * @since Golden Builder 0.1
 */

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/video-url.php'; 




if ( ! function_exists( 'golden_builder_custom_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function golden_builder_custom_meta() {
        $post_type = array( 'post', 'page' );

        // POST Subtitle 
        add_meta_box( 'golden_builder_video_url', esc_html__( 'Video Links', 'golden-builder' ), 'golden_builder_video_url_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'golden_builder_custom_meta' );


