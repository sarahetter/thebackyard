<?php

/**
 * Backyard2015 functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Backyard2015
 * @since 0.1.0
 */

// Useful global constants
define( 'BACKYARD_VERSION',      '0.1.0' );
define( 'BACKYARD_URL',          get_stylesheet_directory_uri() );
define( 'BACKYARD_TEMPLATE_URL', get_template_directory_uri() );
define( 'BACKYARD_PATH',         get_template_directory() . '/' );
define( 'BACKYARD_INC',          BACKYARD_PATH . 'includes/' );

// Include compartmentalized functions
require_once BACKYARD_INC . 'functions/core.php';

// Include lib classes

// Run the setup functions
TenUp\Backyard2015\Core\setup();