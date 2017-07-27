<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package venezuela-blog
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function venezuela_blog_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'venezuela_blog_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add support for 1 homepage featured post. NOTE: Jetpack plugin must be activated
	add_theme_support( 'featured-content', array(
	    'filter'     => 'venezuela_blog_get_featured_posts',
	    'max_posts'  => 1,
	) );
	
}
add_action( 'after_setup_theme', 'venezuela_blog_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function venezuela_blog_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}
