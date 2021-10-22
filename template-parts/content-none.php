<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="banner banner-sm pt-50 pb-50 pt-lg-100 pb-lg-100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/banner-rozmerdani.jpg);">
    <div class="container">
        <div class="banner_title">
            <div class="banner_circle"></div>
            <h1>404</h1>
        </div>
    </div>
</section>

<div class="container">

    template-parts/content-none.php

    <h1 class="page-title"><?php esc_html_e( 'Niczego tutaj nie ma' ); ?></h1>
    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

    <?php
    printf(
    '<p>' . wp_kses(
        /* translators: %s: Link to WP admin new post page. */
        __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone' ),
        array(
            'a' => array(
                'href' => array(),
            ),
        )
    ) . '</p>',
    esc_url( admin_url( 'post-new.php' ) )
    );
    ?>

    <?php elseif ( is_search() ) : ?>

    <p><?php esc_html_e( 'Brak wyników wyszukiwania. Proszę spróbować ponownie z innymi słowami.' ); ?></p>
    <?php get_search_form(); ?>

    <?php else : ?>

    <p><?php esc_html_e( 'Nie udało się znaleźć tego, czego szukasz. Być może wyszukiwanie przyniesie lepsze rezultaty.' ); ?></p>
    <?php get_search_form(); ?>

    <?php endif; ?>
</div>