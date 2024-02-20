<!-- код functions.php -->
<?php
add_action('wp_enqueue_scripts','VladimirCity_enqueue_scripts');
add_theme_support( 'post-thumbnails' );
register_sidebar();

function VladimirCity_enqueue_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style( 'VladimirCity_style', get_stylesheet_uri());
    wp_enqueue_script( 'VladimirCity_script', get_template_directory_uri().'/js/scripts.js');
}
?>