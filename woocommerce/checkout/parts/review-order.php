
<h6 class="py-3 bold-text">Order Details</h6>
    <div class="row border py-3">
      <div class="col-4">
        <img <?php the_post_thumbnail(); ?>/>
      </div>
      <div class="col-4 pl-0">
        <div class="row">
          <div class="col-8">
            <a href="<?php the_permalink(); ?>">
              <h6 class="mb-0"><?php the_title();  ?>Product Name</h6>
            </a>
            <p><?php the_excerpt(); ?>product type</p>
            <p>Product ID: 12345<?php the_ID(); ?></p>
          </div>
          <div class="col-4">
            <p class="price bold-text">$253.00
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
      <div class="col-3">
        <div>
          <p>Size:</p>
          <p><span class="bold-text">XS</span> <a><u>change</u></a></p>
        </div>
        <div class="my-2">
          <p>Quantity:</p>
          <p><span>-</span> <span class="bold-text">3</span> <span>+</span></p>
        </div>
        <div class="row ml-0">
          <span>
            <img src="/wp-content/uploads/2020/05/icon-heart.svg"/>
          </span>&nbsp;
          <a><u> Move to Wishlist</u></a>
        </div>
      </div>
      <div class="col-1 d-flex align-items-start justify-content-end">
          <button class="x-icon">
            <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 2L6.00003 6M6.00003 6L10 2M6.00003 6L2 10M6.00003 6L10 10" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
      </div>
    
  </div>
