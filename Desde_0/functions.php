<?php
	define('TEMPPATH',get_bloginfo('stylesheet_directory'));
	define('IMAGES', TEMPPATH."/IMAGES");

	add_theme_support('nav_menus');
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
		array( 'main' => 'Main Nav' ));
	}


	if (function_exists('register_sidebar')) {
		register_sidebar( array(
			'name'          => __('Sidebar Primario','primary-sidebar'),
			'id'            => 'primary-widget-area',
			'description'   => __('The primary widget area','dir'),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			));
	}
?>