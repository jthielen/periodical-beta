<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package periodical-beta
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="widget-area" id="footer-widget-area">
		    <?php dynamic_sidebar( 'footer-widget-area' ); ?>
		</div>
		<div class="site-info">
			<?php do_action( 'periodical-beta_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'periodical-beta' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'periodical-beta' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'periodical-beta' ), 'Periodical Beta', '<a href="http://www.jont.cc" rel="designer">Jon Thielen</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>