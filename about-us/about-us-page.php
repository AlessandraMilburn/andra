<?php

/*
* Template Name: About Us
* description: Template for Andra Woocommerce by Alessandra Milburn

*/

get_header(); ?>

<div class="container">

  <div class="row">
    <!--SORT & FILTER-->
    <section class="col-3 position-sticky">
        <?php get_template_part( 'about-us/filter', 'page' ); ?>
    </section>
    <!--CONTENT start-->    
    <section class="col-9">
      <div>
        <?php get_template_part( 'about-us/parts/about-us', 'page' ); ?>
      </div>      
      <div>
        <?php get_template_part( 'about-us/parts/affiliate-program', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'about-us/parts/sitemap', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'about-us/parts/careers', 'page' ); ?>
      </div>
    </section>
  </div>
  <!--CONTENT end-->



</div>



<?php get_footer(); ?>