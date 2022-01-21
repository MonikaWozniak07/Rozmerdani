<?php
// Template Name: Kontakt
?>

<?php get_header(); ?>

<?php $banner = get_field('banner'); ?>
<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url( <?php echo esc_url($banner['url']); ?> );">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1><strong><?php wp_title(''); ?></strong></h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="grid grid-3_2">
            <div class="grid-content mt-50 mt-lg-100 mb-25 mb-lg-100">

                <?php $ikona = get_field('ikona'); ?>
                <?php if ($ikona['tekst']):?>
                <div style="text-align: center;">
                    <img src="<?php echo $ikona['ikona']; ?>" alt="" class="mb-25">
                    <?php echo $ikona['tekst']; ?>
                </div>
                <?php endif;?>

                <div class="mt-50">
                    <?php echo do_shortcode(get_field('formularz')); ?>
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
                </div>
            </div>
            <div class="grid-image align-self-end justify-self-center mobile-sm sticky-bottom pt-lg-100">
                <?php $image = get_field('podopieczny');
                if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>