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

<?php // only add slide show if we have a banner_image
if( get_field('banner_image') && get_field('banner_slideshow') ) { ?>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/reallysimple-slideshow.1.4.11.min.js"></script>
<script>
	// Initialise the array with the current banner image
	var slides = [{url:'<?php the_field('banner_image'); ?>'}];

	// Add the additional slides
	<?php while(the_repeater_field('banner_slideshow')): ?>
	slides.push({url:'<?php the_sub_field('slide'); ?>'});
	<?php endwhile; ?>
	$('#slideshow').rsfSlideshow({interval:6, slides: slides});
</script>
<?php } ?>
</body>
</html>