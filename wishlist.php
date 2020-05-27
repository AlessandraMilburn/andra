<?php

/*
* Template Name: Wishlist Page
* description: Template for Andra Woocommerce by Alessandra Milburn

*/

get_header();


if ( ! defined( 'ABSPATH' ) ) {
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
      <span class="pink-hl">&nbsp;MY WISHLIST&nbsp;</span>
    </h5>
    <p>
      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    </p>
  </div>
  <!--PRODUCTS SECTION start-->
  <div class="row">
      <?php get_template_part( 'components/all-products-loop', 'page' ); ?>
    </section>
  </div>
  <!--PRODUCT SECTION end-->
</div>
<?php get_footer(); ?>