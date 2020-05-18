<?php

/**
 * CSS and Javascript files
 * 
 */
function andra_files() {
  
  //FONTS
  wp_enqueue_style('Roboto-font', '//fonts.googleapis.com/css?family=Roboto:400&display=swap');

  //CSS
  wp_enqueue_style('andra_main_styles', get_stylesheet_uri());

  //Google Analytics
  wp_enqueue_script('googleanalytics', get_template_directory_uri() . '/js/googleanalytics.js', null, null); 

  //Javascript
  wp_enqueue_script('filter', get_template_directory_uri() . '/js/filter.js', null, null, true);
  wp_enqueue_script('reveal', get_template_directory_uri() . '/js/reveal.js', null, null, true);
  if (is_page('products')) {
    wp_enqueue_style('stars', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_script('starrating', get_template_directory_uri() . '/js/starrating.js', null, null, true);
    wp_enqueue_script('averagerating', get_template_directory_uri() . '/js/averagerating.js', null, null, true);

  };
}
add_action('wp_enqueue_scripts', 'andra_files');

/**
 * Admin Panel features
 * 
 */
function andra_features() {

  //header
  add_theme_support('title-tag');
  add_theme_support( 'custom-logo');

  //nav menu
  function register_my_menus() {
    //registers the menus
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

  //homepage
    $args = array(
      'flex-width'    => true,
      'width'         => 980,
      'flex-height'   => true,
      'height'        => 567,
    );
  add_theme_support( 'custom-header', $args );

  //page
  add_theme_support( 'post-thumbnails' );  
}

 add_action('after_setup_theme', 'andra_features');


/**
 * Load bootstrap from CDN
 * https://getbootstrap.com/
 *
 * Added functions to add the integrity and crossorigin attributes to the style and script tags.
 */
function enqueue_load_bootstrap() {
  // Add bootstrap CSS
  wp_register_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, NULL, 'all' );
  wp_enqueue_style( 'bootstrap-css' );

  // Add popper js
  wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', ['jquery'], NULL, true );
  wp_enqueue_script( 'popper-js' );

  // Add bootstrap js
  wp_register_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', ['jquery'], NULL, true );
  wp_enqueue_script( 'bootstrap-js' );
}

// Add integrity and cross origin attributes to the bootstrap css.
function add_bootstrap_css_attributes( $html, $handle ) {
  if ( $handle === 'bootstrap-css' ) {
      return str_replace( '/>', 'integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />', $html );
  }
  return $html;
}
add_filter( 'style_loader_tag', 'add_bootstrap_css_attributes', 10, 2 );

// Add integrity and cross origin attributes to the bootstrap script.
function add_bootstrap_script_attributes( $html, $handle ) {
  if ( $handle === 'bootstrap-js' ) {
      return str_replace( '></script>', ' integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>', $html );
  }
  return $html;
}
add_filter('script_loader_tag', 'add_bootstrap_script_attributes', 10, 2);

// Add integrity and cross origin attributes to the popper script.
function add_popper_script_attributes( $html, $handle ) {
  if ( $handle === 'popper-js' ) {
      return str_replace( '></script>', ' integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>', $html );
  }
  return $html;
}
add_filter('script_loader_tag', 'add_popper_script_attributes', 10, 2);

add_action( 'wp_enqueue_scripts', 'enqueue_load_bootstrap' );


?>

