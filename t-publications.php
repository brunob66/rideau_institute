<?php /* Template Name: Publications */ ?>

<?php get_header(); ?>

<section id="blog-posts">
  <div class="container-fluid bg-alice">
    <div class="container pt-4">
      <h3 class="text-rideau text-center pb-4">Publications</h3>
      <div class="row">


        <?php

$loop = new WP_Query( array(
                'post_type' => 'publications',
                'posts_per_page' => 100,
                'orderby' => 'meta_value',
                'meta_key' => 'pub_date',
                'order' => 'DESC'
              )
            );

            while($loop->have_posts()) {
            $loop->the_post(); 

            $img = get_post_meta($post->ID, 'pub_thumbnail', true);
            $pdf = get_post_meta($post->ID, 'pub_pdf', true);

        ?>

        <div class="col-lg-6 d-flex align-items-stretch">
          <div class="row mx-1 mb-4">
            <div class="card col-lg-4 p-0">
              <img src="<?php echo wp_get_attachment_url( $img );?>" alt="" class="card-img-top-publications">
            </div>
            <div class="card col-lg-8 p-3">
              <p class="card-text"><b><?php the_title();?></b><br><span class="small"><em><?php the_field('pub_subtitle'); ?></em></span></p>

              <p class="small">
                <?php the_field('pub_author'); ?><br>
                <?php the_field('pub_date'); ?><br>

                <?php if( get_field('isbn') ): ?>
                ISBN: <?php the_field('isbn'); ?>
                <?php endif; ?>

              </p>

              <a href="<?php echo wp_get_attachment_url( $pdf );?>" class="mr-0 ml-auto mt-auto btn btn-primary btn-sm">Download PDF</a>
            </div>
          </div>
        </div>






        <?php } ?>



      </div>

    </div>
  </div>


</section>


<?php get_footer(); ?>