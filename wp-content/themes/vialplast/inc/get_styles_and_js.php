<?php

add_action('wp_enqueue_scripts', 'porto_child_css', 1001);

// Load CSS
function porto_child_css()
{
	// porto child theme styles
	wp_deregister_style('styles-child');
	wp_register_style('styles-child', esc_url(get_stylesheet_directory_uri()) . '/style.css');
	wp_register_style('aos-css', esc_url(get_stylesheet_directory_uri()) . '/node_modules/aos/dist/aos.css');
	wp_enqueue_style('styles-child');
	wp_enqueue_style('aos-css');

	// Jquery Easing
	wp_enqueue_script('easing', get_stylesheet_directory_uri() . '/node_modules/jquery.easing/jquery.easing.min.js');

	wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/node_modules/aos/dist/aos.js');

	if (is_page('empresa') || is_page('constructoras-municipios') || is_page('distribuidores')) {
		// slick-carousel JS
		wp_enqueue_script('slick-carousel', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js', array('jquery'), false, true);
		wp_enqueue_script('galeria', get_stylesheet_directory_uri() . '/js/galeria.js');
		// slick-carousel CSS
		wp_deregister_style('styles-slick-carousel');
		wp_register_style('styles-slick-carousel', esc_url(get_stylesheet_directory_uri()) . '/node_modules/slick-carousel/slick/slick.css');
		wp_enqueue_style('styles-slick-carousel');
		wp_deregister_style('styles-slick-carousel-theme');
		wp_register_style('styles-slick-carousel-theme', esc_url(get_stylesheet_directory_uri()) . '/node_modules/slick-carousel/slick/slick-theme.css');
		wp_enqueue_style('styles-slick-carousel-theme');
	}

	// Js Custom
	wp_enqueue_script('app_js', get_stylesheet_directory_uri() . '/js/app.js');

	// Bootstrap JS
	wp_enqueue_script('bootstrap5', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js');

	if (is_rtl()) {
		wp_deregister_style('styles-child-rtl');
		wp_register_style('styles-child-rtl', esc_url(get_stylesheet_directory_uri()) . '/style_rtl.css');
		wp_enqueue_style('styles-child-rtl');
	}
}
