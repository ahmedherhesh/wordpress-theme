<?php

function herhesh_custom_post_type()
{
    $labels = [
        'menu_name' => 'Messages',
        'name' => 'Messages',
        'sigular_name' => 'Message',
        'name_admin_bar' => 'Message'
    ];
    $args   = [
        'labels'        => $labels,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'capability_type' => 'post',
        'hierarchical'  => false,
        'menu_position' => 111,
        'menu_icon'     => 'dashicons-email-alt',
        'supports'      => ['title', 'editor', 'author']
    ];
    register_post_type('herhesh_contact', $args);
}
add_action('init', 'herhesh_custom_post_type');

require_once 'columns.php';
require_once 'meta_box.php';