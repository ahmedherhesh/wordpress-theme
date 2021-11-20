<?php
function herhesh_add_admin_page()
{
    add_menu_page('Herhesh Theme Options', 'Herhesh', 'manage_options', 'herhesh-theme', 'herhesh_theme_create_page', 'dashicons-welcome-widgets-menus', 110);
    add_submenu_page('herhesh-theme', 'Herhesh Theme Options', 'General', 'manage_options', 'herhesh-theme', 'herhesh_theme_create_page');
    add_submenu_page('herhesh-theme', 'Herhesh CSS Options', 'Custom CSS', 'manage_options', 'herhesh-theme-css', 'herhesh_theme_setting_page');
}

function herhesh_theme_create_page()
{
    //generation of our admin page
    herhesh_add_heading('Herhesh Theme Options');
    view('herhesh-admin');
}

function herhesh_theme_setting_page()
{
    herhesh_add_heading('Herhesh Custom CSS');
}

$fillable  = ['name', 'test'];
$functions = ['herhesh_sidebar_name', 'herhesh_sidebar_test'];

function herhesh_custom_settings()
{
    global $fillable;
    global $functions;
    for ($i = 0; $i < count($fillable); $i++) {
        //add settings and register fields;
        register_setting('herhesh-settings-group', 'fillable');

        //add fillable
        add_settings_field("sidebar-$fillable[$i]", "Sidebar $fillable[$i]", "$functions[$i]", 'herhesh-theme', 'herhesh-sidebar-section');
    }

    //add section
    add_settings_section('herhesh-sidebar-section', 'Sidebar Options', 'herhesh_sidebar_option', 'herhesh-theme');
}

function herhesh_sidebar_name()
{
    $field = esc_attr(get_option('name'));
    echo "<input type='text' name='name' placeholder='Sidebar Name' value='$field'>";
}

function herhesh_sidebar_test()
{
    $field = esc_attr(get_option('test'));
    echo "<input type='text' name='test' placeholder='Sidebar Test' value='$field'>";
}

function herhesh_sidebar_option()
{
    
}

add_action('admin_menu', 'herhesh_add_admin_page');
add_action('admin_init', 'herhesh_custom_settings');
