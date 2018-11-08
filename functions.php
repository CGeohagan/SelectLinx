<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package selectlinx_theme
 */


/* OEMBED SIZING
 ========================== */
 
if ( ! isset( $content_width ) )
	$content_width = 600;
	
	
/* THEME SETUP
 ========================== */
 
if ( ! function_exists( 'selectlinx_theme_setup' ) ):
function selectlinx_theme_setup() {

	// Available for translation
	load_theme_textdomain( 'selectlinx-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	register_nav_menu( 'primary', __( 'Primary Menu', 'selectlinx-theme' ) );
	
	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );
}
endif;
add_action( 'after_setup_theme', 'selectlinx_theme_setup' );


/* SIDEBARS & WIDGET AREAS
 ========================== */
function selectlinx_theme_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'selectlinx-theme' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  register_sidebar( array(
    'name' => __( 'Contact Form', 'selectlinx-theme' ),
    'id' => 'form-sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
	) );
	register_sidebar( array(
    'name' => __( 'Assessments Form', 'selectlinx-theme' ),
    'id' => 'form-sidebar-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'selectlinx_theme_widgets_init' );


/* ENQUEUE TITLE TAG
 ========================== */
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );


/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function selectlinx_theme_scripts() {
	// theme style.css file
	wp_enqueue_style( 'selectlinx-theme-style', get_stylesheet_uri() );

	// font awesome css file
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css' );

	// swiper css
	wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css' );
	
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// vendor scripts
	wp_enqueue_script(
		'greensock',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js',
		array('jquery'), '1.0', true
	);

	// vendor scripts
	wp_enqueue_script(
		'swiper',
		'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js'
	);

	// Theme Scripts
	wp_enqueue_script(
		'theme-init',
		get_template_directory_uri() . '/assets/js/theme.js',
		array('jquery')
	);

	// Slider Scripts
	if (is_page('Home') || is_page('Other Services')) {
		wp_enqueue_script(
			'slider-init',
			get_template_directory_uri() . '/assets/js/slider.js',
			array('jquery')
		);
	}

}    
add_action('wp_enqueue_scripts', 'selectlinx_theme_scripts');


/* GOOGLE WEBFONTS
 ========================== */

function wpb_add_google_fonts() {
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Muli:400,400i,700|Philosopher:400,700', false);
}

add_action ('wp_enqueue_scripts', 'wpb_add_google_fonts');



/* MISC EXTRAS
 ========================== */
 
// Comments & pingbacks display template
include('inc/functions/comments.php');

// Optional Customizations
// Includes: TinyMCE tweaks, admin menu & bar settings, query overrides
include('inc/functions/customizations.php');

/**
 * Remove the front-end admin bar for everybody, always
 */
show_admin_bar( false );