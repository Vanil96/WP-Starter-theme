<?php  
// Exit if accessed directly.
defined('ABSPATH') || exit;


//add options page for ACF
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> __('Opcje'),
		'menu_title'	=> __('Opcje dodatkowe'),
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

 	acf_add_options_sub_page(array(
    'page_title' 	=> 'Kontakt-social',
    'menu_title'	=> 'Kontakt i sociale',
    'parent_slug'	=> 'theme-general-settings',
	));
	}


	function get_contact($x = 'phone') {
	if ($x === 'phone') {return 'phone';}
	elseif ($x === 'mail') {return 'mail';}
	}



	function getLang() {
	if ( defined( 'ICL_LANGUAGE_CODE' ) ) { return ICL_LANGUAGE_CODE;} else {return 'pl';}  }  


    function wpsField($group, $field, $options = false, $translate = false ) {
	
		if ($options == true && $translate == true) { 
			$var = get_field($group . '_' . getLang(), 'options');  }
	 
		 elseif ($options == false && $translate == true) {
			 $var = get_field($group . '_' . getLang()); }
	 
		 elseif ($options == true && $translate == false) {
			 $var = get_field($group, 'options');  }
	 
		 elseif ($options == false && $translate == false) {
			 $var = get_field($group); }
	 
			if ($var) { return $var[$field]; }
		 //exampleuse: wpsField('group, 'field', false, true)
	 }


	 
function imgPath($name = '') {
	$path = get_template_directory() . '/assets/img/' . $name;
	return $path;
}