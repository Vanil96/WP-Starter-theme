<?php 
defined('ABSPATH') || exit;


$wps_inc_dir = 'inc';
$wps_includes = array(
	'/theme-config.php', 
	'/template-tags.php', 
	'/enqueue.php',
	'/theme-main.php',
	'/widgets.php',
	'/hooks.php',
	'/cpt.php',
);


// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$wps_includes[] = '/woocommerce.php';
}

// Include files.
foreach ( $wps_includes as $file ) {
	require_once get_theme_file_path( $wps_inc_dir . $file );
}

