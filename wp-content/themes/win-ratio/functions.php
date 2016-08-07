<?php

function setup()
{
	// Customize title tag.
	add_theme_support('title-tag');

	// Temporarily remove admin bar.
	add_filter('show_admin_bar', '__return_false');
}

add_action('init', 'setup');

// Deregister wp scripts we don't need.
function deregister_scripts()
{
	// Remove wp emoji...
	remove_action('wp_head', 'print_emoji_detection_script', 7);

	// Remove wp embed script...
	wp_deregister_script('wp-embed' );
}

add_action('init', 'deregister_scripts');

// Register editable header menu.
function register_menus()
{
	register_nav_menus([
		'header-menu' => __('Header_Menu')
	]);
}

add_action('init', 'register_menus');

// Modify menu markup to include BEM classes.
function custom_wp_nav_menu_objects($objects, $args)
{
	foreach($objects as $key => $item)
	{
		$objects[$key]->classes[] = 'Menu__item';
	}

	return $objects;
}

add_filter('wp_nav_menu_objects', 'custom_wp_nav_menu_objects', 10, 2);
