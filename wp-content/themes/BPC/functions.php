<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Theme functions and definitions
 */

if ( ! defined( 'US_ACTIVATION_THEMENAME' ) ) {
	define( 'US_ACTIVATION_THEMENAME', 'Impreza' );
}

global $us_theme_supports;
$us_theme_supports = array(
	'plugins' => array(
		'js_composer' => 'plugins-support/js_composer/js_composer.php',
		'Ultimate_VC_Addons' => 'plugins-support/Ultimate_VC_Addons.php',
		'revslider' => 'plugins-support/revslider.php',
		'contact-form-7' => NULL,
		'gravityforms' => 'plugins-support/gravityforms.php',
		'woocommerce' => 'plugins-support/woocommerce.php',
		'wpml' => 'plugins-support/wpml.php',
		'bbpress' => 'plugins-support/bbpress.php',
		'tablepress' => 'plugins-support/tablepress.php',
		'the-events-calendar' => 'plugins-support/the_events_calendar.php',
		'tiny_mce' => 'plugins-support/tiny_mce.php',
	),
);

require dirname( __FILE__ ) . '/common/framework.php';

/**
 * Never worry about cache again!
 */
function my_load_scripts($hook) {
 
    // 
    wp_enqueue_script( 'custom_js', get_theme_file_uri( 'js/jquery.custom.js'), array(), $my_js_ver, true );
    wp_enqueue_style ( 'my_css' );
 
}
add_action('wp_enqueue_scripts', 'my_load_scripts');