<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;


function wpdocs_theme_name_scripts() {
    //scripts:   (if last parameter === true => load in footer)       
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery' ), '1.0.0', true );  //jquery depends
    wp_enqueue_script( 'splide-carousel', get_template_directory_uri() . '/assets/lib/splide/splide.min.js', array( 'jquery' ), '1.0.0', true );  //jquery depends
    wp_enqueue_script( 'carousels-scripts', get_template_directory_uri() . '/assets/js/carousel.js', array( 'splide-carousel' ), '1.0.0', false ); 


    

    //styles:
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/style/css/theme.css' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/style/css/main.css' );
    wp_enqueue_style( 'splide-style', get_template_directory_uri() . '/assets/lib/splide/splide.min.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/style.css' );
}



add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );