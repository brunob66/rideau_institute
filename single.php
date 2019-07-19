<?php get_header();?>

<article>

  <div class="container">

    <div class="single-container">

      <?php

  while(have_posts()) {
    the_post(); ?>

      <h2><?php the_title();?></h2>

      <div class="post-image">

        <?php the_post_thumbnail();?>

      </div>

      <?php the_content();?>




      <?php
      previous_post_link();
      next_post_link();   
      
      
      ?>



      <?php } ?>

    </div>
  </div>
</article>

<?php get_footer(); ?>