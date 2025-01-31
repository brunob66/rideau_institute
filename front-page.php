<?php get_header(); ?>

<section id="showcase">
  <div class="container-fluid p-0">
    <div class="showcase">
      <div class="container text-white">
        <div class="col-sm-6 pt-5">
          <h3 class="py-3">Welcome to Rideau Institute</h4>
            <p class="font-weight-normal">Independent research, advocacy and social engagement on Canadian foreign and defence policy.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="recent-posts">
  <div class="container-fluid bg-alice">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mb-4">
          <h3 class="text-rideau py-4 text-center">Recent Posts</h4>
            
		  
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 2,
        );
        $blogposts = new WP_Query($args);
        while($blogposts->have_posts()) {
          $blogposts->the_post();
       ?>


          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url($post, $size)?>">
            <div class=" card-body d-flex flex-column">
              <h5 class="card-title text-center text-uppercase"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
              <p class="text-center small text-rideau date-border pb-1"><?php echo get_the_date(); ?></p>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink();?>" class="mr-0 ml-auto mt-auto btn btn-primary">Read More</a>
            </div>
          </div>



        <?php } ?>
        </div>
		
		        <div class="col-md-4 mb-4">

          <h3 class="text-rideau py-4 text-center">Latest Tweets</h4>
<?php echo do_shortcode('[twitter_profile screen_name="rideauinstitute" height="1000" limit="3" chrome="noheader,nofooter,noborders,noscrollbar"]'); ?>
      </div>
      


          

      </div>
		</div>
	</div>
</section>



<?php get_footer(); ?>