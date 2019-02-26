<?php
/**
 * Blog theme options
 * @package WordPress
 * @subpackage Bizz WPExplorer Theme
 * @since Bizz 1.0
 */



add_action( 'customize_register', 'wpex_customizer_blog' );

function wpex_customizer_blog($wp_customize) {

	// Blog Section
	$wp_customize->add_section( 'wpex_blog' , array(
		'title'      => __( 'Blog', 'wpex' ),
		'priority'   => 240,
	) );
	
	// Enable/Disable Readmore
	$wp_customize->add_setting( 'wpex_blog_readmore', array(
		'type'		=> 'theme_mod',
		'default'	=> '1'
	) );

	$wp_customize->add_control( 'wpex_blog_readmore', array(
		'label'		=> __('Read More Link','wpex'),
		'section'	=> 'wpex_blog',
		'settings'	=> 'wpex_blog_readmore',
		'type'		=> 'checkbox',
		'priority'	=> '1',
	) );

	// Enable/Disable Featured Images on Entries
	$wp_customize->add_setting( 'wpex_blog_entry_thumb', array(
		'type'		=> 'theme_mod',
		'default'	=> '1'
	) );

	$wp_customize->add_control( 'wpex_blog_entry_thumb', array(
		'label'		=> __('Featured Image on Entries','wpex'),
		'section'	=> 'wpex_blog',
		'settings'	=> 'wpex_blog_entry_thumb',
		'type'		=> 'checkbox',
		'priority'	=> '1',
	) );

	// Enable/Disable Featured Images on Posts
	$wp_customize->add_setting( 'wpex_blog_post_thumb', array(
		'type'		=> 'theme_mod',
		'default'	=> '1'
	) );

	$wp_customize->add_control( 'wpex_blog_post_thumb', array(
		'label'		=> __('Featured Image on Posts','wpex'),
		'section'	=> 'wpex_blog',
		'settings'	=> 'wpex_blog_post_thumb',
		'type'		=> 'checkbox',
		'priority'	=> '1',
	) );
		
		
}