<?php
/**
 * Linc Edge Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package linc_edge_Theme
 */

if ( ! function_exists( 'linc_edge_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function linc_edge_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // linc_edge_setup
add_action( 'after_setup_theme', 'linc_edge_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function linc_edge_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'linc_edge_content_width', 640 );
}
add_action( 'after_setup_theme', 'linc_edge_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function linc_edge_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'linc_edge_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function linc_edge_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'linc_edge_minified_css', 10, 2 );






/**
 * Enqueue scripts and styles.
 */

function linc_edge_scripts() {

	wp_enqueue_script('jquery');

	wp_enqueue_style( 'lincedge-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script('flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '3.3.1', true);

	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array(), '3.3.1', true);
	
	wp_enqueue_script( 'header-js', get_template_directory_uri() . '/build/js/header.min.js', array('jquery'), true );

	wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/build/js/contact.min.js', array('jquery'), true );

	wp_enqueue_script( 'about-team-js', get_template_directory_uri() . '/build/js/about-team.min.js', array('jquery'), true );

	wp_enqueue_script( 'about-journey-js', get_template_directory_uri() . '/build/js/about-journey.min.js', array('jquery'), true );
	
	wp_enqueue_script( 'product-js', get_template_directory_uri() . '/build/js/product.min.js', array('jquery'), true );

	wp_enqueue_style( 'style', 'https://unpkg.com/flickity@2/dist/flickity.min.css');

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato', false ); 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'linc_edge_scripts' );




function et_excerpt_length($length) {
	return 10;
}
add_filter('excerpt_length', 'et_excerpt_length');







/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';



