<?php
/**
 * inspiro functions and definitions
 *
 * @package inspiro
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'inspiro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function inspiro_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on inspiro, use a find and replace
	 * to change 'inspiro' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'inspiro', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'inspiro' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'inspiro_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	// Remove p tag in content editors.
	// remove_filter( 'the_content', 'wpautop' );
	// remove_filter( 'the_excerpt', 'wpautop' );
}
endif; // inspiro_setup
add_action( 'after_setup_theme', 'inspiro_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function inspiro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'inspiro' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'inspiro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function inspiro_scripts() {
	wp_enqueue_style( 'inspiro-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inspiro_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
* Custom shortcodes
*/

function section_shortcode( $atts , $content = null ) {
	extract(shortcode_atts(array(
		"class" => '',
		"id" => ''
		),$atts));
		
		$returnstring = '<section';
		
		if(!empty($atts['class'])){
			$returnstring .= ' class="'.$atts['class'].'"';
		}
		
		
		
		if(!empty($atts['id'])){
			$returnstring .= ' id="'.$atts['id'].'"';
		}
		
		
		$returnstring .= '>'.do_shortcode($content).'</section>';
			
	
		return $returnstring;
}

add_shortcode( 'section', 'section_shortcode' );

function row_shortcode( $atts , $content = null ) {
	extract(shortcode_atts(array(
		"width" => 'normal'),$atts));
		switch($width){
			case "normal":
				$row = 'row';
				break;
			case "full":
				$row = 'fullwidthrow';
				break;
		}
		return '<div class="'.$row.'">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );


function col_shortcode( $atts , $content = null ) {
	extract(shortcode_atts(array(
		"size" => '1of1'
		), $atts));
		switch($size){
			case "1/1" :
				$size = "oneofone";
				break;
			case "1/2" :
				$size = "oneoftwo";
				break;
			case "1/3" :
				$size = "oneofthree";
				break;
			}
	return '<div class="col ' . $size . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'col', 'col_shortcode' );

function icon_shortcode($atts) {
	extract(shortcode_atts(array(
		"url" => ''), $atts));
	
	return '<img class="icon" src="'.$atts[url].'" alt="" />';	
}

add_shortcode( 'icon', 'icon_shortcode');


function bigicon_shortcode($atts) {
	extract(shortcode_atts(array(
		"class" => ''), $atts));
		
	return '<p class="big-icon '.$atts['class'].'">&nbsp;</p>';

}

add_shortcode( 'bigicon', 'bigicon_shortcode');


function smallicon_shortcode($atts) {
	extract(shortcode_atts(array(
		"class" => ''), $atts));
		
	return '<p class="small-icon '.$atts['class'].'">&nbsp;</p>';

}

add_shortcode( 'smallicon', 'smallicon_shortcode');

/* Image sizes */
add_action( 'after_setup_theme', 'image_sizes' );
function image_sizes() {
  add_image_size( '50x50', 50, 50 );
  add_image_size( '100x100', 100, 100 );
  add_image_size( '200x200', 200, 200 );
  add_image_size( '400x400', 400, 400 );
  add_image_size( '800x800', 800, 800 );
  add_image_size( '1200x1200', 1200, 1200 );
  add_image_size( '1600x1600', 1600, 1600 );
}