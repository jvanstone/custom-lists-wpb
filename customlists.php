<?php
/**
 * Plugin Name: Custom Lists
 * Author:      Jason Vanstone <jason@vanstoneonline.com>
 *
 */

/**
 * Call the Javascript Block File
 *
 */
function customlist_enqueue() {
	wp_enqueue_script( 'checkmark-script',
		plugins_url( 'customlists.js', __FILE__ ),
		array( 'wp-blocks' ),
		false
	);
}
add_action( 'enqueue_block_editor_assets', 'customlist_enqueue' );

/**
 * Call the stylesheet for Block
 *
 */
function customlist_stylesheet() {
	wp_enqueue_style( 'customlist-style', plugins_url( 'style.css', __FILE__ ), false );
}
add_action( 'enqueue_block_assets', 'customlist_stylesheet' );
