<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_theme_options' );
function crb_theme_options() {
    Container::make( 'theme_options', __( 'Kontakt' ) )
        ->add_tab( __( 'General' ), array(
            Field::make( 'text', 'account', 'Numer konta' ),
            Field::make( 'text', 'email', 'Adres email' ),
            Field::make( 'text', 'phone', 'Numer telefonu' )->set_width( 50 ),
            Field::make( 'text', 'phone_link', 'Numer telefonu - link' )->set_width( 50 )->set_help_text('Bez spacji' ),
        ) )
        ->add_tab( __( 'Media społecznościowe' ), array(
            Field::make( 'text', 'link_facebook', 'Facebook' ),
            Field::make( 'text', 'link_instagram', 'Instagram' ),
        ) );
}