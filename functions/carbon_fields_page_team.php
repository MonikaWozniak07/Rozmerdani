<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action( 'carbon_fields_register_fields', 'crb_page_team' );
function crb_page_team() {

      if (get_post_meta((int)$_GET['post'], '_wp_page_template', true) == 'page-team.php' ) {
            remove_post_type_support('page', 'editor');
      }

      Container::make( 'post_meta', 'banner', __( 'Banner' ) )
            ->where( 'post_type', '=', 'page' )
            ->where( 'post_template', '=', 'page-team.php' )
            ->add_fields( array(
                  Field::make( 'image', 'banner_image', __( ' ' ) )
      ) );

      Container::make( 'post_meta', __( 'Lista wolontariuszy' ) )
            ->where( 'post_type', '=', 'page' ) // only show our new fields on pages
            ->where( 'post_template', '=', 'page-team.php' )
            ->add_fields( array(
                  Field::make( 'complex', 'team', __('') )
                        ->set_layout( 'tabbed-vertical' )
                        ->add_fields( array(
                              Field::make( 'text', 'name', __('Name') )
                              ->set_width( 50 )
                              ->set_required( true ),
                              Field::make( 'text', 'title', 'Funkcja' )
                              ->set_width( 50 ),
                              Field::make( 'image', 'image', __('Image') )
                              ->set_width( 50 )
                              ->set_type( array( 'image' ) )
                              ->set_help_text('The photo should have an aspect ratio of 1: 1' ),
                              Field::make( 'textarea', 'dsc', 'Opis' )
                              ->set_width( 50 ),
                              Field::make( 'text', 'phone', 'Telefon' )
                              ->set_width( 50 ),
                              Field::make( 'text', 'phone_link', 'Telefon - link' )
                              ->set_width( 50 )
                              ->set_help_text('Without space/special marks' ),
                  ) )
                  ->set_header_template('<%- name %>')
            ) );
}