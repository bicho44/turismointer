<?php
/**
* The template for the Front Page
*
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Filmarte
*/

get_header(); ?>

<?php get_template_part('template-parts/carrousel'); ?>

<?php get_template_part('template-parts/content-front-destacados'); ?>

<?php
while ( have_posts() ) : the_post();
	the_content();
endwhile; // End of the loop.
?>

<?php
get_footer();
