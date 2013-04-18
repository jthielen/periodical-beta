<?php
/**
 * The Template for displaying all single posts.
 *
 * @package periodical-beta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php tha_content_top(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php periodical-beta_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
						tha_comments_before();
                        comments_template();
                        tha_comments_after();
                }
			?>

		<?php endwhile; // end of the loop. ?>

		<?php tha_content_bottom(); ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php tha_content_after(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>