<?php get_header();?>

<article>
  <div class="container-fluid bg-alice">
    <div class="container px-0 py-4">
      <div class="row ">
        <div class="col-lg-12">
          <div class="card p-2">
            <div class="card-body">

              <?php

                while(have_posts()) {
                the_post(); ?>

              <h4 class="card-title text-center"><?php the_title();?></h4>


              <img class="featured-image m-auto pt-3 pb-0" src="<?php echo get_the_post_thumbnail_url();?>" alt="">

              <p class="card-text"><?php the_content();?></p>

              <div class="row pt-3">
                <div class="col-12 d-flex justify-content-center align-self-center">
                  <a href="#" class="btn btn-primary">Top</a>
                </div>
              </div>

              <div class="row pt-2">
                <div class="col-6 p-0 d-flex justify-content-start">
                  <?php previous_post_link('&laquo; &nbsp; %link','Previous post')?>
                </div>
                <div class="col-6 p-0 d-flex justify-content-end">
                  <?php next_post_link('%link &nbsp; &raquo;','Next post')?>
                </div>
              </div>
            </div>

            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</article>


<section id="comments">
  <div class="container-fluid bg-alice pb-4">
    <div class="container bg-white p-2">
	<?php comments_template(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>