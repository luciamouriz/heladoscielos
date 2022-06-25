<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden Builder
 */

/**
 *
 * @hooked golden_builder_mustread_section
 */
if (is_home()) {

	do_action( 'golden_builder_action_mustread' );
}

/**
 *
 * @hooked golden_builder_footer_start
 */
do_action( 'golden_builder_action_before_footer' );

/**
 * Hooked - golden_builder_footer_top_section -10
 * Hooked - golden_builder_footer_section -20
 */
do_action( 'golden_builder_action_footer' );

/**
 * Hooked - golden_builder_footer_end. 
 */
do_action( 'golden_builder_action_after_footer' );

wp_footer(); ?>

</body>  
</html>