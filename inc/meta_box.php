<?php
// contact meta box
function herhesh_contact_add_meta_box()
{
    add_meta_box('contact_email', 'User Email', 'herhesh_get_contact_email',  'herhesh_contact','side');
}

function herhesh_get_contact_email($post){
    //get value meta and run in add_meta_box 
    wp_nonce_field( 'herhesh_save_contact_email_data', 'herhesh_contact_email');
    $value = get_post_meta($post->ID, 'contact_email_key',true);
    echo "<label for='user_email'>Email Address : </label>  <input type='email' name='user_contact_email' value='" . esc_attr($value) . "' id='user_email'>";
}
add_action( 'add_meta_boxes', 'herhesh_contact_add_meta_box');
//==================================================================

//run to save value meta
function herhesh_save_contact_email_data($post_id){
    $email = sanitize_text_field($_POST['user_contact_email']);
    update_post_meta( $post_id, 'contact_email_key',$email);
}
add_action( 'save_post', 'herhesh_save_contact_email_data');

