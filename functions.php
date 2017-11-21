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
	add_theme_support( 'post-thumbnails' );


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
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), false, true);

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

add_action( 'init', 'charity_post_types' );

function charity_post_types() {
	//register events post type
	$labels = array(
		'name'               => _x( 'Events', 'post type general name', 'charity' ),
		'singular_name'      => _x( 'Event', 'post type singular name', 'charity' ),
		'menu_name'          => _x( 'Events', 'admin menu', 'charity' ),
		'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'charity' ),
		'add_new'            => _x( 'Add New Event', 'dealer', 'charity' ),
		'add_new_item'       => __( 'Add New Event', 'charity' ),
		'new_item'           => __( 'New Event', 'charity' ),
		'edit_item'          => __( 'Edit Event', 'charity' ),
		'view_item'          => __( 'View Event', 'charity' ),
		'all_items'          => __( 'All Events', 'charity' ),
		'search_items'       => __( 'Search Events', 'charity' ),
		'parent_item_colon'  => __( 'Parent Events:', 'charity' ),
		'not_found'          => __( 'No Events found.', 'charity' ),
		'not_found_in_trash' => __( 'No Events found in Trash.', 'charity' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Add all media center event.', 'charity' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'event' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_icon'			 => 'dashicons-admin-post',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'editor'),
	);
	register_post_type( 'event', $args );


}

require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
add_image_size( 'event', 555, 280, true );

/* customize login screen */
function charity_images_custom_login_page() {
    echo '<style type="text/css">
        .login h1 a { background-image:url("'. get_stylesheet_directory_uri().'/img/logo.png") !important; height: 100px !important; width: 100% !important; margin: 0 auto !important; background-size: contain !important; }
		h1 a:focus { outline: 0 !important; box-shadow: none; }
        body.login { background-image:url("'. get_stylesheet_directory_uri().'/img/banner.jpg") !important; background-repeat: no-repeat !important; background-attachment: fixed !important; background-position: center !important; background-size: cover !important; position: relative; z-index: 999;}
  		body.login:before {background-color: rgba(254, 165, 1, 0.6); position: absolute; width: 100%; height: 100%; left: 0; top: 0; content: ""; z-index: -1; }
  		.login form {
  			background: rgba(255,255,255, 0.2) !important;
  		}
		.login form .input, .login form input[type=checkbox], .login input[type=text] {
			background: transparent !important;
			color: #ddd;
		}
		.login label {
			color: #DDD !important;
		}
		.login #login_error, .login .message {
			color: #ddd;
			margin-top: 20px;
			background: rgba(255,255,255, 0.2) !important;
		}
		#login {
		    padding: 7% 0 0;
		}
    </style>';
}
add_action('login_head', 'charity_images_custom_login_page', 99);
function cabinet_login_logo_url_title() {
 	return 'Business Simple';
}
add_filter( 'login_headertitle', 'cabinet_login_logo_url_title' );
function cabinet_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'cabinet_login_logo_url' );

