</main>
<!-------------footer---------------->

<?php get_template_part( 'components/newsletter', 'page' ); ?>
<?php get_template_part( 'components/payment-methods', 'page' ); ?>

    <footer class="container-fluid bg-black white p-3">
      <div class="row">
        <div class="col-1"></div>
        <ul class="col-3 p-3">
          <b>CUSTOMER SERVICE</b>
            <li><a href="/customer-service/">Contact Us</a></li>  
            <li><a>Orders & Shipping</a></li>  
            <li><a>Terms & Conditions</a></li>  
            <li><a>FAQs</a></li>  
            <li><a>Privacy Policy</a></li>  
          </ul>
        <ul class="col-3 p-3">
          <b>ABOUT</b>
            <li><a href="/about-us/">About Us</a></li>  
            <li><a>Careers</a></li>  
            <li><a>Sitemap</a></li>  
            <li><a>Affiliate Program</a></li>  
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
          For <a><u>Alessandra Milburn's Porfolio</u></a> purposes only.
        </div>
      </div>
    </footer>  
   <?php wp_footer(); ?>
  </body>
</html>