<?php
// Template Name: Aktualności
?>

<?php get_header(); ?>

<?php
    $banner_home = get_field('banner', get_option('page_on_front'))['obraz']['url'];
    $banner_news = get_field('banner', get_option('page_for_posts'))['url'];
    if( !empty( $banner_news ) ): ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo esc_url($banner_news); ?>);">
    <?php else : ?>
    <section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo esc_url($banner_home); ?>);">
        <?php endif; ?>
        <div class="container">
            <div class="banner_title">
                <div class="banner_circle"></div>
                <h1><strong><?php wp_title(''); ?></strong></h1>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>