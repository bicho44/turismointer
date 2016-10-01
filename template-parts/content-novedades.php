<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Turismo_InterOceánico
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('ultimas'); ?>>
	<?php
		if (has_post_thumbnail()){
			the_post_thumbnail('thumbnail',array('class'=>'img-circle float-left'));
		}
	 ?>
	<header class="entry-header">
		<?php	the_title(sprintf('<h3><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			imgd_content( 35);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
