<?php

//Loads Styles
function load_stylesheets()
{

		wp_register_style('styles', get_template_directory_uri().'/css/styles.css', array(), 1, 'all');
		wp_enqueue_style('styles');

		wp_register_style('custom', get_template_directory_uri().'/custom.css', array(), 1, 'all');
		wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts','load_stylesheets');




//Loads Scripts

function addjs() 
{
		wp_register_script('menu-sidebar', get_template_directory_uri().'/js/menu-sidebar.js', array(), 1, 1, 1);
		wp_enqueue_script('menu-sidebar');

		wp_register_script('custom', get_template_directory_uri().'/custom.js', array(), 1, 1, 1);
		wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts','addjs');





//Custom imgage size
add_image_size('banner_about',1200, 600, false);


//Support menus navbar
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Register menus navbar
register_nav_menus(
	array(
		'top_menu' => __('Top Menu','theme'),
	)
);