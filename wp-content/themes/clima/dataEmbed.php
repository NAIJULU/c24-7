<?php

define( 'SHORTINIT', true );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/c24-7/wp-load.php' );
$pathImages = $_SERVER['DOCUMENT_ROOT'] . '/c24-7/wp-content/themes/clima/images/';

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




function imgNoche($prob)
{
  $pathImages = 'images/';

  $return = '<div class="pron-imagen">';

  if( strtolower($prob) == 'baja')
  {
     
    $return .= '<img src="'.$pathImages.'BAJANOCHE.png'.'" >';

  }


  if( strtolower($prob) == 'media')
  {
     $return .= '<img src="'.$pathImages.'MEDIANOCHE.png'.'" >';
  }


  if( strtolower($prob) == 'alta')
  {
     $return .= '<img src="'.$pathImages.'ALTANOCHE.png'.'" >';
  }

  $return .= '</div>';

  return $return;


}


function imgDia($prob)
{
  $pathImages = 'images/';

  $return = '<div class="pron-imagen">';

  if( strtolower($prob) == 'baja')
  {
     
    $return .= '<img src="'.$pathImages.'BAJADIA.PNG'.'" >';

  }


  if( strtolower($prob) == 'media')
  {
     $return .= '<img src="'.$pathImages.'MEDIA.png'.'" >';
  }


  if( strtolower($prob) == 'alta')
  {
     $return .= '<img src="'.$pathImages.'MEDIAALTADIA.PNG'.'" >';
  }

  $return .= '</div>';

  return $return;

}

function imgMax($maxima)
{

  $pathImages = 'images/';

  $return = '<div class="temp-imagen">';

  if( $maxima > 0 && $maxima <= 15 )
  {
     $return .= '<img src="'.$pathImages.'t-azul.png'.'" >';
  }
  else
  {
    if( $maxima > 15 && $maxima <= 22 )
    {
      $return .= '<img src="'.$pathImages.'t-verde.png'.'" >';
    }
    else
    {
      if( $maxima > 22 &&  $maxima <= 29 )
      {
        $return .= '<img src="'.$pathImages.'t-amarillo.png'.'" >';
      }
      else
      {
        if( $maxima > 29 && $maxima <= 37)
        {
          $return .= '<img src="'.$pathImages.'t-naranja.png'.'" >';
        }
        else
        {
          if( $maxima > 37 )
          {
            $return .= '<img src="'.$pathImages.'t-rojo.png'.'" >';
          }
          else
          {
            $return .= '<img src="'.$pathImages.'t-azul.png'.'" >';
          }
        }
      }
    }
  }

  $return .= '</div>';

  return $return;

}

function imgMin($minima)
{
    $pathImages = 'images/';

    $return = '<div class="temp-imagen">';

    if( $minima > 0 && $minima <= 15 )
    {
     $return .= '<img src="'.$pathImages.'t-azul.png'.'" >';
    }
    else
    {
      if( $minima > 15 && $minima <= 22 )
      {
         $return .= '<img src="'.$pathImages.'t-verde.png'.'" >';
      }
      else
      {
        if( $minima > 22 &&  $minima <= 29 )
        {
           $return .= '<img src="'.$pathImages.'t-amarillo.png'.'" >';
        }
        else
        {
          if( $minima > 29 && $minima <= 37)
          {
            $return .= '<img src="'.$pathImages.'t-naranja.png'.'" >';
          }
          else
          {
            if( $minima > 37 )
            {
              $return .= '<img src="'.$pathImages.'t-rojo.png'.'" >';
            }
            else
            {
              $return .= '<img src="'.$pathImages.'t-azul.png'.'" >';
            }
          }
        }
      }
    }

    $return .= '</div>';

    return $return;
}


?>