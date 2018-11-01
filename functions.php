<?php

function styles() {

	if (is_page('Homepage')) {
	    wp_register_style( 'carousel',  get_template_directory_uri() .'/css/carousel.css', array(), null, 'all' );
	    wp_enqueue_style( 'carousel' );

	    wp_register_style( 'normalize',  'https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css', array(), null, 'all' );
	    wp_enqueue_style( 'normalize' );

	    wp_register_style( 'slick',  'https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css', array(), null, 'all' );
	    wp_enqueue_style( 'slick' );

	}
  if (is_page('Despre')) {
      wp_register_style( 'gallery',  get_template_directory_uri() .'/css/gallery.css', array(), null, 'all' );
      wp_enqueue_style( 'gallery' );

      wp_register_style( 'camera',  get_template_directory_uri() .'/css/camera.css', array(), null, 'all' );
      wp_enqueue_style( 'camera' );
  }

    wp_register_style( 'style',  get_template_directory_uri() .'/css/style.css', array(), null, 'all' );
    wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'styles' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function create_post_type_photos() {
  register_post_type( 'photos',
    array(
      'labels' => array(
        'name' => __( 'Fotografii' ),
        'singular_name' => __( 'Fotografii' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type_photos' );

function create_post_type_studios() {
  register_post_type( 'studios',
    array(
      'labels' => array(
        'name' => __( 'Studiouri' ),
        'singular_name' => __( 'Studiouri' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type_studios' );

add_action('init', 'my_rem_editor_from_post_type');
function my_rem_editor_from_post_type() {
    remove_post_type_support( 'photos', 'editor' );
}

?>