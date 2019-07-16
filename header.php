<!DOCTYPE html>

<html lang="en">

<head>
  <?php wp_head();?>
</head>


<body>

  <header>

    <nav class="container">

      <div>
        <a href="#">
          <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/header_logo.gif" alt="">
        </a>
      </div>

      <?php 
        wp_nav_menu( 
          array(
            'theme_location'  => 'primary-menu', 
          )
        );
      ?>

      <div class="donate-button">
        <button>Donate</button>
      </div>

    </nav>

  </header>