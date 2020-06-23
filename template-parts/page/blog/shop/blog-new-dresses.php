
  <?php 
  
  
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'new_dresses',
    'posts_per_page' => 1,
  );
          
  $arr_posts = new WP_Query( $args );      
  if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
  ?>   


<div class="container my-3 ">
  <a href="<?php the_permalink(); ?>">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-5">
      <img class="featured-img1" src="<?php the_field('img1') ?>"/>
    </div>
    <div class="col-5">
      <img class="featured-img2" src="<?php the_field('img2') ?>"/>    
    </div>
    <div class="col-1"></div>
  </div>
  <div class="row text-center my-2">
    <h3 class="col-12"><?php the_title(); ?><span class="pink-hl">&nbsp;<?php the_field('influencer_social_media_handle'); ?>&nbsp;</span></h3>
    <p class="col-12"><?php the_field('quick_summary'); ?></p>
  </div>
  </a>
</div>

<?php 
  
endwhile;
endif;
?>
