<?php get_header(); ?>

<div class="container">

  <!--PAGE NAV-->
  <div class="text-center my-3">
    <div class="grey">
      <a>Home >&nbsp;</a>
      <a>Category >&nbsp;</a>
      <a>Sub Category&nbsp;</a>
    </div>  
    <h5 class="text-uppercase bold-text">
      <span class="pink-hl">&nbsp;CLOTHING AND ACCESSORIES&nbsp;</span>
    </h5>
    <p>
      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    </p>
  </div>
  <!--PRODUCTS SECTION start-->
  <div class="row">
    <!--SORT & FILTER-->
    <section class="col-3 position-sticky">
      <?php get_template_part( 'template-parts/components/sorter', 'page' ); ?>
      <br>
      <?php get_template_part( 'template-parts/components/filter', 'page' ); ?>
    </section>
    <!--PRODUCTS-->    
    <section class="col-9">
      <?php get_template_part( 'template-parts/products/all-products', 'page' ); ?>
    </section>
  </div>
  <!--PRODUCT SECTION end-->

  <!--Recently Viewed-->
  <div class="row">
    <?php get_template_part( 'template-parts/products/recently-viewed', 'page' ); ?>
  </div>

</div>



<?php get_footer(); ?>