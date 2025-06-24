<?php

$labels = [
	'name'               => __( 'Woods', 'Text_Domain' ),
	'singular_name'      => __( 'Wood', 'Text_Domain' ),
	'add_new'            => __( 'New Wood', 'Text_Domain' ),
	'add_new_item'       => __( 'Add New Wood', 'Text_Domain' ),
	'edit_item'          => __( 'Edit Wood', 'Text_Domain' ),
	'new_item'           => __( 'New Wood', 'Text_Domain' ),
	'view_item'          => __( 'View Wood', 'Text_Domain' ),
	'search_items'       => __( 'Search Wood', 'Text_Domain' ),
	'not_found'          => __( 'No Wood Found', 'Text_Domain' ),
	'not_found_in_trash' => __( 'No Wood found in Trash', 'Text_Domain' ),
];

$args = [
	'labels'       => $labels,
	'has_archive'  => true,
	'public'       => true,
	'hierarchical' => false,
	'supports'     => [
		'title',
		'editor',
		'excerpt',
		'custom-fields',
		'thumbnail',
		'page-attributes',
	],
	'rewrite'      => [ 'slug' => 'wood' ],
	'show_in_rest' => true,
];

register_post_type('wood', $args);
require_once('PostType_rand.php');