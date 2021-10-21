<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

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