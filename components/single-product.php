      <div class="single-product">
        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
          <div>
            <i class="heart fa fa-heart-o"></i>
          </div>
          <!--PRODUCT IMAGE-->
          <div id="product-image-preview" class="my-2">
            <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
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
          
          <?php 
          //Product Variable
          $product = get_product(get_the_ID());
            echo $product->get_price();?>
          </p>
        </a>
      </div>
        
