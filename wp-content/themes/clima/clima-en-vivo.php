<?php
/*
Template Name: Clima en Vivo
*/
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
							
                            <div>
   						     <!-- menu Clima en vivo -->
                                <ul>
                                    <li id="btnMostrarRadarMeteorologico">Radar Meteorológico</li>
                                    <li id="btnMostrarPronosticoTemperatura">Pronóstico - Temperatura actual, máxima y mínima</li>
                                    <li id="btnMostrarVistaVivo">Vista en vivo del SIATA</li>
                                    <li id="btnMostrarSensores">Red de sensores de nivel de quebradas</li>
                                </ul>
                                
                                <!-- Últimas fotos -->
                                
                                <div id="ultimasFotos">
                                    <h2>Últimas fotos</h2>
                                    <!-- INSERTAR AQUÍ EL WIDGET PARA LAS ÚLTIMAS FOTOS SUBIDAS POR LOS USUARIOS -->
                                </div>
                                
                                <!-- Suscripción -->
                                <div id="suscripcion">
                                    Suscríbete a nuestro pronóstico diario
                                    <input class="suscribete" />
                                </div>
							</div>
                            
                            <div>
   
							<div id="radar-meterologico">
								<div id="contenedor-radar">
									<div id="mapa"></div>
								</div>
							</div>
                            
							<div id="pronostico" style="display:none">
								<div id="pronosticos" class="carousel slide"> 
									  <!-- Carousel items -->
									  <div id="ciudades" class="carousel-inner">
										<div class="item active">
										  <h2>Pronóstico de Medellín</h2>
										  <div class="row-fluid clearfix">
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4"> 
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  1° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  2° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  3° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  4° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  5° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  6° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  7° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  8° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  9° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  10° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  11° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  12° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  13° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  14° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  15° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  16° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  17° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  18° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  19° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  20° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  21° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  22° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  23° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  24° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  25° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  26° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  27° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  28° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  29° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  30° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  31° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  32° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  33° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  34° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  35° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  36° 
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
								                	<span class="dia">Hoy</span> <span class="mes">octubre </span> 
								                    <span class="dias">13 </span> 
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  37° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  38° 
								                </div>
											  </div>
											</div>
											<div class="span6">
											  <div class="row-fluid clearfix">
												<div class="span4">
								                	<span class="dia">Mañana</span> <span class="mes">octubre</span> 
								                    <span class="dias">14</span>
								                </div>
												<div class="span4">
												  <div>Máx</div>
												  39° 
								                </div>
												<div class="span4">
												  <div>Min</div>
												  40° 
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