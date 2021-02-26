<?php
/**
 * Bullson Media functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bullson_Media
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bullson_inc_media_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bullson_inc_media_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Bullson Media, use a find and replace
		 * to change 'bullson_inc_media' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bullson_inc_media', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		// register_nav_menus(
		// 	array(
		// 		'menu-1' => esc_html__( 'Primary', 'bullson_inc_media' ),
		// 	)
		// );
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'bullson_inc_media' ),
		) );

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
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bullson_inc_media_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bullson_inc_media_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bullson_inc_media_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bullson_inc_media_content_width', 640 );
}
add_action( 'after_setup_theme', 'bullson_inc_media_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bullson_inc_media_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bullson_inc_media' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bullson_inc_media' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bullson_inc_media_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bullson_inc_media_scripts() {
	wp_enqueue_style( 'bullson_inc_media-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bullson_inc_media-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bullson_inc_media-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// Adding Bootstrap to the Theme - Start

	wp_enqueue_style( 'bootstrap-fonts-awesome', get_template_directory_uri() . '/bootstrap/css/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/bootstrap/css/animate/animate.css' ); //
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/bootstrap/css/magnific-popup/magnific-popup.css' ); //
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/bootstrap/css/owl-carousel/owl.carousel.min.css' );//
	wp_enqueue_style( 'owl-carousel-default-css', get_template_directory_uri() . '/bootstrap/css/owl-carousel/owl.theme.default.min.css' );//
	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/bootstrap/css/responsive.css' );//


	
	// wp_enqueue_script( 'bootstrap-jquery' , get_template_directory_uri() . '/bootstrap/js/jquery.js', array( 'jquery' ), true);

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

	wp_enqueue_script( 'bootstrap-bundle' , get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery') );
	// wp_enqueue_script( 'bootstrap-min' , get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array());
	wp_enqueue_script( 'boot2','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
	
	wp_enqueue_script( 'bootstrap-wow' , get_template_directory_uri() . '/bootstrap/js/wow/wow.min.js', array('jquery'));//
	wp_enqueue_script( 'magnific-popup-js' , get_template_directory_uri() . '/bootstrap/js/magnific-popup/jquery.magnific-popup.min.js', array('jquery'));
	wp_enqueue_script( 'owl-carousel-js' , get_template_directory_uri() . '/bootstrap/js/owl-carousel/owl.carousel.min.js', array('jquery'));
	wp_enqueue_script( 'bootstrap-jquery-easing' , get_template_directory_uri() . '/bootstrap/js/easing/jquery.easing.1.3.js', array('jquery'));
	wp_enqueue_script( 'bootstrap-custom-js' , get_template_directory_uri() . '/bootstrap/js/custom.js', array());

	// Adding Bootstrap to the Theme - Start

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bullson_inc_media_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



 add_filter( 'acf_svg_icon_filepath', 'bea_svg_icon_filepath' );
function bea_svg_icon_filepath( $filepath ) {
    if ( is_file( get_stylesheet_directory() . '/assets/icons/icons.svg' ) ) {
        $filepath[] = get_stylesheet_directory() . '/assets/icons/icons.svg';
    }
    return $filepath;
}




// function prefix_modify_nav_menu_args( $args ) {
//     return array_merge( $args, array(
//         'walker' => new WP_Bootstrap_Navwalker(),
//     ) );
// }
// add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );