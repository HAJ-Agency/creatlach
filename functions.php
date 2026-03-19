<?php
/**
 * Creatlach theme functions and definitions.
 *
 * @package potential
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function creatlach_setup() {
	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for editor styles.
	add_editor_style( 'style.css' );

	// Disable core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'creatlach_setup' );

/**
 * Enqueue theme assets.
 */
function creatlach_enqueue_assets() {
	wp_enqueue_style(
		'creatlach-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'creatlach_enqueue_assets' );

/**
 * Register block pattern categories.
 */
function creatlach_register_pattern_categories() {
	$categories = array(
		'creatlach-hero'     => __( 'Hero & Header', 'potential' ),
		'creatlach-content'  => __( 'Content', 'potential' ),
		'creatlach-cta'      => __( 'Call to Action', 'potential' ),
		'creatlach-gallery'  => __( 'Gallery & Media', 'potential' ),
		'creatlach-text'     => __( 'Text & Typography', 'potential' ),
		'creatlach-footer'   => __( 'Footer', 'potential' ),
		'creatlach-blog'     => __( 'Blog & Archive', 'potential' ),
		'creatlach-commerce' => __( 'Commerce', 'potential' ),
		'creatlach-utility'  => __( 'Utility', 'potential' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'creatlach_register_pattern_categories' );
