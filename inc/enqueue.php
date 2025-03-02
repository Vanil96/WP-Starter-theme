<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;


function wpdocs_theme_name_scripts() {
    //scripts:   (if last parameter === true => load in footer)     

    //fonts
    wp_enqueue_style('google-font_primary', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wdth@1,87.5&display=swap', array(), null);
    wp_enqueue_style('google-font_secondary', 'https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap', array(), null);


    //js
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/build/index.js', array('jquery'), '1.0.0', true); //jquery depends

    //styles
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/build/index.css', array(), '1.0.0');
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );