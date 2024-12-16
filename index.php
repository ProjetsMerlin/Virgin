<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>
<?php get_header();?>
<div class="virgin">
    <header>
        <?php get_template_part('template-parts/content','header');?>
    </header>
    <main>
        <?php while ( have_posts() ) :?>
        <?php the_post();?>
        <?php the_content(); ?>
        <?php endwhile;?>
    </main>
    <aside>
        <?php get_template_part('template-parts/content','aside');?>
    </aside>
    <footer>
        <?php get_template_part('template-parts/content','footer');?>
    </footer>
</div>
<?php get_footer()?>