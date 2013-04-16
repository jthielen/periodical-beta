<?php
/**
 * Home Page Template File. 
 * This uses index.php style listings by default, but you can enable the 
 * widget based homepage by checking the customizer option.
 *
 * @package Periodical-Beta
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
			<?php tha_content_top(); ?>

<?php if ( get_theme_mod( 'widget-based-homepage' ) ) : ?>
			
			<div id="homepage-wrapper">
                <div class="widget-area" id="featured-area">
                    <?php do_action( 'homepage-featured-area' ); ?>
                    <?php dynamic_sidebar( 'home-feature-area' ); ?>
                </div>
                <div class="widget-area" id="home-widget-area-1">
                    <?php dynamic_sidebar( 'home-widget-area-1' ); ?>
                </div>
                <div class="widget-area" id="home-widget-area-2">
                    <?php dynamic_sidebar( 'home-widget-area-2' ); ?>
                </div>
                <div class="widget-area" id="home-widget-area-3">
                    <?php dynamic_sidebar( 'home-widget-area-3' ); ?>
                </div>
                <div class="widget-area" id="home-widget-area-4">
                    <?php dynamic_sidebar( 'home-widget-area-4' ); ?>
                </div>
                <div class="widget-area" id="home-widget-area-5">
                    <?php dynamic_sidebar( 'home-widget-area-5' ); ?>
                </div>
                <div class="widget-area" id="home-widget-area-6">
                    <?php dynamic_sidebar( 'home-widget-area-6' ); ?>
                </div>
			</div><!-- #homepage-wrapper -->
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
			
<?php else : ?>
			
			    <div class="widget-area" id="index-featured-area">
                    <?php do_action( 'homepage-featured-area' ); ?>
                    <?php dynamic_sidebar( 'home-feature-area' ); ?>
                </div>
			
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php periodical_beta_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

			<?php tha_content_bottom(); ?>
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->
    <?php tha_content_after(); ?>
    <?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>