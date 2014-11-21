<html>
	<!doctype html>
	<head>
		<meta charset='utf-8'><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<script  type='text/javascript' src='http://localhost/c24-7/wp-content/themes/clima/library/js/libs/jquery-1.7.1.min.js'></script>
	</head>
	<body>
		<?php //include_once('conectBD.php'); ?>
		<?php include_once('dataEmbed.php'); ?>

		<?php if( $lluvia == "s" ): ?>
			<div class="widget-lluvia">
				<div class="widget-lluvia header">
					<h1>Clima 24/7</h1>
				</div>
				<div class="pron-lluvias">
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
							<?php echo $lluvias['mad']; ?>
						</div>
						<div class="man">
							<?php echo $lluvias['man']; ?>
						</div>
						<div class="tar">
							<?php echo  $lluvias['tar']; ?>
						</div>
						<div class="noc">
							<?php echo $lluvias['noc']; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if( $temperatura == "s" ): ?>
			<div class="widget-temp">
				<div class="widget-temp header">
					<h1>Clima 24/7</h1>
				</div>
				<div class="pron-temp">
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
							<?php echo $temp['min']; ?>
						</div>
						<div class="max">
							<?php echo $temp['max']; ?>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</body>
</html>