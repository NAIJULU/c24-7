<html>
	<!doctype html>
	<head>
		<meta charset='utf-8'><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<script  type='text/javascript' src='http://localhost/c24-7/wp-content/themes/clima/library/js/libs/jquery-1.7.1.min.js'></script>

		<script type="text/javascript">
			$( document ).ready(function() {

				if( $(".widget-lluvia").length > 0 && $(".widget-temp").length > 0 )
				{
					$(".widget-lluvia").css('display','none');
				}

				$("#select-ciudad").change( function(){

					var title = $("#select-ciudad").val();
					title = title.replace(" ", ""); 

					$("#widget-title").html(title);

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

						var title = $("#select-ciudad").val();

						$(".widget-temp").css('display',"none");
						$(".widget-lluvia").css('display',"");

						$(".widget-lluvia .element-ciudad").css('display',"none");
						$(".widget-lluvia .ciudad-"+title).css('display',"");



					});

				}

				if( $("#btn-temperatura").length > 0)
				{
					$("#btn-temperatura").click( function(){

						var title = $("#select-ciudad").val();


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
		
		<div cass="ciudades">
			<select id="select-ciudad">
				<?php 
				foreach ($cw as $key => $value)
				{
					echo '<option value="'.str_replace(' ','',$value->ciudad).'">'.$value->ciudad.'</option>';
				}
				?>
			</select>
		</div>
		<div class="widget-temp-header">
			<h1> Clima 24/7</h1>
			<h1 id="widget-title"> <?php echo $cw[0]->ciudad; ?></h1>
		</div>

		<div id="navbar">
			<?php if( $lluvia == "s" &&  $temperatura == "s" ): ?>
				<input id="btn-lluvia" type="button" value="Lluvia" />
				<input id="btn-temperatura" type="button" value="Temperatura" />
			<?php endif; ?>
		</div>


	<?php if( $lluvia == "s" ): ?>

	<?php $display = "display:none;"; ?>

		<?php foreach ($cw as $key => $ciudad): ?>
				<div class="widget-lluvia">
					<div class="element-ciudad ciudad-<?php str_replace(' ','',$ciudad->ciudad)  ?>" style="<?php echo $display ?>">
						<div class="encabezados">
							<div class="mad">
								<span>Madrugada</span>
							</div>
							<div class="man">
								<span>Mañana</span>
							</div>
							<div class="tar">
								<span>Tarde</span>
							</div>
							<div class="noc">
								<span>Noche</span>
							</div>
						</div>
						<div class="pron-lluvias">
							<div class="mad">
								<?php echo @$lluvias[$ciudad->cod_ciudad]['mad']; ?>
							</div>
							<div class="man">
								<?php echo @$lluvias[$ciudad->cod_ciudad]['man']; ?>
							</div>
							<div class="tar">
								<?php echo @$lluvias[$ciudad->cod_ciudad]['tar']; ?>
							</div>
							<div class="noc">
								<?php echo @$lluvias[$ciudad->cod_ciudad]['noc']; ?>
							</div>
						</div>
					</div>
				</div>
				<?php $display = ""; ?>
		<?php endforeach; ?>
	<?php endif; ?>


	<?php if( $temperatura == "s" ): ?>
	<?php $display = ""; ?>

		<?php foreach ($cw as $key => $ciudad): ?>
				<div class="widget-temp">
					<div class="element-ciudad ciudad-<?php echo str_replace(' ','',$ciudad->ciudad) ?>" style="<?php echo $display ?>" >
						<div class="encabezados">
							<div class="min">
								<span>Minimo</span>
							</div>
							<div class="max">
								<span>Maximo</span>
							</div>
						</div>
						<div class="pron-temp">
							<div class="min">
								<?php echo @$temp[$ciudad->cod_ciudad]['min']; ?>
							</div>
							<div class="max">
								<?php echo @$temp[$ciudad->cod_ciudad]['max']; ?>
							</div>
						</div>
					</div>
					<?php $display = "display:none;" ?>
				</div>
		<?php endforeach; ?>	
	<?php endif; ?>
	</body>
</html>