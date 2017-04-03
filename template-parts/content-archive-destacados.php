<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package IMGD porcitions
 */
$postType = get_post_type(  );
//piklist::pre($postType);

?>

<?php
// Must be inside a loop.
if (has_post_thumbnail()) {?>

    <a href="<?php the_permalink(); ?>">
          <?php  /* @todo Cambiar para que la imagen sea responsive */
            if($postType==='imgd_programa'){?>
                <!--<i class="icon-play-circle icon-3x align-right"></i>-->
            <?php }

            the_post_thumbnail('thumbnail', array('class'=>'img-circle align-center img-responsive'));
            ?>
    </a>
<?php } ?>

<?php
$notitle = get_post_meta(get_the_ID(), 'imgd_sin_titulo', true);
//echo var_dump($notitle);

if ($notitle !== '0' ) { ?>
    <header class="destacados-caption">
        <?php
        //get_the_terms(get_the_ID());
        ?>
        <h3 class="align-center">
          <a href="<?php the_permalink(); ?>" rel="bookmark">
           <?php shortentext(get_the_title(), 38);?>
         </a>
       </h3>
        <?php
        //the_title(sprintf('<h3 class="align-center"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
        //imgd_content(35);
        ?>
    </header><!-- .entry-header -->
<?php } ?>
