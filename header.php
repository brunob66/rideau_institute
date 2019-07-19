<!DOCTYPE html>

<html>

<head>
  <?php wp_head();?>
</head>


<body>

  <header>
    <div class="container">
      <div class="header-grid">

        <div class="site-branding">
          <a href="#">
            <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo.gif" alt="">
          </a>
        </div>

        <nav>
          <?php 
            wp_nav_menu( 
              array(
                'theme_location'  => 'primary-menu', 
              )
            );
          ?>
        </nav>

        <div class="donate-area">
          <button class="donate-button" onclick="window.location.href = 'http://google.com';">Donate</button>
        </div>

      </div>
    </div>
  </header>