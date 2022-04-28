<?php
/**
 * The main template file
 */
?>

<?php get_header(); ?>

<h1 style="margin:0;padding:10px;background:lightblue;text-align:center;"><?php echo basename( __FILE__ ); ?></h1>

<?php $banner = get_field('banner'); ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url( <?php echo esc_url($banner['url']); ?> );">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><strong><?php wp_title(''); ?></strong></h1>
        </div>
    </div>
</section>

<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php
$page_id = get_queried_object_id(); echo get_the_post_thumbnail_url( $page_id ); ?>);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
</section>

<div><?php echo get_option('page_on_front'); ?></div>
<div><?php echo get_option('page_for_posts'); ?></div>
<div><?php the_field('banner', 109); ?></div>

<?php get_footer(); ?>