<?php
/**
 * The template for displaying 404 pages (not found)
 */
?>

<?php get_header(); ?>

<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/banner-rozmerdani.jpg);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1>404</h1>
        </div>
    </div>
</section>

<section class="mt-50 mt-lg-100 mb-50 mb-lg-100">
    <div class="container">
        <p>Nic tutaj nie ma :/ Wróć do strony głównej!</p>
        <a href="<?php echo get_site_url(); ?>" class="btn">Wróć</a>
    </div>
</section>

<?php get_footer(); ?>