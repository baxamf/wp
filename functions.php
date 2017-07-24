<?php

function general_style(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','general_style');

//Get top ancestor

function get_top_ancestor_id() {

	global $post;

	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
	}

	return $post->ID;
}

//Does page have children?

function has_children() {

	global $post;

	$pages = get_pages('child_of='.$post->ID);
	return count($pages);
}

// Customize except word count length

function custom_except_length() {
	return 25;
}

add_filter('excerpt_length', 'custom_except_length');

//Theme setup
function bx_theme_setup() {

	//Navigation Menus
	register_nav_menus(array(
		'primery' => __('Primery Menu'),
		'footer' => __("Footer Menu")
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
}

add_action('after_setup_theme', 'bx_theme_setup');