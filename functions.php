<?php

add_action('wp_enqueue_scripts', 'insert_css');

function insert_css()
{

	//########## Import all the stylesheets here like the example below ##########
	wp_register_style('amethyst', get_bloginfo('template_url') . '/assets/css/amethyst.min.css');
	wp_enqueue_style('amethyst');

	wp_register_style('fontawesome-css', get_bloginfo('template_url') . '/assets/css/fontawesome.min.css');
	wp_enqueue_style('fontawesome-css');

	wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
	wp_enqueue_style('fonts');

	// Import the WordPress stylesheet (style.css)
	wp_enqueue_style('style', get_stylesheet_uri());

	//########## Import all the javascript scripts here like the example below ##########
	wp_register_script('fontawesome-js', get_bloginfo('template_url') . '/assets/js/fontawesome.min.js');
	wp_enqueue_script('fontawesome-js');

	wp_register_script('jquery2', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('jquery2');
}

add_theme_support('menus');

register_nav_menus([
	'main-menu'  => 'Main navigation',
	'footer-menu'     => 'Footer navigation'
]);
