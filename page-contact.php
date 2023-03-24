<?php
// Template Name: Kontakt
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
    <?php if( carbon_get_the_post_meta( 'image' ) ): ?>
    <div class="container">
        <div class="grid grid-3_2">
            <div class="grid-content mt-50 mt-lg-100 mb-25 mb-lg-100">
                <?php if ( carbon_get_the_post_meta('text') ): ?>
                    <div style="text-align: center;">
                        <?php echo carbon_get_the_post_meta('icon') ?>
                        <?php echo wpautop( carbon_get_the_post_meta('text') ); ?>
                    </div>
                <?php endif;?>
                <div class="mt-50">
                    <?php echo do_shortcode( carbon_get_the_post_meta('form') ); ?>
                </div>
            </div>
            <div class="grid-image align-self-end justify-self-center mobile-sm sticky-bottom pt-lg-100">
                <?php echo wp_get_attachment_image( carbon_get_the_post_meta( 'image' ), '' ); ?>
            </div>
        </div>
    </div>
    <?php else : ?>
    <div class="container-sm">
        <div class="mt-50 mt-lg-100 mb-50 mb-lg-100">
            <?php if ( carbon_get_the_post_meta('text') ): ?>
                <div style="text-align: center;">
                    <?php echo carbon_get_the_post_meta('icon') ?>
                    <?php echo wpautop( carbon_get_the_post_meta('text') ); ?>
                </div>
            <?php endif;?>
            <div class="mt-50">
                <?php echo do_shortcode( carbon_get_the_post_meta('form') ); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>

<?php /* // Contact Form 7
    <div class="grid-form mb-25">
        <div>
            <label for="your-name">Imię i nazwisko <span>*</span></label>
            [text* your-name id:your-name]
        </div>
        <div>
            <label for="your-email">Adres e-mail</label>
            [email* your-email id:your-email]
        </div>
        <div>
            <label for="your-tel ">Telefon <span>*</span></label>
            [tel* your-tel id:your-tel ]
        </div>
    </div>
    <div class="mt-25">
        <label for="your-message">Twoja wiadomość</label>
        [textarea your-message id:your-message x3]
    </div>
    <div class="mt-25">
        [acceptance zgodaNaKontakt] Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w formularzu w celu uzyskania odpowiedzi na przesłaną przeze mnie wiadomość. [/acceptance]
    </div>
        <div class="position-relative mt-25 text-right">
    [submit class:btn "Wyślij"]
    </div>
*/ ?>