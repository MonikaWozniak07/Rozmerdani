<?php
// Template Name: Zespół
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

<section class="pt-50 pb-50 pt-lg-100 pb-lg-100 persons-wrapper">
    <div class="container">
        <div class="person-grid grid grid-1_1">
            <?php
                $slides = carbon_get_the_post_meta( 'team' );
                foreach ( $slides as $slide ) {?>
                <div class="person">
                    <div class="person-img">
                        <?php
                        if ( wp_get_attachment_image( $slide['image'] ) ):
                            echo wp_get_attachment_image( $slide['image'], 'medium' );
                        else:
                            echo '<div class="placeholder"><svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_911_151" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="80" height="80"><rect width="80" height="80" fill="#D9D9D9"/></mask><g mask="url(#mask0_911_151)"><path d="M40.0002 39.6667C36.1668 39.6667 33.0418 38.4584 30.6252 36.0417C28.2085 33.625 27.0002 30.5 27.0002 26.6667C27.0002 22.8334 28.2085 19.7084 30.6252 17.2917C33.0418 14.875 36.1668 13.6667 40.0002 13.6667C43.8335 13.6667 46.9585 14.875 49.3752 17.2917C51.7918 19.7084 53.0002 22.8334 53.0002 26.6667C53.0002 30.5 51.7918 33.625 49.3752 36.0417C46.9585 38.4584 43.8335 39.6667 40.0002 39.6667ZM12.8335 67.4167V59.0834C12.8335 56.8611 13.3891 54.9584 14.5002 53.375C15.6113 51.7917 17.0279 50.5834 18.7502 49.75C22.5279 48.0834 26.1391 46.8334 29.5835 46C33.0279 45.1667 36.5002 44.75 40.0002 44.75C43.5002 44.75 46.9585 45.1806 50.3752 46.0417C53.7918 46.9028 57.3891 48.1667 61.1668 49.8334C62.9446 50.6111 64.3891 51.7917 65.5002 53.375C66.6113 54.9584 67.1668 56.8611 67.1668 59.0834V67.4167H12.8335ZM18.5002 61.75H61.5002V59.1667C61.5002 58.2778 61.2363 57.4306 60.7085 56.625C60.1807 55.8195 59.5279 55.2222 58.7502 54.8334C55.2502 53.1667 52.0418 52.0139 49.1252 51.375C46.2085 50.7361 43.1668 50.4167 40.0002 50.4167C36.8335 50.4167 33.7641 50.7361 30.7918 51.375C27.8196 52.0139 24.6113 53.1667 21.1668 54.8334C20.3891 55.2222 19.7502 55.8195 19.2502 56.625C18.7502 57.4306 18.5002 58.2778 18.5002 59.1667V61.75ZM40.0002 34C42.1113 34 43.8613 33.3056 45.2502 31.9167C46.6391 30.5278 47.3335 28.7778 47.3335 26.6667C47.3335 24.5556 46.6391 22.8056 45.2502 21.4167C43.8613 20.0278 42.1113 19.3334 40.0002 19.3334C37.8891 19.3334 36.1391 20.0278 34.7502 21.4167C33.3613 22.8056 32.6668 24.5556 32.6668 26.6667C32.6668 28.7778 33.3613 30.5278 34.7502 31.9167C36.1391 33.3056 37.8891 34 40.0002 34Z" fill="#1C1B1F" opacity="0.25"/></g></svg></div>';
                        endif;
                        ?>
                    </div>
                    <div class="person-text">
                        <div class="name"><?php echo $slide['name']; ?></div>
                        <?php if ( $slide['title'] ):  ?>
                            <div class="title"><?php echo $slide['title']; ?></div>
                        <?php endif; ?>
                        <?php if ( $slide['dsc'] ):  ?>
                            <div class="dsc"><?php echo $slide['dsc']; ?></div>
                        <?php endif; ?>
                        <?php if ( $slide['phone_link'] ):  ?>
                            <div class="phone"><a href="tel:<?php echo $slide['phone_link']; ?>"><?php echo $slide['phone']; ?></a></div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>