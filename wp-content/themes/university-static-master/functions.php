<?php

function load_my_styles() {
//    this is the default styles connection from customTheme
    wp_enqueue_style("my_styles", get_stylesheet_uri());
    wp_enqueue_style("john_styles", get_template_directory_uri() . '/style-j.css', array(), '1.0', 'all');

//     this is the new connection
    wp_enqueue_style("add_styles", get_theme_file_uri("/build/style-index.css"));
    wp_enqueue_style("add_extra_styles", get_theme_file_uri("/build/index.css"));

//    connect fontawesome etc from header
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("custom-google-fonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");

//    load javascript file for slider
    wp_enqueue_script("slider_js", get_theme_file_uri("/build/index.js"), array("jquery"), "1.0", true);
}

add_action("wp_enqueue_scripts","load_my_styles");