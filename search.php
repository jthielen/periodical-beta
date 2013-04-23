<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package periodical_beta
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php tha_content_top(); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'periodical_beta' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php periodical_beta_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'search' ); ?>

		<?php endif; ?>

		<?php tha_content_bottom(); ?>
		</div><!-- #content -->
	</section><!-- #primary -->
	<?php tha_content_after(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>