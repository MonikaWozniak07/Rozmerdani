<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_page_contact' );
function crb_page_contact() {

    if (get_post_meta((int)$_GET['post'], '_wp_page_template', true) == 'page-contact.php' ) {
        remove_post_type_support('page', 'editor');
    }

    Container::make( 'post_meta', 'banner', __( 'Banner' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->where( 'post_template', '=', 'page-contact.php' )
        ->add_fields( array(
            Field::make( 'image', 'banner_image', __( ' ' ) )
    ) );

    Container::make( 'post_meta', __( 'Sekcja' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->where( 'post_template', '=', 'page-contact.php' )
        ->add_fields( array(
            Field::make( 'textarea', 'icon', __( 'Image' ) )
                ->set_rows( 10 )
                ->set_width( 20 ),
            Field::make( 'Rich Text', 'text', __( 'Text' ) )
                ->set_width( 80 ),
            Field::make( 'text', 'form', __( 'Form' ) )

    ) );

    Container::make( 'post_meta', __( 'Image' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->where( 'post_template', '=', 'page-contact.php' )
        ->add_fields( array(
            Field::make( 'image', 'image', __( ' ' ) )
    ) );
}