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
	      <div class="page-header">
	          <h1>
	            <?php the_title(); ?>
	          </h1>
	      </div>
	     </header>
      <!-- end article header -->
      
      <section class="post_content">
        <div class="row-fluid clearfix">
          <div class="span3"> 
            <!-- menu Clima en vivo -->
	         <div class="menu-clima">
	            <ul>
	              <li><a id="btnMostrarRadarMeteorologico" class="radar" href="#">Radar Meteorológico</a></li>
	              <li><a id="btnMostrarPronosticoTemperatura" class="pronostico" href="#">Pronóstico - Temperatura actual, máxima y mínima</a></li>
	              <li><a id="btnMostrarVistaVivo" class="siata" href="#">Vista en vivo del SIATA</a></li>
	              <li><a id="btnMostrarSensores" class="sensores" href="#">Red de sensores de nivel de quebradas</a></li>
	            </ul>
            </div>

            <!-- Últimas fotos -->
            
            <div id="ultimasFotos">
              <h2>Últimas fotos</h2>
              <!-- INSERTAR AQUÍ EL WIDGET PARA LAS ÚLTIMAS FOTOS SUBIDAS POR LOS USUARIOS --> 
            </div>
            
            <!-- Suscripción -->
            <div id="suscripcion">
            	<img src="/c24-7/wp-content/themes/clima/images/rss-ico.png" class="icono-sus"></img>
            	<p>Suscríbete a nuestro <strong>pronóstico diario</strong></p>
             	<input class="suscribete" /><a href="#" class="enviar-suscripcion"><i class="icon-play icon-white"></i></a>
            </div>
          </div>
          <div class="span9">
            <div id="radar-meterologico"> <a class="convencion" href="#convencionesRadar">Ver convenciones</a>
              <div class="convencionesRadar" style="display:none"> 
                <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM --> 
              </div>
              <div id="contenedor-radar">
                <div id="mapa"></div>
              </div>
            </div>
            <div id="pronostico" style="display:none"> <a class="convencion" href="#convencionesPronostico">Ver convenciones</a>
              <div class="convencionesPronostico" style="display:none"> 
                <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM --> 
              </div>
				<div id="pronosticos" class="carousel slide"> 
				  <!-- Carousel items -->
				  <div id="ciudades" class="carousel-inner">
					<div class="active item">
					  <h2>Pronóstico de Medellín</h2>
					  <div class="row-fluid clearfix">
						<div class="span6">
						  <div class="row-fluid clearfix">
						  	<div class="span12"> 
			                	<span class="dia">Hoy</span> <span class="mes"><?php echo strftime("%B", $hoy); ?> </span> 
			                    <span class="dias"><?php echo strftime("%d", $hoy); ?> </span> 
			                </div>
							<div class="span12 lluvias">
			                	<span class="dia titulo2">Pronostico Lluvia</span>
					                <div class="row-fluid en-vivo">
										<div class="span4">
										  <div class="tempMax">Mañana</div>
										  <div class="numMax"><?php echo get_option('LluvManMedellin') ?></div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Tarde</div>
										   <div class="numMin"><?php echo get_option('LluvTarMedellin') ?></div>
						                </div>
										<div class="span4">
										  <div class="tempMin">Noche</div>
										   <div class="numMin"><?php echo get_option('LluvNocMedellin') ?></div>
						                </div>
						    </div>
				            </div>
			                <div class="span12 temp">
			                	<span class="dia titulo2">Pronostico TEmperatura</span>
				                <div class="row-fluid">
									<div class="span6">
									    <div class="tempMax">Máx</div>
									 	<div class="numMax"> <?php echo get_option('tempMaxMedellin'); ?>° </div>
					                </div>
									<div class="span6">
									  <div class="tempMin">Min</div>
									  <div class="numMin"><?php echo get_option('tempMinMedellin') ?>° </div>
					                </div>
					            </div>
					        </div>               
						  </div>
						</div>
						<div class="span6">
						  Acá viene el mapa
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManBarbosa') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarBarbosa') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocBarbosa') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManGirardota') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarGirardota') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocGirardota') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManCopacabana') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarCopacabana') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocCopacabana') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManCopacabana') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarCopacabana') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocCopacabana') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManEnvigado') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarEnvigado') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocEnvigado') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManSabaneta') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarSabaneta') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocSabaneta') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManLaEstrella') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarLaEstrella') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocLaEstrella') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManItagui') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarItagui') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocItagui') ?></div>
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
							<div class="span3">
			                	<span class="dia">Pronostico Lluvia</span>
			                </div>
							<div class="span3">
							  <div class="tempMax">Mañana</div>
							  <div class="numMax"><?php echo get_option('LluvManCaldas') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Tarde</div>
							   <div class="numMin"><?php echo get_option('LluvTarCaldas') ?></div>
			                </div>
							<div class="span3">
							  <div class="tempMin">Noche</div>
							   <div class="numMin"><?php echo get_option('LluvNocCaldas') ?></div>
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
            <div id="vista-vivo" style="display:none"> <a class="convencion" href="#convencionesVistaVivo">Ver convenciones</a>
              <div class="convencionesVistaVivo" style="display:none"> 
                <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM --> 
              </div>
              <div id="vivo-camara1" class="container-vivo">
                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_86_TORRESIATA_nororiente.jpg" alt="Torre SIATA Nororiente"/> </div>
                <div class="description">
                  <h4>Vista Nororiente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>
              <div id="vivo-camara2" class="container-vivo" style="display:none">
                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_82_TORRESIATA_suroriente.jpg" alt="Torre SIATA Suroriente"/> </div>
                <div class="description">
                  <h4>Vista Suroriente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>
              <div id="vivo-camara3" class="container-vivo" style="display:none">
                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_81_TORRESIATA_oriente.jpg" alt="Torre SIATA Oriente"/> </div>
                <div class="description">
                  <h4>Vista Oriente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>
              <div id="vivo-camara4" class="container-vivo" style="display:none">
                <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_89_TORRESIATA_occidente.jpg" alt="Torre SIATA Occidente"/> </div>
                <div class="description">
                  <h4>VistaOccidente - Torre Siata</h4>
                  <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                </div>
              </div>
              <div id="controles-vivo">
                <ul>
                  <li>
                  	<a id="btnMostrarCam1" href="#" class="thumb-camara">
                  		<img src="">
                  		<p>Noroccidente1</p>
                  	</a>
                  </li>
                  <li>
					<a id="btnMostrarCam2" href="#" class="thumb-camara">
                  		<img src="">
                  		<p>Noroccidente2</p>
                  	</a>
                  </li>
                  <li>
                  	<a id="btnMostrarCam3" href="#" class="thumb-camara">
                  		<img src="">
                  		<p>Noroccidente3</p>
                  	</a>
                  </li>
                  <li>
                  	<a id="btnMostrarCam4" href="#" class="thumb-camara">
                  		<img src="">
                  		<p>Noroccidente4</p>
                  	</a>
                  </li>
                </ul>
              </div>
            </div>
            <div id="sensores" style="display:none"> <a class="convencion" href="#convencionesSensores">Ver convenciones</a>
              <div class="convencionesSensores" style="display:none"> 
                <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM --> 
              </div>
              <h1>Sensores de Nivel</h1>
            </div>
          </div>
        </div>
        <?php the_content(); ?>
      </section>
      <!-- end article section -->
      
      <footer>
        <p class="clearfix">
          <?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?>
        </p>
      </footer>
      <!-- end article footer --> 
      
    </article>
    <!-- end article -->
    
    <?php comments_template(); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <article id="post-not-found">
      <header>
        <h1>
          <?php _e("Not Found", "bonestheme"); ?>
        </h1>
      </header>
      <section class="post_content">
        <p>
          <?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?>
        </p>
      </section>
      <footer> </footer>
    </article>
    <?php endif; ?>
  </div>
  <!-- end #main -->
</div>
<!-- end #content -->

<?php get_footer(); ?>
