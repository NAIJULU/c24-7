<?php

$tema     = $_POST['tema'];
$opcion1  = ( isset($_POST['opcion1']) ) ? $_POST['opcion1'] : 0;
$opcion2  = ( isset($_POST['opcion2']) ) ? $_POST['opcion2'] : 0;
$ciudad   = ( isset($_POST['ciudades']) ) ? $_POST['ciudades'] : null;



settype($opcion1, "int");
settype($opcion2 ,"int" );

if($opcion1 > 0) 
{
	$opcion1 = 's';
}
else
{
	$opcion1 = 'n';
}

if($opcion2 > 0) 
{
	$opcion2 = 's';
}
else
{
	$opcion2 = 'n';
}


settype($tema, "int");

$nombre     = filter_var($_POST['nombre'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$correo     = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);
$web        = filter_var($_POST['web'],FILTER_SANITIZE_URL);
$fecha 		= date('Y-m-d H:i:s');

global $wpdb;
$query = "INSERT INTO c247_widget
(
cliente,
correo,
web,
lluvia,
temperatura,
tema,
fecha,
estado
)
VALUES
(
'%s',
'%s',
'%s',
'%s',
'%s',
%d,
'%s',
%d
);";

if( $ciudad != null )
{
	if( $wpdb->query(sprintf($query,$nombre,$correo,$web,$opcion1,$opcion2,$tema,$fecha,1)) )
	{
		$lastId = mysql_insert_id();

		foreach ($ciudad as $key => $value) 
		{
			$queryrel = "INSERT INTO c247_widget_ciudad
			(
			widget,
			ciudad,
			estado
			)
			VALUES
			(
			%d,
			%d,
			'%s'
			);";

			$wpdb->query(sprintf($queryrel,$lastId,$value,'1'));
		}

		echo '<div class="alert alert-success">Widget Creado</div>';
	}
	else
	{
		echo '<div class="alert alert-error">Error al crear widget</div>';
	}

}

?>
