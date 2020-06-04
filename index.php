<?php get_header(); 

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'blog/marketing/blog-latest-post', 'page' ); ?>
  </div>
</div>
<?php get_template_part( 'shop/product-previews/preview-all', 'page' ); ?>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'blog/shop/blog-new-dresses', 'page' ); ?>
  </div>
</div>
<?php get_template_part( 'shop/product-previews/test-dresses', 'page' ); ?>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'blog/shop/blog-new-accessories', 'page' ); ?>
  </div>
</div>
<?php get_template_part( 'shop/product-previews/accessories', 'page' ); ?>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'blog/marketing/pr-preview', 'page' ); ?>
  </div>
</div>
<?php get_footer(); ?>

