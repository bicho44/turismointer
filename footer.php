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
					<div class="col-md-offset-8 col-md-3"><!-- Menu Social -->
						<?php get_template_part('template-parts/menu', 'social'); ?>
					</div>
				</div>
				<div class="row">
						<?php get_template_part('template-parts/menu', 'acompanan'); ?>
				</div>
				<div class="row">
					<?php //imgd_credits(); ?>
				</div>
			</div>
		</footer>
	</div> <!-- #wrapfooter -->

<?php wp_footer(); ?>
<script type="application/javascript">
  (function(b, o, n, g, s, r, c) {
    if (b[s]) return;
    b[s] = {};
    b[s].scriptToken = "Xy05ODc5MjkyMQ";
    r = o.createElement(n);
    c = o.getElementsByTagName(n)[0];
    r.async = 1;
    r.src = g;
    r.id = s + n;
    c.parentNode.insertBefore(r, c);
  })(window, document, "script",
  "//cdn.oribi.io/Xy05ODc5MjkyMQ/oribi.js", "ORIBI");
</script>

</body>
</html>
