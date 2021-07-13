<?php
function uni_files() {
	wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=yourKeyHere', NULL, '1.0', true);

  wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));

  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));

  wp_localize_script('main-university-js', 'universityData', array(

    'root_url' => get_site_url(),

    'nonce' => wp_create_nonce('wp_rest')

  ));
}
add_action('wp_enqueue_scripts', 'uni_files');

function uni_features() {
	add_theme_support('title-tag');
	register_nav_menu('header_menu', "Header Menu");
	register_nav_menu('explore_menu', "Explore Menu");
	register_nav_menu('learn_menu', "Learn Menu");
}

add_action('after_setup_theme', 'uni_features');

