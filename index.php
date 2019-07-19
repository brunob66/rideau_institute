<?php get_header(); ?>

<section>
  <div id="showcase"></div>

  <div class="container">
    <div class="showcase-content">

      <h1>Welcome to Rideau Institute</h1>
      <p>Independent research, advocacy and social engagement on Canadian foreign and defence policy.</p>

    </div>
</section>

<section id="recent-posts">
  <div class="container">

    <div class="rp-grid">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
      );
      $blogposts = new WP_Query($args);
      while($blogposts->have_posts()) {
        $blogposts->the_post();
    ?>

      <div class="rp-card">

        <div class="rp-image">

        </div>

        <div class="rp-title">
          <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        </div>

        <div class="rp-date">
          <?php echo get_the_date(); ?>
        </div>

        <div class="rp-excerpt">
          <?php the_excerpt(); ?>
        </div>

      </div>

      <?php } ?>

    </div>

  </div>
</section>
<?php get_footer(); ?>