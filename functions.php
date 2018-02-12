<?php
/**
 * Enqueue scripts and styles.
 */

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'layout', get_template_directory_uri() . 'assets/css/layout.css', array());
    wp_enqueue_style( 'theme', get_template_directory_uri() . 'assets/css/theme.css', array());

?>
