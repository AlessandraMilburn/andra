<?php get_header(); ?>

<div class="container my-5">
  <section class="row my-5">
    <!--image gallery section-->
    <div class="col-8">
      <div class="row">
        <!--thumbnails-->
        <div class="col-2">
          Test
        </div>

        <!--main image-->
        <div class="col-10">

          <div><?php 
         
          the_post_thumbnail(); ?></div>
        </div>        
      </div>
    </div>

    <!--product summary and action section-->
    <div class="col-4 text-center">
      <h6 class="text-uppercase mb-0"> <?php the_title(); ?></h6>
      <span class="m-0"><?php the_excerpt(); ?></span>

      <!--Price--> 
      <p class="my-2"><span class="price bold-text" >$          
      <?php 
      $product = get_product(get_the_ID());
      echo $product->get_price();?></span>
      <span class="xs-text">(shipping fee included)</span></p>

      <!--Info--> 
      <p class=""><a><u>Delivery returns info</u></a> <a><u>Size Guide</u></a></p>
      
      <!--select size--> 
      <div class="my-3 px-3 align-self-center">
        <span class="border rounded position-relative p-2">
          <label class="bold-text" for="size">Select your size</label>
          <select class="bg-transparent w-50 light-text"id="size" form="cart ">
            <option class="bg-transparent" value="default">Select</option>
            <option value="extra small">Extra Small</option>
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="Large">Large</option>
            <option value="Extra Large">Extra Large</option>
          </select>
        </span>
      </div>

        <form class="cart " method="post" enctype="multipart/form-data">
          <input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>">
          <button class="w-75 bg-black white py-2 px-4 light-text" type="submit"> <?php echo $product->single_add_to_cart_text(); ?> </button>
        </form>

      <!--other info and action--> 
      <div class="row mx-4 my-2">
        <div class="col-4 h-100 "><p class="mb-0">Color: </p><span class="xs-text m-0">Color</span></div>
        <!--Wishlist Button-->
        <div class="col-4 border rounded px-0">
          <button class="row h-100 m-0 p-2">
            <span >Wishlist</span>&nbsp;
            <span>
              <img src="/wp-content/uploads/2020/05/icon-heart.svg"/>
            </span>
          </button>
        </div>
        <div class="col-4 h-100 d-flex align-self-center justify-content-center"><a><u>SHARE</u></a></div>
      </div>


      
    </div>
  </section>
  <section class="row my-2">
    <div class="col-4 px-4">
      <h6 class="text-uppercase mb-0">Product Details</h6>
      <p>Top by ASOS DESIGN
      Floral print
      Square neck
      Frill trim
      Shirred design
      Cropped style 
      Regular fit
      True to size
      </p>
    </div>
    <div class="col-4 px-4">
      <h6 class="text-uppercase mb-0">Brand Details</h6>

      <p>
        This is ASOS DESIGN – your go-to for all the latest trends, no matter who you are, where you’re from and what you’re up to. Exclusive to ASOS, our universal brand is here for you, and comes in all our fit ranges: ASOS Curve, Tall, Petite and Maternity. Created by us, styled by you.
      </p>
    </div>
    <div class="col-4 px-4">
      <h6 class="text-uppercase mb-0">Size & Fit</h6>
      <p>
        Model wears: UK 8/ EU 36/ US 4
        Model's height: 170cm/5'7"
      </p>
    </div>
  </section>
  <!--Recently Viewed Section-->
  <section class="text-center">
    <?php get_template_part( 'components/recentlyandrelated', 'page' ); ?>
  </section>
</div>

<?php get_footer();

?>

