<article id="post-<?php the_ID(); ?>" <?php post_class('herhesh-format-image'); ?>>
    <header class="entry-header text-center background-image" style="background-image: url(<?php echo herhesh_get_attachment(); ?>);">
        <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h1>'); ?>
        <div class="entry-meta">
            <?php echo herhesh_posted_meta(); ?>
        </div>
        <div class="entry-exerpt">
            <?php the_excerpt(); ?>
        </div>
    </header>
    <footer class="entry-footer">
        <?php echo herhesh_posted_footer(); ?>
    </footer>
</article>