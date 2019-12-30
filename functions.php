<?php

function load_stylesheets()
{

		wp_register_style('styles', get_template_directory_uri().'/css/styles.css', array(), 1, 'all');
		wp_enqueue_style('styles');

		wp_register_style('custom', get_template_directory_uri().'/custom.css', array(), 1, 'all');
		wp_enqueue_style('custom');

}

add_action('wp_enqueve_scripts','load_stylesheets');