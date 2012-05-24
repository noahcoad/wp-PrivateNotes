<?php
/*
Plugin Name: Private Notes
Plugin URI: http://noahcoad.com
Description: Makes text between note tags private to author only. Example: [note] my private note [/note]
Version: 1.0
Author: Noah Coad
Author URI: http://noahcoad.com
License: GPL2
*/
add_shortcode('note', 'sc_note');

function sc_note($atts, $content = null) {
	if (current_user_can('publish_posts'))
		return '<div class="note">'.$content.'</div>';
	return '';
}

?>