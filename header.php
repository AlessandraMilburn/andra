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
      <nav class="container-fluid" id="nav">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4 navbar-brand" id="logo">
          <?php the_custom_logo(); ?>  
          </div>
          <div class="col-4"></div>
        </div>
        <div class="row mb-0 py-1">
        <!-- wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?-->
          <div class="col-2"></div>
          <div class="col-8">
            <div class="container">
              <ul class="row text-center space-between mb-0 hover nav-button">
                <li><a href="/all-products">NEW IN</a></li>  
                <li><a href="/all-products">DRESSES</a></li>  
                <li><a href="/all-products">JUMPSUITS</a></li>  
                <li><a href="/all-products">TOPS</a></li>  
                <li><a href="/all-products">BOTTOMS</a></li>  
                <li><a href="/all-products">JEWELRY</a></li>  
                <li><a href="/all-products">SWIM</a></li>  
                <li class="reg-text red"><a href="/all-products">SALE</a></li>  
                <li>SEARCH BAR</a></li>  
              </ul>     
            </div>  
          <div>
          <div class="col-2"><div>
          </div>
        </div>
      </nav>

      <!--ANNOUNCEMENT SECTION-->
      <div class="announcement bg-grey">
        <p class="mb-0">Check out our new collection - just in! <a><u>Click here</u></a></p>
      </div>
    </header>
<main>
