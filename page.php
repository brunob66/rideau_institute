<?php get_header();?>

<div class="container-fluid bg-alice p-0">

  <?php while(have_posts()) {
  the_post(); ?>

  <h3 class="text-rideau text-center pt-4"><?php echo wp_title('');?></h3>

  <?php the_content(); ?>


  <?php } ?>
</div>
<?php get_footer(); ?>