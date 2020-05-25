<div class="container text-center">
  
  <h5 class="text-uppercase bold-text my-4">
    <span class="pink-hl">&nbsp;
      SIGN IN
    &nbsp;</span>
  </h5>

  <div class="row border justify-content-center py-4 mx-5">
    <div class="col-5">
      <?php get_template_part( 'user-page/parts/facebook', 'page' ); ?>
    </div>
    <div class="col-5">
      <?php get_template_part( 'user-page/parts/instagram', 'page' ); ?>
    </div>
  </div>

  <div class="row m-5 ">
    <div class="col-6 p-0">
      <div class="border ml-0 mr-3 h-100 ">
        <?php get_template_part( 'user-page/parts/sign-in', 'page' ); ?>
      </div>
    </div>
    <div class="col-6 p-0">
      <div class="border ml-3 mr-0">
        <?php get_template_part( 'user-page/parts/sign-up', 'page' ); ?>        
      </div>
    </div> 
  </div>

</div>
