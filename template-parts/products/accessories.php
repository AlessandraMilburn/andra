<!--INSERT CODE-->
<section class="container text-center ">
  <h5 class="text-uppercase bold-text my-4">
    <span class="pink-hl">&nbsp;
      Accessories 
    &nbsp;</span>
  </h5>
  <div class="row">
  <?php
  //assigns variable to display 5 product post types in a page
  $params = array(
    'post_type' => 'product',
    'orderby' => 'post_date',
    'category_name' => 'accessories'
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
      <a href="<?php the_permalink(); ?>">
      <div>
        <i class="heart fa fa-heart-o"></i>
      </div>
        <!--PRODUCT IMAGE-->
        <div id="single-product" class="m-2 p-2">
          <?php the_post_thumbnail(); ?>
        </div>

        <!--Product Name-->
        <h6 class="black text-uppercase m-0 hover">
          <span><?php the_title();  ?></span>
        </h6>

        <!--Short Description-->
        <div class="black">
          <?php the_excerpt(); ?>
        </div>

        <!--Price--> 
        <p class="price">$
          <?php echo $product->get_price();?>
        </p>
        
      </a>
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


