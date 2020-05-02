<?php

	// CUSTOM ASSETS
	function uni_files() {
		// LOADING SCRIPS
		wp_enqueue_script('uni-script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);

		// LOADING STYLES
		wp_enqueue_style('font_awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('google_font', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('uni_main_style', get_stylesheet_uri(), NULL, microtime());
	}

	// LOADING CUSTOM ASSETS
	add_action('wp_enqueue_scripts','uni_files');


	// WP MENU OPTIONS
	function uni_features() {
		add_theme_support('title-tag');
		register_nav_menu('headerMenu', 'Header Menu');
		register_nav_menu('footerMenu1', 'Explore Menu');
		register_nav_menu('footerMenu2', 'Learn Menu');
	}

	// LOADING WP MENU OPTIONS IN THE UI
	add_action('after_setup_theme','uni_features');

	/*
		SHOULD GO UNDER THE MU-PLUGINS
		FOLDER. FOR THE SAKE OF THE COURSE
		AND SAVING TO REPO, ADDING THE CODE HERE
	*/
	// EVENT CUSTOM POST TYPE
	function uni_post_types() {
		register_post_type('event', array(
			'public' => true,
			'menu_icon' => 'dashicons-calendar',
			'labels' => array(
				'name' => 'Events',
				'add_new_item' => 'Add New Event',
				'edit_item' => 'Edit Event',
				'all_items' => 'All Events',
				'singular_name' => 'Event'
			)
		));
	}

	// LOADING EVENT CUSTOM POST TYPE
	add_action('init', 'uni_post_types');
