<?php

/*
* Template Name: Dresses
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
    <div class="grey">
      <a>Home >&nbsp;</a>
      <a>Category >&nbsp;</a>
      <a>Sub Category&nbsp;</a>
    </div>  
    <h5 class="text-uppercase bold-text">
      <span class="pink-hl">&nbsp;Dresses&nbsp;</span>
    </h5>
    <p>
      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    </p>
  </div>
  <!--PRODUCTS SECTION start-->
  <div class="row">
    <!--SORT & FILTER-->
    <section class="col-3 position-sticky">
      <?php get_template_part( 'shop/sorter', 'page' ); ?>
      <br>
      <?php get_template_part( 'shop/filter', 'page' ); ?>
    </section>
    <!--PRODUCTS-->    
    <section class="col-9">
      <?php get_template_part( 'shop/filtered-pages/dresses', 'page' ); ?>
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