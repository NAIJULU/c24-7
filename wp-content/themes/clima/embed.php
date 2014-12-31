<html>
	<!doctype html>
	<head>
		<meta charset='utf-8'><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<script  type='text/javascript' src='http://localhost/c24-7/wp-content/themes/clima/library/js/libs/jquery-1.7.1.min.js'></script>
		<link rel="stylesheet" type="text/css" href="styles-widget.css">
		<script type="text/javascript">
			$( document ).ready(function() {

				if( $(".widget-lluvia").length > 0 && $(".widget-temp").length > 0 )
				{
					$(".widget-lluvia").css('display','none');
				}

				$("#select-ciudad").change( function(){

					var title_f = $("#select-ciudad").val();
					var title = title_f.replace(" ", ""); 

					$("#widget-title").html(title_f);

					if( $(".widget-lluvia").length > 0 )
					{
						$(".widget-lluvia .element-ciudad").css('display','none');
						$(".widget-lluvia .ciudad-"+title).css('display',"");
					}

					if( $(".widget-temp").length > 0 )
					{
						$(".widget-temp .element-ciudad").css('display',"none");
						$(".widget-temp .ciudad-"+title).css('display',"");
					}
				});

				if( $("#btn-lluvia").length > 0 )
				{
					$("#btn-lluvia").click( function(){

						var title_f = $("#select-ciudad").val();
						var title = title_f.replace(" ", "");

						$(".widget-temp").css('display',"none");
						$(".widget-lluvia").css('display',"");

						$(".widget-lluvia .element-ciudad").css('display',"none");
						$(".widget-lluvia .ciudad-"+title).css('display',"");



					});

				}

				if( $("#btn-temperatura").length > 0)
				{
					$("#btn-temperatura").click( function(){

						var title_f = $("#select-ciudad").val();
						var title = title_f.replace(" ", "");

						$(".widget-lluvia").css('display',"none");
						$(".widget-temp").css('display',"");

						$(".widget-temp .element-ciudad").css('display',"none");
						$(".widget-temp .ciudad-"+title).css('display',"");

					});
				}

			});
		</script>
	</head>
	<body>

		<?php include_once('dataEmbed.php'); ?>
		<div class="tema-<?php echo $tema ?>">	
			<div class="widget-temp-header">
				<a href="http://clima247.gov.co/" class="logo-clima" target="_blank"> Clima 24/7</a>
			</div>
			<div class="ciudades">
			<div class="hoy"> <span class="dia"><?php echo $dias[strftime("%w", $hoy)] ?> </span> 
				<span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
				de <span class="mes"><?php echo $meses[date('n')]; ?> </span>
			</div>
			<h1 id="widget-title" class="titulo-ciudad"> <?php echo $cw[0]->ciudad; ?></h1>
			<?php if( count($cw) > 1 ) : ?>
				<select id="select-ciudad" class="select-ciudad">
					<?php 
						foreach ($cw as $key => $value)
						{
							echo '<option value="'.$value->ciudad.'">'.$value->ciudad.'</option>';
						}
					?>
				<?php endif; ?>
				</select>
			</div>
			<div id="navbar">
				<?php if( $lluvia == "s" &&  $temperatura == "s" ): ?>
					<a class="btn-lluvia btn-widget" id="btn-lluvia" >Pronóstico de lluvia<a/>
					<a class="btn-temperatura btn-widget" id="btn-temperatura">Pronóstico de temperatura</a>
				<?php endif; ?>
			</div>


		<?php if( $lluvia == "s" ): ?>

			<?php $display = ""; ?>
			<?php foreach ($cw as $key => $ciudad): ?>
					<div class="widget-lluvia">
						<div class="element-ciudad ciudad-<?php echo str_replace(' ','',$ciudad->ciudad)  ?>" style="<?php echo $display ?>">
							<div class="madrugada">
								<div class="titulo">Madrugada</div>
								<div class="imagen"><?php echo imgNoche( $lluvias[$ciudad->cod_ciudad]['mad'] ) ?></div>
								<div class="pronostico"><?php echo @$lluvias[$ciudad->cod_ciudad]['mad']; ?></div>
							</div>
							<div class="manana">
								<div class="titulo">Mañana</div>
								<div class="imagen"><?php echo imgDia( $lluvias[$ciudad->cod_ciudad]['man'] ) ?></div>
								<div class="pronostico"><?php echo @$lluvias[$ciudad->cod_ciudad]['man']; ?></div>
							</div>
							<div class="tarde">
								<div class="titulo">Tarde</div>
								<div class="imagen"><?php echo imgDia( $lluvias[$ciudad->cod_ciudad]['tar'] ) ?></div>
								<div class="pronostico"><?php echo @$lluvias[$ciudad->cod_ciudad]['tar']; ?></div>
							</div>
							<div class="noche">
								<div class="titulo">Noche</div>
								<div class="imagen"><?php echo imgNoche( $lluvias[$ciudad->cod_ciudad]['noc'] ) ?></div>
								<div class="pronostico"><?php echo @$lluvias[$ciudad->cod_ciudad]['noc']; ?></div>
							</div>
						</div>
					</div>
					
					<?php $display = "display:none;"; ?>
			<?php endforeach; ?>
		<?php endif; ?>


		<?php if( $temperatura == "s" ): ?>
		<?php $display = ""; ?>

			<?php foreach ($cw as $key => $ciudad): ?>
					<div class="widget-temp">
						<div class="element-ciudad ciudad-<?php echo str_replace(' ','',$ciudad->ciudad) ?>" style="<?php echo $display ?>" >
							<div class="minima">
								<div class="min">
									<div class="titulo-temperatura">Minimo</div>
									<div class="img-temperatura">
										<?php echo imgMin( $temp[$ciudad->cod_ciudad]['min'] ) ?>
									</div>
									<div class="grados">
										<?php echo @$temp[$ciudad->cod_ciudad]['min']; ?>
									</div>
								</div>
							</div>
							<div class="maxima">
								<div class="min">
									<div class="titulo-temperatura">Máxima</div>
									<div class="img-temperatura">
										<?php echo imgMax( $temp[$ciudad->cod_ciudad]['max'] ) ?>
									</div>
									<div class="grados">
										<?php echo @$temp[$ciudad->cod_ciudad]['max']; ?>
									</div>
								</div>
							</div>
						</div>
						<?php $display = "display:none;" ?>
					</div>
			<?php endforeach; ?>	
		<?php endif; ?>
		<div class="conoce-clima">
			<a href="http://clima247.gov.co/?utm_source=web&utm_medium=widget&utm_campaign=widget_embebido" target="_blank">¿Quieres conocer más sobre el clima?</a>
		</div>
		</div>
	</body>
</html>