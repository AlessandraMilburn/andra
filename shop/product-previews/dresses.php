<!--INSERT CODE-->
<section class="container text-center ">
  <h5 class="text-uppercase bold-text my-4">
    <span class="pink-hl">&nbsp;
      Dresses 
    &nbsp;</span>
  </h5>
  <div class="row">
  <?php
  //assigns variable to display 5 product post types in a page
  $params = array(
    'post_type' => 'product',
    'orderby' => 'post_date',
    'category_name' => 'dresses'
    );

  $wc_query = new WP_Query($params);

  //checks if there are products and will display the post if available
  if ($wc_query->have_posts()) : 
    while ($wc_query->have_posts()) : 
  $wc_query->the_post();

  //Product Variable
  $product = get_product(get_the_ID()); ?>

  <!--SINGLE PRODUCT start-->
    <div class="col-3">
      <?php get_template_part( 'components/single-product', 'page' ); ?>
    </div><!--Item column-->
  <!--SINGLE PRODUCT end-->

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
    <p>
        <?php _e( 'No Products'); ?>
    </p>
    <?php endif; ?>
  </div> <!--Item row-->
  <button class="white bg-black px-5 py-2">
    SHOP NOW
  </button

</section> <!--section-->


