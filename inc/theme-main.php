<?php
// main + utility functions
defined('ABSPATH') || exit;

//add options page for ACF
if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title'    => 'Opinie',
        'menu_title'    => 'Opinie',
        'menu_slug'     => 'opinions-settings',
        'capability'    => 'manage_options',
        'redirect'      => false
    ]);

	acf_add_options_page([
        'page_title'    => 'FAQ',
        'menu_title'    => 'FAQ',
        'menu_slug'     => 'faq-settings',
        'capability'    => 'manage_options',
        'redirect'      => false
    ]);

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

function display_opinions() {
    if (have_rows('opinie', 'option')): ?>
<?php while (have_rows('opinie', 'option')): the_row(); 
            $visible = get_sub_field('visible');
            if ($visible): ?>
<li class="splide__slide">
    <div class="slide-container">
        <div class="card-opinion">
            <div class="card-opinion_desc">
                <p>
                    <?php the_sub_field('content'); ?>
                </p>
            </div>
            <div class="card-opinion_author">
                <?php the_sub_field('name'); ?>
            </div>
        </div>
    </div>
</li>
<?php endif; endwhile; ?>
<?php endif;
}

function display_offers_short($post_id) {
    if (have_rows('offer_list', $post_id)): ?>
<?php while (have_rows('offer_list', $post_id)): the_row(); 
            $visible = get_sub_field('visible');
			$image = get_sub_field('img', $post_id); 
			$default_image_url = imgPath() . 'placeholder.png'; 
            if ($visible): ?>
		<li class="splide__slide">
  		  <div class="slide-container">
      		  <div class="card-image" style="background-color:<?php the_sub_field('color') ?>">
          	  <div class="card-image_image">

                <img src="<?php echo esc_url($image['url'] ?? $default_image_url); ?>"
                    alt="<?php echo esc_attr($image['alt'] ?? 'Default image'); ?>">
           		 </div>

           		 <div class="card-image_desc">
                  		  <?php the_sub_field('title'); ?>
               		 </p>
           		 </div>
      	  </div>
  	  </div>
</li>
<?php endif; endwhile; ?>
<?php endif;
}


function display_faq() {
    if (have_rows('faq', 'option')): ?>
<div class="accordion">
    <?php while (have_rows('faq', 'option')): the_row(); 
                $visible = get_sub_field('visible');
                if ($visible): ?>
    <h3 class="accordion-header">
        <button class="accordion-button" aria-expanded="false">
            <span class="close-accordion">
                <svg class="icon icon-chevron">
                    <use xlink:href="<?php echo svgPath(); ?>#chevron-up"></use>
                </svg>
            </span>
            <span class="open-accordion">
                <svg class="icon icon-chevron">
                    <use xlink:href="<?php echo svgPath(); ?>#chevron-down"></use>
                </svg>
            </span>
            <?php the_sub_field('question'); ?>
        </button>
    </h3>
    <div class="panel" hidden>
        <p><?php the_sub_field('content'); ?></p>
    </div>
    <?php endif; ?>
    <?php endwhile; ?>
</div>
<?php endif;
}