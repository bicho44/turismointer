<?php
/**
* Template part para Mostrar los Programas
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package IMGD porcitions
*/

?>

<article id="post-<?php the_ID(); ?>" class="servicio col-sm-6 col-md-4">
    <?php
    // Must be inside a loop.
    if (has_post_thumbnail()) {?>

      <a href="<?php the_permalink(); ?> ">
        <?php
          /* @todo Cambiar para que la imagen sea responsive */
          the_post_thumbnail('thumb-archive');
        ?>
      </a>
      <?php }

      ?>
      <header class="entry-header">
        <?php
        //get_the_terms(get_the_ID());
        the_title(sprintf('<h3><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        ?>
      </header><!-- .entry-header -->

      <div class="entry-content">
        <?php $ID = get_the_ID(); ?>
        <?php if (get_post_meta($ID , 'imgd_servicio_tel', true)){?>
        <?php echo '<strong>Tel:</strong> '. get_post_meta($ID , 'imgd_servicio_tel', true).'<br>'; ?>
        <?php } ?>
        <?php if (get_post_meta($ID , 'imgd_servicio_cel', true)){?>
        <?php echo '<strong>Cel:</strong> '. get_post_meta($ID, 'imgd_servicio_cel', true).'<br>'; ?>
        <?php } ?>
        <?php if (get_post_meta($ID , 'imgd_servicio_email', true)){?>
        <?php echo '<strong>Email:</strong> <a href="mailto:'.get_post_meta($ID , 'imgd_servicio_email', true).'">'.get_post_meta($ID , 'imgd_servicio_email', true).'</a><br>'; ?>
        <?php } ?>
        <?php if (get_post_meta($ID , 'imgd_servicio_web', true)){?>
        <?php echo '<strong>Web:</strong> <a href="'.get_post_meta($ID , 'imgd_servicio_web', true).'">'. get_post_meta($ID , 'imgd_servicio_web', true).'</a><br>'; ?>
        <?php } ?>

        <!-- Direccion<br>
        ciudad - estado - pais<br>
        web -->
      </div>


  </article><!-- Col -->
