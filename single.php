<?php
/**
 * The Template for displaying all single posts.
 *
 * @package periodical_beta
 * @todo add coauthors functionality
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php tha_content_top(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php periodical_beta_content_nav( 'nav-below' ); ?>
			
			<?php
			//retrieves author metadata for use in the below author information box 
			$author1_id=get_the_author_meta( 'id' );
            $author1_description=get_the_author_meta( 'description' );
            $author1_email=get_the_author_meta( 'user_email' );
            $avatar_size=get_theme_mod( 'periodical_avatar_size' , 60 );
            ?>
			
			<div class="author-info">
				<h3 class="author-info">Author Info</h3>
				<?php do_action( 'author_box_before' ); ?>
				<div class='author-box'>
					<?php do_action( 'author_box_top' ); ?>
					<span class='gravatar'>
						<?php echo get_avatar( $author1_email, $avatar_size ); ?>
						<a class="author-info-link" href="<?php the_author_meta( 'user_url' ); ?>" ><?php the_author_meta( 'display_name '); ?></a>
					</span>
					<p class="author-description"><?php esc_attr_e($author1_description); ?></p>
					<?php do_action( 'author_box_bottom' ); ?>
				</div>
				<?php do_action( 'author_box_after' ); ?>
			</div>
			
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
