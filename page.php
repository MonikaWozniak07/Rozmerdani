<?php
/**
 * The single page
 */
?>

<?php get_header(); ?>

<?php
if ( carbon_get_the_post_meta( 'banner_image' ) ):
    $banner_image = wp_get_attachment_image_url( carbon_get_the_post_meta( 'banner_image' ), '' );
else:
    $banner_image = get_template_directory_uri().'/img/banner-rozmerdani.jpg';
endif;
?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(  <?php echo $banner_image; ?> );">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><strong><?php wp_title(''); ?></strong></h1>
        </div>
    </div>
</section>

<section>
    <?php if ( carbon_get_the_post_meta( 'image' ) ): ?>
        <div class="container">
            <div class="grid grid-3_2">
                <div class="grid-content mt-50 mt-lg-100 mb-25 mb-lg-100">
                    <?php the_content(); ?>
                </div>
                <div class="grid-image align-self-end justify-self-center mobile-sm sticky-bottom pt-lg-100">
                    <?php echo wp_get_attachment_image( carbon_get_the_post_meta( 'image' ), '' ); ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container-sm">
            <div class="mt-50 mt-lg-100 mb-50 mb-lg-100">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>