<?php
add_action('wp_ajax_nopriv_herhesh_load_more', 'herhesh_load_more');
add_action('wp_ajax_herhesh_load_more', 'herhesh_load_more');
function herhesh_load_more()
{
    $page = $_POST['page'] + 1;
    $query = new WP_Query([
        'post_type' => 'post',
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
