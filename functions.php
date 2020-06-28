<?php

add_action( 'wp_enqueue_scripts', 'enqueue_mytheme_style' );
add_action( 'wp_enqueue_scripts', 'enqueue_mytheme_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'widgets_init', 'register_my_widgets' );


function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'sample sidebar',
		'id'            => "sample_sidebar",
		'description'   => 'sample desc',
		'class'         => '',
		// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
		// 'after_widget'  => "</li>\n",
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => "</h2>\n",
	) );
}

function enqueue_mytheme_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'index', get_template_directory_uri() . '/assets/css/index.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css' );
	// <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    // <link rel="stylesheet" href="css/aos.css"> -->
}

function enqueue_mytheme_scripts() {
	wp_enqueue_script('style', get_template_directory_uri() . '/assets/js/style.js', '', '', true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', '', '', true);
	wp_enqueue_script('jquerydev', get_template_directory_uri() . '/assets/js/jquerydev.js', '', '', true);
	wp_enqueue_script('responsive', get_template_directory_uri() . '/assets/js/responsive.js', '', '', true);
}

function theme_register_nav_menu() {
	register_nav_menu( 'mainmenu', 'menu in header' );
}