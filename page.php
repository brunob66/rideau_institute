<?php get_header();?>

<div class="container-fluid bg-alice">


  <?php while(have_posts()) {
  the_post(); ?>

  <h1><?php the_title();?></h1>

  <?php the_content(); ?>





  <?php } ?>



</div>


<?php get_footer(); ?>