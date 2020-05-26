<?php

/*
* Template Name: Checkout
* description: Cart Template for Andra Woocommerce by Alessandra Milburn

*/
?>



<?php get_header(); ?>

<div class="container my-3">

  <!--PAGE TITLE-->
  <div class="text-center my-5">
    <h5 class="text-uppercase bold-text">
      <span class="pink-hl">&nbsp;CHECK OUT&nbsp;</span>
    </h5>
  </div>

  <!--PROGRESS BAR-->
  <div class="row text-center ml-5 pl-1 bold-text">
    <?php get_template_part('checkout/parts/progress-bar', 'page');?>
  </div>

  <!--ORDER DETAILS BAR-->
    <div class="row p-3">
      <div class="col-9 ">
        <div class="mx-4">
        <!--?php get_template_part('checkout/parts/shipping', 'page');?-->
        <!--?php get_template_part('checkout/parts/payment', 'page');?-->
        <!--?php get_template_part('checkout/parts/review', 'page');?-->
        <?php get_template_part('checkout/parts/order-submitted', 'page');?>

        </div>
      </div>
      
      <div class="col-3">
        <!--ORDER SUMMARY SECTION-->
        <?php get_template_part('checkout/parts/order-summary', 'page');?>
        <!--PAYMENT METHODS SECTION-->
        <?php get_template_part( 'cart/payment-method-mini', 'page' ); ?>
      </div>
    </div>
 

</div>
<div class="container-fluid">
  <div class="row m-0 bg-light-grey p-2">
    <?php get_template_part( 'checkout/parts/user-logout', 'page' ); ?>
  </div>
</div>
<?php get_footer(); ?>