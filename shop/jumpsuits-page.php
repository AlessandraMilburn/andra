<?php

/*
* Template Name: Jumpsuits
* description: Category Template for Andra Woocommerce by Alessandra Milburn

*/

get_header(); ?>

<?php if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="container">

  <!--PAGE NAV-->
  <div class="text-center my-3">
  <?php get_template_part( 'shop/parts/shop-header', 'page' ); ?>
  </div>

  <!--PRODUCTS SECTION start-->
  <div class="row">
    <!--SORT & FILTER-->
    <section class="col-3 position-sticky">
      <?php get_template_part( 'shop/parts/sorter', 'page' ); ?>
      <br>
      <?php get_template_part( 'shop/parts/filter', 'page' ); ?>
    </section>
    <!--PRODUCTS-->    
    <section class="col-9">
      <?php get_template_part( 'shop/filtered-pages/jumpsuits', 'page' ); ?>
    </section>
  </div>
  <!--PRODUCT SECTION end-->

  <!--Recently Viewed-->
  <div class="row d-flex justify-content-center">
    <h5 class="text-uppercase bold-text my-4">
        <span class="pink-hl">&nbsp; Recently Viewed &nbsp;</span>
    </h5>
    <?php get_template_part( 'components/recently-viewed', 'page' ); ?>
  </div>

</div>



<?php get_footer(); ?>