<div class="container border py-3">
  
    <div class="row">
      <div class="position-absolute mr-4 pt-2 pr-1 top-0 right-0">X</div>
      <div class="col-4">
        <img <?php the_post_thumbnail(); ?>/>
      </div>
      <div class="col-4">
        <div class="row">
          <div class="col-8">
            <a href="<?php the_permalink(); ?>">
              <h6 class="mb-0"><?php the_title();  ?>Product Name</h6>
            </a>
            <p><?php the_excerpt(); ?>product type</p>
            <p>Product ID: 12345<?php the_ID(); ?></p>
          </div>
          <div class="col-4">
            <p class="price bold-text">$
            <!--?php 
            $product = get_product(get_the_ID());
            echo $product->get_price();?>-->
            </p>
          </div>
        </div>
        <div class="row bg-pink my-2 mx-0 p-2 d-flex align-self-end">
          NOTE: lorem ipsum sale cannot be returned or exchanged
        </div>
      </div>
      <div class="col-4">
        <div>Size:</div>
        <div>Quantity:</div>
        <div>Move to Wishlist</div>
      </div>
    
  </div>
</div>