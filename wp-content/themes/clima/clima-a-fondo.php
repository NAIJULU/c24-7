<?php
/*
Template Name: Clima a fondo
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
							
                             <div class="row-fluid clearfix">
								
                                <div class="span4">
                                 <!-- menu Clima a fondo -->
                                    <ul>
                                        <li id="btnMostrarTemperaturaAltura">Temperatura y Altura</li>
                                        <li id="btnMostrarImagenVisible">Imagen de lo visible</li>
                                        <li id="btnMostrarVaporAgua">Vapor de agua</li>
                                        <li id="btnMostrarVelocidadVientos">Velocidad de los vientos</li>
                                        <li id="btnMostrarReporteExtendido">Reporte extendido - Estaciones Pluviométricas</li>
                                    </ul>
                                    
                                    <!-- Suscripción -->
                                    <div id="suscripcion">
                                        Suscríbete a nuestro pronóstico diario
                                        <input class="suscribete" />
                                    </div>
								</div>
                            
                            <div class="span8">
   
							<div id="temperatura-altura">
                           		 <a href="#convencionesTemperaturaAltura">Ver convenciones</a>
                           	         <div class="convencionesTemperaturaAltura" style="display:none">
                                       <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM -->
                                    </div>
                                    
                                   <div id="contendorTemperaturaAltura">
                                   </div>
							</div>
                            
							<div id="imagen-visible" style="display:none">
                                <a href="#convencionesImagenVisible">Ver convenciones</a>
                                    <div class="convencionesImagenVisible" style="display:none">
                                       <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM -->
                                    </div>
                                    
                                    <div id="contendorImagenVisible">
                                   </div>
							</div>
                            
                            <div id="vapor-agua" style="display:none">
                                <a href="#convencionesVaporAgua">Ver convenciones</a>
                                    <div class="convencionesVaporAgua" style="display:none">
                                       <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM -->
                                    </div>
                                    
                                    <div id="contendorVaporAgua">
                                   </div>
							</div>
                            
                             <div id="velocidad-vientos" style="display:none">
                                <a href="#convencionesVelocidadVientos">Ver convenciones</a>
                                    <div class="convencionesVelocidadVientos" style="display:none">
                                       <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM -->
                                    </div>
                                    
                                    <div id="contendorVelocidadVientos">
                                   </div>
							</div>
                            
                             <div id="reporte-extendido" style="display:none">
                                <a href="#convencionesReporteExtendido">Ver convenciones</a>
                                    <div class="convencionesReporteExtendido" style="display:none">
                                       <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM -->
                                    </div>
                                    
                                    <div id="contendorReporteExtendido">
                                    	<div id="Reporte">
                                        	<!-- AQUÍ VA EL WIDGET DEL ÚLTIMO REPORTE -->
                                        </div>
                                        
                                        <div id="controles-reporte">
                                            <ul>
                                                <li id="btnMostrarCam1">Reporte últimos 3 minutos</li>
                                                <li id="btnMostrarCam2">Reporte últimos 30 minutos</li>
                                                <li id="btnMostrarCam3">Reporte últimas 3 horas</li>
                                            </ul>
										</div>	
                                   </div>
							</div>

							
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