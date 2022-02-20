<?php
// title tag
function theme_setup() {
	// Adds <title> tag support
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup');