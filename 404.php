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
            <h1><strong>404</strong></h1>
            <h2>Strona nie istnieje lub została usunięta</h2>
        <a href="<?php echo get_site_url(); ?>" class="btn">Wróć</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>