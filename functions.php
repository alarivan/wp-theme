<?php 

function university_files() {
    wp_enqueue_style('react_styles', get_stylesheet_directory_uri().'/css/main.9093acdf.chunk.css');
    wp_enqueue_script('react_script_1', get_stylesheet_directory_uri() .'/js/runtime-main.97b509d4.js', [], false, true);
    wp_enqueue_script('react_script_2', get_stylesheet_directory_uri() .'/js/2.9fc1ed8a.chunk.js', [], false, true);
    wp_enqueue_script('react_script_3', get_stylesheet_directory_uri() .'/js/main.9d102b30.chunk.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'university_files');