<?php
/**
 * Custom template functions and definitions
 */


/* Register and Enqueue Styles and Enqueue Scripts */
function styles_scripts() {
    wp_enqueue_style( 'srd-style', get_template_directory_uri() . '/css/style.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'srd-script', get_template_directory_uri() . '/js/app.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'styles_scripts' );

/* Register navigation menus */
function customtheme_menus() {
	$locations = array(
		'primary'     => __( 'Primary Menu' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'customtheme_menus' );