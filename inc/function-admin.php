<?php
function herhesh_add_admin_page()
{
    add_menu_page('Herhesh Theme Options', 'Herhesh', 'manage_options', 'herhesh-theme', 'herhesh_theme_create_page', 'dashicons-welcome-widgets-menus', 110);
    add_submenu_page('herhesh-theme', 'Herhesh Theme Options', 'General', 'manage_options', 'herhesh-theme', 'herhesh_theme_create_page');
    add_submenu_page('herhesh-theme', 'Herhesh Theme Support', 'Theme Options', 'manage_options', 'herhesh-theme-support', 'herhesh_theme_support_page');
    add_submenu_page('herhesh-theme', 'Herhesh CSS Options', 'Custom CSS', 'manage_options', 'herhesh-theme-css', 'herhesh_theme_setting_page');
}

function herhesh_theme_create_page()
{
    //generation of our admin page
    herhesh_add_heading('Theme Genral Options');
    view('herhesh-admin');
}

function herhesh_theme_setting_page()
{
    herhesh_add_heading('Custom CSS');
}
function herhesh_theme_support_page()
{
    herhesh_add_heading('Theme Support Options');
}

$fillable  = ['name', 'test'];
$functions = ['herhesh_sidebar_name', 'herhesh_sidebar_test'];

function herhesh_custom_settings()
{
    register_setting('herhesh-settings-group', 'inputs','herhesh_sanitize_inputs');

    //add fillable
    add_settings_field("sidebar-inputs", "Sidebar inputs", "herhesh_sidebar", 'herhesh-theme', 'herhesh-sidebar-section');
    //add section
    add_settings_section('herhesh-sidebar-section', 'Sidebar Options', 'herhesh_sidebar_option', 'herhesh-theme');
}

function herhesh_sidebar()
{
    $fields = get_option('inputs');
    echo "<input type='hidden' name='inputs[image]' value='$fields[image]'>";
    echo "<button type='button' class='button button-secondary' id='upload_button'>Upload Profile Picture</button><br><br>";
    echo "<input type='text'   name='inputs[name]' placeholder='Sidebar Name' value='$fields[name]'><br>";
    echo "<input type='text'   name='inputs[test]' placeholder='Sidebar Name' value='$fields[test]'><br>";
}
function herhesh_sanitize_inputs($inputs)
{
    $outputs = [];
    foreach($inputs as $key => $input){
        $outputs[$key] = sanitize_text_field($input);
        $outputs[$key] = str_replace('@','',$input);
    }
    return $outputs;
}

function herhesh_sidebar_option()
{
}

add_action('admin_menu', 'herhesh_add_admin_page');
add_action('admin_init', 'herhesh_custom_settings');
