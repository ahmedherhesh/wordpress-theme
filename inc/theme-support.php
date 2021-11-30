<?php
add_theme_support( 'post-formats', ['chat','gallery','video','audio','image','aside','link','quote','status']);

add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');

function herhesh_register_nav_menu(){
    register_nav_menu('primary','Header Navigation Menu');
}
add_action('after_setup_theme','herhesh_register_nav_menu');