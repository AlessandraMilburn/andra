<?php

/*
* Template Name: Cart
* description: Cart Template for Andra Woocommerce by Alessandra Milburn

*/

get_header(); ?>

<?php if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="container">

  <!--PAGE TITLE-->
  <div class="text-center my-5">
    <h5 class="text-uppercase bold-text">
      <span class="pink-hl">&nbsp;SHOPPING CART&nbsp;</span>
    </h5>
  </div>
  <!--PRODUCTS SECTION-->
  <div class="row">
    <section class="col-9">
      <?php
      //grabs the items that's been added to the cart (not set yet)
          $args = array( 
          'post_type' => 'product', 
          'product_cat' => 'dresses', 
          'orderby' => 'rand' 
        );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          
        <?php get_template_part( 'cart/item-preview', 'page' ); ?>
        
        <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </section>



    <!--ORDER SUMMARY SECTION-->
    <section class="col-3">
      <?php get_template_part( 'cart/order-summary', 'page' ); ?>
      <!--PAYMENT METHODS SECTION-->
      <?php get_template_part( 'cart/payment-method-mini', 'page' ); ?>
    </section>
  </div>
  <div class="d-flex justify-content-center">
    <button class="bg-light-grey py-2 px-3 m-3">
      <p>Continue Shopping</p>
    </button>
  </div>
  <section class="text-center">
    <?php get_template_part( 'components/recentlyandrelated', 'page' ); ?>
  </section>
</div>

<?php get_footer(); ?>