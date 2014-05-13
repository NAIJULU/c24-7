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
    <?php if(function_exists('cargarCsvNiveles')) { cargarCsvNiveles(); } ?>
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
  
      <section id="clima-vivo" class="post_content">
        <div class="row-fluid clearfix">
          <div class="span3"> 
            <!-- menu Clima en vivo -->

	         <div id="clima-vivo" class="menu-clima">
	            <ul>
	              <li class="item-clima"><a id="btnMostrarRadarMeteorologico" class="radar" href="#radar-meterologico">Radar Meteorológico</a></li>
	              <li class="item-clima"><a id="btnMostrarPronosticoTemperatura" class="pronostico" href="#pronostico">Pronóstico - Temperatura actual, máxima y mínima</a></li>
	              <li class="item-clima"><a id="btnMostrarVistaVivo" class="siata" href="#vista-vivo">Vista en vivo del SIATA</a></li>
	              <li class="item-clima"><a id="btnMostrarSensores" class="sensores" href="#sensores">Red de sensores de nivel de quebradas</a></li>
                <li class="item-clima"><a id="btnMostrarTemperaturaActual" class="sensores" href="#temperatura-actual">Temperatura Actual</a></li>
	            </ul>
            </div>
               <!-- suscripciones -->
              <?php get_sidebar();  ?>

          </div>

          <div class="span9">

              <div id="radar-meterologico" class="container-function-1">
                   <?php viewConvenciones("Un radar meteorológico permite conocer los sectores donde ocurren o han ocurrido precipitaciones en las últimas horas. En este caso, el radar presenta imágenes de las últimas 6 horas y la imagen actual. ¿Cómo funciona? Un radar es un sensor remoto, que emite una señal de microondas que llega hasta las nubes y se refleja en las gotas de agua. La cantidad y el tamaño de las gotas de agua presentes  en las nubes se registra en la imagen y se denomina “reflectividad”. El radar meteorológico, ubicado en Santa  Elena, que sirve para el monitoreo del Valle de Aburrá, permite conocer la localización y movimiento de las lluvias, el lugar y hora  donde ocurren en la subregión. ¿Cómo interpretar los colores de la imagen del radar? En la escala de colores, el azul y verde  representan baja reflectividad, lo que se interpreta como baja intensidad de  precipitaciones. Los colores cálidos, como el amarillo, naranja y rojo indican lluvias de  moderada a alta intensidad. El magenta indica lluvias muy intensas, que incluso pueden traer  granizo."); ?>
                    <div id="contenedor-radar" class="fondo-contenido-1">
                      <div id="mapa"></div>
                    </div>
              </div>

               <div id="pronostico" style="display:none" class="container-function-1">
                    <?php viewConvenciones("Pronóstico del estado del tiempo que presenta el SIATA, en términos de probabilidad de  que se presenten precipitaciones, para los municipios del Valle de Aburrá.  Esta información se actualiza permanentemente con ayuda de las redes de  monitoreo en tiempo real. ¿Cómo interpretar la probabilidad de lluvias? Probabilidad baja de lluvias: Inferior al 30% de  ue ocurran precipitaciones.  Probabilidad media de lluvias: 40% a 60% de  probabilidad de que ocurran precipitaciones.  Probabilidad alta de lluvias: Probabilidad  mayor al 60% de que ocurran precipitaciones."); ?>
      				      <div id="pronosticos" class="carousel slide"> 
        				          <!-- Carousel items -->
        				  			<!-- para mas info consulte a functions.php -->
          		         	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('pronostico-widget') ) : ?>
                       <?php endif; ?>
                    </div>
              </div>
               <div id="vista-vivo" style="display:none">
                  <!--  <div class="convencionesVistaVivo" style="display:none"> 
                    </div>
                  -->
                  <div id="vivo-camara1" class="container-vivo">
                      <?php viewConvenciones("La vista en vivo de las cámaras ubicadas desde la torre SIATA y el Radar ubicado en Santa Elena permiten apreciar la formación y  el desplazamiento de las nubes en gran parte  de los sectores del Valle de Aburrá. Desde la Torre SIATA, ubicada en el sector  Estadio Atanasio Girardot, se aprecia la  vista hacia el oriente, suroriente, nororiente, noroccidente y occidente de algunos  municipios del Valle de Aburrá. Y gracias a las cámaras ubicadas en el Radar  en Santa Elena se observa la vista de los  sectores Noroccidente y Suroccidente de  Medellín."); ?>
                    <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_86_TORRESIATA_nororiente.jpg" alt="Torre SIATA Nororiente"/> </div>
                    <div class="description">
                      <h4>Vista Nororiente - Torre Siata</h4>
                      <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                    </div>
                  </div>
                  <div id="vivo-camara2" class="container-vivo" style="display:none">
                   <?php viewConvenciones("La vista en vivo de las cámaras ubicadas desde la torre SIATA y el Radar ubicado en Santa Elena permiten apreciar la formación y  el desplazamiento de las nubes en gran parte  de los sectores del Valle de Aburrá. Desde la Torre SIATA, ubicada en el sector  Estadio Atanasio Girardot, se aprecia la  vista hacia el oriente, suroriente, nororiente, noroccidente y occidente de algunos  municipios del Valle de Aburrá. Y gracias a las cámaras ubicadas en el Radar  en Santa Elena se observa la vista de los  sectores Noroccidente y Suroccidente de  Medellín."); ?>
                    <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_82_TORRESIATA_suroriente.jpg" alt="Torre SIATA Suroriente"/> </div>
                    <div class="description">
                      <h4>Vista Suroriente - Torre Siata</h4>
                      <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                    </div>
                  </div>

                  <div id="vivo-camara3" class="container-vivo" style="display:none">
                   <?php viewConvenciones("La vista en vivo de las cámaras ubicadas desde la torre SIATA y el Radar ubicado en Santa Elena permiten apreciar la formación y  el desplazamiento de las nubes en gran parte  de los sectores del Valle de Aburrá. Desde la Torre SIATA, ubicada en el sector  Estadio Atanasio Girardot, se aprecia la  vista hacia el oriente, suroriente, nororiente, noroccidente y occidente de algunos  municipios del Valle de Aburrá. Y gracias a las cámaras ubicadas en el Radar  en Santa Elena se observa la vista de los  sectores Noroccidente y Suroccidente de  Medellín."); ?>
                    <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_81_TORRESIATA_oriente.jpg" alt="Torre SIATA Oriente"/> </div>
                    <div class="description">
                      <h4>Vista Oriente - Torre Siata</h4>
                      <p>Poblado, Envigado, Itagüi, Sabaneta, Caldas, La Estrella.</p>
                    </div>
                  </div>
                  <div id="vivo-camara4" class="container-vivo" style="display:none">
                   <?php viewConvenciones("La vista en vivo de las cámaras ubicadas desde la torre SIATA y el Radar ubicado en Santa Elena permiten apreciar la formación y  el desplazamiento de las nubes en gran parte  de los sectores del Valle de Aburrá. Desde la Torre SIATA, ubicada en el sector Estadio Atanasio Girardot, se aprecia la  vista hacia el oriente, suroriente, nororiente, noroccidente y occidente de algunos  municipios del Valle de Aburrá.Y gracias a las cámaras ubicadas en el Radar  en Santa Elena se observa la vista de los  sectores Noroccidente y Suroccidente de  Medellín."); ?>
                    <div class="img-vivo"> <img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_89_TORRESIATA_occidente.jpg" alt="Torre SIATA Occidente"/> </div>
                    <div class="description">
                    </div>
                  </div>
                  <div id="controles-vivo">
                    <ul>
                      <li>
                      	<a id="btnMostrarCam1" href="vivo-camara1" class="thumb-camara">
                      		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_86_TORRESIATA_nororiente.jpg" alt="Torre SIATA Nororiente" />
                      		<p>Noroccidente1</p>
                      	</a>
                      </li>
                      <li>
    				        	 <a id="btnMostrarCam2" href="vivo-camara2" class="thumb-camara">
                      		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_82_TORRESIATA_suroriente.jpg" alt="Torre SIATA Suroriente" />
                      		<p>Noroccidente2</p>
                      	</a>
                      </li>
                      <li>
                      	<a id="btnMostrarCam3" href="vivo-camara3" class="thumb-camara">
                      		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_81_TORRESIATA_oriente.jpg" alt="Torre SIATA Oriente" />
                      		<p>Noroccidente3</p>
                      	</a>
                      </li>
                      <li>
                      	<a id="btnMostrarCam4" href="vivo-camara4" class="thumb-camara">
                      		<img src="http://www.siata.gov.co/ultimasFotosCamaras/ultimacam_89_TORRESIATA_occidente.jpg" alt="Torre SIATA Occidente" />
                      		<p>Noroccidente4</p>
                      	</a>
                      </li>
                    </ul>
                  </div>
                </div>
               
                <div id="sensores" style="display:none" class="container-function-1">
                  <?php viewConvenciones("El monitoreo de los ríos y quebradas en el Valle de Aburrá se realiza gracias a las estaciones de nivel del SIATA. A través de  esta herramienta se puede conocer cuál es el nivel y porcentaje de la canalización que está siendo ocupada por agua. La canalización es la parte que se encuentra en cemento y representa el 100 % de  capacidad en zonas canalizadas.  Se recomienda la observación y vigilancia por parte de los habitantes que habitan los sectores cercanos a las estaciones de las quebradas en monitoreo y avisar oportunamente a las autoridades en la línea  de emergencia 123, cualquier obstrucción en el cauce o eventualidad en el nivel de las quebradas."); ?>
                  <?php $cuencasList = getCuencas(); ?>
                
                  <div id="cont-sensores">

                    <div id="body-cuenca"  class="span7">
                      <div id="body-fill">
                        <img  id="cuenca-sup" src="<?php echo bloginfo('wpurl').'/wp-content/themes/clima/images/sup.png' ?>" />
                      </div>
                      <div id="body-cuenca-img">
                          <img  id="cuenca-inf" src="<?php echo bloginfo('wpurl').'/wp-content/themes/clima/images/fill.png' ?>" />
                      </div>
                       <div id="body-cuenca-izq">
                          
                      </div>
                      <div id="body-cuenca-der">
                          
                      </div>
                    </div>
                    
                    <div id="cuenca-info" class="span4">
                      <div id="cuenca-info-inf" class="form-horizontal">
                          <div id="cuenca-info-s"class="control-group">
                              <select id="s_cuenca" placeholder="Seleccione Quebrada">
                                <option selected></option>
                                <?php echo $cuencasList ?>
                             </select>
                          </div>
                          <div id="cuenca-info-sup" class="control-group">
                              
                          </div>
                          <div id="cuenca-info-photo" class="control-group">
                              
                          </div>
                      </div>
                    </div>

                  </div>

                </div>
              <div id="temperatura-actual" style="display:none" class="container-function-1"> 
                  <?php viewConvenciones("Registro actual de los valores de temperatura de las estaciones meteorológicas del SIATA, ubicadas en diferentes sectores de los municipios del Valle de Aburrá."); ?>
                  <div id="temperatura" >
                    <img src="http://www.areadigital.gov.co/ftpclima/tempamva.jpg" />
                  </div> 
             </div>
          </div>
        </div>
        <?php //the_content(); ?>
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
