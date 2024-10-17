<?php

add_action('init', 'book_library_book_post_type', 0);

function book_library_book_post_type() {
    $labels = [
        'name' => _x('Books', 'Post Type General Name',),
        'singular_name' => _x('Book', 'Post Type Singular Name', THEME_DOMAIN),
        'menu_name' => __('Books', THEME_DOMAIN),
        'all_items' => __('All Books', THEME_DOMAIN),
        'view_item' => __('View Book', THEME_DOMAIN),
        'add_new_item' => __('Add New Book', THEME_DOMAIN)
    ];

    $args = [
        'label' => __('Books', THEME_DOMAIN),
        'description' => __('Book Type', THEME_DOMAIN),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'has_archive' => 'books',
        'public' => true,
        'rewrite' => array('slug' => 'book'),
        'menu_position' => 5
    ];
    register_post_type('books', $args);
}
