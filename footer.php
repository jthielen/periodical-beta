<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package periodical_beta
 */
?>

	</div><!-- #main -->

	<?php tha_footer_before(); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php tha_footer_top(); ?>
		<div class="widget-area" id="footer-widget-area">
		    <?php dynamic_sidebar( 'footer-widget-area' ); ?>
		</div>
		<div class="site-info">
			<?php do_action( 'periodical_beta_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'periodical_beta' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'periodical_beta' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'periodical_beta' ), 'Periodical Beta', '<a href="http://www.jont.cc" rel="designer">Jon Thielen</a>' ); ?>
		</div><!-- .site-info -->
		<?php tha_footer_bottom(); ?>
	</footer><!-- #colophon -->
	<?php tha_footer_after(); ?>
</div><!-- #page -->

<?php wp_footer(); 
      tha_body_bottom(); 
?>
</body>
</html>