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
        <ul class="col-3 p-3">
          <b>CUSTOMER SERVICE</b>
            <li class="hover"><a href="/customer-service/contact-us/">Contact Us</a></li>  
            <li class="hover"><a href="/customer-service/orders-and-shipping">Orders & Shipping</a></li>  
            <li class="hover"><a href="/customer-service/terms-and-conditions">Terms & Conditions</a></li>  
            <li class="hover"><a href="/customer-service/faqs">FAQs</a></li>  
            <li class="hover"><a href="/customer-service/privacy-policy">Privacy Policy</a></li>  
          </ul>
        <ul class="col-3 p-3">
          <b>ABOUT</b>
            <li class="hover"><a href="/about-us/">About Us</a></li>  
            <li class="hover"><a href="/about-us/careers">Careers</a></li>  
            <li class="hover"><a href="/about-us/sitemap">Sitemap</a></li>  
            <li class="hover"><a href="/about-us/affiliate-program">Affiliate Program</a></li>  
          </ul>        
        <div class="col-5 p-3 text-center">
          <b>FOLLOW US</b>
            <div class="row social">
              <div class="col-4"></div>
              <div class="col-1"><a target="_blank" href="https://www.facebook.com/AndraUAE/"><img src="/wp-content/uploads/2020/05/Facebook.svg"/></a></div>
              <div class="col-1"><a><img src="/wp-content/uploads/2020/05/Twitter.svg"/></a></div>
              <div class="col-1"><a><img src="/wp-content/uploads/2020/05/Instagram-filled.svg"/></a></div>
              <div class="col-1"><a><img src="/wp-content/uploads/2020/05/Youtube.svg"/></a></div>
              <div class="col-4"></div>
            </div>
            <br>
          Copyright 2020 Andra Fashion UAE.
          <br>
          For <a target="_blank" href="https://www.alessandramilburn.com" class="pink-hl-s">Alessandra Milburn's Porfolio</a> purposes only.
        </div>
      </div>
    </footer>  
   <?php wp_footer(); ?>
  </body>
</html>