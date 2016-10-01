<?php
/**
* The template for the Front Page
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Filmarte
*/

get_header(); ?>

<?php
$opciones_imgd = get_option('opciones_imgd');
//echo piklist::pre($opciones_imgd);
$video = $opciones_imgd['imgd_video'];
$videolink = $opciones_imgd['imgd_video_link'];
$destacados = $opciones_imgd['imgd_destaca'];
$columnas = $opciones_imgd['imgd_columnas'];
//echo piklist::pre($video);
//var_dump($video);

// Secciones Front Page

// 1 Video
// 1.1 @todo Poner la opción donde elijo el video a mostrar.

// 2 Ubicaciones
// 2.0 Maximo 4
// 2.1 Sólo muestro las Ubicaciones que tengan data
// 2.2 Sólo mostar la última
// 2.3

// 3 Programas

 ?>
 <?php
 while ( have_posts() ) : the_post();
 	the_content();
 endwhile; // End of the loop.
 ?>

 <?php
 if ($video!=0){
	 if ($videolink!='') {
	 global $wp_embed;
	 ?>
	 <div class="video-programa">
		 <?php echo $wp_embed->run_shortcode( '[embed]' . $videolink . '[/embed]' );
		 //echo do_shortcode("[youtube $videolink]");
		 ?>
	 </div>
<?php }
}
?>

<?php if ($destacados!=0){?>
<?php get_template_part('template-parts/content-front-destacados'); ?>
<?php } ?>


<?php if ($columnas!=0){?>
<?php get_template_part('template-parts/content-front-columnas'); ?>
<?php } ?>

<?php
get_footer();
