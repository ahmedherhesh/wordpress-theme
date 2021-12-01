<?php
add_action('wp_ajax_nopriv_herhesh_load_more', 'herhesh_load_more');
add_action('wp_ajax_herhesh_load_more', 'herhesh_load_more');

function herhesh_load_more()
{
    $page = $_POST['page'] + 1;
    $query = new WP_Query([
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $page
    ]);
    if ($query->have_posts()) {
        while ($query->have_posts) : $query->the_post();
            get_template_part('template-parts/content', get_post_format());
        endwhile;
    }
    wp_reset_postdata();
    die();
}


function herhesh_save_contact()
{
    $title   = wp_strip_all_tags($_POST['name']);
    $email   = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);
    $data = [
        'post_title'   => $title,
        'post_content' => $message,
        'post_author'  => 1,
        'post_status'  => 'publish',
        'post_type'    => 'herhesh_contact',
        // 'meta_input'   => [
        //     'contact_email_key' => $email
        // ]
    ];
    $post_id = wp_insert_post($data);
    if ($post_id != 0) {
        update_post_meta($post_id, 'contact_email_key', $email);
        // $to = get_blohinfo('admin_email');
        // $subject = "Herhesh Contact Form - $title";
        // $headers[] = "From: " . get_bloginfo('name') . "<$to>";
        // $headers[] = "Reply-to:  $title <$email>";
        // $headers[] = "Content-Type:  text/html: charset=UTF-8";
        // wp_mail($to, $subject, $message, $headers);
    }
    die();
}
add_action('wp_ajax_nopriv_herhesh_save_user_contact_form', 'herhesh_save_contact');
add_action('wp_ajax_herhesh_save_user_contact_form', 'herhesh_save_contact');
