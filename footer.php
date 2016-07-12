<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Johns_Work
 */

?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
				<div class="site-info">
					Johnswork.com &copy;<?php echo date('Y'); ?> John Horoszewski. All Rights Reserved.
				</div><!-- .site-info -->
			<div class="social">
				<a href="https://twitter.com/jhoroszewski" class="twitter" target="_blank"></a>
				<a href="https://www.behance.net/John-Horoszewski" class="behance" target="_blank"></a>
				<a href="https://plus.google.com/107261841505102089888" class="google-plus" target="_blank"></a>
				<a href="https://www.linkedin.com/in/john-horoszewski-aa259020" class="linkedin" target="_blank"></a>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>