<?php
function uni_files() {
	wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
	wp_enqueue_style('font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

	if(strstr($_SERVER['SERVER_NAME'], 'unitheme.local')) {
		wp_enqueue_script('uni_bundles', 'http://localhost:3000/bundled.js', NULL, '1.0.0', true);
	} else {
		wp_enqueue_script('our_vendors', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), NULL, '1.0.0', true);
		wp_enqueue_script('uni_scripts', get_theme_file_uri('/bundled-assets/scripts.6668f84cda2527886241.js'), NULL, '1.0.0', true);
		wp_enqueue_style('uni_styles', get_theme_file_uri('/bundled-assets/styles.6668f84cda2527886241.css'));
	}
}
add_action('wp_enqueue_scripts', 'uni_files');

function uni_features() {
	add_theme_support('title-tag');
	register_nav_menu('header_menu', "Header Menu");
	register_nav_menu('explore_menu', "Explore Menu");
	register_nav_menu('learn_menu', "Learn Menu");
}

add_action('after_setup_theme', 'uni_features');

