<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Monika Woźniak, Łukasz Dzieło">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <div class="header-gold">
            <div class="container">

                <?php if (carbon_get_theme_option( 'account' )) { ?>
                    <div class="header-gold_account">Nr konta: <code style="font-family: var(--sans-serif) !important;"><?php echo carbon_get_theme_option( 'account' ); ?></code></div>
                <?php } ?>
                <div class="header-gold_links">

                    <?php if (carbon_get_theme_option( 'email' )) { ?>
                        <a href="mailto:<?php echo carbon_get_theme_option( 'email' ); ?>"><?php echo carbon_get_theme_option( 'email' ); ?></a>
                    <?php } ?>

                    <?php if (carbon_get_theme_option( 'phone' )) { ?>
                        <a href="tel:<?php echo carbon_get_theme_option( 'phone_link' ); ?>" class="phone">tel. <?php echo carbon_get_theme_option( 'phone' ); ?></a>
                    <?php } ?>

                </div>
                <div class="header-gold_socials">

                    <?php if (carbon_get_theme_option( 'link_facebook' )) { ?>
                        <a href="<?php echo carbon_get_theme_option( 'link_facebook' ); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <?php } ?>

                    <?php if (carbon_get_theme_option( 'link_instagram' )) { ?>
                        <a href="<?php echo carbon_get_theme_option( 'link_instagram' ); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="container">
            <nav>
                <a href="<?php echo get_site_url(); ?>">
                    <img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                </a>
                <button class="menu-toggler" type="button">
                    <div class="toggler-line"></div>
                    <div class="toggler-line"></div>
                    <div class="toggler-line"></div>
                    <div class="toggler-line"></div>
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'main' ) ); ?>
            </nav>
        </div>
    </header>