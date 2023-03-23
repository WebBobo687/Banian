<?php

function theme_supports () {
    add_theme_support('title-tag');
}

function theme_register_assets () {
    wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css");
    wp_register_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js", [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
};

add_action('after_setup_theme', 'theme_supports');
add_action('wp_enqueue_scripts', 'theme_register_assets');