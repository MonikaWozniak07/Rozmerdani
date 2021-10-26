<div style="margin-top: 20px;">
    <div><?php get_the_post_thumbnail_url(); ?></div>
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
    <div><?php the_date(); ?></div>
    <div><?php the_excerpt(); ?></div>
    <div><a href="<?php the_permalink(); ?>">link</a></div>
</div>