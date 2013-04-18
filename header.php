<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package periodical-beta
 */
?><!DOCTYPE html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
    <?php tha_head_top(); ?>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    
    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<?php tha_header_before(); ?>
	<header id="masthead" class="site-header" role="banner">
		<?php tha_header_top(); ?>
		<hgroup class="site-headings">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		
		<span class="logo"><img class="logo" src="<?php echo get_theme_mod( 'periodical-beta-logo' ); ?>" ></span>

		<div class="header-box">
        <?php do_action( 'before-periodical-beta-header-box' ); ?>
            <nav id="site-navigation" class="navigation-main" role="navigation">
                <h1 class="menu-toggle"><?php _e( 'Main Menu', 'periodical-beta' ); ?></h1>
                <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'periodical-beta' ); ?>"><?php _e( 'Skip to content', 'periodical-beta' ); ?></a></div>
    
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav><!-- #site-navigation -->
		<?php do_action( 'after-periodical-beta-header-box' ); ?>
		</div>
		
		<?php do_action( 'periodical-beta-header' ); ?>
		
        <nav role="navigation" class="secondary-navigation">
		    <h1 class="menu-toggle"><?php _e( 'Secondary Menu', 'periodical-beta' ); ?></h1>
		    <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
		</nav><!-- .secondary-navigation -->
		
		<?php tha_header_bottom(); ?>
	</header><!-- #masthead -->

	<div id="main" class="site-main"><?php tha_content_before(); ?>
