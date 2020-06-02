</main>
<!-------------footer---------------->

<?php if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<?php get_template_part( 'components/newsletter', 'page' ); ?>
<?php get_template_part( 'components/payment-methods', 'page' ); ?>

    <footer class="container-fluid bg-black white p-3">
      <div class="row">
        <div class="col-1"></div>
        <ul class="col-3 p-3 hover">
          <b class="text-uppercase">CUSTOMER SERVICE</b>
          <?php wp_nav_menu( array( 'theme_location' => 'customer-service-menu' ) );?>
        </ul>
        <ul class="col-3 p-3 hover">
          <b class="text-uppercase">ABOUT US</b> 
          <?php wp_nav_menu( array( 'theme_location' => 'about-us-menu' ) );?>
        </ul>        
        <div class="col-5 p-3 text-center">
          <b class="text-uppercase"><?php the_field('social_title', 316); ?></b>
            <div class="row social">
              <div class="col-4"></div>
              <div class="col-1"><a target="_blank" href="https://<?php the_field('facebook_link',316) ?>"><img src="/wp-content/uploads/2020/05/Facebook.svg"/></a></div>
              <div class="col-1"><a target="_blank" href="https://<?php the_field('twitter_link',316) ?>"><img src="/wp-content/uploads/2020/05/Twitter.svg"/></a></div>
              <div class="col-1"><a target="_blank" href="https://<?php the_field('instagram_link',316) ?>"><img src="/wp-content/uploads/2020/05/Instagram-filled.svg"/></a></div>
              <div class="col-1"><a target="_blank" href="https://<?php the_field('youtube_link',316) ?>"><img src="/wp-content/uploads/2020/05/Youtube.svg"/></a></div>
              <div class="col-4"></div>
            </div>
            <br>
            <?php the_field('copyright', 316); ?>
          <br>
          For <a target="_blank" href="https://www.alessandramilburn.com" class="pink-hl-s">Alessandra Milburn's Porfolio</a> purposes only.
        </div>
      </div>
    </footer>  
   <?php wp_footer(); ?>
  </body>
</html>