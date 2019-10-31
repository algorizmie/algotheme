<?php
function algotheme_style(){
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1');
    wp_enqueue_style('highlight', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/default.min.css', array(), '1.0.1', false);
    wp_enqueue_style('main', get_template_directory_uri().'/style/main.css', array(), '1.0.1', false);
    //font
    wp_enqueue_style('font', '//fonts.googleapis.com/css?family=Tajawal:400,700&display=swap', array(), '1.0.1', false);
}

function algotheme_script() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', "//code.jquery.com/jquery-3.4.1.min.js", array(), "3.4.1", true);
    wp_enqueue_script('highlight', "//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js", array(), "3.4.1", true);
    wp_enqueue_script('script', get_template_directory_uri().'/scripts/script.js', array(), "3.4.1", true);
}

add_action('wp_enqueue_scripts', 'algotheme_style');
add_action('wp_enqueue_scripts', 'algotheme_script');