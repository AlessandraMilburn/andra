<?php
/**
 * The Header for our theme.
 *
 *
 * @package Andra
 */
?>

<!DOCTYPE html>

<html>
  <head>
    <?php wp_head(); ?>  
  </head>

  <body>
<!-- 
**Theme Menu
-->
    <header>
      <nav class="container-fluid" id="nav" style="background-image: url('<?php header_image(); ?>');" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
        <div class="row">
          <div class="col-5"></div>
          <div class="col-2 my-0" id="logo">
          <?php the_custom_logo(); ?>  
          </div>
          <div class="col-2 p-0"></div>
          <div class="col-3 ">
            <div class="container py-3">
              <div class="row d-flex justify-content-end">
                <div class="col-3"></div>
                <div class="col-1 p-0">
                  <img src="/wp-content/uploads/2020/05/icon-user.svg"/>
                </div>
                <div class="col-1 p-0 mx-1">
                  <img src="/wp-content/uploads/2020/05/icon-heart-1.svg"/>
                </div>
                <div class="col-1 p-0">
                  <img src="/wp-content/uploads/2020/05/icon-cart.svg"/>
                </div>
                <div class="col-4 py-1 px-0"><span class="bold-text">(1)</span> ($123.00)</div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-0 py-1">
          <div class="col-2"></div>
          <div class="col-8">
            <div class="container">
              <div class="row mb-0 hover nav-button">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
                <div class="col-2"><a>SEARCH BAR</a></div>  
              </div>     
            </div>  
          <div>
          <div class="col-2"><div>
          </div>
        </div>
      </nav>

      <!--ANNOUNCEMENT SECTION-->
      <div class="announcement bg-light-grey">
        <p class="mb-0">Check out our new collection - just in! <a><u>Click here</u></a></p>
      </div>
    </header>
<main>
