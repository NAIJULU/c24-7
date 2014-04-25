<?php
/*
Plugin Name: Most View Post
Plugin URI: http://wordpress.org
Description: permite mostrar los articulos mas vistos mediante un widget.
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



add_action( 'admin_menu', 'admin_menu_view_post' );
add_action( 'widgets_init', 'creaWidgetView' );

function admin_menu_view_post()
{
	add_options_page( 'Menu view post', 'Most View Post', 'manage_options', 'viewPostMenu', 'viewPostAdmin' );
}

function viewPostAdmin()
{
	include(WP_PLUGIN_DIR.'/mostviewpost/mostViewPostAdmin.php');  
}

function creaWidgetView()
{
	 include_once(WP_PLUGIN_DIR.'/mostviewpost/mostViewPostWidget.php');
	 register_widget( 'mostViewPostWidget' );
}

function getCategorias($default)
{

  $options = '';

  $args = array(
    'orderby' => 'name'
  );

  $categories = get_categories( $args );


 if( empty($default))
  {
      $options .= '<option selected value=""></option>';                 
  }
  else
  {
      $options .= '<option value=""></option>';                 
  }


  foreach ($categories as  $value) 
  {
      if( $default == $value->cat_ID )
      {
        $options .= '<option selected value="'.$value->cat_ID.'">'.ucwords($value->name).'</option>';     
      }
      else
      {
        $options .= '<option value="'.$value->cat_ID.'">'.ucwords($value->name).'</option>';       
      }
  
  }

  return $options;

}


function countArticle($post, $category )
{

if($post)
{
	foreach ($category as $key => $value) 
	{
		if($value->cat_ID == get_option('optionPost') )
		{
			if( empty( get_post_meta( $post, 'count_view', true) ) )
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





?>