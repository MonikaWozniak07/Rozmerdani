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
    <header>
        <div class="container">
            <a href="<?php echo get_site_url(); ?>" class="navbar-brand">Logo</a>
            <div>header.php</div>
            <nav>
                <?php wp_nav_menu( $args ); ?>
            </nav>
        </div>
    </header>