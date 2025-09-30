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


//hide seo category
function exclude_category_from_blog( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-3' ); 
    }
}
add_action( 'pre_get_posts', 'exclude_category_from_blog' );


//add suboadmin based on admin
function create_subadmin_role() {
    $admin = get_role('administrator');
    
    add_role('subadmin', 'Subadmin', $admin->capabilities);
}
add_action('init', 'create_subadmin_role');