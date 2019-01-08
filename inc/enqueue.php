<?php
/**
 * Susty WP Theme Enqeue
 *
 * @package Susty
 */

if ( ! function_exists( 'susty_wp_enqueue' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function susty_wp_enqueue() {

		// De-registers the WordPress stock jquery script
		wp_deregister_script( 'jquery' );

		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/frontie/dist/css/main.css');
		wp_enqueue_style( 'susty-styles', get_stylesheet_directory_uri() . '/frontie/dist/css/main.css', array(), $css_version );
		wp_enqueue_script( 'susty-vendor', get_template_directory_uri() . '/frontie/dist/js/vendor.js', array(), $theme_version, true);

		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/frontie/dist/js/app.js');
		wp_enqueue_script( 'susty-scripts', get_template_directory_uri() . '/frontie/dist/js/app.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'susty_wp_enqueue' );
