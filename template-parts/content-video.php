<article id="post-<?php the_ID(); ?>" <?php post_class('herhesh=format-video'); ?>>
    <header class="entry-header text-center">
        <div class="embed-responsive embed-responsive-16by9">
            <?php
            $content = do_shortcode(apply_filters('the_content', $post->post_content));
            $embed   = get_media_embedded_in_content($content, ['video', 'iframe']);
            echo str_replace('visual=true', 'visual=false', $embed[0]);

            ?>
        </div>
        <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h1>'); ?>
        <div class="entry-meta">
            <?php echo herhesh_posted_meta(); ?>
        </div>
    </header>
    <div class="entry-content text-center">
        <?php
        if (has_post_thumbnail()) :
            $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        ?>
            <div class="standard-featured background-image" style="background-image: url(<?php echo $featured_image; ?>);"></div>
        <?php endif; ?>
        <div class="entry-exerpt">
            <?php the_excerpt(); ?>
        </div>
        <div class="button-container">
            <a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e('Read More'); ?></a>
        </div>
    </div>
    <footer class="entry-footer">
        <?php echo herhesh_posted_footer(); ?>
    </footer>
</article>