<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header text-center">
        <?php
        $link = herhesh_grab_url();
        echo $link;
        the_title("<h1 class='entry-title'>", "<p><a href='$link' target=_blank>Link</a></p></h1>");
        ?>
    </header>
</article> 