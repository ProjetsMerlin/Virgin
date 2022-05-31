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
      <?php
      while ( have_posts() ) : the_post();
        ?>
        <main <?php post_class( 'site-main' ); ?> role="main">
          <header class="page-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header>
          <div class="page-content">
            <?php the_content(); ?>
          </div>
        </main>
        <?php
      endwhile;
      ?>
    </main>
  </div>
  <footer>
    <?php get_template_part('template-parts/content','footer');?>
  </footer>
</div>
<?php get_footer()?>;