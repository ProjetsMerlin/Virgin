<?php
/* SHORTCODE un Article au hasard */
function virgin_random() {
  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'showposts'=> 1,
    'orderby' => 'rand'
  );
  ob_start();
  $html = array();
  $html[] = '<div class="flex-center">';
  $random_post = new WP_Query($args);
  if ($random_post->have_posts()):
    while ($random_post->have_posts()):
      $random_post->the_post();
      $html[] = '<h4>Article au hasard</h4>';
      $html[] = '<a title="'.get_the_title().'" href="'.get_the_permalink().'">';
      if(get_the_post_thumbnail_url(get_the_ID(),'medium')):
        $html[] = '<br><img src="'.get_the_post_thumbnail_url(get_the_ID(),'medium').'" title="'.get_the_title().'" alt="'.get_the_title().'">';
      else:
        $html[] = '<h2>'.get_the_title().'</h2>';
      endif;
      $html[] = '</a>';
    endwhile;
    wp_reset_postdata();
  else:
    $html[] = "Il n'y a pas de réalisations pour le moment";
  endif;
  $html[] = "</div>";
  echo implode('',$html);
  $output_strings = ob_get_contents();
  ob_end_clean();
  return $output_strings;
}
add_shortcode('random', 'virgin_random');