<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Golden Builder
 */

get_header(); ?>
<?php $enable_comment     = golden_builder_get_option( 'single_post_comment_enable' );
    $enable_pagination     = golden_builder_get_option( 'single_post_pagination_enable' ); ?>
<div class="wrapper page-section">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );
			if ($enable_pagination==true) {
				the_post_navigation();

			}
			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( (comments_open() || get_comments_number() ) && ($enable_comment==true) )  :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main --> 
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php get_footer();
