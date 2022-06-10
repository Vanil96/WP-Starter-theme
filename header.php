<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php if(!is_front_page()) { 
            the_title(); 
            echo " - "; 
        } echo bloginfo('title'); ?> </title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(array( "wps-theme") ); ?>>
<div class="site" id="page">

    <?php get_template_part('templates/parts/header'); ?>