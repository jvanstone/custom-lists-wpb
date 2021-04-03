<?php
/**
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: checkmark — is a Gutenberg plugin created via create-guten-block.
 * Author: mrahmadawais, maedahbatool
 * Author URI: https://AhmadAwais.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Call the Javascript Block File
 *
 */
function customlist_enqueue() {
	wp_enqueue_script( 'customlists-script',
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
