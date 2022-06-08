<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;



//Enable support for Post Formats
add_theme_support(
   'post-formats',
   array(
       'aside',
       'image',
       'video',
       'quote',
       'link',
   )
);


//Adding Thumbnail basic support
add_theme_support( 'post-thumbnails' );

// Set up the WordPress Theme custom logo feature.

function wps_custom_logo_setup() {
    $defaults = array(
        'height'               => 100, //pixels
        'width'                => 400, //pixels
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array ('site-title', 'site-description'),
        'unlink-homepage-logo' => false, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'wps_custom_logo_setup' );


// Add support for responsive embedded content.
add_theme_support( 'responsive-embeds' );

add_theme_support( 'title-tag' );




if ( ! function_exists( 'wps_register_nav_menu' ) ) {
 
    function wps_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu'),
            'footer_menu'  => __( 'Footer Menu'),
        ) );
    }
    add_action( 'after_setup_theme', 'wps_register_nav_menu', 0 );
}


//hide wp version
function wpbeginner_remove_version() {
    return ''; }
    add_filter('the_generator', 'wpbeginner_remove_version');

   
 //excerpt length
 function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );    


//no index if attachment page
function attachmentpages_noindex() {
    if(is_attachment()) {
    echo '<meta name="robots" content="noindex" />'; } }
    
    add_action('wp_head', 'attachmentpages_noindex');


//yoast seo near acf fields
function yoastToBottom() { return 'low'; } 
add_filter( 'wpseo_metabox_prio', 'yoastToBottom');    


//add custom logo to login page
function wpdev_filter_login_head() {
    if ( has_custom_logo() ) :
        $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'medium' ); //medium is image size
        ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo esc_url( $image[0] ); ?>);
                -webkit-background-size: <?php echo absint( $image[1] )?>px;
                background-size: <?php echo absint( $image[1] ) ?>px;
                height: <?php echo absint( $image[2] ) ?>px;
                width: <?php echo absint( $image[1] ) ?>px;
            }
        </style>
        <?php
    endif;
}

add_action( 'login_head', 'wpdev_filter_login_head', 100 );


//login image link to home
function new_wp_login_url() {
    return home_url();
}
add_filter('login_headerurl', 'new_wp_login_url');


//search form shortcode: [display_search_form]
function wps_display_search_form() {
	return get_search_form(false);
}
add_shortcode('display_search_form', 'wps_display_search_form');