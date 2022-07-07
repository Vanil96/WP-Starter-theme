<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;


//single product button name (here if is external/affiliate)
function change_wc_external_button( $button_text, $product ) {
	
    if ( 'external' === $product->get_type() && getLang() === 'pl' ) {
return $product->button_text ? $product->button_text : 'Kup w sklepie';
}
elseif( 'external' === $product->get_type() && getLang() === 'en' )
{
return $product->button_text ? $product->button_text : 'Go to shop';
}
return $button_text; }
//add_filter( 'woocommerce_product_add_to_cart_text', 'change_wc_external_button', 10, 2 );
//add_filter( 'woocommerce_product_single_add_to_cart_text', 'change_wc_external_button', 10, 2 );



//archive WC button name change
//add_filter( 'woocommerce_product_add_to_cart_text', 'wps_archive_custom_cart_button_text' );
function wps_archive_custom_cart_button_text( $text ) {
global $product;       
if ( $product && getLang() === 'pl') {           
  return 'Zobacz więcej';
} 
return $text;
}


//add_filter('woocommerce_product_related_products_heading','wps_change_related_products_title');
 function wps_change_related_products_title() {
    if (getLang() === 'pl') {return 'Zobacz również';}
    elseif (getLang() === 'en') { return 'Watch more'; }
 }



// Change number of related products output
// add_filter( 'woocommerce_output_related_products_args', 'wps_related_products_args', 20 );
 function wps_related_products_args( $args ) {
   $args['posts_per_page'] = 11; // x related products
   $args['columns'] = 1; // arranged in x columns
   return $args;
}