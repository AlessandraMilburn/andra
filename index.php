<?php get_header(); 

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


get_template_part( 'components/carousel', 'page' );
get_template_part( 'shop/product-previews/preview-all', 'page' );
get_template_part( 'components/promo-top', 'page' );
get_template_part( 'shop/product-previews/dresses', 'page' );
get_template_part( 'components/promo-bottom', 'page' );
get_template_part( 'shop/product-previews/accessories', 'page' ); ?>
<div class="container my-5">
  <div class="row">
    <?php get_template_part( 'blog/pr-preview', 'page' ); ?>
  </div>
</div>
<?php get_footer(); ?>

