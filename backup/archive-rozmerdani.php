<?php get_header(); ?>

<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php
$page_id = get_queried_object_id(); echo get_the_post_thumbnail_url( $page_id ); ?>);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <?php
        while(have_posts()) { ?>
        <?php the_post(); ?>

        <div>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>

        <?php the_content(); ?>
        <?php }
        ?>
        <?php the_posts_pagination(); ?>
    </div>
</section>

<?php get_footer(); ?>