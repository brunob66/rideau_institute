<?php /* Template Name: Videos */ ?>

<?php get_header(); ?>

<section id="blog-posts">
  <div class="container-fluid bg-alice">
    <div class="container pt-4">
      <h3 class="text-rideau text-center pb-4">Virtual Events</h3>
      <div class="row">


        <?php

$loop = new WP_Query( array(
                'post_type' => 'videos',
                'posts_per_page' => 100,
              )
            );

            while($loop->have_posts()) {
            $loop->the_post(); 
                      
            ?>
		  
		  


        <div class="col-md-6 mb-4 d-flex align-items-stretch">
          <div class="card">
            <img src="<?php echo get_the_post_thumbnail_url()?>" alt="" class="card-img-top-publications">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-center"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p class="text-center small text-rideau date-border pb-1"><?php echo get_the_date(); ?></p>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="pb-4 pr-4 ml-auto">
              <a href="<?php the_permalink();?>" class="mr-0 ml-auto btn btn-primary btn-sm">Full text</a>
              <a href="<?php echo get_post_meta($post->ID, 'vid_link', true); ?>" class="mr-0 ml-auto btn btn-primary btn-sm">Direct link</a>
            </div>
          </div>
        </div>


        <?php } ?>



      </div>

    </div>
  </div>


</section>


<?php get_footer(); ?>