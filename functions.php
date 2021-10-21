<?php
/**
 * Custom template functions and definitions
 */

/* Register and Enqueue Styles and Enqueue Scripts */
function styles_scripts() {
    wp_enqueue_style( 'baseStyle', get_template_directory_uri() . '/css/style.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'baseScript', get_template_directory_uri() . '/js/app.js', array(), wp_get_theme()->get( 'Version' ), true );
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

/* Custom favicon */
function customFavicon() {
	$favicon_path = get_template_directory_uri() . '/img/favicon.ico';
	echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
}
add_action( 'wp_head', 'customFavicon' ); // front end
add_action( 'admin_head', 'customFavicon' ); // admin panel

// Polish hanging spouts (wiszace spojniki)
function spojniki( $tekst ) {
	$z  = array(' o ', ' u ', ' w ', ' z ', ' i ', ' a ',
	 			' O ', ' U ', ' W ', ' Z ', ' I ', ' A ',
				'(o ', '(u ', '(w ', '(z ', '(i ', '(a ',
				'(O ', '(U ', '(W ', '(Z ', '(I ', '(A '
	);
	$na = array(' o&nbsp;', ' u&nbsp;', ' w&nbsp;', ' z&nbsp;', ' i&nbsp;',  ' a&nbsp;',
				' O&nbsp;', ' U&nbsp;', ' W&nbsp;', ' Z&nbsp;', ' I&nbsp;',  ' A&nbsp;',
				'(o&nbsp;', '(u&nbsp;', '(w&nbsp;', '(z&nbsp;', '(i&nbsp;',  '(a&nbsp;',
				'(O&nbsp;', '(U&nbsp;', '(W&nbsp;', '(Z&nbsp;', '(I&nbsp;',  '(A&nbsp;'
	);
	return str_replace( $z, $na, $tekst );
}
add_filter( 'the_content',  'spojniki' );
add_filter( 'the_title',    'spojniki' );
add_filter( 'comment_text', 'spojniki' );


