<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden Builder
 */
/**
* Hook - golden_builder_action_doctype.
*
* @hooked golden_builder_doctype -  10
*/
do_action( 'golden_builder_action_doctype' );
?>
<head>
<?php
/**
* Hook - golden_builder_action_head.
*
* @hooked golden_builder_head -  10
*/
do_action( 'golden_builder_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php

/**
* Hook - golden_builder_action_before.
*
* @hooked golden_builder_page_start - 10
*/
do_action( 'golden_builder_action_before' );

/**
*
* @hooked golden_builder_header_start - 10
*/
do_action( 'golden_builder_action_before_header' );

/**
*
*@hooked golden_builder_site_branding - 10
*@hooked golden_builder_header_end - 15 
*/
do_action('golden_builder_action_header');

/**
*
* @hooked golden_builder_content_start - 10
*/
do_action( 'golden_builder_action_before_content' );

/**
 * Banner start
 * 
 * @hooked golden_builder_banner_header - 10
*/
do_action( 'golden_builder_banner_header' );  
