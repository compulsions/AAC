<?php

	function learningWordPress_resources() {
		
		wp_enqueue_style('style', get_template_directory_uri() . "/css/style.css");
		
	}

	add_action('wp_enqueue_scripts', 'learningWordPress_resources');

	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

	// Permite os posts terem thumbnails (usado para os logos dos núcleos/secções culturais/etc)
	// https://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');

?>