<?php

// Adding CSS & JS files

function ri_setup() {

wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans&display=swap');
wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', NULL, microtime());
wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());

// wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js', NULL, microtime(), true);
wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', NULL, microtime(), true);
wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', NULL, microtime(), true);
wp_enqueue_script('font-awesome','https://kit.fontawesome.com/51f022e2fe.js', NULL, microtime(), true);

}

add_action('wp_enqueue_scripts', 'ri_setup');

// Adding features

function ri_features() {
  add_theme_support('title-tag');

}


add_action('after_setup_theme', 'ri_features');

// Adding theme support

function ri_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
  add_filter( 'sharing_services_email', '__return_true' );
}

add_action('after_setup_theme', 'ri_init');

// Projects Post Type

function ri_custom_post_type() {
  register_post_type('publications', 
    array(
      'rewrite' => array('slug' => 'publications'),
      'labels' => array(
        'name' => 'Publications', 
        'singular_name' => 'Publication',
        'add_new_item' => 'Add New Publication',
        'edit_item' => 'Edit Publication'),
      'menu_icon' => 'dashicons-admin-site',
      'public' => true,
      'has_archive' => false,
      'supports' => array ('title','custom-fields')
    )
  );

   register_post_type('videos', 
    array(
      'rewrite' => array('slug' => 'videos'),
      'labels' => array(
        'name' => 'Videos', 
        'singular_name' => 'Video',
        'add_new_item' => 'Add New Video',
        'edit_item' => 'Edit Video'),
      'menu_icon' => 'dashicons-video-alt',
      'public' => true,
      'has_archive' => false,
      'supports' => array ('title', 'thumbnail', 'editor', 'excerpt', 'comments')
    )
  );



};

add_action('init', 'ri_custom_post_type');

function ri_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Search', 'rideau' ),
			'id'            => 'search',
			'description'   => __( 'Add widgets here to appear in your footer.', 'rideau' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
    )
    );
  
  	register_sidebar(
		array(
			'name'          => __( 'Archive', 'rideau' ),
			'id'            => 'archive',
			'description'   => __( 'Add widgets here to appear in your footer.', 'rideau' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'ri_widgets_init' );

?>