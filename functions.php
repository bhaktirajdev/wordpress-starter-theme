<?php
// Exit if accessed directly
if ( !defined('ABSPATH') ) exit;

/**
 * Define some constants for easy development
 *
 * @since 1.0
 */
if (!defined('WST_PREFIX_VERSION')) 	define( 'WST_PREFIX_VERSION'	, '1.0' );
if (!defined('WST_PREFIX_BASE_PATH')) 	define( 'WST_PREFIX_BASE_PATH'	, get_template_directory_uri() 	. '/');
if (!defined('WST_PREFIX_IMG_PATH')) 	define( 'WST_PREFIX_IMG_PATH'	, get_template_directory_uri() 	. '/images/');

/**
 * Theme basics
 * @since 1.0
 */
 add_theme_support( 'post-thumbnails' );			// Enable support for Post Thumbnails on posts and pages.
 //add_theme_support( 'title-tag' );				// Let WordPress manage the document title.
 //show_admin_bar(false);							// Disable Admin Bar

/**
 * Add custom image sizes
 * @since 1.0
 */
//  add_image_size( 'boxes', 437, 291, true );
//  update_option( 'thumbnail_size_h', 164);
//  update_option( 'thumbnail_size_w', 253);

/**
 * Load CSS and JS
 * @since	1.0 *
 */
function wst_prefixload_css_and_js() {
  // register styles

  // Load Normalize CSS
  wp_register_style('normalize', WST_PREFIX_BASE_PATH . '/css/normalize.css', array(), '8.0.0');
  // Load Bootstrap CSS
	wp_register_style( 'bootstrap-css', WST_PREFIX_BASE_PATH . '/css/bootstrap/bootstrap.min.css' );
  // Load style.css
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

  // enqueue styles

  wp_enqueue_style('normalize');
  wp_enqueue_style('style');
  wp_enqueue_style('bootstrap-css');

  // register JS
	// Load Boostrap JS
	wp_register_script( 'bootstrap-js', WST_PREFIX_BASE_PATH . '/js/bootstrap/bootstrap.min.js', array('jquery'), "4.0.0", true);

	// Load Theme JS
	wp_register_script( 'main-js', WST_PREFIX_BASE_PATH . '/js/main.js', array('jquery'), "1.0.0", true);

  // Enqueue JS
  wp_enqueue_script('jquery');
  wp_enqueue_script('main-js');
  wp_enqueue_script('bootstrap-js');
}
add_action( 'wp_enqueue_scripts', 'wst_prefixload_css_and_js' );

/**
 * Register navigational menus
 *
 * @since	1.0
 * @refer	https://codex.wordpress.org/Navigation_Menus
 */
function wst_prefixregister_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu', 'Theme Header Menu'),
      'social-menu' => __('Social Menu', 'Theme Social Menu'),
      'footer-menu' => __('Footer Menu', 'Theme Footer Menu')
    )
  );
}
add_action( 'init', 'wst_prefixregister_menus' );

/**
 * Register WordPress widgets
 *
 * Use these in theme as <?php dynamic_sidebar( 'footer-widget-1' ); ?>
 * @since	1.0
 */
function wst_prefixwidgets_init() {

	// Sidebar
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wsttextdomain' ),
        'id' => 'main-sidebar',
        'description' => __( 'Widgets in this area will be shown on the sidebar.', 'wsttextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );

	// Footer Widget 1
    register_sidebar( array(
        'name' => __( 'Footer Widget 1', 'wsttextdomain' ),
        'id' => 'footer-widget-1',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'wsttextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );

	// Footer Widget 2
    register_sidebar( array(
        'name' => __( 'Footer Widget 2', 'wsttextdomain' ),
        'id' => 'footer-widget-2',
        'description' => __( 'Widgets in this area will be shown on the footer.', 'wsttextdomain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'wst_prefixwidgets_init' );
?>
