<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header text-center">
        <?php the_title('<h1 class="entry-title"><a href="'. esc_url(get_permalink()) .'">', '</a></h1>'); ?>
        <div class="entry-meta">
            <?php echo herhesh_posted_meta(); ?>
        </div>
        <div class="entry-content">
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
    </header>
    <footer class="entry-footer">
        <?php echo herhesh_posted_footer(); ?>
    </footer>
</article>