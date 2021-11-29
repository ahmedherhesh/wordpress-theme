<?php if (post_password_required()) return; ?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <ul class="comment-list">
            <?php
            $args = [
                'walker' => null,
                'max_depth' => '',
                'style' => 'ol',
                'callback' => null,
                'end-callback' => null,
                'type' => 'all',
                'reply-text' => 'Reply',
                'page' => 1,
                'per-page' => 3,
                'avatar-size' => 32,
                'reverse_top_level' => null,
                'reverse_children' => '',
                'format' => 'html5',
                'short_ping' => false,
                'echo' => true

            ];
            wp_list_comments($args);
            ?>
        </ul>
        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed', 'sunsettheme') ?></p>
        <?php endif; ?>
    <?php endif; ?>
    <?php
    $fields = [
        'author' => "<div class='form-group'>
                        <label>Name : </label><span class='text-danger' style='font-size:20px'> *</span>
                        <input type='text' id='author' name='author' class='form-control' placeholder='Name' required value='" . esc_attr($commenter['comment_author']) . "'>
                    </div>",
        'email' => "<div class='form-group'>
                        <label>Email : </label><span class='text-danger' style='font-size:20px'> *</span>
                        <input type='email' id='email' name='email' class='form-control' placeholder='Email' required value='" . esc_attr($commenter['comment_author_email']) . "'>
                    </div>",
        'url' => "<div class='form-group'>
                        <label>URL : </label>
                        <input type='text' id='url' name='url' class='form-control' placeholder='Url' required value='" . esc_attr($commenter['comment_author_url']) . "'>
                    </div>",
    ];

    $args = [
        'class_submit' => 'btn btn-block btn-lg btn-warning',
        'label_submit' => 'Submit Comment',
        'fields' =>  apply_filters('comment_form_default_fields', $fields),
        'comment_field' => "<div class='form-group'>
                                <label>Comment : </label><span class='text-danger' style='font-size:20px'> *</span>
                                <textarea id='comment' class='form-control' name='comment' rows='4' maxlength='65525' required='required'></textarea>
                            </div>",
    ];

    comment_form($args);
    ?>
</div>