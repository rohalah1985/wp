<!DOCTYPE html>
<html lang=" <?php language_attributes() ?> ">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 

    <?php wp_head() ; ?>

  </head>
  <body>
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="data">
              <span><i class="fa fa-phone-square"></i> 09176501189</span>
              <span><i class="fa fa-map-marker"></i> جهرم - خیابان جانبازان غربی</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="menu-items">
            <?php
            wp_nav_menu([
              'theme_location'=> 'main_menu',
              'depth' => '3'
            ]) 
            ?>
            </div>
          </div>
          <div class="col-md-3">
            <div class="logo-box"></div>
          </div>
        </div>
      </div>
    </div>