<?php

function m8prog_enqueue_styles() {
	wp_enqueue_style(
		'm8prog-MA-Theme',
		get_stylesheet_uri()
	);
}
add_action( 'wp_enqueue_scripts', 'm8prog_enqueue_styles' );
function register_my_menus() {
	register_nav_menus(
		[
			'header' => __( 'Header Menu', 'ma-theme' ),
			'other'  => __( 'Other Menu', 'ma-theme' ),
		]
	);
}
add_action( 'init', 'register_my_menus' );
function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_additional_class_on_a($attributes, $item, $args) {
    if ( empty( $attributes['class'] ) ) {
		$attributes['class'] = '';
	}
	
	if(isset($args->add_a_class)) {
		$attributes['class'] .= ' ' . $args->add_a_class;
	}
	return $attributes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

add_theme_support( 'post-thumbnails' );
