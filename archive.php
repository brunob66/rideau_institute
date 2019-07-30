<?php get_header(); ?>

<section id="blog-posts">
  <div class="container-fluid bg-alice">
    <div class="container pt-4">
      <h3 class="text-rideau text-center pb-4"><?php the_archive_title('Archive &raquo; ');?></h3>
      <div class="row">
        <div class="col-lg-8 offset-2">


          <?php

                while(have_posts()) {
                the_post(); ?>

          <div class="card mb-4">
            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p class="text-left small text-rideau date-border pb-1"><?php echo get_the_date(); ?></p>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink();?>" class="float-right btn btn-primary">Read More</a>
            </div>
          </div>

          <?php } ?>

          <div class="d-flex justify-content-center mb-4">
            <?php echo paginate_links();?>
          </div>
        </div>

      </div>

    </div>
  </div>


</section>


<?php get_footer(); ?>