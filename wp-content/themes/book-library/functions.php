<?php
/**
 * Enqueue styles
 */
function book_theme_enqueue_styles() {
    wp_enqueue_style('book-library-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'book_theme_enqueue_styles', 15);
