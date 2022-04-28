<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_pets' );
function crb_page_pets() {
    Container::make( 'post_meta', __( 'Lista podopiecznych' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->where( 'post_template', '=', 'page-pets.php' )
        ->add_fields( array(
            Field::make( 'complex', 'podopieczni', __('') )
            	->set_layout( 'grid' )
            	->add_fields( array(
            		Field::make( 'text', 'name', 'Imię' )->set_width( 100 )->set_required( true ),
            		Field::make( 'image', 'image', 'Zdjęcie' )->set_width( 20 )->set_type( array( 'image' ) )->set_value_type( 'url' ),
            		Field::make( 'textarea', 'dsc', 'Opis' )->set_width( 80 ),
            ) )
            ->set_header_template('<%- name %>')
        ) );
}