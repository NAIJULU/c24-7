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

function admin_widget()
{
	add_options_page( 'Widget Registrados', 'Widget Registrados', 'manage_options', 'adminView', 'adminView' );
}


function adminView()
{	

    global $wpdb;

    $total =    null;
    $max_pag =  null;
    $limit =    null;

    $pag = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

    $query        = "SELECT count(*) AS total, TRUNCATE( (count(*) / 30), 0 ) AS pag from c247_widget ;";
    $info_query   = $wpdb->get_results($query);

    foreach ($info_query as $key => $value) 
    {
      $total    = $value->total;
      $max_pag  = $value->pag;
    }

    if( $total <= 30 )
    {
      $limit = '';
    }
    else
    {

        if( $pag == 1 )
        {
          $limit = 'LIMIT 30';
        }
        else
        {
          if( $pag > 1)
          {
            $incr  =  ($pag-1) * 30; 
            $limit = "LIMIT 30 , $incr "; 
          }

        }

    }

    $query    = "SELECT cliente,correo,web,fecha FROM c247_widget ORDER BY fecha DESC $limit;";
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
  <link href="<?php echo WP_PLUGIN_URL.'/widgetview/widgetadmin.css' ?>" rel="stylesheet">
  <div class="widget-admin">
    <table class="tabla-widget">
    <tr class="enc">
      <th>Cliente</th>
      <th class="medium">Correo</th>
      <th class="medium">Web</th>
      <th>fecha</th>
    </tr>

    <?php echo $columns ?>
      
    </table>



    <div class="paginador">
      <div class="info">
        <span>Total </span> <span> <?php echo $total ?></span>
      </div>
        <div class ="area-izquierda">
          <?php if( $pag > 1 ): ?>
            <?php $incr = $pag - 1 ; ?>
            <a href="<?php echo 'http://localhost/c24-7/wp-admin/options-general.php?page=adminView&pagina='.$incr ?>" class="ant"> Anterior  </a> 
          <?php endif; ?>
        </div>
        <div class="area-derecha">
          <?php if( ( $pag * 30) < $total ): ?>
          <?php $incr = $pag +1 ; ?>

            <a href="<?php echo 'http://localhost/c24-7/wp-admin/options-general.php?page=adminView&pagina='.$incr ?>" class="sig"> Siguiente  </a> 
          <?php endif; ?>
        </div>
    </div>
  </div>

<?php
}







?>