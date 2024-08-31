<?php
function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus([
        'main_menu' => 'منوی اصلی',
        'footer_one' => ' فوتر 1',
        'footer_two' => ' فوتر 2',
        'footer_three' => 'فوتر 3 ',
    ]);
}

add_action("after_setup_theme","theme_setup");


?>