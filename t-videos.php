<?php /* Template Name: Videos */ ?>

<?php get_header(); ?>

<section id="blog-posts">
  <div class="container-fluid bg-alice">
    <div class="container pt-4">
      <h3 class="text-rideau text-center pb-4"><?php the_title();?></h3>
      <div class="row">


        <?php

$loop = new WP_Query( array(
                'post_type' => 'publications',
              )
            );

            while($loop->have_posts()) {
            $loop->the_post(); ?>


        <div class="col-lg-6">
          <div class="card mb-4">
            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" class="card-img-top-publications">
            <div class="card-body">
              <h5 class="card-title text-center"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>


        <?php } ?>



      </div>

    </div>
  </div>


</section>


<?php get_footer(); ?>