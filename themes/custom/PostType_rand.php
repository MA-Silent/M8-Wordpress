<?php

$labels = [
	'name'               => __( 'Rands', 'Text_Domain' ),
	'singular_name'      => __( 'Rand', 'Text_Domain' ),
	'add_new'            => __( 'New Rand', 'Text_Domain' ),
	'add_new_item'       => __( 'Add New Rand', 'Text_Domain' ),
	'edit_item'          => __( 'Edit Rand', 'Text_Domain' ),
	'new_item'           => __( 'New Rand', 'Text_Domain' ),
	'view_item'          => __( 'View Rand', 'Text_Domain' ),
	'search_items'       => __( 'Search Rand', 'Text_Domain' ),
	'not_found'          => __( 'No Rand Found', 'Text_Domain' ),
	'not_found_in_trash' => __( 'No Rand found in Trash', 'Text_Domain' ),
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
	'rewrite'      => [ 'slug' => 'Rand' ],
	'show_in_rest' => true,
];

register_post_type('Rand', $args);