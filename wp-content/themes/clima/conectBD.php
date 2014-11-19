<?php
/* detalles de las constantes para la conexion a la BASE DE DATOS
*/
ini_set('display_errors', 1);


define('HOST','192.168.2.110'); 
define('USER','root');
define('PASSWORD','mysql');
define('DATABASE','med2018_clima');

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
?>