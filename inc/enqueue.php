<?php
function herhesh_load_admin_scripts($hook)
{
    if ($hook != 'toplevel_page_herhesh-theme') {
        return;
    }
    wp_register_style('herhesh-theme-css', get_template_directory_uri() . '/css/herhesh.admin.css', [], '1.0.0');
    wp_enqueue_style('herhesh-theme-css');
    wp_register_script('herhesh-theme-script', get_template_directory_uri() . '/js/herhesh.admin.js', ['jquery'], '1.0.0');
    wp_enqueue_script('herhesh-theme-script');
}
add_action('admin_enqueue_scripts', 'herhesh_load_admin_scripts');
