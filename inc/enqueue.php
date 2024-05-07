<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;


function wpdocs_theme_name_scripts() {
    //scripts:   (if last parameter === true => load in footer)       
    wp_enqueue_script('my-theme-script', get_template_directory_uri() . '/build/index.js', array('jquery'), '1.0.0', true); //jquery depends
    wp_enqueue_style('my-theme-style', get_template_directory_uri() . '/build/index.css', array(), '1.0.0');
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );