<?php
function herhesh_posted_meta()
{
    // categories showen
    $posted_on = human_time_diff(get_the_time('U'), current_time('timestamp'));
    $categories = get_the_category();
    $separator = ' , ';
    $output = '';
    $i = 1;
    if (!empty($categories)) {
        foreach ($categories as $key => $category) {
            if ($key > 0) : $output .= $separator;
            endif;
            $output .= "<a href='" . esc_url(get_category_link($category->term_id)) . "'>" . esc_html($category->name) . "</a>";
        }
    }
    return "<span class='posted-on'>Posted <a href='" . esc_url(get_permalink()) . "'>$posted_on </a> ago / </span> 
    <span class='posted-in'>$output</span>";
}

function herhesh_posted_footer()
{
    //tags
    $html_tag = "<div class='tags-list'>
                    <span class='herhesh-icon herhesh-tag'></span>";

    $tags = get_the_tag_list($html_tag, '', '</div>');

    //comments
    $comments_num = get_comments_number();
    if (comments_open()) {
        if ($comments_num == 0) {
            $comments = __('No Comments');
        } else if ($comments_num > 1) {
            $comments = $comments_num . __(' Comments');
        } else {
            $comments = __('1 Comments');
        }
        $comments = "<a href='" . get_comments_link() . "'>$comments</a>";
    } else {
        $comments = __('Comments Are Closed');
    }
    return "<div class='post-footer-container'>
                <div class='row' >
                    <div class='col-xs-12 col-sm-6 text-start'>$tags</div>
                    <div class='col-xs-12 col-sm-6 text-end'>$comments <span class='dashicons dashicons-admin-comments'></span></div>
                </div>
            </div>";
}
function herhesh_get_attachment($num = 1)
{
    $output = '';
    if (has_post_thumbnail() && $num == 1) :
        $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
    else :
        $attachments = get_posts([
            'post_type' => 'attachment',
            'posts_per_page' => $num,
            'post_parent' => get_the_ID(),
        ]);
        if ($attachments && $num == 1) :
            $output = wp_get_attachment_url($attachments[0]->ID);
        elseif ($attachments && $num > 1) :
            $output = $attachments;
        endif;
        wp_reset_postdata();
    endif;

    return $output;
}

function herhesh_grab_url(){
    if(!preg_match('/<a\s[^>]*?href=[\'"](.+?)[\'"]/i',get_the_content(),$links)){
        return false;
    }
    return esc_url_raw($links[1]);
}

function herhesh_custom_posts_nav(){
    $prev = get_previous_post_link();
    $next = get_next_post_link();
    $nav = "<pre>$prev   ,   $next</pre>";
    return $nav;
}