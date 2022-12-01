<?php

if ( ! function_exists( 'kiwidev_theme_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook.
     */
    function kiwidev_theme_setup() {
        // Add supports
        add_theme_support( 'wp-block-styles' );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);
    }
}
add_action( 'after_setup_theme', 'kiwidev_theme_setup' );
