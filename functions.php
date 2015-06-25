<?php

	function learningWordPress_resources() {
		
		wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
		wp_enqueue_style('font-awesome', get_template_directory_uri() . "/css/font-awesome.min.css");
		wp_enqueue_style('flickity-docs', get_template_directory_uri() . "/css/flickity-docs-slide.css");
		wp_enqueue_style('lightbox', get_template_directory_uri() . "/css/lightbox.css");
		wp_enqueue_style('style', get_template_directory_uri() . "/css/style.css");
		

		wp_enqueue_script('modernizer', get_template_directory_uri() . "/js/vendor/modernizr.js");
		wp_enqueue_script('jquery', get_template_directory_uri() . "/js/jquery.min.js");
		wp_enqueue_script('flickity', get_template_directory_uri() . "/js/flickity-docs.min.js");
		wp_enqueue_script('randomcores', get_template_directory_uri() . "/js/randomcores.js");
		
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