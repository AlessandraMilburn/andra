

  <div class="row">
    <!--SORT & FILTER-->
    <section class="col-3 position-sticky">
        <?php get_template_part( 'user-page/parts/filter', 'page' ); ?>
    </section>
    <!--CONTENT start-->    
    <section class="col-9">
      <div>
        <?php get_template_part( 'user-page/parts/my-details', 'page' ); ?>
      </div>      
      <div>
        <?php get_template_part( 'user-page/parts/address-book', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'user-page/parts/orders-and-returns', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'user-page/parts/refer-a-friend', 'page' ); ?>
      </div>
      <div>
        <?php get_template_part( 'user-page/parts/credits', 'page' ); ?>
      </div>
    </section>
  </div>
  <!--CONTENT end-->


