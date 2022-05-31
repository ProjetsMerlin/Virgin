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
      <br><br>
      <h2>404 page</h2>
      <p>Désolé, cette page n'existe plus ou n'a jamais existée</p>
      <br><br>
    </main>
  </div>
  <footer>
    <?php get_template_part('template-parts/content','footer');?>
  </footer>
</div>
<?php get_footer()?>;