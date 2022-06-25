<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Golden Builder
 */

get_header(); 
$latest_post_column = golden_builder_get_option( 'number_of_latest_posts_column' );?>
<div class="wrapper page-section">
	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-posts-wrapper" role="main">
			<div class="<?php if($blog_layout_content_type == 'blog-one') { ?>col-<?php echo esc_attr($latest_post_column) ?> <?php if($latest_post_column > 1) { ?> grid <?php }} else{ ?> col-1 <?php } ?>">
				<?php
				if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		<?php 	/**
			* Hook - golden_builder_pagination_action.
			*
			* @hooked golden_builder_pagination 
			*/
			 do_action('golden_builder_pagination_action'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php

get_footer();
