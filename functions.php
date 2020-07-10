<?php 
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
function basic_custom_logo_setup() {
  $defaults = array(
    'height'      => 150,
    'width'       => 450,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'basic_custom_logo_setup' );
function basic_widgets_init() {
  register_sidebar( array(
      'name'          => __( 'Primary Sidebar', 'basic' ),
      'id'            => 'sidebar-1',
      'description'            => 'Yo chai babal sidebar ho.',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="widget-title cat-title">',
      'after_title'   => '</h3>',
  ) );
  register_sidebar( array(
    'name'          => __( 'Logo right Sidebar', 'basic' ),
    'id'            => 'logo-right',
    'description'            => 'Yo logo ko right ko banner ho.',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title cat-title">',
    'after_title'   => '</h3>',
) );
}
add_action( 'widgets_init', 'basic_widgets_init' );
function add_theme_scripts() {
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css',array(),'5.0.0-alpha1',"all" );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array (), '1.16.0', true);
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', array (), '5.0.0-alpha1', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

require_once get_template_directory(). '/paging.php';