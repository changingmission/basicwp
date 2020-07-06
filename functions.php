<?php 
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
function add_theme_scripts() {
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css',array(),'5.0.0-alpha1',"all" );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array (), '1.16.0', true);
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', array (), '5.0.0-alpha1', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );