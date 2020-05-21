<?php

/*
* Template Name: Customer Service
* description: Template for Andra Woocommerce by Alessandra Milburn

*/

get_header(); ?>

<div class="container">

  <div class="row">
    <!--SORT & FILTER-->
    <section class="col-3 position-sticky">
      <?php get_template_part( 'customer-service/filter', 'page' ); ?>
    </section>
    <!--CONTENT start-->    
    <section class="col-9">
      <div>
        <?php get_template_part( 'customer-service/parts/contact-us', 'page' ); ?>
      </div>      
      <div>
        <?php get_template_part( 'customer-service/parts/faqs', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'customer-service/parts/orders-and-shipping', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'customer-service/parts/terms-and-conditions', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'customer-service/parts/privacy-policy', 'page' ); ?>
      </div>      
    </section>
  </div>
  <!--CONTENT end-->



</div>



<?php get_footer(); ?>