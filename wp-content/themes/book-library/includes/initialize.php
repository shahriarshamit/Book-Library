<?php

/**
 * Theme basic setup.
 * */
add_action('after_setup_theme', 'book_library_theme_setup');

function book_library_theme_setup() {
    // Disable Gutenberg Editor
    add_filter('use_block_editor_for_post', '__return_false');
    add_filter('use_widgets_block_editor', '__return_false');

    // Add Theme Multilingual Support
    load_theme_textdomain(THEME_DOMAIN, get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Add Title Tag Support
    add_theme_support('title-tag');

    // Add Post Thumbnail Support
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'header' => esc_html__('Header Menu', THEME_DOMAIN),
        'footer' => esc_html__('Footer Menu', THEME_DOMAIN),
    ));

    // Add Theme Support for HTML5 Markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('azad_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));

    // Add support for core custom logo.
    add_theme_support('custom-logo', array(
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true,
    ));
}

/**
 * Enqueue styles
 */
add_action('wp_enqueue_scripts', 'book_library_enqueue_styles', 15);

function book_library_enqueue_styles() {
    wp_enqueue_style('book-library-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), '1.0', 'all');

    // Remove CSS on the front end.
    wp_dequeue_style('wp-block-library');
    // Remove Gutenberg theme.
    wp_dequeue_style('wp-block-library-theme');
    // Remove inline global CSS on the front end.
    wp_dequeue_style('global-styles');
    // Remove classic-themes CSS for backwards compatibility for button blocks.
    wp_dequeue_style('classic-theme-styles');
}

/*
 * Enqueue scripts
 */
add_action('wp_enqueue_scripts', 'book_library_enqueue_scripts');

function book_library_enqueue_scripts() {
    wp_enqueue_style('book-library-theme-main-css', get_stylesheet_uri());

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
