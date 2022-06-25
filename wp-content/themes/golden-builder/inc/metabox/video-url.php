<?php
/**
 * Subtitle metabox file.
 *
 * @package BlogMelody
 * @since Golden Builder 1.0
 */

if ( ! function_exists( 'golden_builder_video_url_callback' ) ) :
    /** 
     * Outputs the content of the Video Url
     */
    function golden_builder_video_url_callback( $post ) {
        wp_nonce_field( basename( __FILE__ ), 'golden_builder_nonce' );
        $video_url = get_post_meta( $post->ID, 'golden-builder-video-url', true );
        ?>
        <p>
         <label for="golden-builder-video-url" class="golden-builder-row-title"><?php esc_html_e( 'Video Url', 'golden-builder' )?></label>
         <input class="widefat" type="url" name="golden-builder-video-url" id="golden-builder-video-url" value="<?php echo esc_url( $video_url ); ?>"/>     
        </p>

        <?php
    }
endif;

if ( ! function_exists( 'golden_builder_video_url_save' ) ) :
    /**
     * Saves the Video Url input
     */
    function golden_builder_video_url_save( $post_id ) {
        // Checks save status
        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce = ( isset( $_POST[ 'golden_builder_nonce' ] ) && wp_verify_nonce( sanitize_key( $_POST[ 'golden_builder_nonce' ] ), basename( __FILE__ ) ) ) ? 'true' : 'false';

        // Exits script depending on save status
        if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
            return;
        }

        // Checks for input and sanitizes/saves if needed
        if( isset( $_POST[ 'golden-builder-video-url' ] ) ) {
            update_post_meta( $post_id, 'golden-builder-video-url', sanitize_text_field( wp_unslash( $_POST[ 'golden-builder-video-url' ] ) ) );
        }

    }
endif;
add_action( 'save_post', 'golden_builder_video_url_save' );

