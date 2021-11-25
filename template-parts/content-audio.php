<article id="post-<?php the_ID(); ?>" <?php post_class('herhesh-format-audio'); ?>>
    <header class="entry-header text-center">
        <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h1>'); ?>
        <div class="entry-meta">
            <?php echo herhesh_posted_meta(); ?>
        </div>
    </header>
    <div class="entry-content">
        <?php
            $content = do_shortcode(apply_filters('the_content', $post->post_content));
            $embed   = get_media_embedded_in_content( $content, ['audio','iframe']);
            echo str_replace('visual=true','visual=false',$embed[0]);
        ?>
    </div>
    <footer class="entry-footer">
        <?php echo herhesh_posted_footer(); ?>
    </footer>
</article> 