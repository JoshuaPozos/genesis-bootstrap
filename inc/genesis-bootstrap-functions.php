<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }

// Enqueue Scripts & Styles
function axtl_genboots_wp_enqueue_scripts() {

    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Montserrat|Source+Sans+Pro:300,400', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.8.2/css/all.css', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'bootstrap-4.3.1', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), CHILD_THEME_VERSION );
  	// wp_enqueue_style( 'genesis-bootstrap-styles',  AXTLGENBOOTS_URI . '/assets/stylesheets/css/styles.css', array(), filemtime( AXTLGENBOOTS_DIR . '/assets/stylesheets/css/styles.css' ) );

    // Version JS file in a theme
  // wp_enqueue_script(
  //   'genesis-bootstrap-scripts',
  //   EVENTSALPHA_URI . '/assets/scripts/genesis-bootstrap.js', array(), filemtime( AXTLGENBOOTS_DIR . '/assets/scripts/genesis-bootstrap.js' )
  // );

}

function axtl_genboots_custom_logo( $title, $inside, $wrap ) {
	// Check to see if the Custom Logo function exists and set what goes inside the wrapping tags.
	if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
		$logo = get_custom_logo();
	else :
	 	$logo = get_bloginfo( 'name' );
	endif;
 	 // Use this wrap if no custom logo - wrap around the site name
	 $inside = sprintf( '<a href="%s" title="%s">%s</a>', trailingslashit( home_url() ), esc_attr( get_bloginfo( 'name' ) ), $logo );
	 // Determine which wrapping tags to use - changed is_home to is_front_page to fix Genesis bug.
	 $wrap = is_front_page() && 'title' === genesis_get_seo_option( 'home_h1_on' ) ? 'h1' : 'p';
	 // A little fallback, in case an SEO plugin is active - changed is_home to is_front_page to fix Genesis bug.
	 $wrap = is_front_page() && ! genesis_get_seo_option( 'home_h1_on' ) ? 'h1' : $wrap;
	 // And finally, $wrap in h1 if HTML5 & semantic headings enabled.
	 $wrap = genesis_html5() && genesis_get_seo_option( 'semantic_headings' ) ? 'h1' : $wrap;
	 $title = sprintf( '<%1$s %2$s>%3$s</%1$s>', $wrap, genesis_attr( 'site-title' ), $inside );
	 return $title;
}

// Change the footer text
function axtl_genboots_footer_creds_filter( $creds ) {
	$creds = '<div class="col-12 text-center"><a href="https://axolotl.ninja">Axolotl.Ninja</a> &middot; [footer_copyright]</div>';
	return $creds;
}

// Add widget support for front page
function axtl_genboots_front_page_genesis_meta() {

  if ( is_active_sidebar( 'hero-section' ) || is_active_sidebar( 'services-section' ) || is_active_sidebar( 'contact-section' ) || is_active_sidebar( 'testimonial-section') || is_active_sidebar( 'front-page-5') ) {

    // Add front-page body class
    add_filter( 'body_class', 'axtl_genboots_body_class' );
    function axtl_genboots_body_class( $classes ) {

      $classes[] = 'front-page';

      if ( is_active_sidebar( 'hero-section' ) ) {
        $classes[] .= 'with-page-header';
      }

      return $classes;

    }

    // Force full width content layout
    add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

    // Remove breadcrumbs
    remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
    

    // Remove the default Genesis loop
    remove_action( 'genesis_loop', 'genesis_do_loop' );

    // Remove .site-inner
    add_theme_support( 'genesis-structural-wraps', array( 'header', 'footer-widgets', 'footer' ) );

  }

}