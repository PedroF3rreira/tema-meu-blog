<?php 
/**
 * theme simple funcionalidades e definiçoes
 * 
 * @package WordPress 
 * @subpackage theme_simple
 * @since theme simple
 * 
 **/
require get_template_directory().'/inc/setup.php';

/**
 * adiciona scripts na ppagina
 * **/
add_action( 'wp_enqueue_scripts', 'themesimple_theme_styles' );
add_action( 'after_setup_theme', 'themesimple_theme_suport' );
add_action( 'widgets_init' , 'themesimple_widgets' );