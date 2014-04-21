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
