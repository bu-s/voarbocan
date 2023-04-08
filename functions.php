<?php
	
	// Load in the CSS styles from the child theme
	
	add_action( 'wp_enqueue_scripts', 'zsyl_enqueue_assets' );

function zsyl_enqueue_assets() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}


	// Load in the CSS styles from the child theme to the editor
/*
	
	add_action( 'admin_init', 'zsyl_editor_styles' );

function zysl_editor_styles() {
	add_editor_style( [
		get_stylesheet_uri()
	] );
}
*/