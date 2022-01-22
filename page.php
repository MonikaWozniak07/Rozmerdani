<?php
/**
 * The single page
 */
?>

<?php get_header(); ?>

<?php
    $banner_home = get_field('banner', get_option('page_on_front'))['obraz']['url'];
    $banner_page = get_field('banner')['url'];
    if( !empty( $banner_page ) ): ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo esc_url($banner_page); ?>);">
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



    <section>
        <?php $image = get_field('podopieczny');
        if( !empty( $image ) ): ?>
        <div class="container">
            <div class="grid grid-3_2">
                <div class="grid-content mt-50 mt-lg-100 mb-25 mb-lg-100">
                    <?php the_field('tekst'); ?>
                </div>

                <div class="grid-image align-self-end justify-self-center mobile-sm sticky-bottom pt-lg-100">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            </div>
        </div>
        <?php else : ?>
        <div class="container-sm">
            <div class="mt-50 mt-lg-100 mb-50 mb-lg-100">
                <?php the_field('tekst'); ?>
            </div>
        </div>
        <?php endif; ?>
    </section>

    <?php get_footer(); ?>