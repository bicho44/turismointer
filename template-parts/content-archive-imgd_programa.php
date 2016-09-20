<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package IMGD porcitions
*/

?>


<div class="col-sm-6 col-md-3">
  <div class="thumbnail">
    <?php
    // Must be inside a loop.
    if (has_post_thumbnail()) {?>

      <a href="<?php the_permalink(); ?> ">

        <?php
        $publiid = get_post_meta(get_the_ID(),'imgd_image_slideshow' ,true);

        if ($publiid) {
          //piklist::pre($publiid);
          //foreach $publiid as $publi {

          $image = get_post($publiid);

          //piklist::pre($image);

          echo '<img src="' . $image->guid . '" alt="' . $image->post_title . '" class="img-responsive"/>';
          //}
          //}

        } else {
          /* @todo Cambiar para que la imagen sea responsive */
          the_post_thumbnail('thumb-archive');
        }
        ?>
      </a>
      <?php }
      //echo var_dump($notitle);

      ?>
      <header class="destacados-caption caption">
        <?php
        //get_the_terms(get_the_ID());
        the_title(sprintf('<h3><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        ?>
      </header><!-- .entry-header -->

    </div><!-- Thumbnail -->
  </div><!-- Col -->
