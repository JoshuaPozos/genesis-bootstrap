<?php
// Start the engine
include_once(get_template_directory() . '/lib/init.php');

$theme = wp_get_theme();

// Add Define constants
require_once 'inc/define.php';

// Add Bootstrap Attributes
require_once 'inc/bootstrap-atts.php';

// Add Doscisnes functions
require_once 'inc/genesis-bootstrap-functions.php';

// Add Genesis init hooks
require_once 'inc/genesis-hooks.php';

// HTML5 support
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery'));

// Enqueue Scripts & Styles
add_action('wp_enqueue_scripts', 'axtl_genboots_wp_enqueue_scripts');