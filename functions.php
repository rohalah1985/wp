<?php 
define("WP_DIR",get_template_directory_uri());


function theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main_menu' => 'منوی اصلی',
        'footer_one' => ' فوتر 1',
        'footer_two' => ' فوتر 2',
        'footer_three' => 'فوتر 3 ',
    ]);
}

add_action("after_setup_theme","theme_setup");


function theme_style(){
    wp_enqueue_style('bootstrap',WP_DIR.'/css/bootstrap.css',[],'');
    wp_enqueue_style('font-awesome',WP_DIR.'/css/font-awesome.css',[],'');
    wp_enqueue_style('style',WP_DIR.'/style.css',[],'');
    wp_enqueue_script('myjs',WP_DIR.'/js/bootstrap.js',['jquery'],'',true);
  
}

add_action('wp_enqueue_scripts','theme_style');


function theme_widgets(){
    register_sidebar([
        'id'=> 'footer_desc',
        'name'=> 'ابزارک فوتر',
        "description" => "ابزارک توضیحات فوتر",
        'before_widget'=> '<div class="desc_footer footer_menu">',
        "after_widget" => " </div>",
        "before_title" => " <span class='title'>",
        "after_title" => "</span> "

    ]);
}

add_action('widgets_init', "theme_widgets");



