<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="main" role="main">
        <div class="container">
            <?php
            if (have_posts()) {
                while (have_posts()) : the_post();
                    get_template_part('template-parts/single', get_post_format());
                    // the_post_navigation();
                    echo herhesh_custom_posts_nav();
                    if (comments_open())
                        comments_template();
                endwhile;
            }
            ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>