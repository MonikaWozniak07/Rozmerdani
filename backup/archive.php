<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */
?>

<?php get_header(); ?>

<div>
    <?php
    if ( has_post_thumbnail() ) {
        echo get_the_post_thumbnail_url($post->ID, 'banner');
    }
    else {
        echo get_the_post_thumbnail_url(get_option('page_on_front'), 'banner');
    }
    ?>
</div>
archive.php
<section class="banner pt-50 pb-50 pt-lg-100 pb-lg-100" style="
    background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'banner') ?>)
    ">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <?php if( is_front_page() && ! is_home() ) { ?>
            <h1><span>Psy i koty</span><br>Zaadoptuj<br>dowolne zwierzę!</h1>
            <?php } else { ?>
            <?php single_post_title( '<h1>', '</h1>' ); ?>
            <?php } ?>
        </div>
    </div>
</section>

<hr style="margin:0;border:0;height:10px;background:red;">

<section>
    <div class="container">
        <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    get_template_part('template-parts/content', 'archive');
                }
            }
        ?>
        <?php the_posts_pagination(); ?>
    </div>
</section>

<hr style="margin:0;border:0;height:10px;background:red;">

<?php get_footer(); ?>