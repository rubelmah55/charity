<?php

function charity_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'charity', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'charity' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sz16_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'charity_setup' );


function charity_scripts() {

	/**
	 * Enqueue styles.
	 */
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap-theme-css', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), false, 'all');
	wp_enqueue_style('icon-font', get_template_directory_uri() . '/css/font-awesome.min.css', array(), false, 'all');
	wp_enqueue_style('icon-animation', get_template_directory_uri() . '/css/font-awesome-animation.min.css', array(), false, 'all');
	wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style( 'charity-style', get_stylesheet_uri() );


	/**
	 * Enqueue scripts.
	 */
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('jquery-min-js', get_template_directory_uri() . '/js/jquery.min.js', array(), false, true);
	wp_enqueue_script('validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), false, true);
	wp_enqueue_script('popupoverlay', get_template_directory_uri() . '/js/jquery.popupoverlay.js', array(), false, true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), false, true);

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'charity_scripts' );


add_image_size( 'contact-img', 48, 48, true );

require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
