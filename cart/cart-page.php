<?php

/*
* Template Name: Cart
* description: Cart Template for Andra Woocommerce by Alessandra Milburn

*/

get_header(); ?>

<div class="container">

  <!--PAGE TITLE-->
  <div class="text-center my-5">
    <h5 class="text-uppercase bold-text">
      <span class="pink-hl">&nbsp;CART&nbsp;</span>
    </h5>
  </div>
  <!--PRODUCTS SECTION-->
  <div class="row">
    <section class="col-8">
      <?php get_template_part( 'cart/item-preview', 'page' ); ?>
    </section>
    <!--ORDER SUMMARY SECTION-->
    <section class="col-4">
      <?php get_template_part( 'cart/order-summary', 'page' ); ?>
    </section>
    <!--PAYMENT METHODS SECTION-->
    <section class="col-5">
      <?php get_template_part( 'cart/payment-methods', 'page' ); ?>
    </section>
  </div>
  <div class="d-flex justify-content-center">
    <button class="bg-grey py-2 px-3 m-3">
      <p>Continue Shopping</p>
    </button>
  </div>
  <section class="text-center">
    <?php get_template_part( 'template-parts/product-previews/recentlyandrelated', 'page' ); ?>
  </section>
</div>

<?php get_footer(); ?>