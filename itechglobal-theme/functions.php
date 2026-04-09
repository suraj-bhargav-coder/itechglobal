<?php
function itechglobal_enqueue_assets() {
  wp_enqueue_style('itechglobal-style', get_stylesheet_uri(), array(), '1.0');
  wp_enqueue_style('itechglobal-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'itechglobal_enqueue_assets');

function itechglobal_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'itechglobal_theme_support');
