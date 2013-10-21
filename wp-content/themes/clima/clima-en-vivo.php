<?php
/*
Template Name: Clima en Vivo
*/
$hoy = strtotime(date('Y-m-d'));
$manana = strtotime(date('Y-m-d').' +1 day');   
?>
<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<ul>
								<li id="btnMostrarRadarMeteorologico">Radar Meteorológico</li>
								<li id="btnMostrarPronosticoTemperatura">Pronóstico - Temperatura actual, máxima y mínima</li>
								<li id="btnMostrarVistaVivo">Vista en vivo del SIATA</li>
								<li id="btnMostrarSensores">Red de sensores de nivel de quebradas</li>
							</ul>
							<div id="radar-meterologico">
								<div id="contenedor-radar">
									<div id="mapa"></div>
								</div>
							</div>
							<div id="pronosticos" class="carousel slide"> 
							  <!-- Carousel items -->
							  <div id="ciudades" class="carousel-inner">
								<div class="active item">
								  <h2>Pronóstico de Medellín</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										    <div class="tempMax">Máx</div>
										 	<div class="numMax"> <?php echo get_option('tempMaxMedellin'); ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"><?php echo get_option('tempMinMedellin') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										  <div class="numMax"><?php echo get_option('tempMaxMedellinMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinMedellinMa') ?>° </div>
						                  </div>
									  </div>
									</div>
								  </div>
								</div>						        
						        
								<div class="item">
								  <h2>Pronóstico de Barbosa</h2>
						          <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxBarbosa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"> <?php echo get_option('tempMinBarbosa') ?>°</div> 
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxBarbosaMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinBarbosaMa') ?>°</div>
						                  </div>
									  </div>
									</div>
								  </div>						          
						       </div>   
								 
								<div class="item">
								  <h2>Pronóstico de Girardota</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										  <div class="numMax"><?php echo get_option('tempMaxGirardota') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"> <?php echo get_option('tempMinGirardota') ?>°</div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxGirardotaMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinGirardotaMa') ?>°</div> 
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>
						          
						          <div class="item">
								  <h2>Pronóstico de Copacabana</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">

										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxCopacabana') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"><?php echo get_option('tempMinCopacabana') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										  <div class="numMax"><?php echo get_option('tempMaxCopacabanaMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinCopacabanaMa') ?>° </div>
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>
						          
						          <div class="item">
								  <h2>Pronóstico de Bello</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxBello') ?>°</div> 
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinBello') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxBelloMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinBelloMa') ?>° </div>
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>
						          
						          <div class="item">
								  <h2>Pronóstico de Envigado</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										  <div class="numMax"><?php echo get_option('tempMaxEnvigado') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"> <?php echo get_option('tempMinEnvigado') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxEnvigadoMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinEnvigadoMa') ?>°</div> 
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>
						          
						          <div class="item">
								  <h2>Pronóstico de Sabaneta</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxSabaneta') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"> <?php echo get_option('tempMinSabaneta') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxSabanetaMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"><?php echo get_option('tempMinSabanetaMa') ?>° </div>
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>
						          
						          <div class="item">
								  <h2>Pronóstico de La Estrella</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxLaEstrella') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"> <?php echo get_option('tempMinLaEstrella') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxLaEstrellaMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"> <?php echo get_option('tempMinLaEstrellaMa') ?>° </div>
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>
						          
						          <div class="item">
								  <h2>Pronóstico de Itagui</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxItagui') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										   <div class="numMin"><?php echo get_option('tempMinItagui') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										  <div class="numMax"><?php echo get_option('tempMaxItaguiMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										  <div class="numMin"><?php echo get_option('tempMinItaguiMa') ?>° </div>
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>
						          
						          <div class="item">
								  <h2>Pronóstico de Caldas</h2>
								  <div class="row-fluid clearfix">
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4"> 
						                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
						                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxCaldas') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										 <div class="numMin"> <?php echo get_option('tempMinCaldas') ?>° </div>
						                </div>
									  </div>
									</div>
									<div class="span6">
									  <div class="row-fluid clearfix">
										<div class="span4">
						                	<span class="dia">Mañana</span> <span class="mes"><?php echo strftime("%B", $manana); ?></span> 
						                    <span class="dias"><?php echo strftime("%d", $manana); ?></span>
						                </div>
										<div class="span4">
										  <div class="tempMax">Máx</div>
										 <div class="numMax"> <?php echo get_option('tempMaxCaldasMa') ?>° </div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Min</div>
										 <div class="numMin"> <?php echo get_option('tempMinCaldasMa') ?>° </div>
						                  </div>
									  </div>
									</div>
								  </div>
						          </div>				         

							  </div>
							  <ol class="ciudades">
								<li data-target="#pronosticos" data-slide-to="0" class="active">Medellín</li>
								<li data-target="#pronosticos" data-slide-to="1">Barbosa</li>
								<li data-target="#pronosticos" data-slide-to="2">Girardota</li>
								<li data-target="#pronosticos" data-slide-to="3">Copacabana</li>
								<li data-target="#pronosticos" data-slide-to="4">Bello</li>
								<li data-target="#pronosticos" data-slide-to="5">Envigado</li>
								<li data-target="#pronosticos" data-slide-to="6">Sabaneta</li>
								<li data-target="#pronosticos" data-slide-to="7">La Estrella</li>
								<li data-target="#pronosticos" data-slide-to="8">Itagüi</li>
								<li data-target="#pronosticos" data-slide-to="9">Caldas</li>
							  </ol>
							</div>
							<div id="vista-vivo" style="display:none">
								<div id="vivo-camara1" class="container-vivo">
									<div class="img-vivo">
										<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_86_TORRESIATA_nororiente.jpg" alt="Torre SIATA Nororiente"/>
									</div>
									<div class="description">
										<h4>Cámara hacia el Nororiente</h4>
										<p><strong>Lugares que cubre:</strong> Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
									</div>
								</div>
								<div id="vivo-camara2" class="container-vivo" style="display:none">
									<div class="img-vivo">
										<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_82_TORRESIATA_suroriente.jpg" alt="Torre SIATA Suroriente"/>
									</div>
									<div class="description">
										<h4>Cámara hacia el Suroriente</h4>
										<p><strong>Lugares que cubre:</strong> Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>									
									</div>
								</div>
								<div id="vivo-camara3" class="container-vivo" style="display:none">
									<div class="img-vivo">
										<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_81_TORRESIATA_oriente.jpg" alt="Torre SIATA Oriente"/>						
									</div>
									<div class="description">
										<h4>Cámara hacia el Oriente</h4>
										<p><strong>Lugares que cubre:</strong> Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>									
									</div>
								</div>
								<div id="vivo-camara4" class="container-vivo" style="display:none">
									<div class="img-vivo">
										<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_89_TORRESIATA_occidente.jpg" alt="Torre SIATA Occidente"/>									
									</div>
									<div class="description">
										<h4>Cámara hacia el Occidente</h4>
										<p><strong>Lugares que cubre:</strong> Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>									
									</div>
								</div>	
								<div id="controles-vivo">
									<ul>
										<li id="btnMostrarCam1">Cámara 1</li>
										<li id="btnMostrarCam2">Cámara 2</li>
										<li id="btnMostrarCam3">Cámara 3</li>
										<li id="btnMostrarCam4">Cámara 4</li>
									</ul>
								</div>			
							</div>
							<div id="sensores" style="display:none">
								<h1>Sensores de Nivel</h1>
							</div>
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>