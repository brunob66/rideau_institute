<?php get_header(); ?>

<div class="container-fluid bg-alice">

  <div class="container pt-4">

    <h3 class="text-rideau text-center pb-4"><?php echo wp_title('');?></h3>

    <div class="row">

      <section id="blog-posts" class="col-lg-8">

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

      </section>

      <aside class="col-lg-4">

        <div class="text-rideau pb-3">

          <i class="fas fa-search"></i><span class="pl-2 sidebar-header">Search</span>
          <div class="py-3">
            <?php get_search_form();?>
          </div>

        </div>

        <div class="text-rideau pb-3">

          <i class="fas fa-calendar-alt"></i><span class="pl-2 sidebar-header">Archives</span>
          <div class="py-3">
            <select id="archive-dropdown" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
              <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option>
              <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 0 ) ); ?>
            </select>

          </div>
        </div>


        <div class="text-rideau pb-3">

          <i class="fab fa-twitter"></i><span class="pl-2 sidebar-header">Twitter</span>
          <div class="py-3">
            <?php get_search_form();?>
          </div>

        </div>

      </aside>

    </div>
  </div>
</div>
</div>
</section> <?php get_footer(); ?>