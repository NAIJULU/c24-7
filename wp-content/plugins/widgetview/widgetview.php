<?php
/*
Plugin Name: Widget View
Plugin URI: http://wordpress.org
Description: Permite listar los widget registrados.
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


add_action( 'admin_menu', 'admin_widget' );
//add_action( 'widgets_init', 'creaWidgetView' );

function admin_widget()
{
	add_options_page( 'Widget Registrados', 'Widget Registrados', 'manage_options', 'adminView', 'adminView' );
}


function adminView()
{	



    global $wpdb;  

    $query    = "SELECT cliente,correo,web,fecha FROM c247_widget;";
    $results  = $wpdb->get_results($query);
    $ciudad   = array();
    $columns  = "";
    foreach ($results as $key => $value) 
    {
      $columns .= "<tr>";
      $columns .= "<td> $value->cliente </td>";
      $columns .= "<td> $value->correo </td>";
      $columns .= "<td> $value->web </td>";
      $columns .= "<td> $value->fecha </td>";
      $columns .= "</tr>";
    }

    
?>
  
  <div class="widget-admin">
    <table>
    <tr>
      <th>Cliente</th>
      <th>Correo</th>
      <th>Web</th>
      <th>fecha</th>
    </tr>

    <?php echo $columns ?>
      
    </table>
  </div>

<?php
}







?>