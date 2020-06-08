<?php

/**
 * Load bootstrap from CDN
 * https://getbootstrap.com/
 *
 * Added functions to add the integrity and crossorigin attributes to the style and script tags.
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

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


/**
 * CSS and Javascript files
 * 
 */

function andra_files() {
  
  //FONTS
  wp_enqueue_style('Cabin', '//fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet');
  wp_enqueue_style('Source Sans Pro', '//fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet');

  //CSS
  wp_enqueue_style('andra_main_styles', get_stylesheet_uri());
  wp_enqueue_style( 'prefix-font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css', array(), '5.0.6' );

  //Google Analytics
  wp_enqueue_script('googleanalytics', get_template_directory_uri() . '/assets/js/googleanalytics.js', null, null); 

  //Javascript
  wp_enqueue_script('favorites', get_template_directory_uri() . '/assets/js/favorites.js', null, null, true);
  wp_enqueue_script('switch-visible', get_template_directory_uri() . '/assets/js/switch-visible.js', null, null, true);

}
add_action('wp_enqueue_scripts', 'andra_files');


/**
 * WooCommerce 
 * 
 */

// Removing Wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'andra_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'andra_wrapper_end', 10);

function andra_wrapper_start() {
    echo '<section id="main">';
}

function andra_wrapper_end() {
    echo '</section>';
}

// Declaring in functions
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );

    //Adding display (removed due to low image quality)
  /* add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 150,
    'single_image_width'    => 300,

    'product_grid'          => array(
        'default_rows'    => 3,
        'min_rows'        => 2,
        'max_rows'        => 8,
        'default_columns' => 4,
        'min_columns'     => 2,
        'max_columns'     => 5,
    ),
  ) ); */

  add_theme_support( 'wc-product-gallery-zoom' );
  add_theme_support( 'wc-product-gallery-lightbox' );
  add_theme_support( 'wc-product-gallery-slider' );
  add_filter( 'woocommerce_enqueue_styles', '__return_false' );


    /**
   * Ensure cart contents update when products are added to the cart via AJAX
   */
  function my_header_add_to_cart_fragment( $fragments ) {
  
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php

    $fragments['a.cart-contents'] = ob_get_clean();
    
    return $fragments;
  }
  add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );
  
  add_filter('woocommerce_attribute_show_in_nav_menus', 'wc_reg_for_menus', 1, 2);

  function wc_reg_for_menus( $register, $name = '' ) {
      if ( $name == 'pa_size' ) $register = true;
      return $register;
  }

}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



/**
 * Admin Panel features
 * 
 */
function andra_features() {

  //homepage
  // =============================================================================
  
  //website title
  add_theme_support('title-tag');

  //logo 
  add_theme_support( 'custom-logo');

  //header
  $args = array(
    'flex-width'    => true,
    'width'         => 1280,
    'flex-height'   => true,
    'height'        => 116,
  );
  add_theme_support( 'custom-header', $args );

  //nav menu
  // =============================================================================

  function register_my_menus() {
    //registers the menus
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'user-menu' => __( 'User Menu' ),
        'customer-service-menu' => __( 'Customer Service Menu' ),
        'about-us-menu' => __( 'About Us Menu' )
        )
     );
   }
   add_action( 'init', 'register_my_menus' );


  //page
  // =============================================================================
  add_theme_support( 'post-thumbnails' );  

}

 add_action('after_setup_theme', 'andra_features'); 




?>

