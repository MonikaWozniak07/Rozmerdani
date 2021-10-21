<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Monika Woźniak, Łukasz Dzieło">
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
        <?php bloginfo('name'); ?>
        <?php if ( get_bloginfo('description') ) { ?>
        | <?php bloginfo( 'description' ); ?>
        <?php } ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <?php /*
        <header>
            <div class="container">
                <a href="<?php echo get_site_url(); ?>" class="navbar-brand">Logo</a>
    <div>header.php</div>
    <nav>
        <?php wp_nav_menu( $args ); ?>
    </nav>
    </div>
    </header>
    */ ?>

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
                <a href="./">
                    <img class="nav-logo" src="./img/logo.png" alt="logo">
                </a>
                <div class="nav-hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="/">Nasz Team</a></li>
                    <li><a href="/">Rozmerdani</a></li>
                    <li><a href="pomagaj.html">Pomagaj</a></li>
                    <!-- <li><a href="/">Aktualności</a></li> -->
                    <!-- <li><a href="/">Nasi podopieczni</a></li> -->
                    <!-- <li><a href="/">Dobroczyńcy</a></li> -->
                    <!-- <li><a href="/">O stowarzyszeniu</a></li> -->
                    <!-- <li><a href="/">Dobrane pary</a></li> -->
                    <!-- <li><a href="/">Dobroczyńcy</a></li> -->
                    <!-- <li><a href="/">O stowarzyszeniu</a></li> -->
                    <!-- <li><a href="/">Pomóż</a></li> -->
                    <li><a href="/">Kontakt</a></li>
                    <!-- <li><a href="/">Zaloguj się</a></li> -->
                </ul>
            </nav>
        </div>

    </header>