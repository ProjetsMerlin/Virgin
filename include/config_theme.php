<?php
//=============================================================================
// Menu, widgets, page
//=============================================================================

/* CONFIG THEME */
function virgin_add_theme() {
  /* Image à la une pour les pages */
  add_theme_support('post-thumbnails');

  /* Ajout d'un menu */
  /*
  register_nav_menus(
    array(
      'primary' => __('Menu principal', 'virgin'),
    )
  );
  */

  /* Enlève la version de Wordpress dans les balises head */
  remove_action('wp_head', 'wp_generator');
}
add_action('after_setup_theme', 'virgin_add_theme');

/* Ajout Widget */
function virgin_widgets() {
  register_sidebar(
    array(
      'name'          => __('Footer', 'virgin'),
      'description'   => 'Footer',
      'id'            => 'footer',
      'class'         => 'block',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h3 class="block_title">',
      'after_title'   => '</h3>'
    )
  );
}
/*
add_action('widgets_init','virgin_widgets');
*/

/* Ajoute la fonction "order" de Wordpress */
function add_post_page_attributes(){
  add_post_type_support('post','page-attributes');
}
/*
add_action('admin_init','add_post_page_attributes');
*/


//=============================================================================
// Image
//=============================================================================

/* AJOUT DE FORMAT PERSONNALISÉ */
function virgin_new_image(){
  add_image_size( 'a_la_une', 800, 800, true);
  add_image_size( 'galerie', 400, 400, true);
  add_image_size( 'logo_partenaires', 400, 266, true);
}
/*
add_action('after_setup_theme','virgin_new_image');
*/


//=============================================================================
// Custome dashboard
//=============================================================================

/* CACHE LES LIENS DU MENU */
function virgin_remove_menu_pages($user_connected) {
  if(wp_get_current_user()->roles[0] !== 'administrator') {
    remove_menu_page('edit-comments.php');
    remove_menu_page('tools.php');
    remove_menu_page('edit.php?post_type=page');
  }
}
add_action('admin_init', 'virgin_remove_menu_pages');

/* Modifie le lien du logo de la page de connexion */
function custom_url() {
  return home_url();
}
add_filter( 'login_headerurl', 'custom_url');

/* Modifie le logo de connexion de wordpress */
function virgin_my_custom_login_logo() {
  echo '<style type="text/css">
  h1 a { background-image:url('.get_bloginfo('template_directory').'/img/logo.png) !important; }
  </style>';
}
add_action('login_head', 'virgin_my_custom_login_logo');

/* Cache le logo WORDPRESS dans le dashboard */
function example_admin_bar_remove_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'example_admin_bar_remove_logo', 0 );

/* Modifie le footer dans le dashboard */
function oz_alter_wp_admin_bottom_left_text( $text ) {
    return sprintf( __( 'Merci de faire d\'<a href="%s" title="L\'intermédiaire" target="_blank">L\'intermédiaire</a> votre agence de communication' ),'https://lintermediaire.be');
}
add_filter('admin_footer_text','oz_alter_wp_admin_bottom_left_text');


//=============================================================================
// Custome query
//=============================================================================
/* Permet l'affichage des users en aléatoire */
function random_user_query(&$query) {
  $query->query_orderby = "ORDER BY RAND()";
}
/*
add_action('pre_user_query','random_user_query');
*/

/* Change l'url 'author' */
function virgin_change_author_permalinks() {
  global $wp_rewrite;
  $wp_rewrite->author_base = 'auteur';
}
add_action('init','virgin_change_author_permalinks');


//=============================================================================
// Autres
//=============================================================================
/* Change taille excerpt */
function virgin_custom_excerpt_length($length) {
  return 20;
}
/*
add_filter('excerpt_length','virgin_custom_excerpt_length',999);
*/

/* Compatibilité Woocommerce */
/*
add_theme_support('woocommerce');
*/

function detail_admin($parameters) {
  return the_author_meta($parameters,1);
}

function display_tags($id_post) {
  $posttags = get_the_tags($id_post);
  if ($posttags) {
    return $posttags;
  }
}

/* BUG WP */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action('shutdown', function() {
   while ( @ob_end_flush() );
});