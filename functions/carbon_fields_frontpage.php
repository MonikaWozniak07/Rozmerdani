<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_page_frontpage' );
function crb_page_frontpage() {

    if (get_post_meta((int)$_GET['post'], '_wp_page_template', true) == 'front-page.php' ) {
        remove_post_type_support('page', 'editor');
    }

    Container::make( 'post_meta', 'banner', __( 'Banner' ) )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
            Field::make( 'image', 'banner_image', __( 'Image' ) )
                ->set_width( 20 ),
            Field::make( 'Rich Text', 'banner_text', __( 'Text' ) )
                ->set_width( 80 ),
    ) );

    Container::make( 'post_meta', 'section_1', __( 'Sekcja 1' ) )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
            Field::make( 'image', 'section1_image', __( 'Image' ) )
                ->set_width( 20 ),
            Field::make( 'Rich Text', 'section1_text', __( 'Text' ) )
                ->set_width( 80 ),
    ) );

    Container::make( 'post_meta', 'section_2', __( 'Sekcja 2' ) )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
            Field::make( 'image', 'section2_image', __( 'Image' ) )
                ->set_width( 20 ),
            Field::make( 'Rich Text', 'section2_text', __( 'Text' ) )
                ->set_width( 80 ),
            Field::make( 'Text', 'link_text', __( 'Link Text' ) )
                ->set_width( 50 ),
            Field::make( 'text', 'link_to', __( 'Link' ) )
                ->set_help_text( 'https://link.com or /link/' )
                ->set_width( 50 ),
    ) );

    Container::make( 'post_meta', 'section_3', __( 'Sekcja 3' ) )
        ->where( 'post_id', '=', get_option( 'page_on_front' ) )
        ->add_fields( array(
            Field::make( 'image', 'section3_image', __( 'Image' ) )
                ->set_width( 20 ),
            Field::make( 'Rich Text', 'section3_text', __( 'Text' ) )
                ->set_width( 80 ),
    ) );

}