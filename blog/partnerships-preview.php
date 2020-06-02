
  <?php 
  
  
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'partnerships',
    'posts_per_page' => 3,
  );
          
  $arr_posts = new WP_Query( $args );      
  if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
  ?>     
      <article class="col-4 ">
        <a href="<?php the_permalink(); ?>">
          <div class="h-75">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="h-25 my-2">
            <p class="bold-text"><?php the_title();?> </p>
            <p><?php the_excerpt();?> </p> 
          </div>
        </a>
      </article>
 
  <?php 
  
    endwhile;
  endif;
  ?>
