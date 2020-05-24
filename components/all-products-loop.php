<!--INSERT CODE-->
<section class="container text-center ">

  <div class="row">
  <?php
  //assigns variable to display 5 product post types in a page
  $params = array(
    'post_type' => 'product');
  $wc_query = new WP_Query($params);

  //checks if there are products and will display the post if available
  if ($wc_query->have_posts()) : 
    while ($wc_query->have_posts()) : 
  $wc_query->the_post();

  //Product Variable
  $product = get_product(get_the_ID()); ?>

  <!--SINGLE PRODUCT start-->
    <div class="col-4 mb-5">
      <div class="mb-2">
      <?php get_template_part( 'components/single-product', 'page' ); ?>
      </div>
      <form class="cart " method="post" enctype="multipart/form-data">
        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
        <button class="bg-black white py-2 px-4 light-text" type="submit"> <?php echo $product->single_add_to_cart_text(); ?> </button>
      </form>
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


