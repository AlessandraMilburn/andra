<?php

/*
* Template Name: About Us
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
    <section class="col-2 position-sticky">
        <?php get_template_part( 'about-us/filter', 'page' ); ?>
    </section>
    <!--CONTENT start-->    
    <section class="col-10">
      <div class="container">
        <?php 
        if (is_page('about-us')) {
          get_template_part( 'about-us/parts/about-us', 'page' ); 
        } else if (is_page('careers')) {
          get_template_part( 'about-us/parts/careers', 'page' ); 
        } else if (is_page('sitemap')) {
          get_template_part( 'about-us/parts/sitemap', 'page' ); 
        } else {
          get_template_part( 'about-us/parts/affiliate-program', 'page' );
        } ?>
      </div>      
    </section>
  </div>
  <!--CONTENT end-->



</div>



<?php get_footer(); ?>