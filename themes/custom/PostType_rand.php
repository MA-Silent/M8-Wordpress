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

$labels = [
    'name'              => _x( 'Origins', 'taxonomy general name', 'Text_Domain' ),
	'singular_name'     => _x( 'Origin', 'taxonomy singular name', 'Text_Domain' ),
	'search_items'      => __( 'Search Origins', 'Text_Domain' ),
	'popular_items'     => __( 'Popular Origins', 'Text_Domain' ),
	'all_items'         => __( 'All Origins', 'Text_Domain' ),
	'parent_item'       => __( 'Parent Origin', 'Text_Domain' ),
	'parent_item_colon' => __( 'Parent Origin:', 'Text_Domain' ),
	'edit_item'         => __( 'Edit Origin', 'Text_Domain' ),
	'update_item'       => __( 'Update Origin', 'Text_Domain' ),
	'add_new_item'      => __( 'Add New Origin', 'Text_Domain' ),
	'new_item_name'     => __( 'New Origin Name', 'Text_Domain' ),
	'menu_name'         => __( 'Origins', 'Text_Domain' ),
];

register_post_type('rand', $args);

$args = [
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'show_in_rest'      => true,
	'rewrite'           => [ 'slug' => 'origin' ],
];

register_taxonomy( 'origin', 'rand', $args );