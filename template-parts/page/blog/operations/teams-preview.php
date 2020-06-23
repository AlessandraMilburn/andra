
  <?php 
  
  
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'teams',
  );
          
  $arr_posts = new WP_Query( $args );      
  if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
    $arr_posts->the_post();
  ?>     
      <article class="col-4 my-3 p-5 text-center">
        <img class="h-75 mb-2 rounded-circle" src="<?php the_post_thumbnail_url(); ?>"/>
        <p class="bold-text bold-text text-uppercase hover"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></p>
        <p ><?php the_field('job_title'); ?> </p>
        <p>"<?php the_field('aka'); ?>"</p>
      </article>
  <?php 
  
    endwhile;
  endif;
  ?>
