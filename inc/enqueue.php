<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;





function wpdocs_theme_name_scripts() {
    //scripts:   (if last parameter === true => load in footer)       
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '1.0.0', true );  //jquery depends


    

    //styles:
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style.css' );


    

 
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );