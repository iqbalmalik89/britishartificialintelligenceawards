<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Include all the needed files
 *
 * (!) Note for Clients: please, do not modify this or other theme's files. Use child theme instead!
 */

$us_theme_supports = array(
	'plugins' => array(
		'js_composer' => '/framework/plugins-support/js_composer/js_composer.php',
		'Ultimate_VC_Addons' => '/framework/plugins-support/Ultimate_VC_Addons.php',
		'revslider' => '/framework/plugins-support/revslider.php',
		'contact-form-7' => NULL,
		'gravityforms' => '/framework/plugins-support/gravityforms.php',
		'woocommerce' => '/framework/plugins-support/woocommerce/woocommerce.php',
		'wpml' => '/framework/plugins-support/wpml.php',
		'bbpress' => '/framework/plugins-support/bbpress.php',
		'tablepress' => '/framework/plugins-support/tablepress.php',
	),
);

require dirname( __FILE__ ) . '/framework/framework.php';

unset( $us_theme_supports );


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function sp_form_func( $atts ) {
	$atts = shortcode_atts( array(
		'formid' => 0
	), $atts, 'sp_form' );

	return do_shortcode("[sp-form formid={$atts['foo']}]");
}
add_shortcode( 'sp-form-x', 'sp_form_func' );

