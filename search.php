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
    <div>
        <main>
            <?php
global $query_string;
wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );
if ($search->have_posts() ):
  ?>
            <br><br>
            <h2>Voici ce que j'ai trouvé pour vous :</h2>
            <ul>
                <?php
  while ($search->have_posts()):
    $search->the_post();
    ?>
                <li>
                    <a href="<?= get_permalink($value->ID);?>"><?= get_the_title($value->ID);?></a>
                </li>
                <?php
  endwhile;
  wp_reset_postdata();
  ?>
            </ul>
            <?php
else:
  echo '<p>Nous n\'avons trouvé aucun résultats relatifs à votre recherche.<br>Mais je vous propose un des mes articles au hasard : <br><br></p>';
endif;
?>
        </main>
        <aside>
            <?php get_template_part('template-parts/content','aside');?>
        </aside>
    </div>
    <footer>
        <?php get_template_part('template-parts/content','footer');?>
    </footer>
</div>
<?php get_footer()?>