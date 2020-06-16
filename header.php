<?php
/**
 * The Header for our theme.
 *
 *
 * @package Andra
 */
?>

<!DOCTYPE html>

<html>
  <head>
    <?php wp_head(); ?>  
  </head>

  <body>
<!-- 
**Theme Menu
-->
    <header>
      <!--ANNOUNCEMENT SECTION-->
      <div class="announcement bg-black white">
       This is a Demo website. For <a target="_blank" href="https://www.alessandramilburn.com" class="pink-hl-s">Alessandra Milburn's Porfolio</a> purposes only.
      </div>
      <nav class="container-fluid" id="nav" style="background-image: url('<?php header_image(); ?>');" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
        <div class="row">
          <div class="col-5"></div>
          <div class="col-2 mt-2 mb-1" id="logo">
          <?php the_custom_logo(); ?>  
          </div>
          <div class="col-2 p-0"></div>
          <div class="col-3 ">
            <div class="container py-3">
              <div class="row d-flex justify-content-end">
                <div class="col-8 p-1">
                  <?php wp_nav_menu( array( 'theme_location' => 'user-menu' ) );?>
                  <?php global $woocommerce; ?>
                  <a class="your-class-name xs-text" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
                   title="<?php _e('Cart View', 'woothemes'); ?>">
                    <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'),
                    $woocommerce->cart->cart_contents_count);?>  - <?php echo $woocommerce->cart->get_cart_total(); ?>
                  </a>
                </div>
                <!--div class="col-4 py-3 px-0 xs-text"><span class="bold-text ">(1)</span> ($123.00)</div-->
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-0 py-1 ">
          <div class="col-2"></div>
          <div class="col-8">
            <div class="container">
              <div class="row mb-0 hover nav-button reg-text ">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
                <div class="col-2"><a>SEARCH BAR</a></div>  
              </div>     
            </div>  
          <div>
          <div class="col-2"><div>
          </div>
        </div>
      </nav>


    </header>
<main>
