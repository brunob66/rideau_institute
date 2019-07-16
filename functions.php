<?php

// Adding CSS & JS files

function ri_setup() {
wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans&display=swap');
// wp_enqueue_style('font-awesome', '<add link>');
wp_enqueue_style('style', get_stylesheet_uri(), null, microtime(), 'all');
// wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), null, microtime(), true);
}

add_action('wp_enqueue_scripts', 'ri_setup');

// Adding theme support

function ri_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
}

add_action('after_setup_theme', 'ri_init');

// Projects Post Type

function ri_custom_post_type() {
  register_post_type('project', 
    array(
      'rewrite' => array('slug' => 'projects'),
      'labels' => array(
        'name' => 'Projects', 
        'singular_name' => 'Project',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project'),
      'menu-icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive' => true,
      'supports' => array ('title', 'thumbnail', 'editor', 'excerpt', 'comments')
    )
  );
};

add_action('init', 'ri_custom_post_type')

?>