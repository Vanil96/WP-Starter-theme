<?php 
// Exit if accessed directly.
defined('ABSPATH') || exit;


 //register custom post type

 add_action('init', function() {
	register_post_type('book', [
		'label' => __('Books', 'txtdomain'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-book',
		'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
		'show_in_rest' => true,
		'rewrite' => ['slug' => 'book'],
		'taxonomies' => ['book_genre'],  //all register taxonomies for this CPT
		'labels' => [
			'singular_name' => __('Book', 'txtdomain'),
			'add_new_item' => __('Add new', 'txtdomain'),
			'new_item' => __('New', 'txtdomain'),
			'view_item' => __('View', 'txtdomain'),
			'not_found' => __('No books found', 'txtdomain'),
			'not_found_in_trash' => __('No books found in trash', 'txtdomain'),
			'all_items' => __('All items', 'txtdomain'),
			'insert_into_item' => __('Insert into', 'txtdomain')
		],		
	]);
 
 //register custom taxonomy	

	register_taxonomy('book_genre', ['book'], [
		'label' => __('Genres', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'book-genre'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('Genre', 'txtdomain'),
			'all_items' => __('All', 'txtdomain'),
			'edit_item' => __('Edit', 'txtdomain'),
			'view_item' => __('View', 'txtdomain'),
			'update_item' => __('Update', 'txtdomain'),
			'add_new_item' => __('Add New', 'txtdomain'),
			'new_item_name' => __('New Name', 'txtdomain'),
			'search_items' => __('Search', 'txtdomain'),
			'parent_item' => __('Parent', 'txtdomain'),
			'parent_item_colon' => __('Parent', 'txtdomain'),
			'not_found' => __('No found', 'txtdomain'),
		]
	]);
	register_taxonomy_for_object_type('book_genre', 'book');

});