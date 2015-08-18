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

require "controller/controller.inc.php";
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

//REGISTER NAV
function register_primary_nav_menu() {
	register_nav_menu('header-menu',__( 'Primary Navigation Menu' ));
}
add_action( 'init', 'register_primary_nav_menu');



// REMOVE WIDTH AND HEIGHT ATTRIBUTES ON THUMBNAILS
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}

//IMAGE THUMBNAIL SETUP
add_action( 'after_setup_theme', 'image_setup' );
function image_setup() {
	add_image_size( 'tall-images', 275, 400, true ); //(cropped)
}

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {
	// Define the style_formats array
	$style_formats = array(
		// Each array child is a format with it's own settings
		array(
			'title' => '.lastword',
			'block' => 'span',
			'classes' => 'lastword',
			'wrapper' => true,
		)
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

//ACF Collapser temp fix
add_filter('acf/compatibility/field_wrapper_class', '__return_true');