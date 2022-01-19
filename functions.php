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
//

// theme setup
function theme_setup() {
	// Adds <title> tag support
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_setup');
//

//
function remove_default_img_sizes( $sizes ) {
  $targets = ['medium', 'medium_large', 'large', '1536x1536', '2048x2048'];
  foreach($sizes as $size_index=>$size) {
    if(in_array($size, $targets)) {
      unset($sizes[$size_index]);
    }
  }
  return $sizes;
}
add_filter( 'intermediate_image_sizes', 'remove_default_img_sizes', 10, 1);
//

/* Register navigation menus */
function customtheme_menus() {
	$locations = array(
		'primary'     => __( 'Primary Menu' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'customtheme_menus' );
//

// Custom favicon
function customFavicon() {
	$favicon_path = get_template_directory_uri() . '/img/favicon.ico';
	echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
}
add_action( 'wp_head', 'customFavicon' ); // front end
add_action( 'admin_head', 'customFavicon' ); // admin panel
//

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
//

// Featured Image for every page
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) {
    add_image_size( 'banner', 1920, 600, array( 'center', 'center' ) );
}
//

//

//

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Rozmerdani', 'Post Type General Name'),
			'all_items'           => __( 'Wszyscy'),
			'add_new_item'        => __( 'Dodaj'),
			'add_new'             => __( 'Dodaj'),
			'edit_item'           => __( 'Edytuj'),
			'update_item'         => __( 'Aktualizuj'),
			'search_items'        => __( 'Szukaj'),
			'not_found'           => __( 'Nie znaleziono'),
		);

	// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'Rozmerdani'),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'author', 'thumbnail'),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'taxonomies'          => array( 'animals' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			// 'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,

		);

		// Registering your Custom Post Type
		register_post_type( 'rozmerdani', $args );

	}

	/* Hook into the 'init' action so that the function
	* Containing our post type registration is not
	* unnecessarily executed.
	*/
add_action( 'init', 'custom_post_type', 0 );




add_action('admin_head', 'custom_dashboard_styles');

function custom_dashboard_styles() {
	echo '<style>
		.acf-field {
			min-height: unset !important;
		}
		.acf-image-uploader img {
			max-height: 200px !important;
		}
	</style>';
}