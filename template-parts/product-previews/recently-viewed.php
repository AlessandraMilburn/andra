<!--INSERT CODE-->
<section class="container text-center mb-3">
  <div class="row">
  <?php
  //assigns variable to display 5 product post types in a page
  $params = array(
    'posts_per_page' => 4,
    'post_type' => 'product');
  $wc_query = new WP_Query($params);

  //checks if there are products and will display the post if available
  if ($wc_query->have_posts()) : 
    while ($wc_query->have_posts()) : 
  $wc_query->the_post(); ?>



  <!--SINGLE PRODUCT start-->
    <div class="col-3">
      <?php get_template_part( 'template-parts/product-previews/single-product', 'page' ); ?>
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

</section> <!--section-->


