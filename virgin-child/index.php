<?php get_header();?>
<div class="virgin">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();
      the_content();
    }
  }
  else {
    get_template_part( '404' );
  }
  ?>
</div>
<?php get_footer()?>