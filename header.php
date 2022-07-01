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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body <?php body_class(array( "wps-theme") ); ?>>
<div class="site" id="page">

    <?php get_template_part('templates/parts/header'); ?>


