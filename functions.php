<?php

function general_style(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','general_style');

register_nav_menus(array(
	'primery' => __('Primery Menu'),
	'footer' => __("Footer Menu")
	));

