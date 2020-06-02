<h5 class=" my-4 text-center"><span class="pink-hl">&nbsp;About Us&nbsp;</span></h5>




<div class="p-5 text-center">
<?php get_template_part( '/about-us/parts/about-us-carousel', 'page' ); ?>
<br>
<p class="bold-text text-center text-uppercase"><?php the_field('mission_title'); ?></p>
<p><?php the_field('mission_statement'); ?></p>
<br>
<p class="bold-text text-center text-uppercase"><?php the_field('vision_title'); ?></p>
<p><?php the_field('vision_statement'); ?></p>
<br>
<p class="bold-text text-center text-uppercase">PRESS RELEASES</p>
  <?php get_template_part( 'blog/pr-preview', 'page' ); ?>
<br>
<p class="bold-text text-center text-uppercase">PARTNERSHIPS</p>
  <?php get_template_part( 'blog/partnerships-preview', 'page' ); ?>
<br>
<p class="bold-text text-center text-uppercase">SOCIAL</p>
  <?php get_template_part( 'blog/social-preview', 'page' ); ?>
</div>