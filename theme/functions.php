<?php

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);

if ( ! function_exists( 'kiwidev_theme_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook.
     */
    function kiwidev_theme_setup() {
        // Add supports
        add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
        
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

		/*
		* Load additional block styles.
		*/
		$styled_blocks = ['query-pagination-numbers'];
		foreach ( $styled_blocks as $block_name ) {
			$args = array(
				'handle' => "kiwidev_theme-$block_name",
				'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.css" ),
				$args['path'] = get_theme_file_path( "assets/css/blocks/$block_name.css" ),
			);
			wp_enqueue_block_style( "core/$block_name", $args );
		}
    }
}
add_action( 'after_setup_theme', 'kiwidev_theme_setup' );

if ( ! function_exists( 'kiwidev_theme_scripts' ) ) {
    function kiwidev_theme_scripts() {
        // Enqueue styles.
        wp_enqueue_style( 'style', get_theme_file_uri( "assets/css/style.css" ) );
    }
}
add_action( 'wp_enqueue_scripts', 'kiwidev_theme_scripts' );
