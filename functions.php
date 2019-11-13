<?php
function startwordpress_scripts() {
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function startwordpress_google_fonts() {
	wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style('Cabin', 'https://fonts.googleapis.com/css?family=Raleway:400,700,800,900&display=swap');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );