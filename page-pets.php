<?php
// Template Name: Rozmerdani
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

<section class="pt-50 pb-50 pt-lg-100 pb-lg-100">
    <div class="container">
        <div class="pets-grid grid grid-1_1_1">
            <?php
                $slides = carbon_get_the_post_meta( 'pets' );
                foreach ( $slides as $slide ) {?>
                <div class="pets-item">
                    <div class="image"><?php echo wp_get_attachment_image( $slide['image'], '' ); ?></div>
                    <div class="name"><?php echo $slide['name']; ?></div>
                    <div class="dsc"><?php echo $slide['dsc']; ?></div>
                    <div class="gallery">
                        <?php
                        foreach( $slide['gallery'] as $i => $image ){
                            echo wp_get_attachment_image( $image, 'thumbnail' );
                            // echo wp_get_attachment_image_url( $image, '' );
                        }
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>