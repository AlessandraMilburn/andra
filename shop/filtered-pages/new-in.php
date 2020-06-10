<div class="row text-center">
      <?php
        $args = array( 
        'post_type' => 'product', 
        'product_cat' => 'new-in', 
        'orderby' => 'rand' 
      );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="col-4">
          <div class="mb-2">
            <?php get_template_part( 'components/single-product', 'page' ); ?>
          </div>
          <form class="cart " method="post" enctype="multipart/form-data">
            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
            <button class="bg-black white py-2 px-4 light-text" type="submit"> <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></button>
          </form>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div> <!--Item row-->