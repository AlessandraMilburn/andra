<button onclick="switchVisible1()"><h5 class="text-uppercase bold-text my-4"><span id="button1" class="pink-hl">&nbsp; Related Products &nbsp;</span></button></h5>
<button onclick="switchVisible2()"><h5 class="text-uppercase bold-text my-4"><span id="button2" class="light-grey">&nbsp; Recently Viewed &nbsp;</span></button></h5>
<div id="section1" class=" ">
  <?php get_template_part( 'template-parts/product-previews/related-products', 'page' ); ?>
</div >
<div id="section2" class="hide">
  <?php get_template_part( 'template-parts/product-previews/recently-viewed', 'page' ); ?>
</div>
