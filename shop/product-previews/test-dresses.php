<!--INSERT CODE-->
<section class="container text-center ">
  <h5 class="text-uppercase bold-text my-4">
    <span class="pink-hl">&nbsp;
      Dresses 
    &nbsp;</span>
  </h5>
  <div class="row">
      <?php
        $args = array( 'post_type' => 'product', 
        'posts_per_page' => 1, 
        'product_cat' => 'dresses', 
        'orderby' => 'rand' 
      );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

        <div class="col-3">
        <?php get_template_part( 'components/single-product', 'page' ); ?>
        </div>
        </a>
        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div> <!--Item row-->
  <button class="white bg-black px-5 py-2">
    <a href="">
    SHOP NOW
    </a>
  </button>

</section> 