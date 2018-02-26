<?php

// Load the styles, scripts and fonts with correct enqueue way
function load_styles_scripts_fonts(){
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style( 'google-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto');

    wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), null, true );
}

add_action('wp_enqueue_scripts', 'load_styles_scripts_fonts');

// Register Custom Navigation Walker Class
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme support
function wpb_theme_setup() {
    // Functionality for Featured Image on Posts
    add_theme_support('post-thumbnails');

    // Register the menu structure
    register_nav_menus( array(
    	'primary' => __('Primary Menu'),
    ));
}

// Adding the new function "after-setup-theme" timing
add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt length control
function set_excerpt_length(){
    return 45; //words
}

add_filter ('excerpt_length','set_excerpt_length');

// Widget functions
function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Blog Sidebar',
        'id'=>'sidebar',
        'before_widget' => '<div class="blog-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');
