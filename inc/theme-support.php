<?php

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function algotheme_register_nav_menu()
{
    register_nav_menu('primary', 'Header Navigation Menu');
    register_nav_menu('social-media', 'Social media menu');
}
add_action('after_setup_theme', 'algotheme_register_nav_menu');

/* Activate HTML5 features */
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

function algotheme_disable_comment_url($fields) { 
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','algotheme_disable_comment_url');

function algotheme_custom_logo_setup() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'algotheme_custom_logo_setup' );