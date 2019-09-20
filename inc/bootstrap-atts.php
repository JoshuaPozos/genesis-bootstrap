<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }


/**
 * Bootstrap Attributes
 */
function axtl_genboots_add_site_container_attributes( $attributes ) {

  // $attributes['class'] .= ' container';
  $attributes['class'] .= ' container-fluid';
 
  return $attributes;
}

function axtl_genboots_add_site_header_attributes( $attributes ) {

  $attributes['class'] .= ' container';
  // $attributes['class'] .= ' container-fluid';
  // $attributes['class'] .= ' row';

 
  return $attributes;
}

function axtl_genboots_add_site_inner_attributes( $attributes ) {

  // $attributes['class'] .= ' container';
  $attributes['class'] .= ' container-fluid';
 
  return $attributes;
}

function axtl_genboots_add_site_footer_attributes( $attributes ) {

  // $attributes['class'] .= ' container';
  $attributes['class'] .= ' container';

 
  return $attributes;
}

function axtl_genboots_add_structural_wrap_attributes( $attributes ) {

  $attributes['class'] .= ' row';
  // $attributes['class'] .= ' column';
 
  return $attributes;
}

function axtl_genboots_add_title_area_attributes( $attributes ) {

  $attributes['class'] .= ' col-12 col-sm-2 align-self-center';
 
  return $attributes;
}

function axtl_genboots_add_header_widget_area_attributes( $attributes ) {

  $attributes['class'] .= ' col-12 col-sm-10 align-self-center';
 
  return $attributes;
}

function axtl_genboots_add_nav_primary_attributes( $attributes ) {

  $attributes['class'] .= ' col col-ms-10 align-self-center';
 
  return $attributes;
}

function axtl_genboots_add_content_sidebar_wrap_attributes( $attributes ) {

  $attributes['class'] .= ' container';
 
  return $attributes;
}

function genesis_header_markup_open_row() {
  $row    = 'row';
  $column = 'column';
	return $row;
}