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

// add columns;
add_filter('manage_herhesh_contact_posts_columns', 'herhesh_set_contact_columns');

function herhesh_set_contact_columns($columns)
{
    // unset($columns['author']);
    $new_columns = [
        'title'   => 'Fullname',
        'message' => 'Message',
        'email'   => 'Email',
        'date'    => 'Date'
    ];
    return $new_columns;
}

// add value to custom columns
add_action('manage_herhesh_contact_posts_custom_column', 'herhesh_contact_custom_column',10,2 );
function herhesh_contact_custom_column($column,$post_id){
    switch($column){
        case 'message' :
            echo get_the_excerpt();
            break;
        case 'email' :
            echo 'ahmed@gmail.com';
            break;
    }
}
