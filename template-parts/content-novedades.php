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

	<header class="entry-header">
		<?php
			if (has_post_thumbnail()){
				the_post_thumbnail('stamp', array('class'=>'img-circle'));
			}
		 ?>
		 <h4>
			 <a href="<?php get_the_permalink(); ?>">
				<?php	ShortenText(get_the_title());?>
			</a>
		</h4>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
			imgd_content( 15);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
