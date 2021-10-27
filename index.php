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

<h1 style="margin:0;padding:10px;background:lightblue;text-align:center;"><?php echo basename( __FILE__ ); ?></h1>

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
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php the_content(); ?>
        <?php }
        ?>
        <?php the_posts_pagination(); ?>
    </div>
</section>

<?php get_footer(); ?>