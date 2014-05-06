<?php
/*
Template Name: Clima a fondo OK
*/
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
           
           <div id="clima-fondo" class="menu-clima">
              <ul>
                <li class="item-clima"><a id="btnMostrarVisible" class="visible" href="#visible">Imagen de lo visible</a></li>
                <li class="item-clima"><a id="btnMostrarVapor" class="vapor" href="#vapor">Vapor de agua</a></li>
                <li class="item-clima"><a id="btnMostrarMapaPluviometrico" class="reporte-estaciones" href="#reporte-estaciones">Reporte extendido Estaciones Pluviometricas.</a></li>
              </ul>
            </div>

               <!-- suscripciones -->

                <?php get_sidebar();  ?>


            <!-- Últimas fotos -->
            
            <div id="ultimasFotos">
              <h2>Últimas fotos</h2>
              <!-- INSERTAR AQUÍ EL WIDGET PARA LAS ÚLTIMAS FOTOS SUBIDAS POR LOS USUARIOS --> 
            </div>
            
          </div>
          <div class="span9">

          
          <div id="visible" style="display:none" class="container-function-1"> 

              <?php viewConvenciones("A partir del espectro visible del satélite GOES se obtiene imágenes de la tierra y las nubes a través del reflejo de la luz solar. Por lo tanto, esta visión sólo es útil durante las horas diurnas.  Las nubes son registradas en color blanco o  gris claro y la tierra y el agua se presentan en colores oscuros."); ?>

              <div id="cont-visible" >
                <img src="http://www.areadigital.gov.co/ftpclima/sateliteinfrarrojo.gif" />
              </div> 
         </div>

          
            <div id="vapor" style="display:none" class="container-function-1">

              <?php viewConvenciones("El espectro de vapor de agua del satélite GOES permite identificar dónde se están formando sistemas convectivos y su desplazamiento o advección. Gracias a esta visión, se tiene un conocimiento previo de la magnitud que puede alcanzar un fenómeno

                                    meteorológico. La imagen de vapor de agua se construye con una composición de espectros del canal  infrarrojo de satélite."); ?>


              <div id="cont-vapor" >
                <img src="http://www.areadigital.gov.co/ftpclima/antioquiava4h.gif" />
              </div> 

            </div>


            <div id="reporte-estaciones" style="display:none" class="container-function-1"> </a>


               <?php viewConvenciones("Las estaciones pluviométricas del SIATA ubicadas en 
                diferentes sectores de los municipios del Valle de Aburrá registran minuto  a minuto las lluvias, es decir, la cantidad de agua que se ha recogido y procesado en una estación pluviométrica, en un periodo de 
                tiempo determinado. Recomendación de monitoreo por acumulado: 
                El sistema de alerta temprana de Medellín emite recomendaciones de observación y vigilancia para las cuencas hidrográficas que tengan acumulados superiores a 15 mm en un periodo de 3 horas de lluvia. El siguiente umbral es de 30 y 40 mm de acumulado.
                Recomendaciones por intensidad: El sistema de alerta temprana de Medellín emite recomendaciones de observación y vigilancia cuando los registros superan los umbrales de intensidad para periodos de 10 minutos superiores a 20mm/h, 50 mm/h o 100 mm/h."); ?>

                <div id="contenedor-radar" class="fondo-contenido-1">
                  <div id="mapa-pluviometrico">
                    <?php if(function_exists('cargarCsvPluviometricas')) { cargarCsvPluviometricas(); } ?>
                  </div>
                </div>
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
