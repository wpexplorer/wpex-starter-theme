<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPEX Starter Theme
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">

		<div id="footer-widgets" class="clr">
			
			<div class="footer-widget clr">
				<?php dynamic_sidebar( 'footer_widget_one' ); ?>
			</div><!-- .footer-widget -->

		</div><!-- #footer-widgets -->

		<div id="footer-copyright" class="clr">
			<a href="https://github.com/wpexplorer/wpex-starter-theme"><?php _e( 'Starter Theme for WordPress', 'wpex' ); ?></a>
		</div><!-- #footer-copyright -->

	</footer><!-- #footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
