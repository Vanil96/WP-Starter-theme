<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;



function get_contact($x = 'phone') {
if ($x === 'phone') {return 'phone';}
elseif ($x === 'mail') {return 'mail';}
}






//add options page for ACF
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> __('Opcje'),
		'menu_title'	=> __('Opcje dodatkowe'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

acf_add_options_sub_page(array(
    'page_title' 	=> 'Kontakt-social',
    'menu_title'	=> 'Kontakt i sociale',
    'parent_slug'	=> 'theme-general-settings',
));

 ?>