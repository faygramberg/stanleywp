<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PerottiPaintings
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>
			</div>
			<div class="site-info">
				&copy; <?php bloginfo( 'name' );
						echo ' - ';
						echo date("Y"); ?>
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
