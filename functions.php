<?php

	function uni_files() {
		wp_enqueue_style('uni_main_style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts','uni_files');

?>