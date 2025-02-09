<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;


function wpdocs_theme_name_scripts() {
    //scripts:   (if last parameter === true => load in footer)     

    //fonts
    wp_enqueue_style('google-fonts-primary', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,700&display=swap', array(), null);
    wp_enqueue_style('google-fonts-secondary', 'https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap', array(), null);


    //js
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/build/index.js', array('jquery'), '1.0.0', true); //jquery depends

    //styles
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/build/index.css', array(), '1.0.0');
    wp_enqueue_style('my-main-style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );