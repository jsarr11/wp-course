<?php

function load_my_styles() {
    wp_enqueue_style("my_styles", get_stylesheet_uri());
    wp_enqueue_style("john_styles", get_template_directory_uri() . '/style-j.css', array(), '1.0', 'all');
}

add_action("wp_enqueue_scripts","load_my_styles");