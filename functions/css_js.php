<?php
/* Register and Enqueue Styles and Enqueue Scripts */
function styles_scripts() {
    wp_enqueue_style( 'baseStyle', get_template_directory_uri() . '/css/style.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'baseScript', get_template_directory_uri() . '/js/app.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'styles_scripts' );