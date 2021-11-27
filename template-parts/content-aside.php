<article id="post-<?php the_ID(); ?>" <?php post_class('herhesh-format-aside'); ?>>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <?php if (herhesh_get_attachment()) : ?>
                <div class="aside-featured background-image" style="background-image: url(<?php echo herhesh_get_attachment(); ?>);"></div>
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2 col-md-9">

            <header class="entry-header text-center">
                <?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h1>'); ?>
                <div class="entry-meta">
                    <?php echo herhesh_posted_meta(); ?>
                </div>
            </header>
            <div class="entry-content text-center">
                <div class="entry-exerpt">
                    <?php the_content(); ?>
                </div> 
            </div>
        </div>
    </div>
    <footer class="entry-footer">
        <?php echo herhesh_posted_footer(); ?>
    </footer>
</article>