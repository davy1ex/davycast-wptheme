<?php

function enqueue_mytheme_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'index', get_template_directory_uri() . '/assets/css/index.css');
	
}


add_action( 'wp_enqueue_scripts', 'enqueue_mytheme_style' );