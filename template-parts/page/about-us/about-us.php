<h5 class=" my-4 text-center"><span class="pink-hl">&nbsp;About Us&nbsp;</span></h5>




<div class="p-5 text-center">
<?php get_template_part( 'template-parts/page/about-us/about-us-carousel', 'page' ); ?>
<br>
<p class="bold-text text-center text-uppercase"><?php the_field('mission_title'); ?></p>
<p><?php the_field('mission_statement'); ?></p>
<br>
<p class="bold-text text-center text-uppercase"><?php the_field('vision_title'); ?></p>
<p><?php the_field('vision_statement'); ?></p>
<br>
<p class="bold-text text-center text-uppercase">PRESS RELEASES</p>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'template-parts/page/blog/marketing/pr-preview', 'page' ); ?>
  </div>
</div>
<br>
<p class="bold-text text-center text-uppercase">PARTNERSHIPS</p>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'template-parts/page/blog/operations/partnerships-preview', 'page' ); ?>
  </div>
</div>
<br>
</div>