<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) { die; }
define('AXTLGENBOOTS_URI', get_stylesheet_directory_uri());
define('AXTLGENBOOTS_DIR', get_stylesheet_directory());
define('AXTLGENBOOTS_SLUG', 'genesis-bootstrap-theme');
define('CHILD_THEME_NAME', $theme->get('Name'));
define('CHILD_THEME_VERSION', $theme->get('Version'));