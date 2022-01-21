<?php
// Template Name: Aktualności
?>

<?php get_header(); ?>

<?php $banner = get_field('banner'); ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo esc_url(get_field('banner', get_option('page_for_posts'))['url']); ?>);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><strong><?php wp_title(''); ?></strong></h1>
        </div>
    </div>
</section>

<?php /*
<div><?php echo get_option('page_on_front'); ?></div>
<div><?php echo get_option('page_for_posts'); ?></div>
*/ ?>

<?php get_footer(); ?>