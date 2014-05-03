<?php
/*
Plugin Name: CSV Estaciones Pluviometricas.
Plugin URI: http://wordpress.org
Description: Permite cargar e interpretar los datos del CSV para ser mostrados de manera grafica en la pagina.
Version: 1.0
Author: Pablo Martinez
License: GPL2
*/
if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');



add_action( 'admin_menu', 'admin_csv_estaciones_pluviometricas' );
//add_action( 'widgets_init', 'creaWidgetView' );

function admin_csv_estaciones_pluviometricas()
{
	add_options_page( 'CSV Estaciones Pluviometricas', 'CSV Estaciones Pluviometricas', 'manage_options', 'csvesplumenu', 'csvepadmin' );
}

function csvepadmin()
{
	include(WP_PLUGIN_DIR.'/CSVEstacionesPluviometricas/csvepadmin.php');  
}
/*
function creaWidgetView()
{
	 include_once(WP_PLUGIN_DIR.'/mostviewpost/mostViewPostWidget.php');
   include_once(WP_PLUGIN_DIR.'/mostviewpost/mostCommentPostWidget.php');
	 register_widget( 'mostViewPostWidget' );
   register_widget( 'mostCommentPostWidget' );
}
*/

/* CountArticle
 Poner despues del LOOP de la categoria de articulo deseado esta linea.
 <?php if( function_exists('countArticle') ){ countArticle( $post->ID,get_the_category() ); } ?> */
 /*
function countArticle($post, $category )
{

if($post)
{

  $option = get_option('optionPost' );
  $option =  ( !empty($option) ) ? $option : 0;

	foreach ($category as $key => $value) 
	{
		if($value->cat_ID == $option )
		{
      $getCountView = get_post_meta( $post, 'count_view', true);

			if( empty( $getCountView ) )
			{
				add_post_meta( $post,'count_view', 1 );
			}
			else
			{	
				 $contActual = get_post_meta( $post , 'count_view', true);
				 update_post_meta( $post, 'count_view', $contActual + 1);
			}
		}
	}

}


}

*/



?>