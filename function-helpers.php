<?php
function herhesh_add_heading($text=null){
    echo '<h1 style="text-align:center;color:#fff;background-color:#2271b1;padding:20px;cursor:pointer;margin-right:20px">
            '. $text .'
          </h1>';
}
function view($page=null){
    require_once get_template_directory() . "/inc/templates/$page.php";
}