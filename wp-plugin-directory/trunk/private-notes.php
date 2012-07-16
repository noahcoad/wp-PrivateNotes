<?php
/*
Plugin Name: Private Notes
Plugin URI: http://noahcoad.github.com/wp-PrivateNotes
Description: Makes text between note tags private to author only. Example: [note] my private note [/note]
Version: 1.1
Author: Noah Coad
Author URI: http://noahcoad.com
License: GPL2
*/


add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );

function prefix_add_my_stylesheet() {
  wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
  wp_enqueue_style( 'prefix-style' );
}

add_shortcode( 'note', 'sc_note' );

function sc_note( $atts, $content = null ) {
	if ( current_user_can( 'publish_posts' ))
		return '<div class="private-note"><h4>Private Note:</h4>'.$content.'</div>';
	return '';
}

?>