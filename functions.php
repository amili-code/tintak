<?php

add_action("init", function () {
    register_nav_menus([
        "header" => "Header Menu",
        "footer" => "Footer Menu"
    ]);
});

function register_theme_menus() {
    register_nav_menus(array(
        'navbar' => __('Navigation Bar', 'tintak'), // منوی Navbar
    ));
}
add_action('after_setup_theme', 'register_theme_menus');


add_theme_support('post-thumbnails');


?>


