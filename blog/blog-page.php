<?php

/*
* Template Name: Blog
* description: Template for Andra Woocommerce by Alessandra Milburn

*/

get_header(); ?>

<div class="container">
  <div class="row">
    <?php get_template_part( 'blog/single', 'page' ); ?>
  </div>
  <div class="row my-3">
    <?php get_template_part( 'blog/shop-her-look', 'page' ); ?>
  </div>
  <div class="row my-3">
    <?php get_template_part( 'blog/blog-preview', 'page' ); ?>      
  </div>
</div>

<?php get_footer(); ?>