<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?>
<?php get_header();?>
<div class="virgin">
  <head>
    <?php get_template_part('template-parts/content','header');?>
  </head>
  <div class="main_content">
    <aside>
      <?php get_template_part('template-parts/content','aside');?>
    </aside>
    <main>
  <?php get_template_part('template-parts/content','post-single');?>
    </main>
  </div>
  <footer>
    <?php get_template_part('template-parts/content','footer');?>
  </footer>
</div>
<?php get_footer()?>;