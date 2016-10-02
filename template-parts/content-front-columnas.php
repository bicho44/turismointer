<?php
// Acá seleciono las Páginas que voy a mostrar como destacados en la Home
$args = array(
  'ignore_sticky_posts'=>true,
  'posts_per_page' => 6
);
$loop = new WP_Query($args);
?>
<div class="tres-columnas">
  <div class="container">
    <div class="row">
          <?php get_template_part('template-parts/menu', 'secundario'); ?>


      <div class="col-md-6">
    <?php   if ($loop->have_posts()) {?>
        <h3>Últimas Novedades</h3>
        <?php
        $x = 0;
        while ($loop->have_posts()) : $loop->the_post();
        ?>
          <?php
          get_template_part( 'template-parts/content', 'novedades');
          $x++;
          ?>

      <?php endwhile;
    } ?>

    </div>
    <div class="col-md-3">
      <h4>Auspician</h4>
    </div>

  </div>
</div>

</div>
<?php wp_reset_query(); ?>