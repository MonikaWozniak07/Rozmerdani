<?php
/**
 * The template for displaying 404 pages (not found)
 */
?>

<?php get_header(); ?>

<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <?php the_post_thumbnail(); ?>
</a>
<?php endif; ?>

<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(./img/banner-rozmerdani.jpg);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1>404</h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <p>Nic tutaj nie ma :/ Wróć do strony głównej!</p>
        <a href="<?php echo get_site_url(); ?>" class="btn">Wróć</a>
    </div>
</section>

<?php get_footer(); ?>