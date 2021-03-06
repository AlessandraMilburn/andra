<?php get_header(); 

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'template-parts/page/blog/marketing/blog-latest-post', 'page' ); ?>
  </div>
</div>
<?php get_template_part( 'shop/product-previews/preview-all', 'page' ); ?>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'template-parts/page/blog/shop/blog-new-dresses', 'page' ); ?>
  </div>
</div>
<?php get_template_part( 'shop/product-previews/dresses', 'page' ); ?>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'template-parts/page/blog/shop/blog-new-accessories', 'page' ); ?>
  </div>
</div>
<?php get_template_part( 'shop/product-previews/accessories', 'page' ); ?>
<?php get_footer(); ?>

