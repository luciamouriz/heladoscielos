<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Golden Builder
 */

if ( ! function_exists( 'golden_builder_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function golden_builder_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$posted_on = sprintf(
		'%s',
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
	echo '<span class="date">' . $posted_on . '</span>'; // WPCS: XSS OK.

}
endif;
if ( ! function_exists( 'golden_builder_comment' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function golden_builder_comment() {

	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Comment<span class="screen-reader-text"> on %s</span>', 'golden-builder' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}	

}
endif;

if ( ! function_exists( 'golden_builder_author' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function golden_builder_author() {

	if( is_single() || is_archive() || is_front_page() ){
		$byline = sprintf(
	        esc_html_x( '%s', 'post author', 'golden-builder' ),
	        '<span class="author vcard"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" class="url" itemprop="url">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a></span>'
	    );
	    echo '<span class="byline">' . $byline . '</span>';
	}

}
endif;

if ( ! function_exists( 'golden_builder_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function golden_builder_entry_meta() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list();
		if ( $categories_list && golden_builder_categorized_blog() ) {
			printf( '<span class="cat-links">%1$s</span>', $categories_list ); // WPCS: XSS OK.
		}
	}

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function golden_builder_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'golden_builder_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'golden_builder_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so golden_builder_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so golden_builder_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in golden_builder_categorized_blog.
 */
function golden_builder_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'golden_builder_categories' );
}
add_action( 'edit_category', 'golden_builder_category_transient_flusher' );
add_action( 'save_post',     'golden_builder_category_transient_flusher' );
