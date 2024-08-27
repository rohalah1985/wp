<?php 
define("WP_DIR",get_template_directory_uri());


function theme_setup(){
    add_theme_support('title-tag');
}

add_action("after_setup_theme","theme_setup");


function theme_style(){
    wp_enqueue_style('bootstrap',WP_DIR.'/css/bootstrap.css',[],'');
    wp_enqueue_style('font-awesome',WP_DIR.'/css/font-awesome.css',[],'');
    wp_enqueue_style('style',WP_DIR.'/style.css',[],'');
    wp_enqueue_script('myjs',WP_DIR.'/js/bootstrap.js',['jquery'],'',true);
}

add_action('wp_enqueue_scripts','theme_style');



