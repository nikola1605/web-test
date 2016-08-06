<?php

add_action( 'after_setup_theme', 'browncoats_theme_setup' );

function browncoats_theme_setup() {
	global $content_width;

	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
		$content_width = 600;

	/* Add theme support for automatic feed links. */	
	add_theme_support( 'automatic-feed-links' );

	/* Add theme support for post thumbnails (featured images). */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'hp_post', 160, 100 , true );
	add_image_size( 'coach', 264, 264 , true );
	add_image_size( 'slider_img', 1230, 490 , true );
	add_image_size( 'blog_small', 265, 145 , true );
	add_image_size( 'blog_big', 632, 375 , true );
	/* Add theme support for custom backgrounds. */
	add_custom_background();

	/* Add your nav menus function to the 'init' action hook. */
	add_action( 'init', 'browncoats_register_menus' );

	/* Add your sidebars function to the 'widgets_init' action hook. */
	add_action( 'widgets_init', 'browncoats_register_sidebars' );

	/* Load JavaScript files on the 'wp_enqueue_scripts' action hook. */
	add_action( 'wp_enqueue_scripts', 'browncoats_load_scripts' );
}

function browncoats_register_menus() {
	/* Register nav menus using register_nav_menu() or register_nav_menus() here. */
	register_nav_menus(
  		array(
  		  'primary_menu' => 'Primary menu'
  		)
  	);
	
}
  
  add_filter("the_content", "plugin_myContentFilter");

  function plugin_myContentFilter($content)
  {
    // Take the existing content and return a subset of it
    return substr($content, 0, 400);
  }

function browncoats_register_sidebars() {
	/* Register dynamic sidebars using register_sidebar() here. */
}

function browncoats_load_scripts() {
	/* Enqueue custom Javascript here using wp_enqueue_script(). */

	/* Load the comment reply JavaScript. */
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
		wp_enqueue_script( 'comment-reply' );
}



?>