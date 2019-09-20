<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }

// Add viewport meta tag for mobile browsers
add_theme_support('genesis-responsive-viewport');

// Remove genesis layouts
// genesis_unregister_layout('content-sidebar');
// genesis_unregister_layout('sidebar-content');
// genesis_unregister_layout('content-sidebar-sidebar');
// genesis_unregister_layout('sidebar-sidebar-content');
// genesis_unregister_layout('sidebar-content-sidebar');
// genesis_unregister_layout('full-width-content');

// Remove sidebars
// unregister_sidebar('sidebar');
// unregister_sidebar('sidebar-alt');
// unregister_sidebar('header-right');

// Remove secondary menu
// remove_action('genesis_after_header', 'genesis_do_subnav');
// add_action( 'genesis_header_right','genesis_do_nav' );

// Remove site description header
// remove_action('genesis_site_description', 'genesis_seo_site_description');

// Adds HTML5 markup structure.
// add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

// Move navigation to header
// remove_action('genesis_after_header', 'genesis_do_nav');
// add_action('genesis_header_right', 'genesis_do_nav');

//* Add support for custom header
// add_theme_support( 'custom-logo', array(
// 	'height'      => 50, // set to your dimensions
// 	'width'       => 100,
// 	'flex-height' => true,
// 	'flex-width'  => true,
// ) );

// add_filter( 'genesis_seo_title','axtl_genboots_custom_logo', 10, 3 );

// Change the footer text
add_filter('genesis_footer_creds_text', 'axtl_genboots_footer_creds_filter');

/**
 * Add Bootstrap Attributes
 */
// add_filter( 'genesis_attr_nav-primary', 'axtl_genboots_add_nav_primary_attributes' );

// add_filter( 'genesis_attr_site-container', 'axtl_genboots_add_site_container_attributes' );
add_filter( 'genesis_attr_site-header', 'axtl_genboots_add_site_header_attributes' );
add_filter( 'genesis_attr_site-inner', 'axtl_genboots_add_site_inner_attributes' );
add_filter( 'genesis_attr_site-footer', 'axtl_genboots_add_site_footer_attributes' );
add_filter( 'genesis_attr_content-sidebar-wrap', 'axtl_genboots_add_content_sidebar_wrap_attributes' );
// add_filter( 'genesis_attr_title-area', 'axtl_genboots_add_title_area_attributes' );
// add_filter( 'genesis_attr_header-widget-area', 'axtl_genboots_add_header_widget_area_attributes' );
// add_filter( 'genesis_attr_structural-wrap', 'axtl_genboots_add_structural_wrap_attributes' );
// add_filter( 'genesis_attr_structural-wrap', 'axtl_genboots_add_structural_wrap_attributes' );

// add_filter( 'genesis_attr_site-footer-structural-wrap', 'axtl_genboots_add_site_footer_attributes' );
/*
 * Before Footer
 */
// add_action( 'genesis_before_footer', 'axtl_genboots_before_footer' );
function axtl_genboots_before_footer() {
	genesis_widget_area( 'before-footer-section', array(
    'before' => '<div id="before-footer-section" class="before-footer-section container-fluid"><div class="wrap row">',
    'after'  => '</div></div>',
  ) );
}
