<?php
// main + utility functions
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
		'menu_title'	=> 'Kontakt / sociale',
		'parent_slug'	=> 'theme-general-settings',
	));
}


//faster implements of acf fields
function acfField($group, $field, $options = false, $translate = false)
{

	if ($options == true && $translate == true) {
		$var = get_field($group . '_' . getLang(), 'options');
	} elseif ($options == false && $translate == true) {
		$var = get_field($group . '_' . getLang());
	} elseif ($options == true && $translate == false) {
		$var = get_field($group, 'options');
	} elseif ($options == false && $translate == false) {
		$var = get_field($group);
	}

	if ($var) {
		return $var[$field];
	}
	//exampleuse: acfField('group, 'field', false, true)
}


//made product categorys title and description compatibile with pagination pages (default not working when its page: 2, 3, 4 etc.)
function my_theme_woocommerce_taxonomy_archive_description()
{
	if (is_tax(array('product_cat', 'product_tag')) && get_query_var('paged') != 0) {
		$description = wc_format_content(term_description());
		if ($description) {
			echo '' . $description . '';
		}
	}
}
add_action('woocommerce_archive_description', 'my_theme_woocommerce_taxonomy_archive_description');



function getLang()
{
	if (defined('ICL_LANGUAGE_CODE')) {
		return ICL_LANGUAGE_CODE;
	} else {
		return 'pl';
	}
}


function imgPath($name = '')
{
	$path = get_template_directory_uri() . '/assets/img/' . $name;
	return $path;
}


function svgPath()
{
    return imgPath('sprite.svg');
}
