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
                <div class="header-gold_account">Nr konta: <code style="font-family: var(--sans-serif) !important;">92 1090 2590 0000 0001 4775 6986</code></div>
                <div class="header-gold_links">
                    <a href="mailto:stowarzyszenie.rozmerdany.dwor@gmail.com">stowarzyszenie.rozmerdany.dwor@gmail.com</a>
                    <a href="tel:+48 724 088 730" class="phone">tel. +48 724 088 730</a>
                </div>
                <div class="header-gold_socials">
                    <a href="https://www.facebook.com/Stowarzyszenie-Rozmerdany-Dw%C3%B3r-104886284806819" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/stowarzyszenie_rozmerdani/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="container">
            <nav>
                <a href="<?php echo get_site_url(); ?>">
                    <img class="nav-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
                </a>
                <div class="nav-hamburger">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'hamburger-list' ) ); ?>
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'main-nav' ) ); ?>
            </nav>
        </div>

    </header>