<?php

function theme_style(){
    wp_enqueue_style('bootstrap',WP_DIR.'/css/bootstrap.css',[],'');
    wp_enqueue_style('font-awesome',WP_DIR.'/css/font-awesome.css',[],'');
    wp_enqueue_style('style',WP_DIR.'/style.css',[],'');
    wp_enqueue_script('myjs',WP_DIR.'/js/bootstrap.js',['jquery'],'',true);
  
}

add_action('wp_enqueue_scripts','theme_style');

?>