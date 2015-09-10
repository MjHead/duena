<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package duena
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function duena_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'duena_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function duena_jetpack_setup
add_action( 'after_setup_theme', 'duena_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function duena_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function duena_infinite_scroll_render
