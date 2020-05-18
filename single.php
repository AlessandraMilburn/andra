<?php
  get_header();
  get_template_part( 'template-parts/sub-header', 'page' );
?>

<?php while(have_posts()) {
  the_post(); ?>
    <article>
      <?php the_content();?>
    </article>
<?php 
    }
    get_footer();
?>

