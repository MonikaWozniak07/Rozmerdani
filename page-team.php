<?php
// Template Name: Zespół
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

<section class="pt-50 pb-50 pt-lg-100 pb-lg-100">
    <div class="container">
        <div>
            <?php
                $slides = carbon_get_the_post_meta( 'wolontariusz' );
                foreach ( $slides as $slide ) {?>
                <div class="item">
                    <div><?php echo $slide['image']; ?></div>
                    <div><?php echo $slide['name']; ?></div>
                    <div><?php echo $slide['title']; ?></div>
                    <div><?php echo $slide['dsc']; ?></div>
                    <div><a href="<?php echo $slide['phone_link']; ?>"><?php echo $slide['phone']; ?></a></div>
                    <div></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>