<?php
/**
 * Plugin Name: Custom Lists Block
 * Plugin URI: https://github.com/jvanstone/custom-lists-wpb
 * Description: This is an extension for the WordPress Gutenberg blocks. This expands on the core functionailty of the WordPress list block and adds unique list outputs.
 * Author: vanstoneonline
 * Author URI: https://vanstoneonline.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Call the Javascript Block File
 *
 */
function customheader_enqueue() {
	wp_enqueue_script( 'customheaders-script',
		plugins_url( 'customheader.js', __FILE__ ),
		array( 'wp-blocks' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'customheader_enqueue' );

/**
 * Call the stylesheet for Block
 *
 */
function customheader_stylesheet() {
	wp_enqueue_style( 'customheaders-style', plugins_url( 'style.css', __FILE__ ), false );
}
add_action( 'enqueue_block_assets', 'customheader_stylesheet' );


register_block_pattern(
	'canadainfo/political-party',
	array(
		'title'       => __( 'Political Party', 'canadainfo' ),
		'categories'  => array( 'text' ),
		'description' => _x( 'Political Party', 'Block pattern description', 'canadainfo' ),
		'content'     => '<!-- wp:heading -->
		<h2>Canada\'s Political Parties</h2>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph -->
		<p>Canadian Political Parties hold power in the Canadian system of Government. The Canadian Parliamentary system would not properly function without them. The Political parties are organizations that pursue to control the Government, and participants in public affairs by nominating candidates for election. By voting, Canadian citizens help make a difference in Canada.</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:html -->
		<div id="canadian-politic-parties">
		
			<div class="party">
				<div class="colorblock liberal"></div>
				<img src="https://canadainfo.org/wp-content/uploads/2021/04/Liberal.png" alt="Liberal Party" class="party-logo">
				<p>Justin Trudeau</p>
				<div class="colorblock-bottom liberal"></div>
			</div>
		
			<div class="party">
				<div class="colorblock conservative"></div>
				<img src="https://canadainfo.org/wp-content/uploads/2021/04/Conservative.png" alt="Conservative Party of Canada" class="party-logo">
				<p> Erin O’Toole</p>
				<div class="colorblock-bottom conservative"></div>
			</div>
		
			<div class="party">
				<div class="colorblock ndp"></div>
				<img src="https://canadainfo.org/wp-content/uploads/2021/04/NDP.png" alt="New Democratic Party" class="party-logo">
				<p> Jagmeet Singh</p>
				<div class="colorblock-bottom ndp"></div>
			</div>
		
			<div class="party">
				<div class="colorblock bloc"></div>
			   <img src="https://canadainfo.org/wp-content/uploads/2021/04/Bloc.png" alt="Bloc Quebecois" class="party-logo">
			   <p>Yves-François Blanchet</p>
				<div class="colorblock-bottom bloc"></div>
			</div>
		
			<div class="party">
				<div class="colorblock people"></div>
			  <img src="https://canadainfo.org/wp-content/uploads/2021/04/People.png" alt="Peoples Party of Canada" class="party-logo">
			  <p>Maxime Bernier</p>
				<div class="colorblock-bottom people"></div>
			</div>
		
			<div class="party">
				<div class="colorblock green"></div>
				<img src="https://canadainfo.org/wp-content/uploads/2021/04/Green.png" alt="Green Party of Canada" class="party-logo">
				<p>Annamie Paul</p>
				<div class="colorblock-bottom green"></div>
			</div>
		
		</div>
		<!-- /wp:html -->
		
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><em>As of January 1st, 2021</em></p>
		<!-- /wp:paragraph -->',
	)
);

?>