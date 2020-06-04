<!--INSERT CODE-->
<section class="container text-center my-5 ">
  <h5 class="text-uppercase bold-text my-4">
    <span class="pink-hl">&nbsp;Shop All&nbsp;</span>
  </h5>
  <div class="row">
      <?php
        $args = array( 
        'post_type' => 'product', 
        'posts_per_page' => 4, 
        'orderby' => 'rand' 
      );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="col-3">
        <?php get_template_part( 'components/single-product', 'page' ); ?>
        </div>
        </a>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div> <!--Item row-->
  <button class="white bg-black px-5 py-2">
    <a href="">
    SHOP NOW
    </a>
  </button>

</section> 