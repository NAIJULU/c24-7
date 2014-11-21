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


   $cliente = $widget->cliente;
    $correo  = $widget->correo;
    $web     = $widget->web;
    $lluvia  = $widget->lluvia;
    $temperatura = $widget->temperatura;
    $tema    = $widget->tema;
} 

if( $lluvia == "s")
{
    $query      = "SELECT DISTINCT option_name , option_value FROM c247_options WHERE LOWER(option_name) LIKE '%s' ;";
    $RLluvias   = $wpdb->get_results( sprintf($query, 'lluv%medellin'));

    $lluvias    = array(); 


    foreach ($RLluvias as $key => $value) 
    {

       if( strpos( strtolower($value->option_name), 'mad') )
       {
            $lluvias['mad'] = $value->option_value;       
       }
       else
       {
         if(strpos( strtolower($value->option_name), 'man') )
         {
            $lluvias['man'] = $value->option_value;
         }
        else
        {
            if( strpos( strtolower($value->option_name), 'tar') )
            {
                $lluvias['tar'] = $value->option_value;
            }
            else
            {
                if( strpos( strtolower($value->option_name), 'noc') )
                {
                    $lluvias['noc'] = $value->option_value;
                }   
            }

        }
       }
    } 



}

if( $temperatura == "s")
{
    $query   = "SELECT DISTINCT option_name , option_value FROM c247_options WHERE LOWER(option_name) LIKE '%s' ;";
    $RTemp   = $wpdb->get_results( sprintf($query, 'temp%medellin'));
    $temp    = array(); 


    foreach ($RTemp as $key => $value) 
    {
       if( strpos( strtolower($value->option_name), 'min') )
       {
            $temp['min'] = $value->option_value;       
       }
       else
       {
         if(strpos( strtolower($value->option_name), 'max') )
         {
            $temp['max'] = $value->option_value;
         }
       }
    }
}


?>