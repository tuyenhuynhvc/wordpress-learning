<?php
    while(have_posts()) {
        the_post(); ?>
        <h1>Th is a page, not a post.</h1>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php }
?>
