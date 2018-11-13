<?php
$app_ver = '20181113'.rand(0,999999); // major.minor.patch.build/pull-request
/**
 * Widgets and functions get loaded in separate files keeping this file clean! Do not put items here in this file.
*/
define('THEME_PATH', get_template_directory());
define('DATE_FORMAT', 'M j, Y');
//Libraries & functions go here

//autoload libraries folder
require_once(THEME_PATH . '/libraries/vendor/autoload.php');

// Enqueue styles and scripts
function add_theme_styles() {
	global $app_ver;
	wp_enqueue_style( 'font-awesome-5-0-13', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', false, '5.0.13' );
	//wp_enqueue_style( 'font-google-source-sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700', false, $app_ver );
	wp_enqueue_style( 'bootstrapcss', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css', false, $app_ver );
	wp_enqueue_style( 'main-theme', get_stylesheet_directory_uri() . '/css/main.css', false, $app_ver );
}
function add_theme_scripts() {
	global $app_ver;
	wp_enqueue_script( 'jquery-3-3-1-js', 'https://code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script( 'popper-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array ( 'jquery-3-3-1-js' ), $app_ver);
	wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js', array ( 'popper-bootstrap' ), $app_ver);
	// wp_enqueue_script( 'arrive', get_template_directory_uri() . '/js/arrive.min.js', '', $app_ver);
	// wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery-3-3-1-js' ), $app_ver);
	// wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array ( 'jquery-3-3-1-js' ), $app_ver);
	// wp_enqueue_script( 'vellipsis', get_template_directory_uri() . '/js/jquery.vEllipsis.min.js', array ( 'jquery-3-3-1-js' ), $app_ver);
	 wp_enqueue_script( 'main-theme-script', get_template_directory_uri() . '/js/main.js', array ( 'jquery-3-3-1-js' ), $app_ver);
	wp_localize_script( 'main-ajax', 'main_ajax', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'ajax_nonce' => wp_create_nonce('main_nonce')
	) );
}
// function add_optimizely_script() {
// 	wp_enqueue_script( 'optimizely', 'https://cdn.optimizely.com/js/10764520846.js');
// }
// moving the Optimimzely script direct to the header.php file to ensure first execution
// add_action( 'wp_enqueue_scripts', 'add_optimizely_script', -2 );

add_action( 'wp_enqueue_scripts', 'add_theme_styles' );
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_theme_support( 'post-thumbnails' );
