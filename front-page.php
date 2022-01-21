<?php get_header(); ?>

<?php $banner = get_field('banner'); ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url( <?php echo $banner['obraz']; ?> );">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <?php echo $banner['tytul']; ?>
        </div>
    </div>
</section>

<?php $sekcja_1 = get_field('sekcja_1'); ?>
<?php if ($sekcja_1['tekst']):?>
<section class="mt-50 mb-50 mt-lg-100 mb-lg-100">
    <div class="container">
        <div class="grid grid-1_1">
            <div class="grid-content">
                <?php echo $sekcja_1['tekst']; ?>
            </div>
            <div class="grid-image order-tablet-1 justify-self-center mobile-sm">
                <img src="<?php echo esc_url( $sekcja_1['obraz']['url'] ); ?>" alt="<?php echo esc_attr( $sekcja_1['obraz']['alt'] ); ?>">
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php $sekcja_2 = get_field('sekcja_2'); ?>
<?php if ($sekcja_2['tekst']):?>
<section class="section-help mt-50 mt-lg-100">
    <div class="container">
        <div class="bg-gray rounded overflow-hidden">
            <div class="grid grid-1_1">
                <div class="grid-content">
                    <?php echo $sekcja_2['tekst']; ?>

                    <?php if ($sekcja_2['link']):?>

                    <a href="<?php echo $sekcja_2['link']; ?>" class="btn"><?php echo $sekcja_2['link_tekst']; ?></a>

                    <?php endif;?>

                </div>
                <div class="grid-image order-tablet-1">
                    <img src="<?php echo esc_url( $sekcja_2['obraz']['url'] ); ?>" alt="<?php echo esc_attr( $sekcja_2['obraz']['alt'] ); ?>">
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php $sekcja_3 = get_field('sekcja_3'); ?>
<?php if ($sekcja_3['tekst']):?>
<section class="mt-50 mt-lg-100">
    <div class="container">
        <div class="grid grid-1_1">
            <div class="grid-content pb-lg-100">
                <?php echo $sekcja_3['tekst']; ?>
            </div>
            <div class="grid-image align-self-end justify-self-center mobile-sm">
                <img src="<?php echo esc_url( $sekcja_3['obraz']['url'] ); ?>" alt="<?php echo esc_attr( $sekcja_3['obraz']['alt'] ); ?>">
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php get_footer(); ?>