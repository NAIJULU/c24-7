<?php

$ultimaActualizacion = get_option('_csv_es_fecha');

readCsv();
$csv = array();

function readCsv()
{


	if( isset($_FILES['archivo_usuario']) )
	{

		if( ( $_FILES['archivo_usuario']['size'] * 1024) <  800000000)
		{
			$ext = explode(".", $_FILES['archivo_usuario']['name']);

			if( $ext[1] == 'csv' || $ext[1] == 'CSV')
			{

				try {
						$path = $_FILES['archivo_usuario']['tmp_name'];
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
											$csv[$i][] = $campo;	
									}
									$i = $i + 1;
									
							}
						}

					
						if(empty($csv))
						{
							throw new Exception("Error en el archivo CSV, verifique que el archivo tenga el formato correcto.", 1);
						}
						else
						{
							echo '<pre>';
							var_dump($csv);
							echo '</pre>';
						}

					} catch (Exception $e) 
					{
						echo "Error al intentar leer el archivo CSV.";
					}

			}
			else
			{
				echo "extencion incorrecta.";
			}

		}
		else
		{
			echo "el archivo supera el maximo tamaño permitido.";
		}

	}

}

function saveInfo()
{

	if( isset($_POST[$opt_name]) )
	{
		if(isset($_POST['option_num'] ))
		{
			$ultimaActualizacion = date('d/m/Y');
			$dato30m  	= $_POST['dato30m'];
			$dato1h   	= $_POST['dato1h'];
			$dato3h 	= $_POST['dato3h'];
			update_option( '_csv_es_dato30m', $dato30m );		
			update_option( '_csv_es_dato1h', $dato1h );		
			update_option( '_csv_es_dato3h', $dato3h );		
		}
	}

}


?>

<div id="view-post-admin">
	<div class="view-post-admin-form">
		<form id="form" enctype="multipart/form-data" action="" method="post" class="form-inline">
			<header>
				<h1>Cargas de CSV para estaciones pluviometricas.</h1>
				<label><?php echo $ultimaActualizacion ?></label> 
			</header>
			<section>
				<article>
					  <input type="file" class="input-medium" id="archivo_usuario" name="archivo_usuario" >
					  <input type="submit" name="Submit" class="button-primary" value="Cargar" >	
				</article>
			</section>
		</form>	
	</div>
</div>