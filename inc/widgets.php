<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

function widget_registration($name, $id, $description,$beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}
 
function multiple_widget_init(){
   $def_beforeWidget ='<div class="single-widget"';
   $def_afterWidget ='</div>';
   $def_beforeTitle ='<h3 class="widget-title"';
   $def_afterTitle ='</h3>';



    widget_registration('Footer 1', 'footer-sidebar-1', '', $def_beforeWidget, $def_afterWidget, $def_beforeTitle, $def_afterTitle);
    widget_registration('Footer 2', 'footer-sidebar-2', '', $def_beforeWidget, $def_afterWidget, $def_beforeTitle, $def_afterTitle);  
    widget_registration('Aside', 'aside-sidebar', '', $def_beforeWidget, $def_afterWidget, $def_beforeTitle, $def_afterTitle);  
}
 

add_action('widgets_init', 'multiple_widget_init');


/* 
for implement use: 
    dynamic_sidebar( 'ID' );
*/