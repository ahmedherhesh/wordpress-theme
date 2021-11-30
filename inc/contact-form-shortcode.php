<?php

function herhesh_contact_form($atts,$content = null){
    $atts = shortcode_atts([], $atts, 'contact_form');
    return view('contact-form');
}
add_shortcode('contact_form','herhesh_contact_form');
