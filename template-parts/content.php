<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header text-center">
        <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h1>'); ?>
        <div class="entry-meta">
            <?php echo herhesh_posted_meta(); ?>
        </div>
    </header>
    <div class="entry-content text-center">
        <?php if (herhesh_get_attachment()) : ?>
            <div class="standard-featured background-image" style="background-image: url(<?php echo herhesh_get_attachment(); ?>);"></div>
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