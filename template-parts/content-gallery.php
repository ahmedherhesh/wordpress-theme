<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header text-center">
        <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h1>'); ?>
        <div class="entry-meta">
            <?php echo herhesh_posted_meta(); ?>
        </div>
        <div class="entry-content">

            <?php
            if (herhesh_get_attachment()) :
                $attachments = herhesh_get_attachment(4);
                print_r($attachments);
            endif;
            ?>
            <div class="entry-exerpt">
                <?php the_excerpt(); ?>
            </div>
            <div class="button-container">
                <a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e('Read More'); ?></a>
            </div>
        </div>
    </header>
    <footer class="entry-footer">
        <?php echo herhesh_posted_footer(); ?>
    </footer>
</article>