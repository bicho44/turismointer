<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Turismo_InterOceánico
 */

?>


	<div class="wrapfooter">
		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="container">
				<div class="row">
					<div class="col-md-4"><!-- Menu Social -->
						<?php get_template_part('template-parts/menu', 'social'); ?>
					</div>
						<div class="col-md-8"><!-- Menu Secundario -->
							<?php get_template_part('template-parts/menu', 'secundario'); ?>
						</div>
				</div>
			</div>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://imgdigital.com.ar/', 'turismointer' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'turismointer' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'turismointer' ), 'turismointer', '<a href="http://imgdigital.com.ar" rel="designer">Federico Reinoso</a>' ); ?>
			</div><!-- .site-info -->
	</div> <!-- #wrapfooter -->

<?php wp_footer(); ?>

</body>
</html>
