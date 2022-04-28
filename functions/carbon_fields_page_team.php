<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_team' );
function crb_page_team() {
    Container::make( 'post_meta', __( 'Lista wolontariuszy' ) )
        ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
        ->where( 'post_template', '=', 'page-team.php' )
        ->add_fields( array(
            Field::make( 'complex', 'wolontariusz', __('') )
            	->set_layout( 'tabbed-vertical' )
            	->add_fields( array(
            		Field::make( 'text', 'name', 'Imię' )->set_width( 50 )->set_required( true ),
            		Field::make( 'text', 'title', 'Funkcja' )->set_width( 50 ),
            		Field::make( 'image', 'image', 'Zdjęcie' )->set_width( 20 )->set_type( array( 'image' ) )->set_value_type( 'url' ),
            		Field::make( 'textarea', 'dsc', 'Opis' )->set_width( 80 ),
            		Field::make( 'text', 'phone', 'Telefon' )->set_width( 50 ),
            		Field::make( 'text', 'phone_link', 'Telefon - link' )->set_width( 50 )->set_help_text('Bez spacji' ),
            ) )
            ->set_header_template('<%- name %>')
        ) );
}