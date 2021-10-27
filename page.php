<?php
/**
 * The single page
 */
?>

<?php get_header(); ?>

<h1 style="margin:0;padding:10px;background:lightblue;text-align:center;"><?php echo basename( __FILE__ ); ?></h1>

<?php
    if ( has_post_thumbnail() ) { ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(
    <?php
        $page_id = get_queried_object_id();
        echo get_the_post_thumbnail_url( $page_id );
    ?>);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
</section>
<?php }
    else { ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_option('page_on_front'), 'banner'); ?>);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><?php wp_title(''); ?></h1>
        </div>
    </div>
</section>

<?php }
?>


<section>
    <div class="container">
        <?php
        while(have_posts()) { ?>
        <?php the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
        <?php }
        ?>
    </div>
</section>

<?php get_footer(); ?>