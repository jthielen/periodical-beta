<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package periodical-beta
 */
?>

<?php tha_entry_before(); ?>
<article id="post-0" class="post no-results not-found">
	<?php tha_entry_top(); ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Nothing Found', 'periodical-beta' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'periodical-beta' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'periodical-beta' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'periodical-beta' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .entry-content -->
	<?php tha_entry_bottom(); ?>
</article><!-- #post-0 .post .no-results .not-found -->
<?php tha_entry_after(); ?>