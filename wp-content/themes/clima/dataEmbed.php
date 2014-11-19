<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


define( 'SHORTINIT', true );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );
global $wpdb;  


$id = $_GET['id_widget'];
settype($id, 'int');


$myrows = $wpdb->get_results( "SELECT id_widget, cliente FROM c247_widget WHERE id_widget = $id" );
echo '<pre>';
print_r($myrows);
echo '</pre>';
die;

/*	$prep_stmt = "SELECT id_widget,cliente FROM c247_widget WHERE id_widget = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
   // Verifica el correo electrónico existente.  
    if ($stmt) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) 
        {
            // Ya existe otro usuario con este correo electrónico.
		    $stmt->bind_result($id_widget, $cliente);
		    while ($stmt->fetch()) 
            {
		        printf("%s %s\n", $id_widget, $cliente);
		    }
        }
            $stmt->close();
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
         $stmt->close();
    }
*/


?>