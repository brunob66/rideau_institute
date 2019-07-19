<?php get_header();?>

<section id="showcase">

  <div class="container">
    <div class="showcase-text">
      <h1>Welcome to Rideau Institute</h1>
      <p>Independent research, advocacy and social engagement on Canadian foreign and defence policy.<p>
    </div>
  </div>

</section>

<section id="recent-posts">
  <div class="container">
    <h2>Recent Posts</h2>
  </div>

  <div class="container">

    <div class="post-grid">

      <?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
  );

  $blogposts = new WP_Query($args);

  while($blogposts->have_posts()) {
    $blogposts->the_post();
  ?>
      <div class="card">

        <div class="image-container">
          <a href='<?php the_permalink();?>'>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
          </a>
        </div>

        <div class="card-container">
          <div class="title-container">
            <a href='<?php the_permalink();?>'>
              <?php the_title();?>
            </a>
          </div>

          <div class="date-container">
            <?php echo get_the_date();?>
          </div>

          <div class="excerpt-container">
            <?php the_excerpt()?>
          </div>
        </div>
      </div>


      <?php } ?>

    </div>
  </div>
</section>

<?php get_footer();?>