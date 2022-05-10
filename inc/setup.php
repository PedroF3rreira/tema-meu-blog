<?php 
/**
 * arquivo de configuração de suports para o theme e funcionalidades e scripts de estilos
 * @package WordPress
 * @subpackage theme_simple
 * @since theme simple 1.0
 */
 
 /**
  * adiciona escripts de etilos e funcionalidades de front-end
  * @return void
  */
function themesimple_theme_styles()
{
	wp_enqueue_style( 'theme_css', get_template_directory_uri().'/assets/css/theme.css' );
	
	wp_enqueue_script( 
		'theme_js', 
		get_template_directory_uri().'/assets/js/script.js', 
		array('jquery'), 
		false, 
		true 
	);
}

 function themesimple_theme_suport()
 {	
 	//adiciona links de post no head
 	add_theme_support( 'automatic-feed-links' );
 	
 	//adiciona suporte a imagens de destaque
 	add_theme_support( 'post-thumbnails' );

 	//configura tamanho maximo de thumbnails posts
 	set_post_thumbnail_size( 800, 800 );

 	//registra menu em uma posição
 	register_nav_menu( 'primary', __( 'Menu Primario', 'themesimple' ) );

 	//tamanho do logo costumizado
 	$logo_width = 200;
 	$logo_height = 100;

 	//suporte a logo costumizado
 	add_theme_support( 
 		'custom-logo',
 		array( 
 			'height' 	  => $logo_height,
 			'width' 	  => $logo_width,
 			'flex-height' => true,
 			'flex-width'  => true,
 		 ) 
 	);

 	//adiciona title tag ao head automaticament
 	add_theme_support( 'title-tag' );
 }

 function themesimple_widgets()
 {
 /**
  * Cria um sidebar
  * @param string|array  
  */
     register_sidebar( array(
         'name'          => __( 'Sidebar Right', 'themesimple' ),
         'id'            => 'themesimple-sidebar-right',
         'description'   => 'Um tema simples para busca filtros e categorias',
         'class'         => 'sidebar-right',
         'before_widget' => '<div id="%1$s" class="widget %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="widget-title">',
         'after_title'   => '</h4>',
        ) 
    );
     
 }