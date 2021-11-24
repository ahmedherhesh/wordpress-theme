<?php
// add columns;
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
add_filter('manage_herhesh_contact_posts_columns', 'herhesh_set_contact_columns');

// get values to custom columns
function herhesh_contact_custom_column($column, $post_id)
{
    switch ($column) {
        case 'message':
            echo get_the_excerpt();
            break;
        case 'email':
            $email = get_post_meta($post_id, 'contact_email_key',true);
            echo "<a href='mailto:$email'> $email</a>";
            break;
    }
}
add_action('manage_herhesh_contact_posts_custom_column', 'herhesh_contact_custom_column', 10, 2);