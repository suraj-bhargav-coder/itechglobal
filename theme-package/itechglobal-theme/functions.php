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

function itechglobal_customize_register($wp_customize) {
  $wp_customize->add_section('itechglobal_home', array(
    'title' => 'Itech Global: Home Page',
    'priority' => 30,
  ));

  $wp_customize->add_setting('itechglobal_hero_title', array(
    'default' => 'Professional IT consulting that connects systems and drives growth.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('itechglobal_hero_title', array(
    'label' => 'Hero Title',
    'section' => 'itechglobal_home',
    'type' => 'text',
  ));

  $wp_customize->add_setting('itechglobal_hero_subtitle', array(
    'default' => 'Itech Global delivers EDI integration, cloud modernization, and product engineering for organizations that need stability, speed, and measurable ROI.',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('itechglobal_hero_subtitle', array(
    'label' => 'Hero Subtitle',
    'section' => 'itechglobal_home',
    'type' => 'textarea',
  ));

  $wp_customize->add_setting('itechglobal_contact_email', array(
    'default' => 'info@itechglobal.in',
    'sanitize_callback' => 'sanitize_email',
  ));
  $wp_customize->add_control('itechglobal_contact_email', array(
    'label' => 'Contact Email',
    'section' => 'itechglobal_home',
    'type' => 'email',
  ));

  $wp_customize->add_setting('itechglobal_contact_phone', array(
    'default' => '+91 90000 00000',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('itechglobal_contact_phone', array(
    'label' => 'Contact Phone',
    'section' => 'itechglobal_home',
    'type' => 'text',
  ));

  $wp_customize->add_setting('itechglobal_contact_address', array(
    'default' => 'Hyderabad, Telangana, India',
    'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('itechglobal_contact_address', array(
    'label' => 'Contact Address',
    'section' => 'itechglobal_home',
    'type' => 'textarea',
  ));
}
add_action('customize_register', 'itechglobal_customize_register');
