<?php
/* Version */
define('VIRGIN_VERSION', '3.0');

/* Css & Javascript */
function virgin_scripts() {
  wp_enqueue_style('css_main', get_stylesheet_directory_uri() . '/css/style.css', array(), VIRGIN_VERSION, 'all');
  wp_enqueue_script('jQuery', get_stylesheet_directory_uri() . '/js/vendor/jquery-6.0.min.js');
  wp_enqueue_script('js_main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), VIRGIN_VERSION);
}
add_action('wp_enqueue_scripts', 'virgin_scripts');

require_once(get_template_directory() . '/include/config_theme.php');

/* include */
require_once(get_template_directory() . '/include/shortcode_random-post.php');