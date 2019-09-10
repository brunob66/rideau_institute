<!DOCTYPE html>

<html <?php language_attributes()?>>

<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>


<body class="bg-rideau" <?php body_class()?>>

  <header>
    <div class="container-fluid bg-white">
      <div class="container">
        <nav class="navbar navbar-expand-xl navbar-light bg-white">
          <a href="<?php echo site_url('/');?>" class="navbar-brand m-0">
            <img src="<?php echo content_url(); ?>/uploads/2019/08/layout-header-logo.gif" alt="Rideau Institute Logo" width="125">
          </a>

          <a id="donate-mobile" href="<?php echo site_url('/donate')?>" class="btn btn-primary nav-item nav-link px-2"> Donate </a>

          <button class="navbar-toggler m-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse m-0" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-3">
              <a href="<?php echo site_url('/posts')?>" class="nav-item nav-link p-3"> Blog </a>
              <a href="<?php echo site_url('/publications')?>" class="nav-item nav-link p-3"> Publications </a>
              <a href="<?php echo site_url('/videos')?>" class="nav-item nav-link p-3"> Videos </a>
              <a href="<?php echo site_url('/internships')?>" class="nav-item nav-link p-3"> Internships </a>
              <a href="<?php echo site_url('/about')?>" class="nav-item nav-link p-3"> About </a>
              <a href="<?php echo site_url('/governance')?>" class="nav-item nav-link p-3"> Governance </a>
              <a href="<?php echo site_url('/sign-up')?>" class="nav-item nav-link p-3"> Sign-up </a>
            </ul>
          </div>
          <a id="donate-desktop" href="<?php echo site_url('/donate')?>" class="btn btn-primary nav-item nav-link px-3"> Donate </a>
        </nav>
      </div>
    </div>

  </header>