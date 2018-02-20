<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme support
function wpb_theme_setup() {
    // Functionality for Featured Image on Posts
    add_theme_support('post-thumbnails');

    // Register the menu structure
    register_nav_menus( array(
    	'primary' => __('Primary Menu', 'LifethroughsWPTheme'),
    ));
}

// Adding the new function "after-setup-theme" timing
add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt length control
function set_excerpt_length(){
    return 45; //words
}

add_filter ('excerpt_length','set_excerpt_length');
