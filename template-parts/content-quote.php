<article id="post-<?php the_ID(); ?>" <?php post_class('herhesh-format-quote'); ?>>
    <header class="entry-header text-center">
        <h2 class="quote-content"><?php the_content(); ?></h2>
        <?php the_title('<h4 class="quote-author">','</h4>'); ?>
    </header>

    <footer class="entry-footer">
        <?php echo herhesh_posted_footer(); ?>
    </footer>
</article>