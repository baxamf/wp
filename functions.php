<?php

function general_style(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','general_style');

register_nav_menus(array(
	'primery' => __('Primery Menu'),
	'footer' => __("Footer Menu")
	));

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