<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head();?>
</head>


<body>

  <header>

    <div class="container">
      <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <a href="#" class="navbar-brand m-0">
          <img src="<?php echo get_template_directory_uri(); ?>/img/header_logo.gif" alt="Rideau Institute Logo" width="125">
        </a>

        <form action="" class="form-inline ml-auto mr-0">
          <button class="d-none btn btn btn-primary" type="submit">Donate</button>
        </form>

        <button class="navbar-toggler m-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse m-0" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto pr-3">
            <a href="#" class="nav-item nav-link p-3"> Blog </a>
            <a href="#" class="nav-item nav-link p-3"> Publications </a>
            <a href="#" class="nav-item nav-link p-3"> Videos </a>
            <a href="#" class="nav-item nav-link p-3"> Internships </a>
            <a href="#" class="nav-item nav-link p-3"> About </a>
            <a href="#" class="nav-item nav-link p-3"> Governance </a>
            <a href="#" class="nav-item nav-link p-3"> Sign-up </a>
          </ul>
        </div>
        <form action="" class="form-inline m-0">
          <button class="btn btn-primary" type="submit">Donate</button>
        </form>
      </nav>
    </div>

  </header>



  <!-- 
  <header>
    <div class="container">
      <div class="header-grid">

        <div class="site-branding">
          <a href="<?php echo site_url(); ?>">
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
  </header> -->