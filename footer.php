<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package selectlinx_theme
 */
?>

</div><!-- #page -->
<div class="cta">
	<h3 class="cta__header">Want to learn more?</h3>
	<a href="mailto:shribar@selectlinx.com" class="cta__link">Email Us</a>
</div>
<footer id="footer" role="contentinfo" class="footer row">
	<div class="copyright">
		<div class="copyright__wrapper">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>&trade;<br>
			<p>All Rights Reserved</p>
		</div>	
		<figure class="copyright__figure">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/diamond.svg" alt="">
		</figure>
	</div>
	
	<p><a href="/index.php?page_id=318" target="_blank" rel="nofollow">Privacy Policy</a></p>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>