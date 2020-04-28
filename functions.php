<?php

	// LOADING FILES
	function uni_files() {
		// LOADING SCRIPS
		wp_enqueue_script('uni-script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);

		// LOADING STYLES
		wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('uni_main_style', get_stylesheet_uri(), NULL, microtime());
	}

	add_action('wp_enqueue_scripts','uni_files');

	function uni_features() {
		add_theme_support('title-tag');
		register_nav_menu('headerMenu', 'Header Menu');
		register_nav_menu('footerMenu1', 'Explore Menu');
		register_nav_menu('footerMenu2', 'Learn Menu');
	}

	add_action('after_setup_theme','uni_features');

?>