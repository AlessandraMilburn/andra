<?php

/*
* Template Name: Customer Service
* description: Template for Andra Woocommerce by Alessandra Milburn

*/

get_header(); ?>

<?php if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>


<div class="container">

  <div class="row">
    <!--SORT & FILTER-->
    <section class="col-3 position-sticky">
      <?php get_template_part( 'customer-service/filter', 'page' ); ?>
    </section>
    <!--CONTENT start-->    
    <section class="col-9">
      <div>
        <?php 
        if (is_page('contact-us')) {
          get_template_part( 'customer-service/parts/contact-us', 'page' );
        } else if (is_page('orders-and-shipping')) {
          get_template_part( 'customer-service/parts/orders-and-shipping', 'page' );
        } else if (is_page('terms-and-conditions')) {
          get_template_part( 'customer-service/parts/terms-and-conditions', 'page' );
        } else if (is_page('faqs')) {
          get_template_part( 'customer-service/parts/faqs', 'page' );
        } else {
          get_template_part( 'customer-service/parts/privacy-policy', 'page' );
        } ?>
      </div>        
    </section>
  </div>
  <!--CONTENT end-->



</div>



<?php get_footer(); ?>