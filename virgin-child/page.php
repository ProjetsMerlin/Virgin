<?php get_header();?>
<div class="virgin">
  <header>
    <?php echo get_custom_logo();?>
    <div class="main_menu">
      <?php
      /*
      wp_nav_menu(
        array(
          'menu'      =>  "Menu",
          'menu_class'  =>  "primary_menu",
        )
      );
      */
      ?>
      <br>
      <br>
      <br>
      <br>
    </div>
  </header>
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
  <footer class="footer">
    © <?= date('Y', time());?> - Vie Féminine
  </footer>
</div>
<?php get_footer()?>