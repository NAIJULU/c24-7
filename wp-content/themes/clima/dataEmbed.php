<?php

define( 'SHORTINIT', true );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/c24-7/wp-load.php' );
global $wpdb;  

ini_set('display_errors', 1);

$id = $_GET['id_widget'];
settype($id, 'int');


$query  = "SELECT id_widget, cliente, correo, web, lluvia, temperatura, tema FROM c247_widget WHERE id_widget = %d LIMIT 1";
$result = $wpdb->get_results( sprintf($query,$id) );

// variables del widget
$cliente     = null;
$correo      = null;
$web         = null;
$lluvia      = null;
$temperatura = null;
$tema        = null;

foreach ($result as $key => $widget) 
{

    $cliente      = $widget->cliente;
    $correo       = $widget->correo;
    $web          = $widget->web;
    $lluvia       = $widget->lluvia;
    $temperatura  = $widget->temperatura;
    $tema         = $widget->tema;
}



$queryrel   = "SELECT wc.widget,c.ciudad, wc.ciudad as cod_ciudad, c.option_name FROM c247_widget_ciudad wc ".
              "LEFT JOIN c247_ciudades c ON  ( wc.ciudad = c.id_ciudad ) ".
              "WHERE widget = %d AND wc.estado = 1";
$cw         = $wpdb->get_results( sprintf($queryrel,$id) );

if( $lluvia == "s")
{

  $lluvias    = array(); 

  foreach ($cw as $key => $ciudad) 
  {
    $query      = "SELECT option_name , option_value FROM c247_options WHERE LOWER(option_name) LIKE  '%s' ;";
    $RLluvias   = $wpdb->get_results( sprintf($query, 'lluv%'.strtolower($ciudad->option_name)));

    foreach ($RLluvias as $key => $value) 
    {

       if( strpos( strtolower($value->option_name), 'mad') )
       {
            $lluvias[$ciudad->cod_ciudad]['mad'] = $value->option_value;       
       }
       else
       {
           if(strpos( strtolower($value->option_name), 'man') )
           {
              $lluvias[$ciudad->cod_ciudad]['man'] = $value->option_value;
           }
          else
          {
              if( strpos( strtolower($value->option_name), 'tar') )
              {
                  $lluvias[$ciudad->cod_ciudad]['tar'] = $value->option_value;
              }
              else
              {
                  if( strpos( strtolower($value->option_name), 'noc') )
                  {
                      $lluvias[$ciudad->cod_ciudad]['noc'] = $value->option_value;
                  }   
              }
          }
        }

    } 

  }
}

if( $temperatura == "s")
{    

  $temp    = array(); 

  foreach ($cw as $key => $ciudad) 
  {
    $query   = "SELECT option_name , option_value FROM c247_options WHERE LOWER(option_name) LIKE  '%s' ;";
    $RTemp   = $wpdb->get_results( sprintf($query, 'temp%'.strtolower($ciudad->option_name)));

    foreach ($RTemp as $key => $value) 
    {
       if( strpos( strtolower($value->option_name), 'min') )
       {
            $temp[$ciudad->cod_ciudad]['min'] = $value->option_value;       
       }
       else
       {
         if(strpos( strtolower($value->option_name), 'max') )
         {
            $temp[$ciudad->cod_ciudad]['max'] = $value->option_value;
         }
       }
    }

  }




}


?>