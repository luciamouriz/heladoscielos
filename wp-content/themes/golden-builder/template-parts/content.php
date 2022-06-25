<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Golden Builder
 */
?>
<?php 
	$enable_category     = golden_builder_get_option( 'latest_category_enable' );
	$enable_author     = golden_builder_get_option( 'latest_author_enable' );
	$enable_comment     = golden_builder_get_option( 'latest_comment_enable' );
	$enable_read_more_text     = golden_builder_get_option( 'latest_read_more_text_enable' );
    $enable_posted_on     = golden_builder_get_option( 'latest_posted_on_enable' );
    $enable_video = golden_builder_get_option( 'latest_video_enable' );
    $header_font_size = golden_builder_get_option( 'latest_font_size');
	$latest_readmore_text = golden_builder_get_option( 'latest_readmore_text' );
	$blog_layout_content_type = golden_builder_get_option( 'blog_layout_content_type' );
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-item clear' ); ?>>
	<div class="post-item">

		<?php 
			$video_url = get_post_meta( get_the_ID(), 'golden-builder-video-url', true );
            if ( ! empty( $video_url ) && ($enable_video==true) ) { ?>
				<div class="featured-video">
		            <?php echo do_shortcode( '[video src="' . esc_url( $video_url ) . '"]' );?>
		        </div><!-- .featured-image -->
		    <?php } else { ?>
		    	<?php if ( (has_post_thumbnail() && ($enable_video==false)) || (has_post_thumbnail() && empty( $video_url )) ) { ?>
		    		<?php if ($blog_layout_content_type=='blog-two'){ ?>
		    			<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
	                        <a href="<?php the_permalink(); ?>" class="post-thumbnail-link"></a>
	                    </div><!-- .featured-image -->
		    			
		    		<?php } else{ ?>
					<figure>
					    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
					</figure>
				<?php } } }?>

		<div class="entry-container">
			<header class="entry-header">
				<?php if ($enable_category ==true): ?>
					<div class="entry-meta post-cat">
						<?php golden_builder_entry_meta(); ?>
					</div><!-- .entry-meta -->
				<?php endif ?>
				
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; ">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->
			<?php if (($enable_posted_on ==true || ($enable_comment ==true) || ($enable_author ==true)) && $blog_layout_content_type=='blog-two'): ?>
				<div class="entry-meta posted-on">
					<?php 
						if ($enable_comment ==true):
						 	golden_builder_comment(); 
						endif;
					?>
					<?php 
						if ($enable_author ==true):
						 	golden_builder_author(); 
						endif; ?>
					<?php
						if ($enable_posted_on ==true):
						 	golden_builder_posted_on(); 
						endif; 
						?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

			<div class="entry-content">
				<?php the_excerpt(); ?>
				<?php if (!empty ($latest_readmore_text) && $enable_read_more_text==true): ?>
					<a href="<?php the_permalink();?>" class="read-more-text"><?php echo esc_html($latest_readmore_text);?></a> 
				<?php endif ?>
			</div><!-- .entry-content -->
			<?php if (($enable_posted_on ==true || ($enable_comment ==true) || ($enable_author ==true)) && $blog_layout_content_type=='blog-one'): ?>
				<div class="entry-meta posted-on">
					<?php 
						if ($enable_comment ==true):
						 	golden_builder_comment(); 
						endif;
					?>
					<?php 
						if ($enable_author ==true):
						 	golden_builder_author(); 
						endif; ?>
					<?php
						if ($enable_posted_on ==true):
						 	golden_builder_posted_on(); 
						endif; 
						?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			
	        <?php if (!empty ($latest_readmore_text) && $enable_read_more_text==false) { ?>
	          	<div class="latest-read-more"><a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($latest_readmore_text);?></a> </div>
        	<?php } ?>
		</div><!-- .entry-container -->
		
	</div><!-- .post-item -->
</article><!-- #post-## -->
