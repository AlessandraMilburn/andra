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
      <?php get_template_part( 'template-parts/page/customer-service/filter', 'page' ); ?>
    </section>
    <!--CONTENT start-->    
    <section class="col-9">
      <div>
        <?php 
        if (is_page('contact-us')) {
          get_template_part( 'template-parts/page/customer-service/contact-us', 'contact-us' );
        } else if (is_page('orders-and-shipping')) {
          get_template_part( 'template-parts/page/customer-service/orders-and-shipping', 'orders-and-shipping' );
        } else if (is_page('terms-and-conditions')) {
          get_template_part( 'template-parts/page/customer-service/terms-and-conditions', 'terms-and-conditions' );
        } else if (is_page('faqs')) {
          get_template_part( 'template-parts/page/customer-service/faqs', 'faqs' );
        } else {
          get_template_part( 'template-parts/page/customer-service/privacy-policy', 'privacy-policy' );
        } ?>
      </div>        
    </section>
  </div>
  <!--CONTENT end-->



</div>



<?php get_footer(); ?>