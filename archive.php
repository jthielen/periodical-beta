<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package periodical-beta
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php tha_content_top(); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							printf( __( 'Category Archives: %s', 'periodical-beta' ), '<span>' . single_cat_title( '', false ) . '</span>' );

						elseif ( is_tag() ) :
							printf( __( 'Tag Archives: %s', 'periodical-beta' ), '<span>' . single_tag_title( '', false ) . '</span>' );

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'periodical_beta' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
                            $author1_id=get_the_author_meta( 'id' );
                            $author1_description=get_the_author_meta( 'description' );
                            $author1_name=get_the_author_meta( 'display_name' );
                            $author1_email=get_the_author_meta( 'user_email' );
                            /* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'periodical-beta' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'periodical-beta' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'periodical-beta' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'periodical-beta' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'periodical-beta');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'periodical-beta' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'periodical-beta' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'periodical-beta' );

						else :
							_e( 'Archives', 'periodical-beta' );

						endif;
					?>
				</h1>
				<?php
					if ( is_category() ) :
						// show an optional category description
						$category_description = category_description();
						if ( ! empty( $category_description ) ) :
							echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );
						endif;

					elseif ( is_tag() ) :
						// show an optional tag description
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) ) :
							echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
						endif;
						
                    elseif ( is_author() ) :
                        $avatar_size=get_theme_mod( 'periodical_avatar_size' , 60 );
                        //show an author box if the user has a description filled out
                        if ( ! empty( $author1_description ) ) : ?>
                            <div class='author-box'><span class='gravatar'><?php echo get_avatar( $author1_email, $avatar_size ); ?></span><p class="author-description"><?php esc_attr_e($author1_description); ?></p></div>
                    <?php
                        endif;

					endif;
				?>
			</header><!-- .page-header -->

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

			<?php periodical-beta_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		<?php tha_content_bottom(); ?>
		</div><!-- #content -->
	</section><!-- #primary -->
	<?php tha_content_after(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>