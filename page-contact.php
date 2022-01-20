<?php
// Template Name: Kontakt
?>

<?php get_header(); ?>

<?php $banner = get_field('banner'); ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url( <?php echo $banner['obraz']; ?> );">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><strong><?php wp_title(''); ?></strong></h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="grid grid-2_1">
            <div class="grid-content mt-50 mt-lg-100 mb-50 mb-lg-100">

                <?php $ikona = get_field('ikona'); ?>
                <?php if ($ikona['tekst']):?>
                <div style="text-align: center;">
                    <img src="<?php echo $ikona['ikona']; ?>" alt="" class="mb-25">
                    <?php echo $ikona['tekst']; ?>
                </div>
                <?php endif;?>

                <div class="mt-50">
                    <?php echo do_shortcode(get_field('formularz')); ?>
                </div>
            </div>
            <div class="grid-image align-self-end justify-self-center mobile-sm">
                image
                <img src="<?php echo esc_url( $sekcja_1['obraz']['url'] ); ?>" alt="<?php echo esc_attr( $sekcja_1['obraz']['title'] ); ?>">
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>