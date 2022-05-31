<?php
/* Version */
define('VIRGIN_VERSION', '2.1');

/* Css & Javascript */
function virgin_scripts() {
  wp_enqueue_style('css_main', get_stylesheet_directory_uri() . '/css/style.css', array(), VIRGIN_VERSION, 'all');
  wp_enqueue_script('jquery_ui', get_stylesheet_directory_uri() . '/js/vendor/jquery-4.0.min.js');
  wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery_ui'), VIRGIN_VERSION);
}
add_action('wp_enqueue_scripts', 'virgin_scripts');

require_once(get_template_directory() . '/include/config_theme.php');

/* SPONSORS */
/*
require_once(get_template_directory() . '/include/register_sponsors.php');
*/