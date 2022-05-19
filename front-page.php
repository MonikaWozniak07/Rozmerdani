<?php
// Template Name: Strona główna
?>

<?php get_header(); ?>

<?php
if ( carbon_get_the_post_meta( 'banner_image' ) ):
    $banner_image = wp_get_attachment_image_url( carbon_get_the_post_meta( 'banner_image' ), '' );
else:
    $banner_image = get_template_directory_uri().'/img/banner-rozmerdani.jpg';
endif;
?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url( <?php echo $banner_image; ?> );">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <?php echo wpautop( carbon_get_the_post_meta('banner_text') ); ?>
        </div>
    </div>
</section>

<?php
    $test = carbon_get_the_post_meta( 'section_1' );
    echo $test['section1_text'];
?>

<?php if (carbon_get_the_post_meta('section1_text')):?>
<section class="mt-50 mb-50 mt-lg-100 mb-lg-100">
    <div class="container">
        <div class="grid grid-1_1">
            <div class="grid-content">
                <?php echo wpautop( carbon_get_the_post_meta('section1_text') ); ?>
            </div>
            <div class="grid-image order-tablet-1 justify-self-center mobile-sm">
                <?php echo wp_get_attachment_image( carbon_get_the_post_meta( 'section1_image' ), '' ); ?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php if (carbon_get_the_post_meta('section2_text')):?>
<section class="section-help mt-50 mt-lg-100">
    <div class="container">
        <div class="bg-gray rounded overflow-hidden">
            <div class="grid grid-1_1">
                <div class="grid-content">
                    <?php echo wpautop( carbon_get_the_post_meta('section2_text') ); ?>
                    <?php if (carbon_get_the_post_meta('link_text')):?>
                        <a href="<?php echo carbon_get_the_post_meta('link_to'); ?>" class="btn"><?php echo carbon_get_the_post_meta('link_text'); ?></a>
                    <?php endif;?>
                </div>
                <div class="grid-image order-tablet-1">
                    <?php echo wp_get_attachment_image( carbon_get_the_post_meta( 'section2_image' ), '' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php if (carbon_get_the_post_meta('section3_text')):?>
<section class="mt-50 mt-lg-100">
    <div class="container">
        <div class="grid grid-1_1">
            <div class="grid-content pb-lg-100">
                <?php echo wpautop( carbon_get_the_post_meta('section3_text') ); ?>
            </div>
            <div class="grid-image align-self-end justify-self-center mobile-sm">
                <?php echo wp_get_attachment_image( carbon_get_the_post_meta( 'section3_image' ), '' ); ?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php get_footer(); ?>