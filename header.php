<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Filmarte
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'filmarte' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
			<?php get_template_part('template-parts/menu','bootstrap'); ?>
	</header><!-- #masthead -->
