<?php

$ultimaActualizacion = get_option('_csv_es_fecha');

$msg = readCsv();
$csv = array();

function readCsv()
{

	$msg = "";

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

			}
			else
			{
				$msg =  "extencion incorrecta.";
			}

		}
		else
		{
			$msg =  "el archivo supera el maximo tamaño permitido.";
		}



	}

   saveLog('carga manual por administrador', $msg);
   return $msg; 

}




?>

<div id="view-post-admin">
	<div class="view-post-admin-form">
		<form id="form" enctype="multipart/form-data" action="" method="post" class="form-inline">
			<header>
				<?php if(!empty($msg)) echo $msg ;?>
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