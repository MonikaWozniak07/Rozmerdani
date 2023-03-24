<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page' );
function crb_page() {

    Container::make( 'post_meta', 'banner', __( 'Banner' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'default' )
        ->set_context( 'carbon_fields_after_title' )
        ->add_fields( array(
            Field::make( 'image', 'banner_image', __( ' ' ) )
    ) );

    Container::make( 'post_meta', __( 'Image' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'default' )
        ->add_fields( array(
            Field::make( 'image', 'image', __( ' ' ) )
    ) );
}