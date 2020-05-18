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
        <ul class="row mb-0 py-1">
        <!-- wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?-->
          <li class="col-1"></li>
          <li class="col-1">NEW IN</li>  
          <li class="col-1">DRESSES</li>  
          <li class="col-1">JUMPSUITS</li>  
          <li class="col-1">TOPS</li>  
          <li class="col-1">BOTTOMS</li>  
          <li class="col-1">JEWELRY</li>  
          <li class="col-1">SWIM</li>  
          <li class="col-1">SALE</li>  
          <li class="col-2">SEARCH BAR</li>
        </ul>
      </nav>

      <!--ANNOUNCEMENT SECTION-->
      <div class="announcement bg-grey">
        <p class="mb-0">Check out our new collection - just in! <a><u>Click here</u></a></p>
      </div>
    </header>
<main>
