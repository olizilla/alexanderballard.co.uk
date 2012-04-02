<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Ballard
 * @since Ballard 1.0
 */
?>
	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
				<div id="footer-sidebar1">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
					<?php endif; ?>
				</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
</div><!-- #page .hfeed .site -->
<?php wp_footer(); ?>
</body>
</html>