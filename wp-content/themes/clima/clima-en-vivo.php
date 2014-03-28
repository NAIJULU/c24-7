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
            <div id="radar-meterologico" class="container-function-1"><!-- <a class="convencion" href="#convencionesRadar">Ver convenciones</a>
                <div class="convencionesRadar" style="display:none"> 
                  
                </div>
              -->

               <?php viewConvenciones("Este es un mapa climatologico que muestra en donde estan las mayores concentraciones de lluvia, ambar, queso rayado, se puede divisar los diferentes tipo de aguapanela") ?>

                <div id="contenedor-radar" class="fondo-contenido-1">
                  <div id="mapa"></div>
                </div>
            </div>
            <div id="pronostico" style="display:none"> <a class="convencion" href="#convencionesPronostico">Ver convenciones</a>
              <div class="convencionesPronostico" style="display:none"> 
                <!-- AQUÍ VAN LAS CONVENCIONES DE ESTE ITEM --> 
              </div>
				<div id="pronosticos" class="carousel slide"> 
				  <!-- Carousel items -->
				  			<!-- para mas info consulte a functions.php -->
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('pronostico-widget') ) : ?>

			<?php endif; ?>

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
    
    <?php //comments_template(); ?>
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
