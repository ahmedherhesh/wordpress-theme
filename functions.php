<?php
require_once 'function-helpers.php';
require_once get_template_directory() . '/inc/function-admin.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/CPT.php';
// add_theme_support( 'post-formats', ['chat','gallery','video','audio','image','aside','link','quote','status']);
add_theme_support( 'custom-header');
// add_theme_support( 'custom-background');

function herhesh_register_nav_menu(){
    register_nav_menu('primary','Header Navigation Menu');
}
add_action('after_setup_theme','herhesh_register_nav_menu');