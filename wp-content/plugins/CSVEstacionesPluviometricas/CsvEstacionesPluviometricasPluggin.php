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


function cargarCsvPluviometricas()
{
  $msg = "";

        try {

            $path = "http://www.siata.gov.co/TM45/LinkSiataTM_Pluviometricas.csv";
            $i = 0;
            $file = file_get_contents($path, true);
            $lineas = explode("\n", $file);

            foreach ($lineas as $linea)
            {
              if(!empty($linea))
              {

                  $linea  = explode(',', $linea);
          
                  foreach ($linea as $campo)
                  {
                      $csv[$i][] = trim($campo);  
                  }
                  $i = $i + 1;
                  
              }
            }

          
            if(empty($csv))
            {
              $msg = "Error en el archivo CSV, verifique que el archivo tenga el formato correcto.";
              throw new Exception($msg, 1);
            }
            else
            {
              saveInfo($csv);
              $msg = "Archivo CSV cargado con exito. ";
            }

          } catch (Exception $e) 
          {
            $msg = "Error al intentar leer el archivo CSV.";
          }


          saveLog('carga automatica',$msg);
}






?>