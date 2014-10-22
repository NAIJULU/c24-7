<?php
/*
Template Name: widget
*/
get_header(); 
?>

<div id="content" class="clearfix row-fluid">
  <div id="widget" class="span12 clearfix" role="main">
  	<article class="p-lluvia">
  		<header>
  			<div id="img-encabezado">
  				<img src="images/logoClima.png" alt="clima 24/7">
  			</div>
  		</header>
  		<section>
  			<div class="enc-ciudad">
  				<div class="enc enc-ciudad-cont">
  					<h3>Miercoles 25 de Julio</h3>
  					<h1>Copacabana</h1>
  				</div>
  			</div>
  			<div class="body-ciudad">
  				<div class="span12">
  					<div id="enc-lluvia" class="enc span6">
  						<h3>Pronostico de lluvias</h3>
  					</div>
  					<div id="enc-temp" class="enc span6">
  						<h3>pronostico de temperatura</h3>
  					</div>
  				</div>

  				<div class="span12">
  					<div class="det span6">
  						<span>Madrugada</span>
  					</div>
  					<div class="det span6">
  						<span>30%</span>
  					</div>
  				</div>

  				<div class="span12">
  					<div class="det span6">
  						<span>Madrugada</span>
  					</div>
  					<div class="det span6">
  						<span>30%</span>
  					</div>
  				</div>

  				<div class="span12">
  					<div class="det span6">
  						<span>Tarde</span>
  					</div>
  					<div class="det span6">
  						<span>30%</span>
  					</div>
  				</div>

  				<div class="span12">
  					<div class="det span12">
  						<span>Noche</span>
  					</div>
  					<div class="det span12">
  						<span>30%</span>
  					</div>
  				</div>
  			</div>
  		</section>
  		<footer class="span12">
  			<div class="more-info">
  				<a href="http://www.clima247.gov.co">¿Quieres conocer mas sobre el clima?</a>
  			</div>
  		</footer>
  	</article>

  </div> <!-- end main -->
</div><!-- end content -->
<?php get_footer(); ?>