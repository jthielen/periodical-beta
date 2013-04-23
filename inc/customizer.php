<?php
/**
 * periodical_beta Theme Customizer
 *
 * @package periodical_beta
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function periodical_beta_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->add_section( 'periodical_beta-main-options' , array(
	    'title' => __('Periodical Beta Main Options','periodical_beta'),
	    'priority' => 10,
    ) );
    
    $wp_customize->add_setting( 'widget-based-homepage' , array(
    'default'     => 'false',
    ) );
    $wp_customize->add_setting( 'periodical_beta-logo' , array(
    'default'     => '',
    ) );

    $wp_customize->add_control( 'widget-based-homepage-checkbox' , array(
    'settings'    => 'widget-based-homepage',
    'label'       => __( 'Widget-Based Homepage'),
    'section'     => 'periodical_beta-main-options',
    'type'        => 'checkbox',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image', array(
        'label' => __('Logo'),
        'section' => 'periodical_beta-main-options',
        'settings' => 'periodical_beta-logo',
    ) ) );
}
add_action( 'customize_register', 'periodical_beta_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function periodical_beta_customize_preview_js() {
	wp_enqueue_script( 'periodical_beta_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130304', true );
}
add_action( 'customize_preview_init', 'periodical_beta_customize_preview_js' );
