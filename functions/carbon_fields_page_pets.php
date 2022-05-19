<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_page_pets' );
function crb_page_pets() {

    if (get_post_meta((int)$_GET['post'], '_wp_page_template', true) == 'page-pets.php' ) {
        remove_post_type_support('page', 'editor');
    }

    Container::make( 'post_meta', 'banner', __( 'Banner' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'page-pets.php' )
        ->add_fields( array(
            Field::make( 'image', 'banner_image', __( ' ' ) )
    ) );

    Container::make( 'post_meta', __( 'Lista podopiecznych' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->where( 'post_template', '=', 'page-pets.php' )
        ->add_fields( array(
            Field::make( 'complex', 'pets', __('') )
                ->set_layout( 'grid' )
                ->add_fields( array(
                    Field::make( 'text', 'name', __( 'Name' ) )
                        ->set_width( 80 )
                        ->set_required( true ),
                    Field::make( 'image', 'image', __( 'Image' ) )
                        ->set_width( 20 ),
                    Field::make( 'textarea', 'dsc', 'Description' )
                        ->set_width( 80 ),
                    Field::make( 'media_gallery', 'gallery', __( 'Gallery' ) )
                        ->set_duplicates_allowed( false ),

            ) )
            ->set_header_template('<%- name %>')
        ) );
}