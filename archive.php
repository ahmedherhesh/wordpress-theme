<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="main" role="main">
        <div class="container">
            <?php
            if (have_posts()) : ?>
            <header class="archive-header text-center">
                <?php the_archive_title( "<h1 class='page-title' style='margin-top:20px'", "</h1>"); ?>
            </header>
            <?php
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content', get_post_format()) ;
                endwhile;
            endif;
            ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>
