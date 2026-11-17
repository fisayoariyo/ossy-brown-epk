<?php
/**
 * Ossy Brown EPK theme.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ossy_epk_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'ossy_epk_setup' );

function ossy_epk_assets() {
	wp_enqueue_style(
		'ossy-epk-fonts',
		'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300&family=Playfair+Display:wght@500;600;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'ossy-epk',
		get_template_directory_uri() . '/assets/css/epk.css',
		array( 'ossy-epk-fonts' ),
		'1.2.1'
	);
	wp_enqueue_script(
		'ossy-epk',
		get_template_directory_uri() . '/assets/js/epk.js',
		array(),
		'1.2.1',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ossy_epk_assets' );

function ossy_epk_document_title( $title ) {
	return array(
		'title' => 'Ossy Brown — Electronic Press Kit',
	);
}
add_filter( 'document_title_parts', 'ossy_epk_document_title' );
