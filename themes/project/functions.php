<?php
function my_theme_setup(){
    register_nav_menus(array(
        'header' => 'Header Menu',
        'footer' => 'Footer Menu'
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

// featured image support
add_theme_support('post-thumbnails');