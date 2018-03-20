<?php
/**
 * RED Starter Theme functions and definitions.
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
		'name'          => esc_html( 'Sidebar' ),
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




// Hook up the AJAX ajctions
add_action( 'wp_ajax_nopriv_gf_button_get_form', 'gf_button_ajax_get_form' );
add_action( 'wp_ajax_gf_button_get_form', 'gf_button_ajax_get_form' );
// Add the "button" action to the gravityforms shortcode
// e.g. [gravityforms action="button" id=1 text="button text"]
add_filter( 'gform_shortcode_button', 'gf_button_shortcode', 10, 3 );
function gf_button_shortcode( $shortcode_string, $attributes, $content ){
	$a = shortcode_atts( array(
		'id' => 0,
		'text' => 'Show me the form!',
		'button_class' => ''
	), $attributes );
	$form_id = absint( $a['id'] );
	if ( $form_id < 1 ) {
		return 'Missing the ID attribute.';
	}
	// Enqueue the scripts and styles
	gravity_form_enqueue_scripts( $form_id, true );
	$ajax_url = admin_url( 'admin-ajax.php' );
	$html = sprintf( '<button id="gf_button_get_form_%d" class="%s">%s</button>', $form_id, $a['button_class'], $a['text'] );
	$html .= sprintf( '<div id="gf_button_form_container_%d" style="display:none;"></div>', $form_id );
	$html .= "<script>
				(function (SHFormLoader, $) {
				$('#gf_button_get_form_{$form_id}').click(function(){
					var button = $(this);
					$.get('{$ajax_url}?action=gf_button_get_form&form_id={$form_id}',function(response){
						$('#gf_button_form_container_{$form_id}').html(response).fadeIn();
						button.remove();
						if(window['gformInitDatepicker']) {gformInitDatepicker();}
					});
				});
			}(window.SHFormLoader = window.SHFormLoader || {}, jQuery));
			</script>";
	return $html;
}
function gf_button_ajax_get_form(){
	$form_id = isset( $_GET['form_id'] ) ? absint( $_GET['form_id'] ) : 0;
	gravity_form( $form_id,true, false, false, false, true );
	die();
}

/**
 * Enqueue scripts and styles.
 */

function linc_edge_scripts() {

	wp_enqueue_script('jquery');

	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	// wp_enqueue_script('jquery-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);

	wp_enqueue_script( 'header-js', get_template_directory_uri() . '/build/js/header.min.js', array('jquery'), true );

	wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/build/js/contact.min.js', array('jquery'), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'linc_edge_scripts' );










/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';



