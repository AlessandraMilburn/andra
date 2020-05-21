      <div class="single-product">
        <a href="<?php the_permalink(); ?>">
          <div>
            <i class="heart fa fa-heart-o"></i>
          </div>
          <!--PRODUCT IMAGE-->
          <div class="my-2">
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
          
          <?php 
          //Product Variable
          $product = get_product(get_the_ID());
            echo $product->get_price();?>
          </p>
        </a>
      </div>
        
