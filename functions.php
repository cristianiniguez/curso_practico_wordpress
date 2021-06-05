<?php

function init_template()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  register_nav_menus(array('top_menu' => 'Menú Principal'));
}

add_action('after_setup_theme', 'init_template');

function assets()
{
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', '', '5.0.1', 'all');
  wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', '', '1.0.0', 'all');

  wp_enqueue_style('styles', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.0.0', 'all');

  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', '', '2.9.2', true);
  wp_register_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js', 'popper', '5.0.1', true);

  wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', '', '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'assets');
