
  <?php 
  
  
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'recruitment',
    'posts_per_page' => 3,
  );
          
  $arr_posts = new WP_Query( $args );      
  if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
  ?>     
      <article class="col-12 my-3 py-2 border">
          <p class="bold-text bold-text text-uppercase hover"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
          <p class="grey"><?php the_field('job_location'); ?> // <?php the_field('job_department'); ?> </p>
          <p><?php the_excerpt();?> </p> 
      </article>
  <?php 
  
    endwhile;
  endif;
  ?>
