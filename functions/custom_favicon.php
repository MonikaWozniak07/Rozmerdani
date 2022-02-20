<?php
// Custom favicon
function customFavicon() {
	$favicon_path = get_template_directory_uri() . '/img/favicon.ico';
	echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
}
add_action( 'wp_head', 'customFavicon' ); // front end
add_action( 'admin_head', 'customFavicon' ); // admin panel