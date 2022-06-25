<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BlogMelody
 */
get_header(); 
$latest_post_column = golden_builder_get_option( 'number_of_latest_posts_column' );
$latest_section_posts_title = golden_builder_get_option( 'latest_section_posts_title' );
$blog_layout_content_type = golden_builder_get_option( 'blog_layout_content_type' ); ?>
	<div class="wrapper page-section">
		<?php if( !empty($latest_section_posts_title) && 'posts' == get_option( 'show_on_front' )):?>
			<div class="section-header">
			   <?php if( !empty($latest_section_posts_title)):?>
	                <h2 class="section-title blog-page-title"><?php echo esc_html($latest_section_posts_title);?></h2>
	            <?php endif;?>
	        </div>
		<?php endif;?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main blog-posts-wrapper" role="main">
				<div class="<?php if($blog_layout_content_type == 'blog-one') { ?>col-<?php echo esc_attr($latest_post_column) ?> <?php if($latest_post_column > 1) { ?> grid <?php }} else{ ?> col-1 <?php } ?>">
				
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!-- .blog-archive-wrapper -->
				<?php 	/**
			* Hook - golden_builder_pagination_action.
			*
			* @hooked golden_builder_pagination 
			*/
			 do_action('golden_builder_pagination_action');?>
			</main><!-- #main -->
		</div><!-- #primary -->
		
		<?php get_sidebar(); ?>
	</div><!-- .wrapper/.page-section-->
<?php 
get_footer();