<?php
function eastern_recipes_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(['main_menu' => 'Main Menu']);
}
add_action('after_setup_theme', 'eastern_recipes_setup');

function eastern_recipes_assets() {
    wp_enqueue_style('eastern-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'eastern_recipes_assets');

function eastern_register_post_type() {
    register_post_type('recipe', [
        'labels' => [
            'name' => 'Recepten',
            'singular_name' => 'Recept'
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'recepten'],
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-carrot',
        'show_in_rest' => true
    ]);

    register_taxonomy('ingredient', 'recipe', [
        'label' => 'Ingrediënten',
        'hierarchical' => false,
        'show_in_rest' => true
    ]);
}
add_action('init', 'eastern_register_post_type');