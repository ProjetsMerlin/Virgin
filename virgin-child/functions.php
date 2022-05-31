<?php

/* Chargement des styles du parent. */
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'virgin-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/main.css');
  wp_enqueue_style( 'fonteawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );

/* Modifie le logo de connexion de wordpress */
function virgin_child_my_custom_login_logo() {
  echo '<style type="text/css">
  h1 a { background-image:url('.get_stylesheet_directory_uri().'/img/logo.png) !important; }
  </style>';
}
add_action('login_head', 'virgin_child_my_custom_login_logo');

add_theme_support( 'custom-logo' );

/* api */
function virgin_child_api() {

/*
    register_rest_field('post', 'custom_details', array(
        'get_callback' => function ( $post_arr ) {

            $image_src_arr = wp_get_attachment_image_src($post_arr['featured_media'], 'medium');

            $author_name = get_the_author_meta('display_name', $post_arr['author']);

            $categories_name = array();
            foreach ($post_arr['categories'] as $key => $value) {
                $categories_name[] = get_the_terms(intval($post_arr['categories']), 'category')[$key]->name;
            }

            $tags_name = array();
            foreach ($post_arr['tags'] as $key => $value) {
                $tags_name[] = get_the_terms(intval($post_arr['tags']), 'post_tag')[$key]->name;
            }

            return array(
                "featured_media_medium" => $image_src_arr[0],
                "author_display_name" => $author_name,
                "categories_name" => $categories_name,
                "tags_name" => $tags_name,
            );
        },
        'update_callback' => null,
        'schema' => null
    )
);
*/


}
add_action('rest_api_init', 'virgin_child_api');

/*
http://localhost/Site/github/virgin/wp-json/wp/v2/posts?_fields=id,slug,link,date,title,excerpt,comment_status,custom_detailsfeatured_media,tags,categories
*/
