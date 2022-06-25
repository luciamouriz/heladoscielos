<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function golden_builder_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'golden-builder' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'golden_builder_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function golden_builder_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'golden-builder' ),
            'off'       => esc_html__( 'Disable', 'golden-builder' )
        );
        return apply_filters( 'golden_builder_switch_options', $arr );
    }
endif;


 /**
 * Get an array of google fonts.
 * 
 */
function golden_builder_font_choices() {
    $font_family_arr = array();
    $font_family_arr[''] = esc_html__( '--Default--', 'golden-builder' );

    // Make the request
    $request = wp_remote_get( get_theme_file_uri( 'assets/fonts/webfonts.json' ) );

    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    // Retrieve the data
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if ( ! empty( $data ) ) {
        foreach ( $data->items as $items => $fonts ) {
            $family_str_arr = explode( ' ', $fonts->family );
            $family_value = implode( '-', array_map( 'strtolower', $family_str_arr ) );
            $font_family_arr[ $family_value ] = $fonts->family;
        }
    }

    return apply_filters( 'golden_builder_font_choices', $font_family_arr );
}

if ( ! function_exists( 'golden_builder_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function golden_builder_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'golden-builder' ),
            'header-font-1'   => esc_html__( 'Raleway', 'golden-builder' ),
            'header-font-2'   => esc_html__( 'Poppins', 'golden-builder' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'golden-builder' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'golden-builder' ),
            'header-font-5'   => esc_html__( 'Lato', 'golden-builder' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'golden-builder' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'golden-builder' ),
            'header-font-8'   => esc_html__( 'Lora', 'golden-builder' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'golden-builder' ),
            'header-font-10'   => esc_html__( 'Muli', 'golden-builder' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'golden-builder' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'golden-builder' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'golden-builder' ),
            'header-font-14'   => esc_html__( 'Cairo', 'golden-builder' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'golden-builder' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'golden-builder' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'golden-builder' ),
            'header-font-18'   => esc_html__( 'Fredericka', 'golden-builder' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'golden-builder' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'golden-builder' ),
        );

        $output = apply_filters( 'golden_builder_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'golden_builder_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function golden_builder_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'golden-builder' ),
            'body-font-1'     => esc_html__( 'Raleway', 'golden-builder' ),
            'body-font-2'     => esc_html__( 'Poppins', 'golden-builder' ),
            'body-font-3'     => esc_html__( 'Roboto', 'golden-builder' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'golden-builder' ),
            'body-font-5'     => esc_html__( 'Lato', 'golden-builder' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'golden-builder' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'golden-builder' ),
            'body-font-8'   => esc_html__( 'Lora', 'golden-builder' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'golden-builder' ),
            'body-font-10'   => esc_html__( 'Muli', 'golden-builder' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'golden-builder' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'golden-builder' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'golden-builder' ),
            'body-font-14'   => esc_html__( 'Cairo', 'golden-builder' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'golden-builder' ),
        );

        $output = apply_filters( 'golden_builder_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

 ?>