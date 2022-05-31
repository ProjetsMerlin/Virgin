<?php
while (have_posts()):
  the_post();
  ?>
  <section>
    <h1><?= get_bloginfo('name');?></h1>
  </section>
  <section>
    <h2><?= get_the_title();?></h2>
    <p class="lead"><?= get_the_excerpt();?></p>
  </section>
  <?php
endwhile;
wp_reset_postdata();
?>