<?php
/**
 * periodical_beta functions and definitions
 *
 * @package periodical_beta
 * @todo Add Read More Link, THA support
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'periodical_beta_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function periodical_beta_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );
	
	/**
	 * Theme Widgets
	 */
	require( get_template_directory() . '/inc/theme-widgets.php' );
	
	/**
	 * Support for the Theme Hooks Alliance hooks. Makes tweaking with child themes or plugins easier.
	 */
	require( get_template_directory() . '/inc/tha-theme-hooks.php' );

	/**
	 * WordPress.com-specific functions and definitions
	 */
	//require( get_template_directory() . '/inc/wpcom.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on periodical_beta, use a find and replace
	 * to change 'periodical_beta' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'periodical_beta', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in two locations.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'periodical_beta' ),
		'secondary' => __( 'Secondary Menu', 'periodical_beta' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // periodical_beta_setup
add_action( 'after_setup_theme', 'periodical_beta_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function periodical_beta_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'periodical_beta_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'periodical_beta_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function periodical_beta_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'periodical_beta' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Featured Area', 'periodical_beta' ),
		'id' => 'home-feature-area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title featured-area-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Widget Area 1', 'periodical_beta' ),
		'id' => 'home-widget-area-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Widget Area 2', 'periodical_beta' ),
		'id' => 'home-widget-area-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Widget Area 3', 'periodical_beta' ),
		'id' => 'home-widget-area-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Widget Area 4', 'periodical_beta' ),
		'id' => 'home-widget-area-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Widget Area 5', 'periodical_beta' ),
		'id' => 'home-widget-area-5',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Homepage Widget Area 6', 'periodical_beta' ),
		'id' => 'home-widget-area-6',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'periodical_beta' ),
		'id' => 'footer-widget-area',
		'before_widget' => '<div id="%1$s" class="footer-widget widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title footer-widget-title">',
		'after_title' => '</h3>',
		'description' => 'By default, the theme supports 4 widgets in the footer. This can be adjusted by modifing the CSS.',
	) );
}
add_action( 'widgets_init', 'periodical_beta_widgets_init' );

/**
 * Modifies excerpt to include a Read More link. This can be modified in a child theme by defining the "periodical_beta_excerpt_more" function
 * Currently not in use.
 *
 *    if ( ! function_exists( 'periodical_beta_excerpt_more' ) ) :
 *       function periodical_beta_excerpt_more( $more ) {
 *       return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
 *    } endif;
 *    add_filter( 'excerpt_more', 'periodical_beta_excerpt_more' );
 */
 
/**
 * Enqueue scripts and styles
 */
function periodical_beta_scripts() {
	wp_enqueue_style( 'periodical_beta-style', get_stylesheet_uri() );

	wp_enqueue_script( 'periodical_beta-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'periodical_beta-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'periodical_beta-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'periodical_beta_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
